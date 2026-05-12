<x-filament-panels::layout.base :livewire="$livewire">
    <x-slot name="head">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    </x-slot>

    {{ $slot }}
</x-filament-panels::layout.base>