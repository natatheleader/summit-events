<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredEvents = Event::where('is_active', true)
            ->where('is_featured', true)
            ->with(['speakers', 'topics', 'industries'])
            ->orderBy('start_date', 'desc')
            ->get();

        $upcomingEvents = Event::where('is_active', true)
            ->where('start_date', '>=', now())
            ->with(['speakers', 'topics', 'industries'])
            ->orderBy('start_date', 'asc')
            ->get();

        $pastEvents = Event::where('is_active', true)
            ->where('end_date', '<', now())
            ->with(['speakers', 'topics', 'industries'])
            ->orderBy('start_date', 'desc')
            ->limit(6)
            ->get();

        $stats = [
            'total_events' => Event::count(),
            'total_attendees' => Event::sum('expected_attendees'),
            'total_speakers' => Event::sum('speakers_count'),
            'total_organizations' => Event::sum('organizations_count'),
        ];

        return view('home', compact('featuredEvents', 'upcomingEvents', 'pastEvents', 'stats'));
    }
}