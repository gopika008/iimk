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

            $key = trim($key);

            // skip auto columns
            if (in_array(strtolower($key), [
                'id',
                'intautono',
                'created_at',
                'updated_at'
            ])) {
                continue;
            }

            // null handling
            if ($value === null || $value === '') {

                if (
                    str_starts_with(strtolower($key), 'int') ||
                    str_starts_with(strtolower($key), 'num') ||
                    strtolower($key) == 'sibling_id'
                ) {

                    $value = 0;

                } elseif (
                    str_starts_with(strtolower($key), 'dtm') ||
                    str_contains(strtolower($key), 'date')
                ) {

                    $value = now()->format('Y-m-d H:i:s');

                } else {

                    $value = '';
                }
            }

            // invalid mysql dates
            if (
                $value == '0000-00-00' ||
                $value == '0000-00-00 00:00:00'
            ) {

                $value = now()->format('Y-m-d H:i:s');
            }

            $data[$key] = $value;
        }

        $data['created_at'] = now();
        $data['updated_at'] = now();

        return new StudentDirectory($data);
    }
}
