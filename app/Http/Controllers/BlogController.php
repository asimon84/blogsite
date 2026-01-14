<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
        $blogs = Blog::all();

        return view('blog', compact('blogs'));
    }

    /**
     * Get data for blog details page
     *
     * @param Request $request
     * @param int $id
     *
     * @return View
     */
    public function show(Request $request, int $id):View {
        $blog = Blog::find($id);

        return view('blog-details', compact('blog'));
    }
}
