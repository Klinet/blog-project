<?php
/* Smarty version 5.4.3, created on 2025-04-03 10:39:34
  from 'file:admin/users.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ee656672aa09_41484660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6aabff84e597320d5978f945bc1c46e23bb88da0' => 
    array (
      0 => 'admin/users.tpl',
      1 => 1743676772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/head.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
))) {
function content_67ee656672aa09_41484660 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Akali\\PhpstormProjects\\blog-project\\templates\\admin';
$_smarty_tpl->renderSubTemplate("file:partials/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container mt-5">
    <h2>Felhasználók kezelése</h2>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Regisztráció dátuma</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('users'), 'user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('user')->value) {
$foreach0DoElse = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->getValue('user')['id'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('user')['email'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('user')['created_at'];?>
</td>
                <td>
                    <a href="/admin/users/<?php echo $_smarty_tpl->getValue('user')['id'];?>
/edit" class="btn btn-warning btn-sm">Szerkesztés</a>
                    <a href="/admin/users/<?php echo $_smarty_tpl->getValue('user')['id'];?>
/delete" class="btn btn-danger btn-sm">Törlés</a>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<?php $_smarty_tpl->renderSubTemplate("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
