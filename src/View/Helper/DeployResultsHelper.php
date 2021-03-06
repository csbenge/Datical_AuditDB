<?php

/* src/View/Helper/LinkHelper.php (using other helpers) */

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\ORM\TableRegistry;

class DeployResultsHelper extends Helper
{
    public $helpers = ['Html'];

    public function getChangeImpact_ChangeID($id)
    {

        // Look id in CHANGEIMPACT
        // Get ChangeImpact Count
        $changeimpacts = TableRegistry::get('ChangeImpacts');
        $changeimpact  = $changeimpacts->get($id, ['contain' => [] ]);
        // Take FK_CHANGESET_DETAILS_ID in CHANGEIMPACT and lookup ID in CHANGESET_DETAILS
        $changesetdetails = TableRegistry::get('ChangesetDetails');
        $changesetdetail  = $changesetdetails->get($changeimpact->FK_CHANGESET_DETAILS_ID, ['contain' => [] ]);

        // FK_OPERATION_ID in CHANGESET_DETAILS look up OPERATION
        $operations = TableRegistry::get('Operations');
        $operation  = $operations->get($changesetdetail->FK_OPERATIONS_ID, ['contain' => [] ]);
        // Get PROJECT_NAME, etc.
        $result = $operation->PROJECT_NAME;
        return $result;
    }

    public function getChangeImpact_ChangeIDID($id)
    {

        // Look id in CHANGEIMPACT
        // Get ChangeImpact Count
        $changeimpacts = TableRegistry::get('ChangeImpacts');
        $changeimpact  = $changeimpacts->get($id, ['contain' => [] ]);
        // Take FK_CHANGESET_DETAILS_ID in CHANGEIMPACT and lookup ID in CHANGESET_DETAILS
        $changesetdetails = TableRegistry::get('ChangesetDetails');
        $changesetdetail  = $changesetdetails->get($changeimpact->FK_CHANGESET_DETAILS_ID, ['contain' => [] ]);

        // FK_OPERATION_ID in CHANGESET_DETAILS look up OPERATION
        $operations = TableRegistry::get('Operations');
        $operation  = $operations->get($changesetdetail->FK_OPERATIONS_ID, ['contain' => [] ]);
        // Get PROJECT_NAME, etc.
        $result = $operation->ID;
        return $result;
    }

    public function getChangeImpactSQL($id)
    {

        // Look id in CHANGEIMPACT
        // Get ChangeImpact Count
        $changeimpactssqls = TableRegistry::get('ChangeImpactSqls');
        $query  = $changeimpactssqls->find()->where(['FK_CHANGE_IMPACTS_ID' => $id]);
        $data = $query->toArray();
        $result = $data[0]->SQL_TEXT;
        return $result;
    }

    public function getDeploymentMessage($id)
    {

        $changeimpacts = TableRegistry::get('ChangeImpacts');

        $query = $changeimpacts->find()->where(['FK_CHANGESET_DETAILS_ID' => $id]);
        $data = $query->toArray();
        $result = $data[0]->FAILUREMESSAGE;
        return $result;
    }

    public function getMessagesChangeImpactDesc($id)
    {
        $changeimpacts = TableRegistry::get('ChangeImpacts');
        $query  = $changeimpacts->find()->where(['ID' => $id]);
        $data = $query->toArray();
        $result = $data[0]->CHANGE_DESCRIPTION;
        return $result;
    }

    public function getMessagesProjectName($id)
    {
        $changeimpacts = TableRegistry::get('ChangeImpacts');
        $query  = $changeimpacts->find()->where(['ID' => $id]);
        $data = $query->toArray();
        $operationID = $data[0]->FK_OPERATIONS_ID;

        $operations = TableRegistry::get('Operations');
        $query  = $operations->find()->where([$operationID => $id]);
        $data = $query->toArray();
        $result = $data[0]->PROJECT_NAME;
        return $result;
    }

    public function getMessagesProjectID($id)
    {
        $changeimpacts = TableRegistry::get('ChangeImpacts');
        $query  = $changeimpacts->find()->where(['ID' => $id]);
        $data = $query->toArray();
        $operationID = $data[0]->FK_OPERATIONS_ID;

        $operations = TableRegistry::get('Operations');
        $query  = $operations->find()->where([$operationID => $id]);
        $data = $query->toArray();
        $result = $data[0]->ID;
        return $result;
    }

    public function getMessagesProjectStep($id)
    {
        $changeimpacts = TableRegistry::get('ChangeImpacts');
        $query  = $changeimpacts->find()->where(['ID' => $id]);
        $data = $query->toArray();
        $operationID = $data[0]->FK_OPERATIONS_ID;

        $operations = TableRegistry::get('Operations');
        $query  = $operations->find()->where([$operationID => $id]);
        $data = $query->toArray();
        $result = $data[0]->STEP;
        return $result;
    }

    public function getChangeImpactMessages($id)
    {
        $messages = TableRegistry::get('Messages');
        $query  = $messages->find()->where(['FK_CHANGE_IMPACTS_ID' => $id]);
        $data = $query->toArray();
        if (!empty($data)) {
          $result = $data[0]->TEXT;
        } else {
          $result = null;
        }

        return $result;
    }

    public function getRuleRespsMsg($id)
    {
        $rulerespsmsg = TableRegistry::get('RuleRespMsgs');
        $query  = $rulerespsmsg->find()->where(['FK_RULE_RESPS_ID' => $id]);
        $data = $query->toArray();
        $result = $data[0]->MESSAGE;
        return $result;
    }

    public function getRuleRespsProject($id)
    {
        $operations = TableRegistry::get('Operations');
        $query  = $operations->find()->where(['ID' => $id]);
        $data = $query->toArray();
        $result = $data[0]->PROJECT_NAME;
        return $result;
    }

    public function getRuleRespsStep($id)
    {
        $operations = TableRegistry::get('Operations');
        $query  = $operations->find()->where(['ID' => $id]);
        $data = $query->toArray();
        $result = $data[0]->STEP;
        return $result;
    }

    public function getRowCount($list)
    {
    	$result = count($list);
        return '<span class="badge">' . $result . '</span>';
    }

    public function getStoredLogicCompMsgs($id)
    {
        $operations = TableRegistry::get('StoredLogicCompMsgs');
        $query  = $operations->find()->where(['FK_STORED_LOGIC_STATES_ID' => $id]);
        $messages = $query->toArray();
        $result = "";
        foreach ($messages as $message) {
          $result = $result . $messages[0]->MESSAGE;
        }
        return $result;
    }

    public function getStoredLogicStateProjectID($id)
    {
        $operations = TableRegistry::get('Operations');
        $query  = $operations->find()->where(['ID' => $id]);
        $data = $query->toArray();
        $result = $data[0]->ID;
        return $result;
    }

    public function getStoredLogicStateProjectName($id)
    {
        $operations = TableRegistry::get('Operations');
        $query  = $operations->find()->where(['ID' => $id]);
        $data = $query->toArray();
        $result = $data[0]->PROJECT_NAME;
        return $result;
    }

    public function getStoredLogicStateProjectStep($id)
    {
        $operations = TableRegistry::get('Operations');
        $query  = $operations->find()->where(['ID' => $id]);
        $data = $query->toArray();
        $result = $data[0]->STEP;
        return $result;
    }

    public function prettyUpCase($words)
    {
        return ucwords($words);
    }

    public function prettyUpCount($count)
    {
        return '<span class="badge">' . $count . '</span>';
    }

    public function prettyUpCountBig($count)
    {
        return '<span class="badge" style="font-size: 24px">' . $count . '</span>';
    }

    public function prettyUpMessageLevel($result)
    {
        $class = '<span class="label label-default">';
        if ($result == "PASS") {
            $class = '<span class="label label-success">';
        } elseif ($result == "FAIL" or $result == "ERROR") {
            $class = '<span class="label label-danger">';
        } elseif ($result == "WARN") {
            $class = '<span class="label label-warning">';
        } elseif ($result == "INFO") {
            $class = '<span class="label label-info">';
        }
        return $class . $result . '</span>';
    }

    public function prettyUpResult($result)
    {
    	$class = '<span class="label label-default">';
    	if (($result == "PASS") || ($result == "VALID")) {
    		$class = '<span class="label label-success">';
      } elseif ($result == "INFO") {
        $class = '<span class="label label-primary">';
    	} elseif (($result == "FAIL")  || ($result == "ERROR")  || ($result == "INVALID")) {
    		$class = '<span class="label label-danger">';
    	} elseif (($result == "WARN")  || ($result == "WARNING")) {
    		$class = '<span class="label label-warning">';
    	}
        return $class . $result . '</span>';
    }

    public function prettyUpAction($action)
    {
    	$result = '';
    	if ($action == "DEPLOY") {
    		$result = 'Deploy';
    	} elseif ($action == "ROLLBACK") {
    		$result = 'Rollback';
    	}
        return $result;
    }
}
?>
