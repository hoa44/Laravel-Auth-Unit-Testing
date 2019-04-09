<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Post;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */


    public function testPostDatabaseInfo()

    {
        $post =Post::inRandomOrder()->first();

        //dd($user);

        $this->assertIsString($post->title);



       $this->assertIsString($post->body);

        //dd($user->name);


        //$this->assertTrue(true);
    }
}
