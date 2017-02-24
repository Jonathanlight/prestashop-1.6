<?php /* Smarty version Smarty-3.1.19, created on 2017-02-24 13:09:51
         compiled from "/var/www/html/prestashop-1.6/prestashop_1.7/modules/DateTitle/views/templates/admin/configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213334516258b0228f3c7477-30305204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b63d81e4cf7a01de47ea5e2a53572d3e92345cd7' => 
    array (
      0 => '/var/www/html/prestashop-1.6/prestashop_1.7/modules/DateTitle/views/templates/admin/configure.tpl',
      1 => 1487900923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213334516258b0228f3c7477-30305204',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b0228f3c8e80_08599144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b0228f3c8e80_08599144')) {function content_58b0228f3c8e80_08599144($_smarty_tpl) {?>

<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-2645097-1']);
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
<script language="JavaScript1.2">
    //script par Randall Smith copyright 1999 - Dynamicdrive.com
    //remix par Deoxys copyright - http://antoinematyja.free.fr/graphicmedia/

    //  les mois
    var isnMonth = new
        Array("janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre");

    //  les jours
    var isnDay = new
        Array("dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche");

    // annee actuelle
    today = new Date() ;
    Year=today.getYear();
    if (Year < 1000)
        Year+=1900
    laDate=today.getDate();

    // On ecrit enfin tout ce qu on a enregistre dans le title
    function setdate(){
        document.title=" "+isnDay[today.getDay()]+" "+laDate+" "+isnMonth[today.getMonth()]+" "+Year+""
    }
    if (document.all)
        setdate()
    else if (document.getElementById)
        window.onload=setdate
</script>

<?php }} ?>
