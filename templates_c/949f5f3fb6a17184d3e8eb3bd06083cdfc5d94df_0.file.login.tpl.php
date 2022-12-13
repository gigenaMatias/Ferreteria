<?php
/* Smarty version 3.1.39, created on 2022-12-11 18:42:40
  from 'C:\xampp\htdocs\Ferreteria\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63961690f314f0_85682487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '949f5f3fb6a17184d3e8eb3bd06083cdfc5d94df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ferreteria\\templates\\login.tpl',
      1 => 1669326892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63961690f314f0_85682487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br><br> 
    <div class="container-sm">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-6">
                <form action="verify" method="POST">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
                      <input type="email" name="username"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                        <div class="alert alert-danger" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                        </div>
                    <?php }?>
                    <input type="submit" class="btn btn-outline-success">
            </div>
            <div class="col">
            </div>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
