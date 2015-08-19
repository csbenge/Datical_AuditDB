<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StoredLogicStates Controller
 *
 * @property \App\Model\Table\StoredLogicStatesTable $StoredLogicStates
 */
class StoredLogicStatesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('storedLogicStates', $this->paginate($this->StoredLogicStates));
        $this->set('_serialize', ['storedLogicStates']);
    }

    /**
     * View method
     *
     * @param string|null $id Stored Logic State id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $storedLogicState = $this->StoredLogicStates->get($id, [
            'contain' => []
        ]);
        $this->set('storedLogicState', $storedLogicState);
        $this->set('_serialize', ['storedLogicState']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $storedLogicState = $this->StoredLogicStates->newEntity();
        if ($this->request->is('post')) {
            $storedLogicState = $this->StoredLogicStates->patchEntity($storedLogicState, $this->request->data);
            if ($this->StoredLogicStates->save($storedLogicState)) {
                $this->Flash->success(__('The stored logic state has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The stored logic state could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('storedLogicState'));
        $this->set('_serialize', ['storedLogicState']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Stored Logic State id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $storedLogicState = $this->StoredLogicStates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $storedLogicState = $this->StoredLogicStates->patchEntity($storedLogicState, $this->request->data);
            if ($this->StoredLogicStates->save($storedLogicState)) {
                $this->Flash->success(__('The stored logic state has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The stored logic state could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('storedLogicState'));
        $this->set('_serialize', ['storedLogicState']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Stored Logic State id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $storedLogicState = $this->StoredLogicStates->get($id);
        if ($this->StoredLogicStates->delete($storedLogicState)) {
            $this->Flash->success(__('The stored logic state has been deleted.'));
        } else {
            $this->Flash->error(__('The stored logic state could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
