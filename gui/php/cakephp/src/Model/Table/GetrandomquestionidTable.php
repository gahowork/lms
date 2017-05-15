<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Getrandomquestionid Model
 *
 * @method \App\Model\Entity\Getrandomquestionid get($primaryKey, $options = [])
 * @method \App\Model\Entity\Getrandomquestionid newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Getrandomquestionid[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Getrandomquestionid|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Getrandomquestionid patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Getrandomquestionid[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Getrandomquestionid findOrCreate($search, callable $callback = null, $options = [])
 */
class GetrandomquestionidTable extends Table
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

        $this->table('getrandomquestionid');
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
            ->requirePresence('id', 'create')
            ->notEmpty('id');

        return $validator;
    }
}
