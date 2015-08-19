<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ChangeImpactSql Entity.
 */
class ChangeImpactSql extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'SQL_TEXT' => true,
    ];
}
