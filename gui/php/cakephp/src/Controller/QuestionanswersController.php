<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Questionanswers Controller
 *
 * @property \App\Model\Table\QuestionanswersTable $Questionanswers
 */
class QuestionanswersController extends AppController
{

	/**
	 * Index method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function index()
	{
		$this->paginate = [
			'contain' => ['Questions']
		];
		$questionanswers = $this->paginate($this->Questionanswers);

		$this->set(compact('questionanswers'));
		$this->set('_serialize', ['questionanswers']);
	}

	/**
	 * View method
	 *
	 * @param string|null $id Questionanswer id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$questionanswer = $this->Questionanswers->get($id, [
			'contain' => ['Questions', 'Questionanswerpictures']
		]);

		$this->set('questionanswer', $questionanswer);
		$this->set('_serialize', ['questionanswer']);
	}

	/**
	 * Viewbyquestion method
	 *
	 * @param string|null $id Questionanswer id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function viewbyquestion($id = null)
	{
		$questionanswer = $this->Questionanswers->get($id, [
			'contain' => ['Questions', 'Questionanswerpictures', 'Questionanswerpictures.Pictures']
		]);

		$this->set('questionanswer', $questionanswer);
		$this->set('_serialize', ['questionanswer']);
	}

	/**
	 * Add method
	 *
	 * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
	 */
	public function add()
	{
		$questionanswer = $this->Questionanswers->newEntity();
		if ($this->request->is('post')) {
			$questionanswer = $this->Questionanswers->patchEntity($questionanswer, $this->request->data);
			if ($this->Questionanswers->save($questionanswer)) {
				$this->Flash->success(__('The questionanswer has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The questionanswer could not be saved. Please, try again.'));
		}
		$questions = $this->Questionanswers->Questions->find('list', ['limit' => 200]);
		$questionanswerpictures = $this->Questionanswers->Questionanswerpictures->find('list', ['limit' => 200]);
		$this->set(compact('questionanswer', 'questions', 'questionanswerpictures'));
		$this->set('_serialize', ['questionanswer']);
	}

	/**
	 * Addbyquestion method
	 *
	 * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
	 */
	public function addbyquestion($id = null)
	{
		$questionanswer = $this->Questionanswers->newEntity();
		$questionanswer->question_id = $id;
		if ($this->request->is('post')) {
			$questionanswer = $this->Questionanswers->patchEntity($questionanswer, $this->request->data);
			if ($this->Questionanswers->save($questionanswer)) {
				$this->Flash->success(__('The questionanswer has been saved.'));

				return $this->redirect(['controller'=>'questionanswers', 'action' => 'viewbyquestion', $questionanswer->id]);
			}
			$this->Flash->error(__('The questionanswer could not be saved. Please, try again.'));
		}
		$questions = $this->Questionanswers->Questions->find('list', ['limit' => 200]);
		$questionanswerpictures = $this->Questionanswers->Questionanswerpictures->find('list', ['limit' => 200]);
		$this->set(compact('questionanswer', 'questions', 'questionanswerpictures'));
		$this->set('_serialize', ['questionanswer']);
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id Questionanswer id.
	 * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function edit($id = null)
	{
		$questionanswer = $this->Questionanswers->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$questionanswer = $this->Questionanswers->patchEntity($questionanswer, $this->request->data);
			if ($this->Questionanswers->save($questionanswer)) {
				$this->Flash->success(__('The questionanswer has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The questionanswer could not be saved. Please, try again.'));
		}
		$questions = $this->Questionanswers->Questions->find('list', ['limit' => 200]);
		$questionanswerpictures = $this->Questionanswers->Questionanswerpictures->find('list', ['limit' => 200]);
		$this->set(compact('questionanswer', 'questions', 'questionanswerpictures'));
		$this->set('_serialize', ['questionanswer']);
	}

	/**
	 * Editbyquestion method
	 *
	 * @param string|null $id Questionanswer id.
	 * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function editbyquestion($id = null)
	{
		$questionanswer = $this->Questionanswers->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$questionanswer = $this->Questionanswers->patchEntity($questionanswer, $this->request->data);
			if ($this->Questionanswers->save($questionanswer)) {
				$this->Flash->success(__('The questionanswer has been saved.'));

				return $this->redirect(['controller'=>'questionanswers', 'action' => 'viewbyquestion', $questionanswer->id]);
			}
			$this->Flash->error(__('The questionanswer could not be saved. Please, try again.'));
		}
		$questions = $this->Questionanswers->Questions->find('list', ['limit' => 200]);
		$questionanswerpictures = $this->Questionanswers->Questionanswerpictures->find('list', ['limit' => 200]);
		$this->set(compact('questionanswer', 'questions', 'questionanswerpictures'));
		$this->set('_serialize', ['questionanswer']);
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Questionanswer id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$questionanswer = $this->Questionanswers->get($id);
		if ($this->Questionanswers->delete($questionanswer)) {
			$this->Flash->success(__('The questionanswer has been deleted.'));
		} else {
			$this->Flash->error(__('The questionanswer could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}

	/**
	 * Deletebyquestion method
	 *
	 * @param string|null $id Questionanswer id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function deletebyquestion($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$questionanswer = $this->Questionanswers->get($id);
		if ($this->Questionanswers->delete($questionanswer)) {
			$this->Flash->success(__('The questionanswer has been deleted.'));
		} else {
			$this->Flash->error(__('The questionanswer could not be deleted. Please, try again.'));
		}

		return $this->redirect(['controller'=>'questions', 'action' => 'view', $questionanswer->question_id]);
	}
}
