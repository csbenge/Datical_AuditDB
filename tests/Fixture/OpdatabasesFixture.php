<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OpdatabasesFixture
 *
 */
class OpdatabasesFixture extends TestFixture
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
        'VENDOR' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'VERSION' => ['type' => 'string', 'length' => 400, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'DRIVER' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'DRIVERVERSION' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'JDBCVERSION' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'ENGINE' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'USERNAME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'HOST' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'PORT' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'SID' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'SERVICE_NAME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'DBNAME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'APPLICATION_NAME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'INSTANCE_NAME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'URL' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'LAST_DEPLOY' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'LAST_ROLLBACK' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'LAST_CHANGELOG_SYNC' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'ECONTAINER_CLASS' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'E_CONTAINER' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'E_CONTAINER_FEATURE_NAME' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
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
            'VENDOR' => 'Lorem ipsum dolor sit amet',
            'VERSION' => 'Lorem ipsum dolor sit amet',
            'DRIVER' => 'Lorem ipsum dolor sit amet',
            'DRIVERVERSION' => 'Lorem ipsum dolor sit amet',
            'JDBCVERSION' => 'Lorem ipsum dolor sit amet',
            'ENGINE' => 'Lorem ipsum dolor sit amet',
            'USERNAME' => 'Lorem ipsum dolor sit amet',
            'HOST' => 'Lorem ipsum dolor sit amet',
            'PORT' => 1,
            'SID' => 'Lorem ipsum dolor sit amet',
            'SERVICE_NAME' => 'Lorem ipsum dolor sit amet',
            'DBNAME' => 'Lorem ipsum dolor sit amet',
            'APPLICATION_NAME' => 'Lorem ipsum dolor sit amet',
            'INSTANCE_NAME' => 'Lorem ipsum dolor sit amet',
            'URL' => 'Lorem ipsum dolor sit amet',
            'LAST_DEPLOY' => '2015-07-19 19:43:05',
            'LAST_ROLLBACK' => '2015-07-19 19:43:05',
            'LAST_CHANGELOG_SYNC' => '2015-07-19 19:43:05',
            'ECONTAINER_CLASS' => 'Lorem ipsum dolor sit amet',
            'E_CONTAINER' => 'Lorem ipsum dolor sit amet',
            'E_CONTAINER_FEATURE_NAME' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
