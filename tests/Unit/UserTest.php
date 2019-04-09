<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    // Grabs a random user from teh DB and verifies the ID is an integer and that he user column is a string.
    public function testUserDatabaseInfo()

    {
        $user = User::inRandomOrder()->first();

        //dd($user);

        $this->assertIsInt($user->id);

        //dd($user->id);

        $this->assertIsString($user->name);

        //dd($user->name);


        //$this->assertTrue(true);
    }


}
