<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tablemod Entity.
 */
class Tablemod extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'DTYPE' => true,
        'E_VERSION' => true,
        'TABLENAME' => true,
        'ROWSTOUCHED' => true,
        'VALUESDELETED' => true,
        'OPERATION_TABLEMODS_ID' => true,
        'OPERATION_TABLEMODS_IDX' => true,
        'ECONTAINER_CLASS' => true,
        'E_CONTAINER' => true,
        'E_CONTAINER_FEATURE_NAME' => true,
    ];
}
