<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Support\SiteContent;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $q = trim($request->string('q')->toString());
        abort_if($q === '', 404);

        $projects = collect(SiteContent::projects())->filter(
            fn($p) =>
            Str::contains(Str::lower($p['title'] . ' ' . ($p['summary'] ?? '')), Str::lower($q))
        );

        $services = collect(SiteContent::services())->filter(
            fn($s) =>
            Str::contains(Str::lower($s['title'] . ' ' . ($s['excerpt'] ?? '')), Str::lower($q))
        );

        $pages = collect([
            ['title' => 'About', 'url' => '/about', 'summary' => 'Purpose, mission, vision, founders'],
            ['title' => 'Customer Service', 'url' => '/customer-service', 'summary' => 'FAQs and support tickets'],
            ['title' => 'Contact', 'url' => '/contact', 'summary' => 'Talk to the team'],
        ])->filter(
                fn($p) =>
                Str::contains(Str::lower($p['title'] . ' ' . $p['summary']), Str::lower($q))
            );

        return view('search.index', compact('q', 'projects', 'services', 'pages'));
    }
}
