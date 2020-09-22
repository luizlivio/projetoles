<?php /* Smarty version Smarty-3.1.13, created on 2019-08-02 00:38:29
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda_reagenda_sessao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:259935cd0052a7ae634-33795442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50e236cce43d6547646b63eb160e5d27b1fdfbd1' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda_reagenda_sessao.tpl',
      1 => 1564717105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259935cd0052a7ae634-33795442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd0052a839cf9_55414600',
  'variables' => 
  array (
    'PATH' => 0,
    'Horarios' => 0,
    'contador' => 0,
    'Hor' => 0,
    'Datas' => 0,
    'Dat' => 0,
    'Horas' => 0,
    'Hora' => 0,
    'livroid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd0052a839cf9_55414600')) {function content_5cd0052a839cf9_55414600($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="step">	<h1>Reagendamento de Sessões</h1>    	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/reagendaSessoesArrumadas">		<?php $_smarty_tpl->tpl_vars['contador'] = new Smarty_variable(0, null, 0);?>				<?php  $_smarty_tpl->tpl_vars['Hor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Hor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Horarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Hor']->key => $_smarty_tpl->tpl_vars['Hor']->value){
$_smarty_tpl->tpl_vars['Hor']->_loop = true;
?>		<?php $_smarty_tpl->tpl_vars['contador'] = new Smarty_variable($_smarty_tpl->tpl_vars['contador']->value+1, null, 0);?>				<div>			<div class='row'>				<div class='col-md-1'>					<input type="number" name="sessao[<?php echo $_smarty_tpl->tpl_vars['contador']->value;?>
]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Hor']->value['SessaoId'];?>
">				</div>				<div class='col-md-3'>					<label>Sessão</label>				</div>				<div class='col-md-4 form-group'>					<select name='DataSessao[<?php echo $_smarty_tpl->tpl_vars['contador']->value;?>
]' id='DataSessao<?php echo $_smarty_tpl->tpl_vars['contador']->value;?>
' class='form-control' data-error='Informe a Data.' required>						<option value='0'><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Hor']->value['Data'],"%d/%m/%Y");?>
</option>						<option value='' disabled>-------------------</option>						<?php  $_smarty_tpl->tpl_vars['Dat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Dat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Dat']->key => $_smarty_tpl->tpl_vars['Dat']->value){
$_smarty_tpl->tpl_vars['Dat']->_loop = true;
?>							<option value='<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Dat']->value['Data'],"%m/%d/%Y");?>
'><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Dat']->value['Data'],"%d/%m/%Y");?>
 (<?php if ($_smarty_tpl->tpl_vars['Dat']->value['DiaDaSemana']==7){?>Sabado<?php }elseif($_smarty_tpl->tpl_vars['Dat']->value['DiaDaSemana']==1){?>Domingo<?php }elseif($_smarty_tpl->tpl_vars['Dat']->value['DiaDaSemana']==2){?>Segunda-feira<?php }elseif($_smarty_tpl->tpl_vars['Dat']->value['DiaDaSemana']==3){?>Terça-feira<?php }elseif($_smarty_tpl->tpl_vars['Dat']->value['DiaDaSemana']==4){?>Quarta-feira<?php }elseif($_smarty_tpl->tpl_vars['Dat']->value['DiaDaSemana']==5){?>Quinta-feira<?php }elseif($_smarty_tpl->tpl_vars['Dat']->value['DiaDaSemana']==6){?>Sexta-feira<?php }?>)</option>						<?php } ?>					</select>					<div class='help-block with-errors'></div>				</div>				<div class='col-md-4 form-group'>					<select name='HoraSessao[<?php echo $_smarty_tpl->tpl_vars['contador']->value;?>
]' id='HoraSessao<?php echo $_smarty_tpl->tpl_vars['contador']->value;?>
' class='form-control' data-error='Informe o Horário.' required>						<option value='0'><?php echo $_smarty_tpl->tpl_vars['Hor']->value['Hora'];?>
</option>						<option value='' disabled>-------------------</option>						<?php  $_smarty_tpl->tpl_vars['Hora'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Hora']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Horas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Hora']->key => $_smarty_tpl->tpl_vars['Hora']->value){
$_smarty_tpl->tpl_vars['Hora']->_loop = true;
?>							<?php if ($_smarty_tpl->tpl_vars['Hora']->value['Data']==$_smarty_tpl->tpl_vars['Hor']->value['Data']){?>								<option value='<?php echo $_smarty_tpl->tpl_vars['Hora']->value['Hora'];?>
'><?php echo $_smarty_tpl->tpl_vars['Hora']->value['Hora'];?>
</option>							<?php }?>						<?php } ?>					</select>					<div class='help-block with-errors'></div>				</div>			</div>		</div>				<div class="helper-display-none">		<input type="text" name="horreqid[<?php echo $_smarty_tpl->tpl_vars['contador']->value;?>
]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
">		<input type="text" name="livro[<?php echo $_smarty_tpl->tpl_vars['contador']->value;?>
]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
">		</div>						<script>		$(function() {			$('#DataSessao<?php echo $_smarty_tpl->tpl_vars['contador']->value;?>
').change(function(){				var contador = <?php echo $_smarty_tpl->tpl_vars['contador']->value;?>
;				func2($('#DataSessao<?php echo $_smarty_tpl->tpl_vars['contador']->value;?>
').val(), contador);			});		});		</script>		<script>			function func2(DataPesquisa, contador) {					$.getJSON('/info/agenda/getHorasSessoes', {LivroId : "<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
", Data : DataPesquisa}, function(data) {										$('#HoraSessao'+contador).html(" ");					$('#HoraSessao'+contador).append('<option disabled selected>Selecionar</option>');					$.each(data, function(i, item) {													$('#HoraSessao'+contador).append('<option value="'+item.Hora+'">'+item.Hora+'</option>');					});					});			}			</script>					<?php } ?>	        <button type="submit" class="btn btn-default">Salvar</button>		    </form>		</div><?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>