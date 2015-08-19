<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LabelInfo Entity.
 */
class LabelInfo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'METADATA_KEY' => true,
        'METADATA_VALUE' => true,
        'FK_LABELS_ID' => true,
    ];
}
