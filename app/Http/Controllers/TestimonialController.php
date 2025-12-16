<?php

namespace App\Http\Controllers;

use App\Support\SiteContent;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = collect(SiteContent::testimonials());
        return view('testimonials.index', compact('testimonials'));
    }
}
