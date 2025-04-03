<?php
/* Smarty version 5.4.3, created on 2025-04-03 11:56:00
  from 'file:guest/home.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ee77502d34d7_19911928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cb76d7f236b0ca0ee287ac1dc8cbbaa0db0590f' => 
    array (
      0 => 'guest/home.tpl',
      1 => 1743681312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/head.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
))) {
function content_67ee77502d34d7_19911928 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Akali\\PhpstormProjects\\blog-project\\templates\\guest';
$_smarty_tpl->renderSubTemplate("file:partials/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container py-5">
    <h1 class="mb-4">Legfrissebb posztok (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('posts'));?>
)</h1>

    <?php if ((true && ($_smarty_tpl->hasVariable('flashMessage') && null !== ($_smarty_tpl->getValue('flashMessage') ?? null)))) {?>
        <div class="alert alert-warning" role="alert">
            <?php echo $_smarty_tpl->getValue('flashMessage');?>

        </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('isLoggedIn')) {?>
        <p>Üdvözöljük, <?php echo $_smarty_tpl->getValue('userEmail');?>
!</p>
        <a href="/admin/dashboard" class="btn btn-primary">Admin Felület</a>
    <?php } else { ?>
        <button id="loginBtn" class="btn btn-success mb-4">Bejelentkezés</button>
    <?php }?>

    <div id="loginForm" style="display: none;">
        <div class="container py-5">
            <h2>Bejelentkezés</h2>
            <form action="/login" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Jelszó</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Bejelentkezés</button>
            </form>
        </div>
    </div>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'post');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach0DoElse = false;
?>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->getValue('post')->title;?>
</h5>
                <p class="card-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('post')->content,150);?>
</p>
                <p class="card-text">
                    <small class="text-muted">Szerző: <?php echo $_smarty_tpl->getValue('post')->author;?>
 – <?php echo $_smarty_tpl->getValue('post')->publish_at;?>
</small>
                </p>
                <a href="/post/<?php echo $_smarty_tpl->getValue('post')->id;?>
" class="btn btn-primary">Olvasd tovább</a>
            </div>
        </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('posts')) == 0) {?>
        <p>Nincsenek még publikált posztok.</p>
    <?php }?>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php echo '<script'; ?>
>
    document.getElementById('loginBtn').addEventListener('click', function() {
        var loginForm = document.getElementById('loginForm');
        if (loginForm.style.display === "none" || loginForm.style.display === "") {
            loginForm.style.display = "block";
        } else {
            loginForm.style.display = "none";
        }
    });
<?php echo '</script'; ?>
><?php }
}
