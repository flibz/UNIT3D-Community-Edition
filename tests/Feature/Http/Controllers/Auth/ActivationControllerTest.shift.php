<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Auth\ActivationController
 */
class ActivationControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function activate_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $role = \App\Models\Role::factory()->create();
        $userActivation = \App\Models\UserActivation::factory()->create();
        $privilege = \App\Models\Privilege::factory()->create();

        $response = $this->get(route('activate', ['token' => $token]));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    // test cases...
}
