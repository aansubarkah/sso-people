<?php
namespace App\Model\Table;

use App\Model\Entity\Level;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Levels Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Positionlevels
 * @property \Cake\ORM\Association\HasMany $Usercareerviews
 * @property \Cake\ORM\Association\HasMany $Userlevelviews
 * @property \Cake\ORM\Association\BelongsToMany $Users
 */
class LevelsTable extends Table
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

        $this->table('levels');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Positionlevels', [
            'foreignKey' => 'positionlevel_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Usercareerviews', [
            'foreignKey' => 'level_id'
        ]);
        $this->hasMany('Userlevelviews', [
            'foreignKey' => 'level_id'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'level_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'levels_users'
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
            ->requirePresence('description', 'create')
            ->notEmpty('description');

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
        $rules->add($rules->existsIn(['positionlevel_id'], 'Positionlevels'));
        return $rules;
    }
}
