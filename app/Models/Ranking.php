<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\RankingProgramme;
use App\Models\RankingValue;

class Ranking extends Model
{

    public function getRankings($type, $years)
    {
        $programmes = RankingProgramme::where('ranking_type', $type)
            ->where('status', 1)
            ->orderBy('sort_order', 'ASC')
            ->get()
            ->toArray();

        foreach ($programmes as &$programme) {

            $values = RankingValue::where('programme_id', $programme['id'])
                ->get()
                ->toArray();

            $programme['values'] = [];

            foreach ($values as $row) {

                $programme['values'][$row['ranking_year']][$row['rank_scope']] = [

                    'value' => $row['rank_value'],

                    'url' => $row['rank_url'] ?? '',

                ];
            }
        }

        return $programmes;
    }
}
