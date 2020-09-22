<?php /* Smarty version Smarty-3.1.13, created on 2020-04-16 20:10:01
         compiled from "engine\view\InfoPanel\pages\Telemedicina\system.telemedicina.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82975e98e5c9293791-39768573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f53f865352551f527a5284f5c420afb75a7bd7b' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Telemedicina\\system.telemedicina.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82975e98e5c9293791-39768573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'enviado' => 0,
    'administrador' => 0,
    'adm' => 0,
    'inf' => 0,
    'convenios' => 0,
    'convenio' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e98e5c96a4ff3_81382670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e98e5c96a4ff3_81382670')) {function content_5e98e5c96a4ff3_81382670($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['enviado']->value==1){?><div class="alert alert-success" role="alert">Wifi Incluído com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==2){?><div class="alert alert-success" role="alert">Wifi Excluído com sucesso!</div><?php }?>

<div class="step">
	<h1>Wifi (Senhas)</h1>
	<?php  $_smarty_tpl->tpl_vars['adm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['administrador']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['adm']->key => $_smarty_tpl->tpl_vars['adm']->value){
$_smarty_tpl->tpl_vars['adm']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['adm']->value['UserId']==$_smarty_tpl->tpl_vars['inf']->value->userID||$_smarty_tpl->tpl_vars['adm']->value['UserId']=="0"){?><a href="/info/wifi/novowifi" class="btn btn-sm btn-primary">Novo Wifi</a><?php }?>
	<?php } ?>
	
    <table class="table table-hover table-stripped">
        <thead>
		<tr>
            <th>Unidade</th>
            <th>Nome da Rede</th>
			<th>Senha</th>
			<?php if ($_smarty_tpl->tpl_vars['adm']->value['UserId']==$_smarty_tpl->tpl_vars['inf']->value->userID||$_smarty_tpl->tpl_vars['adm']->value['UserId']=="0"){?><th>Excluir</th><?php }?>
        </tr>
		</thead>
        <?php  $_smarty_tpl->tpl_vars['convenio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['convenio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['convenios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['convenio']->key => $_smarty_tpl->tpl_vars['convenio']->value){
$_smarty_tpl->tpl_vars['convenio']->_loop = true;
?>
        <tr>
            <td><?php echo utf8_encode($_smarty_tpl->tpl_vars['convenio']->value['unidade']);?>
</td>
            <td><?php echo utf8_encode($_smarty_tpl->tpl_vars['convenio']->value['nome']);?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['convenio']->value['senha']);?>
</td>
			<?php if ($_smarty_tpl->tpl_vars['adm']->value['UserId']==$_smarty_tpl->tpl_vars['inf']->value->userID||$_smarty_tpl->tpl_vars['adm']->value['UserId']=="0"){?><td><a href="/info/wifi/excluiwifi/<?php echo $_smarty_tpl->tpl_vars['convenio']->value['id'];?>
" class="btn btn-sm btn-danger">Excluir</a></td><?php }?>
        </tr>
        <?php } ?>
    </table>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
../<?php }} ?>