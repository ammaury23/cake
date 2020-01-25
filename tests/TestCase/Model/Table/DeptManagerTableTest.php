<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeptManagerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeptManagerTable Test Case
 */
class DeptManagerTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DeptManagerTable
     */
    public $DeptManager;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DeptManager',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DeptManager') ? [] : ['className' => DeptManagerTable::class];
        $this->DeptManager = TableRegistry::getTableLocator()->get('DeptManager', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DeptManager);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
