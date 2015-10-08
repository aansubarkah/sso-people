<?php
namespace App\Model\Table;

use App\Model\Entity\Education;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Educations Model
 *
 * @property \Cake\ORM\Association\HasMany $Usereducationviews
 * @property \Cake\ORM\Association\BelongsToMany $Users
 */
class EducationsTable extends Table
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

        $this->table('educations');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Usereducationviews', [
            'foreignKey' => 'education_id'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'education_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'educations_users'
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
}
