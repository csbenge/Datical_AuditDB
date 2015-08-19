<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OpDatabase Entity.
 */
class OpDatabase extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'E_VERSION' => true,
        'VENDOR' => true,
        'VERSION' => true,
        'DRIVER' => true,
        'DRIVER_VERSION' => true,
        'JDBC_VERSION' => true,
        'ENGINE' => true,
        'USER_NAME' => true,
        'HOST' => true,
        'PORT' => true,
        'SID' => true,
        'SERVICE_NAME' => true,
        'DB_NAME' => true,
        'APPLICATION_NAME' => true,
        'INSTANCE_NAME' => true,
        'URL' => true,
        'LAST_DEPLOY' => true,
        'LAST_ROLLBACK' => true,
        'LAST_CHANGELOG_SYNC' => true,
        'FK_PROJECTS_UUID' => true,
    ];
}
