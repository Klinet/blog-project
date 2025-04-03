<?php
/* Smarty version 5.4.3, created on 2025-04-03 12:16:12
  from 'file:guest/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ee7c0c60e353_93082815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '353c2af1cbed260ef65a5bffec21c566f27523ce' => 
    array (
      0 => 'guest/show.tpl',
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
function content_67ee7c0c60e353_93082815 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Akali\\PhpstormProjects\\blog-project\\templates\\guest';
$_smarty_tpl->renderSubTemplate("file:partials/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container py-5">
    <h1 class="mb-3"><?php echo $_smarty_tpl->getValue('post')->title;?>
</h1>  <!-- Módosítva: $post['title'] helyett $post->title -->
    <p class="text-muted">
        Írta: <?php echo $_smarty_tpl->getValue('post')->author;?>
 – <?php echo $_smarty_tpl->getValue('post')->publish_at;?>
  <!-- Módosítva: $post['author'] helyett $post->author -->
    </p>

    <div class="mb-5">
        <p><?php echo $_smarty_tpl->getValue('post')->content;?>
</p>  <!-- Módosítva: $post['content'] helyett $post->content -->
    </div>

    <a href="javascript:history.back()" class="btn btn-secondary">Vissza az előző oldalra</a>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
