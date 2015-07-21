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
        'E_VERSION' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'PROJECT_NAME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'OPDATE' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'STEP' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'DEPLOY_THRESHOLD' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'VALIDITY_SETTING' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'TOTALROWSTOUCHED' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'TOTALVALUESDELETED' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'OPDATABASE_DB_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'PREDICTEDSUCCESS' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'DEPLOY_RESULT' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'DESCRIPTION' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'ACTION_TYPE' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'CONTEXTS' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'LABELS' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'GENSQL' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'GENROLLBACKSQL' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'GENSQLPATH' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'GENROLLBACKSQLPATH' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'STARTTIME' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'STOPTIME' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'TOTALTIME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'DEPLOYMODE' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'LOGPATH' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'opdatabase_key' => ['type' => 'index', 'columns' => ['OPDATABASE_DB_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'operations_ibfk_1' => ['type' => 'foreign', 'columns' => ['OPDATABASE_DB_ID'], 'references' => ['opdatabases', 'ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'E_VERSION' => 1,
            'PROJECT_NAME' => 'Lorem ipsum dolor sit amet',
            'OPDATE' => '2015-07-19 19:42:57',
            'STEP' => 'Lorem ipsum dolor sit amet',
            'DEPLOY_THRESHOLD' => 'Lorem ipsum dolor sit amet',
            'VALIDITY_SETTING' => 'Lorem ipsum dolor sit amet',
            'TOTALROWSTOUCHED' => 1,
            'TOTALVALUESDELETED' => 1,
            'OPDATABASE_DB_ID' => '',
            'PREDICTEDSUCCESS' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'DEPLOY_RESULT' => 'Lorem ipsum dolor ',
            'DESCRIPTION' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'ACTION_TYPE' => 'Lorem ipsum dolor sit amet',
            'CONTEXTS' => 'Lorem ipsum dolor sit amet',
            'LABELS' => 'Lorem ipsum dolor sit amet',
            'GENSQL' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'GENROLLBACKSQL' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'GENSQLPATH' => 'Lorem ipsum dolor sit amet',
            'GENROLLBACKSQLPATH' => 'Lorem ipsum dolor sit amet',
            'STARTTIME' => '2015-07-19 19:42:57',
            'STOPTIME' => '2015-07-19 19:42:57',
            'TOTALTIME' => 'Lorem ipsum dolor sit amet',
            'DEPLOYMODE' => 'Lorem ipsum dolor sit amet',
            'LOGPATH' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
