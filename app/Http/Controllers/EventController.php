<?php

namespace App\Http\Controllers;

use App\Support\SiteContent;

class EventController extends Controller
{
    public function index()
    {
        $events = collect(SiteContent::events());
        return view('events.index', compact('events'));
    }
    public function show(string $slug)
    {
        $event = collect(SiteContent::events())->firstWhere('slug', $slug);
        abort_unless($event, 404);

        return view('events.show', compact('event'));
    }
}
