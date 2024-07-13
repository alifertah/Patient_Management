<?php
/* Smarty version 5.3.1, created on 2024-07-13 16:52:58
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_6692b0ea49a656_01659184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8d80d10015bc9b8208913c5413da5bcd88ac23f' => 
    array (
      0 => 'index.tpl',
      1 => 1720816109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6692b0ea49a656_01659184 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Patient_Management\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10481458506692b0ea478130_09398338', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_8939394306692b0ea4908f6_67791821', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'title'} */
class Block_10481458506692b0ea478130_09398338 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Patient_Management\\templates';
?>
Patient List<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_8939394306692b0ea4908f6_67791821 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Patient_Management\\templates';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>Patient List</h1>
            <a href="create.php" class="btn btn-primary mb-3">Add New Patient</a>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Patient Details</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Doctor</th>
                                <th>Deparment</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('patients'), 'patient');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('patient')->value) {
$foreach0DoElse = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->getValue('patient')['name'];?>
</td>
                                <td><?php echo $_smarty_tpl->getValue('patient')['age'];?>
</td>
                                <td><?php echo $_smarty_tpl->getValue('patient')['address'];?>
</td>
                                <td><?php echo $_smarty_tpl->getValue('patient')['doctor'];?>
</td>
                                <td><?php echo $_smarty_tpl->getValue('patient')['deparment'];?>
</td>
                                <td>
                                    <a href="read.php?id=<?php echo $_smarty_tpl->getValue('patient')['id'];?>
" class="btn btn-info">View</a>
                                    <a href="update.php?id=<?php echo $_smarty_tpl->getValue('patient')['id'];?>
" class="btn btn-warning">Edit</a>
                                    <a href="delete.php?id=<?php echo $_smarty_tpl->getValue('patient')['id'];?>
" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                            </tr>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
