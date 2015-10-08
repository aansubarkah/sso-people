<?php
namespace App\Model\Table;

use App\Model\Entity\Position;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Positions Model
 *
 * @property \Cake\ORM\Association\HasMany $Positionlevels
 * @property \Cake\ORM\Association\BelongsToMany $Users
 */
class PositionsTable extends Table
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

        $this->table('positions');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Positionlevels', [
            'foreignKey' => 'position_id'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'position_id',
            'targetForeignKey' => 'user_id',
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->add('active', 'valid', ['rule' => 'boolean'])
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        return $validator;
    }
}
