<?php
require 'includes/db.php';
require 'includes/functions.php';
use Smarty\Smarty;
require 'vendor/autoload.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'address' => $_POST['address'],
        'doctor' => $_POST['doctor'],
        'department' => $_POST['deparment'],
    ];
    createPatient($conn, $data);
    header('Location: index.php');
}
$smarty = new Smarty();
$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');
$smarty->display('create.tpl');
?>
