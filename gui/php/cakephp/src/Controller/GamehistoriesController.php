<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Gamehistories Controller
 *
 * @property \App\Model\Table\GamehistoriesTable $Gamehistories
 */
class GamehistoriesController extends AppController
{

	/**
	 * Index method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function index()
	{
		$this->paginate = [
			'contain' => ['Games', 'Questionanswers']
		];
		$gamehistories = $this->paginate($this->Gamehistories);

		$this->set(compact('gamehistories'));
		$this->set('_serialize', ['gamehistories']);
	}

	/**
	 * View method
	 *
	 * @param string|null $id Gamehistory id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$gamehistory = $this->Gamehistories->get($id, [
			'contain' => ['Games', 'Questionanswers']
		]);

		$this->set('gamehistory', $gamehistory);
		$this->set('_serialize', ['gamehistory']);
	}

	/**
	 * Add method
	 *
	 * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
	 */
	public function add()
	{
		$gamehistory = $this->Gamehistories->newEntity();
		if ($this->request->is('post')) {
			$gamehistory = $this->Gamehistories->patchEntity($gamehistory, $this->request->data);
			if ($this->Gamehistories->save($gamehistory)) {
				$this->Flash->success(__('The gamehistory has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The gamehistory could not be saved. Please, try again.'));
		}
		$games = $this->Gamehistories->Games->find('list', ['limit' => 200]);
		$questionanswers = $this->Gamehistories->Questionanswers->find('list', ['limit' => 200]);
		$this->set(compact('gamehistory', 'games', 'questionanswers'));
		$this->set('_serialize', ['gamehistory']);
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id Gamehistory id.
	 * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function edit($id = null)
	{
		$gamehistory = $this->Gamehistories->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$gamehistory = $this->Gamehistories->patchEntity($gamehistory, $this->request->data);
			if ($this->Gamehistories->save($gamehistory)) {
				$this->Flash->success(__('The gamehistory has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The gamehistory could not be saved. Please, try again.'));
		}
		$games = $this->Gamehistories->Games->find('list', ['limit' => 200]);
		$questionanswers = $this->Gamehistories->Questionanswers->find('list', ['limit' => 200]);
		$this->set(compact('gamehistory', 'games', 'questionanswers'));
		$this->set('_serialize', ['gamehistory']);
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Gamehistory id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$gamehistory = $this->Gamehistories->get($id);
		if ($this->Gamehistories->delete($gamehistory)) {
			$this->Flash->success(__('The gamehistory has been deleted.'));
		} else {
			$this->Flash->error(__('The gamehistory could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}
}
