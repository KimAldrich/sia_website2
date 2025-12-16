<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use App\Support\SiteContent;

class SitemapController extends Controller
{
    public function page()
    {
        return view('sitemap.page');
    }

    public function xml()
    {
        $urls = [
            url('/'),
            url('/about'),
            url('/services'),
            url('/projects'),
            url('/testimonials'),
            url('/partners'),
            url('/events'),
            url('/customer-service'),
            url('/contact'),
            url('/awards'),
            url('/legal/terms'),
            url('/legal/privacy'),
        ];
        foreach (SiteContent::services() as $s)
            $urls[] = url("/services/{$s['slug']}");
        foreach (SiteContent::projects() as $p)
            $urls[] = url("/projects/{$p['slug']}");
        foreach (SiteContent::events() as $e)
            $urls[] = url("/events/{$e['slug']}");

        return Response::view('sitemap.xml', compact('urls'))->header('Content-Type', 'application/xml');
    }
}
