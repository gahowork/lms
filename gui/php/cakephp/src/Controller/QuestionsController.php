<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Questions Controller
 *
 * @property \App\Model\Table\QuestionsTable $Questions
 */
class QuestionsController extends AppController
{

	/**
	 * Index method
	 *
	 * @return \Cake\Network\Response|null
	*/
	public function index()
	{
		$questionIndexFilter = $this->request->session()->read('QuestionIndex.Filter');

		$conditions = [];
		if (isset($questionIndexFilter)) {
			foreach ($questionIndexFilter['header'] as $index => $filterelement) {
				$conditions[] = ['Questions.header LIKE'=> '%'. h($filterelement) . '%'];
			}
			foreach ($questionIndexFilter['description'] as $index => $filterelement) {
				$conditions[] = ['Questions.description LIKE'=> '%'. h($filterelement) . '%'];
			}
			foreach ($questionIndexFilter['questiontype'] as $index => $filterelement) {
				$conditions[] = ['Questiontypes.description LIKE'=> '%'. h($filterelement) . '%'];
			}
		}

		$this->paginate = [
			'contain' => ['Questiontypes'],
			'order' => [
				'Questions.header' => 'asc'
			],
			'conditions' => $conditions,
		];

		$questions = $this->paginate($this->Questions);

		$this->set(compact('questions', 'questionIndexFilter'));
		$this->set('_serialize', ['questions', 'questionIndexFilter']);
	}

	/**
	 * View method
	 *
	 * @param string|null $id Question id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$question = $this->Questions->get($id, [
			'contain' => ['Questiontypes', 'Adventurequestions', 'Questionanswers', 'Questioncategories', 'Questionlevels', 'Questionpictures', 'Questionpictures.Pictures', 'Questionanswers.Answers', 'Questioncategories.Categories', 'Questionlevels.Levels', 'Adventurequestions.Adventures']
		]);

		$this->set('question', $question);
		$this->set('_serialize', ['question']);
	}

	/**
	 * Add method
	 *
	 * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
	 */
	public function add()
	{
		$question = $this->Questions->newEntity();
		if ($this->request->is('post')) {
			$question = $this->Questions->patchEntity($question, $this->request->data);
			if ($this->Questions->save($question)) {
				$this->Flash->success(__('The question has been saved.'));

				return $this->redirect(['action' => 'view', $question->id]);
			}
			$this->Flash->error(__('The question could not be saved. Please, try again.'));
		}
		$questiontypes = $this->Questions->Questiontypes->find('list', ['limit' => 200]);
		$this->set(compact('question', 'questiontypes'));
		$this->set('_serialize', ['question']);
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id Question id.
	 * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function edit($id = null)
	{
		$question = $this->Questions->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$question = $this->Questions->patchEntity($question, $this->request->data);
			if ($this->Questions->save($question)) {
				$this->Flash->success(__('The question has been saved.'));

				return $this->redirect(['action' => 'view', $question->id]);
			}
			$this->Flash->error(__('The question could not be saved. Please, try again.'));
		}
		$questiontypes = $this->Questions->Questiontypes->find('list', ['limit' => 200]);
		$this->set(compact('question', 'questiontypes'));
		$this->set('_serialize', ['question']);
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Question id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$question = $this->Questions->get($id);
		if ($this->Questions->delete($question)) {
			$this->Flash->success(__('The question has been deleted.'));
		} else {
			$this->Flash->error(__('The question could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}

	/**
	 * addfilter method
	 *
	*/
	public function addfilter()
	{
		$this->request->allowMethod(['post']);

		$qif = $this->request->session()->read('QuestionIndex.Filter');
		if(!isset($qif)){
			$qif = [
				'header'=>[],
				'description'=>[],
				'questiontype'=>[]
			];
		}

		if(isset($this->request->data['header'])){
			$qif['header'][] = $this->request->data['header'];
		}
		if(isset($this->request->data['description'])){
			$qif['description'][] = $this->request->data['description'];
		}
		if(isset($this->request->data['questiontype'])){
			$qif['questiontype'][] = $this->request->data['questiontype'];
		}
		$this->request->session()->write('QuestionIndex.Filter', $qif);

		return $this->redirect(['action' => 'index']);
	}

	/**
	 * deletefilter method
	 *
	*/
	public function deletefilter($type, $id)
	{
		$qif = $this->request->session()->read('QuestionIndex.Filter');
		if(!isset($qif)){
			$qif = [
				'header'=>[],
				'description'=>[],
				'questiontype'=>[]
			];
		}

		if($type == 'header'){
			if (isset($qif['header'][$id])) {
				unset($qif['header'][$id]);
			}
		}

		$this->request->session()->write('QuestionIndex.Filter', $qif);

		return $this->redirect(['action' => 'index']);
	}

	/**
	 * deletefilter method
	 *
	*/
	public function deleteallfilter()
	{
		$this->request->session()->delete('QuestionIndex.Filter');
		return $this->redirect(['action' => 'index']);
	}
}
