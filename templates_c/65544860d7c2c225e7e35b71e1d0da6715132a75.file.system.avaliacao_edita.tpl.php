<?php /* Smarty version Smarty-3.1.13, created on 2019-09-09 09:27:14
         compiled from "engine\view\InfoPanel\pages\Fila_Atendimento\system.avaliacao_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106385cd01446079922-75934425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65544860d7c2c225e7e35b71e1d0da6715132a75' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Fila_Atendimento\\system.avaliacao_edita.tpl',
      1 => 1567827899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106385cd01446079922-75934425',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd014462a2183_28202028',
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
<?php if ($_valid && !is_callable('content_5cd014462a2183_28202028')) {function content_5cd014462a2183_28202028($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 $_from = $_smarty_tpl->tpl_vars['Avaliacao']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ava']->key => $_smarty_tpl->tpl_vars['ava']->value){
$_smarty_tpl->tpl_vars['ava']->_loop = true;
?><?php } ?>
<div class="step">
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/filaatendimento/editaAvaliacao" Onsubmit="btn.disabled=true">
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
		<div class="form-group">
			</div>
			<div class="form-group">
			<div id="place"></div>
			<a onclick='func()'>Adicionar outra Região</a>
				<label>Escala de Dor <span id="demo"></span></label>
					<input type="range" min="0" max="10" value="<?php echo $_smarty_tpl->tpl_vars['ava']->value['Dor'];?>
" class="slider" id="myRange">
				</div>
			
			<div class="form-group helper-display-none">
				<input type="text" name="tipo" id="tipo" class="form-control" value="0">
			</div>
		</div>
">
">
">
</textarea>

<?php }} ?>