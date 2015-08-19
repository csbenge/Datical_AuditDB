<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StoredLogicStatesFixture
 *
 */
class StoredLogicStatesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'FK_OPERATIONS_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Foreign key to OPERATIONS table ID column', 'precision' => null, 'autoIncrement' => null],
        'E_VERSION' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Current version', 'precision' => null, 'autoIncrement' => null],
        'OBJECT_NAME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Name of the Stored Logic object', 'precision' => null, 'fixed' => null],
        'OBJECT_TYPE' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Type of the Stored Logic object', 'precision' => null, 'fixed' => null],
        'STATE_AFTER' => ['type' => 'string', 'length' => 4000, 'null' => true, 'default' => null, 'comment' => 'State after compilation', 'precision' => null, 'fixed' => null],
        'STATE_BEFORE' => ['type' => 'string', 'length' => 4000, 'null' => true, 'default' => null, 'comment' => 'State before compilation', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'OPERATION_COMPARABLE_KEY' => ['type' => 'index', 'columns' => ['FK_OPERATIONS_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'OPERATION_COMPARABLE_KEY' => ['type' => 'foreign', 'columns' => ['FK_OPERATIONS_ID'], 'references' => ['operations', 'ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'ID' => '',
            'FK_OPERATIONS_ID' => '',
            'E_VERSION' => 1,
            'OBJECT_NAME' => 'Lorem ipsum dolor sit amet',
            'OBJECT_TYPE' => 'Lorem ipsum dolor sit amet',
            'STATE_AFTER' => 'Lorem ipsum dolor sit amet',
            'STATE_BEFORE' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
