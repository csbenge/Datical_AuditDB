<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientDetail Entity.
 */
class ClientDetail extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
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
