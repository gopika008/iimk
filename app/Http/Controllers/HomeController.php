<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\User;
use App\Models\Faculty;

class HomeController extends Controller
{
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
}
