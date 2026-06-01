<?php

namespace App\Imports;

use App\Models\StudentDirectory;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;

class StudentDirectoryImport implements
    ToModel,
    WithHeadingRow,
    WithChunkReading,
    SkipsEmptyRows
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

            // skip system fields
            if (in_array(strtolower($key), [
                'id',
                'created_at',
                'updated_at',
            ])) {
                continue;
            }

            // empty value handling
            if ($value === null || $value === '') {

                switch ($key) {

                    case 'programme_id':
                    case 'batch_id':
                        $value = null;
                        break;

                    case 'photo':
                    case 'designation':
                    case 'institution':
                    case 'current_organization':
                    case 'last_qualification':
                        $value = '';
                        break;

                    default:
                        $value = '';
                        break;
                }
            }

            // trim strings
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
