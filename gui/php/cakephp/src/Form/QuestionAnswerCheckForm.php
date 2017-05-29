<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class QuestionAnswerCheckForm extends Form
{
	protected function _buildSchema(Schema $schema)
	{
		$schema->addField('questionanswer_id', ['type'=>'int']);
		$schema->addField('quizztype', ['type' => 'int']);
		$schema->addField('category_id', ['type' => 'int']);
		$schema->addField('adventure_id', ['type' => 'int']);

		return $schema;
	}

	protected function _buildValidator(Validator $validator)
	{
		$validator->requirePresence(['questionanswer_id', 'quizztype'], 'create');
		return $validator;
	}

	protected function _execute(array $data)
	{
		return true;
	}
}

?>
