<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Programme;
use App\Models\Batch;

class StudentDirectory extends Model
{
    protected $table = 'student_directories';

    protected $guarded = [];

    public $timestamps = true;

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function programme()
    {
        return $this->belongsTo(
            Programme::class,
            'programme_id'
        );
    }

    public function batch()
    {
        return $this->belongsTo(
            Batch::class,
            'batch_id'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | Auto Roll Number
    |--------------------------------------------------------------------------
    */

    protected static function booted()
    {
        static::creating(function ($student) {

            // Skip if already manually entered
            if ($student->roll_no) {
                return;
            }

            $batch = Batch::find($student->batch_id);

            if (!$batch) {
                return;
            }

            /*
            Example Batch:
            PGP 29 (2025 - 2027)

            Extract 29
            */

            preg_match('/(\d+)/', $batch->name, $matches);

            $batchNumber = $matches[1] ?? '00';

            /*
            Programme Short Code
            */

            $programme = Programme::find($student->programme_id);

            $programmeCode = match (true) {

                str_contains($programme?->name, 'Finance') => 'PGPFIN',

                str_contains($programme?->name, 'Business Leadership') => 'PGPBL',

                str_contains($programme?->name, 'Liberal') => 'PGPLSM',

                str_contains($programme?->name, 'Doctoral') => 'PHD',

                str_contains($programme?->name, 'BMS') => 'BMS',

                default => 'PGP',
            };

            /*
            Next Roll Number
            */

            $lastStudent = StudentDirectory::where(
                'batch_id',
                $student->batch_id
            )
                ->latest('id')
                ->first();

            $next = 1;

            if ($lastStudent && $lastStudent->roll_no) {

                $parts = explode('/', $lastStudent->roll_no);

                $next = intval($parts[2] ?? 0) + 1;
            }

            /*
            Final Format:
            PGP/29/001
            */

            $student->roll_no =
                $programmeCode .
                '/' .
                $batchNumber .
                '/' .
                str_pad($next, 3, '0', STR_PAD_LEFT);
        });
    }
}
