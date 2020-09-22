<?php /* Smarty version Smarty-3.1.13, created on 2019-07-24 02:42:05
         compiled from "engine\view\InfoPanel\pages\Pedidos\system.pedidos_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:232195d34c715029582-62482128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f005799db5bfa1ead12fd45f32ba64b20e217105' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Pedidos\\system.pedidos_novo.tpl',
      1 => 1563919541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232195d34c715029582-62482128',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d34c7150afeb9_89723336',
  'variables' => 
  array (
    'PATH' => 0,
    'DadoPaciente' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d34c7150afeb9_89723336')) {function content_5d34c7150afeb9_89723336($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">

	<h1>Cadastro de Pedido Médico</h1>

	<form method="post" data-toggle="validator" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/pedidos/novoPedido">
		
        <div class="helper-display-none">
            <input type="text" name="pacienteid" id="PacienteId" class="form-control">
			<input type="text" name="contador" id="contador" class="form-control" value="1" readonly>
        </div>
	
		<div class="form-group">
			<label>Nome do Paciente</label>
			<input type="text" name="NomePaciente" id="nomepaciente" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['DadoPaciente']->value['NomePaciente'];?>
" data-error="Informe o nome do Paciente." required>
			<div class="help-block with-errors"></div>
		</div>
		
		<hr />		
	
		<table class="table table-hover table-stripped">
			<thead>
			<tr>
				<th>Cód. TUSS</th>
				<th>Nome Procedimento</th>
				<th></th>
			</tr>
			</thead>
		</table>
	
		<div id="procedimento1"><table><tr><td class="col-md-2"><input type="text" name="TUSS[1]" id="TUSS1" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[1]" id="DESCRICAO1" class="form-control"></td><td class="col-md-1"><label><a onclick='func()'><i class="glyphicon glyphicon-close"></i></a></label></td></tr></table></div>
		<div id="procedimento2" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[2]" id="TUSS2" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[2]" id="DESCRICAO2" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(2)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento3" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[3]" id="TUSS3" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[3]" id="DESCRICAO3" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(3)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento4" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[4]" id="TUSS4" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[4]" id="DESCRICAO4" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(4)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento5" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[5]" id="TUSS5" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[5]" id="DESCRICAO5" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(5)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento6" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[6]" id="TUSS6" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[6]" id="DESCRICAO6" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(6)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento7" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[7]" id="TUSS7" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[7]" id="DESCRICAO7" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(7)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento8" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[8]" id="TUSS8" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[8]" id="DESCRICAO8" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(8)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento9" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[9]" id="TUSS9" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[9]" id="DESCRICAO9" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(9)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento10" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[10]" id="TUSS10" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[10]" id="DESCRICAO10" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(10)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento11" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[11]" id="TUSS11" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[11]" id="DESCRICAO11" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(11)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento12" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[12]" id="TUSS12" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[12]" id="DESCRICAO12" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(12)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento13" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[13]" id="TUSS13" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[13]" id="DESCRICAO13" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(13)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento14" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[14]" id="TUSS14" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[14]" id="DESCRICAO14" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(14)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento15" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[15]" id="TUSS15" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[15]" id="DESCRICAO15" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(15)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento16" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[16]" id="TUSS16" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[16]" id="DESCRICAO16" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(16)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento17" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[17]" id="TUSS17" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[17]" id="DESCRICAO17" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(17)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento18" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[18]" id="TUSS18" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[18]" id="DESCRICAO18" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(18)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento19" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[19]" id="TUSS19" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[19]" id="DESCRICAO19" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(19)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		<div id="procedimento20" class="helper-display-none"><table><tr><td class="col-md-2"><input type="text" name="TUSS[20]" id="TUSS20" class="form-control"></td><td class="col-md-10"><input type="text" name="DESCRICAO[20]" id="DESCRICAO20" class="form-control"></td><td class="col-md-1"><label><a onclick='func2(20)'><i class="glyphicon glyphicon-remove"></i></a></label></td></tr></table></div>
		
		<div id="procedimentos"></div>
		
		</br>
		<a onclick='func()' class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Adicionar outro Procedimento</a>
		</br>
		</br>
		<button type="submit" class="btn btn-default">Salvar</button>

    </form>
</div>


<script language="javascript">
	document.getElementById('nomepaciente').focus();
</script>

<script>
	function func(){
		var numero = parseInt($('#contador').val());
		numero = numero +1;
		document.getElementById("contador").value = numero;
		
		switch(numero) {
		case 2: (procedimento2).style.display = 'block'; break;
		case 3: (procedimento3).style.display = 'block'; break;
		case 4: (procedimento4).style.display = 'block'; break;
		case 5: (procedimento5).style.display = 'block'; break;
		case 6: (procedimento6).style.display = 'block'; break;
		case 7: (procedimento7).style.display = 'block'; break;
		case 8: (procedimento8).style.display = 'block'; break;
		case 9: (procedimento9).style.display = 'block'; break;
		case 10: (procedimento10).style.display = 'block'; break;
		case 11: (procedimento11).style.display = 'block'; break;
		case 12: (procedimento12).style.display = 'block'; break;
		case 13: (procedimento13).style.display = 'block'; break;
		case 14: (procedimento14).style.display = 'block'; break;
		case 15: (procedimento15).style.display = 'block'; break;
		case 16: (procedimento16).style.display = 'block'; break;
		case 17: (procedimento17).style.display = 'block'; break;
		case 18: (procedimento18).style.display = 'block'; break;
		case 19: (procedimento19).style.display = 'block'; break;
		case 20: (procedimento20).style.display = 'block'; break;
		}
	}
</script>

<script>
	function func2(codigo){
		switch(codigo) {
		case 2: (procedimento2).style.display = 'none'; document.getElementById("TUSS2").value = ""; document.getElementById("DESCRICAO2").value = ""; break;
		case 3: (procedimento3).style.display = 'none'; document.getElementById("TUSS3").value = ""; document.getElementById("DESCRICAO3").value = ""; break;
		case 4: (procedimento4).style.display = 'none'; document.getElementById("TUSS4").value = ""; document.getElementById("DESCRICAO4").value = ""; break;
		case 5: (procedimento5).style.display = 'none'; document.getElementById("TUSS5").value = ""; document.getElementById("DESCRICAO5").value = ""; break;
		case 6: (procedimento6).style.display = 'none'; document.getElementById("TUSS6").value = ""; document.getElementById("DESCRICAO6").value = ""; break;
		case 7: (procedimento7).style.display = 'none'; document.getElementById("TUSS7").value = ""; document.getElementById("DESCRICAO7").value = ""; break;
		case 8: (procedimento8).style.display = 'none'; document.getElementById("TUSS8").value = ""; document.getElementById("DESCRICAO8").value = ""; break;
		case 9: (procedimento9).style.display = 'none'; document.getElementById("TUSS9").value = ""; document.getElementById("DESCRICAO9").value = ""; break;
		case 10: (procedimento10).style.display = 'none'; document.getElementById("TUSS10").value = ""; document.getElementById("DESCRICAO10").value = ""; break;
		case 11: (procedimento11).style.display = 'none'; document.getElementById("TUSS11").value = ""; document.getElementById("DESCRICAO11").value = ""; break;
		case 12: (procedimento12).style.display = 'none'; document.getElementById("TUSS12").value = ""; document.getElementById("DESCRICAO12").value = ""; break;
		case 13: (procedimento13).style.display = 'none'; document.getElementById("TUSS13").value = ""; document.getElementById("DESCRICAO13").value = ""; break;
		case 14: (procedimento14).style.display = 'none'; document.getElementById("TUSS14").value = ""; document.getElementById("DESCRICAO14").value = ""; break;
		case 15: (procedimento15).style.display = 'none'; document.getElementById("TUSS15").value = ""; document.getElementById("DESCRICAO15").value = ""; break;
		case 16: (procedimento16).style.display = 'none'; document.getElementById("TUSS16").value = ""; document.getElementById("DESCRICAO16").value = ""; break;
		case 17: (procedimento17).style.display = 'none'; document.getElementById("TUSS17").value = ""; document.getElementById("DESCRICAO17").value = ""; break;
		case 18: (procedimento18).style.display = 'none'; document.getElementById("TUSS18").value = ""; document.getElementById("DESCRICAO18").value = ""; break;
		case 19: (procedimento19).style.display = 'none'; document.getElementById("TUSS19").value = ""; document.getElementById("DESCRICAO19").value = ""; break;
		case 20: (procedimento20).style.display = 'none'; document.getElementById("TUSS20").value = ""; document.getElementById("DESCRICAO20").value = ""; break;
		}
	}
</script>
	
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
 
		$.getJSON( "/info/pedidos/getDadosPaciente",  {PesquisaPaciente : $('#nomepaciente').val()}, function( data, status, xhr ) {
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



<script>
  $( function() {
    var cache = {};
    $( "#TUSS1" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO1" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS1').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO1" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS1" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO1').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
	
<script>
  $( function() {
    var cache = {};
    $( "#TUSS2" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO2" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS2').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO2" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS2" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO2').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS3" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO3" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS3').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO3" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS3" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO3').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS4" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO4" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS4').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO4" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS4" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO4').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS5" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO5" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS5').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO5" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS5" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO5').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS6" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO6" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS6').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO6" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS6" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO6').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS7" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO7" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS7').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO7" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS7" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO7').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS8" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO8" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS8').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO8" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS8" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO8').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS9" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO9" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS9').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO9" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS9" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO9').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS10" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO10" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS10').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO10" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS10" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO10').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS11" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO11" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS11').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO11" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS11" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO11').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
	
<script>
  $( function() {
    var cache = {};
    $( "#TUSS12" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO12" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS12').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO12" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS12" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO12').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS13" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO13" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS13').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO13" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS13" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO13').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS14" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO14" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS14').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO14" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS14" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO14').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS15" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO15" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS15').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO15" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS15" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO15').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS16" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO16" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS16').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO16" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS16" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO16').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS17" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO17" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS17').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO17" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS17" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO17').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS18" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO18" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS18').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO18" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS18" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO18').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS19" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO19" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS19').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO19" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS19" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO19').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#TUSS20" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#DESCRICAO20" ).val( ui.item.descricao);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimento",  {PesquisaTUSS : $('#TUSS20').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.descricao + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#DESCRICAO20" ).autocomplete({
      minLength: 3,
	  select: function( event, ui ) {
		 $( "#TUSS20" ).val( ui.item.tuss);
      },
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/pedidos/getDadosProcedimentoDesc",  {PesquisaDescricao : $('#DESCRICAO20').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      
	  }
    })
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.tuss + "<br>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>