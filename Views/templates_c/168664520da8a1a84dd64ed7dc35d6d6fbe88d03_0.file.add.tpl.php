<?php
/* Smarty version 4.1.0, created on 2022-05-24 12:56:35
  from 'D:\laragon\www\demo-mvc\Views\templates\categorie\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628cd603389e73_72997436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '168664520da8a1a84dd64ed7dc35d6d6fbe88d03' => 
    array (
      0 => 'D:\\laragon\\www\\demo-mvc\\Views\\templates\\categorie\\add.tpl',
      1 => 1653396990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628cd603389e73_72997436 (Smarty_Internal_Template $_smarty_tpl) {
?><p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
</p>
<form action="index.php?page=categorie&action=insert" method="post">
    <input type="text" name="libelle" placeholder="Votre libelle" id="libelle" maxlength="45" required="required"/> 
    <input type="submit" value="Valider">
</form><?php }
}
