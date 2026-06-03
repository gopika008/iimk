<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;
use BackedEnum;

use App\Models\Faculty;
use App\Models\StudentDirectory;
use App\Models\Event;
use App\Models\Tender;
use App\Models\MediaCoverage;

class AdminDashboard extends Page
{
    protected static BackedEnum|string|null $navigationIcon = Heroicon::Home;

    public function getView(): string
    {
        return 'filament.pages.admin-dashboard';
    }
    public array $stats = [];

    public function mount(): void
    {
        $this->stats = [
            'faculty' => Faculty::count(),
            'students' => StudentDirectory::count(),
            'events' => Event::count(),
            'tenders' => Tender::count(),
        ];
    }

    public function latestContent()
    {
        return collect()
            ->merge(
                MediaCoverage::latest()->take(3)->get()->map(fn ($item) => [
                    'title' => $item->title,
                    'type' => 'Media Coverage',
                    'date' => $item->created_at,
                ])
            )
            ->merge(
                Event::latest()->take(3)->get()->map(fn ($item) => [
                    'title' => $item->title,
                    'type' => 'Event',
                    'date' => $item->created_at,
                ])
            )
            ->merge(
                Tender::latest()->take(3)->get()->map(fn ($item) => [
                    'title' => $item->title,
                    'type' => 'Tender',
                    'date' => $item->created_at,
                ])
            )
            ->sortByDesc('date')
            ->take(5);
    }
}
