<?php
namespace App\Model\Table;

use App\Model\Entity\Tablemod;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tablemods Model
 *
 */
class TablemodsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('tablemods');
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
            ->allowEmpty('TABLENAME');
            
        $validator
            ->add('ROWSTOUCHED', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ROWSTOUCHED');
            
        $validator
            ->add('VALUESDELETED', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('VALUESDELETED');
            
        $validator
            ->allowEmpty('OPERATION_TABLEMODS_ID');
            
        $validator
            ->add('OPERATION_TABLEMODS_IDX', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('OPERATION_TABLEMODS_IDX');
            
        $validator
            ->allowEmpty('ECONTAINER_CLASS');
            
        $validator
            ->allowEmpty('E_CONTAINER');
            
        $validator
            ->allowEmpty('E_CONTAINER_FEATURE_NAME');

        return $validator;
    }
}
