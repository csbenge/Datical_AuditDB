<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Label Entity.
 */
class Label extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'NAME' => true,
        'PROJECT_NAME' => true,
        'FK_PROJECTS_UUID' => true,
    ];
}
