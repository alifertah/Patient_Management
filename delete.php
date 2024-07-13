<?php
require 'includes/db.php';
require 'includes/functions.php';
use Smarty\Smarty;
require 'vendor/autoload.php'; 

$id = $_GET['id'];
deletePatient($conn, $id);
header('Location: index.php');
?>
