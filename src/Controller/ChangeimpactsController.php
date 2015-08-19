<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ChangeImpacts Controller
 *
 * @property \App\Model\Table\ChangeImpactsTable $ChangeImpacts
 */
class ChangeImpactsController extends AppController
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
        $this->set('changeImpacts', $this->paginate($this->ChangeImpacts));
        $this->set('_serialize', ['changeImpacts']);
    }

    /**
     * View method
     *
     * @param string|null $id Change Impact id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $changeImpact = $this->ChangeImpacts->get($id, [
            'contain' => []
        ]);
        $this->set('changeImpact', $changeImpact);
        $this->set('_serialize', ['changeImpact']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $changeImpact = $this->ChangeImpacts->newEntity();
        if ($this->request->is('post')) {
            $changeImpact = $this->ChangeImpacts->patchEntity($changeImpact, $this->request->data);
            if ($this->ChangeImpacts->save($changeImpact)) {
                $this->Flash->success(__('The change impact has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The change impact could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('changeImpact'));
        $this->set('_serialize', ['changeImpact']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Change Impact id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $changeImpact = $this->ChangeImpacts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $changeImpact = $this->ChangeImpacts->patchEntity($changeImpact, $this->request->data);
            if ($this->ChangeImpacts->save($changeImpact)) {
                $this->Flash->success(__('The change impact has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The change impact could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('changeImpact'));
        $this->set('_serialize', ['changeImpact']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Change Impact id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $changeImpact = $this->ChangeImpacts->get($id);
        if ($this->ChangeImpacts->delete($changeImpact)) {
            $this->Flash->success(__('The change impact has been deleted.'));
        } else {
            $this->Flash->error(__('The change impact could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
