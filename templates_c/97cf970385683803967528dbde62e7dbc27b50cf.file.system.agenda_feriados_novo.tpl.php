<?php /* Smarty version Smarty-3.1.13, created on 2019-11-10 16:29:08
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda_feriados_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163995dc86504ae6c44-51152014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97cf970385683803967528dbde62e7dbc27b50cf' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda_feriados_novo.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163995dc86504ae6c44-51152014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5dc86504d53032_33802050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc86504d53032_33802050')) {function content_5dc86504d53032_33802050($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
<div class="step">
	<h1>Cadastro de Feriados</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/novoFeriado">
		
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="descricao" class="form-control">
        </div>
		
		<label for="tipo">Tipo</label>
		<select name="tipo" id="tipo" class="form-control">
			<option value="1" selected>Fixo</option>
			<option value="2">Variável</option>
		</select>
		
		<div class="form-group">
			<label>Data</label>
			<input type="text" name="data" class="form-control" id="data">
		</div>
		
		<br>
        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>