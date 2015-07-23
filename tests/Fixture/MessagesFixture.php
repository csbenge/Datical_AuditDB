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
        'DTYPE' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'E_VERSION' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'MESSAGE_TIME' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'MESSAGE_LEVEL' => ['type' => 'string', 'length' => 4000, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'TEXT' => ['type' => 'string', 'length' => 4000, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'CHANGEIMPACT_MESSAGES_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'CHANGEIMPACT_MESSAGES_IDX' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ECONTAINER_CLASS' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'MESSAGEDTYPE' => ['type' => 'index', 'columns' => ['DTYPE'], 'length' => []],
            'CHANGEIMPACT_MESSAGES_KEY' => ['type' => 'index', 'columns' => ['CHANGEIMPACT_MESSAGES_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'CHANGEIMPACT_MESSAGES_KEY' => ['type' => 'foreign', 'columns' => ['CHANGEIMPACT_MESSAGES_ID'], 'references' => ['changeimpacts', 'ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'MESSAGE_TIME' => '2015-07-23 19:57:13',
            'MESSAGE_LEVEL' => 'Lorem ipsum dolor sit amet',
            'TEXT' => 'Lorem ipsum dolor sit amet',
            'CHANGEIMPACT_MESSAGES_ID' => '',
            'CHANGEIMPACT_MESSAGES_IDX' => 1,
            'ECONTAINER_CLASS' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
