<?php
namespace App\Model\Table;

use App\Model\Entity\LabelInfo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LabelInfos Model
 *
 */
class LabelInfosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('label_infos');
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
            ->requirePresence('METADATA_KEY', 'create')
            ->notEmpty('METADATA_KEY');
            
        $validator
            ->allowEmpty('METADATA_VALUE');
            
        $validator
            ->requirePresence('FK_LABELS_ID', 'create')
            ->notEmpty('FK_LABELS_ID');

        return $validator;
    }
}
