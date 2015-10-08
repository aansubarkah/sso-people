<?php
namespace App\Model\Table;

use App\Model\Entity\ChiefsDepartement;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ChiefsDepartements Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Chieves
 * @property \Cake\ORM\Association\BelongsTo $Departements
 */
class ChiefsDepartementsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('chiefs_departements');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Chieves', [
            'foreignKey' => 'chief_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Departements', [
            'foreignKey' => 'departement_id',
            'joinType' => 'INNER'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->add('start', 'valid', ['rule' => 'date'])
            ->requirePresence('start', 'create')
            ->notEmpty('start');

        $validator
            ->add('end', 'valid', ['rule' => 'date'])
            ->allowEmpty('end');

        $validator
            ->add('active', 'valid', ['rule' => 'boolean'])
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['chief_id'], 'Chieves'));
        $rules->add($rules->existsIn(['departement_id'], 'Departements'));
        return $rules;
    }
}
