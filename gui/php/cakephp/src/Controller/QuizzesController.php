<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use App\Form\QuestionAnswerCheckForm;

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

	public function checkanswer()
	{
		$this->request->allowMethod(['post']);

		$qaf = new QuestionAnswerCheckForm();
		if($qaf->validate($this->request->data) ) {
			$questionanswerTable = TableRegistry::get('Questionanswers');
			$questionanswer = $questionanswerTable->get($this->request->data['questionanswer_id']);

			if($questionanswer->result == 1) {
				return $this->redirect(['controller'=>'quizzes', 'action' => 'checkok']);
			} else {
				return $this->redirect(['controller'=>'quizzes', 'action' => 'checknotok', $questionanswer->question_id]);
			}
		}
	}

	public function checkok()
	{

	}

	public function checknotok($id = null)
	{
		$questionTable = TableRegistry::get('Questions');
		$question = $questionTable->get(
			$id,
			[
				'contain' => [
					'Questionanswers',
					'Questionanswers.Questionanswerpictures',
					'Questionanswers.Questionanswerpictures.Pictures'
				]
			]
		);

		$rightAnswer = null;
		foreach ($question->questionanswers as $key => $questionanswer) {
			if($questionanswer->result == 1){
				$rightAnswer = $questionanswer;
				break; //first one is quite well for this demo
			}
		}

		$this->set(compact('rightAnswer'));
		$this->set('_serialize', ['rightAnswer']);
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
