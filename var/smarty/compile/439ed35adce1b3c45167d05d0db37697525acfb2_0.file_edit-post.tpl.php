<?php
/* Smarty version 5.4.3, created on 2025-04-03 11:05:47
  from 'file:admin/edit-post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ee6b8bb45df3_94368988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '439ed35adce1b3c45167d05d0db37697525acfb2' => 
    array (
      0 => 'admin/edit-post.tpl',
      1 => 1743678277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/head.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
))) {
function content_67ee6b8bb45df3_94368988 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Akali\\PhpstormProjects\\blog-project\\templates\\admin';
$_smarty_tpl->renderSubTemplate("file:partials/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container py-5">
    <h2>Poszt szerkesztése</h2>

    <form action="/admin/edit-post/<?php echo $_smarty_tpl->getValue('post')['id'];?>
" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Cím</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $_smarty_tpl->getValue('post')['title'];?>
" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Tartalom</label>
            <textarea class="form-control" id="content" name="content" rows="5" required><?php echo $_smarty_tpl->getValue('post')['content'];?>
</textarea>
        </div>
        <div class="mb-3">
            <label for="publish_at" class="form-label">Publikálás dátuma</label>
            <input type="datetime-local" class="form-control" id="publish_at" name="publish_at" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('post')['publish_at'],'%Y-%m-%dT%H:%M');?>
">
        </div>
        <button type="submit" class="btn btn-primary">Poszt frissítése</button>
    </form>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
