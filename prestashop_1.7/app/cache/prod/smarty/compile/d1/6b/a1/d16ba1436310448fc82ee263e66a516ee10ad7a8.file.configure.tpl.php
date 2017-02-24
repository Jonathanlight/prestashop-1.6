<?php /* Smarty version Smarty-3.1.19, created on 2017-02-24 13:09:51
         compiled from "/var/www/html/prestashop-1.6/prestashop_1.7/modules/MailAdmin/views/templates/admin/configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149914463558b0228f3ca388-62615755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd16ba1436310448fc82ee263e66a516ee10ad7a8' => 
    array (
      0 => '/var/www/html/prestashop-1.6/prestashop_1.7/modules/MailAdmin/views/templates/admin/configure.tpl',
      1 => 1487900923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149914463558b0228f3ca388-62615755',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b0228f3cc3e0_63096810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b0228f3cc3e0_63096810')) {function content_58b0228f3cc3e0_63096810($_smarty_tpl) {?>

<style>
	.button_ws {
		background-color: #4CAF50; /* Green */
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
	}
	.button_ws:hover {
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

		transition: all ease-in-out 0.4s;


		background-color: #4CAF50; /* Green */
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
	}

</style>

<center>
	<form>
		<input class="button_ws" TYPE="button" VALUE="Envoyer un mail a l'administrateur" onClick="parent.location='mailto:jonathan.kablan@gmail.com?subject=Objet du courrier'">
	</form>
</center>
<br>
<hr>
<br>
<?php }} ?>
