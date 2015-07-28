<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Error\Debugger;

/**
 * Dashboards Controller
 *
 * @property \App\Model\Table\DashboardsTable $Dashboards
 */
class DashboardsController extends AppController
{

     /**
     * Deployments method
     *
     * @return void
     */
    public function databasesAll()
    {
        // Get Databases and  Count
        $databases = TableRegistry::get('Operations');
        $query = $databases->find();
        $query->select(['ID', 'PROJECT_NAME', 'STEP', 'ACTION_TYPE', 'DEPLOY_RESULT', 'STARTTIME', 'TOTALTIME', 'DEPLOYMODE'])
            ->order(['PROJECT_NAME' => 'DESC', 'STARTTIME' => 'ASC']);
        //$query->select(['ID', 'PROJECT_NAME', 'STEP', 'ACTION_TYPE', 'DEPLOY_RESULT', 'STARTTIME', 'TOTALTIME', 'DEPLOYMODE'])
        //    ->distinct(['STEP']);
        $databaseCount = $query->count();
        $this->set('databaseCount', $databaseCount);
        $this->set('operations', $this->paginate($query));
        $this->set('_serialize', ['operations']);
    }

    /**
     * Deployments method
     *
     * @return void
     */
    public function deploymentsAll()
    {
        $operations = TableRegistry::get('Operations');
        $query = $operations->find();
        $this->set('operations', $this->paginate($query));
        $this->set('_serialize', ['operations']);

    }

    public function deploymentsPassed()
    {
        $operations = TableRegistry::get('Operations');
        $query = $operations->find()->where(['DEPLOY_RESULT' => 'PASS']);
        $this->set('operations', $this->paginate($query));
        $this->set('_serialize', ['operations']);
    }

    public function deploymentsFailed()
    {
        $operations = TableRegistry::get('Operations');
        $query = $operations->find()->where(['DEPLOY_RESULT' => 'FAIL']);
        $this->set('operations', $this->paginate($query));
        $this->set('_serialize', ['operations']);
    }

     /**
     * Overview method
     *
     * @return void
     */
    public function overview()
    {
        /// Get latest Message
        $messages = TableRegistry::get('Messages');
        $latestMessages = $messages
            ->find()
            ->order(['MESSAGE_TIME' => 'DESC'])
            ->limit(3);
        $this->set('latestMessages', $latestMessages);

        $query = $messages->find();
        $messageCount = $query->count();
        $this->set('messageCount', $messageCount);

        // Get Deployment/Operation Count
        $operations = TableRegistry::get('Operations');
        $query = $operations->find();
        $operationCount = $query->count();
        $this->set('operationCount', $operationCount);

        // Get latest Operation
        $databases = TableRegistry::get('Operations');
        $latestOperation = $databases
            ->find()
            ->order(['STARTTIME' => 'DESC'])
            ->first();
        $this->set('latestOperation', $latestOperation);

        // Get ChangeImpact Count
        $changeimpacts = TableRegistry::get('Changeimpacts');
        $query = $changeimpacts->find();
        $changeImpactsCount = $query->count();
        $this->set('changeImpactsCount', $changeImpactsCount);


        // Get Table Mods
        $tableMods = TableRegistry::get('Tablemods');
        $query = $tableMods->find();
        $tableModCount = $query->count();
        $this->set('tableModCount', $tableModCount);


        // Get Project Count
        $query = $databases->find();
        $query->select(['PROJECT_NAME'])->distinct(['PROJECT_NAME']);
        $projectCount = $query->count();
        $this->set('projectCount', $projectCount);
        
        // Get Database Count
        $databases = TableRegistry::get('Operations');
        $query = $databases->find();
        $query->select(['STEP'])->distinct(['STEP']);
        $databaseCount = $query->count();
        $this->set('databaseCount', $databaseCount);

        // Get Schema Count
        $schemas = TableRegistry::get('Operations');
        $query = $schemas->find();
        $query->select(['STEP'])->distinct(['STEP']);
        $schemaCount = $query->count();
        $this->set('schemaCount', $schemaCount); 

        // Get Unique Client Count
        $clientDetails = TableRegistry::get('Operations');
        $query = $clientDetails->find();
        $query->select(['CLIENT_HOSTNAME'])->distinct(['CLIENT_HOSTNAME']);
        $clientCount = $query->count();
        $this->set('clientCount', $clientCount);

    }

}
