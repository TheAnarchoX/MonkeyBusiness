<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreate()
    {
        $user = factory(User::class)->make([
            'name' => 'Test',
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'Test'
        ]);
    }
}
