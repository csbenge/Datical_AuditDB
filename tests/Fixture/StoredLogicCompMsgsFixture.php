<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StoredLogicCompMsgsFixture
 *
 */
class StoredLogicCompMsgsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'FK_STORED_LOGIC_STATES_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Primary key', 'precision' => null, 'autoIncrement' => null],
        'MESSAGE' => ['type' => 'string', 'length' => 4000, 'null' => true, 'default' => null, 'comment' => 'Stored Logic compilation message text', 'precision' => null, 'fixed' => null],
        'STORED_LOGIC_COMP_MSGS_IDX' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Sequential index of message', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['FK_STORED_LOGIC_STATES_ID', 'STORED_LOGIC_COMP_MSGS_IDX'], 'length' => []],
            'STOREDLOG_COMPILATIONM_KEY' => ['type' => 'foreign', 'columns' => ['FK_STORED_LOGIC_STATES_ID'], 'references' => ['stored_logic_states', 'ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'FK_STORED_LOGIC_STATES_ID' => '',
            'MESSAGE' => 'Lorem ipsum dolor sit amet',
            'STORED_LOGIC_COMP_MSGS_IDX' => ''
        ],
    ];
}
