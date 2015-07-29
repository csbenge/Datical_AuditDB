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
        $changeimpacts = TableRegistry::get('Changeimpacts');
        $changeimpact  = $changeimpacts->get($id, ['contain' => [] ]);
        // Take FK_CHANGESET_DETAILS_ID in CHANGEIMPACT and lookup ID in CHANGESET_DETAILS
        $changesetdetails = TableRegistry::get('ChangesetDetails');
        $changesetdetail  = $changesetdetails->get($changeimpact->FK_CHANGESET_DETAILS_ID, ['contain' => [] ]);

        // FK_OPERATION_ID in CHANGESET_DETAILS look up OPERATION
        $operations = TableRegistry::get('Operations');
        $operation  = $operations->get($changesetdetail->FK_OPERATION_ID, ['contain' => [] ]);
        // Get PROJECT_NAME, etc.
        $result = $operation->PROJECT_NAME;
        return $result;
    }

    public function getChangeImpact_ChangeIDID($id)
    {

        // Look id in CHANGEIMPACT
        // Get ChangeImpact Count
        $changeimpacts = TableRegistry::get('Changeimpacts');
        $changeimpact  = $changeimpacts->get($id, ['contain' => [] ]);
        // Take FK_CHANGESET_DETAILS_ID in CHANGEIMPACT and lookup ID in CHANGESET_DETAILS
        $changesetdetails = TableRegistry::get('ChangesetDetails');
        $changesetdetail  = $changesetdetails->get($changeimpact->FK_CHANGESET_DETAILS_ID, ['contain' => [] ]);

        // FK_OPERATION_ID in CHANGESET_DETAILS look up OPERATION
        $operations = TableRegistry::get('Operations');
        $operation  = $operations->get($changesetdetail->FK_OPERATION_ID, ['contain' => [] ]);
        // Get PROJECT_NAME, etc.
        $result = $operation->ID;
        return $result;
    }

    public function getDeploymentMessage($id)
    {

        $changeimpacts = TableRegistry::get('Changeimpacts');

        $query = $changeimpacts->find()->where(['FK_CHANGESET_DETAILS_ID' => $id]);
        $data = $query->toArray();
        $result = $data[0]->FAILUREMESSAGE;
        return $result;
    }

    public function getRowCount($list)
    {
    	$result = count($list);
        return '<span class="badge">' . $result . '</span>';
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
    	if ($result == "PASS") {
    		$class = '<span class="label label-success">';
    	} elseif ($result == "FAIL") {
    		$class = '<span class="label label-danger">';
    	} elseif ($result == "WARN") {
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