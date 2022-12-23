<?php
/* Smarty version 3.1.39, created on 2022-12-23 04:10:42
  from 'C:\xampp\htdocs\Ferreteria\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63a51c328ffa61_45446328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba7af01aae9182ad2cdaac6bcdeb597bc7b34783' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ferreteria\\templates\\index.tpl',
      1 => 1671764101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/modals/talonario.tpl' => 1,
    'file:templates/modals/nuevoProducto.tpl' => 1,
    'file:templates/modals/modificarProducto.tpl' => 1,
    'file:templates/modals/eliminarProducto.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63a51c328ffa61_45446328 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php $_smarty_tpl->_subTemplateRender('file:templates/modals/talonario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/modals/nuevoProducto.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/modals/modificarProducto.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/modals/eliminarProducto.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
                <option value="1">Opcion 1</option>
                <option value="2">Opcion 2</option>
                <option value="3">...</option>
                <option value="4">Opcion 4</option>
              </select>
          </div>
            <button class="btn btn-primary col-1" type="button" aria-expanded="false"> Buscar </button>
          </div>
        </form>

        <div class="container-fluid">
          <ul style="margin-block-end:0">
            <li class="row text-white bg-dark -bg-opacity-80 align-items-center rounded-top">
              <div class="col"> Nombre </div>
              <div class="col"> Codigo </div>
              <div class="col"> proveedor </div>
              <div class="col"> Caracteristica </div>
              <div class="col"> Precio </div>
              <div class="col"> Unidades disponibles </div>
              <div class="col-1"> Acciones</div>
            </li>
          </ul>
        </div>
        <!--planilla inventario-->
        <div class="container-fluid">
          <ul>
            <li class="row text-white bg-primary  bg-opacity-75 align-items-center">
               <div class="col"> Clavo X </div>
               <div class="col"> G275B-Z </div>
               <div class="col"> Opcion 2 </div>
               <div class="col"> Bronce </div>
               <div class="col"> 200$ c/Caja  </div>
               <div class="col"> 25 Cajas </div>
               <div class="dropdown col-1">
                <div class="btn-group">
                    <button type="button" class="btn btn-success">
                      +
                    </button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu bg-secondary bg-opacity-90">
                      <div class="btn-group-vertical w-100" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edicionProductoModal">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarProductoModal">Button</button>
                      </div>
                    </ul>
               </div>
             </li>
             <li class="row text-white bg-secondary bg-opacity-90 align-items-center">
               <div class="col"> Pala </div>
               <div class="col"> RTS7 </div>
               <div class="col"> Opcion 1 </div>
               <div class="col"> Roja </div>
               <div class="col"> 250$ c/Unidad </div>
               <div class="col"> 20 Unidades </div>
               <div class="dropdown col-1">
                  <div class="btn-group">
                    <button type="button" class="btn btn-success">
                      +
                    </button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                      <ul class="dropdown-menu bg-primary bg-opacity-75">
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
               <div class="col"> Codigo producto </div>
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
                    <ul class="dropdown-menu bg-secondary bg-opacity-90">
                      <div class="btn-group-vertical w-100" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edicionProductoModal">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarProductoModal">Button</button>
                      </div>
                    </ul>
                </div>  
              </div>
             </li>
             <li class="row text-white bg-secondary bg-opacity-90 align-items-center">
               <div class="col"> nombre producto </div>
               <div class="col"> Codigo producto </div>
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
                    <ul class="dropdown-menu bg-primary bg-opacity-75">
                      <div class="btn-group-vertical w-100" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edicionProductoModal">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarProductoModal">Button</button>
                      </div>
                    </ul>
                  </div>  
                </div>               
             </li>
             <!--elementos automatizados (recordatorio, agregarle los corchetes)
             foreach from = $listaProductos item=producto
                <li class="row text-white bg-secondary bg-opacity-90 align-items-center">
                  <div class="col"> $producto->nombre </div>
                  <div class="col"> $producto->codigo </div>
                  <div class="col"> $producto->proveedor </div>
                  <div class="col"> $producto->caracteristica </div>
                  <div class="col"> $producto->precio  </div>
                  <div class="col"> $producto->stock </div>
                  <div class="dropdown col-1">
                      <div class="btn-group">
                        <button type="button" class="btn btn-success">
                          +
                        </button>
                        <button type="button" id=$producto->id class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu bg-primary bg-opacity-75">
                          <div class="btn-group-vertical w-100" role="group" aria-label="Vertical button group">
                            <button type="button" id=$producto->id class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edicionProductoModal">Editar</button>
                            <button type="button" id=$producto->id class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarProductoModal">Button</button>
                          </div>
                        </ul>
                      </div>  
                    </div>               
                </li>
             /foreach
             -->
          </ul>
        </div>

    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
