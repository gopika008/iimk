<x-filament-panels::page>

    <style>
        /* ========================================
   DASHBOARD
======================================== */

        .dashboard {
            display: flex;
            flex-direction: column;
            gap: 28px;
            padding-bottom: 20px;
        }

        /* ========================================
   HERO
======================================== */

        .hero {
            position: relative;
            overflow: hidden;

            background: linear-gradient(135deg,
                    #5441ab 0%,
                    #9ed0e4 40%,
                    #bde0fe 100%);

            border-radius: 32px;
            padding: 40px;

            backdrop-filter: blur(20px);

            box-shadow:
                0 10px 40px rgba(148, 163, 184, .12),
                0 20px 80px rgba(148, 163, 184, .10);
        }

        .hero::before {
            content: '';
            position: absolute;

            width: 320px;
            height: 320px;

            right: -120px;
            top: -120px;

            border-radius: 50%;

            background:
                radial-gradient(rgba(255, 255, 255, .5),
                    transparent);
        }

        .hero::after {
            content: '';
            position: absolute;

            width: 220px;
            height: 220px;

            left: -60px;
            bottom: -100px;

            border-radius: 50%;

            background:
                radial-gradient(rgba(255, 255, 255, .3),
                    transparent);
        }

        .hero-title {
            font-size: 36px;
            font-weight: 800;
            color: #ffffff;
            letter-spacing: -1px;
            margin: 0;
        }

        .hero-subtitle {
            margin-top: 10px;
            color: #ffffff;
            font-size: 15px;
            max-width: 700px;
            line-height: 1.7;
        }

        .hero-date {
            margin-top: 18px;
            display: inline-flex;
            align-items: center;
            gap: 8px;

            background: rgba(255, 255, 255, .45);
            backdrop-filter: blur(10px);

            padding: 10px 16px;

            border-radius: 999px;

            color: #ffffff;
            font-weight: 600;
        }

        /* ========================================
   STATS
======================================== */

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .stat {
            position: relative;
            overflow: hidden;

            border-radius: 24px;
            padding: 24px;

            transition: .35s ease;

            box-shadow:
                0 5px 15px rgba(148, 163, 184, .08),
                0 20px 40px rgba(148, 163, 184, .08);
        }

        .stat::before {
            content: '';
            position: absolute;

            width: 100px;
            height: 100px;

            right: -40px;
            top: -40px;

            border-radius: 50%;

            background: rgba(255, 255, 255, .35);
        }

        .stat:hover {
            transform: translateY(-8px);
        }

        .stat:nth-child(1) {
            background: linear-gradient(135deg, #eef2ff, #dbeafe);
        }

        .stat:nth-child(2) {
            background: linear-gradient(135deg, #ecfdf5, #d1fae5);
        }

        .stat:nth-child(3) {
            background: linear-gradient(135deg, #fff7ed, #fed7aa);
        }

        .stat:nth-child(4) {
            background: linear-gradient(135deg, #fdf2f8, #fbcfe8);
        }

        .stat-label {
            color: #64748b;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .stat-value {
            margin-top: 14px;

            font-size: 42px;
            font-weight: 800;

            color: #45484e;
        }

        .stat-meta {
            margin-top: 8px;
            font-size: 13px;
            color: #64748b;
        }

        /* ========================================
   GRID
======================================== */

        .grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 22px;
        }

        .grid .card:nth-child(1) {
            border-top: 5px solid #a5b4fc;
        }
        .grid .card:nth-child(2) {
            border-top: 5px solid #a5fcd0;
        }

        /* ========================================
   CARDS
======================================== */

        .card {
            background: rgba(255, 255, 255, .95);

            backdrop-filter: blur(18px);

            border-radius: 24px;

            padding: 24px;

            border: 1px solid rgba(255, 255, 255, .7);

            box-shadow:
                0 5px 20px rgba(148, 163, 184, .08),
                0 20px 40px rgba(148, 163, 184, .06);
        }

        .card-title {
            font-size: 18px;
            font-weight: 700;
            color: #0b3272;
            margin-bottom: 18px;
        }

        /* ========================================
   ACTIVITY
======================================== */

        .activity {
            display: flex;
            gap: 14px;

            padding: 16px 0;

            border-bottom: 1px solid #f1f5f9;
        }

        .activity:last-child {
            border: none;
        }

        .dot {
            width: 12px;
            height: 12px;

            margin-top: 5px;

            border-radius: 50%;

            background: #cdb4db;

            box-shadow:
                0 0 0 5px rgba(205, 180, 219, .15);
        }

        .activity-content {
            flex: 1;
        }

        .activity-title {
            font-weight: 600;
            color: #334155;
        }

        .activity-time {
            margin-top: 3px;
            color: #94a3b8;
            font-size: 13px;
        }

        /* ========================================
   QUICK ACTIONS
======================================== */

        .actions {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .action {
            padding: 16px;

            border-radius: 16px;

            background: #fafafa;

            border: 1px solid #eef2f7;

            transition: .25s;

            cursor: pointer;

            font-weight: 500;

            color: #565759;
        }

        .action:hover {
            transform: translateX(6px);
        }

        .action:nth-child(1):hover {
            background: #eef2ff;
            color: #7994f0;
        }

        .action:nth-child(2):hover {
            background: #ecfdf5;
            color: #4ade80;
        }

        .action:nth-child(3):hover {
            background: #fff7ed;
            color: #f97316;
        }

        .action:nth-child(4):hover {
            background: #fdf2f8;
            color: #f43f5e;
        }

        .action:nth-child(5):hover {
            background: #ecfeff;
            color: #06b6d4;
        }

        .action:nth-child(6):hover {
            background: #f3e8ff;
            color: #7994f0;
        }

        /* ========================================
   BOTTOM GRID
======================================== */

        .bottom {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .bottom .card:nth-child(1) {
            border-top: 5px solid #a5b4fc;
        }

        .bottom .card:nth-child(2) {
            border-top: 5px solid #86efac;
        }

        .bottom .card:nth-child(3) {
            border-top: 5px solid #f9a8d4;
        }

        /* ========================================
   TEXT
======================================== */

        .card p {
            color: #64748b;
            line-height: 1.8;
            margin: 8px 0;
        }

        /* ========================================
   RESPONSIVE
======================================== */

        @media(max-width:1200px) {

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .bottom {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width:768px) {

            .stats {
                grid-template-columns: 1fr;
            }

            .hero {
                padding: 28px;
            }

            .hero-title {
                font-size: 28px;
            }

            .stat-value {
                font-size: 34px;
            }
        }
    </style>

    <div class="dashboard">

        {{-- HERO --}}
        <div class="hero">
            <div class="hero-title">
                Website Administration Dashboard
            </div>

            <div class="hero-subtitle">
                Manage faculty, students, events, news, and tenders from one place.
            </div>

            <div style="margin-top:12px;opacity:.85;color:#ffffff">
                <b>{{ now()->format('d M Y, l') }}</b>
            </div>
        </div>

        {{-- STATS --}}
        <div class="stats">

            <div class="stat">
                <div class="stat-label">Faculty</div>
                <div class="stat-value">{{ $this->stats['faculty'] }}</div>
            </div>

            <div class="stat">
                <div class="stat-label">Students</div>
                <div class="stat-value">{{ $this->stats['students'] }}</div>
            </div>

            <div class="stat">
                <div class="stat-label">Events</div>
                <div class="stat-value">{{ $this->stats['events'] }}</div>
            </div>

            <div class="stat">
                <div class="stat-label">Tenders</div>
                <div class="stat-value">{{ $this->stats['tenders'] }}</div>
            </div>

        </div>

        {{-- MAIN SECTION --}}
        <div class="grid">

            {{-- ACTIVITY --}}
            <div class="card">
                <div class="card-title">Latest News</div>
                <p>No recent updates</p>
            </div>

            {{-- ACTIONS --}}
            <div class="card">

                <div class="card-title">Quick Actions</div>

                <div class="actions">

                    <div class="action">Add Faculty</div>
                    <div class="action">Add Student</div>
                    <div class="action">Create Event</div>
                    <div class="action">Add News</div>
                    <div class="action">Upload Tender</div>
                    <div class="action">Settings</div>

                </div>

            </div>

        </div>

        {{-- BOTTOM --}}
        {{-- <div class="bottom">

            <div class="card">
                <div class="card-title">System Status</div>
                <p>Website: Online</p>
                <p>Database: Healthy</p>
                <p>Storage: OK</p>
            </div>

            <div class="card">
                <div class="card-title">Latest News</div>
                <p>No recent updates</p>
            </div>

            <div class="card">
                <div class="card-title">Admin Logins</div>
                <p>15 active users</p>
            </div>

        </div> --}}

    </div>

</x-filament-panels::page>
