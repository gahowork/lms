<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Questiontypes Model
 *
 * @property \Cake\ORM\Association\HasMany $Questions
 *
 * @method \App\Model\Entity\Questiontype get($primaryKey, $options = [])
 * @method \App\Model\Entity\Questiontype newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Questiontype[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Questiontype|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Questiontype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Questiontype[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Questiontype findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QuestiontypesTable extends Table
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

        $this->table('questiontypes');
        $this->displayField('description');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Questions', [
            'foreignKey' => 'questiontype_id'
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
            ->requirePresence('description', 'create')
            ->notEmpty('description')
            ->add('description', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['description']));

        return $rules;
    }
}
