<?php
namespace App\Model\Table;

use App\Model\Entity\StoredLogicCompMsg;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StoredLogicCompMsgs Model
 *
 */
class StoredLogicCompMsgsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('stored_logic_comp_msgs');
        $this->displayField('FK_STORED_LOGIC_STATES_ID');
        $this->primaryKey(['FK_STORED_LOGIC_STATES_ID', 'STORED_LOGIC_COMP_MSGS_IDX']);
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
            ->allowEmpty('FK_STORED_LOGIC_STATES_ID', 'create');
            
        $validator
            ->allowEmpty('MESSAGE');
            
        $validator
            ->allowEmpty('STORED_LOGIC_COMP_MSGS_IDX', 'create');

        return $validator;
    }
}
