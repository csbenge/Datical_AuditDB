<?php

/* src/View/Helper/LinkHelper.php (using other helpers) */

namespace App\View\Helper;

use Cake\View\Helper;

class DeployResultsHelper extends Helper
{
    public $helpers = ['Html'];

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
    	if ($action == "update") {
    		$result = 'Deploy';
    	} elseif ($action == "rollback") {
    		$result = 'Rollback'; 
    	}
        return $result;
    }
}
?>