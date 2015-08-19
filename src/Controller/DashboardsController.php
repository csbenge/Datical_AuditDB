<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Error\Debugger;

/**
 * Dashboards Controllers
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
        $databases = TableRegistry::get('Opdatabases');
        $query = $databases->find();
        $query->select(['ID', 'DB_NAME', 'USER_NAME', 'VENDOR', 'LAST_DEPLOY', 'HOST', 'PORT', 'ENGINE', 'SID', 'SERVICE_NAME'])
            ->order(['DB_NAME' => 'DESC', 'LAST_DEPLOY' => 'ASC']);
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
        $query = $operations->find()->order(['START_TIME' => 'DESC']);
        $this->set('operations', $this->paginate($query));
        $this->set('_serialize', ['operations']);

    }

    public function deploymentsPassed()
    {
        $operations = TableRegistry::get('Operations');
        $query = $operations->find()->where(['DEPLOY_RESULT' => 'PASS'])->order(['START_TIME' => 'DESC']);
        $this->set('operations', $this->paginate($query));
        $this->set('_serialize', ['operations']);
    }

    public function deploymentsFailed()
    {
        $operations = TableRegistry::get('Operations');
        $query = $operations->find()->where(['DEPLOY_RESULT' => 'FAIL'])->order(['START_TIME' => 'DESC']);
        $this->set('operations', $this->paginate($query));
        $this->set('_serialize', ['operations']);
    }

    /**
     * Environmentals method
     *
     * @return void
     */
    public function environmentals()
    {

        // Get Project List & Count
        $databases = TableRegistry::get('Operations');
        $query = $databases->find()->order(['START_TIME' => 'DESC']);
        $query->select(['PROJECT_NAME', 'START_TIME'])->distinct(['PROJECT_NAME']);
        $projectCount = $query->count();
        $this->set('projectCount', $projectCount);
        $this->set('projectList', $this->paginate($query));

        // Get Database Names & Count
        $DB_NAMEs = TableRegistry::get('Opdatabases');
        $query = $DB_NAMEs->find()->order(['LAST_DEPLOY' => 'DESC']);
        $databaseCount = $query->count();
        $query->select(['DB_NAME', 'USER_NAME', 'LAST_DEPLOY']);
        $this->set('databaseCount', $databaseCount);
        $this->set('databaseList', $this->paginate($query));

        // Get Database Servers & Count
        $DB_NAMEs = TableRegistry::get('Opdatabases');
        $query = $DB_NAMEs->find();
        $query->select(['PORT', 'HOST','SERVICE_NAME', 'SID'])->distinct(['HOST']);
        $serverCount = $query->count();
        $this->set('serverCount', $serverCount);
        $this->set('serverList', $this->paginate($query));

        // Get Unique Clients &  Count
        $clientDetails = TableRegistry::get('Operations');
        $query = $clientDetails->find();
        $query->select(['CLIENT_HOSTNAME', 'CLIENT_USER', 'CLIENT_TYPE'])->distinct(['CLIENT_HOSTNAME']);
        $clientCount = $query->count();
        $this->set('clientCount', $clientCount);
        $this->set('clientList', $this->paginate($query));
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
            ->order(['START_TIME' => 'DESC'])
            ->first();
        $this->set('latestOperation', $latestOperation);

        // Get ChangeImpact Count
        $changeimpacts = TableRegistry::get('Changeimpacts');
        $query = $changeimpacts->find();
        $changeImpactsCount = $query->count();
        $this->set('changeImpactsCount', $changeImpactsCount);
        $query = $changeimpacts->find()->where(['FK_OPERATIONS_ID' => $latestOperation->ID])->first();
        $this->set('latestChangeImpact', $query);


        // Get Table Mods
        $tableMods = TableRegistry::get('Tablemods');
        $query = $tableMods->find();
        if (!($query->isEmpty())) {
          $tableModCount = $query->count();
          $this->set('tableModCount', $tableModCount);
          $query = $tableMods->find()->where(['FK_OPERATIONS_ID' => $latestOperation->ID])->first();
          $this->set('latestTableMod', $query);
        }


        // Get Project Count
        $query = $databases->find();
        $query->select(['PROJECT_NAME'])->distinct(['PROJECT_NAME']);
        $projectCount = $query->count();
        $this->set('projectCount', $projectCount);

        // Get Database Count
        $DB_NAMEs = TableRegistry::get('Opdatabases');
        $query = $DB_NAMEs->find()->order(['LAST_DEPLOY' => 'DESC']);
        $databaseCount = $query->count();
        $this->set('databaseCount', $databaseCount);

        // Get Database Servers & Count
        $DB_NAMEs = TableRegistry::get('Opdatabases');
        $query = $DB_NAMEs->find();
        $query->select(['DB_NAME', 'HOST'])->distinct(['HOST']);
        $serverCount = $query->count();
        $this->set('serverCount', $serverCount);

        // Get Unique Client Count
        $clientDetails = TableRegistry::get('Operations');
        $query = $clientDetails->find();
        $query->select(['CLIENT_HOSTNAME'])->distinct(['CLIENT_HOSTNAME']);
        $clientCount = $query->count();
        $this->set('clientCount', $clientCount);

    }

}
