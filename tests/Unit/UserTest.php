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
        $user->email = 'stevesmith@example.net';

        $this->assertTrue($user->save());

    }

    public function testDeleteUser()
    {
        // Validate the request...

        $record = User::inRandomOrder()->first();




        $this->assertTrue($record->delete());

    }

    public function testCount() {
        $users = User::All();
        $count = $users->count();

        $this->assertCount($count>=50, ['foo']);
    }
    public function testModelIsString()
    {

        $this->assertInternalType("string",User::class);
    }


}
