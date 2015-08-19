<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * ChangesetDetails Controller
 *
 * @property \App\Model\Table\ChangesetDetailsTable $ChangesetDetails
 */
class ChangesetDetailsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('changesetDetails', $this->paginate($this->ChangesetDetails));
        $this->set('_serialize', ['changesetDetails']);
    }

    /**
     * View method
     *
     * @param string|null $id Changeset Detail id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $changesetDetail = $this->ChangesetDetails->get($id, [
            'contain' => ['ChangeImpacts']
        ]);
        $this->set('changesetDetail', $changesetDetail);
        $this->set('_serialize', ['changesetDetail']);

        $changeImpacts = TableRegistry::get('ChangeImpacts');
        $query = $changeImpacts->find()->where(['FK_CHANGESET_DETAILS_ID' => $id]);

        $this->set('changeImpacts', $query);
        $this->set('_serialize', ['changeImpacts']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $changesetDetail = $this->ChangesetDetails->newEntity();
        if ($this->request->is('post')) {
            $changesetDetail = $this->ChangesetDetails->patchEntity($changesetDetail, $this->request->data);
            if ($this->ChangesetDetails->save($changesetDetail)) {
                $this->Flash->success(__('The changeset detail has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The changeset detail could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('changesetDetail'));
        $this->set('_serialize', ['changesetDetail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Changeset Detail id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $changesetDetail = $this->ChangesetDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $changesetDetail = $this->ChangesetDetails->patchEntity($changesetDetail, $this->request->data);
            if ($this->ChangesetDetails->save($changesetDetail)) {
                $this->Flash->success(__('The changeset detail has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The changeset detail could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('changesetDetail'));
        $this->set('_serialize', ['changesetDetail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Changeset Detail id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $changesetDetail = $this->ChangesetDetails->get($id);
        if ($this->ChangesetDetails->delete($changesetDetail)) {
            $this->Flash->success(__('The changeset detail has been deleted.'));
        } else {
            $this->Flash->error(__('The changeset detail could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
