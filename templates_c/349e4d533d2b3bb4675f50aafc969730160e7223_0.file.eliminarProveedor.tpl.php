<?php
/* Smarty version 3.1.39, created on 2022-12-27 20:18:09
  from 'C:\xampp\htdocs\Ferreteria\templates\modals\eliminarProveedor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63ab44f1d3c758_52313118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '349e4d533d2b3bb4675f50aafc969730160e7223' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ferreteria\\templates\\modals\\eliminarProveedor.tpl',
      1 => 1672168688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab44f1d3c758_52313118 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="eliminarProveedorModal" tabindex="-1" aria-labelledby="eliminar-Proveedor" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger">
        <h1 class="modal-title fs-5 text-white" >Eliminar Proveedor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
          <p class=" text-danger text-center fs-1 text-bolder"> X </p>
          <p class=" text-center">El Proveedor (placeholder) con el CUIL (placeholder) será eliminado</p>
          <p class=" fs-4 text-black fw-bold text-center"> ¿Está seguro?</p>
      </div>
    
        <form class="row justify-content-evenly mb-4">
          <button type="button" class="btn btn-secondary col-4" data-bs-dismiss="modal">Cancelar</button>
          <input type="submit" class="btn btn-primary col-4" value="Eliminar"/>
        </form>         
    
    </div>
  </div>
</div><?php }
}
