<?php
require 'includes/db.php';
require 'includes/functions.php';
use Smarty\Smarty;
require 'vendor/autoload.php'; 

$id = $_GET['id'];
$patient = getPatientById($conn, $id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'address' => $_POST['address']
    ];
    updatePatient($conn, $id, $data);
    header('Location: index.php');
}

$smarty = new Smarty();
$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');
$smarty->assign('patient', $patient);
$smarty->display('update.tpl');
?>
