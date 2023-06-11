<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
class AccessComumTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testComumCanSeeUsersMenu()
    {
        $user = User::find(2); // Usuário de id 2 que possui user_category_id = Comum (2)
        $this->actingAs($user);
        $response = $this->get(route('users.index'));
        $response->assertStatus(403);
    }
}
