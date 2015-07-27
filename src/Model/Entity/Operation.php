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
        'OPDATE' => true,
        'STEP' => true,
        'DEPLOY_THRESHOLD' => true,
        'VALIDITY_SETTING' => true,
        'TOTALROWSTOUCHED' => true,
        'TOTALVALUESDELETED' => true,
        'OPDATABASE_DB_ID' => true,
        'PREDICTEDSUCCESS' => true,
        'DEPLOY_RESULT' => true,
        'DESCRIPTION' => true,
        'ACTION_TYPE' => true,
        'CONTEXTS' => true,
        'LABELS' => true,
        'GENSQL' => true,
        'GENROLLBACKSQL' => true,
        'GENSQLPATH' => true,
        'GENROLLBACKSQLPATH' => true,
        'STARTTIME' => true,
        'STOPTIME' => true,
        'TOTALTIME' => true,
        'DEPLOYMODE' => true,
        'LOGPATH' => true,
        'OPERATION_ID' => true,
        'DTYPE' => true,
        'E_VERSION' => true,
        'CLIENT_TZ' => true,
        'CLIENT_HOSTNAME' => true,
        'CLIENT_IP' => true,
        'CLIENT_TYPE' => true,
        'CLIENT_USER' => true,
        'CLIENT_ROLE' => true,
        'ECONTAINER_CLASS' => true,
        'E_CONTAINER' => true,
        'E_CONTAINER_FEATURE_NAME' => true,
    ];
}
