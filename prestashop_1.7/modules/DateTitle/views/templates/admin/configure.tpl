{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2015 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

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

