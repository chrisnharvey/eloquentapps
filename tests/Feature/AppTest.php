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
    }
}
