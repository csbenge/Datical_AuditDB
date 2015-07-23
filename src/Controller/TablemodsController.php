<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tablemods Controller
 *
 * @property \App\Model\Table\TablemodsTable $Tablemods
 */
class TablemodsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('tablemods', $this->paginate($this->Tablemods));
        $this->set('_serialize', ['tablemods']);
    }

    /**
     * View method
     *
     * @param string|null $id Tablemod id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tablemod = $this->Tablemods->get($id, [
            'contain' => []
        ]);
        $this->set('tablemod', $tablemod);
        $this->set('_serialize', ['tablemod']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tablemod = $this->Tablemods->newEntity();
        if ($this->request->is('post')) {
            $tablemod = $this->Tablemods->patchEntity($tablemod, $this->request->data);
            if ($this->Tablemods->save($tablemod)) {
                $this->Flash->success(__('The tablemod has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tablemod could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tablemod'));
        $this->set('_serialize', ['tablemod']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tablemod id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tablemod = $this->Tablemods->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tablemod = $this->Tablemods->patchEntity($tablemod, $this->request->data);
            if ($this->Tablemods->save($tablemod)) {
                $this->Flash->success(__('The tablemod has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tablemod could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tablemod'));
        $this->set('_serialize', ['tablemod']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tablemod id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tablemod = $this->Tablemods->get($id);
        if ($this->Tablemods->delete($tablemod)) {
            $this->Flash->success(__('The tablemod has been deleted.'));
        } else {
            $this->Flash->error(__('The tablemod could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
