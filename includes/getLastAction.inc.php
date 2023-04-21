<?php

include_once('./autoLoadClasses.inc.php');

$controller = new Controller();
$controller->redirectForeignUser();
$controller->fetchLast_tKeepAction();
