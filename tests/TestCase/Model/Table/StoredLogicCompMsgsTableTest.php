<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StoredLogicCompMsgsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StoredLogicCompMsgsTable Test Case
 */
class StoredLogicCompMsgsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stored_logic_comp_msgs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StoredLogicCompMsgs') ? [] : ['className' => 'App\Model\Table\StoredLogicCompMsgsTable'];
        $this->StoredLogicCompMsgs = TableRegistry::get('StoredLogicCompMsgs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StoredLogicCompMsgs);

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
