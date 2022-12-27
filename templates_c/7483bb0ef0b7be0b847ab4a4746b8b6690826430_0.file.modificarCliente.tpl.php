<?php
/* Smarty version 3.1.39, created on 2022-12-27 20:23:50
  from 'C:\xampp\htdocs\Ferreteria\templates\modals\modificarCliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63ab4646792347_80851191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7483bb0ef0b7be0b847ab4a4746b8b6690826430' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ferreteria\\templates\\modals\\modificarCliente.tpl',
      1 => 1672169010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab4646792347_80851191 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="edicionClienteModal" tabindex="-1" aria-labelledby="edicion-Cliente" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        
      <div class="modal-header bg-warning bg-opacity-75">
        <h1 class="modal-title fs-5 text-white" >Editar Cliente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
        <form>
          <div class="modal-body">             
            <div class="row justify-content-evenly mb-3">
                <div class="form-floating col-7">
                    <input type="text" class="form-control" id="nuevoNombreCliente" placeholder=" ">
                    <label for="nuevoNombreCliente" class="ms-2">Nombre del Cliente</label>
                </div>
                <div class="form-floating col-5">
                    <input type="text" class="form-control" id="nuevoCuilCliente" placeholder=" ">
                    <label for="nuevoCuilProducto" class="ms-2">Cuil</label>
                </div>

            </div>
            <div class="row justify-content-evenly mb-3">
                <div class="form-floating col">
                    <input type="text" class="form-control" id="nuevoMailCliente" placeholder=" ">
                    <label for="nuevoMailProducto" class="ms-2">e-mail</label>
                </div>
            </div>
            <div class="row justify-content-evenly mb-3">
                <div class="form-floating col-5">
                    <input type="text" class="form-control" id="nuevoTelefonoCliente" placeholder=" ">
                    <label for="nuevoTelefonoProducto" class="ms-2">Telefono</label>
                </div>
                <div class="form-floating col-5">
                    <input type="text" class="form-control" id="nuevoDireccionCliente" placeholder=" ">
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
