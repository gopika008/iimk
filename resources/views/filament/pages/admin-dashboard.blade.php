<x-filament-panels::page>
@vite(['resources/css/filament\/admin/theme.css', 'resources/js/app.js'])
    <!-- CUSTOM APP HEADER (NOT FILAMENT STYLE) -->
    <div class="flex items-center justify-between mb-10">

        <div>
            <h1 class="text-4xl font-bold tracking-tight">
                Dashboard
            </h1>
            <p class="text-gray-500 mt-1">
                Institution Control Center
            </p>
        </div>

        <div class="flex gap-3">
            <button class="px-4 py-2 bg-black text-white rounded-xl">
                + Create
            </button>
            <button class="px-4 py-2 bg-gray-100 rounded-xl">
                Export
            </button>
        </div>

    </div>

    <!-- FLOATING KPI CARDS (NOT FILAMENT GRID) -->
    <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:20px;">

        <div style="padding:20px; background:#fff; border-radius:18px; box-shadow:0 10px 30px rgba(0,0,0,0.06);">
            <div style="color:#6b7280;">Users</div>
            <div style="font-size:28px; font-weight:700;">1,245</div>
        </div>

        <div style="padding:20px; background:#fff; border-radius:18px; box-shadow:0 10px 30px rgba(0,0,0,0.06);">
            <div style="color:#6b7280;">Faculty</div>
            <div style="font-size:28px; font-weight:700;">58</div>
        </div>

        <div style="padding:20px; background:#fff; border-radius:18px; box-shadow:0 10px 30px rgba(0,0,0,0.06);">
            <div style="color:#6b7280;">Events</div>
            <div style="font-size:28px; font-weight:700;">12</div>
        </div>

        <div style="padding:20px; background:#fff; border-radius:18px; box-shadow:0 10px 30px rgba(0,0,0,0.06);">
            <div style="color:#6b7280;">Growth</div>
            <div style="font-size:28px; font-weight:700; color:green;">+18%</div>
        </div>

    </div>

    <!-- MAIN GRID (CUSTOM LAYOUT, NOT FILAMENT) -->
    <div style="display:grid; grid-template-columns:2fr 1fr; gap:20px; margin-top:30px;">

        <!-- CHART AREA -->
        <div style="background:#fff; border-radius:20px; padding:20px; box-shadow:0 10px 30px rgba(0,0,0,0.06);">
            <h2 style="font-weight:600; margin-bottom:10px;">Analytics</h2>

            <div style="height:300px; display:flex; align-items:center; justify-content:center; color:#aaa;">
                REAL CHART WILL GO HERE
            </div>
        </div>

        <!-- ACTIVITY -->
        <div style="background:#fff; border-radius:20px; padding:20px; box-shadow:0 10px 30px rgba(0,0,0,0.06);">
            <h2 style="font-weight:600; margin-bottom:10px;">Activity</h2>

            <div style="display:flex; flex-direction:column; gap:10px; color:#666;">
                <div>✔ Faculty added</div>
                <div>✔ Event created</div>
                <div>✔ User registered</div>
                <div>✔ Report generated</div>
            </div>
        </div>

    </div>

</x-filament-panels::page>