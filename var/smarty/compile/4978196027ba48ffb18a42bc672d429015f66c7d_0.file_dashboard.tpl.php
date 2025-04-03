<?php
/* Smarty version 5.4.3, created on 2025-04-03 10:57:43
  from 'file:admin/dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ee69a7c9e7f3_27896642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4978196027ba48ffb18a42bc672d429015f66c7d' => 
    array (
      0 => 'admin/dashboard.tpl',
      1 => 1743677857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/head.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
))) {
function content_67ee69a7c9e7f3_27896642 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Akali\\PhpstormProjects\\blog-project\\templates\\admin';
$_smarty_tpl->renderSubTemplate("file:partials/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container py-5">
    <h1 class="mb-4">Admin Dashboard</h1>

    <div class="row">
        <div class="col-md-6">
            <h2>Legújabb posztok</h2>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'post');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach0DoElse = false;
?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->getValue('post')['title'];?>
</h5>
                        <p class="card-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('post')['content'],150);?>
</p>
                        <a href="/post/<?php echo $_smarty_tpl->getValue('post')['id'];?>
" class="btn btn-primary">Elemenként megnéz</a>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <a href="/admin/posts" class="btn btn-secondary">Teljes lista</a>
        </div>

        <div class="col-md-6">
            <h2>Legújabb felhasználók</h2>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('users'), 'user');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('user')->value) {
$foreach1DoElse = false;
?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->getValue('user')['email'];?>
</h5>
                        <p class="card-text">Regisztráció dátuma: <?php echo $_smarty_tpl->getValue('user')['created_at'];?>
</p>
                        <a href="/admin/users/<?php echo $_smarty_tpl->getValue('user')['id'];?>
" class="btn btn-primary">Elemenként megnéz</a>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <a href="/admin/users" class="btn btn-secondary">Teljes lista</a>
        </div>
    </div>

    <a href="/logout" class="btn btn-danger mt-4">Kijelentkezés</a>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
