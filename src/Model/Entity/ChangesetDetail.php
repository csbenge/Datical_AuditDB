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
        'E_VERSION' => true,
        'CHANGESET_ID' => true,
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
        'FK_OPERATIONS_ID' => true,
    ];
}
