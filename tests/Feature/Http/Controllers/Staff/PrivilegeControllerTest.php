<?php

namespace Tests\Feature\Http\Controllers\Staff;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Staff\PrivilegeController
 */
class PrivilegeControllerTest extends TestCase
{
    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('staff.privileges.index'));

        $response->assertOk();
        $response->assertViewIs('Staff.privileges.index');

        // TODO: perform additional assertions
    }

    // test cases...
}
