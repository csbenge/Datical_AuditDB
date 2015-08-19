<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RuleResp Entity.
 */
class RuleResp extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'E_VERSION' => true,
        'RULE_NAME' => true,
        'PHASE' => true,
        'LEVEL_NAME' => true,
        'FK_OPERATIONS_ID' => true,
        'OPERATIONS_RULE_RESPS_IDX' => true,
        'FK_CHANGE_IMPACTS_ID' => true,
        'CHANGE_IMPACTS_RULE_RESPS_IDX' => true,
        'PARENT_TABLE' => true,
    ];
}
