<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Tablemods;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Tablemods Test Case
 */
class TablemodsTest extends TestCase
{

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('mods') ? [] : ['className' => 'App\Model\Table\Tablemods'];
        $this->Tablemods = TableRegistry::get('mods', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tablemods);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
