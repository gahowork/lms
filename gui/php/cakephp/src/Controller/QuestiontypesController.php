<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Questiontypes Controller
 *
 * @property \App\Model\Table\QuestiontypesTable $Questiontypes
 */
class QuestiontypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $questiontypes = $this->paginate($this->Questiontypes);

        $this->set(compact('questiontypes'));
        $this->set('_serialize', ['questiontypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Questiontype id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questiontype = $this->Questiontypes->get($id, [
            'contain' => ['Questions']
        ]);

        $this->set('questiontype', $questiontype);
        $this->set('_serialize', ['questiontype']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $questiontype = $this->Questiontypes->newEntity();
        if ($this->request->is('post')) {
            $questiontype = $this->Questiontypes->patchEntity($questiontype, $this->request->data);
            if ($this->Questiontypes->save($questiontype)) {
                $this->Flash->success(__('The questiontype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questiontype could not be saved. Please, try again.'));
        }
        $this->set(compact('questiontype'));
        $this->set('_serialize', ['questiontype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Questiontype id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questiontype = $this->Questiontypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questiontype = $this->Questiontypes->patchEntity($questiontype, $this->request->data);
            if ($this->Questiontypes->save($questiontype)) {
                $this->Flash->success(__('The questiontype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questiontype could not be saved. Please, try again.'));
        }
        $this->set(compact('questiontype'));
        $this->set('_serialize', ['questiontype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Questiontype id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questiontype = $this->Questiontypes->get($id);
        if ($this->Questiontypes->delete($questiontype)) {
            $this->Flash->success(__('The questiontype has been deleted.'));
        } else {
            $this->Flash->error(__('The questiontype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
