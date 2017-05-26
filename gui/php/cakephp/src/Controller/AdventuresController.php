<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Adventures Controller
 *
 * @property \App\Model\Table\AdventuresTable $Adventures
 */
class AdventuresController extends AppController
{

	/**
	 * Index method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function index()
	{
		$adventures = $this->paginate($this->Adventures);

		$this->set(compact('adventures'));
		$this->set('_serialize', ['adventures']);
	}

	/**
	 * View method
	 *
	 * @param string|null $id Adventure id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$adventure = $this->Adventures->get($id, [
			'contain' => ['Adventurequestions', 'Adventurequestions.Questions']
		]);

		$this->set('adventure', $adventure);
		$this->set('_serialize', ['adventure']);
	}

	/**
	 * Add method
	 *
	 * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
	 */
	public function add()
	{
		$adventure = $this->Adventures->newEntity();
		if ($this->request->is('post')) {
			$adventure = $this->Adventures->patchEntity($adventure, $this->request->data);
			if ($this->Adventures->save($adventure)) {
				$this->Flash->success(__('The adventure has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The adventure could not be saved. Please, try again.'));
		}
		$this->set(compact('adventure'));
		$this->set('_serialize', ['adventure']);
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id Adventure id.
	 * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function edit($id = null)
	{
		$adventure = $this->Adventures->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$adventure = $this->Adventures->patchEntity($adventure, $this->request->data);
			if ($this->Adventures->save($adventure)) {
				$this->Flash->success(__('The adventure has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The adventure could not be saved. Please, try again.'));
		}
		$this->set(compact('adventure'));
		$this->set('_serialize', ['adventure']);
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Adventure id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$adventure = $this->Adventures->get($id);
		if ($this->Adventures->delete($adventure)) {
			$this->Flash->success(__('The adventure has been deleted.'));
		} else {
			$this->Flash->error(__('The adventure could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}
}
