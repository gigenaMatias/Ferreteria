<?php
/* Smarty version 3.1.39, created on 2023-03-24 14:09:02
  from 'C:\xampp\htdocs\ferreteria\templates\modals\nuevoProveedor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_641da0ee74cb99_01020769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc2b3f31eff35c0ac06f53db942886b7996ec510' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ferreteria\\templates\\modals\\nuevoProveedor.tpl',
      1 => 1679662391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641da0ee74cb99_01020769 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="nuevoProveedorModal" tabindex="-1" aria-labelledby="nuevo-Producto" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header bg-success bg-opacity-75">
            <h1 class="modal-title fs-5 text-white" >Nuevo Proveedor</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form>
            <div class="modal-body">             
                    <div class="row justify-content-evenly mb-3">
                        <div class="form-floating col-5">
                            <input type="text" class="form-control" id="nuevoNombreProveedor" placeholder=" ">
                            <label for="nuevoNombreProveedor" class="ms-2">Nombre del Proveedor</label>
                        </div>
                        <div class="form-floating col-4">
                            <input type="text" class="form-control" id="nuevoCuilProveedor" placeholder=" ">
                            <label for="nuevoCuilProducto" class="ms-2">Cuil</label>
                        </div>
                        <div class="form-floating col-3">
                            <input type="text" class="form-control" id="nuevoMultiplicadorProveedor" placeholder=" ">
                            <label for="nuevoMultiplicadorProducto" class="ms-2">Multiplicador</label>
                        </div>
                    </div>
                    <div class="row justify-content-evenly mb-3">
                        <div class="form-floating col">
                            <input type="text" class="form-control" id="nuevoMailProveedor" placeholder=" ">
                            <label for="nuevoMailProducto" class="ms-2">e-mail</label>
                        </div>
                    </div>
                    <div class="row justify-content-evenly mb-3">
                        <div class="form-floating col-5">
                            <input type="text" class="form-control" id="nuevoTelefonoProveedor" placeholder=" ">
                            <label for="nuevoTelefonoProducto" class="ms-2">Telefono</label>
                        </div>
                        <div class="form-floating col-5">
                            <input type="text" class="form-control" id="nuevoDireccionProveedor" placeholder=" ">
                            <label for="nuevoDireccionProducto" class="ms-2">Direccion</label>
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Guardar"/>              
            </div>
        </form>
    </div>
  </div>
</div><?php }
}
