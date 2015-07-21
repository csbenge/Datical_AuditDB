<?php
namespace App\Model\Table;

use App\Model\Entity\Changeimpact;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Changeimpacts Model
 *
 */
class ChangeimpactsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->belongsTo('ChangesetDetails');
        $this->table('changeimpacts');
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
            ->requirePresence('DTYPE', 'create')
            ->notEmpty('DTYPE');
            
        $validator
            ->add('E_VERSION', 'valid', ['rule' => 'numeric'])
            ->requirePresence('E_VERSION', 'create')
            ->notEmpty('E_VERSION');
            
        $validator
            ->allowEmpty('CHANGE_DESCRIPTION');
            
        $validator
            ->allowEmpty('AUTHOR');
            
        $validator
            ->allowEmpty('CANROLLBACK');
            
        $validator
            ->allowEmpty('FAILUREMESSAGE');
            
        $validator
            ->requirePresence('SKIPPED', 'create')
            ->notEmpty('SKIPPED');
            
        $validator
            ->allowEmpty('OPERATION_CHANGEIMPACTS_ID');
            
        $validator
            ->allowEmpty('CHNGESET_DETAIL_CHNGEIMPACT_ID');
            
        $validator
            ->allowEmpty('IDX');

        return $validator;
    }
}
