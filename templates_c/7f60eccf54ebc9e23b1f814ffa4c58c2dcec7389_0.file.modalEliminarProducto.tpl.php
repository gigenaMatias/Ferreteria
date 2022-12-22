<?php
/* Smarty version 3.1.39, created on 2022-12-22 21:16:04
  from 'C:\xampp\htdocs\Ferreteria\templates\modals\modalEliminarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63a4bb04c10ca0_96163898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f60eccf54ebc9e23b1f814ffa4c58c2dcec7389' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ferreteria\\templates\\modals\\modalEliminarProducto.tpl',
      1 => 1671739838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a4bb04c10ca0_96163898 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="eliminarProductoModal" tabindex="-1" aria-labelledby="eliminar-Producto" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger">
        <h1 class="modal-title fs-5 text-white" >Eliminar Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
          <p class=" text-danger text-center fs-1 text-bolder"> X </p>
          <p class=" text-center">El item (placeholder) del proveedor (placeholder) será eliminado</p>
          <p class=" fs-4 text-black fw-bold text-center"> ¿Está seguro?</p>
      </div>
    
        <div class="row justify-content-evenly mb-4">
          <button type="button" class="btn btn-secondary col-4" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary col-4">Eliminar</button>
        </div>         
    
    </div>
  </div>
</div><?php }
}
