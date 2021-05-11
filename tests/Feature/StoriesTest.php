<?php

namespace Tests\Feature;

use App\Story;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class StoriesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function is_stories_page_loading()
    {
        $response = $this->call('GET', '/');
        $this->assertEquals(200, $response->status());
    }

    /** @test */
    public function getting_stories_from_api_and_storing()
    {
        $response = $this->call('GET', '/create/stories/5');
        $this->assertEquals(200, $response->status());
    }

    /** @test */
    public function getting_stories_comments()
    {
        $this->call('GET', '/create/stories/2');
        $allstory = Story::select('story_id')->limit(1)->first();
        $response = $this->call('GET', '/comments/' . $allstory->story_id);
        $this->assertEquals(200, $response->status());
    }
}
