<?php /* Smarty version Smarty-3.1.13, created on 2019-06-27 07:07:14
         compiled from "engine\view\InfoPanel\pages\Fila_Atendimento\system.evolucao_nova.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187275cd007994d2ff6-93965140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcb402c64256acd3c5029dc4fff1a83b4538f8e3' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Fila_Atendimento\\system.evolucao_nova.tpl',
      1 => 1561603801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187275cd007994d2ff6-93965140',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd0079952d532_20487899',
  'variables' => 
  array (
    'Areas' => 0,
    'PATH' => 0,
    'pacienteid' => 0,
    'horreqid' => 0,
    'avaliacaoid' => 0,
    'Area' => 0,
    'Profissionais' => 0,
    'Fisioterapeuta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd0079952d532_20487899')) {function content_5cd0079952d532_20487899($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


 $_from = $_smarty_tpl->tpl_vars['Areas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Area']->key => $_smarty_tpl->tpl_vars['Area']->value){
$_smarty_tpl->tpl_vars['Area']->_loop = true;
?><?php } ?>
/info/filaatendimento/novaEvolucao" Onsubmit="btn.disabled=true">
">
">
">
">
 $_from = $_smarty_tpl->tpl_vars['Profissionais']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Fisioterapeuta']->key => $_smarty_tpl->tpl_vars['Fisioterapeuta']->value){
$_smarty_tpl->tpl_vars['Fisioterapeuta']->_loop = true;
?>
"><?php echo $_smarty_tpl->tpl_vars['Fisioterapeuta']->value['Nome'];?>
</option>

$(window).load(function(){
 
document.getElementById('tosse').addEventListener('change', function() {
var value = this.value;
var tipotossediv = document.getElementById('tipotossediv');

tipotossediv.style.display = 'none';

switch(value) {
case 'SIM': tipotossediv.style.display = 'block'; break;

}
})

});

$(window).load(function(){
 
document.getElementById('dispneia').addEventListener('change', function() {
var value = this.value;
var tipodispneiadiv = document.getElementById('tipodispneiadiv');

tipodispneiadiv.style.display = 'none';

switch(value) {
case 'SIM': tipodispneiadiv.style.display = 'block'; break;

}
})

});
</script>



<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>