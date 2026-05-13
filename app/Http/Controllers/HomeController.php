<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Member;
use App\Models\Faculty;
use App\Models\Ranking;
use App\Models\ResearchNewsletter;

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
        $members = Member::orderBy('created_at')->get();

        return view('deans', compact('members'));
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
     public function news_letters(Request $request)
    {
        $newsletters = ResearchNewsletter::where('is_active', true)
            ->latest()
            ->get();

        $selectedNewsletter = $request->newsletter
            ? ResearchNewsletter::find($request->newsletter)
            : $newsletters->first();

        return view(
            'frontend.research-newsletters',
            compact('newsletters', 'selectedNewsletter')
        );
    }
}
