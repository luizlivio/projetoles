<?php /* Smarty version Smarty-3.1.13, created on 2020-01-19 23:41:22
         compiled from "engine\view\InfoPanel\pages\SocialMedia\system.socialmedia_alteracoessugestao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:276195e251352aad884-38017414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15547fcbd5622900b886d2b1a9ac8c4b55238e31' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\SocialMedia\\system.socialmedia_alteracoessugestao.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '276195e251352aad884-38017414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'sugestaoid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e251352af4170_35880946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e251352af4170_35880946')) {function content_5e251352af4170_35880946($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
<div class="step">
    <h1>Alterações Na Sugestão</h1>
    <br>
	
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/socialmedia/alteracaosugestaoNovo">
	
	<div>
		<label>Conte pra gente o que deseja alterar na arte. Use palavras como "Alterar a Imagem" ou "Alterar o texto". Essa sugestão passará a aparecer nos seus Pedidos</label>
	</div>
	
	<div class="helper-display-none">
		<input type="text" name="sugestaoid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['sugestaoid']->value;?>
">
	</div>
	
	<div class="form-group">
		<textarea name="Observacoes" id="Observacoes" class="form-control"></textarea>
    </div>
	
	<div>
	<button type="submit" class="btn btn-primary">Enviar</button>
	<input type="button" value="Cancelar" onclick="window.history.go(-1)" class="btn btn-default">
	</div>
	
	</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>