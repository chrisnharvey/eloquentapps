<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserAppTest extends TestCase
{
    /**
     * Test getting a list of apps created by this user
     *
     * @return void
     */
    public function testGetUserApps()
    {
        //  GET /user/apps
    }

    /**
     * Test adding an app
     *
     * @return void
     */
    public function testAddUserApp()
    {
        // POST /user/apps
    }

    /**
     * Test getting a users app
     *
     * @return void
     */
    public function testGetUserApp()
    {
        // GET /user/apps/{id}
    }

    /**
     * Test updating a users app
     *
     * @return void
     */
    public function testUpdateUserApp()
    {
        // PUT /user/apps/{id}
    }

    /**
     * Test deleting a users app
     *
     * @return void
     */
    public function testDeleteUserApp()
    {
        // PUT /user/apps/{id}
    }
}
