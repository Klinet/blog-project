<?php
/* Smarty version 5.4.3, created on 2025-04-03 11:38:32
  from 'file:post/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ee73388ee269_33879262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5752b81bd2e8db7c71f268471bda1483fc11f4fc' => 
    array (
      0 => 'post/show.tpl',
      1 => 1743680310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/head.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
))) {
function content_67ee73388ee269_33879262 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Akali\\PhpstormProjects\\blog-project\\templates\\post';
$_smarty_tpl->renderSubTemplate("file:partials/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container py-5">
    <h1 class="mb-4"><?php echo $_smarty_tpl->getValue('post')['title'];?>
</h1>
    <p class="text-muted">
        Szerző: <?php echo $_smarty_tpl->getValue('post')['author'];?>
 – <?php echo $_smarty_tpl->getValue('post')['publish_at'];?>

    </p>

    <div class="mb-5">
        <p><?php echo $_smarty_tpl->getValue('post')['content'];?>
</p>
    </div>

    <?php if ($_smarty_tpl->getValue('isLoggedIn')) {?> <!-- Csak bejelentkezett felhasználóknak -->
        <div class="mb-3">
            <a href="/admin/edit-post/<?php echo $_smarty_tpl->getValue('post')['id'];?>
" class="btn btn-primary">Szerkesztés</a>
            <a href="/admin/delete-post/<?php echo $_smarty_tpl->getValue('post')['id'];?>
" class="btn btn-danger" onclick="return confirm('Biztosan törölni akarod ezt a posztot?');">Törlés</a>
        </div>
    <?php }?>

    <a href="javascript:history.back()" class="btn btn-secondary">Vissza az előző oldalra</a>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
