<?php

namespace App\Livewire;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Members', '120')
                ->description('Total members')
                ->color('primary'),

            Stat::make('Faculty', '54')
                ->description('Faculty profiles')
                ->color('success'),

            Stat::make('Announcements', '18')
                ->description('Published announcements')
                ->color('warning'),
        ];
    }
}
