<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeptEmpTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeptEmpTable Test Case
 */
class DeptEmpTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DeptEmpTable
     */
    public $DeptEmp;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DeptEmp',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DeptEmp') ? [] : ['className' => DeptEmpTable::class];
        $this->DeptEmp = TableRegistry::getTableLocator()->get('DeptEmp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DeptEmp);

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
