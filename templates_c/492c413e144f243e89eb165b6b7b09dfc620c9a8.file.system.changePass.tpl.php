<?php /* Smarty version Smarty-3.1.13, created on 2020-10-13 18:25:30
         compiled from "engine\view\InfoPanel\pages\AlteraSenha\system.changePass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:274555cd04daea77606-83816977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '492c413e144f243e89eb165b6b7b09dfc620c9a8' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\AlteraSenha\\system.changePass.tpl',
      1 => 1602624311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274555cd04daea77606-83816977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd04daeabcc18_84237784',
  'variables' => 
  array (
    'status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd04daeabcc18_84237784')) {function content_5cd04daeabcc18_84237784($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
    <form method="post" action="/info/alterPass" id="alterarSenha">
		
		 <?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Senha alterada com sucesso!</div><?php }?>
        <?php if ($_GET['error']){?>
        <div class="alert alert-danger">
            <?php if ($_GET['error']=="445511"){?>
            <strong>Atenção</strong> As senhas são iguais
            <?php }elseif($_GET['error']=="445512"){?>
            <strong>Atenção</strong> A senha é a mesma que a antiga
            <?php }else{ ?>
            <strong>Atenção</strong> Error ao alterar a senha, contate o administrador
            <?php }?>
        </div>
        <?php }?>

        <div class="form-group">
            <label for="oldPassword">Nova senha</label>
            <input type="password" name="oldpassword" class="form-control" minlength="6" maxlength="10" placeholder="Senha Antiga" required="required">
        </div>

        <div class="form-group">
            <label for="newPassword">Repita Nova Senha</label>
            <input type="password" name="newPassword" class="form-control" minlength="6" maxlength="10" placeholder="Nova senha" required="required">
        </div>

        <button type="submit" class="btn btn-default">Enviar</button>
    </form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>