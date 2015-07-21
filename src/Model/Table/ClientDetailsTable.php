<?php
namespace App\Model\Table;

use App\Model\Entity\ClientDetail;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClientDetails Model
 *
 */
class ClientDetailsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->belongsTo('Operations');
        $this->table('client_details');
        $this->displayField('ID');
        $this->primaryKey('ID');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('ID', 'create');
            
        $validator
            ->requirePresence('OPERATION_ID', 'create')
            ->notEmpty('OPERATION_ID');
            
        $validator
            ->requirePresence('DTYPE', 'create')
            ->notEmpty('DTYPE');
            
        $validator
            ->add('E_VERSION', 'valid', ['rule' => 'numeric'])
            ->requirePresence('E_VERSION', 'create')
            ->notEmpty('E_VERSION');
            
        $validator
            ->allowEmpty('CLIENT_TZ');
            
        $validator
            ->allowEmpty('CLIENT_HOSTNAME');
            
        $validator
            ->allowEmpty('CLIENT_IP');
            
        $validator
            ->allowEmpty('CLIENT_TYPE');
            
        $validator
            ->allowEmpty('CLIENT_USER');
            
        $validator
            ->allowEmpty('CLIENT_ROLE');
            
        $validator
            ->allowEmpty('ECONTAINER_CLASS');
            
        $validator
            ->allowEmpty('E_CONTAINER');
            
        $validator
            ->allowEmpty('E_CONTAINER_FEATURE_NAME');

        return $validator;
    }
}
