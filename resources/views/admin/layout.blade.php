<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background: #f5f7fb;
        }
    </style>
</head>

<body class="flex">

    <!-- SIDEBAR -->
    <aside class="w-64 h-screen bg-[#0a0f1c] text-white p-4">
        <h1 class="text-xl font-bold mb-6">My Admin</h1>

        <nav class="space-y-2">
            <a href="/admin" class="block p-2 rounded hover:bg-white/10">Dashboard</a>
            <a href="/admin/members" class="block p-2 rounded hover:bg-white/10">Members</a>
            <a href="/admin/events" class="block p-2 rounded hover:bg-white/10">Events</a>
        </nav>
    </aside>

    <!-- MAIN -->
    <div class="flex-1">

        <!-- TOP BAR -->
        <div class="h-16 bg-white border-b flex items-center justify-between px-6">
            <h2 class="font-semibold">Dashboard</h2>

            <div class="flex gap-3">
                <button class="px-4 py-2 bg-black text-white rounded-lg">
                    Create
                </button>
            </div>
        </div>

        <!-- CONTENT -->
        <main class="p-6">
            @yield('content')
        </main>

    </div>

</body>
</html>