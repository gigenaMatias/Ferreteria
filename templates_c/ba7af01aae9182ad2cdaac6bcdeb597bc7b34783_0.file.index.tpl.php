<?php
/* Smarty version 3.1.39, created on 2022-12-22 20:42:35
  from 'C:\xampp\htdocs\Ferreteria\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63a4b32b7fc371_91833864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba7af01aae9182ad2cdaac6bcdeb597bc7b34783' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ferreteria\\templates\\index.tpl',
      1 => 1671738148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/modals/modalTalonario.tpl' => 1,
    'file:templates/modals/modalNuevoProducto.tpl' => 1,
    'file:templates/modals/modalModificarProducto.tpl' => 1,
    'file:templates/modals/modalEliminarProducto.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63a4b32b7fc371_91833864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <nav> <!--NAV-->
      <ul class="nav nav-tabs">
          <li class="nav-item col-4">
            <a class="nav-link active" aria-current="page" href="#">Inventario</a>
          </li>
          <li class="nav-item col-4">
            <a class="nav-link link-primary" href="#">Proveedores</a>
          </li>
          <li class="nav-item col-4">
            <a class="nav-link link-primary" href="#">Clientes</a>
          </li>
      </ul>
    </nav>

    <div class="row my-2 mx-4 justify-content-between">
      <button type="button" class="btn btn-success col-1" data-bs-toggle="modal" data-bs-target="#nuevoProductoModal"> 
        Nuevo producto
      </button>
      <button type="button" class="btn btn-secondary col-1" data-bs-toggle="modal" data-bs-target="#talonarioModal">
        Talonario
      </button>
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/modals/modalTalonario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/modals/modalNuevoProducto.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/modals/modalModificarProducto.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/modals/modalEliminarProducto.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!--bloque inventario-->
    <div class="container-fluid row my-1">
        <!--filtros-->
        <form class="my-3">
          <div class="row align-items-center ">
            <div class="col form-floating">
              <input type="text" class="form-control" id="inputNombreProducto" placeholder="producto">
              <label for="inputNombreProducto" class="ms-2">Nombre del producto</label>
              </div>
            <div class="col form-floating">
              <input type="text" class="form-control" id="inputCaracteristica" placeholder="caracteristica producto">
              <label for="inputCaracteristica" class="ms-2">Caracteristica del producto</label>
            </div>
            
            <div class="col me-5">
              <select class="form-select py-3" id="proveedores" aria-label="Default select example">
                <option selected>Proveedores</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
          </div>
            <button class="btn btn-primary col-1" type="button" aria-expanded="false"> Buscar </button>
          </div>
        </form>

        <!--planilla inventario-->
        <div class="container-fluid">
          <ul>
            <li class="row text-white bg-primary  bg-opacity-75 align-items-center">
               <div class="col"> nombre producto </div>
               <div class="col"> proveedor </div>
               <div class="col"> caracteristica </div>
               <div class="col"> precio ejemplo </div>
               <div class="col"> stock disponible </div>
               <div class="dropdown col-1">
                <div class="btn-group">
                    <button type="button" class="btn btn-success">
                      +
                    </button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                      <ul class="dropdown-menu bg-secondary">
                        <li><a class="dropdown-item text-bg-warning" href="#">Editar</a></li>
                        <li><a class="dropdown-item text-bg-danger" href="#">Eliminar</a></li>
                      </ul>
                </div>  
               </div>
             </li>
             <li class="row text-white bg-secondary bg-opacity-90 align-items-center">
               <div class="col"> nombre producto </div>
               <div class="col"> proveedor </div>
               <div class="col"> caracteristica </div>
               <div class="col"> precio ejemplo </div>
               <div class="col"> stock disponible </div>
               <div class="dropdown col-1">
                  <div class="btn-group">
                    <button type="button" class="btn btn-success">
                      +
                    </button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                      <ul class="dropdown-menu bg-primary">
                        <div class="btn-group-vertical w-100" role="group" aria-label="Vertical button group">
                          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edicionProductoModal">Editar</button>
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarProductoModal">Button</button>
                        </div>
                      </ul>
                  </div>  
                </div>
              </li>
             <li class="row text-white bg-primary bg-opacity-75 align-items-center">
               <div class="col"> nombre producto </div>
               <div class="col"> proveedor </div>
               <div class="col"> caracteristica </div>
               <div class="col"> precio ejemplo </div>
               <div class="col"> stock disponible </div>
               <div class="dropdown col-1">
                <div class="btn-group">
                    <button type="button" class="btn btn-success">
                      +
                    </button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                      <ul class="dropdown-menu bg-secondary">
                        <li><a class="dropdown-item text-bg-warning" href="#">Editar</a></li>
                        <li><a class="dropdown-item text-bg-danger" href="#">Eliminar</a></li>
                      </ul>
                </div>  
              </div>
             </li>
             <li class="row text-white bg-secondary bg-opacity-90 align-items-center">
               <div class="col"> nombre producto </div>
               <div class="col"> proveedor </div>
               <div class="col"> caracteristica </div>
               <div class="col"> precio ejemplo </div>
               <div class="col"> stock disponible </div>
               <div class="dropdown col-1">
                  <div class="btn-group">
                    <button type="button" class="btn btn-success">
                      +
                    </button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                      <ul class="dropdown-menu bg-primary">
                        <li><a class="dropdown-item text-bg-warning" href="#">Editar</a></li>
                        <li><a class="dropdown-item text-bg-danger" href="#">Eliminar</a></li>
                      </ul>
                  </div>  
                </div>               
             </li>
          </ul>
        </div>

    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
