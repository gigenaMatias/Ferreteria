<?php
/* Smarty version 3.1.39, created on 2022-12-22 18:35:37
  from 'C:\xampp\htdocs\Ferreteria\templates\modalTalonario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63a495694f9ba6_26480881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8d91f2479e1bbaa7980cf31bad6bdd61f1ee2b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ferreteria\\templates\\modalTalonario.tpl',
      1 => 1671730536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a495694f9ba6_26480881 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="talonarioModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Talonario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">      
        <div class=" col">
            <ul>
                <li class="row text-white bg-primary ">
                    <div class="col-6"> nombre producto </div>
                    <div class="col-2"> cantidad </div>
                    <div class="col"> precio costo </div>
                </li>
                <li class="row text-white bg-primary bg-opacity-50">
                    <div class="col-6"> nombre producto </div>
                    <div class="col-2"> cantidad </div>
                    <div class="col"> precio costo </div>
                </li>
                <li class="row text-white bg-primary ">            
                    <div class="col-6"> nombre producto </div>
                    <div class="col-2"> cantidad </div>
                    <div class="col"> precio costo </div>
                </li>
                <li class="row text-white bg-primary bg-opacity-50">
                    <div class="col-6"> nombre producto </div>
                    <div class="col-2"> cantidad </div>
                    <div class="col"> precio costo </div>
                </li>
            </ul>
        </div>
      </div>
      <div class="modal-footer justify-content-start">
        <form class="row w-100 justify-content-between">
            <button class="btn btn-secondary col-2" type="button" > 
            imprimir </button>
            <div class="col-3"> Total:$ </div>
        </form>
      </div>
    </div>
  </div>
</div><?php }
}
