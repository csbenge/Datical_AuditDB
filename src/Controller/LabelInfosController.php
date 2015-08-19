<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LabelInfos Controller
 *
 * @property \App\Model\Table\LabelInfosTable $LabelInfos
 */
class LabelInfosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('labelInfos', $this->paginate($this->LabelInfos));
        $this->set('_serialize', ['labelInfos']);
    }

    /**
     * View method
     *
     * @param string|null $id Label Info id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $labelInfo = $this->LabelInfos->get($id, [
            'contain' => []
        ]);
        $this->set('labelInfo', $labelInfo);
        $this->set('_serialize', ['labelInfo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $labelInfo = $this->LabelInfos->newEntity();
        if ($this->request->is('post')) {
            $labelInfo = $this->LabelInfos->patchEntity($labelInfo, $this->request->data);
            if ($this->LabelInfos->save($labelInfo)) {
                $this->Flash->success(__('The label info has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The label info could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('labelInfo'));
        $this->set('_serialize', ['labelInfo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Label Info id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $labelInfo = $this->LabelInfos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $labelInfo = $this->LabelInfos->patchEntity($labelInfo, $this->request->data);
            if ($this->LabelInfos->save($labelInfo)) {
                $this->Flash->success(__('The label info has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The label info could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('labelInfo'));
        $this->set('_serialize', ['labelInfo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Label Info id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $labelInfo = $this->LabelInfos->get($id);
        if ($this->LabelInfos->delete($labelInfo)) {
            $this->Flash->success(__('The label info has been deleted.'));
        } else {
            $this->Flash->error(__('The label info could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
