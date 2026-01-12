<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * Show the view for the Portfolio page
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request):View {
        $projects = Project::all();

        return view('portfolio', compact('projects'));
    }

    /**
     * Get data for project details page
     *
     * @param Request $request
     * @param int $id
     *
     * @return View
     */
    public function show(Request $request, int $id):View {
        $project = Project::find($id);

        return view('project', compact('project'));
    }
}
