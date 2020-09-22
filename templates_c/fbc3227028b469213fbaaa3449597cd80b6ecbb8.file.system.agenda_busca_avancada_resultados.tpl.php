<?php /* Smarty version Smarty-3.1.13, created on 2019-08-19 14:50:31
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda_busca_avancada_resultados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212255d5ae167e123e9-83157987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbc3227028b469213fbaaa3449597cd80b6ecbb8' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda_busca_avancada_resultados.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212255d5ae167e123e9-83157987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resultados' => 0,
    'atual' => 0,
    'PATH' => 0,
    'res' => 0,
    'quantidade' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d5ae168498731_53644645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5ae168498731_53644645')) {function content_5d5ae168498731_53644645($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
<div class="step">
	<h1>Pesquisa Avançada - Resultados</h1>

	<?php $_smarty_tpl->tpl_vars['atual'] = new Smarty_variable(0, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value){
$_smarty_tpl->tpl_vars['res']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['atual']->value==0){?>
		<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/agendamultipla">
		<div class="bs-callout bs-callout-primary">
			<div class="row">
				<div class="col-md-9">
					<h4>Disponíveis:</h4>
		<?php }?>
					<p><b><?php echo $_smarty_tpl->tpl_vars['res']->value['Descricao'];?>
:</b> <?php echo $_smarty_tpl->tpl_vars['res']->value['DiaSemana'];?>
, <?php echo $_smarty_tpl->tpl_vars['res']->value['Dia'];?>
 de <?php echo $_smarty_tpl->tpl_vars['res']->value['MesAno'];?>
 de <?php echo $_smarty_tpl->tpl_vars['res']->value['Ano'];?>
 às <?php echo $_smarty_tpl->tpl_vars['res']->value['Hora'];?>
</p>
					<div class="helper-display-none">
						<input type="text" name="id[<?php echo $_smarty_tpl->tpl_vars['atual']->value;?>
]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['Id'];?>
">
						<input type="text" name="procedimentoid[<?php echo $_smarty_tpl->tpl_vars['atual']->value;?>
]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['ProcId'];?>
">
						<input type="text" name="dia[<?php echo $_smarty_tpl->tpl_vars['atual']->value;?>
]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['Dia'];?>
">
						<input type="text" name="mes[<?php echo $_smarty_tpl->tpl_vars['atual']->value;?>
]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['Mes'];?>
">
						<input type="text" name="ano[<?php echo $_smarty_tpl->tpl_vars['atual']->value;?>
]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['Ano'];?>
">
						<input type="text" name="livroid[<?php echo $_smarty_tpl->tpl_vars['atual']->value;?>
]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['LivroId'];?>
">
					</div>
		<?php if ($_smarty_tpl->tpl_vars['atual']->value==$_smarty_tpl->tpl_vars['quantidade']->value-1){?>
				</div>
				<div class="col-md-3" style="line-height:70px;">
					<center><button type="submit" class="btn btn-primary">Agendar Paciente</button></center>
				</div>
			</div>
		</div>
		</form>
		<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['atual']->value==$_smarty_tpl->tpl_vars['quantidade']->value-1){?><?php $_smarty_tpl->tpl_vars['atual'] = new Smarty_variable(0, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['atual'] = new Smarty_variable($_smarty_tpl->tpl_vars['atual']->value+1, null, 0);?><?php }?>
	<?php } ?>
			
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<link rel="stylesheet" href="/styles/css/callouts.css">

<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>