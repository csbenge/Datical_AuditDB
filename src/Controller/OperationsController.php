<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Operations Controller
 *
 * @property \App\Model\Table\OperationsTable $Operations
 */
class OperationsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('operations', $this->paginate($this->Operations));
        $this->set('_serialize', ['operations']);
    }

    /**
     * View method
     *
     * @param string|null $id Operation id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $operation = $this->Operations->get($id, [
            'contain' => ['Opdatabases', 'ClientDetails', 'ChangesetDetails', 'Changeimpacts']
        ]);
        $this->set('operation', $operation);
        $this->set('_serialize', ['operation']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $operation = $this->Operations->newEntity();
        if ($this->request->is('post')) {
            $operation = $this->Operations->patchEntity($operation, $this->request->data);
            if ($this->Operations->save($operation)) {
                $this->Flash->success(__('The operation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The operation could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('operation'));
        $this->set('_serialize', ['operation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Operation id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $operation = $this->Operations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $operation = $this->Operations->patchEntity($operation, $this->request->data);
            if ($this->Operations->save($operation)) {
                $this->Flash->success(__('The operation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The operation could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('operation'));
        $this->set('_serialize', ['operation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Operation id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $operation = $this->Operations->get($id);
        if ($this->Operations->delete($operation)) {
            $this->Flash->success(__('The operation has been deleted.'));
        } else {
            $this->Flash->error(__('The operation could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
