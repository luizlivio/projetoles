<?php /* Smarty version Smarty-3.1.13, created on 2019-07-03 02:34:14
         compiled from "engine\view\InfoPanel\pages\Fila_Atendimento\system.avaliacao_edita_uro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:265525d1c36b64068b5-03734961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cd6898af667dea82f006d414edff8c50eb31b9d' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Fila_Atendimento\\system.avaliacao_edita_uro.tpl',
      1 => 1562131837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265525d1c36b64068b5-03734961',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d1c36b649aa36_16326889',
  'variables' => 
  array (
    'Avaliacao' => 0,
    'PATH' => 0,
    'pacienteid' => 0,
    'horreqid' => 0,
    'avaliacaoid' => 0,
    'Profissionais' => 0,
    'Fisioterapeuta' => 0,
    'ava' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d1c36b649aa36_16326889')) {function content_5d1c36b649aa36_16326889($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 $_from = $_smarty_tpl->tpl_vars['Avaliacao']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ava']->key => $_smarty_tpl->tpl_vars['ava']->value){
$_smarty_tpl->tpl_vars['ava']->_loop = true;
?><?php } ?>
<div class="step">
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/filaatendimento/editaAvaliacaoUro" Onsubmit="btn.disabled=true">
">
">
">
		<div class="form-group">
            <label>Área de Atendimento</label>
            <select name="area" id="area" class="form-control">
				<option disabled selected>Selecionar</option>
 $_from = $_smarty_tpl->tpl_vars['Profissionais']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Fisioterapeuta']->key => $_smarty_tpl->tpl_vars['Fisioterapeuta']->value){
$_smarty_tpl->tpl_vars['Fisioterapeuta']->_loop = true;
?>
" <?php if ($_smarty_tpl->tpl_vars['Fisioterapeuta']->value['Nome']==$_smarty_tpl->tpl_vars['ava']->value['Profissional']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Fisioterapeuta']->value['Nome'];?>
</option>

">
">
">
</textarea>

<?php }} ?>