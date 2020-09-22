<?php /* Smarty version Smarty-3.1.13, created on 2019-06-27 08:10:57
         compiled from "engine\view\InfoPanel\pages\Guias\system.guias_filtradas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:280715ccf04f03f2582-92289112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeba5b18810459ba5fac1eff7dace09d63dbd1a8' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Guias\\system.guias_filtradas.tpl',
      1 => 1561603801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280715ccf04f03f2582-92289112',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ccf04f0440cf7_63647586',
  'variables' => 
  array (
    'diainicial' => 0,
    'mesinicial' => 0,
    'anoinicial' => 0,
    'diafinal' => 0,
    'mesfinal' => 0,
    'anofinal' => 0,
    'livroid' => 0,
    'GuiasPendentes' => 0,
    'Guias' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ccf04f0440cf7_63647586')) {function content_5ccf04f0440cf7_63647586($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<ul class="nav nav-tabs">
		<li role="presentation" class="active"><a href="/info/guias">Guias Pendentes</a></li>
		<li role="presentation"><a href="/info/guias/guias_faturadas/<?php echo $_smarty_tpl->tpl_vars['diainicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mesinicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['anoinicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['diafinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mesfinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['anofinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
">Guias Faturadas</a></li>
	</ul>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>PacienteId</th>
            <th>Nome</th>
			<th>Status</th>
			<th>Acessar</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Guias'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Guias']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GuiasPendentes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Guias']->key => $_smarty_tpl->tpl_vars['Guias']->value){
$_smarty_tpl->tpl_vars['Guias']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Guias']->value['PacienteId'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Guias']->value['NomePaciente'];?>
</td>
			<td>Pendente</td>
            <td><a href="/info/guias/pendencia/<?php echo $_smarty_tpl->tpl_vars['Guias']->value['PacienteId'];?>
/<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['diainicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mesinicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['anoinicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['diafinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mesfinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['anofinal']->value;?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<?php } ?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>