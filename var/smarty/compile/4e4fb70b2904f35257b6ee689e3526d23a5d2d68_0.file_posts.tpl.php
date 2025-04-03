<?php
/* Smarty version 5.4.3, created on 2025-04-03 11:02:37
  from 'file:admin/posts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ee6acddd7a71_06590456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e4fb70b2904f35257b6ee689e3526d23a5d2d68' => 
    array (
      0 => 'admin/posts.tpl',
      1 => 1743678078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/head.tpl' => 2,
    'file:partials/footer.tpl' => 1,
  ),
))) {
function content_67ee6acddd7a71_06590456 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Akali\\PhpstormProjects\\blog-project\\templates\\admin';
$_smarty_tpl->renderSubTemplate("file:partials/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:partials/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container mt-5">
<h2>Blog posztok kezelése</h2>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Cím</th>
            <th>Tartalom</th>
            <th>Publikálás</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'post');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach0DoElse = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->getValue('post')['id'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('post')['title'];?>
</td>
                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('post')['content'],150);?>
</td>
                <td><?php echo $_smarty_tpl->getValue('post')['publish_at'];?>
</td>
                <td>
                    <a href="/admin/edit-post/<?php echo $_smarty_tpl->getValue('post')['id'];?>
" class="btn btn-primary">Szerkesztés</a>
                    <a href="/admin/delete-post/<?php echo $_smarty_tpl->getValue('post')['id'];?>
" class="btn btn-danger">Törlés</a>
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
