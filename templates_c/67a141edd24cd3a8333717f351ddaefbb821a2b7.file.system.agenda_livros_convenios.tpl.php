<?php /* Smarty version Smarty-3.1.13, created on 2019-07-11 12:05:01
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda_livros_convenios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87145cf951ccf19c31-00215463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67a141edd24cd3a8333717f351ddaefbb821a2b7' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda_livros_convenios.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87145cf951ccf19c31-00215463',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cf951cd0c4524_78347146',
  'variables' => 
  array (
    'Livros' => 0,
    'livro' => 0,
    'PATH' => 0,
    'livroid' => 0,
    'Convenios' => 0,
    'Conv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf951cd0c4524_78347146')) {function content_5cf951cd0c4524_78347146($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['livro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['livro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Livros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['livro']->key => $_smarty_tpl->tpl_vars['livro']->value){
$_smarty_tpl->tpl_vars['livro']->_loop = true;
?><?php } ?>

<div class="step">
	<h1>Convênios do Livro - <?php echo $_smarty_tpl->tpl_vars['livro']->value['Descricao'];?>
</h1>
	
	<label>Selecione os Convênios aceitos por este livro:</label>
	
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/vinculoLivroConvenio">
	
	<div class="helper-display-none">
		<input type="text" name="livroid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
">
	</div>
		
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars['Conv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Conv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Convenios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Conv']->key => $_smarty_tpl->tpl_vars['Conv']->value){
$_smarty_tpl->tpl_vars['Conv']->_loop = true;
?>
				<div class="col-md-6">
					<input type="checkbox" name="option[<?php echo $_smarty_tpl->tpl_vars['Conv']->value['ConvenioId'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['Conv']->value['ConvenioId'];?>
" <?php if ($_smarty_tpl->tpl_vars['Conv']->value['Id']!=null){?>checked<?php }?>>
					<label><?php echo $_smarty_tpl->tpl_vars['Conv']->value['Descricao'];?>
</label>
				</div>
		<?php } ?>
    </div>
	
	<br>
	
	<button type="submit" class="btn btn-default">Salvar</button>

    </form>		
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>