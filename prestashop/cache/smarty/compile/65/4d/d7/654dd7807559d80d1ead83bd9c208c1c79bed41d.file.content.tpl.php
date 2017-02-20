<?php /* Smarty version Smarty-3.1.19, created on 2017-02-20 12:52:23
         compiled from "/var/www/html/prestashop-1.6/prestashop/admin9513ovjqe/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174511758258aad87797e815-98403860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '654dd7807559d80d1ead83bd9c208c1c79bed41d' => 
    array (
      0 => '/var/www/html/prestashop-1.6/prestashop/admin9513ovjqe/themes/default/template/content.tpl',
      1 => 1482157020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174511758258aad87797e815-98403860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58aad877982291_22345961',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58aad877982291_22345961')) {function content_58aad877982291_22345961($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
