<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Levels Controller
 *
 * @property \App\Model\Table\LevelsTable $Levels
 */
class LevelsController extends AppController
{

	/**
	 * Index method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function index()
	{
		$this->paginate = [
			'contain' => ['Pictures']
		];
		$levels = $this->paginate($this->Levels);

		$this->set(compact('levels'));
		$this->set('_serialize', ['levels']);
	}

	/**
	 * View method
	 *
	 * @param string|null $id Level id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$level = $this->Levels->get($id, [
			'contain' => ['Pictures', 'Questionlevels']
		]);

		$this->set('level', $level);
		$this->set('_serialize', ['level']);
	}

	/**
	 * Add method
	 *
	 * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
	 */
	public function add()
	{
		$level = $this->Levels->newEntity();
		if ($this->request->is('post')) {
			$level = $this->Levels->patchEntity($level, $this->request->data);
			if ($this->Levels->save($level)) {
				$this->Flash->success(__('The level has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The level could not be saved. Please, try again.'));
		}
		$pictures = $this->Levels->Pictures->find('list', ['limit' => 200]);
		$this->set(compact('level', 'pictures'));
		$this->set('_serialize', ['level']);
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id Level id.
	 * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function edit($id = null)
	{
		$level = $this->Levels->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$level = $this->Levels->patchEntity($level, $this->request->data);
			if ($this->Levels->save($level)) {
				$this->Flash->success(__('The level has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The level could not be saved. Please, try again.'));
		}
		$pictures = $this->Levels->Pictures->find('list', ['limit' => 200]);
		$this->set(compact('level', 'pictures'));
		$this->set('_serialize', ['level']);
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Level id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$level = $this->Levels->get($id);
		if ($this->Levels->delete($level)) {
			$this->Flash->success(__('The level has been deleted.'));
		} else {
			$this->Flash->error(__('The level could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}
}
