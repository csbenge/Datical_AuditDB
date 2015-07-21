<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Opdatabase Entity.
 */
class Opdatabase extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'DTYPE' => true,
        'E_VERSION' => true,
        'VENDOR' => true,
        'VERSION' => true,
        'DRIVER' => true,
        'DRIVERVERSION' => true,
        'JDBCVERSION' => true,
        'ENGINE' => true,
        'USERNAME' => true,
        'HOST' => true,
        'PORT' => true,
        'SID' => true,
        'SERVICE_NAME' => true,
        'DBNAME' => true,
        'APPLICATION_NAME' => true,
        'INSTANCE_NAME' => true,
        'URL' => true,
        'LAST_DEPLOY' => true,
        'LAST_ROLLBACK' => true,
        'LAST_CHANGELOG_SYNC' => true,
        'ECONTAINER_CLASS' => true,
        'E_CONTAINER' => true,
        'E_CONTAINER_FEATURE_NAME' => true,
    ];
}
