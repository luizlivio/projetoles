<?php /* Smarty version Smarty-3.1.13, created on 2019-07-24 15:48:05
         compiled from "engine\view\InfoPanel\pages\FichaClinica\system.fichaclinica.tpl" */ ?>
<?php /*%%SmartyHeaderCode:263175cd009efc2f5c2-21933307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4af2ecf2c36b91363e8a63a5b330b4371b6496a' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\FichaClinica\\system.fichaclinica.tpl',
      1 => 1563994082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263175cd009efc2f5c2-21933307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd009efca2f43_69555373',
  'variables' => 
  array (
    'PATH' => 0,
    'Pacientes' => 0,
    'Paciente' => 0,
    'inf' => 0,
    'contas' => 0,
    'conta' => 0,
    'pagina' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd009efca2f43_69555373')) {function content_5cd009efca2f43_69555373($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="step">	<h1>Ficha Clínica</h1>	<br>	<br>	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/ficha_clinica/PesquisaPaciente">		<div class="row">			<div class="col-lg-12">			<div class="input-group">			  <div id="a"><input type="text" name="pesquisa" class="form-control" placeholder="Procurar por..."></div>			  <span class="input-group-btn">				<button class="btn btn-default" type="submit">Pesquisar</button>			  </span>			</div>		  </div>		</div>	</form>	<table class="table table-hover table-stripped">        <thead>		<tr>            <th>Id</th>            <th>Nome</th>			<th>Data de Nascimento</th>			<th>Anamnese</th>        </tr>		</thead>        <?php  $_smarty_tpl->tpl_vars['Paciente'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Paciente']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Pacientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Paciente']->key => $_smarty_tpl->tpl_vars['Paciente']->value){
$_smarty_tpl->tpl_vars['Paciente']->_loop = true;
?>        <tr>            <td><?php echo $_smarty_tpl->tpl_vars['Paciente']->value['PacienteId'];?>
</td>            <td><?php echo $_smarty_tpl->tpl_vars['Paciente']->value['NomePaciente'];?>
</td>			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Paciente']->value['DataNasc'],"%d/%m/%Y");?>
</td>			<td><?php if ($_smarty_tpl->tpl_vars['inf']->value->login=="FISIOCARDIO"||$_smarty_tpl->tpl_vars['inf']->value->login=="FRFISIO"){?><a href="/info/filaatendimento/atender/<?php echo $_smarty_tpl->tpl_vars['Paciente']->value['PacienteId'];?>
" class="btn btn-sm btn-primary">Acessar</a><?php }elseif($_smarty_tpl->tpl_vars['inf']->value->login=="FUKUNARI"){?><a href="/info/ficha_clinica/anamnese_fukunari/<?php echo $_smarty_tpl->tpl_vars['Paciente']->value['PacienteId'];?>
" class="btn btn-sm btn-primary">Acessar</a><?php }else{ ?><a href="/info/ficha_clinica/<?php if ($_smarty_tpl->tpl_vars['inf']->value->Tipo=="M"){?>anamnese<?php }elseif($_smarty_tpl->tpl_vars['inf']->value->Tipo=="U"){?>paciente_anamneses<?php }?>/<?php echo $_smarty_tpl->tpl_vars['Paciente']->value['PacienteId'];?>
" class="btn btn-sm btn-primary">Acessar</a><?php }?></td>        </tr>        <?php } ?>    </table>		<?php echo count($_smarty_tpl->tpl_vars['Pacientes']->value);?>
 Resultados Apresentados		<?php  $_smarty_tpl->tpl_vars['conta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conta']->key => $_smarty_tpl->tpl_vars['conta']->value){
$_smarty_tpl->tpl_vars['conta']->_loop = true;
?><?php } ?>		<?php if ($_smarty_tpl->tpl_vars['conta']->value['conta']!=''){?>	<p align="center"> 			<center><form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/ficha_clinica/MudaPagina">			<?php if ($_smarty_tpl->tpl_vars['pagina']->value!=1){?><a href="/info/ficha_clinica/<?php echo $_smarty_tpl->tpl_vars['pagina']->value-1;?>
" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-chevron-left"></i></a><?php }?>			1 <input type="text" name="pagina" size="4" value="<?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
"> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['conta']->value['conta'];?>
<?php $_tmp1=ob_get_clean();?><?php echo ceil($_tmp1);?>
			<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['conta']->value['conta'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['pagina']->value!=ceil($_tmp2)){?><a href="/info/ficha_clinica/<?php echo $_smarty_tpl->tpl_vars['pagina']->value+1;?>
" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-chevron-right"></i></a><?php }?>			<div class="helper-display-none">				<button type="submit" class="btn btn-default">Ir</button>			</div>			</form>		</center>	</p>	<?php }?></div><?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>