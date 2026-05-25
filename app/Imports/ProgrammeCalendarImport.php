<?php

namespace App\Imports;

use App\Models\Faculty;
use App\Models\ProgrammeCalendar;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ProgrammeCalendarImport implements ToCollection
{
    protected static bool $shouldRegisterNavigation = false;
    public function collection(Collection $rows)
    {
        unset($rows[0]); // remove header row

        foreach ($rows as $row) {

            $fee = [];

            if ($row[7] === 'residential') {

                $fee = [
                    'residential_fee' => $row[8],
                    'non_residential_fee' => $row[9],
                    'gst_applicable' => (bool) $row[11],
                ];

            } else {

                $fee = [
                    'fee' => $row[10],
                    'gst_applicable' => (bool) $row[11],
                ];
            }

            $programme = ProgrammeCalendar::create([

                'calendar_type' => $row[0],
                'academic_year' => $row[1],
                'programme_title' => $row[2],
                'programme_date' => $row[4],
                'venue' => $row[5],
                'registration_link' => $row[6],
                'fee_type' => $row[7],
                'fee' => $fee,

            ]);

            // faculties
            $facultyIds = explode(',', $row[3]);

            // validate faculty ids
            $validFacultyIds = Faculty::whereIn('id', $facultyIds)
                ->pluck('id')
                ->toArray();

            // sync only valid ids
            $programme->faculties()->sync($validFacultyIds);
        }
    }
}
