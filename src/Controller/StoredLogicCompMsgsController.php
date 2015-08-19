<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StoredLogicCompMsgs Controller
 *
 * @property \App\Model\Table\StoredLogicCompMsgsTable $StoredLogicCompMsgs
 */
class StoredLogicCompMsgsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('storedLogicCompMsgs', $this->paginate($this->StoredLogicCompMsgs));
        $this->set('_serialize', ['storedLogicCompMsgs']);
    }

    /**
     * View method
     *
     * @param string|null $id Stored Logic Comp Msg id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $storedLogicCompMsg = $this->StoredLogicCompMsgs->get($id, [
            'contain' => []
        ]);
        $this->set('storedLogicCompMsg', $storedLogicCompMsg);
        $this->set('_serialize', ['storedLogicCompMsg']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $storedLogicCompMsg = $this->StoredLogicCompMsgs->newEntity();
        if ($this->request->is('post')) {
            $storedLogicCompMsg = $this->StoredLogicCompMsgs->patchEntity($storedLogicCompMsg, $this->request->data);
            if ($this->StoredLogicCompMsgs->save($storedLogicCompMsg)) {
                $this->Flash->success(__('The stored logic comp msg has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The stored logic comp msg could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('storedLogicCompMsg'));
        $this->set('_serialize', ['storedLogicCompMsg']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Stored Logic Comp Msg id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $storedLogicCompMsg = $this->StoredLogicCompMsgs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $storedLogicCompMsg = $this->StoredLogicCompMsgs->patchEntity($storedLogicCompMsg, $this->request->data);
            if ($this->StoredLogicCompMsgs->save($storedLogicCompMsg)) {
                $this->Flash->success(__('The stored logic comp msg has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The stored logic comp msg could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('storedLogicCompMsg'));
        $this->set('_serialize', ['storedLogicCompMsg']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Stored Logic Comp Msg id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $storedLogicCompMsg = $this->StoredLogicCompMsgs->get($id);
        if ($this->StoredLogicCompMsgs->delete($storedLogicCompMsg)) {
            $this->Flash->success(__('The stored logic comp msg has been deleted.'));
        } else {
            $this->Flash->error(__('The stored logic comp msg could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
