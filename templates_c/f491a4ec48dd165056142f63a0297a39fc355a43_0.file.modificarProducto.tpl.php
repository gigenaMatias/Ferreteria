<?php
/* Smarty version 3.1.39, created on 2023-03-24 13:58:12
  from 'C:\xampp\htdocs\ferreteria\templates\modals\modificarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_641d9e64693fa8_28628825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f491a4ec48dd165056142f63a0297a39fc355a43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ferreteria\\templates\\modals\\modificarProducto.tpl',
      1 => 1679662391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641d9e64693fa8_28628825 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="edicionProductoModal" tabindex="-1" aria-labelledby="edicion-Producto" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        
      <div class="modal-header bg-warning bg-opacity-75">
        <h1 class="modal-title fs-5 text-white" >Editar Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
        <form>
          <div class="modal-body">  
            
              <div class="row justify-content-evenly mb-3">
                <div class="form-floating col-5">
                  <input type="text" class="form-control" id="edicionNombreProducto" placeholder=" ">
                  <label for="floatingNombreProducto" class="ms-2">Nombre del Producto</label>
                </div>
                <div class="form-floating col-3">
                  <input type="text" class="form-control" id="edicionCantidadUnidades" placeholder=" ">
                  <label for="floatingNombreProducto" class="ms-2">Cantidad</label>
                </div>
                <div class="col-4">
                  <select class="form-select py-3" id="edicionTipoUnidad" aria-label="Seleccion del tipo de unidad">
                    <option selected>Tipo Unidad</option>
                    <option value="1">Kg</option>
                    <option value="2">Unidad</option>
                    <option value="3">Caja</option>
                  </select>
                </div>
              </div>
              
              <div class="row justify-content-evenly">
                <div class="form-floating col-4">
                  <input type="text" class="form-control" id="edicionCodigoProducto" placeholder=" ">
                  <label for="floatingNombreProducto" class="ms-2">Codigo</label>
                </div>
                <div class="form-floating col-3">
                  <input type="text" class="form-control" id="edicionPrecioCosto" placeholder=" ">
                  <label for="floatingNombreProducto" class="ms-2">Valor costo</label>
                </div>
                <div class="col-5">
                  <select class="form-select py-3" id="edicionProveedor"aria-label="Seleccion del Proveedor">
                    <option selected>Proveedor</option>
                    <option value="1">Opcion1</option>
                    <option value="2">Opcion2</option>
                    <option value="3">....</option>
                    <option value="4">Opcion X</option>
                  </select>
                </div>
              </div>

            <div class="form-floating my-3" >
              <input type="text" class="form-control" id="edicionCaracteristica" placeholder=" ">
              <label for="floatingNombreProducto">Caracteristicas del producto </label>
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
