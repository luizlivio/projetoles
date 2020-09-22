<?php /* Smarty version Smarty-3.1.13, created on 2020-01-22 08:09:22
         compiled from "engine\view\InfoPanel\pages\Vendas\system.vendas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42905e282d620b6f98-21545566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d89c5306b885ea8456f842eb87abe093c9ad350' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Vendas\\system.vendas.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42905e282d620b6f98-21545566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'periodos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e282d620fe234_41165807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e282d620fe234_41165807')) {function content_5e282d620fe234_41165807($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['per'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['per']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periodos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['per']->key => $_smarty_tpl->tpl_vars['per']->value){
$_smarty_tpl->tpl_vars['per']->_loop = true;
?><?php } ?>
<div class="step">
	<h1>Vendas</h1>
	
	<h3>Contatos</h3>
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th class="col-md-9">Módulo</th>
            <th class="col-md-3">Acesso</th>
        </tr>
		</thead>
        <tr>
            <td>Lista de Contatos</td>
            <td><a href="/info/vendas/contatos" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Estatísticas</td>
            <td><a href="/info/vendas/estatisticas" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Seguir FollowUp</td>
            <td><a href="/info/vendas/segueFollowUp" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Transferir FollowUp</td>
            <td><a href="/info/vendas/transferirFollowUp" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
    </table>
	
	<h3>Mala-Direta</h3>
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th class="col-md-9">Módulo</th>
            <th class="col-md-3">Acesso</th>
        </tr>
		</thead>
        <tr>
            <td>Lista de Contatos</td>
            <td><a href="/info/vendas/maladireta_contatos" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Campanhas</td>
            <td><a href="/info/vendas/maladireta_campanhas" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Configurações</td>
            <td><a href="/info/vendas/maladireta_configuracoes" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
    </table>
	
	<h3>Pós-Vendas (Gestão de Qualidade)</h3>
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th class="col-md-9">Módulo</th>
            <th class="col-md-3">Acesso</th>
        </tr>
		</thead>
        <tr>
            <td>Relatório de Eventos Adversos</td>
            <td><a href="/info/vendas/qualidade" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Estatísticas</td>
            <td><a href="/info/vendas/qualidade_estatisticas" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Relatório de Prejuízo</td>
            <td><a href="/info/vendas/qualidade_prejuizo" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Padronização de Software</td>
            <td><a href="/info/vendas/qualidade_padronizacao" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
    </table>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>