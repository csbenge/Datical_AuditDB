<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Dashboards Controller
 *
 * @property \App\Model\Table\DashboardsTable $Dashboards
 */
class DashboardsController extends AppController
{

     /**
     * Index method
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
        $clientDetails = TableRegistry::get('ClientDetails');
        $query = $clientDetails->find();
        $query->select(['CLIENT_HOSTNAME'])->distinct(['CLIENT_HOSTNAME']);
        $clientCount = $query->count();
        $this->set('clientCount', $clientCount);

    }

}
