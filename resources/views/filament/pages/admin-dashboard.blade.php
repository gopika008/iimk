
<x-filament-panels::page>

<style>
.dashboard-wrap{
    max-width: 100%;
}

.hero-card{
    background: linear-gradient(135deg,#81a7fa,#c9c6f7);
    border-radius: 24px;
    padding: 35px;
    color: #fff;
    margin-bottom: 25px;
    box-shadow: 0 20px 40px rgba(37,99,235,.15);
}

.hero-title{
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 8px;
}

.hero-subtitle{
    opacity: .9;
}

.stats-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;
    margin-bottom:25px;
}

.stat-card{
    background:#fff;
    border-radius:20px;
    padding:24px;
    box-shadow:0 2px 10px rgba(0,0,0,.05);
    border:1px solid #eef2f7;
}

.stat-label{
    color:#6b7280;
    font-size:14px;
}

.stat-value{
    font-size:34px;
    font-weight:700;
    margin-top:10px;
}

.quick-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;
    margin-bottom:25px;
}

.quick-card{
    background:#fff;
    border-radius:20px;
    padding:24px;
    border:1px solid #eef2f7;
    box-shadow:0 2px 10px rgba(0,0,0,.05);
    transition:.25s;
    cursor:pointer;
}

.quick-card:hover{
    transform:translateY(-4px);
}

.quick-icon{
    font-size:32px;
}

.quick-title{
    margin-top:12px;
    font-weight:600;
}

.quick-desc{
    margin-top:6px;
    color:#6b7280;
    font-size:14px;
}

.content-grid{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:20px;
}

.panel{
    background:#fff;
    border-radius:20px;
    padding:25px;
    border:1px solid #eef2f7;
    box-shadow:0 2px 10px rgba(0,0,0,.05);
}

.panel-title{
    font-size:18px;
    font-weight:600;
    margin-bottom:20px;
}

.item{
    display:flex;
    justify-content:space-between;
    padding:15px 0;
    border-bottom:1px solid #f1f5f9;
}

.item:last-child{
    border-bottom:none;
}

.item-title{
    font-weight:500;
}

.item-sub{
    color:#6b7280;
    font-size:13px;
}

.time{
    color:#9ca3af;
    font-size:13px;
}

.timeline-item{
    padding:12px 0;
    border-left:3px solid #2563eb;
    padding-left:15px;
    margin-bottom:10px;
}

@media(max-width:1200px){
    .stats-grid,
    .quick-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .content-grid{
        grid-template-columns:1fr;
    }
}
</style>

<div class="dashboard-wrap">

    <div class="hero-card">
        <div class="hero-title">
            Welcome Back
        </div>

        <div class="hero-subtitle">
            Manage faculty, events, news, tenders and website content.
        </div>
    </div>

    <div class="stats-grid">

        <div class="stat-card">
            <div class="stat-label">Faculty Members</div>
            <div class="stat-value">58</div>
        </div>

        <div class="stat-card">
            <div class="stat-label">Students</div>
            <div class="stat-value">1245</div>
        </div>

        <div class="stat-card">
            <div class="stat-label">Events</div>
            <div class="stat-value">12</div>
        </div>

        <div class="stat-card">
            <div class="stat-label">Tenders</div>
            <div class="stat-value">14</div>
        </div>

    </div>

    <div class="quick-grid">

        <div class="quick-card">
            <div class="quick-icon">👨‍🏫</div>
            <div class="quick-title">Add Faculty</div>
            <div class="quick-desc">Create faculty profile</div>
        </div>

        <div class="quick-card">
            <div class="quick-icon">📅</div>
            <div class="quick-title">Create Event</div>
            <div class="quick-desc">Publish event</div>
        </div>

        <div class="quick-card">
            <div class="quick-icon">📰</div>
            <div class="quick-title">Publish News</div>
            <div class="quick-desc">Add news article</div>
        </div>

        <div class="quick-card">
            <div class="quick-icon">📄</div>
            <div class="quick-title">Upload Tender</div>
            <div class="quick-desc">Add tender notice</div>
        </div>

    </div>

    <div class="content-grid">

        <div class="panel">

            <div class="panel-title">
                Latest Content
            </div>

            <div class="item">
                <div>
                    <div class="item-title">Admission Notification 2026</div>
                    <div class="item-sub">News Article</div>
                </div>
                <div class="time">Today</div>
            </div>

            <div class="item">
                <div>
                    <div class="item-title">International Research Summit</div>
                    <div class="item-sub">Event</div>
                </div>
                <div class="time">Yesterday</div>
            </div>

            <div class="item">
                <div>
                    <div class="item-title">Infrastructure Tender</div>
                    <div class="item-sub">Tender</div>
                </div>
                <div class="time">2 Days Ago</div>
            </div>

        </div>

        <div class="panel">

            <div class="panel-title">
                Activity Timeline
            </div>

            <div class="timeline-item">
                Faculty Updated
            </div>

            <div class="timeline-item">
                Event Published
            </div>

            <div class="timeline-item">
                News Added
            </div>

            <div class="timeline-item">
                Tender Uploaded
            </div>

        </div>

    </div>

</div>

</x-filament-panels::page>

