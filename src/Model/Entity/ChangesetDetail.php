<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ChangesetDetail Entity.
 */
class ChangesetDetail extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'DTYPE' => true,
        'E_VERSION' => true,
        'CHANGEID' => true,
        'AUTHOR' => true,
        'FILENAME' => true,
        'CHECKSUM' => true,
        'DBMS' => true,
        'LABELS' => true,
        'CONTEXTS' => true,
        'FAIL_ON_ERROR' => true,
        'ON_VALIDATION_FAIL' => true,
        'ON_RUN_ALWAYS' => true,
        'RUN_ON_CHANGE' => true,
        'RESULT' => true,
        'FK_OPERATION_ID' => true,
        'FK_CHANGESET_DETAILS_ID' => true,
    ];
}
