<?php

include_once('./autoLoadClasses.inc.php');

$controller = new Controller();
$controller->redirectForeignUser();
$controller->addActionHistory($_POST['button-action']);
