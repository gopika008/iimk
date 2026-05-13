<?php

namespace App\Http\Controllers;


use App\Models\Announcement;
use App\Models\Member;
use App\Models\Faculty;
use App\Models\Ranking;

class HomeController extends Controller
{

    protected $RankingModel;

    public function __construct()
    {
        $this->RankingModel = new Ranking();
    }
    public function index()
    {
        $announcements = Announcement::active()
            ->where('show_on_homepage', 1)
            ->orderBy('display_order')
            ->latest()
            ->take(5)
            ->get();

        return view('welcome', compact('announcements'));
    }
    public function faculty_profile($id)
    {
        $faculty = Faculty::with('contents.section.tab')
            ->findOrFail($id);

        return view('faculty_profile', compact('faculty'));
    }
    public function dean()
    {
        $members = Member::where('type_code', 'D&A')->orderBy('created_at')->get();

        return view('pages.about.deans', compact('members'));
    }
    public function rankings()
    {
        $years = [2021, 2022, 2023, 2024, 2025, 2026];

        $data['years'] = $years;

        $data['international'] = $this->RankingModel
            ->getRankings('international', $years);

        $data['national'] = $this->RankingModel
            ->getRankings('national', $years);

        return view('rankings_view', $data);
    }
}
