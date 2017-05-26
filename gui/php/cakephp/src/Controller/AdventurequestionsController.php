<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Adventurequestions Controller
 *
 * @property \App\Model\Table\AdventurequestionsTable $Adventurequestions
 */
class AdventurequestionsController extends AppController
{

	/**
	 * Index method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function index()
	{
		$this->paginate = [
			'contain' => ['Adventures', 'Questions']
		];
		$adventurequestions = $this->paginate($this->Adventurequestions);

		$this->set(compact('adventurequestions'));
		$this->set('_serialize', ['adventurequestions']);
	}

	/**
	 * View method
	 *
	 * @param string|null $id Adventurequestion id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$adventurequestion = $this->Adventurequestions->get($id, [
			'contain' => ['Adventures', 'Questions']
		]);

		$this->set('adventurequestion', $adventurequestion);
		$this->set('_serialize', ['adventurequestion']);
	}

	/**
	 * Viewbyadventure method
	 *
	 * @param string|null $id Adventurequestion id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function viewbyadventure($id = null)
	{
		$adventurequestion = $this->Adventurequestions->get($id, [
			'contain' => ['Questions']
		]);

		$this->set('adventurequestion', $adventurequestion);
		$this->set('_serialize', ['adventurequestion']);
	}

	/**
	 * Viewbyquestion method
	 *
	 * @param string|null $id Adventurequestion id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function viewbyquestion($id = null)
	{
		$adventurequestion = $this->Adventurequestions->get($id, [
			'contain' => ['Adventures']
		]);

		$this->set('adventurequestion', $adventurequestion);
		$this->set('_serialize', ['adventurequestion']);
	}

	/**
	 * Add method
	 *
	 * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
	 */
	public function add()
	{
		$adventurequestion = $this->Adventurequestions->newEntity();
		if ($this->request->is('post')) {
			$adventurequestion = $this->Adventurequestions->patchEntity($adventurequestion, $this->request->data);
			if ($this->Adventurequestions->save($adventurequestion)) {
				$this->Flash->success(__('The adventurequestion has been saved.'));

				return $this->redirect(['action' => 'view', $adventurequestion->id]);
			}
			$this->Flash->error(__('The adventurequestion could not be saved. Please, try again.'));
		}
		$adventures = $this->Adventurequestions->Adventures->find('list', ['limit' => 200]);
		$questions = $this->Adventurequestions->Questions->find('list', ['limit' => 200]);
		$this->set(compact('adventurequestion', 'adventures', 'questions'));
		$this->set('_serialize', ['adventurequestion']);
	}

	/**
	 * Addbyadventure method
	 *
	 * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
	 */
	public function addbyadventure($id = null)
	{
		$adventurequestion = $this->Adventurequestions->newEntity();
		$adventurequestion->adventure_id = $id;
		if ($this->request->is('post')) {
			$adventurequestion = $this->Adventurequestions->patchEntity($adventurequestion, $this->request->data);
			if ($this->Adventurequestions->save($adventurequestion)) {
				$this->Flash->success(__('The adventurequestion has been saved.'));

				return $this->redirect(['action' => 'viewbyadventure', $adventurequestion->id]);
			}
			$this->Flash->error(__('The adventurequestion could not be saved. Please, try again.'));
		}
		$questions = $this->Adventurequestions->Questions->find('list', ['limit' => 200]);
		$this->set(compact('adventurequestion', 'questions'));
		$this->set('_serialize', ['adventurequestion']);
	}

	/**
	 * Addbyquestion method
	 *
	 * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
	 */
	public function addbyquestion($id = null)
	{
		$adventurequestion = $this->Adventurequestions->newEntity();
		$adventurequestion->question_id = $id;
		if ($this->request->is('post')) {
			$adventurequestion = $this->Adventurequestions->patchEntity($adventurequestion, $this->request->data);
			if ($this->Adventurequestions->save($adventurequestion)) {
				$this->Flash->success(__('The adventurequestion has been saved.'));

				return $this->redirect(['action' => 'viewbyquestion', $adventurequestion->id]);
			}
			$this->Flash->error(__('The adventurequestion could not be saved. Please, try again.'));
		}
		$adventures = $this->Adventurequestions->Adventures->find('list', ['limit' => 200]);
		$this->set(compact('adventurequestion', 'adventures'));
		$this->set('_serialize', ['adventurequestion']);
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id Adventurequestion id.
	 * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function edit($id = null)
	{
		$adventurequestion = $this->Adventurequestions->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$adventurequestion = $this->Adventurequestions->patchEntity($adventurequestion, $this->request->data);
			if ($this->Adventurequestions->save($adventurequestion)) {
				$this->Flash->success(__('The adventurequestion has been saved.'));

				return $this->redirect(['action' => 'view', $adventurequestion->id]);
			}
			$this->Flash->error(__('The adventurequestion could not be saved. Please, try again.'));
		}
		$adventures = $this->Adventurequestions->Adventures->find('list', ['limit' => 200]);
		$questions = $this->Adventurequestions->Questions->find('list', ['limit' => 200]);
		$this->set(compact('adventurequestion', 'adventures', 'questions'));
		$this->set('_serialize', ['adventurequestion']);
	}

	/**
	 * Editbyadventure method
	 *
	 * @param string|null $id Adventurequestion id.
	 * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function editbyadventure($id = null)
	{
		$adventurequestion = $this->Adventurequestions->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$adventurequestion = $this->Adventurequestions->patchEntity($adventurequestion, $this->request->data);
			if ($this->Adventurequestions->save($adventurequestion)) {
				$this->Flash->success(__('The adventurequestion has been saved.'));

				return $this->redirect(['action' => 'viewbyadventure', $adventurequestion->id]);
			}
			$this->Flash->error(__('The adventurequestion could not be saved. Please, try again.'));
		}
		$questions = $this->Adventurequestions->Questions->find('list', ['limit' => 200]);
		$this->set(compact('adventurequestion', 'questions'));
		$this->set('_serialize', ['adventurequestion']);
	}

	/**
	 * Editbyquestion method
	 *
	 * @param string|null $id Adventurequestion id.
	 * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function editbyquestion($id = null)
	{
		$adventurequestion = $this->Adventurequestions->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$adventurequestion = $this->Adventurequestions->patchEntity($adventurequestion, $this->request->data);
			if ($this->Adventurequestions->save($adventurequestion)) {
				$this->Flash->success(__('The adventurequestion has been saved.'));

				return $this->redirect(['action' => 'viewbyquestion', $adventurequestion->id]);
			}
			$this->Flash->error(__('The adventurequestion could not be saved. Please, try again.'));
		}
		$adventures = $this->Adventurequestions->Adventures->find('list', ['limit' => 200]);
		$this->set(compact('adventurequestion', 'adventures'));
		$this->set('_serialize', ['adventurequestion']);
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Adventurequestion id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$adventurequestion = $this->Adventurequestions->get($id);
		if ($this->Adventurequestions->delete($adventurequestion)) {
			$this->Flash->success(__('The adventurequestion has been deleted.'));
		} else {
			$this->Flash->error(__('The adventurequestion could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Adventurequestion id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function deletebyadventure($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$adventurequestion = $this->Adventurequestions->get($id);
		if ($this->Adventurequestions->delete($adventurequestion)) {
			$this->Flash->success(__('The adventurequestion has been deleted.'));
		} else {
			$this->Flash->error(__('The adventurequestion could not be deleted. Please, try again.'));
		}

		return $this->redirect(['controller'=>'adventures','action' => 'view', $adventurequestion->adventure_id]);
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Adventurequestion id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function deletebyquestion($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$adventurequestion = $this->Adventurequestions->get($id);
		if ($this->Adventurequestions->delete($adventurequestion)) {
			$this->Flash->success(__('The adventurequestion has been deleted.'));
		} else {
			$this->Flash->error(__('The adventurequestion could not be deleted. Please, try again.'));
		}

		return $this->redirect(['controller'=>'questions','action' => 'view', $adventurequestion->question_id]);
	}

}
