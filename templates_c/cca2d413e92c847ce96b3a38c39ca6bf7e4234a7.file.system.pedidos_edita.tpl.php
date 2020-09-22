<?php /* Smarty version Smarty-3.1.13, created on 2019-07-23 15:50:56
         compiled from "engine\view\InfoPanel\pages\Pedidos\system.pedidos_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168505d369072565e04-32900329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cca2d413e92c847ce96b3a38c39ca6bf7e4234a7' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Pedidos\\system.pedidos_edita.tpl',
      1 => 1563858337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168505d369072565e04-32900329',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d3690725b5e24_37947757',
  'variables' => 
  array (
    'Pedidos' => 0,
    'PATH' => 0,
    'pedidoid' => 0,
    'Ped' => 0,
    'PedidosProc' => 0,
    'i' => 0,
    'Proc' => 0,
    'tuss1' => 0,
    'desc1' => 0,
    'tuss2' => 0,
    'desc2' => 0,
    'tuss3' => 0,
    'desc3' => 0,
    'tuss4' => 0,
    'desc4' => 0,
    'tuss5' => 0,
    'desc5' => 0,
    'tuss6' => 0,
    'desc6' => 0,
    'tuss7' => 0,
    'desc7' => 0,
    'tuss8' => 0,
    'desc8' => 0,
    'tuss9' => 0,
    'desc9' => 0,
    'tuss10' => 0,
    'desc10' => 0,
    'tuss11' => 0,
    'desc11' => 0,
    'tuss12' => 0,
    'desc12' => 0,
    'tuss13' => 0,
    'desc13' => 0,
    'tuss14' => 0,
    'desc14' => 0,
    'tuss15' => 0,
    'desc15' => 0,
    'tuss16' => 0,
    'desc16' => 0,
    'tuss17' => 0,
    'desc17' => 0,
    'tuss18' => 0,
    'desc18' => 0,
    'tuss19' => 0,
    'desc19' => 0,
    'tuss20' => 0,
    'desc20' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d3690725b5e24_37947757')) {function content_5d3690725b5e24_37947757($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['Ped'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Ped']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Pedidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Ped']->key => $_smarty_tpl->tpl_vars['Ped']->value){
$_smarty_tpl->tpl_vars['Ped']->_loop = true;
?><?php } ?>

<div class="step">

	<h1>Edita de Pedido Médico</h1>

	<form method="post" data-toggle="validator" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/pedidos/editaPedido">
		
        <div class="helper-display-none">
            <input type="text" name="pedidoid" id="pedidoId" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pedidoid']->value;?>
">
			<input type="text" name="pacienteid" id="PacienteId" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Ped']->value['PacienteId'];?>
">
			<input type="text" name="contador" id="contador" class="form-control" value="<?php echo count($_smarty_tpl->tpl_vars['PedidosProc']->value)+1;?>
" readonly>
        </div>
	
		<div class="form-group">
			<label>Nome do Paciente</label>
			<input type="text" name="NomePaciente" id="nomepaciente" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Ped']->value['NomePaciente'];?>
" data-error="Informe o nome do Paciente." required>
			<div class="help-block with-errors"></div>
		</div>
		
		<hr />		
	
		<table class="table table-hover table-stripped">
			<thead>
			<tr>
				<th>Cód. TUSS</th>
				<th>Nome Procedimento</th>
				<th></th>
			</tr>
			</thead>
		</table>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['Proc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Proc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PedidosProc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Proc']->key => $_smarty_tpl->tpl_vars['Proc']->value){
$_smarty_tpl->tpl_vars['Proc']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value=="1"){?><?php $_smarty_tpl->tpl_vars['tuss1'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc1'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==2){?><?php $_smarty_tpl->tpl_vars['tuss2'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc2'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==3){?><?php $_smarty_tpl->tpl_vars['tuss3'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc3'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==4){?><?php $_smarty_tpl->tpl_vars['tuss4'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc4'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==5){?><?php $_smarty_tpl->tpl_vars['tuss5'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc5'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==6){?><?php $_smarty_tpl->tpl_vars['tuss6'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc6'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==7){?><?php $_smarty_tpl->tpl_vars['tuss7'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc7'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==8){?><?php $_smarty_tpl->tpl_vars['tuss8'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc8'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==9){?><?php $_smarty_tpl->tpl_vars['tuss9'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc9'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==10){?><?php $_smarty_tpl->tpl_vars['tuss10'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc10'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==11){?><?php $_smarty_tpl->tpl_vars['tuss11'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc11'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==12){?><?php $_smarty_tpl->tpl_vars['tuss12'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc12'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==13){?><?php $_smarty_tpl->tpl_vars['tuss13'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc13'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==14){?><?php $_smarty_tpl->tpl_vars['tuss14'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc14'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==15){?><?php $_smarty_tpl->tpl_vars['tuss15'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc15'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==16){?><?php $_smarty_tpl->tpl_vars['tuss16'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc16'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==17){?><?php $_smarty_tpl->tpl_vars['tuss17'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc17'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==18){?><?php $_smarty_tpl->tpl_vars['tuss18'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc18'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==19){?><?php $_smarty_tpl->tpl_vars['tuss19'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc19'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value==20){?><?php $_smarty_tpl->tpl_vars['tuss20'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'], null, 0);?><?php $_smarty_tpl->tpl_vars['desc20'] = new Smarty_variable($_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'], null, 0);?><?php }?>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
		<?php } ?>
		<div id="procedimento1"><table><tr><td class="col-md-2"><input type="text" name="TUSS[1]" id="TUSS1" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss1']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[1]" id="DESCRICAO1" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc1']->value;?>
"></td><td class="col-md-1"><label><a onclick='func()'><i class="glyphicon glyphicon-close"></i></a></label></td></tr></table></div>
		<div id="procedimento2" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<2){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[2]" id="TUSS2" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss2']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[2]" id="DESCRICAO2" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc2']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(2)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento3" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<3){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[3]" id="TUSS3" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss3']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[3]" id="DESCRICAO3" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc3']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(3)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento4" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<4){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[4]" id="TUSS4" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss4']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[4]" id="DESCRICAO4" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc4']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(4)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento5" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<5){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[5]" id="TUSS5" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss5']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[5]" id="DESCRICAO5" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc5']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(5)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento6" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<6){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[6]" id="TUSS6" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss6']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[6]" id="DESCRICAO6" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc6']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(6)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento7" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<7){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[7]" id="TUSS7" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss7']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[7]" id="DESCRICAO7" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc7']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(7)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento8" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<8){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[8]" id="TUSS8" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss8']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[8]" id="DESCRICAO8" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc8']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(8)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento9" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<9){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[9]" id="TUSS9" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss9']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[9]" id="DESCRICAO9" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc9']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(9)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento10" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<10){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[10]" id="TUSS10" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss10']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[10]" id="DESCRICAO10" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc10']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(10)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento11" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<11){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[11]" id="TUSS11" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss11']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[11]" id="DESCRICAO11" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc11']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(11)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento12" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<12){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[12]" id="TUSS12" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss12']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[12]" id="DESCRICAO12" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc12']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(12)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento13" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<13){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[13]" id="TUSS13" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss13']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[13]" id="DESCRICAO13" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc13']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(13)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento14" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<14){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[14]" id="TUSS14" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss14']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[14]" id="DESCRICAO14" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc14']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(14)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento15" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<15){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[15]" id="TUSS15" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss15']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[15]" id="DESCRICAO15" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc15']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(15)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento16" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<16){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[16]" id="TUSS16" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss16']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[16]" id="DESCRICAO16" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc16']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(16)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento17" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<17){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[17]" id="TUSS17" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss17']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[17]" id="DESCRICAO17" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc17']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(17)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento18" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<18){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[18]" id="TUSS18" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss18']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[18]" id="DESCRICAO18" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc18']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(18)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento19" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<19){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[19]" id="TUSS19" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss19']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[19]" id="DESCRICAO19" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc19']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(19)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento20" <?php if (count($_smarty_tpl->tpl_vars['PedidosProc']->value)<20){?>class="helper-display-none"<?php }?>><table><tr><td class="col-md-2"><input type="text" name="TUSS[20]" id="TUSS20" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tuss20']->value;?>
"></td><td class="col-md-10"><input type="text" name="DESCRICAO[20]" id="DESCRICAO20" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['desc20']->value;?>
"></td><td class="col-md-1"><label><a onclick='func2(20)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		
		<div id="procedimentos"></div>
		
		</br>
		<a onclick='func()' class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Adicionar outro Procedimento</a>
		</br>
		</br>
		<button type="submit" class="btn btn-default">Salvar</button>

    </form>		
</div>


<script language="javascript">
	document.getElementById('nomepaciente').focus();
</script>

<script>
	function func(){
		var numero = parseInt($('#contador').val());
		numero = numero +1;
		document.getElementById("contador").value = numero;
		
		switch(numero) {
		case 2: (procedimento2).style.display = 'block'; break;
		case 3: (procedimento3).style.display = 'block'; break;
		case 4: (procedimento4).style.display = 'block'; break;
		case 5: (procedimento5).style.display = 'block'; break;
		case 6: (procedimento6).style.display = 'block'; break;
		case 7: (procedimento7).style.display = 'block'; break;
		case 8: (procedimento8).style.display = 'block'; break;
		case 9: (procedimento9).style.display = 'block'; break;
		case 10: (procedimento10).style.display = 'block'; break;
		case 11: (procedimento11).style.display = 'block'; break;
		case 12: (procedimento12).style.display = 'block'; break;
		case 13: (procedimento13).style.display = 'block'; break;
		case 14: (procedimento14).style.display = 'block'; break;
		case 15: (procedimento15).style.display = 'block'; break;
		case 16: (procedimento16).style.display = 'block'; break;
		case 17: (procedimento17).style.display = 'block'; break;
		case 18: (procedimento18).style.display = 'block'; break;
		case 19: (procedimento19).style.display = 'block'; break;
		case 20: (procedimento20).style.display = 'block'; break;
		}
	}
</script>

<script>
	function func2(codigo){
		switch(codigo) {
		case 2: (procedimento2).style.display = 'none'; document.getElementById("TUSS2").value = ""; document.getElementById("DESCRICAO2").value = ""; break;
		case 3: (procedimento3).style.display = 'none'; document.getElementById("TUSS3").value = ""; document.getElementById("DESCRICAO3").value = ""; break;
		case 4: (procedimento4).style.display = 'none'; document.getElementById("TUSS4").value = ""; document.getElementById("DESCRICAO4").value = ""; break;
		case 5: (procedimento5).style.display = 'none'; document.getElementById("TUSS5").value = ""; document.getElementById("DESCRICAO5").value = ""; break;
		case 6: (procedimento6).style.display = 'none'; document.getElementById("TUSS6").value = ""; document.getElementById("DESCRICAO6").value = ""; break;
		case 7: (procedimento7).style.display = 'none'; document.getElementById("TUSS7").value = ""; document.getElementById("DESCRICAO7").value = ""; break;
		case 8: (procedimento8).style.display = 'none'; document.getElementById("TUSS8").value = ""; document.getElementById("DESCRICAO8").value = ""; break;
		case 9: (procedimento9).style.display = 'none'; document.getElementById("TUSS9").value = ""; document.getElementById("DESCRICAO9").value = ""; break;
		case 10: (procedimento10).style.display = 'none'; document.getElementById("TUSS10").value = ""; document.getElementById("DESCRICAO10").value = ""; break;
		case 11: (procedimento11).style.display = 'none'; document.getElementById("TUSS11").value = ""; document.getElementById("DESCRICAO11").value = ""; break;
		case 12: (procedimento12).style.display = 'none'; document.getElementById("TUSS12").value = ""; document.getElementById("DESCRICAO12").value = ""; break;
		case 13: (procedimento13).style.display = 'none'; document.getElementById("TUSS13").value = ""; document.getElementById("DESCRICAO13").value = ""; break;
		case 14: (procedimento14).style.display = 'none'; document.getElementById("TUSS14").value = ""; document.getElementById("DESCRICAO14").value = ""; break;
		case 15: (procedimento15).style.display = 'none'; document.getElementById("TUSS15").value = ""; document.getElementById("DESCRICAO15").value = ""; break;
		case 16: (procedimento16).style.display = 'none'; document.getElementById("TUSS16").value = ""; document.getElementById("DESCRICAO16").value = ""; break;
		case 17: (procedimento17).style.display = 'none'; document.getElementById("TUSS17").value = ""; document.getElementById("DESCRICAO17").value = ""; break;
		case 18: (procedimento18).style.display = 'none'; document.getElementById("TUSS18").value = ""; document.getElementById("DESCRICAO18").value = ""; break;
		case 19: (procedimento19).style.display = 'none'; document.getElementById("TUSS19").value = ""; document.getElementById("DESCRICAO19").value = ""; break;
		case 20: (procedimento20).style.display = 'none'; document.getElementById("TUSS20").value = ""; document.getElementById("DESCRICAO20").value = ""; break;
		}
	}
</script>
	
<script>
  $( function() {
    var cache = {};
    $( "#nomepaciente" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#PacienteId" ).val( ui.item.PacienteId);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosPaciente",  {PesquisaPaciente : $('#nomepaciente').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.datanasc + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>



<script>
  $( function() {
    var cache = {};
    $( "#TUSS1" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO1" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS1').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO1" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS1" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO1').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
	
<script>
  $( function() {
    var cache = {};
    $( "#TUSS2" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO2" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS2').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO2" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS2" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO2').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS3" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO3" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS3').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO3" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS3" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO3').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS4" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO4" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS4').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO4" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS4" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO4').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS5" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO5" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS5').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO5" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS5" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO5').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS6" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO6" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS6').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO6" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS6" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO6').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS7" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO7" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS7').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO7" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS7" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO7').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS8" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO8" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS8').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO8" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS8" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO8').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS9" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO9" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS9').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO9" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS9" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO9').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS10" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO10" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS10').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO10" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS10" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO10').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS11" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO11" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS11').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO11" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS11" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO11').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
	
<script>
  $( function() {
    var cache = {};
    $( "#TUSS12" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO12" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS12').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO12" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS12" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO12').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS13" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO13" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS13').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO13" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS13" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO13').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS14" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO14" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS14').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO14" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS14" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO14').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS15" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO15" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS15').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO15" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS15" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO15').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS16" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO16" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS16').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO16" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS16" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO16').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS17" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO17" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS17').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO17" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS17" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO17').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS18" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO18" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS18').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO18" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS18" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO18').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS19" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO19" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS19').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO19" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS19" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO19').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS20" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO20" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS20').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO20" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS20" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO20').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>