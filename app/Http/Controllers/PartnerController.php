<?php

namespace App\Http\Controllers;

use App\Support\SiteContent;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = collect(SiteContent::partners());
        return view('partners.index', compact('partners'));
    }
}
