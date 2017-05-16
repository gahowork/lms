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
            'contain' => ['Questions', 'Answers']
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
            'contain' => ['Questions', 'Answers']
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
        $answers = $this->Questionanswers->Answers->find('list', ['limit' => 200]);
        $this->set(compact('questionanswer', 'questions', 'answers'));
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
        $answers = $this->Questionanswers->Answers->find('list', ['limit' => 200]);
        $this->set(compact('questionanswer', 'questions', 'answers'));
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
}
