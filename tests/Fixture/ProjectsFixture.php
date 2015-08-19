<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProjectsFixture
 *
 */
class ProjectsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'PROJECT_UUID' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'E_VERSION' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Current version', 'precision' => null, 'autoIncrement' => null],
        'PROJECT_ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Human-readable ID of the project', 'precision' => null, 'autoIncrement' => null],
        'PROJECT_NAME' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => 'Name of the project', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['PROJECT_UUID'], 'length' => []],
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
            'PROJECT_UUID' => 'e4ebc1ca-6f71-40aa-a903-3ffeeb0d9361',
            'E_VERSION' => 1,
            'PROJECT_ID' => '',
            'PROJECT_NAME' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
