<div class="flex flex-wrap gap-2 mb-6">
    <a
        href="{{ \App\Filament\Resources\BoardOfGovernors\Pages\ListBoardOfGovernors::getUrl() }}"
        @class([
            'fi-btn fi-btn-color-gray fi-btn-size-md',
            'fi-color-primary' => request()->routeIs('filament.admin.resources.board-of-governors.*'),
        ])
    >
        Board of Governors
    </a>

    <a
        href="{{ \App\Filament\Resources\Deans\Pages\ListDeans::getUrl() }}"
        @class([
            'fi-btn fi-btn-color-gray fi-btn-size-md',
            'fi-color-primary' => request()->routeIs('filament.admin.resources.deans.*'),
        ])
    >
        Deans
    </a>

    <a
        href="{{ \App\Filament\Resources\VisitingProfessors\Pages\ListVisitingProfessors::getUrl() }}"
        @class([
            'fi-btn fi-btn-color-gray fi-btn-size-md',
            'fi-color-primary' => request()->routeIs('filament.admin.resources.visiting-professors.*'),
        ])
    >
        Visiting Professors
    </a>
</div>
