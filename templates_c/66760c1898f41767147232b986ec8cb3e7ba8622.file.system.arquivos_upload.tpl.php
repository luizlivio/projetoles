<?php /* Smarty version Smarty-3.1.13, created on 2019-08-21 00:13:52
         compiled from "engine\view\InfoPanel\pages\Arquivos\system.arquivos_upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108035d5cb6f0de4395-37029567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66760c1898f41767147232b986ec8cb3e7ba8622' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Arquivos\\system.arquivos_upload.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108035d5cb6f0de4395-37029567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'diretorio' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d5cb6f1149503_05652311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5cb6f1149503_05652311')) {function content_5d5cb6f1149503_05652311($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
    <h1>Upload de Arquivos</h1>
    <br />
	
		<form action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/arquivos/IncluiArquivos" method="post" enctype="multipart/form-data">
			
			<div class="helper-display-none">
				<input type="text" name="diretorio" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['diretorio']->value;?>
">
			</div>
			
			<div >
				<label>Descrição do Arquivo</label>
				<input type="text" name="nome" class="form-control">
			</div>
			
			<label for="arquivo">Arquivo:</label> 
			
			<input type="file" name="arquivo" id="arquivo" class="form-control"/>
			
			<br />
			<br />
			
			<input type="submit" value="Enviar" />
			
		</form>
	<div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/panel.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>