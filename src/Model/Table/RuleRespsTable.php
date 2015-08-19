<?php
namespace App\Model\Table;

use App\Model\Entity\RuleResp;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RuleResps Model
 *
 */
class RuleRespsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('rule_resps');
        $this->displayField('ID');
        $this->primaryKey('ID');
        $this->hasMany('RuleRespMsgs', [
            'foreignKey' => 'ID',
            'bindingKey' => 'FK_RULE_RESPS_ID',
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
            ->allowEmpty('RULE_NAME');

        $validator
            ->allowEmpty('PHASE');

        $validator
            ->allowEmpty('LEVEL_NAME');

        $validator
            ->allowEmpty('FK_OPERATIONS_ID');

        $validator
            ->allowEmpty('OPERATIONS_RULE_RESPS_IDX');

        $validator
            ->allowEmpty('FK_CHANGE_IMPACTS_ID');

        $validator
            ->allowEmpty('CHANGE_IMPACTS_RULE_RESPS_IDX');

        $validator
            ->allowEmpty('PARENT_TABLE');

        return $validator;
    }
}
