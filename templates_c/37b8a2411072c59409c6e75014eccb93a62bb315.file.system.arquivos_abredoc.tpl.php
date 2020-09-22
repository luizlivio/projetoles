<?php /* Smarty version Smarty-3.1.13, created on 2019-07-18 00:15:35
         compiled from "engine\view\InfoPanel\pages\Arquivos\system.arquivos_abredoc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197145cd3b091c50c90-52931021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37b8a2411072c59409c6e75014eccb93a62bb315' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Arquivos\\system.arquivos_abredoc.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197145cd3b091c50c90-52931021',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd3b091c9bec0_23931426',
  'variables' => 
  array (
    'Atual' => 0,
    'PATH' => 0,
    'at' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd3b091c9bec0_23931426')) {function content_5cd3b091c9bec0_23931426($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/headerEditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="step">    <h1>Doc</h1>    <br />	<?php  $_smarty_tpl->tpl_vars['at'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['at']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Atual']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['at']->key => $_smarty_tpl->tpl_vars['at']->value){
$_smarty_tpl->tpl_vars['at']->_loop = true;
?><?php } ?>	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/arquivos/EditaDoc" >		<div class="helper-display-none">			<input type="text" name="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['at']->value['Id'];?>
">		</div>				<div>			<label>Nome do arquivo</label>			<input type="text" name="nome" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['at']->value['Nome'];?>
">		</div>				<br />				<div>			<textarea name="content" style="height:900px;width:100%;"><?php echo $_smarty_tpl->tpl_vars['at']->value['Descricao'];?>
</textarea>		</div>		<br>		<button type="submit" class="btn btn-default">Salvar</button>	</form></div><?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</body></html><?php }} ?>