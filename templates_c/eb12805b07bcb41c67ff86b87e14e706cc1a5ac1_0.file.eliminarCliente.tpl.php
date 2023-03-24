<?php
/* Smarty version 3.1.39, created on 2023-03-24 14:10:51
  from 'C:\xampp\htdocs\ferreteria\templates\modals\eliminarCliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_641da15b8d48a1_14912260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb12805b07bcb41c67ff86b87e14e706cc1a5ac1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ferreteria\\templates\\modals\\eliminarCliente.tpl',
      1 => 1679662391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641da15b8d48a1_14912260 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="eliminarClienteModal" tabindex="-1" aria-labelledby="eliminar-Cliente" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger">
        <h1 class="modal-title fs-5 text-white" >Eliminar Cliente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
          <p class=" text-danger text-center fs-1 text-bolder"> X </p>
          <p class=" text-center">El Cliente (placeholder) con el CUIL (placeholder) será eliminado</p>
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
