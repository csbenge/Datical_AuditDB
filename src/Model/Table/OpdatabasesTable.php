<?php
namespace App\Model\Table;

use App\Model\Entity\Opdatabase;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Opdatabases Model
 *
 */
class OpdatabasesTable extends Table
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
        $this->table('opdatabases');
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
            ->allowEmpty('VENDOR');
            
        $validator
            ->allowEmpty('VERSION');
            
        $validator
            ->allowEmpty('DRIVER');
            
        $validator
            ->allowEmpty('DRIVERVERSION');
            
        $validator
            ->allowEmpty('JDBCVERSION');
            
        $validator
            ->allowEmpty('ENGINE');
            
        $validator
            ->allowEmpty('USERNAME');
            
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
            ->allowEmpty('DBNAME');
            
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
            ->allowEmpty('ECONTAINER_CLASS');
            
        $validator
            ->allowEmpty('E_CONTAINER');
            
        $validator
            ->allowEmpty('E_CONTAINER_FEATURE_NAME');

        return $validator;
    }
}
