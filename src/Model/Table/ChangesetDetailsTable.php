<?php
namespace App\Model\Table;

use App\Model\Entity\ChangesetDetail;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ChangesetDetails Model
 *
 */
class ChangesetDetailsTable extends Table
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
        $this->table('CHANGESET_DETAILS');
        $this->displayField('ID');
        $this->primaryKey('ID');
        $this->hasMany('Changeimpacts', [
            'foreignKey' => 'FK_CHANGESET_DETAILS_ID',
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
            ->requirePresence('CHANGEID', 'create')
            ->notEmpty('CHANGEID');
            
        $validator
            ->requirePresence('AUTHOR', 'create')
            ->notEmpty('AUTHOR');
            
        $validator
            ->requirePresence('FILENAME', 'create')
            ->notEmpty('FILENAME');
            
        $validator
            ->allowEmpty('CHECKSUM');
            
        $validator
            ->allowEmpty('DBMS');
            
        $validator
            ->allowEmpty('LABELS');
            
        $validator
            ->allowEmpty('CONTEXTS');
            
        $validator
            ->allowEmpty('FAIL_ON_ERROR');
            
        $validator
            ->allowEmpty('ON_VALIDATION_FAIL');
            
        $validator
            ->allowEmpty('ON_RUN_ALWAYS');
            
        $validator
            ->allowEmpty('RUN_ON_CHANGE');
            
        $validator
            ->allowEmpty('RESULT');
            
        $validator
            ->allowEmpty('FK_OPERATION_ID');

        $validator
            ->allowEmpty('FK_CHANGESET_DETAILS_ID');

        return $validator;
    }
}
