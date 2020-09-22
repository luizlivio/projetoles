<?php /* Smarty version Smarty-3.1.13, created on 2019-07-03 03:58:42
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda_livros_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:246485cf951bd9c8417-44491249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfad4d6ad48b5a62c927e5ab5f0bd1a6f1a893d2' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda_livros_novo.tpl',
      1 => 1562137073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246485cf951bd9c8417-44491249',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cf951bdbed048_50126203',
  'variables' => 
  array (
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf951bdbed048_50126203')) {function content_5cf951bdbed048_50126203($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/headerEditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
	<h1>Cadastro de Livros</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/novoLivro">
		
        <div class="form-group">
            <label>Nome do Livro</label>
            <input type="text" name="nomelivro" class="form-control" placeholder="Nome do Livro">
        </div>
		
		<div class="form-group">
            <label><input type="checkbox" name="OptionObservacoes" id="OptionObservacoes" value="1"> Deseja adicionar observações a este livro?</label>
        </div>
		
		<div id="b" class="form-group helper-display-none">
            <label>Observações do Livro</label>
            <textarea name="observacoes" id="observacoes" style="height:500px;width:1000px;"></textarea>
        </div>
		
		<div class="form-group">
            <label>Tipo de Agendamento</label>
            <select name="tipo" id="tipo" class="form-control">
				<option value="1">Agendamento de Consultas/Exames</option>
				<option value="2">Agendamento de Sessões (Curta Duração)</option>
				<option value="3">Agendamento de Sessões (Longa Duração)</option>
			</select>
        </div>
		
		<div class="form-group helper-display-none" id="a">
			<table>
				<tr>
					<td><label>Considerar como abandono apartir de </label></td>
					<td><input type="number" name="faltas" class="form-control" value="0"></td>
					<td><label> faltas.</label></td>
				</tr>
			</table>
        </div>
		
        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
</html><?php }} ?>