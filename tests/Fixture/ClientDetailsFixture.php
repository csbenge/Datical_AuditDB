<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientDetailsFixture
 *
 */
class ClientDetailsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'OPERATION_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'DTYPE' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'E_VERSION' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'CLIENT_TZ' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'CLIENT_HOSTNAME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'CLIENT_IP' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'CLIENT_TYPE' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'CLIENT_USER' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'CLIENT_ROLE' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'ECONTAINER_CLASS' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'E_CONTAINER' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'E_CONTAINER_FEATURE_NAME' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'CLIENT_DETAILS_TO_OPERATION' => ['type' => 'index', 'columns' => ['OPERATION_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'CLIENT_DETAILS_TO_OPERATION' => ['type' => 'foreign', 'columns' => ['OPERATION_ID'], 'references' => ['operations', 'ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'OPERATION_ID' => '',
            'DTYPE' => 'Lorem ipsum dolor sit amet',
            'E_VERSION' => 1,
            'CLIENT_TZ' => 'Lorem ipsum dolor sit amet',
            'CLIENT_HOSTNAME' => 'Lorem ipsum dolor sit amet',
            'CLIENT_IP' => 'Lorem ipsum dolor sit amet',
            'CLIENT_TYPE' => 'Lorem ipsum dolor sit amet',
            'CLIENT_USER' => 'Lorem ipsum dolor sit amet',
            'CLIENT_ROLE' => 'Lorem ipsum dolor sit amet',
            'ECONTAINER_CLASS' => 'Lorem ipsum dolor sit amet',
            'E_CONTAINER' => 'Lorem ipsum dolor sit amet',
            'E_CONTAINER_FEATURE_NAME' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
