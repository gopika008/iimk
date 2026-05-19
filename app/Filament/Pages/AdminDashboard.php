<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;
use BackedEnum;

class AdminDashboard extends Page
{
    protected static BackedEnum|string|null $navigationIcon = Heroicon::Home;

    public function getView(): string
    {
        return 'filament.pages.admin-dashboard';
    }
}