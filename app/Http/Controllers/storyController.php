<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Story;

class storyController extends Controller
{
    public function index()
    {
        $stories = Story::with('comments')->get();
        return view('index', compact('stories'));
    }
}
