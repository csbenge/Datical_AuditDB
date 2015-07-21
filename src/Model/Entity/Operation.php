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
    ];
}
