<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $filteredJobs = Job::where('title', 'like', '%' . request('q') . '%')->get();
        return view('jobs.search-results', [
            'jobs' => $filteredJobs
        ]);
    }
}
