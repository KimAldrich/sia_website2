<?php // app/Http/Controllers/DashboardController.php
namespace App\Http\Controllers;
use App\Support\SiteContent;
class DashboardController extends Controller
{
    public function __invoke()
    {
        $this->middleware('auth');
        return view('dashboard', [
            'counts' => [
                'services' => count(SiteContent::services()),
                'projects' => count(SiteContent::projects()),
                'events' => count(SiteContent::events()),
                'messages' => 0,
            ]
        ]);
    }
}
