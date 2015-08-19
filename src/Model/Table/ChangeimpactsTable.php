<?php
namespace App\Model\Table;

use App\Model\Entity\ChangeImpact;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ChangeImpacts Model
 *
 */
class ChangeImpactsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->belongsTo('ChangesetDetails');
        $this->table('change_impacts');
        $this->displayField('ID');
        $this->primaryKey('ID');
        $this->hasMany('ChangeImpactSqls', [
           'foreignKey' => 'ID',
           'bindingKey' => 'FK_CHANGE_IMPACTS_ID',
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
            ->allowEmpty('CHANGE_DESCRIPTION');

        $validator
            ->allowEmpty('CAN_ROLLBACK');

        $validator
            ->allowEmpty('FAILURE_MESSAGE');

        $validator
            ->requirePresence('SKIPPED', 'create')
            ->notEmpty('SKIPPED');

        $validator
            ->allowEmpty('FK_OPERATIONS_ID');

        $validator
            ->allowEmpty('FK_CHANGESET_DETAILS_ID');

        $validator
            ->allowEmpty('CHANGE_IMPACTS_IDX');

        return $validator;
    }
}
