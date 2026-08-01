<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\VendorApplication;
use App\Mail\VendorApplicationSubmitted;
use Illuminate\Support\Facades\Mail;

class VendorApplicationTest extends TestCase
{
    use RefreshDatabase;

    public function test_vendor_can_apply_and_email_is_queued()
    {
        Mail::fake();

        $data = [
            'full_name' => 'John Doe',
            'facebook_username' => 'johndoe',
            'business_name' => 'Johns Shop',
            'email' => 'john@example.com',
            'event_dates' => ['dec_26', 'dec_27'],
            'booth' => '10x10',
            'base' => 'minnesota',
            'categories' => ['boutique_clothing', 'home_decor'],
            'terms' => 'on',
        ];

        $response = $this->post('/apply', $data);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('vendor_applications', [
            'full_name' => 'John Doe',
            'business_name' => 'Johns Shop',
            'email' => 'john@example.com',
            'event_dates' => 'dec_26, dec_27',
            'categories' => 'boutique_clothing, home_decor',
        ]);

        Mail::assertQueued(VendorApplicationSubmitted::class, function ($mail) {
            return $mail->application->business_name === 'Johns Shop';
        });
    }
}
