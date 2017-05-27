<?php
namespace App\Controller;

use App\Controller\AppController;

class QuestionanswerpicturesController extends AppController
{

	public function viewbyquestionanswer($id = null)
	{
		$questionanswerpicture = $this->Questionanswerpictures->get($id, [
			'contain' => ['Questionanswers', 'Pictures']
		]);

		$this->set('questionanswerpicture', $questionanswerpicture);
		$this->set('_serialize', ['questionanswerpicture']);
	}

	public function addbyquestionanswer($id = null)
	{
		$questionanswerpicture = $this->Questionanswerpictures->newEntity();
		$questionanswerpicture->questionanswer_id = $id;
		if ($this->request->is('post')) {
			$questionanswerpicture = $this->Questionanswerpictures->patchEntity($questionanswerpicture, $this->request->data);
			if ($this->Questionanswerpictures->save($questionanswerpicture)) {
				$this->Flash->success(__('The questionanswer has been saved.'));

				return $this->redirect(['controller'=>'questionanswers', 'action' => 'viewbyquestion', $questionanswerpicture->questionanswer_id]);
			}
			$this->Flash->error(__('The questionanswer could not be saved. Please, try again.'));
		}
		$pictures = $this->Questionanswerpictures->Pictures->find('all',['limit' => 200]);
		$this->set(compact('questionanswerpicture', $questionanswerpicture));
		$this->set(compact('pictures', $pictures));
		$this->set('_serialize', ['questionanswerpicture', 'pictures']);
	}

	public function editbyquestionanswer($id = null)
	{
		$questionanswerpicture = $this->Questionanswerpictures->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$questionanswerpicture = $this->Questionanswerpictures->patchEntity($questionanswerpicture, $this->request->data);
			if ($this->Questionanswerpictures->save($questionanswerpicture)) {
				$this->Flash->success(__('The questionanswer has been saved.'));

				return $this->redirect(['controller'=>'questionanswerpictures', 'action' => 'viewbyquestionanswer', $questionanswerpicture->id]);
			}
			$this->Flash->error(__('The questionanswer could not be saved. Please, try again.'));
		}
		$pictures = $this->Questionanswerpictures->Pictures->find('all', ['limit' => 200]);
		$this->set(compact('questionanswerpicture', 'pictures'));
		$this->set('_serialize', ['questionanswerpicture']);
	}

	public function deletebyquestionanswer($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$questionanswerpictures = $this->Questionanswerpictures->get($id);
		if ($this->Questionanswerpictures->delete($questionanswerpictures)) {
			$this->Flash->success(__('The questionanswer has been deleted.'));
		} else {
			$this->Flash->error(__('The questionanswer could not be deleted. Please, try again.'));
		}

		return $this->redirect(['controller'=>'questionanswers', 'action' => 'viewbyquestion', $questionanswerpictures->questionanswer_id]);
	}

}
