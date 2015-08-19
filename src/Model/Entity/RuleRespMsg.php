<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RuleRespMsg Entity.
 */
class RuleRespMsg extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'MESSAGE' => true,
    ];
}