<?php
/* Smarty version 3.1.39, created on 2022-12-27 20:12:11
  from 'C:\xampp\htdocs\Ferreteria\templates\modals\modificarProveedor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63ab438bc66294_81922872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5adbf0977f0f444479bf85799ad36f8ea2b404f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ferreteria\\templates\\modals\\modificarProveedor.tpl',
      1 => 1672168330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab438bc66294_81922872 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="edicionProveedorModal" tabindex="-1" aria-labelledby="edicion-Proveedor" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        
      <div class="modal-header bg-warning bg-opacity-75">
        <h1 class="modal-title fs-5 text-white" >Editar Proveedor</h1>
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
            
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Guardar"/>            
          </div>
        </form>
    </div>
  </div>
</div><?php }
}
