<?php /* Smarty version Smarty-3.1.13, created on 2020-08-13 16:11:10
         compiled from "engine\view\InfoPanel\pages\Agenda\system.teste.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296305f35540364bbe2-20788548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85b12e9afed518c0d76ae8cd1a89f845ab191794' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.teste.tpl',
      1 => 1597344421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296305f35540364bbe2-20788548',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5f355403a5fe84_06971131',
  'variables' => 
  array (
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f355403a5fe84_06971131')) {function content_5f355403a5fe84_06971131($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>	
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<style>
		.ui-autocomplete-loading {
			background: white url("images/ui-anim_basic_16x16.gif") right center no-repeat;
		}
		</style>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body ng-app="AngioApp"> 



<div class="step">

	<form method="post" data-toggle="validator" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/novoAgendamento">
		
        <div>
			<input type="text" name="PacienteId" class="form-control" id="PacienteId">
        </div>
	
		<div class="form-group">
			<label>Nome do Paciente</label>
			<input type="text" name="NomePaciente" id="nomepaciente" class="form-control" data-error="Informe o nome do Paciente." required>
			<div class="help-block with-errors"></div>
		</div>
		
        <button type="submit" class="btn btn-default">Salvar</button>

    </form>		
</div>


<script>
  $( function() {
    var cache = {};
    $( "#nomepaciente" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#PacienteId" ).val( ui.item.PacienteId);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/agenda/getDadosPaciente",  {PesquisaPaciente : $('#nomepaciente').val(), LivroId : 3}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.datanasc + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
<?php }} ?>