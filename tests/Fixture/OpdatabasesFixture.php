<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OpDatabasesFixture
 *
 */
class OpDatabasesFixture extends TestFixture
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
        'VENDOR' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Database vendor', 'precision' => null, 'fixed' => null],
        'VERSION' => ['type' => 'string', 'length' => 400, 'null' => true, 'default' => null, 'comment' => 'Database version', 'precision' => null, 'fixed' => null],
        'DRIVER' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Database driver description', 'precision' => null, 'fixed' => null],
        'DRIVER_VERSION' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Database driver version', 'precision' => null, 'fixed' => null],
        'JDBC_VERSION' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'JDBC version', 'precision' => null, 'fixed' => null],
        'ENGINE' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Database engine', 'precision' => null, 'fixed' => null],
        'USER_NAME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Username for connection', 'precision' => null, 'fixed' => null],
        'HOST' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Database host', 'precision' => null, 'fixed' => null],
        'PORT' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Database connection port', 'precision' => null, 'autoIncrement' => null],
        'SID' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Oracle-only:  database SID', 'precision' => null, 'fixed' => null],
        'SERVICE_NAME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Oracle-only:  database service name', 'precision' => null, 'fixed' => null],
        'DB_NAME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'MySQL, DB2, MSSQL, PostgreSQL: database name', 'precision' => null, 'fixed' => null],
        'APPLICATION_NAME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'MSSQL: Application name', 'precision' => null, 'fixed' => null],
        'INSTANCE_NAME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'MSSQL:  Instance name', 'precision' => null, 'fixed' => null],
        'URL' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Database-specific created URL', 'precision' => null, 'fixed' => null],
        'LAST_DEPLOY' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'UTC time of the last deployment', 'precision' => null],
        'LAST_ROLLBACK' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'UTC time of the last rollback', 'precision' => null],
        'LAST_CHANGELOG_SYNC' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'UTC time of the last changeLogSync', 'precision' => null],
        'FK_PROJECTS_UUID' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'PROJECTS_FK' => ['type' => 'index', 'columns' => ['FK_PROJECTS_UUID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'PROJECTS_FK' => ['type' => 'foreign', 'columns' => ['FK_PROJECTS_UUID'], 'references' => ['projects', 'PROJECT_UUID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'VENDOR' => 'Lorem ipsum dolor sit amet',
            'VERSION' => 'Lorem ipsum dolor sit amet',
            'DRIVER' => 'Lorem ipsum dolor sit amet',
            'DRIVER_VERSION' => 'Lorem ipsum dolor sit amet',
            'JDBC_VERSION' => 'Lorem ipsum dolor sit amet',
            'ENGINE' => 'Lorem ipsum dolor sit amet',
            'USER_NAME' => 'Lorem ipsum dolor sit amet',
            'HOST' => 'Lorem ipsum dolor sit amet',
            'PORT' => 1,
            'SID' => 'Lorem ipsum dolor sit amet',
            'SERVICE_NAME' => 'Lorem ipsum dolor sit amet',
            'DB_NAME' => 'Lorem ipsum dolor sit amet',
            'APPLICATION_NAME' => 'Lorem ipsum dolor sit amet',
            'INSTANCE_NAME' => 'Lorem ipsum dolor sit amet',
            'URL' => 'Lorem ipsum dolor sit amet',
            'LAST_DEPLOY' => '2015-08-16 23:36:08',
            'LAST_ROLLBACK' => '2015-08-16 23:36:08',
            'LAST_CHANGELOG_SYNC' => '2015-08-16 23:36:08',
            'FK_PROJECTS_UUID' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
