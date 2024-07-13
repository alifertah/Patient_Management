<?php
require 'includes/db.php';
require 'includes/functions.php';
use Smarty\Smarty;
require 'vendor/autoload.php'; 

$id = $_GET['id'];
$patient = getPatientById($conn, $id);

$smarty = new Smarty();
$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');
$smarty->assign('patient', $patient);
$smarty->display('read.tpl');
?>

