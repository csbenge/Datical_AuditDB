<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ChangeImpact Entity.
 */
class ChangeImpact extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'E_VERSION' => true,
        'CHANGE_DESCRIPTION' => true,
        'CAN_ROLLBACK' => true,
        'FAILURE_MESSAGE' => true,
        'SKIPPED' => true,
        'FK_OPERATIONS_ID' => true,
        'FK_CHANGESET_DETAILS_ID' => true,
        'CHANGE_IMPACTS_IDX' => true,
    ];
}
