<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChangeimpactsSqlsFixture
 *
 */
class ChangeimpactsSqlsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'CHANGEIMPACT_SQL_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'SQL_TEXT' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'CHANGEIMPACT_SQL_IDX' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['CHANGEIMPACT_SQL_ID', 'CHANGEIMPACT_SQL_IDX'], 'length' => []],
            'CHANGEIMPACT_SQL_KEY' => ['type' => 'foreign', 'columns' => ['CHANGEIMPACT_SQL_ID'], 'references' => ['changeimpacts', 'ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'CHANGEIMPACT_SQL_ID' => '',
            'SQL_TEXT' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'CHANGEIMPACT_SQL_IDX' => 1
        ],
    ];
}
