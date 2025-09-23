<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
{
    $layanans = Layanan::latest()->limit(3)->get();
    return view('pages.home', compact('layanans'));
}

    public function about(): View { return view('pages.about'); }
    public function services(): View { return view('pages.services'); }
    public function blog(): View { return view('pages.blog'); }
    public function blogDetails(): View { return view('pages.blog_details'); }
    public function contact(): View { return view('pages.contact'); }
}
