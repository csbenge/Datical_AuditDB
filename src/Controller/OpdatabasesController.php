<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OpDatabases Controller
 *
 * @property \App\Model\Table\OpDatabasesTable $OpDatabases
 */
class OpDatabasesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('opDatabases', $this->paginate($this->OpDatabases));
        $this->set('_serialize', ['opDatabases']);
    }

    /**
     * View method
     *
     * @param string|null $id Op Database id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $opDatabase = $this->OpDatabases->get($id, [
            'contain' => []
        ]);
        $this->set('opDatabase', $opDatabase);
        $this->set('_serialize', ['opDatabase']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $opDatabase = $this->OpDatabases->newEntity();
        if ($this->request->is('post')) {
            $opDatabase = $this->OpDatabases->patchEntity($opDatabase, $this->request->data);
            if ($this->OpDatabases->save($opDatabase)) {
                $this->Flash->success(__('The op database has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The op database could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('opDatabase'));
        $this->set('_serialize', ['opDatabase']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Op Database id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $opDatabase = $this->OpDatabases->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $opDatabase = $this->OpDatabases->patchEntity($opDatabase, $this->request->data);
            if ($this->OpDatabases->save($opDatabase)) {
                $this->Flash->success(__('The op database has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The op database could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('opDatabase'));
        $this->set('_serialize', ['opDatabase']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Op Database id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $opDatabase = $this->OpDatabases->get($id);
        if ($this->OpDatabases->delete($opDatabase)) {
            $this->Flash->success(__('The op database has been deleted.'));
        } else {
            $this->Flash->error(__('The op database could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
