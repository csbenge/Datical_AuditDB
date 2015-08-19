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
        'E_VERSION' => true,
        'MESSAGE_TIME' => true,
        'MESSAGE_LEVEL' => true,
        'TEXT' => true,
        'FK_CHANGE_IMPACTS_ID' => true,
        'MESSAGES_IDX' => true,
    ];
}
