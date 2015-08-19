<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RuleRespMsgs Controller
 *
 * @property \App\Model\Table\RuleRespMsgsTable $RuleRespMsgs
 */
class RuleRespMsgsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('ruleRespMsgs', $this->paginate($this->RuleRespMsgs));
        $this->set('_serialize', ['ruleRespMsgs']);
    }

    /**
     * View method
     *
     * @param string|null $id Rule Resp Msg id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ruleRespMsg = $this->RuleRespMsgs->get($id, [
            'contain' => []
        ]);
        $this->set('ruleRespMsg', $ruleRespMsg);
        $this->set('_serialize', ['ruleRespMsg']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ruleRespMsg = $this->RuleRespMsgs->newEntity();
        if ($this->request->is('post')) {
            $ruleRespMsg = $this->RuleRespMsgs->patchEntity($ruleRespMsg, $this->request->data);
            if ($this->RuleRespMsgs->save($ruleRespMsg)) {
                $this->Flash->success(__('The rule resp msg has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The rule resp msg could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ruleRespMsg'));
        $this->set('_serialize', ['ruleRespMsg']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Rule Resp Msg id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ruleRespMsg = $this->RuleRespMsgs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ruleRespMsg = $this->RuleRespMsgs->patchEntity($ruleRespMsg, $this->request->data);
            if ($this->RuleRespMsgs->save($ruleRespMsg)) {
                $this->Flash->success(__('The rule resp msg has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The rule resp msg could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ruleRespMsg'));
        $this->set('_serialize', ['ruleRespMsg']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rule Resp Msg id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ruleRespMsg = $this->RuleRespMsgs->get($id);
        if ($this->RuleRespMsgs->delete($ruleRespMsg)) {
            $this->Flash->success(__('The rule resp msg has been deleted.'));
        } else {
            $this->Flash->error(__('The rule resp msg could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
