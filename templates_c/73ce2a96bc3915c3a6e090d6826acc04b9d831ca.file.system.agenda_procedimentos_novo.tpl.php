<?php /* Smarty version Smarty-3.1.13, created on 2019-07-23 16:33:02
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda_procedimentos_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190585cf953540ab2f9-71171127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73ce2a96bc3915c3a6e090d6826acc04b9d831ca' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda_procedimentos_novo.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190585cf953540ab2f9-71171127',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cf95354107aa6_73489394',
  'variables' => 
  array (
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf95354107aa6_73489394')) {function content_5cf95354107aa6_73489394($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/headerEditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
	<h1>Cadastro de Procedimento</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/novoProcedimento">
		
        <div class="form-group">
            <label>Nome do Procedimento</label>
            <input type="text" name="nomeprocedimento" class="form-control" placeholder="Nome do Procedimento">
        </div>
		
		<div class="form-group">
            <label><input type="checkbox" name="Preparo" id="Preparo" value="1"> O procedimento necessita de preparo para ser realizado</label>
        </div>
		
		<div id="a" class="helper-display-none">
            <textarea name="texto" style="height:500px;width:1000px;"></textarea>
        </div>
		
		<br>
		
        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



</body>
</html><?php }} ?>