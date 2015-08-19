<?php
namespace App\Model\Table;

use App\Model\Entity\Label;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Labels Model
 *
 */
class LabelsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('labels');
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
            ->requirePresence('NAME', 'create')
            ->notEmpty('NAME');
            
        $validator
            ->requirePresence('PROJECT_NAME', 'create')
            ->notEmpty('PROJECT_NAME');
            
        $validator
            ->requirePresence('FK_PROJECTS_UUID', 'create')
            ->notEmpty('FK_PROJECTS_UUID');

        return $validator;
    }
}
