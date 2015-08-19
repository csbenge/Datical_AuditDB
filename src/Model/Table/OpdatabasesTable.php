<?php
namespace App\Model\Table;

use App\Model\Entity\OpDatabase;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OpDatabases Model
 *
 */
class OpDatabasesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('op_databases');
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
            ->allowEmpty('VENDOR');
            
        $validator
            ->allowEmpty('VERSION');
            
        $validator
            ->allowEmpty('DRIVER');
            
        $validator
            ->allowEmpty('DRIVER_VERSION');
            
        $validator
            ->allowEmpty('JDBC_VERSION');
            
        $validator
            ->allowEmpty('ENGINE');
            
        $validator
            ->allowEmpty('USER_NAME');
            
        $validator
            ->allowEmpty('HOST');
            
        $validator
            ->add('PORT', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('PORT');
            
        $validator
            ->allowEmpty('SID');
            
        $validator
            ->allowEmpty('SERVICE_NAME');
            
        $validator
            ->allowEmpty('DB_NAME');
            
        $validator
            ->allowEmpty('APPLICATION_NAME');
            
        $validator
            ->allowEmpty('INSTANCE_NAME');
            
        $validator
            ->allowEmpty('URL');
            
        $validator
            ->add('LAST_DEPLOY', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('LAST_DEPLOY');
            
        $validator
            ->add('LAST_ROLLBACK', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('LAST_ROLLBACK');
            
        $validator
            ->add('LAST_CHANGELOG_SYNC', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('LAST_CHANGELOG_SYNC');
            
        $validator
            ->allowEmpty('FK_PROJECTS_UUID');

        return $validator;
    }
}
