<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Changeimpacts Controller
 *
 * @property \App\Model\Table\ChangeimpactsTable $Changeimpacts
 */
class ChangeimpactsController extends AppController
{
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('changeimpacts', $this->paginate($this->Changeimpacts));
        $this->set('_serialize', ['changeimpacts']);
    }

    /**
     * View method
     *
     * @param string|null $id Changeimpact id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $changeimpact = $this->Changeimpacts->get($id, [
            'contain' => []
        ]);
        $this->set('changeimpact', $changeimpact);
        $this->set('_serialize', ['changeimpact']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $changeimpact = $this->Changeimpacts->newEntity();
        if ($this->request->is('post')) {
            $changeimpact = $this->Changeimpacts->patchEntity($changeimpact, $this->request->data);
            if ($this->Changeimpacts->save($changeimpact)) {
                $this->Flash->success(__('The changeimpact has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The changeimpact could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('changeimpact'));
        $this->set('_serialize', ['changeimpact']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Changeimpact id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $changeimpact = $this->Changeimpacts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $changeimpact = $this->Changeimpacts->patchEntity($changeimpact, $this->request->data);
            if ($this->Changeimpacts->save($changeimpact)) {
                $this->Flash->success(__('The changeimpact has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The changeimpact could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('changeimpact'));
        $this->set('_serialize', ['changeimpact']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Changeimpact id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $changeimpact = $this->Changeimpacts->get($id);
        if ($this->Changeimpacts->delete($changeimpact)) {
            $this->Flash->success(__('The changeimpact has been deleted.'));
        } else {
            $this->Flash->error(__('The changeimpact could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
