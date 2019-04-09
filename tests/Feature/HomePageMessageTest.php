<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomePageMessageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSee601Text()
    {
        $request= $this->get('/');

        $request ->assertSeeText('IS-601');

    }
}
