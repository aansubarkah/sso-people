<?php
namespace App\Model\Table;

use App\Model\Entity\Departement;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Departements Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ParentDepartements
 * @property \Cake\ORM\Association\HasMany $ChildDepartements
 * @property \Cake\ORM\Association\HasMany $Usercareerviews
 * @property \Cake\ORM\Association\HasMany $Userdepartementviews
 * @property \Cake\ORM\Association\BelongsToMany $Chiefs
 * @property \Cake\ORM\Association\BelongsToMany $Users
 */
class DepartementsTable extends Table
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

        $this->table('departements');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Tree');

        $this->belongsTo('ParentDepartements', [
            'className' => 'Departements',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('ChildDepartements', [
            'className' => 'Departements',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('Usercareerviews', [
            'foreignKey' => 'departement_id'
        ]);
        $this->hasMany('Userdepartementviews', [
            'foreignKey' => 'departement_id'
        ]);
        $this->belongsToMany('Chiefs', [
            'foreignKey' => 'departement_id',
            'targetForeignKey' => 'chief_id',
            'joinTable' => 'chiefs_departements'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'departement_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'departements_users'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->add('lft', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('lft');

        $validator
            ->add('rght', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('rght');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->allowEmpty('address');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentDepartements'));
        return $rules;
    }
}
