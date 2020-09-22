<?php /* Smarty version Smarty-3.1.13, created on 2019-08-28 00:39:50
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda_livros_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301435ce31871520170-49409985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e85f4052c18d66e437879fc42ddf8009997ddda' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda_livros_edita.tpl',
      1 => 1562137110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301435ce31871520170-49409985',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ce318715ff996_37128957',
  'variables' => 
  array (
    'Livros' => 0,
    'PATH' => 0,
    'Livro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce318715ff996_37128957')) {function content_5ce318715ff996_37128957($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/headerEditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">//<![CDATA[ 
	$(window).load(function(){

	document.getElementById('tipo').addEventListener('change', function() {
	var value = this.value;
	var a = document.getElementById('a');

	a.style.display = 'none';

	switch(value) {
	case '2': a.style.display = 'block'; break;
	}
	})


	});
</script>

<script type="text/javascript">//<![CDATA[ 
	$(window).load(function(){

	document.getElementById('OptionObservacoes').addEventListener('click', function() {
	var value = this.checked;
	var b = document.getElementById('b');

	b.style.display = 'none';

	switch(value) {
	case true: b.style.display = 'block'; break;
	}
	})
	});
</script>

<div class="step">
	<h1>Edita Cadastro do Livro</h1>
    <?php  $_smarty_tpl->tpl_vars['Livro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Livro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Livros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Livro']->key => $_smarty_tpl->tpl_vars['Livro']->value){
$_smarty_tpl->tpl_vars['Livro']->_loop = true;
?>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/editaLivro">
		
		<div class="helper-display-none">
            <input type="text" name="livroid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Livro']->value['LivroId'];?>
">
        </div>
		
        <div class="form-group">
            <label>Nome do Livro</label>
            <input type="text" name="nomelivro" class="form-control" placeholder="Nome do Livro" value="<?php echo $_smarty_tpl->tpl_vars['Livro']->value['Descricao'];?>
">
        </div>
		
		<div class="form-group">
            <label><input type="checkbox" name="OptionObservacoes" id="OptionObservacoes" value="1" <?php if ($_smarty_tpl->tpl_vars['Livro']->value['OptionObservacoes']==1){?>checked<?php }?>> Deseja adicionar observações a este livro?</label>
        </div>
		
		<div id="b" class="form-group <?php if ($_smarty_tpl->tpl_vars['Livro']->value['OptionObservacoes']!=1){?>helper-display-none<?php }?>">
            <label>Observações do Livro</label>
            <textarea name="observacoes" id="observacoes" style="height:500px;width:1000px;"><?php echo $_smarty_tpl->tpl_vars['Livro']->value['Observacoes'];?>
</textarea>
        </div>
		
		<div class="form-group">
            <label>Tipo de Agendamento</label>
            <select name="tipo" id="tipo" class="form-control">
				<option value="1" <?php if ($_smarty_tpl->tpl_vars['Livro']->value['Tipo']==1){?>Selected<?php }?>>Agendamento de Consultas/Exames</option>
				<option value="2" <?php if ($_smarty_tpl->tpl_vars['Livro']->value['Tipo']==2){?>Selected<?php }?>>Agendamento de Sessões (Curta Duração)</option>
				<option value="3" <?php if ($_smarty_tpl->tpl_vars['Livro']->value['Tipo']==3){?>Selected<?php }?>>Agendamento de Sessões (Longa Duração)</option>
			</select>
        </div>
		
		<div class="form-group <?php if ($_smarty_tpl->tpl_vars['Livro']->value['Tipo']==1){?>helper-display-none<?php }?>" id="a">
			<table>
				<tr>
					<td><label>Considerar como abandono apartir de </label></td>
					<td><input type="number" name="faltas" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Livro']->value['Faltas'];?>
"></td>
					<td><label> faltas.</label></td>
				</tr>
			</table>
        </div>
		
        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>	
	<?php } ?>	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



</body>
</html><?php }} ?>