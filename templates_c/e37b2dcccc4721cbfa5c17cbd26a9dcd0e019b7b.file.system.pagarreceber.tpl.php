<?php /* Smarty version Smarty-3.1.13, created on 2019-11-17 23:59:37
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.pagarreceber.tpl" */ ?>
<?php /*%%SmartyHeaderCode:323325d2fedccce7158-91809363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e37b2dcccc4721cbfa5c17cbd26a9dcd0e019b7b' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.pagarreceber.tpl',
      1 => 1574045689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323325d2fedccce7158-91809363',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d2fedccd5adb1_27931968',
  'variables' => 
  array (
    'Empresas' => 0,
    'Empresa' => 0,
    'inf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2fedccd5adb1_27931968')) {function content_5d2fedccd5adb1_27931968($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Financeiro - Pagar e Receber</h1>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th class="col-md-10">Módulo</th>
            <th class="col-md-2">Acesso</th>
        </tr>
		</thead>
		<tr>
            <td>Bancos</td>
            <td><a href="/info/PagarReceber/pagarreceber_banco" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
	</table>
	<?php  $_smarty_tpl->tpl_vars['Empresa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Empresa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Empresas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Empresa']->key => $_smarty_tpl->tpl_vars['Empresa']->value){
$_smarty_tpl->tpl_vars['Empresa']->_loop = true;
?>
		<h3><?php echo $_smarty_tpl->tpl_vars['Empresa']->value['DESCRICAO'];?>
</h3>
		
		<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th class="col-md-10">Módulo</th>
            <th class="col-md-2">Acesso</th>
        </tr>
		</thead>
		<tr>
            <td>Resumo</td>
            <td><a href="/info/PagarReceber/pagarreceber_resumo/<?php echo $_smarty_tpl->tpl_vars['Empresa']->value['GrupoId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		
		<tr>
            <td>Favorecidos</td>
            <td><a href="/info/PagarReceber/pagarreceber_favorecidos" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Plano de Contas</td>
            <td><a href="/info/PagarReceber/pagarreceber_planodecontas" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Tipos de Documentos</td>
            <td><a href="/info/PagarReceber/pagarreceber_tiposdocumentos" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Centro de Custos</td>
            <td><a href="/info/PagarReceber/pagarreceber_centrocustos" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Unidades</td>
            <td><a href="/info/PagarReceber/pagarreceber_unidades" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Pagar</td>
            <td><a href="/info/PagarReceber/pagarreceber_pagar/<?php echo $_smarty_tpl->tpl_vars['Empresa']->value['GrupoId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Receber</td>
            <td><a href="/info/PagarReceber/pagarreceber_receber/<?php echo $_smarty_tpl->tpl_vars['Empresa']->value['GrupoId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Filtrar</td>
            <td><a href="/info/PagarReceber/pagarreceber_filtro1/<?php echo $_smarty_tpl->tpl_vars['Empresa']->value['GrupoId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>A Pagar e Receber para impressão</td>
            <td><a href="/info/PagarReceber/pagarreceber_filtro2/<?php echo $_smarty_tpl->tpl_vars['Empresa']->value['GrupoId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Notas Fiscais</td>
            <td><a href="/info/PagarReceber/notasfiscais/<?php echo $_smarty_tpl->tpl_vars['Empresa']->value['GrupoId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Calculadora de Tarifa de Pagamento</td>
            <td><a href="/info/PagarReceber/pagarreceber_tarifapagamento" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<?php if ($_smarty_tpl->tpl_vars['inf']->value->name=="VINICIUS TEODOSIO ALVESk"){?>
		<tr>
            <td>Caixa de Recebimentos da Recepção</td>
            <td><a href="/info/PagarReceber/pagarreceber_recepcao/<?php echo $_smarty_tpl->tpl_vars['Empresa']->value['GrupoId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Listagem de Caixa Diário</td>
            <td><a href="/info/PagarReceber/pagarreceber_listagem_cxadiario/<?php echo $_smarty_tpl->tpl_vars['Empresa']->value['GrupoId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Listagem de Caixa Diário - Devedores</td>
            <td><a href="/info/PagarReceber/pagarreceber_listagem_cxadiario_devedores/<?php echo $_smarty_tpl->tpl_vars['Empresa']->value['GrupoId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Geração Gráficos e Estatísticas</td>
            <td><a href="/info/PagarReceber/pagarreceber_graficos/<?php echo $_smarty_tpl->tpl_vars['Empresa']->value['GrupoId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Solicitações de Pagamento</td>
            <td><a href="/info/PagarReceber/pagarreceber_solicitacoespagamento/<?php echo $_smarty_tpl->tpl_vars['Empresa']->value['GrupoId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Informações Gerenciais - Listagem Paciente/Exame por Médico</td>
            <td><a href="/info/PagarReceber/pagarreceber_listagempormedico" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Informações Gerenciais - Evolutiva de Solicitações</td>
            <td><a href="/info/PagarReceber/pagarreceber_evolutivafaturamento" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Listagem de Impostos</td>
            <td><a href="/info/PagarReceber/pagarreceber_impostos/<?php echo $_smarty_tpl->tpl_vars['Empresa']->value['GrupoId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<?php }?>
		</table>
	<?php } ?>
	
	<?php if ($_smarty_tpl->tpl_vars['inf']->value->name=="VINICIUS TEODOSIO ALVES"){?>
	<h1>Configurações</h1>
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th class="col-md-10">Módulo</th>
            <th class="col-md-2">Acesso</th>
        </tr>
		</thead>
		<tr>
            <td>Grupo de Empresas e Vinculos</td>
            <td><a href="/info/PagarReceber/pagarreceber_gruposempresas" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Cadastro de Empresas</td>
            <td><a href="/info/PagarReceber/pagarreceber_empresas" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
	</table>
	<?php }?>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>