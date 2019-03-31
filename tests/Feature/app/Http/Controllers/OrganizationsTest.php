<?php

namespace Tests\Feature\app\Http\Controllers;

use Tests\TestCase;
use Illuminate\{
    Foundation\Testing\WithFaker,
    Foundation\Testing\RefreshDatabase,
    Http\Request,
    Support\Facades\Session
};

class OrganizationsTest extends TestCase
{

    /**
     * @test
     */
    public function getOrganizationsNewMessageRoute()
    {
        $response = $this->get(
            route('organizations.newMessage')
        );

        $response->assertCookie('idai_africa_session');
        $response->assertCookieMissing('laravel_session');
        $response->assertHeaderMissing('X-Rate-Limiting');
        $response->assertDontSeeText('OK');

        $response->assertSuccessful();
    }

    /**
     * @test
     */
    public function postOrganizationsFindVolunteersRoute()
    {
        $this->markTestIncomplete();
        Session::start();

        $requestData = [
            'ajuda' => [1, 2],
            '_token' => csrf_token()
        ];

        $response = $this->post(
            route('organizations.findVolunteers'), $requestData
        )->assertStatus(200);
    }

    /**
     * @test
     */
    public function getOrganizationsFindVolunteersViewRoute()
    {
        $response = $this->get(
            route('organizations.findVolunteersView')
        );

        $response->assertCookie('idai_africa_session');
        $response->assertCookieMissing('user');
        $response->assertHeaderMissing('X-Rate-Limiting');

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function getOrganizationsIndexRoute()
    {
        $response = $this->get(route('organizations.login'));

        $response->assertCookie('idai_africa_session');
        $response->assertCookieMissing('user');
        $response->assertHeaderMissing('X-Rate-Limiting');

        $response->assertStatus(200);
    }
}
