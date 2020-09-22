<?php /* Smarty version Smarty-3.1.13, created on 2019-06-28 22:15:04
         compiled from "engine\view\InfoPanel\pages\Relatorio\system.relatorio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:314605cd96f536682d7-42711743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99e80f39b568ea7510d8ad74bf2c68e982d0094e' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Relatorio\\system.relatorio.tpl',
      1 => 1561603811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314605cd96f536682d7-42711743',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd96f53926f75_83703576',
  'variables' => 
  array (
    'PATH' => 0,
    'Livros' => 0,
    'Liv' => 0,
    'livroid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd96f53926f75_83703576')) {function content_5cd96f53926f75_83703576($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Novo Filtro</h1>
</div>
	


<div class="step">
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/novoFiltro1">
	
	<h3>Período</h3>
	<div class="form-group">
		<label>Data Inicial</label>
		<input type="text" id="data" name="datainicial" class="form-control">
	</div>
	
	<div class="form-group">
		<label>Data Final</label>
		<input type="text" id="data2" name="datafinal" class="form-control">
	</div>
	
	<div class="form-group">
		<label>Agenda</label>
		<select name="livroid" class="form-control">
			<?php  $_smarty_tpl->tpl_vars['Liv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Liv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Livros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Liv']->key => $_smarty_tpl->tpl_vars['Liv']->value){
$_smarty_tpl->tpl_vars['Liv']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['Liv']->value['LivroId'];?>
" <?php if ($_smarty_tpl->tpl_vars['livroid']->value==$_smarty_tpl->tpl_vars['Liv']->value['LivroId']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Liv']->value['Descricao'];?>
</option>
			<?php } ?>
		</select>
	</div>
		
		<button type="submit" class="btn btn-default">Filtrar</button>
    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>