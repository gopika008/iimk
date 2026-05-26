<?php

namespace App\Imports;

use App\Models\StudentDirectory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;

class StudentDirectoryImport implements
    ToModel,
    WithHeadingRow,
    WithChunkReading,
    SkipsEmptyRows,
    ShouldQueue
{
    public function chunkSize(): int
    {
        return 50;
    }

  public function model(array $row)
{
    $data = [];

    foreach ($row as $key => $value) {

        // clean key
        $key = trim($key);

        // skip auto/system columns
        if (in_array(strtolower($key), [
            'id',
            'created_at',
            'updated_at',
        ])) {
            continue;
        }

        // convert empty values
        if ($value === null || $value === '') {

            switch ($key) {

                case 'status':
                    $value = null;
                    break;

                case 'current_organization':
                case 'designation':
                case 'photo':
                case 'last_qualification':
                    $value = '';
                    break;

                default:
                    $value = '';
                    break;
            }
        }

        // programme-based cleanup
        if (
            $key === 'status' &&
            ($row['programme'] ?? '') !== 'DPM'
        ) {
            $value = null;
        }

        if (
            in_array($key, [
                'current_organization',
                'designation'
            ]) &&
            !in_array(
                ($row['programme'] ?? ''),
                ['DPM-PT', 'PGP-BL']
            )
        ) {
            $value = '';
        }

        // clean spaces
        if (is_string($value)) {
            $value = trim($value);
        }

        $data[$key] = $value;
    }

    $data['created_at'] = now();
    $data['updated_at'] = now();

    return new StudentDirectory($data);
}
}
