<?php

namespace Tests\Feature\Http\Controllers\Staff;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Staff\ModerationController
 */
class ModerationControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function approve_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = \App\Models\Torrent::factory()->create();

        $response = $this->post(route('staff.moderation.approve', ['id' => $id]), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrents = \App\Models\Torrent::factory()->times(3)->create();

        $response = $this->get(route('staff.moderation.index'));

        $response->assertOk();
        $response->assertViewIs('Staff.moderation.index');
        $response->assertViewHas('current');
        $response->assertViewHas('pending');
        $response->assertViewHas('postponed');
        $response->assertViewHas('rejected');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function postpone_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = \App\Models\Torrent::factory()->create();

        $response = $this->post(route('staff.moderation.postpone'), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function reject_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = \App\Models\Torrent::factory()->create();

        $response = $this->post(route('staff.moderation.reject'), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    // test cases...
}
