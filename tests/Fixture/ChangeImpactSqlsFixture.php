<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChangeImpactSqlsFixture
 *
 */
class ChangeImpactSqlsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'FK_CHANGE_IMPACTS_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Foreign key to CHANGE_IMPACTS column ID', 'precision' => null, 'autoIncrement' => null],
        'SQL_TEXT' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Generated SQL', 'precision' => null],
        'CHANGE_IMPACT_SQLS_IDX' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Sequential index', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['FK_CHANGE_IMPACTS_ID', 'CHANGE_IMPACT_SQLS_IDX'], 'length' => []],
            'CHANGEIMPACT_SQL_KEY' => ['type' => 'foreign', 'columns' => ['FK_CHANGE_IMPACTS_ID'], 'references' => ['change_impacts', 'ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'FK_CHANGE_IMPACTS_ID' => '',
            'SQL_TEXT' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'CHANGE_IMPACT_SQLS_IDX' => ''
        ],
    ];
}
