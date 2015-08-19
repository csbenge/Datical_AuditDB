<?php
namespace App\Model\Table;

use App\Model\Entity\AuditSequence;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AuditSequences Model
 *
 */
class AuditSequencesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('audit_sequences');
        $this->displayField('TABLE_NAME');
        $this->primaryKey('TABLE_NAME');
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
            ->allowEmpty('TABLE_NAME', 'create');
            
        $validator
            ->allowEmpty('SEQUENCE_NUMBER');

        return $validator;
    }
}
