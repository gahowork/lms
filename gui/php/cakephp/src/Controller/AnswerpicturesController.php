<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Answerpictures Controller
 *
 * @property \App\Model\Table\AnswerpicturesTable $Answerpictures
 */
class AnswerpicturesController extends AppController
{

	/**
	 * Index method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function index()
	{
		$this->paginate = [
			'contain' => ['Answers', 'Pictures']
		];
		$answerpictures = $this->paginate($this->Answerpictures);

		$this->set(compact('answerpictures'));
		$this->set('_serialize', ['answerpictures']);
	}

	/**
	 * View method
	 *
	 * @param string|null $id Answerpicture id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$answerpicture = $this->Answerpictures->get($id, [
			'contain' => ['Answers', 'Pictures']
		]);

		$this->set('answerpicture', $answerpicture);
		$this->set('_serialize', ['answerpicture']);
	}

	/**
	 * Add method
	 *
	 * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
	 */
	public function add()
	{
		$answerpicture = $this->Answerpictures->newEntity();
		if ($this->request->is('post')) {
			$answerpicture = $this->Answerpictures->patchEntity($answerpicture, $this->request->data);
			if ($this->Answerpictures->save($answerpicture)) {
				$this->Flash->success(__('The answerpicture has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The answerpicture could not be saved. Please, try again.'));
		}
		$answers = $this->Answerpictures->Answers->find('list', ['limit' => 200]);
		$pictures = $this->Answerpictures->Pictures->find('list', ['limit' => 200]);
		$this->set(compact('answerpicture', 'answers', 'pictures'));
		$this->set('_serialize', ['answerpicture']);
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id Answerpicture id.
	 * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function edit($id = null)
	{
		$answerpicture = $this->Answerpictures->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$answerpicture = $this->Answerpictures->patchEntity($answerpicture, $this->request->data);
			if ($this->Answerpictures->save($answerpicture)) {
				$this->Flash->success(__('The answerpicture has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The answerpicture could not be saved. Please, try again.'));
		}
		$answers = $this->Answerpictures->Answers->find('list', ['limit' => 200]);
		$pictures = $this->Answerpictures->Pictures->find('list', ['limit' => 200]);
		$this->set(compact('answerpicture', 'answers', 'pictures'));
		$this->set('_serialize', ['answerpicture']);
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Answerpicture id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$answerpicture = $this->Answerpictures->get($id);
		if ($this->Answerpictures->delete($answerpicture)) {
			$this->Flash->success(__('The answerpicture has been deleted.'));
		} else {
			$this->Flash->error(__('The answerpicture could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}
}
