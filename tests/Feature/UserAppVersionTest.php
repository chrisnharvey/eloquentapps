<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserAppVersionTest extends TestCase
{
    /**
     * Test getting a list of versions for a users app
     *
     * @return void
     */
    public function testGetUserAppVersions()
    {
        // GET /user/apps/{id}/versions
    }

    /**
     * Test adding a version for a users app
     *
     * @return void
     */
    public function testAddUserAppVersion()
    {
        // POST /user/apps/{id}/versions
    }

    /**
     * Test getting a specific version of a users app
     *
     * @return void
     */
    public function testGetUserAppVersion()
    {
        // GET /user/apps/{id}/versions/{vid}
    }

    /**
     * Test updating a specific version of a users app
     *
     * @return void
     */
    public function testUpdateUserAppVersion()
    {
        // PUT /user/apps/{id}/versions/{vid}
    }

    /**
     * Test deleting a specific version of a users app
     *
     * @return void
     */
    public function testDeleteUserAppVersion()
    {
        // DELETE /user/apps/{id}/versions/{vid}
    }
}
