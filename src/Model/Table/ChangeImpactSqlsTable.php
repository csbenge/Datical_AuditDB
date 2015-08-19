<?php
namespace App\Model\Table;

use App\Model\Entity\ChangeImpactSql;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ChangeImpactSqls Model
 *
 */
class ChangeImpactSqlsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->belongsTo('ChangeImpacts');
        $this->table('change_impact_sqls');
        $this->displayField('FK_CHANGE_IMPACTS_ID');
        $this->primaryKey(['FK_CHANGE_IMPACTS_ID']);
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
            ->allowEmpty('FK_CHANGE_IMPACTS_ID', 'create');

        $validator
            ->allowEmpty('SQL_TEXT');

        $validator
            ->allowEmpty('CHANGE_IMPACT_SQLS_IDX', 'create');

        return $validator;
    }
}
