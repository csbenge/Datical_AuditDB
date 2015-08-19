<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ChangeImpactSqls Controller
 *
 * @property \App\Model\Table\ChangeImpactSqlsTable $ChangeImpactSqls
 */
class ChangeImpactSqlsController extends AppController
{

     public $paginate = [
         'limit' => 10
     ];

     public function initialize()
     {
         parent::initialize();
         $this->loadComponent('Paginator');
     }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('changeImpactSqls', $this->paginate($this->ChangeImpactSqls));
        $this->set('_serialize', ['changeImpactSqls']);
    }

    /**
     * View method
     *
     * @param string|null $id Change Impact Sql id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $changeImpactSql = $this->ChangeImpactSqls->get($id, [
            'contain' => []
        ]);
        $this->set('changeImpactSql', $changeImpactSql);
        $this->set('_serialize', ['changeImpactSql']);

        // Get Change Description from CHANGE_IMPACTS
       $changeimpacts = TableRegistry::get('ChangeImpacts');
       $changeimpact  = $changeimpacts->get($id, ['contain' => [] ]);
       $this->set('changeimpactDesc', $changeimpact->CHANGE_DESCRIPTION);

       // Get ChnageSet ID from ChangeSet Details
       $changesetdetails = TableRegistry::get('ChangesetDetails');
       $changesetdetail  = $changesetdetails->get($changeimpact->FK_CHANGESET_DETAILS_ID, ['contain' => [] ]);
       $this->set('changesetID', $changesetdetail->CHANGE_ID);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $changeImpactSql = $this->ChangeImpactSqls->newEntity();
        if ($this->request->is('post')) {
            $changeImpactSql = $this->ChangeImpactSqls->patchEntity($changeImpactSql, $this->request->data);
            if ($this->ChangeImpactSqls->save($changeImpactSql)) {
                $this->Flash->success(__('The change impact sql has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The change impact sql could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('changeImpactSql'));
        $this->set('_serialize', ['changeImpactSql']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Change Impact Sql id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $changeImpactSql = $this->ChangeImpactSqls->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $changeImpactSql = $this->ChangeImpactSqls->patchEntity($changeImpactSql, $this->request->data);
            if ($this->ChangeImpactSqls->save($changeImpactSql)) {
                $this->Flash->success(__('The change impact sql has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The change impact sql could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('changeImpactSql'));
        $this->set('_serialize', ['changeImpactSql']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Change Impact Sql id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $changeImpactSql = $this->ChangeImpactSqls->get($id);
        if ($this->ChangeImpactSqls->delete($changeImpactSql)) {
            $this->Flash->success(__('The change impact sql has been deleted.'));
        } else {
            $this->Flash->error(__('The change impact sql could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
