<?php /* Smarty version Smarty-3.1.13, created on 2019-07-23 16:34:31
         compiled from "engine\view\InfoPanel\pages\Cadastros\system.cadastros_procedimentos_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198485d37611e056b22-95529138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e51d0369108995c330f8f17770715afab0aeac7' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Cadastros\\system.cadastros_procedimentos_novo.tpl',
      1 => 1563910456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198485d37611e056b22-95529138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d37611e088175_05562006',
  'variables' => 
  array (
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d37611e088175_05562006')) {function content_5d37611e088175_05562006($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/headerEditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
/info/cadastros/novoProcedimento">
		
		<div class="form-group">
            <label>Código TUSS do Procedimento</label>
            <input type="text" name="tussprocedimento" class="form-control" placeholder="TUSS do Procedimento">
        </div>
		
        <div class="form-group">
            <label>Nome do Procedimento</label>
            <input type="text" name="nomeprocedimento" class="form-control" placeholder="Nome do Procedimento">
        </div>	
		
		<br>
		
        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



</body>
</html><?php }} ?>