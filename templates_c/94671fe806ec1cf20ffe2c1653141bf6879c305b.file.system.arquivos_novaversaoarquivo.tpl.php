<?php /* Smarty version Smarty-3.1.13, created on 2019-11-08 23:10:37
         compiled from "engine\view\InfoPanel\pages\Arquivos\system.arquivos_novaversaoarquivo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213585dc6201d4967a0-41901918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94671fe806ec1cf20ffe2c1653141bf6879c305b' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Arquivos\\system.arquivos_novaversaoarquivo.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213585dc6201d4967a0-41901918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'diretorio' => 0,
    'arquivoid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5dc6201d735850_78699239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc6201d735850_78699239')) {function content_5dc6201d735850_78699239($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
    <h1>Upload de Nova Versão</h1>
    <br />
	
		<form action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/arquivos/IncluiNovaVersao" method="post" enctype="multipart/form-data">
			
			<div class="helper-display-none">
				<input type="text" name="diretorio" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['diretorio']->value;?>
">
				<input type="text" name="arquivoid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['arquivoid']->value;?>
">
			</div>
			
			<label for="arquivo">Arquivo:</label> 
			
			<input type="file" name="arquivo" id="arquivo" class="form-control"/>
			
			<div >
				<label>Controle da versão</label>
				<textarea name="descricao" class="form-control"></textarea>
			</div>
			
			<br />
			<br />
			
			<input type="submit" value="Enviar" />
			
		</form>
	<div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/panel.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>