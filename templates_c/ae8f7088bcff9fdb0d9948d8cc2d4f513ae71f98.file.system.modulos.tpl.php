<?php /* Smarty version Smarty-3.1.13, created on 2019-07-03 00:18:54
         compiled from "engine\view\InfoPanel\pages\Modulos\system.modulos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:255225cde1e7c40ce64-02664549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae8f7088bcff9fdb0d9948d8cc2d4f513ae71f98' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Modulos\\system.modulos.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255225cde1e7c40ce64-02664549',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cde1e7c470698_25626435',
  'variables' => 
  array (
    'countModulos' => 0,
    'Modulos' => 0,
    'Modulo' => 0,
    'countModulo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cde1e7c470698_25626435')) {function content_5cde1e7c470698_25626435($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Módulos da Intranet (Controle de Acesso)</h1>
	<a href="/info/modulos/novomodulo" class="btn btn-sm btn-primary">Novo Módulo</a>
	<?php  $_smarty_tpl->tpl_vars['countModulo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['countModulo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countModulos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['countModulo']->key => $_smarty_tpl->tpl_vars['countModulo']->value){
$_smarty_tpl->tpl_vars['countModulo']->_loop = true;
?><?php } ?>
	
    <table class="table table-hover table-stripped">
        <thead>
		<tr>
            <th>Nome do Módulo</th>
            <th>Link</th>
			<th>Ordens</th>
			<th>Acessar</th>
			<th>Excluir</th>
        </tr>
		</thead>
        <?php  $_smarty_tpl->tpl_vars['Modulo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Modulo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Modulos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Modulo']->key => $_smarty_tpl->tpl_vars['Modulo']->value){
$_smarty_tpl->tpl_vars['Modulo']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Modulo']->value['MODULO'];?>
</td>
            <td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Modulo']->value['LINK']);?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['Modulo']->value['Prioridade']!=$_smarty_tpl->tpl_vars['countModulo']->value['conta']){?><a href="/info/modulos/descemodulo/<?php echo $_smarty_tpl->tpl_vars['Modulo']->value['ID'];?>
" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-chevron-down"></i></a><?php }else{ ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['Modulo']->value['Prioridade']!=1){?><a href="/info/modulos/sobemodulo/<?php echo $_smarty_tpl->tpl_vars['Modulo']->value['ID'];?>
" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-chevron-up"></i></a><?php }?></td>
			<td><a href="/info/modulos/abremodulo/<?php echo $_smarty_tpl->tpl_vars['Modulo']->value['ID'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
			<td><a href="/info/modulos/excluimodulo/<?php echo $_smarty_tpl->tpl_vars['Modulo']->value['ID'];?>
" class="btn btn-sm btn-danger">Excluir</a></td>
        </tr>
        <?php } ?>
    </table>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>