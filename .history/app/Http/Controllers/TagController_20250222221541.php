<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke()
    {
        $tags = Job::where('title', 'like', '%' . request('q') . '%')->get();
        return view('jobs.search-results', [
            'jobs' => $filteredJobs
        ]);
    }
}
