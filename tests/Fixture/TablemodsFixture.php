<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TableModsFixture
 *
 */
class TableModsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'E_VERSION' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Current version', 'precision' => null, 'autoIncrement' => null],
        'TABLE_NAME' => ['type' => 'string', 'length' => 4000, 'null' => true, 'default' => null, 'comment' => 'Name of the table which was effected', 'precision' => null, 'fixed' => null],
        'ROWS_TOUCHED' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Number of rows which were modified', 'precision' => null, 'autoIncrement' => null],
        'VALUES_DELETED' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Number of values which were deleted', 'precision' => null, 'autoIncrement' => null],
        'FK_OPERATIONS_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Foreign key to OPERATIONS table ID column', 'precision' => null, 'autoIncrement' => null],
        'OPERATIONS_TABLE_MODS_IDX' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Sequential index for table modification', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'OPERATION_TABLEMODS_KEY' => ['type' => 'index', 'columns' => ['FK_OPERATIONS_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'OPERATION_TABLEMODS_KEY' => ['type' => 'foreign', 'columns' => ['FK_OPERATIONS_ID'], 'references' => ['operations', 'ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'E_VERSION' => 1,
            'TABLE_NAME' => 'Lorem ipsum dolor sit amet',
            'ROWS_TOUCHED' => 1,
            'VALUES_DELETED' => 1,
            'FK_OPERATIONS_ID' => '',
            'OPERATIONS_TABLE_MODS_IDX' => ''
        ],
    ];
}
