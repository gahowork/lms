<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Questionlevels Controller
 *
 * @property \App\Model\Table\QuestionlevelsTable $Questionlevels
 */
class QuestionlevelsController extends AppController
{

	/**
	 * Index method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function index()
	{
		$this->paginate = [
			'contain' => ['Questions', 'Levels']
		];
		$questionlevels = $this->paginate($this->Questionlevels);

		$this->set(compact('questionlevels'));
		$this->set('_serialize', ['questionlevels']);
	}

	/**
	 * View method
	 *
	 * @param string|null $id Questionlevel id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$questionlevel = $this->Questionlevels->get($id, [
			'contain' => ['Questions', 'Levels']
		]);

		$this->set('questionlevel', $questionlevel);
		$this->set('_serialize', ['questionlevel']);
	}

	/**
	 * Viewbyquestion method
	 *
	 * @param string|null $id Questionlevel id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function viewbyquestion($id = null)
	{
		$questionlevel = $this->Questionlevels->get($id, [
			'contain' => ['Questions', 'Levels']
		]);

		$this->set('questionlevel', $questionlevel);
		$this->set('_serialize', ['questionlevel']);
	}

	/**
	 * Add method
	 *
	 * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
	 */
	public function add()
	{
		$questionlevel = $this->Questionlevels->newEntity();
		if ($this->request->is('post')) {
			$questionlevel = $this->Questionlevels->patchEntity($questionlevel, $this->request->data);
			if ($this->Questionlevels->save($questionlevel)) {
				$this->Flash->success(__('The questionlevel has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The questionlevel could not be saved. Please, try again.'));
		}
		$questions = $this->Questionlevels->Questions->find('list', ['limit' => 200]);
		$levels = $this->Questionlevels->Levels->find('list', ['limit' => 200]);
		$this->set(compact('questionlevel', 'questions', 'levels'));
		$this->set('_serialize', ['questionlevel']);
	}

	/**
	 * Addbyquestion method
	 *
	 * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
	 */
	public function addbyquestion($id = null)
	{
		$questionlevel = $this->Questionlevels->newEntity();
		$questionlevel->question_id = $id;
		if ($this->request->is('post')) {
			$questionlevel = $this->Questionlevels->patchEntity($questionlevel, $this->request->data);
			if ($this->Questionlevels->save($questionlevel)) {
				$this->Flash->success(__('The questionlevel has been saved.'));

				return $this->redirect(['controller'=>'questions', 'action' => 'view', $questionlevel->question_id]);
			}
			$this->Flash->error(__('The questionlevel could not be saved. Please, try again.'));
		}
		$questions = $this->Questionlevels->Questions->find('list', ['limit' => 200]);
		$levels = $this->Questionlevels->Levels->find('list', ['limit' => 200]);
		$this->set(compact('questionlevel', 'questions', 'levels'));
		$this->set('_serialize', ['questionlevel']);
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id Questionlevel id.
	 * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function edit($id = null)
	{
		$questionlevel = $this->Questionlevels->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$questionlevel = $this->Questionlevels->patchEntity($questionlevel, $this->request->data);
			if ($this->Questionlevels->save($questionlevel)) {
				$this->Flash->success(__('The questionlevel has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The questionlevel could not be saved. Please, try again.'));
		}
		$questions = $this->Questionlevels->Questions->find('list', ['limit' => 200]);
		$levels = $this->Questionlevels->Levels->find('list', ['limit' => 200]);
		$this->set(compact('questionlevel', 'questions', 'levels'));
		$this->set('_serialize', ['questionlevel']);
	}

	/**
	 * Editbyquestion method
	 *
	 * @param string|null $id Questionlevel id.
	 * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function editbyquestion($id = null)
	{
		$questionlevel = $this->Questionlevels->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$questionlevel = $this->Questionlevels->patchEntity($questionlevel, $this->request->data);
			if ($this->Questionlevels->save($questionlevel)) {
				$this->Flash->success(__('The questionlevel has been saved.'));

				return $this->redirect(['controller'=>'questionlevels', 'action' => 'viewbyquestion', $questionlevel->id]);
			}
			$this->Flash->error(__('The questionlevel could not be saved. Please, try again.'));
		}
		$questions = $this->Questionlevels->Questions->find('list', ['limit' => 200]);
		$levels = $this->Questionlevels->Levels->find('list', ['limit' => 200]);
		$this->set(compact('questionlevel', 'questions', 'levels'));
		$this->set('_serialize', ['questionlevel']);
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Questionlevel id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$questionlevel = $this->Questionlevels->get($id);
		if ($this->Questionlevels->delete($questionlevel)) {
			$this->Flash->success(__('The questionlevel has been deleted.'));
		} else {
			$this->Flash->error(__('The questionlevel could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}

	/**
	 * Deletebyquestion method
	 *
	 * @param string|null $id Questionlevel id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function deletebyquestion($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$questionlevel = $this->Questionlevels->get($id);
		if ($this->Questionlevels->delete($questionlevel)) {
			$this->Flash->success(__('The questionlevel has been deleted.'));
		} else {
			$this->Flash->error(__('The questionlevel could not be deleted. Please, try again.'));
		}

		return $this->redirect(['controller'=>'questions', 'action' => 'view', $questionlevel->question_id]);
	}
}
