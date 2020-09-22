<?php /* Smarty version Smarty-3.1.13, created on 2019-07-02 22:33:40
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda_busca_avancada.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18835cda3a31900582-92507944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebc79b02e01068c11da44cb2bb070881da234857' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda_busca_avancada.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18835cda3a31900582-92507944',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cda3a31bb4261_77294608',
  'variables' => 
  array (
    'PATH' => 0,
    'Livros' => 0,
    'Liv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cda3a31bb4261_77294608')) {function content_5cda3a31bb4261_77294608($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
<div class="step">
	<h1>Pesquisa Avançada</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/PesquisaAvancadaLivros">
		
		<h3>Selecione as agendas que farão parte da pesquisa</h3>
		
        <?php  $_smarty_tpl->tpl_vars['Liv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Liv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Livros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Liv']->key => $_smarty_tpl->tpl_vars['Liv']->value){
$_smarty_tpl->tpl_vars['Liv']->_loop = true;
?>
			<div class="col-md-12">
				<label><input type="checkbox" name="option[<?php echo $_smarty_tpl->tpl_vars['Liv']->value['LivroId'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['Liv']->value['LivroId'];?>
"> <?php echo $_smarty_tpl->tpl_vars['Liv']->value['Descricao'];?>
</label>
			</div>
		<?php } ?>
		
		<br>
        <button type="submit" class="btn btn-primary">Próximo</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>