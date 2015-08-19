<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TableMod Entity.
 */
class TableMod extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'E_VERSION' => true,
        'TABLE_NAME' => true,
        'ROWS_TOUCHED' => true,
        'VALUES_DELETED' => true,
        'FK_OPERATIONS_ID' => true,
        'OPERATIONS_TABLE_MODS_IDX' => true,
    ];
}
