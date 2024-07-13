<?php

use Smarty\Smarty;
require 'vendor/autoload.php'; 

require 'includes/db.php';
require 'includes/functions.php';
// require Smarty;

$smarty = new Smarty();
$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');

$patients = getAllPatients($conn);
$smarty->assign('patients', $patients);

$smarty->display('index.tpl');
?>
