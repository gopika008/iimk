<x-filament-panels::page>

<style>
.dashboard{
    display:flex;
    flex-direction:column;
    gap:24px;
}

/* HERO */
.hero{
    background:linear-gradient(135deg,#2563eb,#7c3aed);
    color:white;
    padding:32px;
    border-radius:24px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.hero h1{
    font-size:32px;
    font-weight:700;
    margin:0;
}

.hero p{
    opacity:.9;
    margin-top:8px;
}

/* KPI */
.kpis{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;
}

.kpi{
    background:white;
    padding:24px;
    border-radius:20px;
    border:1px solid #e5e7eb;
    box-shadow:0 4px 12px rgba(0,0,0,.04);
}

.kpi-top{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.kpi-icon{
    width:45px;
    height:45px;
    border-radius:12px;
    background:#eff6ff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:22px;
}

.kpi-value{
    font-size:34px;
    font-weight:700;
    margin-top:15px;
}

.kpi-label{
    color:#6b7280;
    font-size:14px;
}

/* MAIN */
.main{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:20px;
}

/* CARDS */
.card{
    background:white;
    border-radius:20px;
    padding:24px;
    border:1px solid #e5e7eb;
    box-shadow:0 4px 12px rgba(0,0,0,.04);
}

.card-title{
    font-size:18px;
    font-weight:600;
    margin-bottom:20px;
}

/* QUICK ACTIONS */
.actions{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:15px;
}

.action{
    padding:18px;
    border-radius:16px;
    background:#f8fafc;
    transition:.2s;
    cursor:pointer;
}

.action:hover{
    background:#eef2ff;
    transform:translateY(-2px);
}

/* ACTIVITY */
.activity{
    display:flex;
    justify-content:space-between;
    padding:14px 0;
    border-bottom:1px solid #f1f5f9;
}

.activity:last-child{
    border:none;
}

.time{
    color:#9ca3af;
    font-size:13px;
}

@media(max-width:1024px){

    .kpis{
        grid-template-columns:repeat(2,1fr);
    }

    .main{
        grid-template-columns:1fr;
    }
}
</style>

<div class="dashboard">

    <div class="hero">
        <div>
            <h1>Website Administration</h1>
            <p>Manage content, events, faculty, programmes and website settings.</p>
        </div>

        <div>
            <h2>{{ now()->format('d M Y') }}</h2>
        </div>
    </div>

    <div class="kpis">

        <div class="kpi">
            <div class="kpi-top">
                <span class="kpi-label">Faculty</span>
                <div class="kpi-icon">👨‍🏫</div>
            </div>
            <div class="kpi-value">{{ $this->stats['faculty'] }}</div>
        </div>

        <div class="kpi">
            <div class="kpi-top">
                <span class="kpi-label">Students</span>
                <div class="kpi-icon">🎓</div>
            </div>
            <div class="kpi-value">{{ $this->stats['students'] }}</div>
        </div>

        <div class="kpi">
            <div class="kpi-top">
                <span class="kpi-label">Events</span>
                <div class="kpi-icon">📅</div>
            </div>
            <div class="kpi-value">{{ $this->stats['events'] }}</div>
        </div>

        <div class="kpi">
            <div class="kpi-top">
                <span class="kpi-label">Tenders</span>
                <div class="kpi-icon">📄</div>
            </div>
            <div class="kpi-value">{{ $this->stats['tenders'] }}</div>
        </div>

    </div>

    <div class="main">

        <div class="card">

            <div class="card-title">
                Recent Activity
            </div>

            <div class="activity">
                <span>Admission Notification Published</span>
                <span class="time">10 min ago</span>
            </div>

            <div class="activity">
                <span>Faculty Profile Updated</span>
                <span class="time">1 hour ago</span>
            </div>

            <div class="activity">
                <span>Research Event Created</span>
                <span class="time">Today</span>
            </div>

            <div class="activity">
                <span>Tender Uploaded</span>
                <span class="time">Yesterday</span>
            </div>

        </div>

        <div class="card">

            <div class="card-title">
                Quick Actions
            </div>

            <div class="actions">

                <div class="action">
                    👨‍🏫 Add Faculty
                </div>

                <div class="action">
                    🎓 Add Student
                </div>

                <div class="action">
                    📅 New Event
                </div>

                <div class="action">
                    📰 Add News
                </div>

                <div class="action">
                    📄 Upload Tender
                </div>

                <div class="action">
                    ⚙ Settings
                </div>

            </div>

        </div>

    </div>

</div>

</x-filament-panels::page>
