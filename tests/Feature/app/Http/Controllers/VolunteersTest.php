<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\{
	Foundation\Testing\WithFaker,
	Foundation\Testing\RefreshDatabase,
	Support\Facades\Session
};

class VolunteersTest extends TestCase
{

	/**
	 * Set the autheticated user
	 *
	 * @var  $user  \App\User
	 */
	protected $user;

	/**
	 *
	 */
	protected function setUp(): void
	{
		parent::setUp();
		$this->user = \App\User::find(1);
	}
    
    /**
     * @test
     */
    public function getRegisterVolunteerWithAdminAuth()
    {
        $response = $this->actingAs($this->user)->get(route('home'));

        $response->assertCookie('idai_africa_session');
        $response->assertCookieNotExpired('idai_africa_session');
        $response->assertCookieMissing('laravel_session');
        $response->assertSeeText('Welcome Mr admin');

        $response->assertSuccessful(200);
    }

    /**
     * @test
     */
    public function getRegisterVolunteerWithoutAdminAuth()
    {
        $response = $this->actingAs(\App\User::find(15))->get(route('home'));

        $response->assertCookie('idai_africa_session');
        $response->assertCookieNotExpired('idai_africa_session');
        $response->assertCookieMissing('laravel_session');
        $response->assertSeeText('Register Volunteer');
        $response->assertSeeText('Province');
        $response->assertSeeText('City');
        $response->assertSeeText('Telephone');

        $response->assertSuccessful(200);
    }

    /**
     * @test
     */
    public function postVolunteerSuccessful()
    {
    	Session::start();

    	$data = [
    		'_token' => csrf_token(),
    		'province' => 5,
    		'city' => 1,
    		'telephone' => '840383908',
    	];

    	$response = $this->actingAs($this->user)
    	                ->post(route('volunteers.store'), $data)
    	                ->assertCookie('idai_africa_session')
    	                ->assertHeaderMissing('X-Rate-Limiting')
    	                ->assertLocation(
    	                	'https://idai.africa/volunteer/cat/new'
    	                )->assertSessionHasNoErrors()
    	                ->assertRedirect();
    }

    /**
     * @test
     */
    public function postVolunteerFailedWithWrongTelephoneNumber()
    {
    	Session::start();

    	$data = [
    		'_token' => csrf_token(),
    		'province' => 5,
    		'city' => 1,
    		'telephone' => '8400000000',
    	];

    	$response = $this->actingAs($this->user)
    	                ->post(route('volunteers.store'), $data)
    	                ->assertCookie('idai_africa_session')
    	                ->assertHeaderMissing('X-Rate-Limiting')
    	                ->assertLocation('https://idai.africa')
    	                ->assertStatus(302);
    }

    /**
     * @test
     */
    public function getVolunteerCategoryNewRoute()
    {
    	//$this->markTestIncomplete();
    	$response = $this->actingAs($this->user)->get(
    		route('volunteers.addVolunteerCategory')
    	);

    	$response->assertCookie('idai_africa_session');

    	$response->assertSuccessful();
    }
}
