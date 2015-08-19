<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChangeImpactsFixture
 *
 */
class ChangeImpactsFixture extends TestFixture
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
        'CHANGE_DESCRIPTION' => ['type' => 'string', 'length' => 1500, 'null' => true, 'default' => null, 'comment' => 'Description of the change, Create table...', 'precision' => null, 'fixed' => null],
        'CAN_ROLLBACK' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Can this change be rolled back?', 'precision' => null],
        'FAILURE_MESSAGE' => ['type' => 'string', 'length' => 4000, 'null' => true, 'default' => null, 'comment' => 'Message created when a change fails', 'precision' => null, 'fixed' => null],
        'SKIPPED' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Boolean flag to indicate a change was skipped', 'precision' => null],
        'FK_OPERATIONS_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Foreign key to OPERATIONS table ID column', 'precision' => null, 'autoIncrement' => null],
        'FK_CHANGESET_DETAILS_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Foreign key to CHANGESET_DETAILS ID column', 'precision' => null, 'autoIncrement' => null],
        'CHANGE_IMPACTS_IDX' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Sequential index of the change', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'OPERATION_CHANGEIMPACTS_KEY' => ['type' => 'index', 'columns' => ['FK_OPERATIONS_ID'], 'length' => []],
            'CHANGEIMPACT_CHANGEDETAILS_KEY' => ['type' => 'index', 'columns' => ['FK_CHANGESET_DETAILS_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'CHANGEIMPACT_CHANGEDETAILS_KEY' => ['type' => 'foreign', 'columns' => ['FK_CHANGESET_DETAILS_ID'], 'references' => ['changeset_details', 'ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'OPERATION_CHANGEIMPACTS_KEY' => ['type' => 'foreign', 'columns' => ['FK_OPERATIONS_ID'], 'references' => ['operations', 'ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'CHANGE_DESCRIPTION' => 'Lorem ipsum dolor sit amet',
            'CAN_ROLLBACK' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'FAILURE_MESSAGE' => 'Lorem ipsum dolor sit amet',
            'SKIPPED' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'FK_OPERATIONS_ID' => '',
            'FK_CHANGESET_DETAILS_ID' => '',
            'CHANGE_IMPACTS_IDX' => ''
        ],
    ];
}
