<?php
/* Smarty version 4.1.0, created on 2022-05-24 12:40:31
  from 'D:\laragon\www\demo-mvc\Views\templates\categorie\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628cd23fc95e94_26680709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f3b72d21facb6b7140714bcc4de4dd282ca40f4' => 
    array (
      0 => 'D:\\laragon\\www\\demo-mvc\\Views\\templates\\categorie\\list.tpl',
      1 => 1653395308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628cd23fc95e94_26680709 (Smarty_Internal_Template $_smarty_tpl) {
?><h2><a href="index.php?page=categorie&action=add">Ajouter</a></h2>
<p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
<p>    
<div>
    <table><thead><tr><td>Libelle</td><td>Action</td></tr></thead>
        <tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vue']->value['categories'], 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
    <tr><td><?php echo $_smarty_tpl->tpl_vars['cat']->value['libelle'];?>
<td>
        <td><a href="index.php?page=categorie&action=update&id=<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
">u</a>
            | <a href="index.php?page=categorie&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
">-</a>
        </td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>
</div>
<?php }
}
