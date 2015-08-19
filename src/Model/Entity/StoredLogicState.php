<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StoredLogicState Entity.
 */
class StoredLogicState extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'FK_OPERATIONS_ID' => true,
        'E_VERSION' => true,
        'OBJECT_NAME' => true,
        'OBJECT_TYPE' => true,
        'STATE_AFTER' => true,
        'STATE_BEFORE' => true,
    ];
}
