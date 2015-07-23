<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ChangeimpactsSqls Controller
 *
 * @property \App\Model\Table\ChangeimpactsSqlsTable $ChangeimpactsSqls
 */
class ChangeimpactsSqlsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('changeimpactsSqls', $this->paginate($this->ChangeimpactsSqls));
        $this->set('_serialize', ['changeimpactsSqls']);
    }

    /**
     * View method
     *
     * @param string|null $id Changeimpacts Sql id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $changeimpactsSql = $this->ChangeimpactsSqls->get($id, [
            'contain' => []
        ]);
        $this->set('changeimpactsSql', $changeimpactsSql);
        $this->set('_serialize', ['changeimpactsSql']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $changeimpactsSql = $this->ChangeimpactsSqls->newEntity();
        if ($this->request->is('post')) {
            $changeimpactsSql = $this->ChangeimpactsSqls->patchEntity($changeimpactsSql, $this->request->data);
            if ($this->ChangeimpactsSqls->save($changeimpactsSql)) {
                $this->Flash->success(__('The changeimpacts sql has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The changeimpacts sql could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('changeimpactsSql'));
        $this->set('_serialize', ['changeimpactsSql']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Changeimpacts Sql id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $changeimpactsSql = $this->ChangeimpactsSqls->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $changeimpactsSql = $this->ChangeimpactsSqls->patchEntity($changeimpactsSql, $this->request->data);
            if ($this->ChangeimpactsSqls->save($changeimpactsSql)) {
                $this->Flash->success(__('The changeimpacts sql has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The changeimpacts sql could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('changeimpactsSql'));
        $this->set('_serialize', ['changeimpactsSql']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Changeimpacts Sql id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $changeimpactsSql = $this->ChangeimpactsSqls->get($id);
        if ($this->ChangeimpactsSqls->delete($changeimpactsSql)) {
            $this->Flash->success(__('The changeimpacts sql has been deleted.'));
        } else {
            $this->Flash->error(__('The changeimpacts sql could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
