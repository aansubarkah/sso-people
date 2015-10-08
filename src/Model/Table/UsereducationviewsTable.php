<?php
namespace App\Model\Table;

use App\Model\Entity\Usereducationview;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usereducationviews Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Educations
 * @property \Cake\ORM\Association\BelongsTo $Users
 */
class UsereducationviewsTable extends Table
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

        $this->table('usereducationviews');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Educations', [
            'foreignKey' => 'education_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->requirePresence('id', 'create')
            ->notEmpty('id');

        $validator
            ->add('date', 'valid', ['rule' => 'date'])
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->add('active', 'valid', ['rule' => 'boolean'])
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        $validator
            ->allowEmpty('usernumber');

        $validator
            ->allowEmpty('username');

        $validator
            ->add('useractive', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('useractive');

        $validator
            ->allowEmpty('educationname');

        $validator
            ->allowEmpty('educationdescription');

        $validator
            ->add('educationactive', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('educationactive');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['education_id'], 'Educations'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
