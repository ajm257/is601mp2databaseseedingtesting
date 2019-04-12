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
    public function testInsertUser()
    {
        // Validate the request...

        $record = factory(\App\User::class)->make();


        $this->assertTrue($record->save());

    }

    public function testUpdateUser()
    {
        // Validate the request...

        $user = User::find(1);

        $user->name = 'Steve Smith';
        $user->email = 'smithsteve@example.com';

        $this->assertTrue($user->save());

    }

    public function testDeleteUser()
    {
        // Validate the request...

        $record = factory(\App\User::class)->make();


        $record->save();

        $this->assertTrue($record->delete());

    }

}
