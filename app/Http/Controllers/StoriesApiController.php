<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Story;
use App\Comment;

class StoriesApiController extends Controller
{
    public function index($limit)
    {

        $story_ids = Http::get('https://hacker-news.firebaseio.com/v0/newstories.json?print=pretty');

        $count = 0;
        foreach ($story_ids->json() as $story_id) {
            $count++;
            if ($count > $limit) {
                break;
            }
            $story = Http::get('https://hacker-news.firebaseio.com/v0/item/' . $story_id . '.json?print=pretty');
            $this->insert_story($story);

            if ($story['descendants'] > 0) {
                $this->insert_story_comments($story['kids']);
            }
        }

        return redirect('/');
    }

    private function insert_story($story)
    {
        Story::create([
            'story_id' => $story['id'],
            'title' => $story['title'] ?? '',
            'posted_by' => $story['by'] ?? '',
            'score' => $story['score'] ?? '',
            'time' => $story['time'] ?? '',
            'url' => $story['url'] ?? ''
        ]);
    }

    private function insert_story_comments($kids)
    {
        foreach ($kids as $kid) {
            $comment = Http::get('https://hacker-news.firebaseio.com/v0/item/' . $kid . '.json?print=pretty');
            Comment::create([
                'parent_id' => $comment['parent'],
                'posted_by' => $comment['by'] ?? '',
                'comment' => $comment['text'] ?? '',
                'time' => $comment['time'] ?? '',
            ]);
        }
    }
}
