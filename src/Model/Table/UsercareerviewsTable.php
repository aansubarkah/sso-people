<?php
namespace App\Model\Table;

use App\Model\Entity\Usercareerview;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usercareerviews Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Levels
 * @property \Cake\ORM\Association\BelongsTo $Roles
 * @property \Cake\ORM\Association\BelongsTo $Departements
 */
class UsercareerviewsTable extends Table
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

        $this->table('usercareerviews');
        $this->displayField('name');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Levels', [
            'foreignKey' => 'level_id'
        ]);
        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id'
        ]);
        $this->belongsTo('Departements', [
            'foreignKey' => 'departement_id'
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
            ->allowEmpty('number');

        $validator
            ->allowEmpty('name');

        $validator
            ->add('active', 'valid', ['rule' => 'boolean'])
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        $validator
            ->add('userlevelid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('userlevelid');

        $validator
            ->add('levelstart', 'valid', ['rule' => 'date'])
            ->allowEmpty('levelstart');

        $validator
            ->add('levelend', 'valid', ['rule' => 'date'])
            ->allowEmpty('levelend');

        $validator
            ->add('levelactive', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('levelactive');

        $validator
            ->allowEmpty('levelname');

        $validator
            ->allowEmpty('leveldescription');

        $validator
            ->allowEmpty('positionlevelname');

        $validator
            ->add('userroleid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('userroleid');

        $validator
            ->add('rolestart', 'valid', ['rule' => 'date'])
            ->allowEmpty('rolestart');

        $validator
            ->add('roleend', 'valid', ['rule' => 'date'])
            ->allowEmpty('roleend');

        $validator
            ->add('roleactive', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('roleactive');

        $validator
            ->allowEmpty('rolename');

        $validator
            ->allowEmpty('roledescription');

        $validator
            ->add('userdepartementid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('userdepartementid');

        $validator
            ->add('departementstart', 'valid', ['rule' => 'date'])
            ->allowEmpty('departementstart');

        $validator
            ->add('departementend', 'valid', ['rule' => 'date'])
            ->allowEmpty('departementend');

        $validator
            ->add('departementactive', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('departementactive');

        $validator
            ->allowEmpty('departementname');

        $validator
            ->allowEmpty('departementdescription');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['level_id'], 'Levels'));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));
        $rules->add($rules->existsIn(['departement_id'], 'Departements'));
        return $rules;
    }
}
