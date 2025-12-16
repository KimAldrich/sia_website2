<?php // app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;
use App\Support\SiteContent;
class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home', [
            'services' => collect(SiteContent::services())->take(3),
            'projects' => collect(SiteContent::projects())->take(3),
            'events' => collect(SiteContent::events())->take(3),
            'quotes' => collect(SiteContent::testimonials())->take(2),
        ]);
    }
}
