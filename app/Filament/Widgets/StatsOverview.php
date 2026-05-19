<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends Widget
{
    protected string $view = 'filament.widgets.stats-overview';
    //protected int|string|array $columnSpan = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Students', '2,451')
                ->description('Active students')
                ->color('primary'),

            Stat::make('Faculty', '145')
                ->description('Faculty members')
                ->color('success'),

            Stat::make('Programs', '32')
                ->description('Academic programs')
                ->color('warning'),
        ];
    }
}
