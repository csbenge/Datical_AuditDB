<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Opdatabases Controller
 *
 * @property \App\Model\Table\OpdatabasesTable $Opdatabases
 */
class OpdatabasesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('opdatabases', $this->paginate($this->Opdatabases));
        $this->set('_serialize', ['opdatabases']);
    }

    /**
     * View method
     *
     * @param string|null $id Opdatabase id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $opdatabase = $this->Opdatabases->get($id, [
            'contain' => []
        ]);
        $this->set('opdatabase', $opdatabase);
        $this->set('_serialize', ['opdatabase']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $opdatabase = $this->Opdatabases->newEntity();
        if ($this->request->is('post')) {
            $opdatabase = $this->Opdatabases->patchEntity($opdatabase, $this->request->data);
            if ($this->Opdatabases->save($opdatabase)) {
                $this->Flash->success(__('The opdatabase has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The opdatabase could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('opdatabase'));
        $this->set('_serialize', ['opdatabase']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Opdatabase id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $opdatabase = $this->Opdatabases->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $opdatabase = $this->Opdatabases->patchEntity($opdatabase, $this->request->data);
            if ($this->Opdatabases->save($opdatabase)) {
                $this->Flash->success(__('The opdatabase has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The opdatabase could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('opdatabase'));
        $this->set('_serialize', ['opdatabase']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Opdatabase id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $opdatabase = $this->Opdatabases->get($id);
        if ($this->Opdatabases->delete($opdatabase)) {
            $this->Flash->success(__('The opdatabase has been deleted.'));
        } else {
            $this->Flash->error(__('The opdatabase could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
