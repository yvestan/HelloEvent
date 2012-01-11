<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.3.3
*/error_reporting(6135);$yb=(!ereg('^(unsafe_raw)?$',ini_get("filter.default")));if($yb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Wd=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Wd){$$X=$Wd;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tbody tr:hover td,tbody tr:hover th{background:#eee;}pre{margin:1em 0 0;}input[type=image]{vertical-align:middle;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.js .checked td,.js .checked th{background:#ddf;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#loader{position:fixed;top:0;left:18em;z-index:1;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
function toggle(id){var el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}
function cookie(assign,days){var date=new Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date;}
function verifyVersion(){cookie('adminer_version=0',1);var script=document.createElement('script');script.src=location.protocol+'//www.adminer.org/version.php';document.body.appendChild(script);}
function selectValue(select){var selected=select.options[select.selectedIndex];return((selected.attributes.value||{}).specified?selected.value:selected.text);}
function trCheck(el){var tr=el.parentNode.parentNode;tr.className=tr.className.replace(/(^|\s)checked(\s|$)/,'$2')+(el.checked?' checked':'');}
function formCheck(el,name){var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;trCheck(elems[i]);}}}
function tableCheck(){var tables=document.getElementsByTagName('table');for(var i=0;i<tables.length;i++){if(/(^|\s)checkable(\s|$)/.test(tables[i].className)){var trs=tables[i].getElementsByTagName('tr');for(var j=0;j<trs.length;j++){trCheck(trs[j].firstChild.firstChild);}}}}
function formUncheck(id){var el=document.getElementById(id);el.checked=false;trCheck(el);}
function formChecked(el,name){var checked=0;var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}
return checked;}
function tableClick(event){var click=true;var el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^table$/i.test(el.tagName)){return;}
if(/^(a|input|textarea)$/i.test(el.tagName)){click=false;}
el=el.parentNode;}
el=el.firstChild.firstChild;if(click){el.click&&el.click();el.onclick&&el.onclick();}
trCheck(el);}
function setHtml(id,html){var el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}
function nodePosition(el){var pos=0;while(el=el.previousSibling){pos++;}
return pos;}
function pageClick(href,page,event){if(!isNaN(page)&&page){href+=(page!=1?'&page='+(page-1):'');if(!ajaxSend(href)){location.href=href;}}}
function selectAddRow(field){field.onchange=function(){};var row=field.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}
field.parentNode.parentNode.appendChild(row);}
function bodyKeydown(event,button){var target=event.target||event.srcElement;if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey&&/select|textarea|input/i.test(target.tagName)){target.blur();if(!ajaxForm(target.form,(button?button+'=1':''))){if(button){target.form[button].click();}else{target.form.submit();}}
return false;}
return true;}
function editingKeydown(event){if((event.keyCode==40||event.keyCode==38)&&event.ctrlKey&&!event.altKey&&!event.metaKey){var target=event.target||event.srcElement;var sibling=(event.keyCode==40?'nextSibling':'previousSibling');var el=target.parentNode.parentNode[sibling];if(el&&(/^tr$/i.test(el.tagName)||(el=el[sibling]))&&/^tr$/i.test(el.tagName)&&(el=el.childNodes[nodePosition(target.parentNode)])&&(el=el.childNodes[nodePosition(target)])){el.focus();}
return false;}
if(event.shiftKey&&!bodyKeydown(event,'insert')){eventStop(event);return false;}
return true;}
function functionChange(select){var input=select.form[select.name.replace(/^function/,'fields')];if(selectValue(select)){if(input.origMaxLength===undefined){input.origMaxLength=input.maxLength;}
input.removeAttribute('maxlength');}else if(input.origMaxLength>=0){input.maxLength=input.origMaxLength;}}
function ajax(url,callback,data){var xmlhttp=(window.XMLHttpRequest?new XMLHttpRequest():(window.ActiveXObject?new ActiveXObject('Microsoft.XMLHTTP'):false));if(xmlhttp){xmlhttp.open((data?'POST':'GET'),url);if(data){xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');}
xmlhttp.setRequestHeader('X-Requested-With','XMLHttpRequest');xmlhttp.onreadystatechange=function(){if(xmlhttp.readyState==4){callback(xmlhttp);}};xmlhttp.send(data);}
return xmlhttp;}
function ajaxSetHtml(url){return ajax(url,function(xmlhttp){if(xmlhttp.status){var data=eval('('+xmlhttp.responseText+')');for(var key in data){setHtml(key,data[key]);}}});}
var originalFavicon;function replaceFavicon(href){var favicon=document.getElementById('favicon');if(favicon){favicon.href=href;favicon.parentNode.appendChild(favicon);}}
var ajaxState=0;function ajaxSend(url,data,popState,noscroll){if(!history.pushState){return false;}
var currentState=++ajaxState;onblur=function(){if(!originalFavicon){originalFavicon=(document.getElementById('favicon')||{}).href;}
replaceFavicon(location.pathname+'?file=loader.gif&amp;version=3.3.3');};setHtml('loader','<img src="'+location.pathname+'?file=loader.gif&amp;version=3.3.3" alt="">');return ajax(url,function(xmlhttp){if(currentState==ajaxState){var title=xmlhttp.getResponseHeader('X-AJAX-Title');if(title){document.title=decodeURIComponent(title);}
var redirect=xmlhttp.getResponseHeader('X-AJAX-Redirect');if(redirect){return ajaxSend(redirect,'',popState);}
onblur=function(){};if(originalFavicon){replaceFavicon(originalFavicon);}
if(!xmlhttp.status){setHtml('loader','');}else{if(!popState){if(data||url!=location.href){history.pushState(data,'',url);}}
if(!noscroll&&!/&order/.test(url)){scrollTo(0,0);}
setHtml('content',xmlhttp.responseText);var content=document.getElementById('content');var scripts=content.getElementsByTagName('script');var length=scripts.length;for(var i=0;i<length;i++){var script=document.createElement('script');script.text=scripts[i].text;content.appendChild(script);}
var as=document.getElementById('menu').getElementsByTagName('a');var href=location.href.replace(/(&(sql=|dump=|(select|table)=[^&]*)).*/,'$1');for(var i=0;i<as.length;i++){as[i].className=(href==as[i].href?'active':'');}
var dump=document.getElementById('dump');if(dump){var match=/&(select|table)=([^&]+)/.exec(href);dump.href=dump.href.replace(/[^=]+$/,'')+(match?match[2]:'');}
if(window.jush){jush.highlight_tag('code',0);}}}},data);}
onpopstate=function(event){if((ajaxState||event.state)&&!/#/.test(location.href)){ajaxSend(location.href,(event.state&&confirm(areYouSure)?event.state:''),1);}else{ajaxState++;}};function ajaxForm(form,data,noscroll){if((/&(database|scheme|create|view|sql|user|dump|call)=/.test(location.href)&&!/\./.test(data))||(form.onsubmit&&form.onsubmit()===false)){return false;}
var params=[];for(var i=0;i<form.elements.length;i++){var el=form.elements[i];if(/file/i.test(el.type)&&el.value){return false;}else if(el.name&&(!/checkbox|radio|submit|file/i.test(el.type)||el.checked)){params.push(encodeURIComponent(el.name)+'='+encodeURIComponent(/select/i.test(el.tagName)?selectValue(el):el.value));}}
if(data){params.push(data);}
if(form.method=='post'){return ajaxSend((/\?/.test(form.action)?form.action:location.href),params.join('&'),false,noscroll);}
return ajaxSend((form.action||location.href).replace(/\?.*/,'')+'?'+params.join('&'),'',false,noscroll);}
function selectDblClick(td,event,text){if(/input|textarea/i.test(td.firstChild.tagName)){return;}
var original=td.innerHTML;var input=document.createElement(text?'textarea':'input');input.onkeydown=function(event){if(!event){event=window.event;}
if(event.keyCode==27&&!(event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){td.innerHTML=original;}};var pos=event.rangeOffset;var value=td.firstChild.alt||td.textContent||td.innerText;input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}
if(value=='\u00A0'||td.getElementsByTagName('i').length){value='';}
if(document.selection){var range=document.selection.createRange();range.moveToPoint(event.clientX,event.clientY);var range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}
td.innerHTML='';td.appendChild(input);input.focus();if(text==2){return ajax(location.href+'&'+encodeURIComponent(td.id)+'=',function(xmlhttp){if(xmlhttp.status){input.value=xmlhttp.responseText;input.name=td.id;}});}
input.value=value;input.name=td.id;input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var range=document.selection.createRange();range.moveEnd('character',-input.value.length+pos);range.select();}}
function bodyClick(event,db,ns){if(event.button||event.ctrlKey||event.shiftKey||event.altKey||event.metaKey){return;}
if(event.getPreventDefault?event.getPreventDefault():event.returnValue===false||event.defaultPrevented){return false;}
var el=event.target||event.srcElement;if(/^a$/i.test(el.parentNode.tagName)){el=el.parentNode;}
if(/^a$/i.test(el.tagName)&&!/:|#|&download=/i.test(el.getAttribute('href'))&&/[&?]username=/.test(el.href)){var match=/&db=([^&]*)/.exec(el.href);var match2=/&ns=([^&]*)/.exec(el.href);return!(db==(match?match[1]:'')&&ns==(match2?match2[1]:'')&&ajaxSend(el.href));}
if(/^input$/i.test(el.tagName)&&/image|submit/.test(el.type)){return!ajaxForm(el.form,(el.name?encodeURIComponent(el.name)+(el.type=='image'?'.x':'')+'=1':''),el.type=='image');}
return true;}
function eventStop(event){if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}}
function bodyLoad(version){if(history.state!==undefined){onpopstate(history);}}
function whisperClick(event,field){var el=event.target||event.srcElement;if(/^a$/i.test(el.tagName)&&!(event.button||event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){field.value=el.firstChild.data;field.previousSibling.value=decodeURIComponent(el.href.replace(/.*=/,''));field.nextSibling.style.display='none';eventStop(event);return false;}}
function whisper(url,field){if(field.orig!=field.value){field.orig=field.value;field.previousSibling.value=field.value;return ajax(url+encodeURIComponent(field.value),function(xmlhttp){if(xmlhttp.status&&field.orig==field.value){field.nextSibling.innerHTML=xmlhttp.responseText;field.nextSibling.style.display='';var a=field.nextSibling.firstChild;if(a&&a.firstChild.data==field.value){field.previousSibling.value=decodeURIComponent(a.href.replace(/.*=/,''));a.className='active';}}});}}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;case"loader.gif":echo
base64_decode("R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==");break;}}exit;}function
connection(){global$h;return$h;}function
adminer(){global$c;return$c;}function
idf_unescape($t){$gc=substr($t,-1);return
str_replace($gc.$gc,$gc,substr($t,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($Xc,$yb=false){if(get_magic_quotes_gpc()){while(list($w,$X)=each($Xc)){foreach($X
as$cc=>$W){unset($Xc[$w][$cc]);if(is_array($W)){$Xc[$w][stripslashes($cc)]=$W;$Xc[]=&$Xc[$w][stripslashes($cc)];}else{$Xc[$w][stripslashes($cc)]=($yb?$W:stripslashes($W));}}}}}function
bracket_escape($t,$ua=false){static$Od=array(':'=>':1',']'=>':2','['=>':3');return
strtr($t,($ua?array_flip($Od):$Od));}function
h($O){return
htmlspecialchars(str_replace("\0","",$O),ENT_QUOTES);}function
nbsp($O){return(trim($O)!=""?h($O):"&nbsp;");}function
nl_br($O){return
str_replace("\n","<br>",$O);}function
checkbox($A,$Y,$Ca,$ec="",$Dc="",$ac=false){static$s=0;$s++;$I="<input type='checkbox' name='$A' value='".h($Y)."'".($Ca?" checked":"").($Dc?' onclick="'.h($Dc).'"':'').($ac?" class='jsonly'":"")." id='checkbox-$s'>";return($ec!=""?"<label for='checkbox-$s'>$I".h($ec)."</label>":$I);}function
optionlist($Ic,$nd=null,$be=false){$I="";foreach($Ic
as$cc=>$W){$Jc=array($cc=>$W);if(is_array($W)){$I.='<optgroup label="'.h($cc).'">';$Jc=$W;}foreach($Jc
as$w=>$X){$I.='<option'.($be||is_string($w)?' value="'.h($w).'"':'').(($be||is_string($w)?(string)$w:$X)===$nd?' selected':'').'>'.h($X);}if(is_array($W)){$I.='</optgroup>';}}return$I;}function
html_select($A,$Ic,$Y="",$Cc=true){if($Cc){return"<select name='".h($A)."'".(is_string($Cc)?' onchange="'.h($Cc).'"':"").">".optionlist($Ic,$Y)."</select>";}$I="";foreach($Ic
as$w=>$X){$I.="<label><input type='radio' name='".h($A)."' value='".h($w)."'".($w==$Y?" checked":"").">".h($X)."</label>";}return$I;}function
confirm($Ka="",$wd=false){return" onclick=\"".($wd?"eventStop(event); ":"")."return confirm('".lang(0).($Ka?" (' + $Ka + ')":"")."');\"";}function
print_fieldset($s,$ic,$ge=false,$Dc=""){echo"<fieldset><legend><a href='#fieldset-$s' onclick=\"".h($Dc)."return !toggle('fieldset-$s');\">$ic</a></legend><div id='fieldset-$s'".($ge?"":" class='hidden'").">\n";}function
bold($za){return($za?" class='active'":"");}function
odd($I=' class="odd"'){static$r=0;if(!$I){$r=-1;}return($r++%
2?$I:'');}function
js_escape($O){return
addcslashes($O,"\r\n'\\/");}function
json_row($w,$X=null){static$zb=true;if($zb){echo"{";}if($w!=""){echo($zb?"":",")."\n\t\"".addcslashes($w,"\r\n\"\\").'": '.(isset($X)?'"'.addcslashes($X,"\r\n\"\\").'"':'undefined');$zb=false;}else{echo"\n}\n";$zb=true;}}function
ini_bool($Xb){$X=ini_get($Xb);return(eregi('^(on|true|yes)$',$X)||(int)$X);}function
sid(){static$I;if(!isset($I)){$I=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$I;}function
q($O){global$h;return$h->quote($O);}function
get_vals($G,$f=0){global$h;$I=array();$H=$h->query($G);if(is_object($H)){while($J=$H->fetch_row()){$I[]=$J[$f];}}return$I;}function
get_key_vals($G,$i=null){global$h;if(!is_object($i)){$i=$h;}$I=array();$H=$i->query($G);if(is_object($H)){while($J=$H->fetch_row()){$I[$J[0]]=$J[1];}}return$I;}function
get_rows($G,$i=null,$m="<p class='error'>"){global$h;if(!is_object($i)){$i=$h;}$I=array();$H=$i->query($G);if(is_object($H)){while($J=$H->fetch_assoc()){$I[]=$J;}}elseif(!$H&&$h->error&&$m&&defined("PAGE_HEADER")){echo$m.error()."\n";}return$I;}function
unique_array($J,$v){foreach($v
as$u){if(ereg("PRIMARY|UNIQUE",$u["type"])){$I=array();foreach($u["columns"]as$w){if(!isset($J[$w])){continue
2;}$I[$w]=$J[$w];}return$I;}}$I=array();foreach($J
as$w=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$w)){$I[$w]=$X;}}return$I;}function
where($Z){global$bc;$I=array();foreach((array)$Z["where"]as$w=>$X){$I[]=idf_escape(bracket_escape($w,1)).(ereg('\\.',$X)||$bc=="mssql"?" LIKE ".exact_value(addcslashes($X,"%_\\")):" = ".exact_value($X));}foreach((array)$Z["null"]as$w){$I[]=idf_escape($w)." IS NULL";}return
implode(" AND ",$I);}function
where_check($X){parse_str($X,$Ba);remove_slashes(array(&$Ba));return
where($Ba);}function
where_link($r,$f,$Y,$Fc="="){return"&where%5B$r%5D%5Bcol%5D=".urlencode($f)."&where%5B$r%5D%5Bop%5D=".urlencode((isset($Y)?$Fc:"IS NULL"))."&where%5B$r%5D%5Bval%5D=".urlencode($Y);}function
cookie($A,$Y){global$aa;$Pc=array($A,(ereg("\n",$Y)?"":$Y),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Pc[]=true;}return
call_user_func_array('setcookie',$Pc);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($w){return$_SESSION[$w][DRIVER][SERVER][$_GET["username"]];}function
set_session($w,$X){$_SESSION[$w][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Va,$M,$V){global$Wa;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Wa))."|username|".session_name()),$z);return"$z[1]?".(sid()?SID."&":"").($Va!="server"||$M!=""?urlencode($Va)."=".urlencode($M)."&":"")."username=".urlencode($V).($z[2]?"&$z[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($lc,$uc=null){if(isset($uc)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($lc)?$lc:$_SERVER["REQUEST_URI"]))][]=$uc;}if(isset($lc)){if($lc==""){$lc=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $lc");exit;}}function
query_redirect($G,$lc,$uc,$cd=true,$pb=true,$tb=false){global$h,$m,$c;if($pb){$tb=!$h->query($G);}$td="";if($G){$td=$c->messageQuery("$G;");}if($tb){$m=error().$td;return
false;}if($cd){redirect($lc,$uc.$td);}return
true;}function
queries($G=null){global$h;static$ad=array();if(!isset($G)){return
implode(";\n",$ad);}$ad[]=(ereg(';$',$G)?"DELIMITER ;;\n$G;\nDELIMITER ":$G);return$h->query($G);}function
apply_queries($G,$R,$lb='table'){foreach($R
as$P){if(!queries("$G ".$lb($P))){return
false;}}return
true;}function
queries_redirect($lc,$uc,$cd){return
query_redirect(queries(),$lc,$uc,$cd,false,!$cd);}function
remove_from_uri($Oc=""){return
substr(preg_replace("~(?<=[?&])($Oc".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($D,$Oa){return" ".($D==$Oa?$D+1:'<a href="'.h(remove_from_uri("page").($D?"&page=$D":"")).'">'.($D+1)."</a>");}function
get_file($w,$Pa=false){$vb=$_FILES[$w];if(!$vb||$vb["error"]){return$vb["error"];}$I=file_get_contents($Pa&&ereg('\\.gz$',$vb["name"])?"compress.zlib://$vb[tmp_name]":($Pa&&ereg('\\.bz2$',$vb["name"])?"compress.bzip2://$vb[tmp_name]":$vb["tmp_name"]));if($Pa){$ud=substr($I,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$ud,$dd)){$I=iconv("utf-16","utf-8",$I);}elseif($ud=="\xEF\xBB\xBF"){$I=substr($I,3);}}return$I;}function
upload_error($m){$sc=($m==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($m?lang(1).($sc?" ".lang(2,$sc):""):lang(3));}function
repeat_pattern($F,$jc){return
str_repeat("$F{0,65535}",$jc/65535)."$F{0,".($jc
%
65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($O,$jc=80,$Ad=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$jc).")($)?)u",$O,$z)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$jc).")($)?)",$O,$z);}return
h($z[1]).$Ad.(isset($z[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($Xc,$Tb=array()){while(list($w,$X)=each($Xc)){if(is_array($X)){foreach($X
as$cc=>$W){$Xc[$w."[$cc]"]=$W;}}elseif(!in_array($w,$Tb)){echo'<input type="hidden" name="'.h($w).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($P){global$c;$I=array();foreach($c->foreignKeys($P)as$p){foreach($p["source"]as$X){$I[$X][]=$p;}}return$I;}function
enum_input($U,$ra,$n,$Y,$fb=null){global$c;preg_match_all("~'((?:[^']|'')*)'~",$n["length"],$pc);$I=(isset($fb)?"<label><input type='$U'$ra value='$fb'".((is_array($Y)?in_array($fb,$Y):$Y===0)?" checked":"")."><i>".lang(4)."</i></label>":"");foreach($pc[1]as$r=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ca=(is_int($Y)?$Y==$r+1:(is_array($Y)?in_array($r+1,$Y):$Y===$X));$I.=" <label><input type='$U'$ra value='".($r+1)."'".($Ca?' checked':'').'>'.h($c->editVal($X,$n)).'</label>';}return$I;}function
input($n,$Y,$q){global$Rd,$c,$bc;$A=h(bracket_escape($n["field"]));echo"<td class='function'>";$gd=($bc=="mssql"&&$n["auto_increment"]);if($gd&&!$_POST["save"]){$q=null;}$Ib=(isset($_GET["select"])||$gd?array("orig"=>lang(5)):array())+$c->editFunctions($n);$ra=" name='fields[$A]'";if($n["type"]=="enum"){echo
nbsp($Ib[""])."<td>".$c->editInput($_GET["edit"],$n,$ra,$Y);}else{$zb=0;foreach($Ib
as$w=>$X){if($w===""||!$X){break;}$zb++;}$Cc=($zb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($n["field"])))."]']; if ($zb > f.selectedIndex) f.selectedIndex = $zb;\"":"");$ra.=$Cc;echo(count($Ib)>1?html_select("function[$A]",$Ib,!isset($q)||in_array($q,$Ib)||isset($Ib[$q])?$q:"","functionChange(this);"):nbsp(reset($Ib))).'<td>';$Zb=$c->editInput($_GET["edit"],$n,$ra,$Y);if($Zb!=""){echo$Zb;}elseif($n["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$n["length"],$pc);foreach($pc[1]as$r=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ca=(is_int($Y)?($Y>>$r)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$A][$r]' value='".(1<<$r)."'".($Ca?' checked':'')."$Cc>".h($c->editVal($X,$n)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$n["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$A'$Cc>";}elseif(ereg('text|lob',$n["type"])){echo"<textarea ".($bc!="sqlite"||ereg("\n",$Y)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$ra>".h($Y).'</textarea>';}else{$tc=(!ereg('int',$n["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$n["length"],$z)?((ereg("binary",$n["type"])?2:1)*$z[1]+($z[3]?1:0)+($z[2]&&!$n["unsigned"]?1:0)):($Rd[$n["type"]]?$Rd[$n["type"]]+($n["unsigned"]?0:1):0));echo"<input value='".h($Y)."'".($tc?" maxlength='$tc'":"").(ereg('char|binary',$n["type"])&&$tc>20?" size='40'":"")."$ra>";}}}function
process_input($n){global$c;$t=bracket_escape($n["field"]);$q=$_POST["function"][$t];$Y=$_POST["fields"][$t];if($n["type"]=="enum"){if($Y==-1){return
false;}if($Y==""){return"NULL";}return+$Y;}if($n["auto_increment"]&&$Y==""){return
null;}if($q=="orig"){return($n["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($n["field"]):false);}if($q=="NULL"){return"NULL";}if($n["type"]=="set"){return
array_sum((array)$Y);}if(ereg('blob|bytea|raw|file',$n["type"])&&ini_bool("file_uploads")){$vb=get_file("fields-$t");if(!is_string($vb)){return
false;}return
q($vb);}return$c->processInput($n,$Y,$q);}function
search_tables(){global$c,$h;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Eb=false;foreach(table_status()as$P=>$Q){$A=$c->tableName($Q);if(isset($Q["Engine"])&&$A!=""&&(!$_POST["tables"]||in_array($P,$_POST["tables"]))){$H=$h->query("SELECT".limit("1 FROM ".table($P)," WHERE ".implode(" AND ",$c->selectSearchProcess(fields($P),array())),1));if($H->fetch_row()){if(!$Eb){echo"<ul>\n";$Eb=true;}echo"<li><a href='".h(ME."select=".urlencode($P)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$A</a>\n";}}}echo($Eb?"</ul>":"<p class='message'>".lang(6))."\n";}function
dump_headers($Rb,$yc=false){global$c;$I=$c->dumpHeaders($Rb,$yc);$Mc=$_POST["output"];if($Mc!="text"){header("Content-Disposition: attachment; filename=".friendly_url($Rb!=""?$Rb:(SERVER!=""?SERVER:"localhost")).".$I".($Mc!="file"&&!ereg('[^0-9a-z]',$Mc)?".$Mc":""));}session_write_close();return$I;}function
dump_csv($J){foreach($J
as$w=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X===""){$J[$w]='"'.str_replace('"','""',$X).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$J)."\r\n";}function
apply_sql_function($q,$f){return($q?($q=="unixepoch"?"DATETIME($f, '$q')":($q=="count distinct"?"COUNT(DISTINCT ":strtoupper("$q("))."$f)"):$f);}function
password_file(){$Ta=ini_get("upload_tmp_dir");if(!$Ta){if(function_exists('sys_get_temp_dir')){$Ta=sys_get_temp_dir();}else{$wb=@tempnam("","");if(!$wb){return
false;}$Ta=dirname($wb);unlink($wb);}}$wb="$Ta/adminer.key";$I=@file_get_contents($wb);if($I){return$I;}$Gb=@fopen($wb,"w");if($Gb){$I=md5(uniqid(mt_rand(),true));fwrite($Gb,$I);fclose($Gb);}return$I;}function
is_mail($cb){$pa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Ua='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$F="$pa+(\\.$pa+)*@($Ua?\\.)+$Ua";return
preg_match("(^$F(,\\s*$F)*\$)i",$cb);}function
is_url($O){$Ua='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Ua?\\.)+$Ua(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$O,$z)?strtolower($z[1]):"");}global$c,$h,$Wa,$ab,$hb,$m,$Ib,$Lb,$aa,$Yb,$bc,$a,$fc,$Bc,$yd,$Nd,$T,$Rd,$Yd,$ba;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Pc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Pc[]=true;}call_user_func_array('session_set_cookie_params',$Pc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$yb);if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$fc=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','pl'=>'Polski','ca'=>'Català','pt'=>'Português','sl'=>'Slovenski','lt'=>'Lietuvių','tr'=>'Türkçe','ro'=>'Limba Română','ru'=>'Русский язык','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語','ta'=>'த‌மிழ்','ar'=>'العربية',);function
get_lang(){global$a;return$a;}function
lang($t,$B=null){global$a,$T;$Pd=$T[$t];if(is_array($Pd)){$Tc=($B==1?0:($a=='cs'||$a=='sk'?($B&&$B<5?1:2):($a=='fr'?(!$B?0:1):($a=='pl'?($B
%
10>1&&$B
%
10<5&&$B/10
%
10!=1?1:2):($a=='sl'?($B
%
100==1?0:($B
%
100==2?1:($B
%
100==3||$B
%
100==4?2:3))):($a=='lt'?($B
%
10==1&&$B
%
100!=11?0:($B
%
10>1&&$B/10
%
10!=1?1:2)):($a=='ru'?($B
%
10==1&&$B
%
100!=11?0:($B
%
10>1&&$B
%
10<5&&$B/10
%
10!=1?1:2)):1)))))));$Pd=$Pd[$Tc];}$oa=func_get_args();array_shift($oa);return
vsprintf((isset($Pd)?$Pd:$t),$oa);}function
switch_lang(){global$a,$fc;echo"<form action=''>\n<div id='lang'>";hidden_fields($_GET,array('lang'));echo
lang(7).": ".html_select("lang",$fc,$a,"var loc = location.search.replace(/[?&]lang=[^&]*/, ''); location.search = loc + (loc ? '&' : '') + 'lang=' + this.value;")," <input type='submit' value='".lang(8)."' class='hidden'>\n","</div>\n</form>\n";}if(isset($_GET["lang"])){$_COOKIE["adminer_lang"]=$_GET["lang"];$_SESSION["lang"]=$_GET["lang"];}$a="en";if(isset($fc[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$a=$_COOKIE["adminer_lang"];}elseif(isset($fc[$_SESSION["lang"]])){$a=$_SESSION["lang"];}else{$ja=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$pc,PREG_SET_ORDER);foreach($pc
as$z){$ja[$z[1]]=(isset($z[3])?$z[3]:1);}arsort($ja);foreach($ja
as$w=>$Zc){if(isset($fc[$w])){$a=$w;break;}$w=preg_replace('~-.*~','',$w);if(!isset($ja[$w])&&isset($fc[$w])){$a=$w;break;}}}switch($a){case"en":$T=array('Are you sure?','Unable to upload a file.','Maximum allowed file size is %sB.','File does not exist.','empty','original','No tables.','Language','Use','Please use one of the extensions %s.','File exists.','User types','Numbers','Date and time','Strings','Binary','Network','Geometry','Lists','Editor','Username','Password','Login','Permanent login','New item','Last page',array('%d byte','%d bytes'),'$1-$3-$5','Search','anywhere','Sort','Limit','Action','Select','E-mail','From','Subject','Insert','Attachments','Send',array('%d e-mail has been sent.','%d e-mails have been sent.'),'now','HH:MM:SS','[yyyy]-mm-dd','Logout','Select data','ltr','Resend POST data?','Server','Invalid CSRF token. Send the form again.','Logout successful.','Session support must be enabled.','Session expired, please login again.','Invalid credentials.','No extension','None of the supported PHP extensions (%s) are available.','Too big POST data. Reduce the data or increase the %s configuration directive.','Item has been deleted.','Item has been updated.','Item%s has been inserted.','Edit','No rows.','Save','Save and continue edit','Save and insert next','Delete',array('%d item has been affected.','%d items have been affected.'),'Double click on a value to modify it.',array('%d row has been imported.','%d rows have been imported.'),'Unable to select the table','edit','Relations','Use edit link to modify this value.','Page','last',array('%d row','%d rows'),'whole result','Clone','Export','Import','Search data in tables','Table','Rows',',',array('%d query executed OK.','%d queries executed OK.'));break;case"cs":$T=array('Opravdu?','Nepodařilo se nahrát soubor.','Maximální povolená velikost souboru je %sB.','Soubor neexistuje.','prázdné','původní','Žádné tabulky.','Jazyk','Vybrat','Prosím použijte jednu z koncovek %s.','Soubor existuje.','Uživatelské typy','Čísla','Datum a čas','Řetězce','Binární','Síť','Geometrie','Seznamy','Editor','Uživatel','Heslo','Přihlásit se','Trvalé přihlášení','Nová položka','Poslední stránka',array('%d bajt','%d bajty','%d bajtů'),'$6.$4.$1','Vyhledat','kdekoliv','Seřadit','Limit','Akce','Vypsat','E-mail','Odesílatel','Předmět','Vložit','Přílohy','Odeslat',array('Byl odeslán %d e-mail.','Byly odeslány %d e-maily.','Bylo odesláno %d e-mailů.'),'teď','HH:MM:SS','d.m.[rrrr]','Odhlásit','Vypsat data','ltr','Znovu odeslat POST data?','Server','Neplatný token CSRF. Odešlete formulář znovu.','Odhlášení proběhlo v pořádku.','Session proměnné musí být povolené.','Session vypršela, přihlašte se prosím znovu.','Neplatné přihlašovací údaje.','Žádná extenze','Není dostupná žádná z podporovaných PHP extenzí (%s).','Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','Položka byla smazána.','Položka byla aktualizována.','Položka%s byla vložena.','Upravit','Žádné řádky.','Uložit','Uložit a pokračovat v editaci','Uložit a vložit další','Smazat',array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),'Dvojklikněte na políčko, které chcete změnit.',array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),'Nepodařilo se vypsat tabulku','upravit','Vztahy','Ke změně této hodnoty použijte odkaz upravit.','Stránka','poslední',array('%d řádek','%d řádky','%d řádků'),'celý výsledek','Klonovat','Export','Import','Vyhledat data v tabulkách','Tabulka','Řádků',' ','Pozměnit typ');break;case"sk":$T=array('Naozaj?','Súbor sa nepodarilo nahrať.','Maximálna povolená veľkosť súboru je %sB.','Súbor neexistuje.','prázdne','originál','Žiadne tabuľky.','Jazyk','Vybrať','Prosím vyberte jednu z koncoviek %s.','Súbor existuje.','Užívateľské typy','Čísla','Dátum a čas','Reťazce','Binárne','Sieť','Geometria','Zoznamy','Editor','Používateľ','Heslo','Prihlásiť sa','Trvalé prihlásenie','Nová položka','Posledná stránka',array('%d bajt','%d bajty','%d bajtov'),'$6.$4.$1','Vyhľadať','kdekoľvek','Zotriediť','Limit','Akcia','Vypísať','E-mail','Odosielateľ','Predmet','Vložiť','Prílohy','Odoslať',array('Bol odoslaný %d e-mail.','Boli odoslané %d e-maily.','Bolo odoslaných %d e-mailov.'),'teraz','HH:MM:SS','d.m.[rrrr]','Odhlásiť','Vypísať dáta','ltr','Znovu poslať POST data?','Server','Neplatný token CSRF. Odošlite formulár znova.','Odhlásenie prebehlo v poriadku.','Session premenné musia byť povolené.','Session vypršala, prihláste sa prosím znova.','Neplatné prihlasovacie údaje.','Žiadne rozšírenie','Nie je dostupné žiadne z podporovaných rozšírení (%s).','Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','Položka bola vymazaná.','Položka bola aktualizovaná.','Položka%s bola vložená.','Upraviť','Žiadne riadky.','Uložiť','Uložiť a pokračovať v úpravách','Uložiť a vložiť ďalší','Zmazať','%d položiek bolo ovplyvnených.','Dvojkliknite na políčko, ktoré chcete zmeniť.',array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),'Tabuľku sa nepodarilo vypísať','upraviť','Vzťahy','Pre zmenu tejto hodnoty použite odkaz upraviť.','Stránka','posledný',array('%d riadok','%d riadky','%d riadkov'),'celý výsledok','Klonovať','Export','Import','Vyhľadať dáta v tabuľkách','Tabuľka','Riadky',' ','Upraviť všetko');break;case"nl":$T=array('Weet u het zeker?','Onmogelijk bestand te uploaden.','Maximum toegelaten bestandsgrootte is %sB.','Bestand niet gevonden.','leeg','origineel','Geen tabellen.','Taal','Gebruik','Gebruik 1 van volgende extensies: %s.','Bestand bestaat reeds.','Gebruikersgedefiniëerde types','Getallen','Datum en tijd','Tekst','Binaire gegevens','Netwerk','Geometrie','Lijsten','Editor','Gebruikersnaam','Wachtwoord','Inloggen','Blijf aangemeld','Nieuw item','Laatste pagina',array('%d byte','%d bytes'),'$5-$3-$1','Zoeken','overal','Sorteren','Beperk','Acties','Kies','E-mail','Van','Onderwerp','Toevoegen','Bijlagen','Verzenden',array('%d e-mail verzonden.','%d e-mails verzonden.'),'nu','HH:MM:SS','dd-mm-[jjjj]','Uitloggen','Gegevens selecteren','ltr','POST data opnieuw verzenden','Server','Ongeldig CSRF token. Verstuur het formulier opnieuw.','Uitloggen geslaagd.','Sessies moeten geactiveerd zijn.','Uw sessie is verlopen. Gelieve opnieuw in te loggen.','Ongeldige logingegevens.','Geen extensie','Geen geldige PHP extensies beschikbaar (%s).','POST-data is te groot. Verklein de hoeveelheid data of verhoog de %s configuratie.','Item verwijderd.','Item aangepast.','Item%s toegevoegd.','Bewerk','Geen rijen.','Opslaan','Opslaan en verder bewerken','Opslaan, daarna toevoegen','Verwijderen',array('%d item aangepast.','%d items aangepast.'),'Dubbelklik op een waarde om deze te bewerken.',array('%d rij werd geïmporteerd.','%d rijen werden geïmporteerd.'),'Onmogelijk tabel te selecteren','bewerk','Relaties','Gebruik de link "bewerk" om deze waarde te wijzigen.','Pagina','laatste',array('%d rij','%d rijen'),'volledig resultaat','Dupliceer','Exporteren','Importeren','Zoeken in database','Tabel','Rijen','.','Alles bewerken');break;case"es":$T=array('Está seguro?','No es posible importar archivo.','Tamaño máximo de archivo es %sB.','Archivo no existe.','ningúno','original','No existen tablas.','Idioma','Usar','Por favor use una de las extensiones %s.','Archivo ya existe.','Tipos definido por el usuario','Números','Fecha y hora','Cadena','Binario','Red','Geometría','Listas','Editor','Usuario','Contraseña','Login','Guardar contraseña','Nuevo Registro','Ultima página',array('%d byte','%d bytes'),'$5/$3/$1','Condición','donde sea','Ordenar','Limit','Acción','Mostrar','Email','De','Asunto','Agregar','Adjuntos','Enviar',array('%d email enviado.','%d emails enviados.'),'ahora','HH:MM:SS','dd/mm/[aaaa]','Logout','Visualizar contenido','ltr','Volver a enviar POST data?','Servidor','Token CSRF inválido. Vuelva a enviar los datos del formulario.','Salida exitosa.','Deben estar habilitadas las sesiones.','Sesión expirada, por favor ingrese su clave de nuevo.','Identificacion inválida.','No hay extension','Ninguna de las extensiones PHP soportadas (%s) está disponible.','POST data demasiado grande. Reduzca el tamaño o aumente la directiva de configuración %s.','Registro eliminado.','Registro modificado.','Registro%s insertado.','Modificar','No existen registros.','Guardar','Guardar y continuar editando','Guardar e insertar otro','Eliminar',array('%d ítem afectado.','%d itemes afectados.'),'Doble-clic sobre el valor para editarlo.',array('%d registro importado.','%d registros importados.'),'No es posible seleccionar la tabla','modificar','Relaciones','Utilice el enlace de modificar para realizar los cambios.','Página','último',array('%d registro','%d registros'),'resultado completo','Clonar','Exportar','Importar','Buscar datos en tablas','Tabla','Registros',' ','Editar todos');break;case"de":$T=array('Sind Sie sicher ?','Hochladen von Datei fehlgeschlagen.','Maximal erlaubte Dateigrösse ist %sB.','Datei existiert nicht.','leer','Original','Keine Tabellen.','Sprache','Benutzung','Bitte einen der Dateitypen %s benutzen.','Datei existiert schon.','Benutzer-definierte Typen','Zahlen','Datum oder Zeit','Zeichenketten','Binär','Netzwerk','Geometrie','Listen','Editor','Benutzer','Passwort','Login','Passwort speichern','Neuer Datensatz','Letzte Seite',array('%d Byte','%d Bytes'),'$6.$4.$1','Suchen','beliebig','Ordnen','Begrenzung','Aktion','Daten zeigen von','E-mail','Von','Betreff','Hinzufügen','Anhänge','Abschicken',array('%d e-mail abgeschickt.','%d e-mails abgeschickt.'),'jetzt','HH:MM:SS','t.m.[jjjj]','Abmelden','Daten auswählen','ltr','POST data noch einmal senden ?','Server','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.','Abmeldung erfolgreich.','Sitzungen müssen aktiviert sein.','Sitzungsdauer abgelaufen, bitte erneut anmelden.','Ungültige Anmelde-Informationen.','Keine Erweiterungen installiert','Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.','POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','Datensatz gelöscht.','Datensatz geändert.','Datensatz%s hinzugefügt.','Ändern','Keine Daten.','Speichern','Speichern und weiter bearbeiten','Speichern und nächsten hinzufügen','Entfernen','%d Artikel betroffen.','Doppelklick zum Bearbeiten des Wertes.',array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),'Auswahl der Tabelle fehlgeschlagen','ändern','Relationen','Benutzen Sie den Link zum editieren dieses Wertes.','Seite','letzte',array('%d Datensatz','%d Datensätze'),'Gesamtergebnis','Klonen','Exportieren','Importieren','Suche in Tabellen','Tabelle','Datensätze',' ','Alle ändern');break;case"fr":$T=array('Êtes-vous certain ?','Impossible d\'importer le fichier.','La taille maximale des fichiers est de %sB.','Le fichier est introuvable.','vide','original','Aucune table.','Langue','Utiliser','Veuillez utiliser l\'une des extensions %s.','Le fichier existe.','Types utilisateur','Nombres','Date et heure','Chaînes','Binaires','Réseau','Géométrie','Listes','Éditeur','Utilisateur','Mot de passe','Authentification','Authentification permanente','Nouvel élément','Dernière page',array('%d octet','%d octets'),'$5/$3/$1','Rechercher','n\'importe où','Trier','Limite','Action','Select','Courriel','De','Sujet','Insérer','Pièces jointes','Envoyer',array('%d message a été envoyé.','%d messages ont été envoyés.'),'maintenant','HH:MM:SS','jj/mm/[aaaa]','Déconnexion','Afficher les données','ltr','Renvoyer les données POST ?','Serveur','Token CSRF invalide. Veuillez réenvoyer le formulaire.','Au revoir !','Veuillez activer les sessions.','Session expirée, veuillez vous authentifier à nouveau.','Authentification échouée.','Extension introuvable','Aucune des extensions PHP supportées (%s) n\'est disponible.','Données POST trop grandes. Réduisez la taille des données ou augmentez la valeur de %s dans la configuration de PHP.','L\'élément a été supprimé.','L\'élément a été modifié.','L\'élément%s a été inséré.','Modifier','Aucun résultat.','Sauvegarder','Sauvegarder et continuer l\'édition','Sauvegarder et insérer le prochain','Effacer',array('%d élément a été modifié.','%d éléments ont été modifiés.'),'Double-cliquez sur une valeur pour la modifier.',array('%d ligne a été importée.','%d lignes ont été importées.'),'Impossible de sélectionner la table','modifier','Relations','Utilisez le lien "modifier" pour modifier cette valeur.','Page','dernière',array('%d ligne','%d lignes'),'résultat entier','Cloner','Exporter','Importer','Rechercher dans les tables','Table','Lignes',',','Tout modifier');break;case"it":$T=array('Sicuro?','Caricamento del file non riuscito.','La dimensione massima del file è %sB.','Il file non esiste.','vuoto','originale','No tabelle.','Lingua','Usa','Usa una delle estensioni %s.','Il file esiste già.','Tipi definiti dall\'utente','Numeri','Data e ora','Stringhe','Binari','Rete','Geometria','Liste','Editor','Utente','Password','Autenticazione','Login permanente','Nuovo elemento','Ultima pagina',array('%d byte','%d bytes'),'$5/$3/$1','Cerca','ovunque','Ordina','Limite','Azione','Seleziona','E-mail','Da','Oggetto','Inserisci','Allegati','Invia',array('%d e-mail inviata.','%d e-mail inviate.'),'adesso','HH:MM:SS','dd/mm/[yyyy]','Esci','Visualizza dati','ltr','Reinvio i dati POST?','Server','Token CSRF non valido. Reinvia la richiesta.','Uscita effettuata con successo.','Le sessioni devono essere abilitate.','Sessione scaduta, autenticarsi di nuovo.','Credenziali non valide.','Estensioni non presenti','Nessuna delle estensioni PHP supportate (%s) disponibile.','Troppi dati via POST. Ridurre i dati o aumentare la direttiva di configurazione %s.','Elemento eliminato.','Elemento aggiornato.','Elemento%s inserito.','Modifica','Nessuna riga.','Salva','Salva e continua','Salva e inserisci un altro','Elimina',array('Il risultato consiste in %d elemento.','Il risultato consiste in %d elementi.'),'Fai doppio click su un valore per modificarlo.',array('%d riga importata.','%d righe importate.'),'Selezione della tabella non riuscita','modifica','Relazioni','Usa il link modifica per modificare questo valore.','Pagina','ultima',array('%d riga','%d righe'),'intero risultato','Clona','Esporta','Importa','Cerca nelle tabelle','Tabella','Righe','.','Modifica tutto');break;case"et":$T=array('Kas oled kindel?','Faili üleslaadimine pole võimalik.','Maksimaalne failisuurus %sB.','Faili ei leitud.','tühi','originaal','Tabeleid ei leitud.','Keel','Kasuta','Palun kasuta üht laiendustest %s.','Fail juba eksisteerib.','Kasutajatüübid','Numbrilised','Kuupäev ja kellaaeg','Tekstid','Binaar','Võrk (network)','Geomeetria','Listid','Redaktor','Kasutajanimi','Parool','Logi sisse','Jäta mind meelde','Lisa kirje','Viimane lehekülg',array('%d bait','%d baiti'),'$6.$4.$1','Otsi','vahet pole','Sorteeri','Piira','Tegevus','Kuva','E-post','Kellelt','Pealkiri','Sisesta','Manused','Saada','Saadetud kirju: %d.','nüüd','HH:MM:SS','d.m.[yyyy]','Logi välja','Vaata andmeid','ltr','Saada POST andmed uuesti?','Server','Sobimatu CSRF, palun postitage vorm uuesti.','Väljalogimine õnnestus.','Sessioonid peavad olema lubatud.','Sessioon on aegunud, palun logige uuesti sisse.','Ebakorrektsed andmed.','Ei leitud laiendust','Serveris pole ühtegi toetatud PHP laiendustest (%s).','POST-andmete maht on liialt suur. Palun vähendage andmeid või suurendage %s php-seadet.','Kustutamine õnnestus.','Uuendamine õnnestus.','Kirje%s on edukalt lisatud.','Muuda','Sissekanded puuduvad.','Salvesta','Salvesta ja jätka muutmist','Salvesta ja lisa järgmine','Kustuta','Mõjutatud kirjeid: %d.','Väärtuse muutmiseks topelt-kliki sellel.','Imporditi %d rida.','Tabeli valimine ebaõnnestus','muuda','Seosed','Väärtuse muutmiseks kasuta muutmislinki.','Lehekülg','viimane','%d rida','Täielikud tulemused','Kloon','Ekspordi','Impordi','Otsi kogu andmebaasist','Tabel','Ridu',',','Muuda kõiki');break;case"hu":$T=array('Biztos benne?','Nem tudom feltölteni a fájlt.','A maximális fájlméret %s B.','A fájl nem létezik.','üres','eredeti','Nincs tábla.','Nyelv','Használ','Használja a(z) %s kiterjesztést.','A fájl létezik.','Felhasználói típus','Szám','Dátum és idő','Szöveg','Bináris','Hálózat','Geometria','Lista','Szerkesztő','Felhasználó','Jelszó','Belépés','Emlékezz rám','Új tétel','Utolsó oldal',array('%d bájt','%d bájt','%d bájt'),'$6.$4.$1','Keresés','bárhol','Sorba rendezés','korlát','Művelet','Kiválasztás','E-mail','Feladó','Tárgy','Beszúr','Csatolmány','Küldés',array('%d e-mail elküldve.','%d e-mail elküldve.','%d e-mail elküldve.'),'most','óó:pp:mm','[yyyy].m.d','Kilépés','Tartalom','ltr','Újraküldi a POST adatokat?','Szerver','Érvénytelen CSRF azonosító. Küldd újra az űrlapot.','Sikeres kilépés.','A munkameneteknek (session) engedélyezve kell lennie.','Munkamenet lejárt, jelentkezz be újra.','Érvénytelen adatok.','Nincs kiterjesztés','Nincs egy elérhető támogatott PHP kiterjesztés (%s) sem.','Túl sok a POST adat! Csökkentsd az adat méretét, vagy növeld a %s beállítást.','A tétel törölve.','A tétel frissítve.','%s tétel beszúrva.','Szerkeszt','Nincs megjeleníthető eredmény.','Mentés','Mentés és szerkesztés folytatása','Mentés és újat beszúr','Törlés',array('%d tétel érintett.','%d tétel érintett.','%d tétel érintett.'),'Kattints kétszer az értékre a szerkesztéshez.',array('%d sor importálva.','%d sor importálva.','%d sor importálva.'),'Nem tudom kiválasztani a táblát','szerkeszt','Reláció','Használd a szerkesztés hivatkozást ezen érték módosításához.','oldal','utolsó',array('%d sor','%d sor','%d sor'),'összes eredményt mutatása','Klónoz','Export','Importálás','Keresés a táblákban','Tábla','Oszlop',' ','Összes szerkesztése');break;case"pl":$T=array('Czy jesteś pewien?','Wgranie pliku było niemożliwe.','Maksymalna wielkość pliku to %sB.','Plik nie istnieje.','puste','bez zmian','Brak tabel.','Język','Wybierz','Proszę użyć jednego z rozszerzeń: %s.','Plik już istnieje.','Typy użytkownika','Numeryczne','Data i czas','Tekstowe','Binarne','Sieć','Geometria','Listy','Edytor','Użytkownik','Hasło','Zaloguj się','Zapamiętaj sesję','Nowy rekord','Ostatnia strona',array('%d bajt','%d bajty','%d bajtów'),'$6.$4.$1','Szukaj','gdziekolwiek','Sortuj','Limit','Czynność','pokaż','E-mail','Nadawca','Temat','Dodaj','Załączniki','Wyślij',array('Wysłano %d e-mail.','Wysłano %d e-maile.','Wysłano %d e-maili.'),'teraz','HH:MM:SS','d.m.[rrrr]','Wyloguj','Pokaż dane','ltr','Wysłać dane ponownie?','Serwer','Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.','Wylogowano pomyślnie.','Wymagana jest obsługa sesji w PHP.','Sesja wygasła, zaloguj się ponownie.','Nieprawidłowe dane logowania.','Brak rozszerzenia','Żadne z rozszerzeń PHP umożliwiających połączenie się z bazą danych (%s) nie jest dostępne.','Przesłano zbyt dużo danych. Zmniejsz objętość danych lub zwiększ zmienną konfiguracyjną %s.','Rekord został usunięty.','Rekord został zaktualizowany.','Rekord%s został dodany.','Edytuj','Brak rekordów.','Zapisz zmiany','Zapisz i kontynuuj edycję','Zapisz i dodaj następny','Usuń',array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),'Kliknij podwójnie wartość, aby ją edytować.',array('%d rekord został zaimportowany.','%d rekordy zostały zaimportowane.','%d rekordów zostało zaimportowanych.'),'Nie udało się pobrać danych z tabeli','edytuj','Relacje','Użyj linku edycji aby zmienić tę wartość.','Strona','ostatni',array('%d rekord','%d rekordy','%d rekordów'),'wybierz wszystkie','Duplikuj','Eksport','Import','Wyszukaj we wszystkich tabelach','Tabela','Liczba rekordów',' ','Zmień typ');break;case"ca":$T=array('Estàs segur?','Impossible adjuntar el fitxer.','La mida màxima permesa del fitxer és de %sB.','El fitxer no existeix.','buit','original','No hi ha cap taula.','Idioma','Utilitza','Si us plau, utilitza una de les extensions %s.','El fitxer ja existeix.','Tipus de l\'usuari','Nombres','Data i hora','Cadenes','Binari','Xarxa','Geometria','Llistes','Editor','Nom d\'usuari','Contrasenya','Inicia la sessió','Sessió permanent','Nou element','Darrera plana',array('%d byte','%d bytes'),'$5/$3/$1','Cerca','a qualsevol lloc','Ordena','Límit','Acció','Selecciona','Correu electrònic','De','Assumpte','Insereix','Adjuncions','Envia',array('S\'ha enviat %d correu electrònic.','S\'han enviat %d correus electrònics.'),'ara','HH:MM:SS','dd/mm/[aaaa]','Desconnecta','Selecciona dades','ltr','Torna a enviar les dades POST?','Servidor','Token CSRF invàlid. Torna a enviar el formulari.','Desconnexió correcta.','Cal que estigui permès l\'us de sessions.','La sessió ha expirat, torna a iniciar-ne una.','Credencials invàlids.','Cap extensió','No hi ha cap de les extensions PHP soporatades (%s) disponible.','Les dades POST són massa grans. Redueix les dades o incrementa la directiva de configuració %s.','S\'ha suprmit l\'element.','S\'ha actualitzat l\'element.','S\'ha insertat l\'element%s.','Edita','No hi ha cap registre.','Desa','Desa i segueix editant','Desa i insereix el següent','Suprimeix',array('S\'ha modificat %d element.','S\'han modificat %d elements.'),'Fes un doble clic a un valor per modificar-lo.',array('S\'ha importat %d registre.','S\'han importat %d registres.'),'Impossible seleccionar la taula','edita','Relacions','Utilitza l\'enllaç d\'edició per modificar aquest valor.','Plana','darrera',array('%d registre','%d registres'),'tots els resultats','Clona','Exporta','Importa','Cerca dades en les taules','Taula','Files',',','Edita-ho tot');break;case"pt":$T=array('Está seguro?','Não é possivel enviar o arquivo.','Tamanho máximo do arquivo é %sB.','Arquivo não existe.','vazio','original','Não existem tabelas.','Idioma','Usar','Por favor use uma das extensões %s.','Arquivo ja existe.','Tipos definido pelo usuario','Números','Data e hora','Cadena','Binario','Rede','Geometría','Listas','Editor','Usuario','Senha','Entrar','Salvar Senha','Novo Registro','Ultima página',array('%d byte','%d bytes'),'$5/$3/$1','Procurar','qualquer local','Ordenar','Limite','Ação','Selecionar','E-mail','De','Assunto','Inserir','Anexos','Enviar',array('%d email enviado.','%d emails enviados.'),'agora','HH:MM:SS','dd/mm/[aaaa]','Sair','Selecionar dados','ltr','Resend POST data?','Servidor','Token CSRF inválido. Enviar o formulario novamente.','Saida bem sucedida.','Devem estar habilitadas as sessões.','Sessão expirada, por favor entre sua Chave de novo.','Identificação inválida.','Não ha extension','Nenhuma das extensões PHP soportadas (%s) está disponivel.','POST data demasiado grande. Reduza o tamanho ou aumente a diretiva de configuração %s.','Registro eliminado.','Registro modificado.','Registro%s inserido.','Modificar','Não existem registros.','Salvar','Salvar e continuar editando','Salvar e inserir outro','Apagar',array('%d ítem afetado.','%d itens afetados.'),'Doble-clic sobre o valor para edita-lo.',array('%d registro importado.','%d registros importados.'),'Não é possivel selecionar a Tabela','modificar','Relações','Utilize o link modificar para alterar.','Página','último',array('%d registro','%d registros'),'resultado completo','Clonar','Exportar','Importar','Buscar dados nas Tabelas','Tabela','Registros',' ','Esquema inválido.');break;case"sl":$T=array('Ste prepričani?','Ne morem naložiti datoteke.','Največja velikost datoteke je %sB.','Datoteka ne obstaja.','prazno','original','Ni tabel.','Jezik','Uporabi','Prosim, uporabite enega od dodatkov %s.','Datoteka obstaja.','Uporabniški tipi','Števila','Datum in čas','Nizi','Binarni','Mrežni','Geometrčni','Seznami','Urejevalnik','Uporabniško ime','Geslo','Prijavi se','Trajna prijava','Nov predmet','Zadnja stran',array('%d bajt','%d bajta','%d bajti','%d bajtov'),'$6.$4.$1','Išči','kjerkoli','Sortiraj','Limita','Dejanje','Izberi','E-mail','Od','Zadeva','Vstavi','Priponke','Pošlji',array('Poslan je %d e-mail.','Poslana sta %d e-maila.','Poslani so %d e-maili.','Poslanih je %d e-mailov.'),'zdaj','HH:MM:SS','d.m.[rrrr]','Odjavi se','Izberi podatke','ltr','Resend POST data?','Strežnik','Neveljaven token CSRF. Pošljite formular še enkrat.','Prijava uspešna.','Podpora za seje mora biti omogočena.','Seja je potekla. Prosimo, ponovno se prijavite.','Neveljavne pravice.','Brez dodatkov','Noben od podprtih dodatkov za PHP (%s) ni na voljo.','Preveliko podatkov za POST. Zmanjšajte število podatkov ali povečajte nastavitev za %s.','Predmet je izbrisan.','Predmet je posodobljen.','Predmet%s je vstavljen.','Uredi','Ni vrstic.','Shrani','Shrani in nadaljuj z urejanjem','Shrani in vstavi tekst','Izbriši',array('Spremenjen je %d predmet.','Spremenjena sta %d predmeta.','Spremenjeni so %d predmeti.','Spremenjenih je %d predmetov.'),'Dvojni klik na vrednost za urejanje.',array('Uvožena je %d vrstica.','Uvoženi sta %d vrstici.','Uvožene so %d vrstice.','Uvoženih je %d vrstic.'),'Ne morem izbrati tabele','uredi','Relacijski','Uporabite urejanje povezave za spreminjanje te vrednosti.','Stran','Zadnja',array('%d vrstica','%d vrstici','%d vrstice','%d vrstic'),'cel razultat','Kloniraj','Izvozi','Uvozi','Išče podatke po tabelah','Tabela','Vrstic',' ','Spremeni tip');break;case"lt":$T=array('Tikrai?','Nepavyko įkelti failo.','Maksimalus failo dydis - %sB.','Failas neegzistuoja.','tuščia','originalas','Nėra lentelių.','Kalba','Naudoti','Naudokite vieną iš plėtinių %s.','Failas egzistuoja.','Vartotojų tipai','Skaičiai','Data ir laikas','Tekstas','Dvejetainis','Tinklas','Geometrija','Sąrašai','Redaktorius','Vartotojas','Slaptažodis','Prisijungti','Pastovus prisijungimas','Naujas įrašas','Paskutinis puslapis',array('%d baitas','%d baigai','%d baitų'),'$1-$3-$5','Ieškoti','visur','Rikiuoti','Limitas','Veiksmas','Atrinkti','El. paštas','Nuo','Antraštė','Įrašyti','Priedai','Siųsti',array('Išsiųstas %d laiškas.','Išsiųsti %d laiškai.','Išsiųsta %d laiškų.'),'dabar','HH:MM:SS','[yyyy]-mm-dd','Atsijungti','Atrinkti duomenis','ltr','Persiųsti POST duomenis?','Serveris','Neteisingas CSRF tokenas. Bandykite siųsti formos duomenis dar kartą.','Jūs atsijungėte nuo sistemos.','Sesijų palaikymas turi būti įjungtas.','Sesijos galiojimas baigėsi. Prisijunkite iš naujo.','Neteisingi prisijungimo duomenys.','Nėra plėtiio','Nėra nei vieno iš palaikomų PHP plėtinių (%s).','Per daug POST duomenų. Sumažinkite duomenų kiekį arba padidinkite konfigūracijos nustatymą %s.','Įrašas ištrintas.','Įrašas pakeistas.','Įrašas%s sukurtas.','Redaguoti','Nėra įrašų.','Išsaugoti','Išsaugoti ir tęsti redagavimą','Išsaugoti ir įrašyti kitą','Trinti',array('Pakeistas %d įrašas.','Pakeisti %d įrašai.','Pakeistas %d įrašų.'),'Du kartus spragtelėkite pelyte norėdami redaguoti.',array('%d įrašas įkelta.','%d įrašai įkelti.','%d įrašų įkelta.'),'Neįmanoma atrinkti lentelės','redaguoti','Ryšiai','Norėdami redaguoti reikšmę naudokite redagavimo nuorodą.','Puslapis','paskutinis',array('%d įrašas','%d įrašai','%d įrašų'),'visas rezultatas','Klonuoti','Eksportas','Importas','Ieškoti duomenų lentelėse','Lentelė','Įrašai',' ','Keisti tipą');break;case"tr":$T=array('Emin misin?','Dosya gönderilemiyor.','Bir dosya için izin verilen dosya sınırı %sB.','Dosya mevcut değil.','boş','orijinal','Tablo yok.','Dil','Kullan','%s uzantılarından birini kullanın.','Dosya mevcut.','Kullanıcı türleri','Sayılar','Tarih ve zaman','Sözcükler','İkili','Ağ','Geometri','Listeler','Düzenleyici','Kullanıcı','Parola','Giriş','Kalıcı giriş','Yeni öğe','Son sayfa',array('%d bayt','%d kadar bayt'),'$6.$4.$1','Arama','herhangi bir yer','Sırala','sınır','Eylem','Seç','E-posta','Gönderen','Konu','Ekle','Ekler','Gönder',array('%d e-posta dönderildi.','%d kadar e-posta gönderildi.'),'şimdi','HH:MM:SS','d.m.[rrrr]','Çıkış','Veri seç','ltr','Resend POST data?','Sunucu','Geçersiz Cross-site request forgery (CSRF) jetonu. Forumu tekrar yolla.','Başarıyla çıkıldı.','Oturum desteği etkin olmalıdır.','Oturum süresi doldu, lütfen tekrar giriş yapın.','Geçersiz kimlik.','Uzantı yok','Desteklenen PHP uzantılarından (%s) hiçbiri mevcut değil.','Çok büyük POST verisi, veriyi azaltın ya da ayar yönergesini uygun olarak yapılandırın.','Öğe silindi.','Öğe güncellendi.','Öğeler eklendi.','Düzen','Sıra yok.','Kaydet','Kaydet ve düzenlemeye devam et','Kaydet ve sonrakin ekle','Sil',array('%d öğe etkilendi.','%d kadar öğe etkilendi.'),'Değerin üzerine çift tıklayın ve değiştirin.',array('%d sıra ithal edildi.','%d kadar sıra ithal edildi.'),'Tablo seçilemedi','düzen','İlişkiler','Değeri değiştirmek için düzenleme bağlantısını kullanın.','Sayfa','son',array('%d sıra)','%d kadar sıra'),'tüm sonuç','Klonla','İhraç','İthal','Tablolarda veri ara.','Tablo','Sıralar (Rows)',' ','Tür değiştir');break;case"ro":$T=array('Ești precis?','Nu am putut încărca fișierul pe server.','Fișierul maxim admis - %sO.','Așa fișier nu există.','gol','original','În baza de date nu sunt tabele.','Limba','Alege','Folosiți una din următoarele extensii %s.','Fișierul deja există.','Tipuri de utilizatori','Număr','Data și timpul','Șire de caractere','Tip binar','Rețea','Geometrie','Liste','Editor','Nume de utilizator','Parola','Intră','Logare permanentă','Înscriere nouă','Ultima pagină',array('%d octet','%d octeți'),'$5.$3.$1','Căutare','oriunde','Sortare','Limit','Acțiune','Selectează','Poșta electronică','De la','Pentru','Inserează','Fișiere atașate','Trimite',array('A fost trimisă %d scrisoare.','Au fost trimise %d scrisori.'),'acum','HH:MM:SS','dd.mm.[yyyy]','Eșire','Selectează','ltr','Retrimite datele POST?','Server','CSRF token imposibil. Retrimite forma.','Ați eșit cu succes.','Sesiunile trebuie să fie pornite.','Timpul sesiunii a expirat, rog să te loghezi din nou.','Numele de utilizator sau parola este greșită.','Nu este extensie','Nu este aviabilă nici o extensie suportată (%s).','Mesajul POST este prea mare. Trimiteți mai puține date sau măriți parametrul configurației directivei %s.','Înregistrare a fost ștearsă.','Înregistrare a fost înnoită.','Înregistrarea%s a fost inserată.','Editează','Nu sunt înscrieri.','Salvează','Salvează și continuă editarea','Salvează și mai inserează','Șterge',array('A fost modificată %d înscriere.','Au fost modificate %d înscrieri.'),'Dublu click pe o valoare pentru a o modifica.',array('%d rînd importat.','%d rînduri importate.'),'Nu am putut selecta date din tabel','editare','Relații','Valoare poate fi modificată cu ajutorul butonului «modifică».','Pagina','ultima',array('%d înscriere','%d înscrieri'),'tot rezultatul','Clonează','Export','Importă','Caută în tabele','Tabel','Înscrieri',',','Editează tot');break;case"ru":$T=array('Вы уверены?','Не удалось загрузить файл на сервер.','Максимальный разрешенный размер файла - %sB.','Такого файла не существует.','пусто','исходный','В базе данных нет таблиц.','Язык','Выбрать','Используйте одно из этих расширений %s.','Файл уже существует.','Типы пользователей','Число','Дата и время','Строки','Двоичный тип','Сеть','Геометрия','Списки','Редактор','Имя пользователя','Пароль','Войти','Оставаться в системе','Новая запись','Последняя страница',array('%d байт','%d байта','%d байтов'),'$5.$3.$1','Поиск','в любом месте','Сортировать','Лимит','Действие','Выбрать','Электропочта','От','Кому','Вставить','Прикрепленные файлы','Послать',array('Было отправлено %d письмо.','Было отправлено %d письма.','Было отправлено %d писем.'),'сейчас','ЧЧ:ММ:СС','дд.мм.[гггг]','Выйти','Выбрать','ltr','Еще раз послать данные POST запроса?','Сервер','Недействительный CSRF токен. Отправите форму ещё раз.','Вы успешно покинули систему.','Сессии должны быть включены.','Срок действия сесси истек, нужно снова войти в систему.','Неправильное имя пользователя или пароль.','Нет расширений','Не доступно ни одного расширения из поддерживаемых (%s).','Слишком большой объем POST-данных. Пошлите меньший объем данных или увеличьте параметр конфигурационной директивы %s.','Запись удалена.','Запись обновлена.','Запись%s была вставлена.','Редактировать','Нет записей.','Сохранить','Сохранить и продолжить редактирование','Сохранить и вставить еще','Стереть',array('Была изменена %d запись.','Были изменены %d записи.','Было изменено %d записей.'),'Кликни два раза по значению, чтобы его изменить.',array('Импортирована %d строка.','Импортировано %d строки.','Импортировано %d строк.'),'Не удалось получить данные из таблицы','редактировать','Реляции','Изменить это значение можно с помощью ссылки «изменить».','Страница','последняя',array('%d строка','%d строки','%d строк'),'весь результат','Клонировать','Экспорт','Импорт','Поиск в таблицах','Таблица','Строк',' ','Редактировать всё');break;case"zh":$T=array('你确定吗？','不能上传文件。','最多允许的文件大小为 %sB','文件不存在。','空','原始','没有表。','语言','使用','请使用这些扩展中的一个：%s。','文件已存在。','用户类型','数字','日期时间','字符串','二进制','网络','几何图形','列表','编辑器','用户名','密码','登录','保持登录','新建项','末页','%d 字节','$1.$3.$5','搜索','任意位置','排序','限定','动作','选择','电子邮件','来自','主题','插入','附件','发送','%d 封邮件已发送。','现在','HH:MM:SS','[yyyy].mm.dd','注销','选择数据','ltr','重新发送 POST 数据？','服务器','无效 CSRF 令牌。重新发送表单。','注销成功。','会话必须被启用。','会话已过期，请重新登录。','无效凭据。','没有扩展','没有支持的 PHP 扩展可用（%s）。','太大的 POST 数据。减少数据或者增加 %s 配置命令。','已删除项目。','已更新项目。','已插入项目%s。','编辑','没有行。','保存','保存并继续编辑','保存并插入下一个','删除','%d 个项目受到影响。','在值上双击类修改它。','%d 行已导入。','不能选择该表','编辑','关联信息','使用编辑链接来修改该值。','页面','最后','%d 行','所有结果','克隆','导出','导入','在表中搜索数据','表','行数',',','编辑全部');break;case"zh-tw":$T=array('你確定嗎？','無法上傳檔案。','允許的檔案上限大小為%sB','檔案不存在','空值','原始','沒有資料表。','語言','使用','請使用下列其中一個 extension %s。','檔案已存在。','使用者類型','數字','日期時間','字符串','二進制','網路','幾何','列表','編輯器','帳號','密碼','登入','永久登入','新建項','最後一頁','%d byte(s)','$1.$3.$5','搜尋','任意位置','排序','限定','動作','選擇','電子郵件','來自','主題','插入','附件','發送','已發送 %d 封郵件。','現在','HH:MM:SS','[yyyy].mm.dd','登出','選擇資料','ltr','重新發送表單資料?','伺服器','無效的 CSRF token。請重新發送表單。','登出成功。','Session 必須被啟用。','Session 已過期，請重新登入。','無效的憑證。','沒有 擴充模組','沒有任何支援的PHP擴充模組（%s）。','POST 資料太大。減少資料或者增加 %s 的設定值。','該項目已被刪除','已更新項目。','已插入項目%s。','編輯','沒有行。','儲存','保存並繼續編輯','儲存並插入下一個','刪除','%d個項目受到影響。','雙擊以進行修改。','%d行已導入。','無法選擇該資料表','編輯','關聯','使用編輯連結來修改。','頁','最後一頁','%d行','所有結果','複製','匯出','匯入','在資料庫搜尋','資料表','行數',',','編輯全部');break;case"ja":$T=array('実行しますか？','ファイルをアップロードできません','最大ファイルサイズ %sB','ファイルは存在しません','空','元','テーブルがありません。','言語','使用','いずれかの拡張機能を使ってください %s','ファイルが既に存在します','ユーザー定義型','数字','日時','文字列','バイナリ','ネットワーク型','ジオメトリ型','リスト','エディタ','ユーザ名','パスワード','ログイン','永続的にログイン','項目の作成','最後のページ','%d バイト','$1.$3.$5','検索','任意','ソート','制約','動作','選択','メール','差出人','題名','挿入','添付ファイル','送信','%d メールを送信しました','現在の日時','時:分:秒','[yyyy].mm.dd','ログアウト','データ','ltr','再送信しますか？','サーバ','不正なCSRFトークン。再送信してください','ログアウト','セッションを有効にしてください','セッションの期限切れ。ログインし直してください','不正なログイン','拡張機能がありません','PHPの拡張機能（%s）がセットアップされていません','POSTデータが大きすぎます。データサイズを小さくするか %s 設定を大きくしてください','項目を削除しました','項目を更新しました','%s項目を挿入しました','編集','行がありません','保存','保存して継続','保存／追加','削除','%d を更新しました','ダブルクリックして編集','%d 行をインポートしました','テーブルを選択できません','編集','関係','リンクを編集する','ページ','最終','%d 行','全結果','クローン','エクスポート','インポート','データを検索する','テーブル','行数',',','すべて編集');break;case"ta":$T=array('நிச்ச‌ய‌மாக‌ ?','கோப்பை மேலேற்ற‌ம் (upload) செய்ய‌ இயல‌வில்லை.','கோப்பின் அதிக‌ப‌ட்ச‌ அள‌வு %sB.','கோப்பு இல்லை.','வெறுமை (empty)','அச‌ல்','அட்ட‌வ‌ணை இல்லை.','மொழி','உப‌யோகி','த‌ய‌வு செய்து ஒரு விரிவினை %s (extension) உப‌யோகிக்க‌வும்.','கோப்பு உள்ள‌து.','ப‌ய‌னாள‌ர் வ‌கைக‌ள்','எண்க‌ள்','தேதி ம‌ற்றும் நேர‌ம்','ச‌ர‌ம் (String)','பைன‌ரி','நெட்வொர்க்','வ‌டிவ‌விய‌ல் (Geometry)','ப‌ட்டிய‌ல்','தொகுப்பாளர்','ப‌ய‌னாள‌ர் (User)','க‌ட‌வுச்சொல்','நுழை','நிர‌ந்த‌ர‌மாக‌ நுழைய‌வும்','புதிய‌ உருப்ப‌டி','க‌டைசி ப‌க்க‌ம்',array('%d பைட்','%d பைட்டுக‌ள்'),'$5/$3/$1','தேடு','எங்காயினும்','த‌ர‌ம் பிரி','வ‌ர‌ம்பு','செய‌ல்','தேர்வு செய்','மின்ன‌ஞ்ச‌ல்','அனுப்புனர்','பொருள்','புகுத்து','இணைப்புக‌ள்','அனுப்பு',array('%d மின்ன‌ஞ்ச‌ல் அனுப்ப‌ப‌ட்ட‌து.','%d மின்ன‌ஞ்ச‌ல்க‌ள் அனுப்ப‌ப்ப‌ட்ட‌ன‌.'),'இப்பொழுது','HH:MM:SS','dd/mm/[yyyy]','வெளியேறு','த‌க‌வ‌லை தேர்வு செய்','ltr','POST data வை மீண்டும் அனுப்பவா?','வ‌ழ‌ங்கி (Server)','CSRF டோக்க‌ன் செல்லாது. ப‌டிவ‌த்தை மீண்டும் அனுப்ப‌வும்.','வெற்றிக‌ர‌மாய் வெளியேறியாயிற்று.','செஷ‌ன் ஆத‌ர‌வு இய‌க்க‌ப்ப‌ட‌ வேண்டும்.','செஷ‌ன் காலாவ‌தியாகி விட்ட‌து. மீண்டும் நுழைய‌வும்.','ச‌ரியான‌ விப‌ர‌ங்க‌ள் இல்லை.','விரிவு (extensஇஒன்) இல்லை ','PHP ஆத‌ர‌வு விரிவுக‌ள் (%s) இல்லை.','மிக‌ அதிக‌மான‌ POST  த‌க‌வ‌ல். த‌க‌வ‌லை குறைக்க‌வும் அல்ல‌து %s வ‌டிவ‌மைப்பை (configuration directive) மாற்ற‌வும்.','உருப்படி நீக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி புதுப்பிக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி (Item) சேர்க்க‌ப்ப‌ட்ட‌து.','தொகு','வ‌ரிசை இல்லை.','சேமி','சேமித்த‌ பிற‌கு தொகுப்ப‌தை தொட‌ர‌வும்','சேமித்த‌ப் பின் அடுத்த‌தை புகுத்து','நீக்கு',array('%d உருப்ப‌டி மாற்ற‌ம‌டைந்தது.','%d உருப்ப‌டிக‌ள் மாற்ற‌ம‌டைந்த‌ன‌.'),'ம‌திப்பினை மாற்ற அத‌ன் மீது இருமுறை சொடுக்க‌வும் (Double click).',array('%d வ‌ரிசை இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்ட‌து.','%d வ‌ரிசைக‌ள் இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்டன‌.'),'அட்ட‌வ‌ணையை தேர்வு செய்ய‌ முடிய‌வில்லை','தொகு','உற‌வுக‌ள் (Relations)','இந்த‌ ம‌திப்பினை மாற்ற‌, தொகுப்பு இணைப்பினை உப‌யோகிக்க‌வும்.','ப‌க்க‌ம்','க‌டைசி',array('%d வ‌ரிசை','%d வ‌ரிசைக‌ள்'),'முழுமையான‌ முடிவு','ந‌க‌லி (Clone)','ஏற்றும‌தி','இற‌க்கும‌தி (Import)','த‌க‌வ‌லை அட்ட‌வ‌ணையில் தேடு','அட்ட‌வ‌ணை','வ‌ரிசைக‌ள்',',','அனைத்தையும் தொகு');break;case"ar":$T=array('هل أنت متأكد؟','من غير الممكن رفع الملف.','حجم الملف الأقصى هو %sB.','الملف غير موجود.','فارغ','الأصلي','لا توجد جداول.','اللغة','المستعمل','من فضلك إستعمل إحدى الإمتدادات: %s.','الملف موجود.','نوع المستخدم','أعداد','التاريخ و الوقت','سلاسل','ثنائية','شبكة','هندسة','قوائم','المحرر','المستعمل','كلمة المرور','تسجيل الدخول','تسجيل دخول دائم','عنصر جديد','الصفحة السابقة','%d بايت','$5/$3/$1','بحث','في اي مكان','ترتيب','حد','حركة','إختيار','البريد الإلكتروني','من','الموضوع','إنشاء','ملفات مرفقة.','إرسال','تم إرسال %d رسالة.','الآن','HH:MM:SS','jj/mm/[aaaa]','تسجيل الخروج','عرض البيانات','rtl','هل تود إعادة إرسال بيانات POST ؟','الخادم','CSRF Token خاطئ. من فضلك أعد إرسال الإستمارة.','مع السلامة.','عليك تفعيل نظام الجلسات.','إنتهت الجلسة، من فضلك أعد تسجيل الدخول.','فشل في تسجيل الدخول.','إمتداد غير موجود','إمتدادات php المدعومة غير موجودة.','معلومات POST كبيرة جدا. قم بتقليص حجم المعلومات أو قم بزيادة قيمة %s في خيارات ال PHP.','تم حذف العنصر.','تم تعديل العنصر.','تم إدراج العنصر.','تعديل','لا توجد نتائج.','حفظ','إحفظ و واصل التعديل','جفظ و إنشاء التالي','مسح','عدد العناصر المعدلة هو %d.','أنقر نقرا مزدوجا على قيمة لتعديلها.','عدد الأسطر المستوردة هو %d.','من غير الممكن إختيار الجدول','تعديل','علاقات','إستعمل الرابط "تعديل" لتعديل هذه القيمة.','صفحة','الأخيرة','%d أسطر','نتيجة كاملة','نسخ','تصدير','إستيراد','بحث في الجداول','جدول','الأسطر',',','تعديل الكل');break;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($Ya,$V,$E,$ob='auth_error'){set_exception_handler($ob);parent::__construct($Ya,$V,$E);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($G,$Sd=false){$H=parent::query($G);if(!$H){$kb=$this->errorInfo();$this->error=$kb[2];return
false;}$this->store_result($H);return$H;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result($H=null){if(!$H){$H=$this->_result;}if($H->columnCount()){$H->num_rows=$H->rowCount();return$H;}$this->affected_rows=$H->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($G,$n=0){$H=$this->query($G);if(!$H){return
false;}$J=$H->fetch();return$J[$n];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$J=(object)$this->getColumnMeta($this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=(in_array("blob",$J->flags)?63:0);return$J;}}}$Wa=array();$Wa["sqlite"]="SQLite 3";$Wa["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Uc=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($wb){$this->_link=new
SQLite3($wb);$de=$this->_link->version();$this->server_info=$de["versionString"];}function
query($G){$H=@$this->_link->query($G);if(!$H){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($H->numColumns()){return
new
Min_Result($H);}$this->affected_rows=$this->_link->changes();return
true;}function
quote($O){return"'".$this->_link->escapeString($O)."'";}function
store_result(){return$this->_result;}function
result($G,$n=0){$H=$this->query($G);if(!is_object($H)){return
false;}$J=$H->_result->fetchArray();return$J[$n];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($H){$this->_result=$H;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$f=$this->_offset++;$U=$this->_result->columnType($f);return(object)array("name"=>$this->_result->columnName($f),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($wb){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($wb);}function
query($G,$Sd=false){$wc=($Sd?"unbufferedQuery":"query");$H=@$this->_link->$wc($G,SQLITE_BOTH,$m);if(!$H){$this->error=$m;return
false;}elseif($H===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($H);}function
quote($O){return"'".sqlite_escape_string($O)."'";}function
store_result(){return$this->_result;}function
result($G,$n=0){$H=$this->query($G);if(!is_object($H)){return
false;}$J=$H->_result->fetch();return$J[$n];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($H){$this->_result=$H;if(method_exists($H,'numRows')){$this->num_rows=$H->numRows();}}function
fetch_assoc(){$J=$this->_result->fetch(SQLITE_ASSOC);if(!$J){return
false;}$I=array();foreach($J
as$w=>$X){$I[($w[0]=='"'?idf_unescape($w):$w)]=$X;}return$I;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$A=$this->_result->fieldName($this->_offset++);$F='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($F\\.)?$F\$~",$A,$z)){$P=($z[3]!=""?$z[3]:idf_unescape($z[2]));$A=($z[5]!=""?$z[5]:idf_unescape($z[4]));}return(object)array("name"=>$A,"orgname"=>$A,"orgtable"=>$P,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($wb){$this->dsn(DRIVER.":$wb","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($wb){if(is_readable($wb)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\]|:)",$wb)?$wb:dirname($_SERVER["SCRIPT_FILENAME"])."/$wb")." AS a")){$this->Min_SQLite($wb);return
true;}return
false;}function
multi_query($G){return$this->_result=$this->query($G);}function
next_result(){return
false;}}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($G,$Z,$x,$C=0,$pd=" "){return" $G$Z".(isset($x)?$pd."LIMIT $x".($C?" OFFSET $C":""):"");}function
limit1($G,$Z){global$h;return($h->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($G,$Z,1):" $G$Z");}function
db_collation($l,$Fa){global$h;return$h->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($k){return
array();}function
table_status($A=""){$I=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($A!=""?" AND name = ".q($A):""))as$J){$J["Auto_increment"]="";$I[$J["Name"]]=$J;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$J){$I[$J["name"]]["Auto_increment"]=$J["seq"];}return($A!=""?$I[$A]:$I);}function
is_view($Q){return$Q["Engine"]=="view";}function
fk_support($Q){global$h;return$_GET["create"]==""&&!$h->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($P){$I=array();foreach(get_rows("PRAGMA table_info(".table($P).")")as$J){$U=strtolower($J["type"]);$Qa=$J["dflt_value"];$I[$J["name"]]=array("field"=>$J["name"],"type"=>(eregi("int",$U)?"integer":(eregi("char|clob|text",$U)?"text":(eregi("blob",$U)?"blob":(eregi("real|floa|doub",$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(ereg("'(.*)'",$Qa,$z)?str_replace("''","'",$z[1]):($Qa=="NULL"?null:$Qa)),"null"=>!$J["notnull"],"auto_increment"=>eregi('^integer$',$U)&&$J["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$J["pk"],);}return$I;}function
indexes($P,$i=null){$I=array();$Vc=array();foreach(fields($P)as$n){if($n["primary"]){$Vc[]=$n["field"];}}if($Vc){$I[""]=array("type"=>"PRIMARY","columns"=>$Vc,"lengths"=>array());}foreach(get_rows("PRAGMA index_list(".table($P).")")as$J){$I[$J["name"]]["type"]=($J["unique"]?"UNIQUE":"INDEX");$I[$J["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($J["name"]).")")as$id){$I[$J["name"]]["columns"][]=$id["name"];}}return$I;}function
foreign_keys($P){$I=array();foreach(get_rows("PRAGMA foreign_key_list(".table($P).")")as$J){$p=&$I[$J["id"]];if(!$p){$p=$J;}$p["source"][]=$J["from"];$p["target"][]=$J["to"];}return$I;}function
view($A){global$h;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($A))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($l){return
false;}function
error(){global$h;return
h($h->error);}function
exact_value($X){return
q($X);}function
check_sqlite_name($A){global$h;$sb="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($sb)\$~",$A)){$h->error=lang(9,str_replace("|",", ",$sb));return
false;}return
true;}function
create_database($l,$e){global$h;if(file_exists($l)){$h->error=lang(10);return
false;}if(!check_sqlite_name($l)){return
false;}$y=new
Min_SQLite($l);$y->query('PRAGMA encoding = "UTF-8"');$y->query('CREATE TABLE adminer (i)');$y->query('DROP TABLE adminer');return
true;}function
drop_databases($k){global$h;$h->Min_SQLite(":memory:");foreach($k
as$l){if(!@unlink($l)){$h->error=lang(10);return
false;}}return
true;}function
rename_database($A,$e){global$h;if(!check_sqlite_name($A)){return
false;}$h->Min_SQLite(":memory:");$h->error=lang(10);return@rename(DB,$A);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($P,$A,$o,$Ab,$Ia,$gb,$e,$sa,$Qc){$d=array();foreach($o
as$n){if($n[1]){$d[]=($P!=""&&$n[0]==""?"ADD ":"  ").implode($n[1]);}}$d=array_merge($d,$Ab);if($P!=""){foreach($d
as$X){if(!queries("ALTER TABLE ".table($P)." $X")){return
false;}}if($P!=$A&&!queries("ALTER TABLE ".table($P)." RENAME TO ".table($A))){return
false;}}elseif(!queries("CREATE TABLE ".table($A)." (\n".implode(",\n",$d)."\n)")){return
false;}if($sa){queries("UPDATE sqlite_sequence SET seq = $sa WHERE name = ".q($A));}return
true;}function
alter_indexes($P,$d){foreach($d
as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($P."_"))." ON ".table($P)." $X[2]")){return
false;}}return
true;}function
truncate_tables($R){return
apply_queries("DELETE FROM",$R);}function
drop_views($fe){return
apply_queries("DROP VIEW",$fe);}function
drop_tables($R){return
apply_queries("DROP TABLE",$R);}function
move_tables($R,$fe,$S){return
false;}function
trigger($A){global$h;if($A==""){return
array("Statement"=>"BEGIN\n\t;\nEND");}preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($A)),$z);return
array("Timing"=>strtoupper($z[1]),"Event"=>strtoupper($z[2]),"Trigger"=>$A,"Statement"=>$z[3]);}function
triggers($P){$I=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($P))as$J){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$J["sql"],$z);$I[$J["name"]]=array($z[1],$z[2]);}return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($A,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($P,$N){return
queries("INSERT INTO ".table($P).($N?" (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")":"DEFAULT VALUES"));}function
insert_update($P,$N,$Vc){return
queries("REPLACE INTO ".table($P)." (".implode(", ",array_keys($N)).") VALUES (".implode(", ",$N).")");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ROWID()");}function
explain($h,$G){return$h->query("EXPLAIN $G");}function
found_rows($Q,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($ld){return
true;}function
create_sql($P,$sa){global$h;return$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($P));}function
truncate_sql($P){return"DELETE FROM ".table($P);}function
use_sql($j){}function
trigger_sql($P,$zd){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($P)));}function
show_variables(){global$h;$I=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$w){$I[$w]=$h->result("PRAGMA $w");}return$I;}function
show_status(){$I=array();foreach(get_vals("PRAGMA compile_options")as$Hc){list($w,$X)=explode("=",$Hc,2);$I[$w]=$X;}return$I;}function
support($ub){return
ereg('^(view|trigger|variables|status|dump)$',$ub);}$bc="sqlite";$Rd=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$yd=array_keys($Rd);$Yd=array();$Gc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$Ib=array("hex","length","lower","round","unixepoch","upper");$Lb=array("avg","count","count distinct","group_concat","max","min","sum");$ab=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Wa["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Uc=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($jb,$m){if(ini_bool("html_errors")){$m=html_entity_decode(strip_tags($m));}$m=ereg_replace('^[^:]*: ','',$m);$this->error=$m;}function
connect($M,$V,$E){global$c;$l=$c->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($M,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($E,"'\\")."'";$this->_link=@pg_connect($this->_string.($l!=""?" dbname='".addcslashes($l,"'\\")."'":" dbname='template1'"),PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$l!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='template1'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$de=pg_version($this->_link);$this->server_info=$de["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($O){return"'".pg_escape_string($this->_link,$O)."'";}function
select_db($j){global$c;if($j==$c->database()){return$this->_database;}$I=@pg_connect("$this->_string dbname='".addcslashes($j,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($I){$this->_link=$I;}return$I;}function
close(){$this->_link=@pg_connect("$this->_string dbname='template1'");}function
query($G,$Sd=false){$H=@pg_query($this->_link,$G);if(!$H){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($H)){$this->affected_rows=pg_affected_rows($H);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$n=0){$H=$this->query($G);if(!$H||!$H->num_rows){return
false;}return
pg_fetch_result($H->_result,0,$n);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($H){$this->_result=$H;$this->num_rows=pg_num_rows($H);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$f=$this->_offset++;$I=new
stdClass;if(function_exists('pg_field_table')){$I->orgtable=pg_field_table($this->_result,$f);}$I->name=pg_field_name($this->_result,$f);$I->orgname=$I->name;$I->type=pg_field_type($this->_result,$f);$I->charsetnr=($I->type=="bytea"?63:0);return$I;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($M,$V,$E){global$c;$l=$c->database();$O="pgsql:host='".str_replace(":","' port='",addcslashes($M,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn($O.($l!=""?" dbname='".addcslashes($l,"'\\")."'":""),$V,$E);return
true;}function
select_db($j){global$c;return($c->database()==$j);}function
close(){}}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$c;$h=new
Min_DB;$Na=$c->credentials();if($h->connect($Na[0],$Na[1],$Na[2])){return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($G,$Z,$x,$C=0,$pd=" "){return" $G$Z".(isset($x)?$pd."LIMIT $x".($C?" OFFSET $C":""):"");}function
limit1($G,$Z){return" $G$Z";}function
db_collation($l,$Fa){global$h;return$h->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($k){return
array();}function
table_status($A=""){$I=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN '' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($A!=""?" AND relname = ".q($A):""))as$J){$I[$J["Name"]]=$J;}return($A!=""?$I[$A]:$I);}function
is_view($Q){return$Q["Engine"]=="view";}function
fk_support($Q){return
true;}function
fields($P){$I=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($P)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$J){ereg('(.*)(\\((.*)\\))?',$J["full_type"],$z);list(,$J["type"],,$J["length"])=$z;$J["full_type"]=$J["type"].($J["length"]?"($J[length])":"");$J["null"]=($J["attnotnull"]=="f");$J["auto_increment"]=eregi("^nextval\\(",$J["default"]);$J["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$J["default"],$z)){$J["default"]=($z[1][0]=="'"?idf_unescape($z[1]):$z[1]);}$I[$J["field"]]=$J;}return$I;}function
indexes($P,$i=null){global$h;if(!is_object($i)){$i=$h;}$I=array();$Fd=$i->result("SELECT oid FROM pg_class WHERE relname = ".q($P));$g=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Fd AND attnum > 0",$i);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $Fd AND ci.oid = i.indexrelid",$i)as$J){$I[$J["relname"]]["type"]=($J["indisprimary"]=="t"?"PRIMARY":($J["indisunique"]=="t"?"UNIQUE":"INDEX"));$I[$J["relname"]]["columns"]=array();foreach(explode(" ",$J["indkey"])as$Vb){$I[$J["relname"]]["columns"][]=$g[$Vb];}$I[$J["relname"]]["lengths"]=array();}return$I;}function
foreign_keys($P){global$Bc;$I=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT oid FROM pg_class WHERE relname = ".q($P).")
AND contype = 'f'::char
ORDER BY conkey, conname")as$J){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$J['definition'],$z)){$J['source']=array_map('trim',explode(',',$z[1]));$J['table']=$z[2];if(preg_match('~(.+)\.(.+)~',$z[2],$oc)){$J['ns']=$oc[1];$J['table']=$oc[2];}$J['target']=array_map('trim',explode(',',$z[3]));$J['on_delete']=(preg_match("~ON DELETE ($Bc)~",$z[4],$oc)?$oc[1]:'');$J['on_update']=(preg_match("~ON UPDATE ($Bc)~",$z[4],$oc)?$oc[1]:'');$I[$J['conname']]=$J;}}return$I;}function
view($A){global$h;return
array("select"=>$h->result("SELECT pg_get_viewdef(".q($A).")"));}function
collations(){return
array();}function
information_schema($l){return($l=="information_schema");}function
error(){global$h;$I=h($h->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$I,$z)){$I=$z[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($z[3]).'})(.*)~','\\1<b>\\2</b>',$z[2]).$z[4];}return
nl_br($I);}function
exact_value($X){return
q($X);}function
create_database($l,$e){return
queries("CREATE DATABASE ".idf_escape($l).($e?" ENCODING ".idf_escape($e):""));}function
drop_databases($k){global$h;$h->close();return
apply_queries("DROP DATABASE",$k,'idf_escape');}function
rename_database($A,$e){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($A));}function
auto_increment(){return"";}function
alter_table($P,$A,$o,$Ab,$Ia,$gb,$e,$sa,$Qc){$d=array();$ad=array();foreach($o
as$n){$f=idf_escape($n[0]);$X=$n[1];if(!$X){$d[]="DROP $f";}else{$ce=$X[5];unset($X[5]);if(isset($X[6])&&$n[0]==""){$X[1]=($X[1]=="bigint"?" big":" ")."serial";}if($n[0]==""){$d[]=($P!=""?"ADD ":"  ").implode($X);}else{if($f!=$X[0]){$ad[]="ALTER TABLE ".table($P)." RENAME $f TO $X[0]";}$d[]="ALTER $f TYPE$X[1]";if(!$X[6]){$d[]="ALTER $f ".($X[3]?"SET$X[3]":"DROP DEFAULT");$d[]="ALTER $f ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($n[0]!=""||$ce!=""){$ad[]="COMMENT ON COLUMN ".table($P).".$X[0] IS ".($ce!=""?substr($ce,9):"''");}}}$d=array_merge($d,$Ab);if($P==""){array_unshift($ad,"CREATE TABLE ".table($A)." (\n".implode(",\n",$d)."\n)");}elseif($d){array_unshift($ad,"ALTER TABLE ".table($P)."\n".implode(",\n",$d));}if($P!=""&&$P!=$A){$ad[]="ALTER TABLE ".table($P)." RENAME TO ".table($A);}if($P!=""||$Ia!=""){$ad[]="COMMENT ON TABLE ".table($A)." IS ".q($Ia);}if($sa!=""){}foreach($ad
as$G){if(!queries($G)){return
false;}}return
true;}function
alter_indexes($P,$d){$La=array();$Xa=array();foreach($d
as$X){if($X[0]!="INDEX"){$La[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").$X[2]);}elseif($X[2]=="DROP"){$Xa[]=idf_escape($X[1]);}elseif(!queries("CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($P."_"))." ON ".table($P)." $X[2]")){return
false;}}return((!$La||queries("ALTER TABLE ".table($P).implode(",",$La)))&&(!$Xa||queries("DROP INDEX ".implode(", ",$Xa))));}function
truncate_tables($R){return
queries("TRUNCATE ".implode(", ",array_map('table',$R)));return
true;}function
drop_views($fe){return
queries("DROP VIEW ".implode(", ",array_map('table',$fe)));}function
drop_tables($R){return
queries("DROP TABLE ".implode(", ",array_map('table',$R)));}function
move_tables($R,$fe,$S){foreach($R
as$P){if(!queries("ALTER TABLE ".table($P)." SET SCHEMA ".idf_escape($S))){return
false;}}foreach($fe
as$P){if(!queries("ALTER VIEW ".table($P)." SET SCHEMA ".idf_escape($S))){return
false;}}return
true;}function
trigger($A){if($A==""){return
array("Statement"=>"EXECUTE PROCEDURE ()");}$K=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($A));return
reset($K);}function
triggers($P){$I=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($P))as$J){$I[$J["trigger_name"]]=array($J["condition_timing"],$J["event_manipulation"]);}return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
begin(){return
queries("BEGIN");}function
insert_into($P,$N){return
queries("INSERT INTO ".table($P).($N?" (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")":"DEFAULT VALUES"));}function
insert_update($P,$N,$Vc){global$h;$Zd=array();$Z=array();foreach($N
as$w=>$X){$Zd[]="$w = $X";if(isset($Vc[idf_unescape($w)])){$Z[]="$w = $X";}}return($Z&&queries("UPDATE ".table($P)." SET ".implode(", ",$Zd)." WHERE ".implode(" AND ",$Z))&&$h->affected_rows)||queries("INSERT INTO ".table($P)." (".implode(", ",array_keys($N)).") VALUES (".implode(", ",$N).")");}function
last_id(){return
0;}function
explain($h,$G){return$h->query("EXPLAIN $G");}function
found_rows($Q,$Z){global$h;if(ereg(" rows=([0-9]+)",$h->result("EXPLAIN SELECT * FROM ".idf_escape($Q["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$dd)){return$dd[1];}return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$h;return$h->result("SELECT current_schema()");}function
set_schema($kd){global$h,$Rd,$yd;$I=$h->query("SET search_path TO ".idf_escape($kd));foreach(types()as$U){if(!isset($Rd[$U])){$Rd[$U]=0;$yd[lang(11)][]=$U;}}return$I;}function
use_sql($j){return"\connect ".idf_escape($j);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){return
get_rows("SELECT * FROM pg_stat_activity ORDER BY procpid");}function
show_status(){}function
support($ub){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$ub);}$bc="pgsql";$Rd=array();$yd=array();foreach(array(lang(12)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(13)=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),lang(14)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(15)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(16)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(17)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$w=>$X){$Rd+=$X;$yd[$w]=array_keys($X);}$Yd=array();$Gc=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Ib=array("char_length","lower","round","to_hex","to_timestamp","upper");$Lb=array("avg","count","count distinct","max","min","sum");$ab=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Wa["oracle"]="Oracle";if(isset($_GET["oracle"])){$Uc=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($jb,$m){if(ini_bool("html_errors")){$m=html_entity_decode(strip_tags($m));}$m=ereg_replace('^[^:]*: ','',$m);$this->error=$m;}function
connect($M,$V,$E){$this->_link=@oci_new_connect($V,$E,$M,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$m=oci_error();$this->error=$m["message"];return
false;}function
quote($O){return"'".str_replace("'","''",$O)."'";}function
select_db($j){return
true;}function
query($G,$Sd=false){$H=oci_parse($this->_link,$G);if(!$H){$m=oci_error($this->_link);$this->error=$m["message"];return
false;}set_error_handler(array($this,'_error'));$I=@oci_execute($H);restore_error_handler();if($I){if(oci_num_fields($H)){return
new
Min_Result($H);}$this->affected_rows=oci_num_rows($H);}return$I;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$n=1){$H=$this->query($G);if(!is_object($H)||!oci_fetch($H->_result)){return
false;}return
oci_result($H->_result,$n);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($H){$this->_result=$H;}function
_convert($J){foreach((array)$J
as$w=>$X){if(is_a($X,'OCI-Lob')){$J[$w]=$X->load();}}return$J;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$f=$this->_offset++;$I=new
stdClass;$I->name=oci_field_name($this->_result,$f);$I->orgname=$I->name;$I->type=oci_field_type($this->_result,$f);$I->charsetnr=(ereg("raw|blob|bfile",$I->type)?63:0);return$I;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($M,$V,$E){$this->dsn("oci:dbname=//$M;charset=AL32UTF8",$V,$E);return
true;}function
select_db($j){return
true;}}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$c;$h=new
Min_DB;$Na=$c->credentials();if($h->connect($Na[0],$Na[1],$Na[2])){return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($G,$Z,$x,$C=0,$pd=" "){return($C?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $G$Z) t WHERE rownum <= ".($x+$C).") WHERE rnum > $C":(isset($x)?" * FROM (SELECT $G$Z) WHERE rownum <= ".($x+$C):" $G$Z"));}function
limit1($G,$Z){return" $G$Z";}function
db_collation($l,$Fa){global$h;return$h->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($k){return
array();}function
table_status($A=""){$I=array();$md=q($A);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine" FROM all_tables WHERE tablespace_name = '.q(DB).($A!=""?" AND table_name = $md":"")."
UNION SELECT view_name, 'view' FROM user_views".($A!=""?" WHERE view_name = $md":""))as$J){if($A!=""){return$J;}$I[$J["Name"]]=$J;}return$I;}function
is_view($Q){return$Q["Engine"]=="view";}function
fk_support($Q){return
true;}function
fields($P){$I=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($P)." ORDER BY column_id")as$J){$U=$J["DATA_TYPE"];$jc="$J[DATA_PRECISION],$J[DATA_SCALE]";if($jc==","){$jc=$J["DATA_LENGTH"];}$I[$J["COLUMN_NAME"]]=array("field"=>$J["COLUMN_NAME"],"full_type"=>$U.($jc?"($jc)":""),"type"=>strtolower($U),"length"=>$jc,"default"=>$J["DATA_DEFAULT"],"null"=>($J["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$I;}function
indexes($P,$i=null){$I=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($P)."
ORDER BY uc.constraint_type, uic.column_position",$i)as$J){$I[$J["INDEX_NAME"]]["type"]=($J["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($J["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$I[$J["INDEX_NAME"]]["columns"][]=$J["COLUMN_NAME"];$I[$J["INDEX_NAME"]]["lengths"][]=($J["CHAR_LENGTH"]&&$J["CHAR_LENGTH"]!=$J["COLUMN_LENGTH"]?$J["CHAR_LENGTH"]:null);}return$I;}function
view($A){$K=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($A));return
reset($K);}function
collations(){return
array();}function
information_schema($l){return
false;}function
error(){global$h;return
h($h->error);}function
exact_value($X){return
q($X);}function
explain($h,$G){$h->query("EXPLAIN PLAN FOR $G");return$h->query("SELECT * FROM plan_table");}function
found_rows($Q,$Z){}function
alter_table($P,$A,$o,$Ab,$Ia,$gb,$e,$sa,$Qc){$d=$Xa=array();foreach($o
as$n){$X=$n[1];if($X&&$n[0]!=""&&idf_escape($n[0])!=$X[0]){queries("ALTER TABLE ".table($P)." RENAME COLUMN ".idf_escape($n[0])." TO $X[0]");}if($X){$d[]=($P!=""?($n[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($P!=""?")":"");}else{$Xa[]=idf_escape($n[0]);}}if($P==""){return
queries("CREATE TABLE ".table($A)." (\n".implode(",\n",$d)."\n)");}return(!$d||queries("ALTER TABLE ".table($P)."\n".implode("\n",$d)))&&(!$Xa||queries("ALTER TABLE ".table($P)." DROP (".implode(", ",$Xa).")"))&&($P==$A||queries("ALTER TABLE ".table($P)." RENAME TO ".table($A)));}function
foreign_keys($P){return
array();}function
truncate_tables($R){return
apply_queries("TRUNCATE TABLE",$R);}function
drop_views($fe){return
apply_queries("DROP VIEW",$fe);}function
drop_tables($R){return
apply_queries("DROP TABLE",$R);}function
begin(){return
true;}function
insert_into($P,$N){return
queries("INSERT INTO ".table($P)." (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")");}function
last_id(){return
0;}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($ld){return
true;}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
show_status(){$K=get_rows('SELECT * FROM v$instance');return
reset($K);}function
support($ub){return
ereg("view|drop_col|variables|status",$ub);}$bc="oracle";$Rd=array();$yd=array();foreach(array(lang(12)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(13)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(14)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(15)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$w=>$X){$Rd+=$X;$yd[$w]=array_keys($X);}$Yd=array();$Gc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Ib=array("length","lower","round","upper");$Lb=array("avg","count","count distinct","max","min","sum");$ab=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Wa["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Uc=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$m){$this->error.="$m[message]\n";}$this->error=rtrim($this->error);}function
connect($M,$V,$E){$this->_link=@sqlsrv_connect($M,array("UID"=>$V,"PWD"=>$E));if($this->_link){$Wb=sqlsrv_server_info($this->_link);$this->server_info=$Wb['SQLServerVersion'];}else{$this->_get_error();}return(bool)$this->_link;}function
quote($O){return"'".str_replace("'","''",$O)."'";}function
select_db($j){return$this->query("USE $j");}function
query($G,$Sd=false){$H=sqlsrv_query($this->_link,$G);if(!$H){$this->_get_error();return
false;}return$this->store_result($H);}function
multi_query($G){$this->_result=sqlsrv_query($this->_link,$G);if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($H=null){if(!$H){$H=$this->_result;}if(sqlsrv_field_metadata($H)){return
new
Min_Result($H);}$this->affected_rows=sqlsrv_rows_affected($H);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($G,$n=0){$H=$this->query($G);if(!is_object($H)){return
false;}$J=$H->fetch_row();return$J[$n];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($H){$this->_result=$H;}function
_convert($J){foreach((array)$J
as$w=>$X){if(is_a($X,'DateTime')){$J[$w]=$X->format("Y-m-d H:i:s");}}return$J;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields){$this->_fields=sqlsrv_field_metadata($this->_result);}$n=$this->_fields[$this->_offset++];$I=new
stdClass;$I->name=$n["Name"];$I->orgname=$n["Name"];$I->type=($n["Type"]==1?254:0);return$I;}function
seek($C){for($r=0;$r<$C;$r++){sqlsrv_fetch($this->_result);}}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($M,$V,$E){$this->_link=@mssql_connect($M,$V,$E);if($this->_link){$H=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$J=$H->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$J[0]] $J[1]";}else{$this->error=mssql_get_last_message();}return(bool)$this->_link;}function
quote($O){return"'".str_replace("'","''",$O)."'";}function
select_db($j){return
mssql_select_db($j);}function
query($G,$Sd=false){$H=mssql_query($G,$this->_link);if(!$H){$this->error=mssql_get_last_message();return
false;}if($H===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($G,$n=0){$H=$this->query($G);if(!is_object($H)){return
false;}return
mssql_result($H->_result,0,$n);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($H){$this->_result=$H;$this->num_rows=mssql_num_rows($H);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$I=mssql_fetch_field($this->_result);$I->orgtable=$I->table;$I->orgname=$I->name;return$I;}function
seek($C){mssql_data_seek($this->_result,$C);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($t){return"[".str_replace("]","]]",$t)."]";}function
table($t){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($t);}function
connect(){global$c;$h=new
Min_DB;$Na=$c->credentials();if($h->connect($Na[0],$Na[1],$Na[2])){return$h;}return$h->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($G,$Z,$x,$C=0,$pd=" "){return(isset($x)?" TOP (".($x+$C).")":"")." $G$Z";}function
limit1($G,$Z){return
limit($G,$Z,1);}function
db_collation($l,$Fa){global$h;return$h->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($l));}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($k){global$h;$I=array();foreach($k
as$l){$h->select_db($l);$I[$l]=$h->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$I;}function
table_status($A=""){$I=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($A!=""?" AND name = ".q($A):""))as$J){if($A!=""){return$J;}$I[$J["Name"]]=$J;}return$I;}function
is_view($Q){return$Q["Engine"]=="VIEW";}function
fk_support($Q){return
true;}function
fields($P){$I=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($P))as$J){$U=$J["type"];$jc=(ereg("char|binary",$U)?$J["max_length"]:($U=="decimal"?"$J[precision],$J[scale]":""));$I[$J["name"]]=array("field"=>$J["name"],"full_type"=>$U.($jc?"($jc)":""),"type"=>$U,"length"=>$jc,"default"=>$J["default"],"null"=>$J["is_nullable"],"auto_increment"=>$J["is_identity"],"collation"=>$J["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$J["is_identity"],);}return$I;}function
indexes($P,$i=null){$I=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($P),$i)as$J){$I[$J["name"]]["type"]=($J["is_primary_key"]?"PRIMARY":($J["is_unique"]?"UNIQUE":"INDEX"));$I[$J["name"]]["lengths"]=array();$I[$J["name"]]["columns"][$J["key_ordinal"]]=$J["column_name"];}return$I;}function
view($A){global$h;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$h->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($A))));}function
collations(){$I=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$e){$I[ereg_replace("_.*","",$e)][]=$e;}return$I;}function
information_schema($l){return
false;}function
error(){global$h;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$h->error)));}function
exact_value($X){return
q($X);}function
create_database($l,$e){return
queries("CREATE DATABASE ".idf_escape($l).(eregi('^[a-z0-9_]+$',$e)?" COLLATE $e":""));}function
drop_databases($k){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$k)));}function
rename_database($A,$e){if(eregi('^[a-z0-9_]+$',$e)){queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $e");}queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($A));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($P,$A,$o,$Ab,$Ia,$gb,$e,$sa,$Qc){$d=array();foreach($o
as$n){$f=idf_escape($n[0]);$X=$n[1];if(!$X){$d["DROP"][]=" COLUMN $f";}else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($n[0]==""){$d["ADD"][]="\n  ".implode("",$X).($P==""?substr($Ab[$X[0]],16+strlen($X[0])):"");}else{unset($X[6]);if($f!=$X[0]){queries("EXEC sp_rename ".q(table($P).".$f").", ".q(idf_unescape($X[0])).", 'COLUMN'");}$d["ALTER COLUMN ".implode("",$X)][]="";}}}if($P==""){return
queries("CREATE TABLE ".table($A)." (".implode(",",(array)$d["ADD"])."\n)");}if($P!=$A){queries("EXEC sp_rename ".q(table($P)).", ".q($A));}if($Ab){$d[""]=$Ab;}foreach($d
as$w=>$X){if(!queries("ALTER TABLE ".idf_escape($A)." $w".implode(",",$X))){return
false;}}return
true;}function
alter_indexes($P,$d){$u=array();$Xa=array();foreach($d
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY"){$Xa[]=idf_escape($X[1]);}else{$u[]=idf_escape($X[1])." ON ".table($P);}}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($P."_"))." ON ".table($P):"ALTER TABLE ".table($P)." ADD PRIMARY KEY")." $X[2]")){return
false;}}return(!$u||queries("DROP INDEX ".implode(", ",$u)))&&(!$Xa||queries("ALTER TABLE ".table($P)." DROP ".implode(", ",$Xa)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($P,$N){return
queries("INSERT INTO ".table($P).($N?" (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")":"DEFAULT VALUES"));}function
insert_update($P,$N,$Vc){$Zd=array();$Z=array();foreach($N
as$w=>$X){$Zd[]="$w = $X";if(isset($Vc[idf_unescape($w)])){$Z[]="$w = $X";}}return
queries("MERGE ".table($P)." USING (VALUES(".implode(", ",$N).")) AS source (c".implode(", c",range(1,count($N))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Zd)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($N)).") VALUES (".implode(", ",$N).");");}function
last_id(){global$h;return$h->result("SELECT SCOPE_IDENTITY()");}function
explain($h,$G){$h->query("SET SHOWPLAN_ALL ON");$I=$h->query($G);$h->query("SET SHOWPLAN_ALL OFF");return$I;}function
found_rows($Q,$Z){}function
foreign_keys($P){$I=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($P))as$J){$p=&$I[$J["FK_NAME"]];$p["table"]=$J["PKTABLE_NAME"];$p["source"][]=$J["FKCOLUMN_NAME"];$p["target"][]=$J["PKCOLUMN_NAME"];}return$I;}function
truncate_tables($R){return
apply_queries("TRUNCATE TABLE",$R);}function
drop_views($fe){return
queries("DROP VIEW ".implode(", ",array_map('table',$fe)));}function
drop_tables($R){return
queries("DROP TABLE ".implode(", ",array_map('table',$R)));}function
move_tables($R,$fe,$S){return
apply_queries("ALTER SCHEMA ".idf_escape($S)." TRANSFER",array_merge($R,$fe));}function
trigger($A){if($A==""){return
array();}$K=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($A));$I=reset($K);if($I){$I["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$I["text"]);}return$I;}function
triggers($P){$I=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($P))as$J){$I[$J["name"]]=array($J["Timing"],$J["Event"]);}return$I;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$h;if($_GET["ns"]!=""){return$_GET["ns"];}return$h->result("SELECT SCHEMA_NAME()");}function
set_schema($kd){return
true;}function
use_sql($j){return"USE ".idf_escape($j);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($ub){return
ereg('^(scheme|trigger|view|drop_col)$',$ub);}$bc="mssql";$Rd=array();$yd=array();foreach(array(lang(12)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(13)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(14)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(15)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$w=>$X){$Rd+=$X;$yd[$w]=array_keys($X);}$Yd=array();$Gc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Ib=array("len","lower","round","upper");$Lb=array("avg","count","count distinct","max","min","sum");$ab=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Wa=array("server"=>"MySQL")+$Wa;if(!defined("DRIVER")){$Uc=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($M,$V,$E){mysqli_report(MYSQLI_REPORT_OFF);list($Qb,$Sc)=explode(":",$M,2);$I=@$this->real_connect(($M!=""?$Qb:ini_get("mysqli.default_host")),($M.$V!=""?$V:ini_get("mysqli.default_user")),($M.$V.$E!=""?$E:ini_get("mysqli.default_pw")),null,(is_numeric($Sc)?$Sc:ini_get("mysqli.default_port")),(!is_numeric($Sc)?$Sc:null));if($I){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$I;}function
result($G,$n=0){$H=$this->query($G);if(!$H){return
false;}$J=$H->fetch_array();return$J[$n];}function
quote($O){return"'".$this->escape_string($O)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($M,$V,$E){$this->_link=@mysql_connect(($M!=""?$M:ini_get("mysql.default_host")),("$M$V"!=""?$V:ini_get("mysql.default_user")),("$M$V$E"!=""?$E:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($O){return"'".mysql_real_escape_string($O,$this->_link)."'";}function
select_db($j){return
mysql_select_db($j,$this->_link);}function
query($G,$Sd=false){$H=@($Sd?mysql_unbuffered_query($G,$this->_link):mysql_query($G,$this->_link));if(!$H){$this->error=mysql_error($this->_link);return
false;}if($H===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$n=0){$H=$this->query($G);if(!$H||!$H->num_rows){return
false;}return
mysql_result($H->_result,0,$n);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($H){$this->_result=$H;$this->num_rows=mysql_num_rows($H);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$I=mysql_fetch_field($this->_result,$this->_offset++);$I->orgtable=$I->table;$I->orgname=$I->name;$I->charsetnr=($I->blob?63:0);return$I;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($M,$V,$E){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$M)),$V,$E);$this->query("SET NAMES utf8");return
true;}function
select_db($j){return$this->query("USE ".idf_escape($j));}function
query($G,$Sd=false){$this->setAttribute(1000,!$Sd);return
parent::query($G,$Sd);}}}function
idf_escape($t){return"`".str_replace("`","``",$t)."`";}function
table($t){return
idf_escape($t);}function
connect(){global$c;$h=new
Min_DB;$Na=$c->credentials();if($h->connect($Na[0],$Na[1],$Na[2])){$h->query("SET sql_quote_show_create = 1");return$h;}$I=$h->error;if(function_exists('iconv')&&!is_utf8($I)&&strlen($jd=iconv("windows-1250","utf-8",$I))>strlen($I)){$I=$jd;}return$I;}function
get_databases($_b=true){global$h;$I=&get_session("dbs");if(!isset($I)){if($_b){restart_session();ob_flush();flush();}$I=get_vals($h->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$I;}function
limit($G,$Z,$x,$C=0,$pd=" "){return" $G$Z".(isset($x)?$pd."LIMIT $x".($C?" OFFSET $C":""):"");}function
limit1($G,$Z){return
limit($G,$Z,1);}function
db_collation($l,$Fa){global$h;$I=null;$La=$h->result("SHOW CREATE DATABASE ".idf_escape($l),1);if(preg_match('~ COLLATE ([^ ]+)~',$La,$z)){$I=$z[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$La,$z)){$I=$Fa[$z[1]][-1];}return$I;}function
engines(){$I=array();foreach(get_rows("SHOW ENGINES")as$J){if(ereg("YES|DEFAULT",$J["Support"])){$I[]=$J["Engine"];}}return$I;}function
logged_user(){global$h;return$h->result("SELECT USER()");}function
tables_list(){global$h;return
get_key_vals("SHOW".($h->server_info>=5?" FULL":"")." TABLES");}function
count_tables($k){$I=array();foreach($k
as$l){$I[$l]=count(get_vals("SHOW TABLES IN ".idf_escape($l)));}return$I;}function
table_status($A=""){$I=array();foreach(get_rows("SHOW TABLE STATUS".($A!=""?" LIKE ".q(addcslashes($A,"%_")):""))as$J){if($J["Engine"]=="InnoDB"){$J["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$J["Comment"]);}if(!isset($J["Rows"])){$J["Comment"]="";}if($A!=""){return$J;}$I[$J["Name"]]=$J;}return$I;}function
is_view($Q){return!isset($Q["Rows"]);}function
fk_support($Q){return
eregi("InnoDB|IBMDB2I",$Q["Engine"]);}function
fields($P){$I=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($P))as$J){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$J["Type"],$z);$I[$J["Field"]]=array("field"=>$J["Field"],"full_type"=>$J["Type"],"type"=>$z[1],"length"=>$z[2],"unsigned"=>ltrim($z[3].$z[4]),"default"=>($J["Default"]!=""||ereg("char",$z[1])?$J["Default"]:null),"null"=>($J["Null"]=="YES"),"auto_increment"=>($J["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$J["Extra"],$z)?$z[1]:""),"collation"=>$J["Collation"],"privileges"=>array_flip(explode(",",$J["Privileges"])),"comment"=>$J["Comment"],"primary"=>($J["Key"]=="PRI"),);}return$I;}function
indexes($P,$i=null){$I=array();foreach(get_rows("SHOW INDEX FROM ".table($P),$i)as$J){$I[$J["Key_name"]]["type"]=($J["Key_name"]=="PRIMARY"?"PRIMARY":($J["Index_type"]=="FULLTEXT"?"FULLTEXT":($J["Non_unique"]?"INDEX":"UNIQUE")));$I[$J["Key_name"]]["columns"][]=$J["Column_name"];$I[$J["Key_name"]]["lengths"][]=$J["Sub_part"];}return$I;}function
foreign_keys($P){global$h,$Bc;static$F='`(?:[^`]|``)+`';$I=array();$Ma=$h->result("SHOW CREATE TABLE ".table($P),1);if($Ma){preg_match_all("~CONSTRAINT ($F) FOREIGN KEY \\(((?:$F,? ?)+)\\) REFERENCES ($F)(?:\\.($F))? \\(((?:$F,? ?)+)\\)(?: ON DELETE ($Bc))?(?: ON UPDATE ($Bc))?~",$Ma,$pc,PREG_SET_ORDER);foreach($pc
as$z){preg_match_all("~$F~",$z[2],$sd);preg_match_all("~$F~",$z[5],$S);$I[idf_unescape($z[1])]=array("db"=>idf_unescape($z[4]!=""?$z[3]:$z[4]),"table"=>idf_unescape($z[4]!=""?$z[4]:$z[3]),"source"=>array_map('idf_unescape',$sd[0]),"target"=>array_map('idf_unescape',$S[0]),"on_delete"=>$z[6],"on_update"=>$z[7],);}}return$I;}function
view($A){global$h;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$h->result("SHOW CREATE VIEW ".table($A),1)));}function
collations(){$I=array();foreach(get_rows("SHOW COLLATION")as$J){if($J["Default"]){$I[$J["Charset"]][-1]=$J["Collation"];}else{$I[$J["Charset"]][]=$J["Collation"];}}ksort($I);foreach($I
as$w=>$X){asort($I[$w]);}return$I;}function
information_schema($l){global$h;return($h->server_info>=5&&$l=="information_schema");}function
error(){global$h;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$h->error));}function
exact_value($X){return
q($X)." COLLATE utf8_bin";}function
create_database($l,$e){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($l).($e?" COLLATE ".q($e):""));}function
drop_databases($k){set_session("dbs",null);return
apply_queries("DROP DATABASE",$k,'idf_escape');}function
rename_database($A,$e){if(create_database($A,$e)){$ed=array();foreach(tables_list()as$P=>$U){$ed[]=table($P)." TO ".idf_escape($A).".".table($P);}if(!$ed||queries("RENAME TABLE ".implode(", ",$ed))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$ta=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$u){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$u["columns"],true)){$ta="";break;}if($u["type"]=="PRIMARY"){$ta=" UNIQUE";}}}return" AUTO_INCREMENT$ta";}function
alter_table($P,$A,$o,$Ab,$Ia,$gb,$e,$sa,$Qc){$d=array();foreach($o
as$n){$d[]=($n[1]?($P!=""?($n[0]!=""?"CHANGE ".idf_escape($n[0]):"ADD"):" ")." ".implode($n[1]).($P!=""?" $n[2]":""):"DROP ".idf_escape($n[0]));}$d=array_merge($d,$Ab);$vd="COMMENT=".q($Ia).($gb?" ENGINE=".q($gb):"").($e?" COLLATE ".q($e):"").($sa!=""?" AUTO_INCREMENT=$sa":"").$Qc;if($P==""){return
queries("CREATE TABLE ".table($A)." (\n".implode(",\n",$d)."\n) $vd");}if($P!=$A){$d[]="RENAME TO ".table($A);}$d[]=$vd;return
queries("ALTER TABLE ".table($P)."\n".implode(",\n",$d));}function
alter_indexes($P,$d){foreach($d
as$w=>$X){$d[$w]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"").$X[2]);}return
queries("ALTER TABLE ".table($P).implode(",",$d));}function
truncate_tables($R){return
apply_queries("TRUNCATE TABLE",$R);}function
drop_views($fe){return
queries("DROP VIEW ".implode(", ",array_map('table',$fe)));}function
drop_tables($R){return
queries("DROP TABLE ".implode(", ",array_map('table',$R)));}function
move_tables($R,$fe,$S){$ed=array();foreach(array_merge($R,$fe)as$P){$ed[]=table($P)." TO ".idf_escape($S).".".table($P);}return
queries("RENAME TABLE ".implode(", ",$ed));}function
copy_tables($R,$fe,$S){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($R
as$P){$A=($S==DB?table("copy_$P"):idf_escape($S).".".table($P));if(!queries("DROP TABLE IF EXISTS $A")||!queries("CREATE TABLE $A LIKE ".table($P))||!queries("INSERT INTO $A SELECT * FROM ".table($P))){return
false;}}foreach($fe
as$P){$A=($S==DB?table("copy_$P"):idf_escape($S).".".table($P));$ee=view($P);if(!queries("DROP VIEW IF EXISTS $A")||!queries("CREATE VIEW $A AS $ee[select]")){return
false;}}return
true;}function
trigger($A){if($A==""){return
array();}$K=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($A));return
reset($K);}function
triggers($P){$I=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($P,"%_")))as$J){$I[$J["Trigger"]]=array($J["Timing"],$J["Event"]);}return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($A,$U){global$h,$hb,$Yb,$Rd;$na=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Qd="((".implode("|",array_merge(array_keys($Rd),$na)).")(?:\\s*\\(((?:[^'\")]*|$hb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$F="\\s*(".($U=="FUNCTION"?"":$Yb).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Qd";$La=$h->result("SHOW CREATE $U ".idf_escape($A),2);preg_match("~\\(((?:$F\\s*,?)*)\\)".($U=="FUNCTION"?"\\s*RETURNS\\s+$Qd":"")."\\s*(.*)~is",$La,$z);$o=array();preg_match_all("~$F\\s*,?~is",$z[1],$pc,PREG_SET_ORDER);foreach($pc
as$Oc){$A=str_replace("``","`",$Oc[2]).$Oc[3];$o[]=array("field"=>$A,"type"=>strtolower($Oc[5]),"length"=>preg_replace_callback("~$hb~s",'normalize_enum',$Oc[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Oc[8] $Oc[7]"))),"full_type"=>$Oc[4],"inout"=>strtoupper($Oc[1]),"collation"=>strtolower($Oc[9]),);}if($U!="FUNCTION"){return
array("fields"=>$o,"definition"=>$z[11]);}return
array("fields"=>$o,"returns"=>array("type"=>$z[12],"length"=>$z[13],"unsigned"=>$z[15],"collation"=>$z[16]),"definition"=>$z[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($P,$N){return
queries("INSERT INTO ".table($P)." (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")");}function
insert_update($P,$N,$Vc){foreach($N
as$w=>$X){$N[$w]="$w = $X";}$Zd=implode(", ",$N);return
queries("INSERT INTO ".table($P)." SET $Zd ON DUPLICATE KEY UPDATE $Zd");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ID()");}function
explain($h,$G){return$h->query("EXPLAIN $G");}function
found_rows($Q,$Z){return($Z||$Q["Engine"]!="InnoDB"?null:$Q["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($kd){return
true;}function
create_sql($P,$sa){global$h;$I=$h->result("SHOW CREATE TABLE ".table($P),1);if(!$sa){$I=preg_replace('~ AUTO_INCREMENT=\\d+~','',$I);}return$I;}function
truncate_sql($P){return"TRUNCATE ".table($P);}function
use_sql($j){return"USE ".idf_escape($j);}function
trigger_sql($P,$zd){$I="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($P,"%_")),null,"-- ")as$J){$I.="\n".($zd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($J["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($J["Trigger"])." $J[Timing] $J[Event] ON ".table($J["Table"])." FOR EACH ROW\n$J[Statement];;\n";}return$I;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($ub){global$h;return!ereg("scheme|sequence|type".($h->server_info<5.1?"|event|partitioning".($h->server_info<5?"|view|routine|trigger":""):""),$ub);}$bc="sql";$Rd=array();$yd=array();foreach(array(lang(12)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(13)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(14)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(15)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(18)=>array("enum"=>65535,"set"=>64),)as$w=>$X){$Rd+=$X;$yd[$w]=array_keys($X);}$Yd=array("unsigned","zerofill","unsigned zerofill");$Gc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Ib=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Lb=array("avg","count","count distinct","group_concat","max","min","sum");$ab=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ba="3.3.3";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".lang(19)."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$h;$k=get_databases(false);return(!$k?$h->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$k[(information_schema($k[0])?1:0)]);}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>',lang(20),'<td><input type="hidden" name="driver" value="server"><input type="hidden" name="server" value=""><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>',lang(21),'<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".lang(22)."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],lang(23))."\n";}function
login($mc,$E){global$h;$h->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Dd){return
h($Dd["Comment"]!=""?$Dd["Comment"]:$Dd["Name"]);}function
fieldName($n,$Kc=0){return
h($n["comment"]!=""?$n["comment"]:$n["field"]);}function
selectLinks($Dd,$N=""){$b=$Dd["Name"];if(isset($N)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($b).$N).'">'.lang(24)."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".lang(25)."'>&gt;&gt;</a>\n";}function
foreignKeys($P){return
foreign_keys($P);}function
backwardKeys($P,$Cd){$I=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($P)."
ORDER BY ORDINAL_POSITION",null,"")as$J){$I[$J["TABLE_NAME"]]["keys"][$J["CONSTRAINT_NAME"]][$J["COLUMN_NAME"]]=$J["REFERENCED_COLUMN_NAME"];}foreach($I
as$w=>$X){$A=$this->tableName(table_status($w));if($A!=""){$md=preg_quote($Cd);$pd="(:|\\s*-)?\\s+";$I[$w]["name"]=(preg_match("(^$md$pd(.+)|^(.+?)$pd$md\$)iu",$A,$z)?$z[2].$z[3]:$A);}else{unset($I[$w]);}}return$I;}function
backwardKeysPrint($wa,$J){foreach($wa
as$P=>$va){foreach($va["keys"]as$Ga){$y=ME.'select='.urlencode($P);$r=0;foreach($Ga
as$f=>$X){$y.=where_link($r++,$f,$J[$X]);}echo"<a href='".h($y)."'>".h($va["name"])."</a>";$y=ME.'edit='.urlencode($P);foreach($Ga
as$f=>$X){$y.="&set".urlencode("[".bracket_escape($f)."]")."=".urlencode($J[$X]);}echo"<a href='".h($y)."' title='".lang(24)."'>+</a> ";}}}function
selectQuery($G){return"<!--\n".str_replace("--","--><!-- ",$G)."\n-->\n";}function
rowDescription($P){foreach(fields($P)as$n){if(ereg("varchar|character varying",$n["type"])){return
idf_escape($n["field"]);}}return"";}function
rowDescriptions($K,$Cb){$I=$K;foreach($K[0]as$w=>$X){if(list($P,$s,$A)=$this->_foreignColumn($Cb,$w)){$Sb=array();foreach($K
as$J){$Sb[$J[$w]]=exact_value($J[$w]);}$Sa=$this->_values[$P];if(!$Sa){$Sa=get_key_vals("SELECT $s, $A FROM ".table($P)." WHERE $s IN (".implode(", ",$Sb).")");}foreach($K
as$_=>$J){if(isset($J[$w])){$I[$_][$w]=(string)$Sa[$J[$w]];}}}}return$I;}function
selectVal($X,$y,$n){$I=($X=="<i>NULL</i>"?"&nbsp;":$X);if(ereg('blob|bytea',$n["type"])&&!is_utf8($X)){$I=lang(26,strlen($X));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$X)){$I="<img src='$y' alt='$I'>";}}if(like_bool($n)&&$I!="&nbsp;"){$I='<img src="'.($X?"".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.3":"".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.3.3").'" alt="'.h($X).'">';}if($y){$I="<a href='$y'>$I</a>";}if(!$y&&!like_bool($n)&&ereg('int|float|double|decimal',$n["type"])){$I="<div class='number'>$I</div>";}elseif(ereg('date',$n["type"])){$I="<div class='datetime'>$I</div>";}return$I;}function
editVal($X,$n){if(ereg('date|timestamp',$n["type"])&&isset($X)){return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~',lang(27),$X);}return(ereg("binary",$n["type"])?reset(unpack("H*",$X)):$X);}function
selectColumnsPrint($L,$g){}function
selectSearchPrint($Z,$g,$v){$Z=(array)$_GET["where"];echo'<fieldset><legend>'.lang(28)."</legend><div>\n";$dc=array();foreach($Z
as$w=>$X){$dc[$X["col"]]=$w;}$r=0;$o=fields($_GET["select"]);foreach($o
as$A=>$n){$Ra=$g[$A];if(ereg("enum",$n["type"])&&$Ra!=""){$w=$dc[$A];$r--;echo"<div>".h($Ra)."<input type='hidden' name='where[$r][col]' value='".h($A)."'>:",enum_input("checkbox"," name='where[$r][val][]'",$n,(array)$Z[$w]["val"],($n["null"]?0:null)),"</div>\n";unset($g[$A]);}}foreach($g
as$A=>$Ra){$Ic=$this->_foreignKeyOptions($_GET["select"],$A);if(is_array($Ic)){if($o[$A]["null"]){$Ic[0]='('.lang(4).')';}$w=$dc[$A];$r--;echo"<div>".h($Ra)."<input type='hidden' name='where[$r][col]' value='".h($A)."'><input type='hidden' name='where[$r][op]' value='='>: <select name='where[$r][val]'>".optionlist($Ic,$Z[$w]["val"],true)."</select></div>\n";unset($g[$A]);}}$r=0;foreach($Z
as$X){if(($X["col"]==""||$g[$X["col"]])&&"$X[col]$X[val]"!=""){echo"<div><select name='where[$r][col]'><option value=''>(".lang(29).")".optionlist($g,$X["col"],true)."</select>",html_select("where[$r][op]",array(-1=>"")+$this->operators,$X["op"]),"<input name='where[$r][val]' value='".h($X["val"])."'></div>\n";$r++;}}echo"<div><select name='where[$r][col]' onchange='selectAddRow(this);'><option value=''>(".lang(29).")".optionlist($g,null,true)."</select>",html_select("where[$r][op]",array(-1=>"")+$this->operators),"<input name='where[$r][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($Kc,$g,$v){$Lc=array();foreach($v
as$w=>$u){$Kc=array();foreach($u["columns"]as$X){$Kc[]=$g[$X];}if(count(array_filter($Kc,'strlen'))>1&&$w!="PRIMARY"){$Lc[$w]=implode(", ",$Kc);}}if($Lc){echo'<fieldset><legend>'.lang(30)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Lc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"]){echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}}function
selectLimitPrint($x){echo"<fieldset><legend>".lang(31)."</legend><div>";echo
html_select("limit",array("","30","100"),$x),"</div></fieldset>\n";}function
selectLengthPrint($Hd){}function
selectActionPrint(){echo"<fieldset><legend>".lang(32)."</legend><div>","<input type='submit' value='".lang(33)."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($db,$g){if($db){print_fieldset("email",lang(34),$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".lang(35).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(36).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n";echo"<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$g,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(37)."'>\n";echo"<p>".lang(38).": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($db)==1?'<input type="hidden" name="email_field" value="'.h(key($db)).'">':html_select("email_field",$db)),"<input type='submit' name='email' value='".lang(39)."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($g,$v){return
array(array(),array());}function
selectSearchProcess($o,$v){$I=array();foreach((array)$_GET["where"]as$w=>$Z){$Ea=$Z["col"];$Ec=$Z["op"];$X=$Z["val"];if(($w<0?"":$Ea).$X!=""){$Ja=array();foreach(($Ea!=""?array($Ea=>$o[$Ea]):$o)as$A=>$n){if($Ea!=""||is_numeric($X)||!ereg('int|float|double|decimal',$n["type"])){$A=idf_escape($A);if($Ea!=""&&$n["type"]=="enum"){$Ja[]=(in_array(0,$X)?"$A IS NULL OR ":"")."$A IN (".implode(", ",array_map('intval',$X)).")";}else{$Id=ereg('char|text|enum|set',$n["type"]);$Y=$this->processInput($n,(!$Ec&&$Id&&ereg('^[^%]+$',$X)?"%$X%":$X));$Ja[]=$A.($Y=="NULL"?" IS".($Ec==">="?" NOT":"")." $Y":(in_array($Ec,$this->operators)||$Ec=="="?" $Ec $Y":($Id?" LIKE $Y":" IN (".str_replace(",","', '",$Y).")")));if($w<0&&$X=="0"){$Ja[]="$A IS NULL";}}}}$I[]=($Ja?"(".implode(" OR ",$Ja).")":"0");}}return$I;}function
selectOrderProcess($o,$v){$Ub=$_GET["index_order"];if($Ub!=""){unset($_GET["order"][1]);}if($_GET["order"]){return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));}foreach(($Ub!=""?array($v[$Ub]):$v)as$u){if($Ub!=""||$u["type"]=="INDEX"){$Ra=false;foreach($u["columns"]as$X){if(ereg('date|timestamp',$o[$X]["type"])){$Ra=true;break;}}$I=array();foreach($u["columns"]as$X){$I[]=idf_escape($X).($Ra?" DESC":"");}return$I;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Z,$Cb){if($_POST["email_append"]){return
true;}if($_POST["email"]){$od=0;if($_POST["all"]||$_POST["check"]){$n=idf_escape($_POST["email_field"]);$_d=$_POST["email_subject"];$uc=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$_d.$uc",$pc);$K=get_rows("SELECT DISTINCT $n".($pc[1]?", ".implode(", ",array_map('idf_escape',array_unique($pc[1]))):"")." FROM ".table($_GET["select"])." WHERE $n IS NOT NULL AND $n != ''".($Z?" AND ".implode(" AND ",$Z):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$o=fields($_GET["select"]);foreach($this->rowDescriptions($K,$Cb)as$J){$fd=array('{\\'=>'{');foreach($pc[1]as$X){$fd['{$'."$X}"]=$this->editVal($J[$X],$o[$X]);}$cb=$J[$_POST["email_field"]];if(is_mail($cb)&&send_mail($cb,strtr($_d,$fd),strtr($uc,$fd),$_POST["email_from"],$_FILES["email_files"])){$od++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(40,$od));}return
false;}function
messageQuery($G){return"<!--\n".str_replace("--","--><!-- ",$G)."\n-->";}function
editFunctions($n){$I=array();if($n["null"]&&ereg('blob',$n["type"])){$I["NULL"]=lang(4);}$I[""]=($n["null"]||$n["auto_increment"]||like_bool($n)?"":"*");if(ereg('date|time',$n["type"])){$I["now"]=lang(41);}if(eregi('_(md5|sha1)$',$n["field"],$z)){$I[]=strtolower($z[1]);}return$I;}function
editInput($P,$n,$ra,$Y){if($n["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$ra value='-1' checked><i>".lang(5)."</i></label> ":"").enum_input("radio",$ra,$n,($Y||isset($_GET["select"])?$Y:0),($n["null"]?"":null));}$Ic=$this->_foreignKeyOptions($P,$n["field"],$Y);if(isset($Ic)){return(is_array($Ic)?"<select$ra>".optionlist($Ic,$Y,true)."</select>":"<input value='".h($Y)."'$ra class='hidden'><input value='".h($Ic)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($P)."&field=".urlencode($n["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");}if(like_bool($n)){return'<input type="checkbox" value="'.h($Y?$Y:1).'"'.($Y?' checked':'')."$ra>";}$Pb="";if(ereg('time',$n["type"])){$Pb=lang(42);}if(ereg('date|timestamp',$n["type"])){$Pb=lang(43).($Pb?" [$Pb]":"");}if($Pb){return"<input value='".h($Y)."'$ra> ($Pb)";}if(eregi('_(md5|sha1)$',$n["field"])){return"<input type='password' value='".h($Y)."'$ra>";}return'';}function
processInput($n,$Y,$q=""){if($q=="now"){return"$q()";}$I=$Y;if(ereg('date|timestamp',$n["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote(lang(27)))).'(.*))',$Y,$z)){$I=($z["p1"]!=""?$z["p1"]:($z["p2"]!=""?($z["p2"]<70?20:19).$z["p2"]:gmdate("Y")))."-$z[p3]$z[p4]-$z[p5]$z[p6]".end($z);}$I=($n["type"]=="bit"&&ereg('^[0-9]+$',$Y)?$I:q($I));if($Y==""&&($n["null"]||!ereg('char|text',$n["type"]))&&!like_bool($n)){$I="NULL";}elseif(ereg('^(md5|sha1)$',$q)){$I="$q($I)";}if(ereg("binary",$n["type"])){$I="unhex($I)";}return$I;}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($P,$zd,$G){global$h;$H=$h->query($G,1);if($H){while($J=$H->fetch_assoc()){if($zd=="table"){dump_csv(array_keys($J));$zd="INSERT";}dump_csv($J);}}}function
dumpHeaders($Rb,$yc=false){$qb="csv";header("Content-Type: text/csv; charset=utf-8");return$qb;}function
homepage(){return
true;}function
navigation($xc){global$ba,$Nd;echo'<h1>
',$this->name(),' <!--<span class="version">',$ba,'</span>-->
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ba,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($xc=="auth"){$zb=true;foreach((array)$_SESSION["pwds"]["server"][""]as$V=>$E){if(isset($E)){if($zb){echo"<p onclick='eventStop(event);'>\n";$zb=false;}echo"<a href='".h(auth_url("server","",$V))."'>".($V!=""?h($V):"<i>".lang(4)."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(44),'" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$Nd,'">
</p>
</form>
';if($xc!="db"&&$xc!="ns"){$Q=table_status();if(!$Q){echo"<p class='message'>".lang(6)."\n";}else{$this->tablesPrint($Q);}}}}function
tablesPrint($R){echo"<p id='tables'>\n";foreach($R
as$J){$A=$this->tableName($J);if(isset($J["Engine"])&&$A!=""){echo"<a href='".h(ME).'select='.urlencode($J["Name"])."'".bold($_GET["select"]==$J["Name"])." title='".lang(45)."'>$A</a><br>\n";}}}function
_foreignColumn($Cb,$f){foreach((array)$Cb[$f]as$Bb){if(count($Bb["source"])==1){$A=$this->rowDescription($Bb["table"]);if($A!=""){$s=idf_escape($Bb["target"][0]);return
array($Bb["table"],$s,$A);}}}}function
_foreignKeyOptions($P,$f,$Y=null){global$h;if(list($S,$s,$A)=$this->_foreignColumn(column_foreign_keys($P),$f)){$I=&$this->_values[$S];if(!isset($I)){$Q=table_status($S);$I=($Q["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $s, $A FROM ".table($S)." ORDER BY 2"));}if(!$I&&isset($Y)){return$h->result("SELECT $A FROM ".table($S)." WHERE $s = ".q($Y));}return$I;}}}$c=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($Jd,$m="",$Aa=array(),$Kd=""){global$a,$c,$h,$Wa;header("Content-Type: text/html; charset=utf-8");if($c->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Ld=$Jd.($Kd!=""?": ".h($Kd):"");$Md=strip_tags($Ld.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$c->name());if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($Md));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="',$a,'" dir="',lang(46),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Md,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.3.3",'">
<script type="text/javascript">
var areYouSure = \'',lang(47),'\';
</script>
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.3.3",'"></script>
';if($c->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.3.3",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(46),' nojs"',($_POST?"":" onclick=\"return bodyClick(event, '".h(js_escape(DB)."', '".js_escape($_GET["ns"]))."');\"");echo' onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($h)?substr($h->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();");?>">
<script type="text/javascript">
document.body.className = document.body.className.replace(/(^|\s)nojs(\s|$)/, '$1js$2');
</script>

<div id="content">
<?php
}if(isset($Aa)){$y=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($y?$y:".").'">'.$Wa[DRIVER].'</a> &raquo; ';$y=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$M=(SERVER!=""?h(SERVER):lang(48));if($Aa===false){echo"$M\n";}else{echo"<a href='".($y?h($y):".")."' accesskey='1' title='Alt+Shift+1'>$M</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Aa))){echo'<a href="'.h($y."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($Aa)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($Aa
as$w=>$X){$Ra=(is_array($X)?$X[1]:$X);if($Ra!=""){echo'<a href="'.h(ME."$w=").urlencode(is_array($X)?$X[0]:$X).'">'.h($Ra).'</a> &raquo; ';}}}echo"$Jd\n";}}echo"<span id='loader'></span>\n","<h2>$Ld</h2>\n";restart_session();$ae=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$vc=$_SESSION["messages"][$ae];if($vc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$vc)."</div>\n";unset($_SESSION["messages"][$ae]);}$k=&get_session("dbs");if(DB!=""&&$k&&!in_array(DB,$k,true)){$k=null;}if($m){echo"<div class='error'>$m</div>\n";}define("PAGE_HEADER",1);}function
page_footer($xc=""){global$c;if(!is_ajax()){echo'</div>

';switch_lang();echo'<div id="menu">
';$c->navigation($xc);echo'</div>
';}}function
int32($_){while($_>=2147483648){$_-=4294967296;}while($_<=-2147483649){$_+=4294967296;}return(int)$_;}function
long2str($W,$he){$jd='';foreach($W
as$X){$jd.=pack('V',$X);}if($he){return
substr($jd,0,end($W));}return$jd;}function
str2long($jd,$he){$W=array_values(unpack('V*',str_pad($jd,4*ceil(strlen($jd)/4),"\0")));if($he){$W[]=strlen($jd);}return$W;}function
xxtea_mx($le,$ke,$Bd,$cc){return
int32((($le>>5&0x7FFFFFF)^$ke<<2)+(($ke>>3&0x1FFFFFFF)^$le<<4))^int32(($Bd^$ke)+($cc^$le));}function
encrypt_string($xd,$w){if($xd==""){return"";}$w=array_values(unpack("V*",pack("H*",md5($w))));$W=str2long($xd,true);$_=count($W)-1;$le=$W[$_];$ke=$W[0];$Zc=floor(6+52/($_+1));$Bd=0;while($Zc-->0){$Bd=int32($Bd+0x9E3779B9);$Za=$Bd>>2&3;for($Nc=0;$Nc<$_;$Nc++){$ke=$W[$Nc+1];$zc=xxtea_mx($le,$ke,$Bd,$w[$Nc&3^$Za]);$le=int32($W[$Nc]+$zc);$W[$Nc]=$le;}$ke=$W[0];$zc=xxtea_mx($le,$ke,$Bd,$w[$Nc&3^$Za]);$le=int32($W[$_]+$zc);$W[$_]=$le;}return
long2str($W,false);}function
decrypt_string($xd,$w){if($xd==""){return"";}$w=array_values(unpack("V*",pack("H*",md5($w))));$W=str2long($xd,false);$_=count($W)-1;$le=$W[$_];$ke=$W[0];$Zc=floor(6+52/($_+1));$Bd=int32($Zc*0x9E3779B9);while($Bd){$Za=$Bd>>2&3;for($Nc=$_;$Nc>0;$Nc--){$le=$W[$Nc-1];$zc=xxtea_mx($le,$ke,$Bd,$w[$Nc&3^$Za]);$ke=int32($W[$Nc]-$zc);$W[$Nc]=$ke;}$le=$W[$_];$zc=xxtea_mx($le,$ke,$Bd,$w[$Nc&3^$Za]);$ke=int32($W[0]-$zc);$W[0]=$ke;$Bd=int32($Bd-0x9E3779B9);}return
long2str($W,true);}$h='';$Nd=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$Rc=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($w)=explode(":",$X);$Rc[$w]=$X;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$w=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Wc=$c->permanentLogin();$Rc[$w]="$w:".base64_encode($Wc?encrypt_string($_POST["password"],$Wc):"");cookie("adminer_permanent",implode(" ",$Rc));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($Nd&&$_POST["token"]!=$Nd){page_header(lang(44),lang(49));page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$w){set_session($w,null);}$w=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Rc[$w]){unset($Rc[$w]);cookie("adminer_permanent",implode(" ",$Rc));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(50));}}elseif($Rc&&!$_SESSION["pwds"]){session_regenerate_id();$Wc=$c->permanentLogin();foreach($Rc
as$w=>$X){list(,$Da)=explode(":",$X);list($Va,$M,$V)=array_map('base64_decode',explode("-",$w));$_SESSION["pwds"][$Va][$M][$V]=decrypt_string(base64_decode($Da),$Wc);}}function
auth_error($nb=null){global$h,$c,$Nd;$rd=session_name();$m="";if(!$_COOKIE[$rd]&&$_GET[$rd]&&ini_bool("session.use_only_cookies")){$m=lang(51);}elseif(isset($_GET["username"])){if(($_COOKIE[$rd]||$_GET[$rd])&&!$Nd){$m=lang(52);}else{$E=&get_session("pwds");if(isset($E)){$m=h($nb?$nb->getMessage():(is_string($h)?$h:lang(53)));$E=null;}}}page_header(lang(22),$m,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$c->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header(lang(54),lang(55,implode(", ",$Uc)),false);page_footer("auth");exit;}$h=connect();}if(is_string($h)||!$c->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$Nd=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$Nd;}$m=($_POST?($_POST["token"]==$Nd?"":lang(49)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(56,'"post_max_size"')));$h->select_db($c->database());function
email_header($Nb){return"=?UTF-8?B?".base64_encode($Nb)."?=";}function
send_mail($cb,$_d,$uc,$Hb="",$xb=array()){$ib=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$uc=str_replace("\n",$ib,wordwrap(str_replace("\r","","$uc\n")));$_a=uniqid("boundary");$qa="";foreach((array)$xb["error"]as$w=>$X){if(!$X){$qa.="--$_a$ib"."Content-Type: ".str_replace("\n","",$xb["type"][$w]).$ib."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$xb["name"][$w])."\"$ib"."Content-Transfer-Encoding: base64$ib$ib".chunk_split(base64_encode(file_get_contents($xb["tmp_name"][$w])),76,$ib).$ib;}}$ya="";$Ob="Content-Type: text/plain; charset=utf-8$ib"."Content-Transfer-Encoding: 8bit";if($qa){$qa.="--$_a--$ib";$ya="--$_a$ib$Ob$ib$ib";$Ob="Content-Type: multipart/mixed; boundary=\"$_a\"";}$Ob.=$ib."MIME-Version: 1.0$ib"."X-Mailer: Adminer Editor".($Hb?$ib."From: ".str_replace("\n","",$Hb):"");return
mail($cb,email_header($_d),$ya.$uc.$qa,$Ob);}function
like_bool($n){return
ereg("bool|(tinyint|bit)\\(1\\)",$n["full_type"]);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$Bc="RESTRICT|CASCADE|SET NULL|NO ACTION";$Wa[DRIVER]=lang(22);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$b=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$b-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$h->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($b)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$b=$_GET["edit"];$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$Zd=(isset($_GET["select"])?$_POST["edit"]:$Z);$o=fields($b);foreach($o
as$A=>$n){if(!isset($n["privileges"][$Zd?"update":"insert"])||$c->fieldName($n)==""){unset($o[$A]);}}if($_POST&&!$m&&!isset($_GET["select"])){$lc=$_POST["referer"];if($_POST["insert"]){$lc=($Zd?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$lc)){$lc=ME."select=".urlencode($b);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($b)," WHERE $Z"),$lc,lang(57));}else{$N=array();foreach($o
as$A=>$n){$X=process_input($n);if($X!==false&&$X!==null){$N[idf_escape($A)]=($Zd?"\n".idf_escape($A)." = $X":$X);}}if($Zd){if(!$N){redirect($lc);}query_redirect("UPDATE".limit1(table($b)." SET".implode(",",$N),"\nWHERE $Z"),$lc,lang(58));}else{$H=insert_into($b,$N);$hc=($H?last_id():0);queries_redirect($lc,lang(59,($hc?" $hc":"")),$H);}}}$Ed=$c->tableName(table_status($b));page_header(($Zd?lang(60):lang(37)),$m,array("select"=>array($b,$Ed)),$Ed);$J=null;if($_POST["save"]){$J=(array)$_POST["fields"];}elseif($Z){$L=array();foreach($o
as$A=>$n){if(isset($n["privileges"]["select"])){$L[]=($_POST["clone"]&&$n["auto_increment"]?"'' AS ":(ereg("enum|set",$n["type"])?"1*".idf_escape($A)." AS ":"")).idf_escape($A);}}$J=array();if($L){$K=get_rows("SELECT".limit(implode(", ",$L)." FROM ".table($b)," WHERE $Z",(isset($_GET["select"])?2:1)));$J=(isset($_GET["select"])&&count($K)!=1?null:reset($K));}}if($J===false){echo"<p class='error'>".lang(61)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($o){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($o
as$A=>$n){echo"<tr><th>".$c->fieldName($n);$Qa=$_GET["set"][bracket_escape($A)];$Y=(isset($J)?($J[$A]!=""&&ereg("enum|set",$n["type"])?(is_array($J[$A])?array_sum($J[$A]):+$J[$A]):$J[$A]):(!$Zd&&$n["auto_increment"]?"":(isset($_GET["select"])?false:(isset($Qa)?$Qa:$n["default"]))));if(!$_POST["save"]&&is_string($Y)){$Y=$c->editVal($Y,$n);}$q=($_POST["save"]?(string)$_POST["function"][$A]:($Zd&&$n["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:(isset($Y)?'':'NULL'))));if($n["type"]=="timestamp"&&$Y=="CURRENT_TIMESTAMP"){$Y="";$q="now";}input($n,$Y,$q);echo"\n";}echo"</table>\n";}echo'<p>
';if($o){echo"<input type='submit' value='".lang(62)."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($Zd?lang(63):lang(64))."' title='Ctrl+Shift+Enter'>\n";}}echo($Zd?"<input type='submit' name='delete' value='".lang(65)."' onclick=\"return confirm('".lang(0)."');\">\n":($_POST||!$o?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Nd,'">
</form>
';}elseif(isset($_GET["select"])){$b=$_GET["select"];$Q=table_status($b);$v=indexes($b);$o=fields($b);$Db=column_foreign_keys($b);if($Q["Oid"]=="t"){$v[]=array("type"=>"PRIMARY","columns"=>array("oid"));}parse_str($_COOKIE["adminer_import"],$ka);$hd=array();$g=array();$Hd=null;foreach($o
as$w=>$n){$A=$c->fieldName($n);if(isset($n["privileges"]["select"])&&$A!=""){$g[$w]=html_entity_decode(strip_tags($A));if(ereg('text|lob',$n["type"])){$Hd=$c->selectLengthProcess();}}$hd+=$n["privileges"];}list($L,$Jb)=$c->selectColumnsProcess($g,$v);$Z=$c->selectSearchProcess($o,$v);$Kc=$c->selectOrderProcess($o,$v);$x=$c->selectLimitProcess();$Hb=($L?implode(", ",$L):($Q["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($b);$Kb=($Jb&&count($Jb)<count($L)?"\nGROUP BY ".implode(", ",$Jb):"").($Kc?"\nORDER BY ".implode(", ",$Kc):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Vd=>$J){echo$h->result("SELECT".limit(idf_escape(key($J))." FROM ".table($b)," WHERE ".where_check($Vd).($Z?" AND ".implode(" AND ",$Z):"").($Kc?" ORDER BY ".implode(", ",$Kc):""),1));}exit;}if($_POST&&!$m){$je="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Vc=$Xd=null;foreach($v
as$u){if($u["type"]=="PRIMARY"){$Vc=array_flip($u["columns"]);$Xd=($L?$Vc:array());break;}}foreach((array)$Xd
as$w=>$X){if(in_array(idf_escape($w),$L)){unset($Xd[$w]);}}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($b);$c->dumpTable($b,"");if(!is_array($_POST["check"])||$Xd===array()){$ie=$Z;if(is_array($_POST["check"])){$ie[]="($je)";}$G="SELECT $Hb".($ie?"\nWHERE ".implode(" AND ",$ie):"").$Kb;}else{$Td=array();foreach($_POST["check"]as$X){$Td[]="(SELECT".limit($Hb,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X).$Kb,1).")";}$G=implode(" UNION ALL ",$Td);}$c->dumpData($b,"table",$G);exit;}if(!$c->selectEmailProcess($Z,$Db)){if($_POST["save"]||$_POST["delete"]){$H=true;$la=0;$G=table($b);$N=array();if(!$_POST["delete"]){foreach($g
as$A=>$X){$X=process_input($o[$A]);if($X!==null){if($_POST["clone"]){$N[idf_escape($A)]=($X!==false?$X:idf_escape($A));}elseif($X!==false){$N[]=idf_escape($A)." = $X";}}}$G.=($_POST["clone"]?" (".implode(", ",array_keys($N)).")\nSELECT ".implode(", ",$N)."\nFROM ".table($b):" SET\n".implode(",\n",$N));}if($_POST["delete"]||$N){$Ha="UPDATE";if($_POST["delete"]){$Ha="DELETE";$G="FROM $G";}if($_POST["clone"]){$Ha="INSERT";$G="INTO $G";}if($_POST["all"]||($Xd===array()&&$_POST["check"])||count($Jb)<count($L)){$H=queries($Ha." $G".($_POST["all"]?($Z?"\nWHERE ".implode(" AND ",$Z):""):"\nWHERE $je"));$la=$h->affected_rows;}else{foreach((array)$_POST["check"]as$X){$H=queries($Ha.limit1($G,"\nWHERE ".where_check($X)));if(!$H){break;}$la+=$h->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(66,$la),$H);}elseif(!$_POST["import"]){if(!$_POST["val"]){$m=lang(67);}else{$H=true;$la=0;foreach($_POST["val"]as$Vd=>$J){$N=array();foreach($J
as$w=>$X){$w=bracket_escape($w,1);$N[]=idf_escape($w)." = ".(ereg('char|text',$o[$w]["type"])||$X!=""?$c->processInput($o[$w],$X):"NULL");}$G=table($b)." SET ".implode(", ",$N);$ie=" WHERE ".where_check($Vd).($Z?" AND ".implode(" AND ",$Z):"");$H=queries("UPDATE".(count($Jb)<count($L)?" $G$ie":limit1($G,$ie)));if(!$H){break;}$la+=$h->affected_rows;}queries_redirect(remove_from_uri(),lang(66,$la),$H);}}elseif(is_string($vb=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ka["output"])."&format=".urlencode($_POST["separator"]));$H=true;$Ga=array_keys($o);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$vb,$pc);$la=count($pc[0]);begin();$pd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($pc[0]as$w=>$X){preg_match_all("~((\"[^\"]*\")+|[^$pd]*)$pd~",$X.$pd,$qc);if(!$w&&!array_diff($qc[1],$Ga)){$Ga=$qc[1];$la--;}else{$N=array();foreach($qc[1]as$r=>$Ea){$N[idf_escape($Ga[$r])]=($Ea==""&&$o[$Ga[$r]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ea))));}$H=insert_update($b,$N,$Vc);if(!$H){break;}}}if($H){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(68,$la),$H);queries("ROLLBACK");}else{$m=upload_error($vb);}}}$Ed=$c->tableName($Q);page_header(lang(33).": $Ed",$m);session_write_close();$N=null;if(isset($hd["insert"])){$N="";foreach((array)$_GET["where"]as$X){if(count($Db[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!ereg('[_%]',$X["val"])))){$N.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}}$c->selectLinks($Q,$N);if(!$g){echo"<p class='error'>".lang(69).($o?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($b).'">',"</div>\n";$c->selectColumnsPrint($L,$g);$c->selectSearchPrint($Z,$g,$v);$c->selectOrderPrint($Kc,$g,$v);$c->selectLimitPrint($x);$c->selectLengthPrint($Hd);$c->selectActionPrint();echo"</form>\n";$D=$_GET["page"];if($D=="last"){$Fb=$h->result("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):""));$D=floor(max(0,$Fb-1)/$x);}$G="SELECT".limit((+$x&&$Jb&&count($Jb)<count($L)&&$bc=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Hb,($Z?"\nWHERE ".implode(" AND ",$Z):"").$Kb,($x!=""?+$x:null),($D?$x*$D:0),"\n");echo$c->selectQuery($G);$H=$h->query($G);if(!$H){echo"<p class='error'>".error()."\n";}else{if($bc=="mssql"){$H->seek($x*$D);}$eb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$K=array();while($J=$H->fetch_assoc()){if($D&&$bc=="oracle"){unset($J["RNUM"]);}$K[]=$J;}if($_GET["page"]!="last"){$Fb=(+$x&&$Jb&&count($Jb)<count($L)?($bc=="sql"?$h->result(" SELECT FOUND_ROWS()"):$h->result("SELECT COUNT(*) FROM ($G) x")):count($K));}if(!$K){echo"<p class='message'>".lang(61)."\n";}else{$xa=$c->backwardKeys($b,$Ed);echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Jb&&$L?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(70)."</a>");$_c=array();$Ib=array();reset($L);$bd=1;foreach($K[0]as$w=>$X){if($Q["Oid"]!="t"||$w!="oid"){$X=$_GET["columns"][key($L)];$n=$o[$L?($X?$X["col"]:current($L)):$w];$A=($n?$c->fieldName($n,$bd):"*");if($A!=""){$bd++;$_c[$w]=$A;$f=idf_escape($w);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($w).($Kc[0]==$f||$Kc[0]==$w||(!$Kc&&count($Jb)<count($L)&&$Jb[0]==$f)?'&desc%5B0%5D=1':'')).'">'.(!$L||$X?apply_sql_function($X["fun"],$A):h(current($L)))."</a>";}$Ib[$w]=$X["fun"];next($L);}}$kc=array();if($_GET["modify"]){foreach($K
as$J){foreach($J
as$w=>$X){$kc[$w]=max($kc[$w],min(40,strlen(utf8_decode($X))));}}}echo($xa?"<th>".lang(71):"")."</thead>\n";foreach($c->rowDescriptions($K,$Db)as$_=>$J){$Ud=unique_array($K[$_],$v);$Vd="";foreach($Ud
as$w=>$X){$Vd.="&".(isset($X)?urlencode("where[".bracket_escape($w)."]")."=".urlencode($X):"null%5B%5D=".urlencode($w));}echo"<tr".odd().">".(!$Jb&&$L?"":"<td>".checkbox("check[]",substr($Vd,1),in_array(substr($Vd,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($Jb)<count($L)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($b).$Vd)."'>".lang(70)."</a>"));foreach($J
as$w=>$X){if(isset($_c[$w])){$n=$o[$w];if($X!=""&&(!isset($eb[$w])||$eb[$w]!="")){$eb[$w]=(is_mail($X)?$_c[$w]:"");}$y="";$X=$c->editVal($X,$n);if(!isset($X)){$X="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$n["type"])&&$X!=""){$y=h(ME.'download='.urlencode($b).'&field='.urlencode($w).$Vd);}if($X===""){$X="&nbsp;";}elseif($Hd!=""&&ereg('text|blob',$n["type"])&&is_utf8($X)){$X=shorten_utf8($X,max(0,+$Hd));}else{$X=h($X);}if(!$y){foreach((array)$Db[$w]as$p){if(count($Db[$w])==1||end($p["source"])==$w){$y="";foreach($p["source"]as$r=>$sd){$y.=where_link($r,$p["target"][$r],$K[$_][$sd]);}$y=h(($p["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($p["db"]),ME):ME).'select='.urlencode($p["table"]).$y);if(count($p["source"])==1){break;}}}}if($w=="COUNT(*)"){$y=h(ME."select=".urlencode($b));$r=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Ud)){$y.=h(where_link($r++,$W["col"],$W["val"],$W["op"]));}}foreach($Ud
as$cc=>$W){$y.=h(where_link($r++,$cc,$W));}}}if(!$y){if(is_mail($X)){$y="mailto:$X";}if($Yc=is_url($J[$w])){$y=($Yc=="http"&&$aa?$J[$w]:"$Yc://www.adminer.org/redirect/?url=".urlencode($J[$w]));}}$s=h("val[$Vd][".bracket_escape($w)."]");$Y=$_POST["val"][$Vd][bracket_escape($w)];$Mb=h(isset($Y)?$Y:$J[$w]);$nc=strpos($X,"<i>...</i>");$bb=is_utf8($X)&&$K[$_][$w]==$J[$w]&&!$Ib[$w];$Gd=ereg('text|lob',$n["type"]);echo(($_GET["modify"]&&$bb)||isset($Y)?"<td>".($Gd?"<textarea name='$s' cols='30' rows='".(substr_count($J[$w],"\n")+1)."'>$Mb</textarea>":"<input name='$s' value='$Mb' size='$kc[$w]'>"):"<td id='$s' ondblclick=\"".($bb?"selectDblClick(this, event".($nc?", 2":($Gd?", 1":"")).")":"alert('".h(lang(72))."')").";\">".$c->selectVal($X,$y,$n));}}if($xa){echo"<td>";}$c->backwardKeysPrint($xa,$K[$_]);echo"</tr>\n";}echo"</table>\n",(!$Jb&&$L?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($K||$D){$mb=true;if($_GET["page"]!="last"&&+$x&&count($Jb)>=count($L)&&($Fb>=$x||$D)){$Fb=found_rows($Q,$Z);if($Fb<max(1e4,2*($D+1)*$x)){ob_flush();flush();$Fb=$h->result("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):""));}else{$mb=false;}}echo"<p class='pages'>";if(+$x&&$Fb>$x){$rc=floor(($Fb-1)/$x);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(73)."', '".($D+1)."'), event); return false;\">".lang(73)."</a>:",pagination(0,$D).($D>5?" ...":"");for($r=max(1,$D-4);$r<min($rc,$D+5);$r++){echo
pagination($r,$D);}echo($D+5<$rc?" ...":"").($mb?pagination($rc,$D):' <a href="'.h(remove_from_uri()."&page=last").'">'.lang(74)."</a>");}echo" (".($mb?"":"~ ").lang(75,$Fb).") ".checkbox("all",1,0,lang(76))."\n";if($c->selectCommandPrint()){echo'<fieldset><legend>',lang(60),'</legend><div>
<input type="submit" value="',lang(62),'"',($_GET["modify"]?'':' title="'.lang(67).'" class="jsonly"'),'>
<input type="submit" name="edit" value="',lang(60),'">
<input type="submit" name="clone" value="',lang(77),'">
<input type="submit" name="delete" value="',lang(65),'" onclick="return confirm(\'',lang(0);?> (' + (this.form['all'].checked ? <?php echo$Fb,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",lang(78));$Mc=$c->dumpOutput();echo($Mc?html_select("output",$Mc,$ka["output"])." ":""),html_select("format",$c->dumpFormat(),$ka["format"])," <input type='submit' name='export' value='".lang(78)."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}if($c->selectImportPrint()){print_fieldset("import",lang(79),!$K);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ka["format"],1);echo" <input type='submit' name='import' value='".lang(79)."'>","<input type='hidden' name='token' value='$Nd'>\n","</div></fieldset>\n";}$c->selectEmailPrint(array_filter($eb,'strlen'),$g);echo"</form>\n";}}}elseif(isset($_GET["script"])){if(list($P,$s,$A)=$c->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$H=$h->query("SELECT $s, $A FROM ".table($P)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$s = $_GET[value] OR ":"")."$A LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($r=0;$r<10&&($J=$H->fetch_row());$r++){echo"<a href='".h(ME."edit=".urlencode($P)."&where".urlencode("[".bracket_escape(idf_unescape($s))."]")."=".urlencode($J[0]))."'>".h($J[1])."</a><br>\n";}if($r==10){echo"...\n";}}exit;}else{page_header(lang(48),"",false);if($c->homepage()){echo"<form action='' method='post'>\n","<p>".lang(80).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".lang(28)."'>\n";if($_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.lang(81).'<td>'.lang(82)."</thead>\n";foreach(table_status()as$P=>$J){$A=$c->tableName($J);if(isset($J["Engine"])&&$A!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$P,in_array($P,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($P)."'>$A</a>";$X=number_format($J["Rows"],0,'.',lang(83));echo"<td align='right'><a href='".h(ME."edit=").urlencode($P)."'>".($J["Engine"]=="InnoDB"&&$X?"~ $X":$X)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();
