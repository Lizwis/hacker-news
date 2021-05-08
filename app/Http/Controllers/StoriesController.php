<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StoriesController extends Controller
{
    public function index()
    {
        $story_ids = Http::get('https://hacker-news.firebaseio.com/v0/newstories.json?print=pretty');

        foreach ($story_ids->json() as $story_id) {
            $story = Http::get('https://hacker-news.firebaseio.com/v0/item/' . $story_id . '.json?print=pretty');
            $this->insert_story($story);

            if ($story['descendants'] > 0) {
                $comments = $this->get_story_comments($story['kids']);
                $this->insert_comments($comments);
            }
        }
    }

    private function get_story_comments($comments)
    {
        return $comments;
    }

    private function insert_story($story)
    {
    }

    private function insert_comments($comments)
    {
    }
}
