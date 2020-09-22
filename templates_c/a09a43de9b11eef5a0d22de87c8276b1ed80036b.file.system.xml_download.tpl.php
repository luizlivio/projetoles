<?php /* Smarty version Smarty-3.1.13, created on 2019-06-29 18:23:12
         compiled from "engine\view\InfoPanel\pages\Guias\system.xml_download.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127795cf4d0709ed440-76830817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a09a43de9b11eef5a0d22de87c8276b1ed80036b' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Guias\\system.xml_download.tpl',
      1 => 1561603801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127795cf4d0709ed440-76830817',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cf4d070a6b247_41023199',
  'variables' => 
  array (
    'XML' => 0,
    'XMLok' => 0,
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf4d070a6b247_41023199')) {function content_5cf4d070a6b247_41023199($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
<div class="step">
	<h1>XML Gerado</h1>
	
	<label>Clique no link abaixo para fazer download</label>
	<br>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Arquivo</th>
			<th>Valor</th>
            <th>Download</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['XMLok'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['XMLok']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['XML']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['XMLok']->key => $_smarty_tpl->tpl_vars['XMLok']->value){
$_smarty_tpl->tpl_vars['XMLok']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['XMLok']->value['NomeArquivo'];?>
</td>
			<td>R$ <?php echo number_format($_smarty_tpl->tpl_vars['XMLok']->value['Valor'],2,',','.');?>
</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/guias/FaturamentoXMLGerados/<?php echo $_smarty_tpl->tpl_vars['XMLok']->value['NomeArquivo'];?>
" class="btn btn-sm btn-primary">Download</a></td>
        </tr>
		<?php } ?>
    </table>
</div>
		
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>