<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Faculty', 58),
            Stat::make('Students', 1245),
            Stat::make('Events', 12),
            Stat::make('Tenders', 14),
        ];
    }
}
