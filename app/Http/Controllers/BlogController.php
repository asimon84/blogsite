<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Show the view for the Blog page
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request):View {
        return view('about', []);
    }
}
