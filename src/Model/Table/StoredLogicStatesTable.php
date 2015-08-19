<?php
namespace App\Model\Table;

use App\Model\Entity\StoredLogicState;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StoredLogicStates Model
 *
 */
class StoredLogicStatesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('stored_logic_states');
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
            ->requirePresence('FK_OPERATIONS_ID', 'create')
            ->notEmpty('FK_OPERATIONS_ID');
            
        $validator
            ->add('E_VERSION', 'valid', ['rule' => 'numeric'])
            ->requirePresence('E_VERSION', 'create')
            ->notEmpty('E_VERSION');
            
        $validator
            ->allowEmpty('OBJECT_NAME');
            
        $validator
            ->allowEmpty('OBJECT_TYPE');
            
        $validator
            ->allowEmpty('STATE_AFTER');
            
        $validator
            ->allowEmpty('STATE_BEFORE');

        return $validator;
    }
}
