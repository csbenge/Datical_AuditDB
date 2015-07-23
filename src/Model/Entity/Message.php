<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Message Entity.
 */
class Message extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'DTYPE' => true,
        'E_VERSION' => true,
        'MESSAGE_TIME' => true,
        'MESSAGE_LEVEL' => true,
        'TEXT' => true,
        'CHANGEIMPACT_MESSAGES_ID' => true,
        'CHANGEIMPACT_MESSAGES_IDX' => true,
        'ECONTAINER_CLASS' => true,
    ];
}
