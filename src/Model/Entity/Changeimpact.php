<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Changeimpact Entity.
 */
class Changeimpact extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'DTYPE' => true,
        'E_VERSION' => true,
        'CHANGE_DESCRIPTION' => true,
        'AUTHOR' => true,
        'CANROLLBACK' => true,
        'FAILUREMESSAGE' => true,
        'SKIPPED' => true,
        'OPERATION_CHANGEIMPACTS_ID' => true,
        'CHNGESET_DETAIL_CHNGEIMPACT_ID' => true,
        'IDX' => true,
    ];
}
