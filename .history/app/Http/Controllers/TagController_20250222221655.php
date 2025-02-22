<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $tags = Job::where('title', 'like', '%' . request('q') . '%')->get();
        return view('jobs.search-results', [
            'jobs' => $filteredJobs
        ]);
    }
}
