<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Quizzes Controller
 *
 */
class QuizzesController extends AppController
{

	/**
	 * Index method
	 *
	 * @return \Cake\Network\Response|null
	*/
	public function index()
	{
	}

	/**
	 * randomquestion method
	 *
	 * @return \Cake\Network\Response|null
	 */
	 public function randomquestion()
	 {

		$questionObject = TableRegistry::get('Questions');
		$randomquestion = $questionObject->get(
			$this->randomquestionid(),
			[
				'contain' => [
					'Questionanswers',
					'Questionanswers.Questionanswerpictures',
					'Questionanswers.Questionanswerpictures.Pictures',

					'Questiontypes',
					'Questionpictures',
					'Questionpictures.Pictures',

					'Questioncategories',
					'Questioncategories.Categories',

					'Questionlevels',
					'Questionlevels.Levels',

					'Adventurequestions',
					'Adventurequestions.Adventures',
				]
			]
		);

		$this->set(compact('randomquestion'));
	}

	/**
	 * selectcategory method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function selectcategory()
	{
	}

	/**
	 * selectadventure method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function selectadventure()
	{
	}

	private function randomquestionid()
	{
		$questionObject = TableRegistry::get('Questions');
		$query = $questionObject->find(
			'all',
			[
				'join'=>[
					'table' => 'questionanswers',
					'alias' => 'Questionanswers',
					'type' => 'INNER',
					'conditions' => [
						'Questions.id = Questionanswers.question_id'
					]
				],
				'order'=>'rand()',
				'limit'=> 1
			]
		);

		return $query->first()->id;
	}

}
