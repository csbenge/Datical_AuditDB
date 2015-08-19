<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TableMods Controller
 *
 * @property \App\Model\Table\TableModsTable $TableMods
 */
class TableModsController extends AppController
{

    public $paginate = [
        'limit' => 15
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
        $this->set('tableMods', $this->paginate($this->TableMods));
        $this->set('_serialize', ['tableMods']);
    }

    /**
     * View method
     *
     * @param string|null $id Table Mod id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tableMod = $this->TableMods->get($id, [
            'contain' => []
        ]);
        $this->set('tableMod', $tableMod);
        $this->set('_serialize', ['tableMod']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tableMod = $this->TableMods->newEntity();
        if ($this->request->is('post')) {
            $tableMod = $this->TableMods->patchEntity($tableMod, $this->request->data);
            if ($this->TableMods->save($tableMod)) {
                $this->Flash->success(__('The table mod has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The table mod could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tableMod'));
        $this->set('_serialize', ['tableMod']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Table Mod id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tableMod = $this->TableMods->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tableMod = $this->TableMods->patchEntity($tableMod, $this->request->data);
            if ($this->TableMods->save($tableMod)) {
                $this->Flash->success(__('The table mod has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The table mod could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tableMod'));
        $this->set('_serialize', ['tableMod']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Table Mod id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tableMod = $this->TableMods->get($id);
        if ($this->TableMods->delete($tableMod)) {
            $this->Flash->success(__('The table mod has been deleted.'));
        } else {
            $this->Flash->error(__('The table mod could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
