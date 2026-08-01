<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    public function test_all_routes_return_successful()
    {
        $routes = [
            '/',
            '/events',
            '/food-drinks',
            '/property',
            '/reviews',
            '/stay',
            '/event-registration',
        ];

        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200);
        }
    }
}
