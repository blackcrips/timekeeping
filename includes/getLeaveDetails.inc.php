<?php

include_once('./autoLoadClasses.inc.php');

$view = new View();
if(!isset($_POST['request-data'])){
    exit(json_encode('Status 404'));
} else {
    $view->getLeaveDetails();
}
