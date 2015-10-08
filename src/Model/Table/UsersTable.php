<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\HasMany $Chiefs
 * @property \Cake\ORM\Association\HasMany $Usercareerviews
 * @property \Cake\ORM\Association\HasMany $Userdepartementviews
 * @property \Cake\ORM\Association\HasMany $Usereducationviews
 * @property \Cake\ORM\Association\HasMany $Userlevelviews
 * @property \Cake\ORM\Association\HasMany $Userroleviews
 * @property \Cake\ORM\Association\BelongsToMany $Departements
 * @property \Cake\ORM\Association\BelongsToMany $Educations
 * @property \Cake\ORM\Association\BelongsToMany $Levels
 * @property \Cake\ORM\Association\BelongsToMany $Roles
 * @property \Cake\ORM\Association\BelongsToMany $Positionlevels
 * @property \Cake\ORM\Association\BelongsToMany $Positions
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Chiefs', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Usercareerviews', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Userdepartementviews', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Usereducationviews', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Userlevelviews', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Userroleviews', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsToMany('Departements', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'departement_id',
            'joinTable' => 'departements_users'
        ]);
        $this->belongsToMany('Educations', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'education_id',
            'joinTable' => 'educations_users'
        ]);
        $this->belongsToMany('Levels', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'level_id',
            'joinTable' => 'levels_users'
        ]);
        $this->belongsToMany('Roles', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'role_id',
            'joinTable' => 'roles_users'
        ]);
        $this->belongsToMany('Positionlevels', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'positionlevel_id',
            'joinTable' => 'users_positionlevels'
        ]);
        $this->belongsToMany('Positions', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'position_id',
            'joinTable' => 'users_positions'
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
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->allowEmpty('number');

        $validator
            ->allowEmpty('oldnumber');

        $validator
            ->allowEmpty('cardnumber');

        $validator
            ->allowEmpty('name');

        $validator
            ->allowEmpty('fullname');

        $validator
            ->add('birthdate', 'valid', ['rule' => 'date'])
            ->allowEmpty('birthdate');

        $validator
            ->allowEmpty('birthplace');

        $validator
            ->add('sex', 'valid', ['rule' => 'boolean'])
            ->requirePresence('sex', 'create')
            ->notEmpty('sex');

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
        $rules->add($rules->isUnique(['username']));
        return $rules;
    }
}
