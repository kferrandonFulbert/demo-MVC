<?php
/* Smarty version 4.1.0, created on 2022-05-11 14:04:23
  from 'D:\laragon\www\demo-mvc\Views\templates\Accueil\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627bc2678ac4b6_44285207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e42fcb781e3de662d01e49218cb5e9004b20dae5' => 
    array (
      0 => 'D:\\laragon\\www\\demo-mvc\\Views\\templates\\Accueil\\list.tpl',
      1 => 1651675837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627bc2678ac4b6_44285207 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Presentation du MVC</h2>
<p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
<p>
<div>
    Liste des dossiers de notre MVC:
    <ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vue']->value['mvc'], 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['m']->value;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    </ul>
</div>
<?php }
}
