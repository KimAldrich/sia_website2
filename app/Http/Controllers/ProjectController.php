<?php

namespace App\Http\Controllers;

use App\Support\SiteContent;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = collect(SiteContent::projects());
        return view('projects.index', compact('projects'));
    }
    public function show(string $slug)
    {
        $project = collect(SiteContent::projects())->firstWhere('slug', $slug);
        abort_unless($project, 404);

        return view('projects.show', compact('project'));
    }
}
