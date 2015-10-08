<?php
namespace App\Model\Table;

use App\Model\Entity\Positionlevel;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Positionlevels Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Positions
 * @property \Cake\ORM\Association\HasMany $Levels
 * @property \Cake\ORM\Association\BelongsToMany $Users
 */
class PositionlevelsTable extends Table
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

        $this->table('positionlevels');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Positions', [
            'foreignKey' => 'position_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Levels', [
            'foreignKey' => 'positionlevel_id'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'positionlevel_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'users_positionlevels'
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
        $rules->add($rules->existsIn(['position_id'], 'Positions'));
        return $rules;
    }
}
