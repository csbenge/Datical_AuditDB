<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MessagesFixture
 *
 */
class MessagesFixture extends TestFixture
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
        'MESSAGE_TIME' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Message creation time', 'precision' => null],
        'MESSAGE_LEVEL' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => 'Severity of message: INFO, WARNING, ERROR', 'precision' => null, 'fixed' => null],
        'TEXT' => ['type' => 'string', 'length' => 4000, 'null' => false, 'default' => null, 'comment' => 'Text of change impacts message', 'precision' => null, 'fixed' => null],
        'FK_CHANGE_IMPACTS_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Foreign key for CHANGE_IMPACTS to ID column', 'precision' => null, 'autoIncrement' => null],
        'MESSAGES_IDX' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Sequential index', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'CHANGEIMPACT_MESSAGES_KEY' => ['type' => 'index', 'columns' => ['FK_CHANGE_IMPACTS_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'CHANGEIMPACT_MESSAGES_KEY' => ['type' => 'foreign', 'columns' => ['FK_CHANGE_IMPACTS_ID'], 'references' => ['change_impacts', 'ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'MESSAGE_TIME' => '2015-08-16 23:36:01',
            'MESSAGE_LEVEL' => 'Lorem ipsum dolor sit amet',
            'TEXT' => 'Lorem ipsum dolor sit amet',
            'FK_CHANGE_IMPACTS_ID' => '',
            'MESSAGES_IDX' => ''
        ],
    ];
}
