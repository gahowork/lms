<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Questionpictures Controller
 *
 * @property \App\Model\Table\QuestionpicturesTable $Questionpictures
 */
class QuestionpicturesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Questions', 'Pictures']
        ];
        $questionpictures = $this->paginate($this->Questionpictures);

        $this->set(compact('questionpictures'));
        $this->set('_serialize', ['questionpictures']);
    }

    /**
     * View method
     *
     * @param string|null $id Questionpicture id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questionpicture = $this->Questionpictures->get($id, [
            'contain' => ['Questions', 'Pictures']
        ]);

        $this->set('questionpicture', $questionpicture);
        $this->set('_serialize', ['questionpicture']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $questionpicture = $this->Questionpictures->newEntity();
        if ($this->request->is('post')) {
            $questionpicture = $this->Questionpictures->patchEntity($questionpicture, $this->request->data);
            if ($this->Questionpictures->save($questionpicture)) {
                $this->Flash->success(__('The questionpicture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questionpicture could not be saved. Please, try again.'));
        }
        $questions = $this->Questionpictures->Questions->find('list', ['limit' => 200]);
        $pictures = $this->Questionpictures->Pictures->find('list', ['limit' => 200]);
        $this->set(compact('questionpicture', 'questions', 'pictures'));
        $this->set('_serialize', ['questionpicture']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Questionpicture id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questionpicture = $this->Questionpictures->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questionpicture = $this->Questionpictures->patchEntity($questionpicture, $this->request->data);
            if ($this->Questionpictures->save($questionpicture)) {
                $this->Flash->success(__('The questionpicture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questionpicture could not be saved. Please, try again.'));
        }
        $questions = $this->Questionpictures->Questions->find('list', ['limit' => 200]);
        $pictures = $this->Questionpictures->Pictures->find('list', ['limit' => 200]);
        $this->set(compact('questionpicture', 'questions', 'pictures'));
        $this->set('_serialize', ['questionpicture']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Questionpicture id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questionpicture = $this->Questionpictures->get($id);
        if ($this->Questionpictures->delete($questionpicture)) {
            $this->Flash->success(__('The questionpicture has been deleted.'));
        } else {
            $this->Flash->error(__('The questionpicture could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
