<?php
/* Smarty version 3.1.39, created on 2022-12-13 23:25:11
  from 'C:\xampp\htdocs\ferreteria\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6398fbc763bc14_40198513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2181d61d5a6ced287328ecbfed330d7d8df8d138' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ferreteria\\templates\\index.tpl',
      1 => 1670970308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6398fbc763bc14_40198513 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
    <nav class="navbar navbar-expand-lg bg-light"> <!--NAV-->
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Ferreteria</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Lista de Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Tarifario</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="buscar..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar!</button>
          </form>
        </div>
      </div>
    </nav>


    <div class="bloqueTarifario"></div>

    <div class="bloqueInventario">
      <div class="Filtros">
        <ul>
          <li id="inputNombreProducto">
            <input type="text" value="nombre del producto">
          </li>
          <li id="inputCaracteristicas">
            <input type="text" value="caracteristicas del producto">
          </li>

          <!--menu dropdown-->
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown button
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>

        </ul>
      </div>
    </div>

    <div class="tarifario">
      <a href="#">Tarifario</a>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
