<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AuditSequence Entity.
 */
class AuditSequence extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'SEQUENCE_NUMBER' => true,
    ];
}
