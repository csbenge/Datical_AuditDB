<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LabelInfosFixture
 *
 */
class LabelInfosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'METADATA_KEY' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => 'Key to a label metadata property value.', 'precision' => null, 'fixed' => null],
        'METADATA_VALUE' => ['type' => 'string', 'length' => 300, 'null' => true, 'default' => null, 'comment' => 'Label metadata property value.', 'precision' => null, 'fixed' => null],
        'FK_LABELS_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Foreign key to the LABELS table ID column.', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'LABEL_INFOS_LABELS_FK' => ['type' => 'index', 'columns' => ['FK_LABELS_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'LABEL_INFOS_LABELS_FK' => ['type' => 'foreign', 'columns' => ['FK_LABELS_ID'], 'references' => ['labels', 'ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'METADATA_KEY' => 'Lorem ipsum dolor sit amet',
            'METADATA_VALUE' => 'Lorem ipsum dolor sit amet',
            'FK_LABELS_ID' => ''
        ],
    ];
}
