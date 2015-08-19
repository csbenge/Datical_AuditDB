<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RuleRespMsgsFixture
 *
 */
class RuleRespMsgsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'FK_RULE_RESPS_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Foreign key to RULE_RESPS table ID column', 'precision' => null, 'autoIncrement' => null],
        'MESSAGE' => ['type' => 'string', 'length' => 4000, 'null' => true, 'default' => null, 'comment' => 'Rule response message text', 'precision' => null, 'fixed' => null],
        'RULE_RESP_MSGS_IDX' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Sequential index of rule response', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['FK_RULE_RESPS_ID', 'RULE_RESP_MSGS_IDX'], 'length' => []],
            'RULERESPONSE_MESSAGES_KEY' => ['type' => 'foreign', 'columns' => ['FK_RULE_RESPS_ID'], 'references' => ['rule_resps', 'ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'FK_RULE_RESPS_ID' => '',
            'MESSAGE' => 'Lorem ipsum dolor sit amet',
            'RULE_RESP_MSGS_IDX' => ''
        ],
    ];
}
