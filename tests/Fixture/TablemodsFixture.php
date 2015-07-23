<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TablemodsFixture
 *
 */
class TablemodsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'DTYPE' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'E_VERSION' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'TABLENAME' => ['type' => 'string', 'length' => 4000, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'ROWSTOUCHED' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'VALUESDELETED' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'OPERATION_TABLEMODS_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'OPERATION_TABLEMODS_IDX' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ECONTAINER_CLASS' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'E_CONTAINER' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'E_CONTAINER_FEATURE_NAME' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'TABLEMODDTYPE' => ['type' => 'index', 'columns' => ['DTYPE'], 'length' => []],
            'OPERATION_TABLEMODS_KEY' => ['type' => 'index', 'columns' => ['OPERATION_TABLEMODS_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'OPERATION_TABLEMODS_KEY' => ['type' => 'foreign', 'columns' => ['OPERATION_TABLEMODS_ID'], 'references' => ['operations', 'ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
            'DTYPE' => 'Lorem ipsum dolor sit amet',
            'E_VERSION' => 1,
            'TABLENAME' => 'Lorem ipsum dolor sit amet',
            'ROWSTOUCHED' => 1,
            'VALUESDELETED' => 1,
            'OPERATION_TABLEMODS_ID' => '',
            'OPERATION_TABLEMODS_IDX' => 1,
            'ECONTAINER_CLASS' => 'Lorem ipsum dolor sit amet',
            'E_CONTAINER' => 'Lorem ipsum dolor sit amet',
            'E_CONTAINER_FEATURE_NAME' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
