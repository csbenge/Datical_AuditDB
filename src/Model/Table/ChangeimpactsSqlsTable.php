<?php
namespace App\Model\Table;

use App\Model\Entity\ChangeimpactsSql;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ChangeimpactsSqls Model
 *
 */
class ChangeimpactsSqlsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->belongsTo('Changesetimpacts');
        $this->table('changeimpacts_sqls');
        $this->displayField('CHANGEIMPACT_SQL_ID');
        $this->primaryKey(['CHANGEIMPACT_SQL_ID']);
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
            ->allowEmpty('CHANGEIMPACT_SQL_ID', 'create');
            
        $validator
            ->allowEmpty('SQL_TEXT');
            
        $validator
            ->add('CHANGEIMPACT_SQL_IDX', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('CHANGEIMPACT_SQL_IDX', 'create');

        return $validator;
    }
}
