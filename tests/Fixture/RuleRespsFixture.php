<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RuleRespsFixture
 *
 */
class RuleRespsFixture extends TestFixture
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
        'RULE_NAME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Name of the rule', 'precision' => null, 'fixed' => null],
        'PHASE' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => 'Execution phase for rule: PREFORECAST, FORECAST, POSTFORECAST', 'precision' => null, 'fixed' => null],
        'LEVEL_NAME' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => 'Result response level:  INFO, WARNING, ERROR', 'precision' => null, 'fixed' => null],
        'FK_OPERATIONS_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Foreign key to OPERATIONS table ID column', 'precision' => null, 'autoIncrement' => null],
        'OPERATIONS_RULE_RESPS_IDX' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Sequential index', 'precision' => null, 'autoIncrement' => null],
        'FK_CHANGE_IMPACTS_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Foreign key to CHANGE_IMPACTS table ID column', 'precision' => null, 'autoIncrement' => null],
        'CHANGE_IMPACTS_RULE_RESPS_IDX' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Sequential index of this row', 'precision' => null, 'autoIncrement' => null],
        'PARENT_TABLE' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'comment' => 'Type of parent table:  OPERATIONS, CHANGE_IMPACTS', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'CHANGEIMPACT_RULERESPONSES_KEY' => ['type' => 'index', 'columns' => ['FK_CHANGE_IMPACTS_ID'], 'length' => []],
            'OPERATION_RULERESPONSE_KEY' => ['type' => 'index', 'columns' => ['FK_OPERATIONS_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'CHANGEIMPACT_RULERESPONSES_KEY' => ['type' => 'foreign', 'columns' => ['FK_CHANGE_IMPACTS_ID'], 'references' => ['change_impacts', 'ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'OPERATION_RULERESPONSE_KEY' => ['type' => 'foreign', 'columns' => ['FK_OPERATIONS_ID'], 'references' => ['operations', 'ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'RULE_NAME' => 'Lorem ipsum dolor sit amet',
            'PHASE' => 'Lorem ipsum dolor sit amet',
            'LEVEL_NAME' => 'Lorem ipsum dolor sit amet',
            'FK_OPERATIONS_ID' => '',
            'OPERATIONS_RULE_RESPS_IDX' => '',
            'FK_CHANGE_IMPACTS_ID' => '',
            'CHANGE_IMPACTS_RULE_RESPS_IDX' => '',
            'PARENT_TABLE' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
