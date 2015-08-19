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
            'bindingKey' => 'FK_OP_DATABASES_ID',
            'dependent' => true
        ]);
        $this->hasMany('ChangesetDetails', [
            'foreignKey' => 'FK_OPERATIONS_ID',
            'bindingKey' => 'ID',
            'dependent' => true
        ]);
        $this->hasMany('Changeimpacts', [
            'foreignKey' => 'FK_OPERATIONS_ID',
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
            ->allowEmpty('STEP');

        $validator
            ->allowEmpty('DEPLOY_THRESHOLD');

        $validator
            ->allowEmpty('VALIDITY_SETTING');

        $validator
            ->add('TOTAL_CHANGESETS', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('TOTAL_CHANGESETS');

        $validator
            ->add('TOTAL_ROWS_TOUCHED', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('TOTAL_ROWS_TOUCHED');

        $validator
            ->add('TOTAL_VALUES_DELETED', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('TOTAL_VALUES_DELETED');

        $validator
            ->allowEmpty('FK_OP_DATABASES_ID');

        $validator
            ->allowEmpty('PREDICTED_SUCCESS');

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
            ->allowEmpty('GEN_SQL');

        $validator
            ->allowEmpty('GEN_ROLLBACK_SQL');

        $validator
            ->allowEmpty('GEN_SQL_PATH');

        $validator
            ->allowEmpty('GEN_ROLLBACK_SQL_PATH');

        $validator
            ->add('START_TIME', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('START_TIME');

        $validator
            ->add('STOP_TIME', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('STOP_TIME');

        $validator
            ->allowEmpty('TOTAL_TIME');

        $validator
            ->allowEmpty('DEPLOY_MODE');

        $validator
            ->allowEmpty('LOG_PATH');

        return $validator;
    }
}
