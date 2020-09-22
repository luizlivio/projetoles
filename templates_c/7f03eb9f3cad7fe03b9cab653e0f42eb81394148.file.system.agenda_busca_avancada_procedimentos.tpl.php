<?php /* Smarty version Smarty-3.1.13, created on 2019-08-16 14:01:48
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda_busca_avancada_procedimentos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30645cda3a52b66393-56896664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f03eb9f3cad7fe03b9cab653e0f42eb81394148' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda_busca_avancada_procedimentos.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30645cda3a52b66393-56896664',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cda3a52c52906_36109202',
  'variables' => 
  array (
    'PATH' => 0,
    'livros' => 0,
    'Procedimentos' => 0,
    'Proc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cda3a52c52906_36109202')) {function content_5cda3a52c52906_36109202($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
<div class="step">
	<h1>Pesquisa Avançada</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/PesquisaAvancadaProcedimentos">
		
		<div class="helper-display-none">
            <input type="text" name="quantidade" id="quantidade" class="form-control" value="2">
			<input type="text" name="livros" id="livros" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['livros']->value;?>
">
        </div>
		
		<h3>Selecione os procedimentos a serem pesquisados</h3>
		
		<div class="row">
			<div class="col-md-3">
				<label>1º Procedimento</label>
			</div>
			<div class="col-md-9">
				<select name="procedimento[1]" id="procedimento[1]" class="form-control">
					<option >Selecionar</option>
				<?php  $_smarty_tpl->tpl_vars['Proc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Proc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Procedimentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Proc']->key => $_smarty_tpl->tpl_vars['Proc']->value){
$_smarty_tpl->tpl_vars['Proc']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['Proc']->value['ProcedimentoId'];?>
"><?php echo $_smarty_tpl->tpl_vars['Proc']->value['Descricao'];?>
</option>
				<?php } ?>
				</select>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-2">
				<hr/>
			</div>
			<div class="col-md-4">
				<label>Tempo entre os exames</label>
			</div>
			<div class="col-md-1">
				<input type="text" name="intervalo[1]" id="intervalo[1]" class="form-control" value="15">
			</div>
			<div class="col-md-3">
				<select name="intervalounidade[1]" id="intervalounidade[1]" class="form-control">
					<option >Selecionar</option>
					<option value="1" selected>Minutos</option>
					<option value="2">Horas</option>
					<option value="3">Dias</option>
				</select>
			</div>
			<div class="col-md-2">
				<hr/>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-3">
				<label>2º Procedimento</label>
			</div>
			<div class="col-md-9">
				<select name="procedimento[2]" id="procedimento[2]" class="form-control">
					<option >Selecionar</option>
				<?php  $_smarty_tpl->tpl_vars['Proc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Proc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Procedimentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Proc']->key => $_smarty_tpl->tpl_vars['Proc']->value){
$_smarty_tpl->tpl_vars['Proc']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['Proc']->value['ProcedimentoId'];?>
"><?php echo $_smarty_tpl->tpl_vars['Proc']->value['Descricao'];?>
</option>
				<?php } ?>
				</select>
			</div>
		</div>
		
		<div id="outros">
		</div>
		
		<?php if (1==2){?>
		<div class="row">
			<div class="col-md-12">
				<a class="btn btn-sm btn-success" onclick='func()'><i class="glyphicon glyphicon-plus"></i> Outro Procedimento</a>
			</div>
		</div>
		<?php }?>
		
		<br>
        <button type="button" class="btn btn-default" onclick='history.go(-1)'>Voltar</button> <button type="submit" class="btn btn-primary">Próximo</button>		

    </form>		
</div>



<script>
function func(){	
	var numero = parseInt($('#quantidade').val());
	numero = numero +1;
	var intervalo = numero - 1;

	document.getElementById('quantidade').value = numero;
	
	document.getElementById('outros').innerHTML = document.getElementById('outros').innerHTML +"<div class='row'><div class='col-md-2'><hr/></div><div class='col-md-4'><label>Tempo entre os exames</label></div><div class='col-md-1'><input type='text' name='intervalo["+intervalo+"]' id='intervalo["+intervalo+"]' class='form-control' value='60'></div><div class='col-md-3'><select name='intervalounidade["+intervalo+"]' id='intervalounidade["+intervalo+"]' class='form-control'><option >Selecionar</option><option value='1' selected>Minutos</option><option value='2'>Horas</option><option value='3'>Dias</option></select></div><div class='col-md-2'><hr/></div></div><div class='row'><div class='col-md-3'><label>"+numero+"º Procedimento</label></div><div class='col-md-9'><select name='procedimento["+numero+"]' id='procedimento["+numero+"]' class='form-control'><option >Selecionar</option><?php  $_smarty_tpl->tpl_vars['Proc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Proc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Procedimentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Proc']->key => $_smarty_tpl->tpl_vars['Proc']->value){
$_smarty_tpl->tpl_vars['Proc']->_loop = true;
?><option value='<?php echo $_smarty_tpl->tpl_vars['Proc']->value['ProcedimentoId'];?>
'><?php echo $_smarty_tpl->tpl_vars['Proc']->value['Descricao'];?>
</option><?php } ?></select></div></div>"
	
	}
</script>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>