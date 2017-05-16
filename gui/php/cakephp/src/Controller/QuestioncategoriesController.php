<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Questioncategories Controller
 *
 * @property \App\Model\Table\QuestioncategoriesTable $Questioncategories
 */
class QuestioncategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Questions', 'Categories']
        ];
        $questioncategories = $this->paginate($this->Questioncategories);

        $this->set(compact('questioncategories'));
        $this->set('_serialize', ['questioncategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Questioncategory id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questioncategory = $this->Questioncategories->get($id, [
            'contain' => ['Questions', 'Categories']
        ]);

        $this->set('questioncategory', $questioncategory);
        $this->set('_serialize', ['questioncategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $questioncategory = $this->Questioncategories->newEntity();
        if ($this->request->is('post')) {
            $questioncategory = $this->Questioncategories->patchEntity($questioncategory, $this->request->data);
            if ($this->Questioncategories->save($questioncategory)) {
                $this->Flash->success(__('The questioncategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questioncategory could not be saved. Please, try again.'));
        }
        $questions = $this->Questioncategories->Questions->find('list', ['limit' => 200]);
        $categories = $this->Questioncategories->Categories->find('list', ['limit' => 200]);
        $this->set(compact('questioncategory', 'questions', 'categories'));
        $this->set('_serialize', ['questioncategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Questioncategory id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questioncategory = $this->Questioncategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questioncategory = $this->Questioncategories->patchEntity($questioncategory, $this->request->data);
            if ($this->Questioncategories->save($questioncategory)) {
                $this->Flash->success(__('The questioncategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questioncategory could not be saved. Please, try again.'));
        }
        $questions = $this->Questioncategories->Questions->find('list', ['limit' => 200]);
        $categories = $this->Questioncategories->Categories->find('list', ['limit' => 200]);
        $this->set(compact('questioncategory', 'questions', 'categories'));
        $this->set('_serialize', ['questioncategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Questioncategory id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questioncategory = $this->Questioncategories->get($id);
        if ($this->Questioncategories->delete($questioncategory)) {
            $this->Flash->success(__('The questioncategory has been deleted.'));
        } else {
            $this->Flash->error(__('The questioncategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
