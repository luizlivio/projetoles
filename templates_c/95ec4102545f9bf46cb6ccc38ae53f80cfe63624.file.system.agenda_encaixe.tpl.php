<?php /* Smarty version Smarty-3.1.13, created on 2019-06-27 00:42:00
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda_encaixe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:326205cd0173c25adc5-14850941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95ec4102545f9bf46cb6ccc38ae53f80cfe63624' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda_encaixe.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326205cd0173c25adc5-14850941',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd0173c298bf9_35562249',
  'variables' => 
  array (
    'PATH' => 0,
    'dia' => 0,
    'mes' => 0,
    'ano' => 0,
    'livroid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd0173c298bf9_35562249')) {function content_5cd0173c298bf9_35562249($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Abertura de Encaixes</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/novoEncaixe">
		
        <div class="form-group">
            <label>Data do Encaixe</label>
            <input type="text" name="data" id="data" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
">
        </div>
		
		<div class="form-group">
            <label>Hora</label>
            <input type="text" name="hora" id="hora" class="form-control">
        </div>
		
		<div class="helper-display-none">
            <label>Livroid</label>
            <input type="text" name="livroid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
">
        </div>
		
        <button type="submit" class="btn btn-default">Adicionar</button>

    </form>		

	
</div>


	<script language="javascript">
		document.getElementById('hora').focus();
	</script>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>