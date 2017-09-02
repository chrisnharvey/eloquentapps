<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AppTest extends TestCase
{
    /**
     * Test getting a list of apps
     *
     * @return void
     */
    public function testGetApps()
    {
        // GET /apps
    }

    /**
     * Test buying an app
     *
     * @return void
     */
    public function testAppPurchase()
    {
        // POST /app/{id}/buy
    }

    /**
     * Test getting a single app
     *
     * @return void
     */
    public function testGetApp()
    {
        //  GET /app/{id}

        // Add app first


        $response = $this->json('GET', '/api/apps/123');

        $response
            ->assertStatus(200)
            ->assertJson([
                'id' => 1,
                'can_download' => true, // true if free or user has paid
                'name' => 'Test App',
                'slug' => 'test-app',
                'description' => 'Lorem ipsum',
                'category' => [
                    'id' => 2,
                    'name' => 'Test Category',
                    'slug' => 'test-cat'
                ],
                'developer' => [
                    'id' => 3,
                    'name' => 'Acme'
                ],
                'pricing' => [
                    'mode' => 'free', // free, paid, any
                    'value' => 0 // paid = fixed price, any = min_price
                ],
                'icon' => [
                    'id' => 1,
                    'location' => 'cdn',
                    'key' => 'icons/test.png',
                    'size' => 100,
                    'info_hash' => '123123123', //base64 info_hash
                ],
                'license' => 'GPLv3',
                'license_url' => 'http://example.com/license.txt',
                'website_url' => 'http://example.com',
                'support_url' => 'http://support.example.com',
                'source_url' => 'http://src.example.com',
                'screenshots' => [
                    [
                        'url' => 'http://example.com/screenshot.jpg',
                        'thumb_url' => 'http://example.com/screenshot_thumb.jpg'
                    ]
                ],
                'versions' => [
                    [
                        'id' => 4,
                        'name' => 'Version 1',
                        'version_no' => '1.2.3',
                        'is_current' => true,
                        'release_notes' => 'Hello world',
                        'torrent_url' => 'http://example.com/app/hi/download'
                    ]
                ]
            ]);
    }
}
