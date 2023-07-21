<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Admin;

use App\Controller\Admin\AdminController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Admin\AdminController Test Case
 *
 * @uses \App\Controller\Admin\AdminController
 */
class AdminControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Admin',
    ];

    /**
     * Test login method
     *
     * @return void
     * @uses \App\Controller\Admin\AdminController::login()
     */
    public function testLogin(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
