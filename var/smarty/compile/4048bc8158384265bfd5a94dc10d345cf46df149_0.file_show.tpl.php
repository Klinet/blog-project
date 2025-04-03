<?php
/* Smarty version 5.4.3, created on 2025-04-03 11:02:45
  from 'file:user/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ee6ad5d10992_46696238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4048bc8158384265bfd5a94dc10d345cf46df149' => 
    array (
      0 => 'user/show.tpl',
      1 => 1743677999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/head.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
))) {
function content_67ee6ad5d10992_46696238 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Akali\\PhpstormProjects\\blog-project\\templates\\user';
$_smarty_tpl->renderSubTemplate("file:partials/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container py-5">
	<h1 class="mb-4">Felhasználói profil: <?php echo $_smarty_tpl->getValue('user')['email'];?>
</h1>

	<p><strong>Regisztráció dátuma:</strong> <?php echo $_smarty_tpl->getValue('user')['created_at'];?>
</p>

	<h2 class="mt-4">Felhasználó posztjai</h2>
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
" class="btn btn-primary">Olvasd tovább</a>
		</div>
	</div>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('posts')) == 0) {?>
	<p>Ennek a felhasználónak nincsenek posztjai.</p>
	<?php }?>

	<a href="/admin/dashboard" class="btn btn-secondary mt-4">Vissza az admin dashboardra</a>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
