<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Questions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Questiontypes
 * @property \Cake\ORM\Association\HasMany $Adventurequestions
 * @property \Cake\ORM\Association\HasMany $Questionanswers
 * @property \Cake\ORM\Association\HasMany $Questioncategories
 * @property \Cake\ORM\Association\HasMany $Questionlevels
 * @property \Cake\ORM\Association\HasMany $Questionpictures
 *
 * @method \App\Model\Entity\Question get($primaryKey, $options = [])
 * @method \App\Model\Entity\Question newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Question[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Question|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Question patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Question[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Question findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QuestionsTable extends Table
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

        $this->table('questions');
        $this->displayField('header');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Questiontypes', [
            'foreignKey' => 'questiontype_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Adventurequestions', [
            'foreignKey' => 'question_id'
        ]);
        $this->hasMany('Questionanswers', [
            'foreignKey' => 'question_id'
        ]);
        $this->hasMany('Questioncategories', [
            'foreignKey' => 'question_id'
        ]);
        $this->hasMany('Questionlevels', [
            'foreignKey' => 'question_id'
        ]);
        $this->hasMany('Questionpictures', [
            'foreignKey' => 'question_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('header', 'create')
            ->notEmpty('header');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

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
        $rules->add($rules->existsIn(['questiontype_id'], 'Questiontypes'));

        return $rules;
    }
}
