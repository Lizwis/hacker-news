<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Story;

class storyController extends Controller
{
    public function index()
    {
        return Story::with('comments')->get();
    }
}
