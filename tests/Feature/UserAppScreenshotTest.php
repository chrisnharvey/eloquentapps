<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserAppScreenshotTest extends TestCase
{
    /**
     * Test getting a list of screenshots for a users app
     *
     * @return void
     */
    public function testGetUserAppScreenshots()
    {
        // GET /user/apps/{id}/screenshots
    }

    /**
     * Test uploading a screenshot to a users app
     *
     * @return void
     */
    public function testAddUserAppScreenshot()
    {
        // POST /user/apps/{id}/screenshots
    }

    /**
     * Test deleting a screenshot from a users app
     *
     * @return void
     */
    public function testDeleteUserAppScreenshot()
    {
        // DELETE /user/apps/{id}/screenshots/{sid}
    }
}
