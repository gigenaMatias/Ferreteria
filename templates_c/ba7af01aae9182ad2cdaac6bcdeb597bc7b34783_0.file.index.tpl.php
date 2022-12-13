<?php
/* Smarty version 3.1.39, created on 2022-12-14 00:50:47
  from 'C:\xampp\htdocs\Ferreteria\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63990fd73b9454_36044730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba7af01aae9182ad2cdaac6bcdeb597bc7b34783' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ferreteria\\templates\\index.tpl',
      1 => 1670975446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63990fd73b9454_36044730 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <nav class="navbar navbar-expand-lg bg-light row"> <!--NAV-->
      <div class="container-fluid">
      <ul class="asd row">
          <li class="nav-item col">
            <a class="navbar-brand asd col" href="#">Ferreteria</a>
          </li>
          <li class="nav-item col">
            <a class="nav-link " href="#">Lista de Productos</a>
          </li>
          <li class="nav-item col">
            <a class="nav-link">Tarifario</a>
          </li>
      </ul>
      </div>
    </nav>


    <div class="container-fluid row">
      <div class="bloqueInventario col-7">
        <!--filtros-->
        <div class="Filtros">
          <ul class="row">
            <li id="inputNombreProducto" class="col">
              <input type="text" value="nombre del producto">
            </li>
            <li id="inputCaracteristicas" class="col">
              <input type="text" value="caracteristicas del producto">
            </li>

            <!--menu dropdown-->
            <div class="dropdown col">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Proveedores
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
          </ul>
        </div>
      
        <div class="container-fluid listaInventario">
          <ul>
            <li class="row item1">
                <div class="col"> nombre producto </div>
                <div class="col"> proveedor </div>
                <div class="col"> caracteristica </div>
                <div class="col"> precio ejemplo </div>
                <div class="col"> stock disponible </div>
              </li>
              <li class="row item2">
                <div class="col"> nombre producto </div>
                <div class="col"> proveedor </div>
                <div class="col"> caracteristica </div>
                <div class="col"> precio ejemplo </div>
                <div class="col"> stock disponible </div>
              </li>
              <li class="row item1">
                <div class="col"> nombre producto </div>
                <div class="col"> proveedor </div>
                <div class="col"> caracteristica </div>
                <div class="col"> precio ejemplo </div>
                <div class="col"> stock disponible </div>
              </li>
              <li class="row item2">
                <div class="col"> nombre producto </div>
                <div class="col"> proveedor </div>
                <div class="col"> caracteristica </div>
                <div class="col"> precio ejemplo </div>
                <div class="col"> stock disponible </div>
              </li>
          </ul>
        </div>

      </div>

      <div class="bloqueTarifario col">
        <div> Talonario </div>
        <div class="container-fluid listaInventario">
          <ul>
            <li class="row item1">
                <div class="col-6"> nombre producto </div>
                <div class="col-2"> cantidad </div>
                <div class="col"> precio costo </div>
              </li>
              <li class="row item2">
                <div class="col-6"> nombre producto </div>
                <div class="col-2"> cantidad </div>
                <div class="col"> precio costo </div>
              </li>
              <li class="row item1">            
                <div class="col-6"> nombre producto </div>
                <div class="col-2"> cantidad </div>
                <div class="col"> precio costo </div>
              </li>
              <li class="row item2">
                <div class="col-6"> nombre producto </div>
                <div class="col-2"> cantidad </div>
                <div class="col"> precio costo </div>
            </li>
          </ul>
          <form class="row">
            <button class="btn btn-secondary col-2" type="button" > 
            imprimir </button>
            <div class="col-8"></div>
            <div class="col"> Total:$ </div>
          </form>
        </div>
      </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
