<?php /* Smarty version Smarty-3.1.13, created on 2019-07-19 02:22:51
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda_procedimentos_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149715cf95365b11321-58180025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffb7e7201ab541dd2096d3d902c4f4e7ceb31547' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda_procedimentos_edita.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149715cf95365b11321-58180025',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cf95365b7cd32_37967022',
  'variables' => 
  array (
    'Procedimentos' => 0,
    'PATH' => 0,
    'Procedimento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf95365b7cd32_37967022')) {function content_5cf95365b7cd32_37967022($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/headerEditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">//<![CDATA[ 
	$(window).load(function(){

	document.getElementById('Preparo').addEventListener('click', function() {
	var value = this.checked;
	var a = document.getElementById('a');

	a.style.display = 'none';

	switch(value) {
	case true: a.style.display = 'block'; break;
	}
	})
	});
</script>

<div class="step">
<?php  $_smarty_tpl->tpl_vars['Procedimento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Procedimento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Procedimentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Procedimento']->key => $_smarty_tpl->tpl_vars['Procedimento']->value){
$_smarty_tpl->tpl_vars['Procedimento']->_loop = true;
?><?php } ?>

	<h1>Edição de Procedimento</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/editaProcedimento">
		
		<div class="helper-display-none">
            <input type="text" name="procedimentoid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Procedimento']->value['ProcedimentoId'];?>
">
        </div>
		
        <div class="form-group">
            <label>Nome do Procedimento</label>
            <input type="text" name="nomeprocedimento" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Procedimento']->value['Descricao'];?>
">
        </div>
	
		<div class="form-group">
            <label><input type="checkbox" name="Preparo" id="Preparo" value="1" <?php if ($_smarty_tpl->tpl_vars['Procedimento']->value['Preparo']=="1"){?>checked<?php }?>> O procedimento necessita de preparo para ser realizado</label>
        </div>
		
		<div id="a" <?php if ($_smarty_tpl->tpl_vars['Procedimento']->value['Preparo']!="1"){?>class="helper-display-none"<?php }?>>
            <textarea name="texto" style="height:500px;width:1000px;"><?php echo $_smarty_tpl->tpl_vars['Procedimento']->value['TextoPreparo'];?>
</textarea>
        </div>
		
		</br>
		
		<button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



</body>
</html><?php }} ?>