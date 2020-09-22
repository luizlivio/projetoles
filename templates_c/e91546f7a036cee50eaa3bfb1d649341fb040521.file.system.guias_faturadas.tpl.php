<?php /* Smarty version Smarty-3.1.13, created on 2019-06-27 14:38:32
         compiled from "engine\view\InfoPanel\pages\Guias\system.guias_faturadas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315285ccf04f29f1a60-75444795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e91546f7a036cee50eaa3bfb1d649341fb040521' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Guias\\system.guias_faturadas.tpl',
      1 => 1561603801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315285ccf04f29f1a60-75444795',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ccf04f2aaaa93_06816009',
  'variables' => 
  array (
    'enviado' => 0,
    'diainicial' => 0,
    'mesinicial' => 0,
    'anoinicial' => 0,
    'diafinal' => 0,
    'mesfinal' => 0,
    'anofinal' => 0,
    'livroid' => 0,
    'ErroHoraInicial' => 0,
    'ErroHoraFinal' => 0,
    'ErronumeroCarteira' => 0,
    'ErroProfissional' => 0,
    'HoraInicial' => 0,
    'HoraFinal' => 0,
    'numeroCarteira' => 0,
    'Profissional' => 0,
    'Faturadas' => 0,
    'Guias' => 0,
    'guias' => 0,
    'quantidade' => 0,
    'Dados2' => 0,
    'dado2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ccf04f2aaaa93_06816009')) {function content_5ccf04f2aaaa93_06816009($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['enviado']->value==1){?><div class="alert alert-success" role="alert">Guia Incluída com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==2){?><div class="alert alert-success" role="alert">Guia Excluída com sucesso!</div><?php }?>

<div class="step">
	<ul class="nav nav-tabs">
		<li role="presentation"><a href="/info/guias/guias_filtradas/<?php echo $_smarty_tpl->tpl_vars['diainicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mesinicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['anoinicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['diafinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mesfinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['anofinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
">Guias Pendentes</a></li>
		<li role="presentation" class="active"><a href="/info/guias_faturadas">Guias Faturadas</a></li>
	</ul>
	
	<?php if (((count($_smarty_tpl->tpl_vars['ErroHoraInicial']->value))==0&&(count($_smarty_tpl->tpl_vars['ErroHoraFinal']->value))==0&&(count($_smarty_tpl->tpl_vars['ErronumeroCarteira']->value))==0&&(count($_smarty_tpl->tpl_vars['ErroProfissional']->value))==0)){?>
	<br>
		<a href="/info/guias/geraXML/<?php echo $_smarty_tpl->tpl_vars['diainicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mesinicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['anoinicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['diafinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mesfinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['anofinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
" class="btn btn-sm btn-primary">Gerar XML</a> <a href="/info/guias/geraRelatorioFaturamento/<?php echo $_smarty_tpl->tpl_vars['diainicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mesinicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['anoinicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['diafinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mesfinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['anofinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
" class="btn btn-sm btn-primary">Gerar Listagem</a> <a href="/info/guias/alteravalor/<?php echo $_smarty_tpl->tpl_vars['diainicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mesinicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['anoinicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['diafinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mesfinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['anofinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
" class="btn btn-sm btn-primary">Alterar Valor</a>
	<br>
	<?php }else{ ?>
		<br>
		<?php  $_smarty_tpl->tpl_vars['HoraInicial'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['HoraInicial']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ErroHoraInicial']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['HoraInicial']->key => $_smarty_tpl->tpl_vars['HoraInicial']->value){
$_smarty_tpl->tpl_vars['HoraInicial']->_loop = true;
?>
			<div class="alert alert-danger" role="alert">Erro na Hora Inicial de Execução do(a) Procedimento do Paciente <?php echo $_smarty_tpl->tpl_vars['HoraInicial']->value['NomePaciente'];?>
</div>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['HoraFinal'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['HoraFinal']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ErroHoraFinal']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['HoraFinal']->key => $_smarty_tpl->tpl_vars['HoraFinal']->value){
$_smarty_tpl->tpl_vars['HoraFinal']->_loop = true;
?>
			<div class="alert alert-danger" role="alert">Erro na Hora Final de Execução do(a) Procedimento do Paciente <?php echo $_smarty_tpl->tpl_vars['HoraFinal']->value['NomePaciente'];?>
</div>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['numeroCarteira'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['numeroCarteira']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ErronumeroCarteira']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['numeroCarteira']->key => $_smarty_tpl->tpl_vars['numeroCarteira']->value){
$_smarty_tpl->tpl_vars['numeroCarteira']->_loop = true;
?>
			<div class="alert alert-danger" role="alert">Erro na Carteirinha do(a) Paciente <?php echo $_smarty_tpl->tpl_vars['numeroCarteira']->value['NomePaciente'];?>
</div>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['Profissional'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Profissional']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ErroProfissional']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Profissional']->key => $_smarty_tpl->tpl_vars['Profissional']->value){
$_smarty_tpl->tpl_vars['Profissional']->_loop = true;
?>
			<div class="alert alert-danger" role="alert">Erro nos dados do Profissional Executante do(a) Paciente <?php echo $_smarty_tpl->tpl_vars['Profissional']->value['NomePaciente'];?>
</div>
		<?php } ?>
		<br>
	<?php }?>
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>PacienteId</th>
            <th>Nome</th>
			<th>Status</th>
			<th>Acessar</th>
			<th>Nova Guia</th>
			<th>Imprimir</th>
			<th>Excluir</th>
        </tr>
		</thead>
		<?php $_smarty_tpl->tpl_vars['guias'] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['Guias'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Guias']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Faturadas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Guias']->key => $_smarty_tpl->tpl_vars['Guias']->value){
$_smarty_tpl->tpl_vars['Guias']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Guias']->value['PacienteId'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Guias']->value['NomePaciente'];?>
</td>
			<td>Pendente</td>
            <td><a href="/info/guias/pendenciaedita/<?php echo $_smarty_tpl->tpl_vars['Guias']->value['GuiaId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
			<td><a href="/info/guias/pendencia/<?php echo $_smarty_tpl->tpl_vars['Guias']->value['PacienteId'];?>
/<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['diainicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mesinicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['anoinicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['diafinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mesfinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['anofinal']->value;?>
" class="btn btn-sm btn-primary">Nova Guia</a></td>
			<td><a href="/info/guias/guiaimprimir/<?php echo $_smarty_tpl->tpl_vars['Guias']->value['GuiaId'];?>
" class="btn btn-sm btn-warning">Imprimir</a></td>
			<td><a href="/info/guias/excluiGuia/<?php echo $_smarty_tpl->tpl_vars['Guias']->value['GuiaId'];?>
" class="btn btn-sm btn-danger">Excluir</a></td>
			<?php $_smarty_tpl->tpl_vars['guias'] = new Smarty_variable($_smarty_tpl->tpl_vars['guias']->value+1, null, 0);?>
        </tr>
		<?php } ?>
	</table>
	<?php echo $_smarty_tpl->tpl_vars['quantidade']->value;?>

		<h3>Guias Faturas: <?php echo $_smarty_tpl->tpl_vars['guias']->value;?>
 | Procedimentos faturados: <?php  $_smarty_tpl->tpl_vars['dado2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dado2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Dados2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dado2']->key => $_smarty_tpl->tpl_vars['dado2']->value){
$_smarty_tpl->tpl_vars['dado2']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['quantidade'] = new Smarty_variable($_smarty_tpl->tpl_vars['quantidade']->value+$_smarty_tpl->tpl_vars['dado2']->value['quantidadeExecutada'], null, 0);?><?php } ?><?php echo $_smarty_tpl->tpl_vars['quantidade']->value;?>
</h3>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>