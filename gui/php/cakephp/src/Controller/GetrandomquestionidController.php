<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Getrandomquestionid Controller
 *
 * @property \App\Model\Table\GetrandomquestionidTable $Getrandomquestionid
 */
class GetrandomquestionidController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $getrandomquestionid = $this->paginate($this->Getrandomquestionid);

        $this->set(compact('getrandomquestionid'));
        $this->set('_serialize', ['getrandomquestionid']);
    }

    /**
     * View method
     *
     * @param string|null $id Getrandomquestionid id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $getrandomquestionid = $this->Getrandomquestionid->get($id, [
            'contain' => []
        ]);

        $this->set('getrandomquestionid', $getrandomquestionid);
        $this->set('_serialize', ['getrandomquestionid']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $getrandomquestionid = $this->Getrandomquestionid->newEntity();
        if ($this->request->is('post')) {
            $getrandomquestionid = $this->Getrandomquestionid->patchEntity($getrandomquestionid, $this->request->data);
            if ($this->Getrandomquestionid->save($getrandomquestionid)) {
                $this->Flash->success(__('The getrandomquestionid has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The getrandomquestionid could not be saved. Please, try again.'));
        }
        $this->set(compact('getrandomquestionid'));
        $this->set('_serialize', ['getrandomquestionid']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Getrandomquestionid id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $getrandomquestionid = $this->Getrandomquestionid->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $getrandomquestionid = $this->Getrandomquestionid->patchEntity($getrandomquestionid, $this->request->data);
            if ($this->Getrandomquestionid->save($getrandomquestionid)) {
                $this->Flash->success(__('The getrandomquestionid has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The getrandomquestionid could not be saved. Please, try again.'));
        }
        $this->set(compact('getrandomquestionid'));
        $this->set('_serialize', ['getrandomquestionid']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Getrandomquestionid id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $getrandomquestionid = $this->Getrandomquestionid->get($id);
        if ($this->Getrandomquestionid->delete($getrandomquestionid)) {
            $this->Flash->success(__('The getrandomquestionid has been deleted.'));
        } else {
            $this->Flash->error(__('The getrandomquestionid could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
