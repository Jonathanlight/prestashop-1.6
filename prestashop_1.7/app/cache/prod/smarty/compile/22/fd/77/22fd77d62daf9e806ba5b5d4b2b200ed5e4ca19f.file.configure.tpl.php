<?php /* Smarty version Smarty-3.1.19, created on 2017-02-24 13:09:51
         compiled from "/var/www/html/prestashop-1.6/prestashop_1.7/modules/popUpDrop/views/templates/admin/configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164743499458b0228f3c1648-16843566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22fd77d62daf9e806ba5b5d4b2b200ed5e4ca19f' => 
    array (
      0 => '/var/www/html/prestashop-1.6/prestashop_1.7/modules/popUpDrop/views/templates/admin/configure.tpl',
      1 => 1487928809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164743499458b0228f3c1648-16843566',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b0228f3c5cf7_88950991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b0228f3c5cf7_88950991')) {function content_58b0228f3c5cf7_88950991($_smarty_tpl) {?>


	<script language="JavaScript1.2">
        isIE=document.all;
        isNN=!document.all&&document.getElementById;
        isN4=document.layers;
        isHot=false;

        function ddInit(e){
            topDog=isIE ? "BODY" : "HTML";
            whichDog=isIE ? document.all.theLayer : document.getElementById("theLayer");
            hotDog=isIE ? event.srcElement : e.target;
            while (hotDog.id!="titleBar"&&hotDog.tagName!=topDog){
                hotDog=isIE ? hotDog.parentElement : hotDog.parentNode; }
            if (hotDog.id=="titleBar"){
                offsetx=isIE ? event.clientX : e.clientX;
                offsety=isIE ? event.clientY : e.clientY;
                nowX=parseInt(whichDog.style.left);
                nowY=parseInt(whichDog.style.top);
                ddEnabled=true;
                document.onmousemove=dd; }}

        function dd(e){
            if (!ddEnabled) return;
            whichDog.style.left=isIE ? nowX+event.clientX-offsetx : nowX+e.clientX-offsetx;
            whichDog.style.top=isIE ? nowY+event.clientY-offsety : nowY+e.clientY-offsety;
            return false;  }

        function ddN4(whatDog){
            if (!isN4) return;
            N4=eval(whatDog);
            N4.captureEvents(Event.MOUSEDOWN|Event.MOUSEUP);
            N4.onmousedown=function(e){
                N4.captureEvents(Event.MOUSEMOVE);
                N4x=e.x;
                N4y=e.y;
            }
            N4.onmousemove=function(e){
                if (isHot){
                    N4.moveBy(e.x-N4x,e.y-N4y);
                    return false;   }
            }
            N4.onmouseup=function(){
                N4.releaseEvents(Event.MOUSEMOVE);  }
        }

        function hideMe(){
            if (isIE||isNN) whichDog.style.visibility="hidden";
            else if (isN4) document.theLayer.visibility="hide";
        }

        function showMe(){
            if (isIE||isNN) whichDog.style.visibility="visible";
            else if (isN4) document.theLayer.visibility="show";
        }
        document.onmousedown=ddInit;
        document.onmouseup=Function("ddEnabled=false");

	</script>

<center>
<div id="theLayer" style="position:relative;visibility:visible; background: #2B2D2F">
	<table border="0" width="250" bgcolor="#FFCC00" cellspacing="0" cellpadding="5">
		<tr><td width="100%">
				<table border="0" width="100%" cellspacing="0" cellpadding="0" height="36">
					<tr><td id="titleBar" style="cursor:move" width="100%">
							<ilayer width="100%" onSelectStart="return false">
								<layer width="100%" onMouseover="isHot=true;if (isN4) ddN4(theLayer)" onMouseout="isHot=false">
									<font face="Verdana" size="2" color="#000000"><b>Pub Annonce</b></font>
								</layer></ilayer></td>
						<td style="cursor:hand" valign="top"><a href="#" onClick="hideMe();return false"><font color=#ffffff size=2 face=arial  style="text-decoration:none">X</font></a>
						</td></tr>
					<tr><td width="100%" bgcolor="#FFFFFF" style="padding:4px" colspan="2">
							<center><a href="#">
                                    <img src="http://justeetsimplementmoi.j.u.pic.centerblog.net/85a2099f.jpg" border="0"  /></a>
                                </center>
						</td></tr></table>
			</td></tr></table>

</div>
<p>
Super sponsor Adidas Officiel  <a href="javascript:showMe();">Afficher</a> la fenêtre ou de la
<a href="javascript:hideMe();">Fermer</a>
</p>
</center>


<?php }} ?>
