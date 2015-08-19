<?php
namespace App\Model\Table;

use App\Model\Entity\TableMod;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TableMods Model
 *
 */
class TableModsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('table_mods');
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
            ->allowEmpty('TABLE_NAME');
            
        $validator
            ->add('ROWS_TOUCHED', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ROWS_TOUCHED');
            
        $validator
            ->add('VALUES_DELETED', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('VALUES_DELETED');
            
        $validator
            ->allowEmpty('FK_OPERATIONS_ID');
            
        $validator
            ->allowEmpty('OPERATIONS_TABLE_MODS_IDX');

        return $validator;
    }
}
