<?php

namespace App\Http\Controllers;

use App\Support\SiteContent;

class PageController extends Controller
{
    public function home()
    {
        $services = collect(SiteContent::services())->take(3);
        $projects = collect(SiteContent::projects())->take(4);
        return view('pages.home', compact('services','projects'));
    }

    public function about()  { return view('pages.about'); }
    public function awards() { return view('pages.awards'); }
}
