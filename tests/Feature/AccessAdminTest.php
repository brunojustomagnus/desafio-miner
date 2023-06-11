<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class AccessAdminTest extends TestCase
{
    public function testAdminCanSeeUsersMenu()
    {
        $user = User::find(1); // Usuário de id 1 que possui user_category_id = Admin (1)
        $this->actingAs($user);
        $response = $this->get(route('users.index'));
        $response->assertStatus(200);
    }
}
