<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $jobs = Job::query()
            ->with(['employer', 'tags'])
            ->latest()
            ->where('title', 'LIKE', '%' . $request->s . '%')->get();

        return view('results', compact('jobs'));
    }
}
