<?php

namespace App\Http\Controllers;

use App\Support\SiteContent;

class ServiceController extends Controller
{
    public function index()
    {
        $services = collect(SiteContent::services());
        return view('services.index', compact('services'));
    }
    public function show(string $slug)
    {
        $service = collect(SiteContent::services())->firstWhere('slug', $slug);
        abort_unless($service, 404);

        return view('services.show', compact('service'));
    }
}
