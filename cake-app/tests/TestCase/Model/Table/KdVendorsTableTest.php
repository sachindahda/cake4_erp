<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KdVendorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KdVendorsTable Test Case
 */
class KdVendorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KdVendorsTable
     */
    protected $KdVendors;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.KdVendors',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('KdVendors') ? [] : ['className' => KdVendorsTable::class];
        $this->KdVendors = $this->getTableLocator()->get('KdVendors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->KdVendors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\KdVendorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\KdVendorsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
