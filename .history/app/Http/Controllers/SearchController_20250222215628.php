<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        Job::where('title', 'like', '%' . request('q') . '%')->get();
    }
}
