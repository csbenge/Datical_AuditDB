<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LabelsFixture
 *
 */
class LabelsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'NAME' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => 'The name of the label used.', 'precision' => null, 'fixed' => null],
        'PROJECT_NAME' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => 'The name of the project the label is used in.', 'precision' => null, 'fixed' => null],
        'FK_PROJECTS_UUID' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => 'Foreign key to the PROJECTS table.', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'LABELS_PROJECTS_FK' => ['type' => 'index', 'columns' => ['FK_PROJECTS_UUID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'LABELS_PROJECTS_FK' => ['type' => 'foreign', 'columns' => ['FK_PROJECTS_UUID'], 'references' => ['projects', 'PROJECT_UUID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'NAME' => 'Lorem ipsum dolor sit amet',
            'PROJECT_NAME' => 'Lorem ipsum dolor sit amet',
            'FK_PROJECTS_UUID' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
