<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OperationsFixture
 *
 */
class OperationsFixture extends TestFixture
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
        'PROJECT_NAME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Project name', 'precision' => null, 'fixed' => null],
        'CLIENT_TZ' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => 'Time zone for the client location', 'precision' => null, 'fixed' => null],
        'CLIENT_HOSTNAME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Host name of the client machine', 'precision' => null, 'fixed' => null],
        'CLIENT_IP' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => 'IP for the client machine', 'precision' => null, 'fixed' => null],
        'CLIENT_TYPE' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => 'The client type is UI, REPL, or TEST', 'precision' => null, 'fixed' => null],
        'CLIENT_USER' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => 'User name', 'precision' => null, 'fixed' => null],
        'CLIENT_ROLE' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => 'License type', 'precision' => null, 'fixed' => null],
        'STEP' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'comment' => 'Database step', 'precision' => null, 'fixed' => null],
        'DEPLOY_THRESHOLD' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Deployment threshold setting: STOP_ON_ERROR, STOP_ON_WARN, ALWAYS_DEPLOY', 'precision' => null, 'fixed' => null],
        'VALIDITY_SETTING' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Stored logic compilation setting: DISABLED, LOCAL, GLOBAL', 'precision' => null, 'fixed' => null],
        'TOTAL_CHANGESETS' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Total number of change sets deployed or rolled back', 'precision' => null, 'autoIncrement' => null],
        'TOTAL_ROWS_TOUCHED' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Total number of database rows touched during the operation', 'precision' => null, 'autoIncrement' => null],
        'TOTAL_VALUES_DELETED' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Total number of values deleted during the operation', 'precision' => null, 'autoIncrement' => null],
        'FK_OP_DATABASES_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Foreign key to OPERATION table ID', 'precision' => null, 'autoIncrement' => null],
        'PREDICTED_SUCCESS' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Boolean for success of operation', 'precision' => null],
        'DEPLOY_RESULT' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => 'Overall status of operation:  PASS, FAIL, WARN, SYNC', 'precision' => null, 'fixed' => null],
        'DESCRIPTION' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Message about operation result', 'precision' => null],
        'ACTION_TYPE' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'DEPLOY, ROLLBACK, SYNC', 'precision' => null, 'fixed' => null],
        'CONTEXTS' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'comment' => 'Context used during operation', 'precision' => null, 'fixed' => null],
        'LABELS' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'comment' => 'Labels used during operation', 'precision' => null, 'fixed' => null],
        'GEN_SQL' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Generated SQL for operation', 'precision' => null],
        'GEN_ROLLBACK_SQL' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Generated Rollback SQL for rollback operation', 'precision' => null],
        'GEN_SQL_PATH' => ['type' => 'string', 'length' => 2000, 'null' => true, 'default' => null, 'comment' => 'Path to the generated SQL file', 'precision' => null, 'fixed' => null],
        'GEN_ROLLBACK_SQL_PATH' => ['type' => 'string', 'length' => 2000, 'null' => true, 'default' => null, 'comment' => 'Path to the generated rollback SQL file', 'precision' => null, 'fixed' => null],
        'START_TIME' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Start time for operation', 'precision' => null],
        'STOP_TIME' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Stop time for operation', 'precision' => null],
        'TOTAL_TIME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Total time for operation', 'precision' => null, 'fixed' => null],
        'DEPLOY_MODE' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'FULL or QUICK', 'precision' => null, 'fixed' => null],
        'LOG_PATH' => ['type' => 'string', 'length' => 2000, 'null' => true, 'default' => null, 'comment' => 'Path to log file', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'OPERATION_DB' => ['type' => 'index', 'columns' => ['FK_OP_DATABASES_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'OPERATION_DB' => ['type' => 'foreign', 'columns' => ['FK_OP_DATABASES_ID'], 'references' => ['op_databases', 'ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'PROJECT_NAME' => 'Lorem ipsum dolor sit amet',
            'CLIENT_TZ' => 'Lorem ipsum dolor sit amet',
            'CLIENT_HOSTNAME' => 'Lorem ipsum dolor sit amet',
            'CLIENT_IP' => 'Lorem ipsum dolor sit amet',
            'CLIENT_TYPE' => 'Lorem ipsum dolor sit amet',
            'CLIENT_USER' => 'Lorem ipsum dolor sit amet',
            'CLIENT_ROLE' => 'Lorem ipsum dolor sit amet',
            'STEP' => 'Lorem ipsum dolor sit amet',
            'DEPLOY_THRESHOLD' => 'Lorem ipsum dolor sit amet',
            'VALIDITY_SETTING' => 'Lorem ipsum dolor sit amet',
            'TOTAL_CHANGESETS' => 1,
            'TOTAL_ROWS_TOUCHED' => 1,
            'TOTAL_VALUES_DELETED' => 1,
            'FK_OP_DATABASES_ID' => '',
            'PREDICTED_SUCCESS' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'DEPLOY_RESULT' => 'Lorem ipsum dolor ',
            'DESCRIPTION' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'ACTION_TYPE' => 'Lorem ipsum dolor sit amet',
            'CONTEXTS' => 'Lorem ipsum dolor sit amet',
            'LABELS' => 'Lorem ipsum dolor sit amet',
            'GEN_SQL' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'GEN_ROLLBACK_SQL' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'GEN_SQL_PATH' => 'Lorem ipsum dolor sit amet',
            'GEN_ROLLBACK_SQL_PATH' => 'Lorem ipsum dolor sit amet',
            'START_TIME' => '2015-08-16 23:36:16',
            'STOP_TIME' => '2015-08-16 23:36:16',
            'TOTAL_TIME' => 'Lorem ipsum dolor sit amet',
            'DEPLOY_MODE' => 'Lorem ipsum dolor sit amet',
            'LOG_PATH' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
