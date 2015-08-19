<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RuleResps Controller
 *
 * @property \App\Model\Table\RuleRespsTable $RuleResps
 */
class RuleRespsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('ruleResps', $this->paginate($this->RuleResps));
        $this->set('_serialize', ['ruleResps']);
    }

    /**
     * View method
     *
     * @param string|null $id Rule Resp id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ruleResp = $this->RuleResps->get($id, [
            'contain' => []
        ]);
        $this->set('ruleResp', $ruleResp);
        $this->set('_serialize', ['ruleResp']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ruleResp = $this->RuleResps->newEntity();
        if ($this->request->is('post')) {
            $ruleResp = $this->RuleResps->patchEntity($ruleResp, $this->request->data);
            if ($this->RuleResps->save($ruleResp)) {
                $this->Flash->success(__('The rule resp has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The rule resp could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ruleResp'));
        $this->set('_serialize', ['ruleResp']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Rule Resp id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ruleResp = $this->RuleResps->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ruleResp = $this->RuleResps->patchEntity($ruleResp, $this->request->data);
            if ($this->RuleResps->save($ruleResp)) {
                $this->Flash->success(__('The rule resp has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The rule resp could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ruleResp'));
        $this->set('_serialize', ['ruleResp']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rule Resp id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ruleResp = $this->RuleResps->get($id);
        if ($this->RuleResps->delete($ruleResp)) {
            $this->Flash->success(__('The rule resp has been deleted.'));
        } else {
            $this->Flash->error(__('The rule resp could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
