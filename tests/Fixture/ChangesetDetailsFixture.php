<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChangesetDetailsFixture
 *
 */
class ChangesetDetailsFixture extends TestFixture
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
        'CHANGESET_ID' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => 'Change set ID', 'precision' => null, 'fixed' => null],
        'AUTHOR' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => 'Author of change', 'precision' => null, 'fixed' => null],
        'FILENAME' => ['type' => 'string', 'length' => 500, 'null' => false, 'default' => null, 'comment' => 'Changelog file name', 'precision' => null, 'fixed' => null],
        'CHECKSUM' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Change set checksum', 'precision' => null, 'fixed' => null],
        'DBMS' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => 'DBMS filter setting', 'precision' => null, 'fixed' => null],
        'LABELS' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'comment' => 'Change set labels', 'precision' => null, 'fixed' => null],
        'CONTEXTS' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'comment' => 'Change set contexts', 'precision' => null, 'fixed' => null],
        'FAIL_ON_ERROR' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Change set deployment will halt on error', 'precision' => null],
        'ON_VALIDATION_FAIL' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => 'Change set deployment will halt on validation', 'precision' => null, 'fixed' => null],
        'ON_RUN_ALWAYS' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Always deploy the change set', 'precision' => null],
        'RUN_ON_CHANGE' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Deploy the change set on change', 'precision' => null],
        'RESULT' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => 'Deploy result: PASS, WARN, FAIL, SYNC', 'precision' => null, 'fixed' => null],
        'FK_OPERATIONS_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Foreign key for OPERATIONS table ID column', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'OPERATION_CHANGESET' => ['type' => 'index', 'columns' => ['FK_OPERATIONS_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'OPERATION_CHANGESET' => ['type' => 'foreign', 'columns' => ['FK_OPERATIONS_ID'], 'references' => ['operations', 'ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'CHANGESET_ID' => 'Lorem ipsum dolor sit amet',
            'AUTHOR' => 'Lorem ipsum dolor sit amet',
            'FILENAME' => 'Lorem ipsum dolor sit amet',
            'CHECKSUM' => 'Lorem ipsum dolor sit amet',
            'DBMS' => 'Lorem ipsum dolor ',
            'LABELS' => 'Lorem ipsum dolor sit amet',
            'CONTEXTS' => 'Lorem ipsum dolor sit amet',
            'FAIL_ON_ERROR' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'ON_VALIDATION_FAIL' => 'Lorem ipsum dolor ',
            'ON_RUN_ALWAYS' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'RUN_ON_CHANGE' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'RESULT' => 'Lorem ipsum dolor ',
            'FK_OPERATIONS_ID' => ''
        ],
    ];
}
