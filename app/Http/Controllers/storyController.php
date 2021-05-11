<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Story;

class storyController extends Controller
{

    public function index()
    {
        $stories = Story::with('comments')->get();
        return view('index', compact('stories'));
    }

    public function get_comments($story_id)
    {

        $story_comments = Story::where('story_id', $story_id)->with('comments')->first();

        return view('show_comments', compact('story_comments'));
    }
}
