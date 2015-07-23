<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChangeimpactsSqlsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChangeimpactsSqlsTable Test Case
 */
class ChangeimpactsSqlsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.changeimpacts_sqls'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ChangeimpactsSqls') ? [] : ['className' => 'App\Model\Table\ChangeimpactsSqlsTable'];
        $this->ChangeimpactsSqls = TableRegistry::get('ChangeimpactsSqls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ChangeimpactsSqls);

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
