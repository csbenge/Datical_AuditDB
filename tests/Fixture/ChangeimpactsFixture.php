<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChangeimpactsFixture
 *
 */
class ChangeimpactsFixture extends TestFixture
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
        'CHANGE_DESCRIPTION' => ['type' => 'string', 'length' => 1500, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'AUTHOR' => ['type' => 'string', 'length' => 4000, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'CANROLLBACK' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'FAILUREMESSAGE' => ['type' => 'string', 'length' => 4000, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'SKIPPED' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'OPERATION_CHANGEIMPACTS_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'CHNGESET_DETAIL_CHNGEIMPACT_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'IDX' => ['type' => 'string', 'length' => 2000, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'CHANGEIMPACTDTYPE' => ['type' => 'index', 'columns' => ['DTYPE'], 'length' => []],
            'OPERATION_CHANGEIMPACTS_KEY' => ['type' => 'index', 'columns' => ['OPERATION_CHANGEIMPACTS_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'OPERATION_CHANGEIMPACTS_KEY' => ['type' => 'foreign', 'columns' => ['OPERATION_CHANGEIMPACTS_ID'], 'references' => ['operations', 'ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'CHANGE_DESCRIPTION' => 'Lorem ipsum dolor sit amet',
            'AUTHOR' => 'Lorem ipsum dolor sit amet',
            'CANROLLBACK' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'FAILUREMESSAGE' => 'Lorem ipsum dolor sit amet',
            'SKIPPED' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'OPERATION_CHANGEIMPACTS_ID' => '',
            'CHNGESET_DETAIL_CHNGEIMPACT_ID' => '',
            'IDX' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
