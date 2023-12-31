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
        $user = User::find(3); // Usuário de id 3 que possui user_category_id = Comum (3)
        $this->actingAs($user);
        $response = $this->get(route('users.index'));
        $response->assertStatus(403);
    }
}
