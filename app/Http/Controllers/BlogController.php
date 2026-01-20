<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * @const int
     */
    const PAGE_LIMIT = 10;

    /**
     * Show the view for the Blog page
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request):View {
        $page = $request->get('page') ?? 1;

        $limit = self::PAGE_LIMIT;
        $offset = ($page === 1) ? 0 : (($page - 1) * $limit);

        $blogs = Blog::offset($offset)->limit($limit)->get();
        $count = $blogs->count();

        return view('blogs', compact('blogs', 'page', 'limit', 'count'));
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

        $linkedBlogs = Blog::select(['id', 'title', 'thumb', 'created_at'])
            ->whereNotIn('id', [$id])
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return view('blog-details', compact('blog', 'linkedBlogs'));
    }
}
