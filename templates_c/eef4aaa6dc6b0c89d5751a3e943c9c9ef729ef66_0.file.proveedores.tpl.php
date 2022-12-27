<?php
/* Smarty version 3.1.39, created on 2022-12-27 20:26:20
  from 'C:\xampp\htdocs\Ferreteria\templates\proveedores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63ab46dcad29c3_66012142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eef4aaa6dc6b0c89d5751a3e943c9c9ef729ef66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ferreteria\\templates\\proveedores.tpl',
      1 => 1672169176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/modals/nuevoProveedor.tpl' => 1,
    'file:templates/modals/eliminarProveedor.tpl' => 1,
    'file:templates/modals/modificarProveedor.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63ab46dcad29c3_66012142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <nav> <!--NAV-->
        <ul class="nav nav-tabs">
            <li class="nav-item col-4">
            <a class="nav-link link-prinary bg-secondary bg-opacity-50" href="home">Inventario</a>
            </li>
            <li class="nav-item col-4">
            <a class="nav-link active" aria-current="page" href="#">Proveedores</a>
            </li>
            <li class="nav-item col-4">
            <a class="nav-link link-primary bg-secondary bg-opacity-50" href="clientes">Clientes</a>
            </li>
        </ul>
    </nav>

    <div class="row my-2 mx-4">
        <button type="button" class="btn btn-success col-1" data-bs-toggle="modal" data-bs-target="#nuevoProveedorModal"> 
            Nuevo Proveedor
        </button>
    </div>

    
<?php $_smarty_tpl->_subTemplateRender('file:templates/modals/nuevoProveedor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/modals/eliminarProveedor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!--bloque proveedores-->
    <div class="container-fluid row my-1">
        <div class="container-fluid">
            <ul style="margin-block-end:0">
                <li class="row text-white bg-dark -bg-opacity-80 align-items-center rounded-top">
                <div class="col"> Nombre </div>
                <div class="col"> Cuil </div>
                <div class="col"> Multiplicador </div>
                <div class="col"> e-mail </div>
                <div class="col"> Telefono </div>
                <div class="col"> Direccion </div>
                <div class="col-1"> Acciones</div>
                </li>
            </ul>
        </div>
    
        <div class="container-fluid">
          <ul>
            <li class="row text-white bg-primary  bg-opacity-75 align-items-center">
               <div class="col"> Esteban Kito </div>
               <div class="col"> 20325487916 </div>
               <div class="col"> 1.25 </div>
               <div class="col"> esteban@kito.com </div>
               <div class="col"> (2262) 578942 </div>
               <div class="col"> Calle Falsa 123 </div>
               <div class="dropdown col-1">
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu bg-secondary bg-opacity-90">
                      <div class="btn-group-vertical w-100" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edicionProveedorModal">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarProveedorModal">Eliminar</button>
                      </div>
                    </ul>
               </div>
             </li>
          </ul>
        </div>

        <!-- elementos automatizados 
        foreach from = $listaProveedores item=proveedor
            <li class="row text-white bg-primary  bg-opacity-75 align-items-center">
               <div class="col"> $proveedor->nombre </div>
               <div class="col"> $proveedor->cuil </div>
               <div class="col"> $proveedor->multiplicador </div>
               <div class="col"> $proveedor->mail </div>
               <div class="col"> $proveedor->telefono </div>
               <div class="col"> $proveedor->direccion </div>
               <div class="dropdown col-1">
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu bg-secondary bg-opacity-90">
                      <div class="btn-group-vertical w-100" role="group" aria-label="Vertical button group">
                        <button type="button" id=$proveedor->id class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edicionProveedorModal">Editar</button>
                        <button type="button" id=$proveedor->id class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarProveedorModal">Button</button>
                      </div>
                    </ul>
               </div>
             </li>
        /foreach
        -->
    
<?php $_smarty_tpl->_subTemplateRender('file:templates/modals/modificarProveedor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>




<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
