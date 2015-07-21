<?php
namespace App\Model\Table;

use App\Model\Entity\Operation;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Operations Model
 *
 */
class OperationsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('operations');
        $this->displayField('ID');
        $this->primaryKey('ID');
        $this->hasMany('Opdatabases', [
            'foreignKey' => 'ID',
            'bindingKey' => 'OPDATABASE_DB_ID',
            'dependent' => true
        ]);
        $this->hasMany('ClientDetails', [
            'foreignKey' => 'OPERATION_ID',
            'bindingKey' => 'ID',
            'dependent' => true
        ]);
        $this->hasMany('ChangesetDetails', [
            'foreignKey' => 'OPERATION_CHANGESET_ID',
            'bindingKey' => 'ID',
            'dependent' => true
        ]);
        $this->hasMany('Changeimpacts', [
            'foreignKey' => 'OPERATION_CHANGEIMPACTS_ID',
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
            ->add('E_VERSION', 'valid', ['rule' => 'numeric'])
            ->requirePresence('E_VERSION', 'create')
            ->notEmpty('E_VERSION');
            
        $validator
            ->allowEmpty('PROJECT_NAME');
            
        $validator
            ->add('OPDATE', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('OPDATE');
            
        $validator
            ->allowEmpty('STEP');
            
        $validator
            ->allowEmpty('DEPLOY_THRESHOLD');
            
        $validator
            ->allowEmpty('VALIDITY_SETTING');
            
        $validator
            ->add('TOTALROWSTOUCHED', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('TOTALROWSTOUCHED');
            
        $validator
            ->add('TOTALVALUESDELETED', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('TOTALVALUESDELETED');
            
        $validator
            ->allowEmpty('OPDATABASE_DB_ID');
            
        $validator
            ->allowEmpty('PREDICTEDSUCCESS');
            
        $validator
            ->allowEmpty('DEPLOY_RESULT');
            
        $validator
            ->allowEmpty('DESCRIPTION');
            
        $validator
            ->allowEmpty('ACTION_TYPE');
            
        $validator
            ->allowEmpty('CONTEXTS');
            
        $validator
            ->allowEmpty('LABELS');
            
        $validator
            ->allowEmpty('GENSQL');
            
        $validator
            ->allowEmpty('GENROLLBACKSQL');
            
        $validator
            ->allowEmpty('GENSQLPATH');
            
        $validator
            ->allowEmpty('GENROLLBACKSQLPATH');
            
        $validator
            ->add('STARTTIME', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('STARTTIME');
            
        $validator
            ->add('STOPTIME', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('STOPTIME');
            
        $validator
            ->allowEmpty('TOTALTIME');
            
        $validator
            ->allowEmpty('DEPLOYMODE');
            
        $validator
            ->allowEmpty('LOGPATH');

        return $validator;
    }
}
