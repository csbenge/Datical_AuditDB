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
        $this->table('messages');
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
            ->allowEmpty('FK_CHANGE_IMPACTS_ID');
            
        $validator
            ->allowEmpty('MESSAGES_IDX');

        return $validator;
    }
}
