<?php
namespace App\Model\Table;

use App\Model\Entity\Message;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Messages Model
 *
 */
class MessagesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('MESSAGE');
        $this->displayField('ID');
        $this->primaryKey('ID');
        $this->hasOne('Changeimpacts', [
            'foreignKey' => 'FK_OPERATION_ID',
            'bindingKey' => 'ID',
            'dependent' => true
        ]);
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
            ->requirePresence('DTYPE', 'create')
            ->notEmpty('DTYPE');
            
        $validator
            ->add('E_VERSION', 'valid', ['rule' => 'numeric'])
            ->requirePresence('E_VERSION', 'create')
            ->notEmpty('E_VERSION');
            
        $validator
            ->add('MESSAGE_TIME', 'valid', ['rule' => 'datetime'])
            ->requirePresence('MESSAGE_TIME', 'create')
            ->notEmpty('MESSAGE_TIME');
            
        $validator
            ->requirePresence('MESSAGE_LEVEL', 'create')
            ->notEmpty('MESSAGE_LEVEL');
            
        $validator
            ->requirePresence('TEXT', 'create')
            ->notEmpty('TEXT');
            
        $validator
            ->allowEmpty('CHANGEIMPACT_MESSAGES_ID');
            
        $validator
            ->add('CHANGEIMPACT_MESSAGES_IDX', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('CHANGEIMPACT_MESSAGES_IDX');
            
        $validator
            ->allowEmpty('ECONTAINER_CLASS');

        return $validator;
    }
}
