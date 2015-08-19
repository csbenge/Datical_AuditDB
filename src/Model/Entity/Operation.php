<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Operation Entity.
 */
class Operation extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'E_VERSION' => true,
        'PROJECT_NAME' => true,
        'CLIENT_TZ' => true,
        'CLIENT_HOSTNAME' => true,
        'CLIENT_IP' => true,
        'CLIENT_TYPE' => true,
        'CLIENT_USER' => true,
        'CLIENT_ROLE' => true,
        'STEP' => true,
        'DEPLOY_THRESHOLD' => true,
        'VALIDITY_SETTING' => true,
        'TOTAL_CHANGESETS' => true,
        'TOTAL_ROWS_TOUCHED' => true,
        'TOTAL_VALUES_DELETED' => true,
        'FK_OP_DATABASES_ID' => true,
        'PREDICTED_SUCCESS' => true,
        'DEPLOY_RESULT' => true,
        'DESCRIPTION' => true,
        'ACTION_TYPE' => true,
        'CONTEXTS' => true,
        'LABELS' => true,
        'GEN_SQL' => true,
        'GEN_ROLLBACK_SQL' => true,
        'GEN_SQL_PATH' => true,
        'GEN_ROLLBACK_SQL_PATH' => true,
        'START_TIME' => true,
        'STOP_TIME' => true,
        'TOTAL_TIME' => true,
        'DEPLOY_MODE' => true,
        'LOG_PATH' => true,
    ];
}
