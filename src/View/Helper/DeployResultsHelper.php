<?php

/* src/View/Helper/LinkHelper.php (using other helpers) */

namespace App\View\Helper;

use Cake\View\Helper;

class DeployResultsHelper extends Helper
{
    public $helpers = ['Html'];

    public function getChangeImpact($id)
    {

        // Look id in CHANGEIMPACT
        // take FK_CHANGESET_DETAILS_ID in CHANGEIMPACT and lookup ID in CHANGESET_DETAILS
        // Get CHANGEID

        // FK_OPERATION+ID in CHANGESET_DETAILS look up OPERATION
        // Get PROJECT_NAME, etc.
        $result = "40-addcoo";
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
        } elseif ($result == "FAIL") {
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