<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AuditSequences Controller
 *
 * @property \App\Model\Table\AuditSequencesTable $AuditSequences
 */
class AuditSequencesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('auditSequences', $this->paginate($this->AuditSequences));
        $this->set('_serialize', ['auditSequences']);
    }

    /**
     * View method
     *
     * @param string|null $id Audit Sequence id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $auditSequence = $this->AuditSequences->get($id, [
            'contain' => []
        ]);
        $this->set('auditSequence', $auditSequence);
        $this->set('_serialize', ['auditSequence']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $auditSequence = $this->AuditSequences->newEntity();
        if ($this->request->is('post')) {
            $auditSequence = $this->AuditSequences->patchEntity($auditSequence, $this->request->data);
            if ($this->AuditSequences->save($auditSequence)) {
                $this->Flash->success(__('The audit sequence has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The audit sequence could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('auditSequence'));
        $this->set('_serialize', ['auditSequence']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Audit Sequence id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $auditSequence = $this->AuditSequences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $auditSequence = $this->AuditSequences->patchEntity($auditSequence, $this->request->data);
            if ($this->AuditSequences->save($auditSequence)) {
                $this->Flash->success(__('The audit sequence has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The audit sequence could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('auditSequence'));
        $this->set('_serialize', ['auditSequence']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Audit Sequence id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $auditSequence = $this->AuditSequences->get($id);
        if ($this->AuditSequences->delete($auditSequence)) {
            $this->Flash->success(__('The audit sequence has been deleted.'));
        } else {
            $this->Flash->error(__('The audit sequence could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
