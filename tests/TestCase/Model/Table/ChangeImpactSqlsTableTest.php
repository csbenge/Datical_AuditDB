<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChangeImpactSqlsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChangeImpactSqlsTable Test Case
 */
class ChangeImpactSqlsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.change_impact_sqls'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ChangeImpactSqls') ? [] : ['className' => 'App\Model\Table\ChangeImpactSqlsTable'];
        $this->ChangeImpactSqls = TableRegistry::get('ChangeImpactSqls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ChangeImpactSqls);

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
