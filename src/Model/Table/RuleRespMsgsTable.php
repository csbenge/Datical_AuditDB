<?php
namespace App\Model\Table;

use App\Model\Entity\RuleRespMsg;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RuleRespMsgs Model
 *
 */
class RuleRespMsgsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('rule_resp_msgs');
        $this->displayField('FK_RULE_RESPS_ID');
        $this->primaryKey(['FK_RULE_RESPS_ID', 'RULE_RESP_MSGS_IDX']);
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
            ->allowEmpty('FK_RULE_RESPS_ID', 'create');
            
        $validator
            ->allowEmpty('MESSAGE');
            
        $validator
            ->allowEmpty('RULE_RESP_MSGS_IDX', 'create');

        return $validator;
    }
}
