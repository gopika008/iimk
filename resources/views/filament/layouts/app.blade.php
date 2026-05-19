<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>

    @vite('resources/css/app.css')
    @filamentStyles
</head>

<body class="bg-[#f5f7fb]">

<div class="flex">

    <!-- CUSTOM SIDEBAR (GLOBAL) -->
    <aside class="w-64 h-screen bg-[#0a0f1c] text-white p-4">
        <div class="text-xl font-bold mb-6">
            Admin Panel
        </div>

        <nav class="space-y-2">
            <a href="/admin" class="block p-2 rounded hover:bg-white/10">Dashboard</a>
            <a href="/admin/members" class="block p-2 rounded hover:bg-white/10">Members</a>
            <a href="/admin/events" class="block p-2 rounded hover:bg-white/10">Events</a>
        </nav>
    </aside>

    <!-- MAIN AREA -->
    <div class="flex-1">

        <!-- CUSTOM TOPBAR (GLOBAL) -->
        <div class="h-16 bg-white border-b flex items-center justify-between px-6">
            <div class="font-semibold">
                @yield('title')
            </div>

            <div class="flex gap-3">
                <button class="px-4 py-2 bg-black text-white rounded-lg">
                    Action
                </button>
            </div>
        </div>

        <!-- FILAMENT CONTENT GOES HERE -->
        <main class="p-6">
            {{ $slot }}
        </main>

    </div>

</div>

@filamentScripts
</body>
</html>