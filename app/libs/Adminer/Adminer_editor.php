<?php
/** Adminer Editor - Compact database editor
* @link https://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.2.4
*/error_reporting(6135);$fc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($fc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Kf=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Kf)$$X=$Kf;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0�\0\n @\0�C��\"\0`E�Q����?�tvM'�Jd�d\\�b0\0�\"��fӈ��s5����A�XPaJ�0���8�#R�T��z`�#.��c�X��Ȁ?�-\0�Im?�.�M��\0ȯ(̉��/(%�\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1̇�ٌ�l7��B1�4vb0��fs���n2B�ѱ٘�n:�#(�b.\rDc)��a7E����l�ñ��i1̎s���-4��f�	��i7������Fé�vt2���!�r0���t~�U�'3M��W�B�'c�P�:6T\rc�A�zr_�WK�\r-�VNFS%~�c���&�\\^�r����u�ŎÞ�ً4'7k����Q��h�'g\rFB\ryT7SS�P�1=ǤcI��:�d��m>�S8L�J��t.M���	ϋ`'C����889�� �Q����2�#8А����6m����j��h�<�����9/��:�J�)ʂ�\0d>!\0Z��v�n��o(���k�7��s��>��!�R\"*nS�\0@P\"��(�#[���@g�o���zn�9k�8�n���1�I*��=�n������0�c(�;�à��!���*c��>Ύ�E7D�LJ��1�J=���1L��?�s=#`�3\$4���uȱ��zG�C YAt�?;�Q�k&��YP�u��ǯ}UaHV%G;�s��<A\0\\��P�\\��&ª�V��\n�SU�t���r���2�	l^�Z6�ej����A�d�[�sն�JP����ҝ��8�=����6#˂74*���#e���!�7{�6��<o�C�9v[�M��-`��k�>�l�ڴ��I��H�3�x����w0t6��%MR%��jh�B�<�\0�AQ<P<:��u/�;\\>��-��ʈ��QH\nv�L+v�æ�<�\r��v����\\*����Ӵݢg��n˩��TЩ2P�\r��ߋ\"+z�8���:#�����2��J[�i����;z�����r�3#�ى�:�n�\r㽃e�pdݍ� �2c��4�k���\rG��E6_����މb��/��HB%�0�>���hoW�nxl֍�浃CQ^�������\r����4lK{�Z��:���Ã�.�p��Ă�J�B-�+B���(�T�%��J�0�l�T�`+�-��@B��ۄV��\0��C�,�0t���F���?Ġ�\na@Ɍ>��ZEC��O�-���^Q�&���)I)�����R�]\r��9�7_��\r�F80�Ob�	���>���\nR�_��8��٫�ov0�bCA�F!�t��ă%0�/�zAYO(4������	'�] I��8hH�05�3�@x&n��|T���)`�.�s6eY�D�z�����Jѓ��.��{GEb��Ӌ����2��{\$**��@�C��-:zYHZI��5F]��Y��C�O�A����`x'�.*9t'{�(�wP����=�*���*�xwr��*c���c|�D���V��\r�V.�0���V�d�?Ҁ��,E͝`T��6ۈ-����ڎT[ѐ�z��.Ar��̀P��n�c=a�9F�n�!�u��A���0iP��J6e�T]V�[\rX��a��v�k�\n+E���ܕ*\0�~���@g\"�NCI\$��Ɍ���x@W�y�*vuD�\0�v�댆V\0�V`G�u�E�֕��f�l�h�@�)0@�T��7���§RA�ٷ�3ۘ��/Q�]�,s�{VR�����F���A��<�vץ�%@9��F��5t�%�+�/�8;�W����J��o:�N�`�	����h��{ܣ�� �Ԑ8�Eu�&�W|Ɇ���U�&\r\"����|-uǆ�N��:nc��fV����#U20�>\"���>�`�k]�-��x�S�͇Т����c��B��}�&`��r+E��\$�yN���b,���Wx ��-9��r�,��`�+���ˊ��C��)��7�x\r��W�fM�SR�\\�z��Q�̓��uA���2���4�L&�Hi µ���S\$)e���g rȌ��\$]Z�iYs���kW�n>�7E1k8�d�r�k����E���w�wcm�Ty����a�\$tx\rB��=����*�<���l�f�K��N/���	�l���kH��8�.���?f�����6�ч�{gi/\"�@��K��@2��a|#,Z���	��w�d�������6w�^&��t��P�����]���.����T��kro����\ro=�%��h`:\0᱂����|ꊣ�a�Ԯ6*:��*��rO-^����n���M�}���Aya���\n�u^��rnO\r���`�T~</�w�y�}�:�|�����̡6������v�\rc<�b#������\$�s��|燇V)�h�TC��(Ľ���}");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:��gCI��\n0��S��a9��S`�����&�(��n0���QI��f��\$�At^ s�G��tf6e��y��()L�S��P'�����R'�fq]\"�s>	)�`�H2�Eq9��?�*)��t'��ϧ�\n	\r�s<�Pi2IN��*(=2�gX��.3�N�Y4�B<�L���i�̥2��z=�0H���'�ꌚ�u�tt:������e�]`pX9��o5�g��I��,2O4��х�M�S�(�a��#������|�G�b���x�^Z[��G��uTv�(ҝm@V�(���bN<��`��X�1�+��9J8�2\r�K�9�h�	���`�����I8䛱S���t�2�+,��I�� ��p�9m@�:����x�)���C��x�3��4P7��-�4�r\"p3Fh��-5��U4͉�\\6��<D\$�l�9�R4t7��dD3�p�Γk�:)\\;�����\r@�t�\$4O�<��!pd���QJ\r�H�}:&����Ȅ�5YWJ�����`�N��bKNS���a�����d>2W�ŅbDj:9[21c���ȝ�:X�@�q�#��4�L�'J��+DHe�3�.�O��K˰���pV��t2�wp;Ɠ���\r?�OzDq.���-�\"�Z�c�X3!/>P�F�s�ɲ��0�(��ʣ�����T63sVQo��SΑ�b�߅^r\$�@C� r2)��� �V�)+nܷz������l��{�K#��9�{�ۯl���m�Q��h�*ɗP�:�c�]�7���=��L���i;�2������<\\�J��b�n����n�_iӴ�J\n������C:���`N4�̖�'Aw:4}�ۣ�W\080��L3��J;�i�)\\�=/N�u=ZV6&cea��p��.[�v�tPZ��X`֔��+z�'��9�.\$\$���@\n\r�]_�ٮ��h�kk�Ms>`̖�j�%�\\9ж��('�jA�>BCd\"K\$	CA�����.².`��.E�洖��yy\0�D2�8t	�6��8�FL������B*��,�|\nx\\@��@��3r ����WKQb,%���DBf�ȳD|͌�E0/�2>�Y!Ć'��`�f�mH�<B�B0\r*\0Gx��n�Y4����,�L������%S�,�v�0���X�Q�1�HId`�!.�V��H/��×�H��0�U��0��`�LI�8��k��2�4JYN�&�8x�J�k:AK㝡nW�!�����I�;'��\":2��4�~�J�8�ᒑ��G��\"M�=\rZ'�n�i9F����r��R�t�3\0��Ҳ�2�y��B^��b'��z�ɲ(�#�d9It�&W�jNa��C(� j�Ė?h���j����քZ\$0��ү�J	A_�\n�!T�O�4�<{a��?��o ���-����?Hl�\"�2�y�=�먞�R��ф����͊�P&�G���4��%()�\r5M����LT�\0���xBI�=ltv�2Jhv���~/:��p��:8\"д5���0�#�*�7����\n�q�>�G\$���):	��\"�#�KfI�!�v�+?{����Qg��{�R�Q��C��}�#��iIb�g���X�����}��`�}3�%@��{_k�}0��ȗ�p�!�a��<7�e���F�?����X�D���, ��Ck���U��L>�1���܇����p0�#�\$���V)pY�s5A�:��U�(9�5��,F+�&�*{�-����:���:7��:ʙyP������X�+���\n�I;��\\s��P��1�����r��NJ�AT'-���k?��Y@�����f��b񎒔R�J�i�m�B~�K\rK��t�4��;O�Kc�9%H�5��d�3��e8j�P��[s�9,�Ę�bzK����W&e�d8���)����5�p�h������\"0�hL5\0�7 �ڌڇ�{��ݿ����<�k��\r+��X�b�l��/؝X��AC�s\na��l����}�~ݴ��drx(\r�3�nGr�T�+��Q��J��P�\n�'?��Ĵn~��:�����Q�8����`{�a�� �4:��L�:� ����uM���ߎM�I��,�`�BgN����\rB��\r\0��o��\"�/�2^D2)n�\raz�R\$�7�`������L�p�*�{`Oqt�z%%�Hg����0���K�f&�)\\�QW������\0dp��<Q\"�c���'�/�Q7>�+��j#\0��ȺБ_�ȍ�k3�J�(���%O���\0��Tm4�k:lʞ�mD\$����\0���'�~� Z@�����V��L\"�Hjn�5��Nl�������fj&�M��O��dbӰR����Odii�N�(�%�-4+�:HpR��?B�M0��JF��.����1M��f~U�T갊�lˠ0�����U��|��Ђ@�X4�bg� ]P�?@z `��<��R���`��-��F���I\0���㬦|О���ŬTkQk�F@0L��P�\r���#�u�����ܲpX�^ѱap\0\r y�Pt%\0^8��\r�����k��\0ǡ1�\n�d��B���.\n�Qjq\$\rM˾F��o���(︉ [� .#>��Q�`Y`�M��,�J���\n<��u�z�+I���!)��+�t��Ŋ�����lƜm\"\"17\"j�0#N�m���٢�O �pR�K#�R��7#C�&��!2\$��>�Ϝ�C�.R\"�r��\"P�y˰7��\r�ܼ�s)�%�#�U\rO�EЀ�����y�xCt@п��*H����+@���0�\r���I����L�������/ \\\rNR\r\0�@+�\$��/*w0�S\nt�\"�\0�r�/��P����\0�3L���%r�R�2R*�+�0�\"�-�3N1�D7(tb��/@�12��M6���d�(�c7�*��p�l�8���(t�0�Kp�2�-�����Fb�\$�R��(/�+2��,̲�l���8�����r�K!�6\"�Sa0bx��\$O\0\re� �\r\"8�'��t���\r��+�P�@Y1��Yb�R⹰�\\jK)��438�h�1�7�z`p�R�R�C��B���<������F	4�DtJ-�tV�D6\0NL�T�v_�0�\"qJ��I���*�.����q�R|��H�Πt]>�\0�OL(#�n�.�2Bn9Jm�@R�s2|��h��t�Nn6B�cO+�҆��e������BO=,��C:�6�:�M<��BV\\`�/B��ڧ�,w:�H�͸�2xp�M�nbn��Մ�0���	1�,4�V�#&�l����jKC�\n�g��l\r�IcY@�Y�h�3�\nU�]@�	���\rL�d�\\B����\"t\r�p'\n�'�O\\��RИֳ�5��S��b%�[��\$�L�u�`5�Y���u�[���\0|EMh���\\)�\\u�9�b�H.e@\r��!�e'�VP��C'c\"�f(RŇ&#~��\\qH�]�{^���g'O�<vz�6lp��g'8E�{�*�/�U�V�����p���o,�+���)X��k.�0`�s��0h�r��o^��𦆰�B\"�j�Ok-��%Ɓ0���g�x�+� �[�P7\"*hPP�\rc�<�[`��V���7�:`��U��(�I��s*d�;�>	�BGsG� t:��8d\0�@�jwLvj �ow7v b�	�p�����u-�\n��, u:)��\"ut�:�WB<S�b1��2�CײS��d�%)r��pտ{cpqM�!���#P��#@�E}c\"@|d%kr�\"*�x�� w}״uW��l&X~S�B'u�@6Ch�º..��'��+@��Ӄ�[T��1����b\"�\n\0�\n`�I\0��n+�/�\"lW1uƴ�Z�D�C�(�1�p�wм��� �^\0ZJ`��b�#�5�Ʉ��H���;���(���!`��#^»y�ߍ����VGr�|�_�pG�e�Q�jd'2I-���h��^�da)א�:H�H)�5q�X��FQ_��{8)~N~�\"`�\$1��� �������B_�������N^�h[�N��(�+��M�wϙP�'p�65b?�Ѵ���y&<�ZT�q,9Op�@2M���zĕPq4`eo���b\"fm�v�X@�c9a0�w Db �~������W\"u@�J�r�i8�0��0��#�}7+���ok�@���\n)l�r���%v�܇�!����n{�XYw*,��b���F�^\r1�y5��BY�՜#w:3&j�B������fY`���� ��BI��|�l�0��ӫ�O�r[rEa0bɋ��\n��	(�\r��GF��@ؼ��٭�߮�1��ГS��s+�X��%@u�g9zfS��#0 �DB�� _w��E�� B�>�{���*@�}k���Ƚ��\\P�,\"�-rC�rV��Yם���Z\r���[�S}\0Y�%k�cϖ2�vs\rK���O�T@��s��!��2��cw˒��v���,4&�rxr�؇�~��#�\"��X�\r�];SF��F�<ta/��M�&�U>��5s ��S���>�6��U{���p!\"y�7M�me�Z�D!*v�w�W�	��0�w0��1��|H\$&ԉ+{��GRH!rԁ-�24�l��\r��\r�\0���t<ƅ��f�:�DS�d�eQ��\r\\�a���E�bG����m �g�x-T����G�YKƢ�tp0�?��Frx	�2\\�V��2;'\n��+��b1��DG�5���l'(�/[�,N��(nG8��b�XQ*���-R�����\n4q#[U�<e��ĝ`�&&�o�@�u�%�5\0��`\0�E}#lʨU�x%m�Y&P�b�͕�.��ϡ�1<jn�ǃ�\nV~o��N�p\n���\$E�&�#��%G\0��=��ek���Q�C�<}�]�A��-Yb�;ฆ�[���� �U�Y�c��~��T.\\�<Wn\\oP����qƉ6P\ns��`�����c:�3�(�[��zX����{ P�\\�炫��W��Y�:߮:��#����9��Y�[�Y�t&l�9kޱ�Y_҉b�~��&�v�	�*1���`�f�8��S��V^��'���}��l��z8����� �ZGb��_���]�⢏��fpJ��Z�0��@V��'��u��y��	��C�R'N���?Y���k ��\$c��� �=�n�	�YJ�>P�R�J��]��.��짃����}�;�;S��]��@���:�����I~ۑ���ҝ�|;��Fy�ƃ��}`�/��-��#�1�@y��7���ys}�\$A�a�\\�<xG��֨BmamZx�3�,}ϝ:�\n�d9��΋�}�H��m�T,/K�Ϊ (���Sh��:����V�,N�\\����\r�B%�Y�v�i,��pyrrH��&�dL�%(�@L��5��T@1`٠�:���\nc�,b�O,��\"ԣr(�f�Y�O-���yk���*&�,k�yIP\n���rpE%��`��89��ׅ�l�UN6_�<E���d�L��K!���Zb�k�*���q���C\$��P�����sHnI���M�(���q��D@\"8��\n��r�f��C\rP��pKƣ஛�d�L!N��R9��cl�i�!a :��\r�\rPS�S��*���0a��,�бd4Q\r3v����L���ʘ�ðGn\"3�%Qd���)�i4�u�s����X�MP��^��5�O��	b�p� xy���TqDnBy�C�l�q\0X��2�E%	dF��,7G��&���Ri���#瀉CV��N��\$�LB!(<��*1|H\"Eu<��P0T|s��)C(oZ[ҵS�t�������m��\n�n�� ��6<�/>���}S�8=������/�)B�vEI�b�v𒬖/���q�����e�K��w\0%�!̀p�UT@ѵ�˦_�˘@��t�8�%�>���A����b+~+\n��Τ�\"�>4��c^��־š�N�Z�^�دN4�CDr�	D�Cђ���ȳö(�R�ed�����{�F�Z��+Q#���W-�푥�q��UC��;���X��x���\n6�zk�v����q�x\"h�ĚRX��?�pd���s�憞?|�p�\r��~���^Ƙh��A��<r\$�Af�5\n\"0;����!��� a����zG��1�Bʒ��\"�����OLk�Ӈ�\0��F��'Y����4���");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress(compile_file('','minify_js'));}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0!�����M��*)�o��) q��e���#��L�\0;";break;case"cross.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0#�����#\na�Fo~y�.�_wa��1�J�G�L�6]\0\0;";break;case"up.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0 �����MQN\n�}��a8�y�aŶ�\0��\0;";break;case"down.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0 �����M��*)�[W�\\��L&ٜƶ�\0��\0;";break;case"arrow.gif":echo"GIF89a\0\n\0�\0\0������!�\0\0\0,\0\0\0\0\0\n\0\0�i������Ӳ޻\0\0;";break;}}exit;}function
connection(){global$h;return$h;}function
adminer(){global$b;return$b;}function
idf_unescape($u){$ed=substr($u,-1);return
str_replace($ed.$ed,$ed,substr($u,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($le,$fc=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($le)){foreach($X
as$Vc=>$W){unset($le[$y][$Vc]);if(is_array($W)){$le[$y][stripslashes($Vc)]=$W;$le[]=&$le[$y][stripslashes($Vc)];}else$le[$y][stripslashes($Vc)]=($fc?$W:stripslashes($W));}}}}function
bracket_escape($u,$Ga=false){static$yf=array(':'=>':1',']'=>':2','['=>':3');return
strtr($u,($Ga?array_flip($yf):$yf));}function
charset($h){return(version_compare($h->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
h($Q){return
str_replace("\0","&#0;",htmlspecialchars($Q,ENT_QUOTES,'utf-8'));}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($D,$Y,$Ua,$bd="",$Kd="",$Ya=""){$K="<input type='checkbox' name='$D' value='".h($Y)."'".($Ua?" checked":"").($Kd?' onclick="'.h($Kd).'"':'').">";return($bd!=""||$Ya?"<label".($Ya?" class='$Ya'":"").">$K".h($bd)."</label>":$K);}function
optionlist($Pd,$Ke=null,$Rf=false){$K="";foreach($Pd
as$Vc=>$W){$Qd=array($Vc=>$W);if(is_array($W)){$K.='<optgroup label="'.h($Vc).'">';$Qd=$W;}foreach($Qd
as$y=>$X)$K.='<option'.($Rf||is_string($y)?' value="'.h($y).'"':'').(($Rf||is_string($y)?(string)$y:$X)===$Ke?' selected':'').'>'.h($X);if(is_array($W))$K.='</optgroup>';}return$K;}function
html_select($D,$Pd,$Y="",$Jd=true){if($Jd)return"<select name='".h($D)."'".(is_string($Jd)?' onchange="'.h($Jd).'"':"").">".optionlist($Pd,$Y)."</select>";$K="";foreach($Pd
as$y=>$X)$K.="<label><input type='radio' name='".h($D)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$K;}function
select_input($Ca,$Pd,$Y="",$ce=""){return($Pd?"<select$Ca><option value=''>$ce".optionlist($Pd,$Y,true)."</select>":"<input$Ca size='10' value='".h($Y)."' placeholder='$ce'>");}function
confirm(){return" onclick=\"return confirm('".lang(0)."');\"";}function
print_fieldset($t,$gd,$Yf=false,$Kd=""){echo"<fieldset><legend><a href='#fieldset-$t' onclick=\"".h($Kd)."return !toggle('fieldset-$t');\">$gd</a></legend><div id='fieldset-$t'".($Yf?"":" class='hidden'").">\n";}function
bold($Oa,$Ya=""){return($Oa?" class='active $Ya'":($Ya?" class='$Ya'":""));}function
odd($K=' class="odd"'){static$s=0;if(!$K)$s=-1;return($s++%2?$K:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($y,$X=null){static$gc=true;if($gc)echo"{";if($y!=""){echo($gc?"":",")."\n\t\"".addcslashes($y,"\r\n\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'undefined');$gc=false;}else{echo"\n}\n";$gc=true;}}function
ini_bool($Mc){$X=ini_get($Mc);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$K;if($K===null)$K=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$K;}function
set_password($Uf,$O,$V,$H){$_SESSION["pwds"][$Uf][$O][$V]=($_COOKIE["adminer_key"]&&is_string($H)?array(encrypt_string($H,$_COOKIE["adminer_key"])):$H);}function
get_password(){$K=get_session("pwds");if(is_array($K))$K=($_COOKIE["adminer_key"]?decrypt_string($K[0],$_COOKIE["adminer_key"]):false);return$K;}function
q($Q){global$h;return$h->quote($Q);}function
get_vals($I,$e=0){global$h;$K=array();$J=$h->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[]=$L[$e];}return$K;}function
get_key_vals($I,$i=null,$qf=0){global$h;if(!is_object($i))$i=$h;$K=array();$i->timeout=$qf;$J=$i->query($I);$i->timeout=0;if(is_object($J)){while($L=$J->fetch_row())$K[$L[0]]=$L[1];}return$K;}function
get_rows($I,$i=null,$n="<p class='error'>"){global$h;$hb=(is_object($i)?$i:$h);$K=array();$J=$hb->query($I);if(is_object($J)){while($L=$J->fetch_assoc())$K[]=$L;}elseif(!$J&&!is_object($i)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$K;}function
unique_array($L,$w){foreach($w
as$v){if(preg_match("~PRIMARY|UNIQUE~",$v["type"])){$K=array();foreach($v["columns"]as$y){if(!isset($L[$y]))continue
2;$K[$y]=$L[$y];}return$K;}}}function
escape_key($y){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$y,$A))return$A[1].idf_escape(idf_unescape($A[2])).$A[3];return
idf_escape($y);}function
where($Z,$p=array()){global$h,$x;$K=array();foreach((array)$Z["where"]as$y=>$X){$y=bracket_escape($y,1);$e=escape_key($y);$K[]=$e.(($x=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X))||$x=="mssql"?" LIKE ".q(addcslashes($X,"%_\\")):" = ".unconvert_field($p[$y],q($X)));if($x=="sql"&&preg_match('~char|text~',$p[$y]["type"])&&preg_match("~[^ -@]~",$X))$K[]="$e = ".q($X)." COLLATE ".charset($h)."_bin";}foreach((array)$Z["null"]as$y)$K[]=escape_key($y)." IS NULL";return
implode(" AND ",$K);}function
where_check($X,$p=array()){parse_str($X,$Sa);remove_slashes(array(&$Sa));return
where($Sa,$p);}function
where_link($s,$e,$Y,$Md="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($e)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$Md:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($f,$p,$N=array()){$K="";foreach($f
as$y=>$X){if($N&&!in_array(idf_escape($y),$N))continue;$za=convert_field($p[$y]);if($za)$K.=", $za AS ".idf_escape($y);}return$K;}function
cookie($D,$Y,$jd=2592000){global$aa;$G=array($D,(preg_match("~\n~",$Y)?"":$Y),($jd?time()+$jd:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$G[]=true;return
call_user_func_array('setcookie',$G);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Uf,$O,$V,$m=null){global$Bb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Bb))."|username|".($m!==null?"db|":"").session_name()),$A);return"$A[1]?".(sid()?SID."&":"").($Uf!="server"||$O!=""?urlencode($Uf)."=".urlencode($O)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($A[2]?"&$A[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($kd,$ud=null){if($ud!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($kd!==null?$kd:$_SERVER["REQUEST_URI"]))][]=$ud;}if($kd!==null){if($kd=="")$kd=".";header("Location: $kd");exit;}}function
query_redirect($I,$kd,$ud,$ue=true,$Ub=true,$Zb=false,$pf=""){global$h,$n,$b;if($Ub){$Xe=microtime(true);$Zb=!$h->query($I);$pf=format_time($Xe);}$Ve="";if($I)$Ve=$b->messageQuery($I,$pf);if($Zb){$n=error().$Ve;return
false;}if($ue)redirect($kd,$ud.$Ve);return
true;}function
queries($I){global$h;static$oe=array();static$Xe;if(!$Xe)$Xe=microtime(true);if($I===null)return
array(implode("\n",$oe),format_time($Xe));$oe[]=(preg_match('~;$~',$I)?"DELIMITER ;;\n$I;\nDELIMITER ":$I).";";return$h->query($I);}function
apply_queries($I,$T,$Rb='table'){foreach($T
as$R){if(!queries("$I ".$Rb($R)))return
false;}return
true;}function
queries_redirect($kd,$ud,$ue){list($oe,$pf)=queries(null);return
query_redirect($oe,$kd,$ud,$ue,false,!$ue,$pf);}function
format_time($Xe){return
lang(1,max(0,microtime(true)-$Xe));}function
remove_from_uri($Wd=""){return
substr(preg_replace("~(?<=[?&])($Wd".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($F,$ob){return" ".($F==$ob?$F+1:'<a href="'.h(remove_from_uri("page").($F?"&page=$F".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($F+1)."</a>");}function
get_file($y,$rb=false){$cc=$_FILES[$y];if(!$cc)return
null;foreach($cc
as$y=>$X)$cc[$y]=(array)$X;$K='';foreach($cc["error"]as$y=>$n){if($n)return$n;$D=$cc["name"][$y];$wf=$cc["tmp_name"][$y];$jb=file_get_contents($rb&&preg_match('~\\.gz$~',$D)?"compress.zlib://$wf":$wf);if($rb){$Xe=substr($jb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Xe,$ve))$jb=iconv("utf-16","utf-8",$jb);elseif($Xe=="\xEF\xBB\xBF")$jb=substr($jb,3);$K.=$jb."\n\n";}else$K.=$jb;}return$K;}function
upload_error($n){$rd=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?lang(2).($rd?" ".lang(3,$rd):""):lang(4));}function
repeat_pattern($ae,$hd){return
str_repeat("$ae{0,65535}",$hd/65535)."$ae{0,".($hd%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$hd=80,$df=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$hd).")($)?)u",$Q,$A))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$hd).")($)?)",$Q,$A);return
h($A[1]).$df.(isset($A[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",lang(5)),preg_split('~~u',lang(6),-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($le,$Gc=array()){while(list($y,$X)=each($le)){if(!in_array($y,$Gc)){if(is_array($X)){foreach($X
as$Vc=>$W)$le[$y."[$Vc]"]=$W;}else
echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$ac=false){$K=table_status($R,$ac);return($K?$K:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$K=array();foreach($b->foreignKeys($R)as$lc){foreach($lc["source"]as$X)$K[$X][]=$lc;}return$K;}function
enum_input($U,$Ca,$o,$Y,$Mb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$B);$K=($Mb!==null?"<label><input type='$U'$Ca value='$Mb'".((is_array($Y)?in_array($Mb,$Y):$Y===0)?" checked":"")."><i>".lang(7)."</i></label>":"");foreach($B[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ua=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$K.=" <label><input type='$U'$Ca value='".($s+1)."'".($Ua?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$K;}function
input($o,$Y,$q){global$h,$Ff,$b,$x;$D=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$q){$xa=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$xa[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$xa);$q="json";}$ze=($x=="mssql"&&$o["auto_increment"]);if($ze&&!$_POST["save"])$q=null;$sc=(isset($_GET["select"])||$ze?array("orig"=>lang(8)):array())+$b->editFunctions($o);$Ca=" name='fields[$D]'";if($o["type"]=="enum")echo
nbsp($sc[""])."<td>".$b->editInput($_GET["edit"],$o,$Ca,$Y);else{$gc=0;foreach($sc
as$y=>$X){if($y===""||!$X)break;$gc++;}$Jd=($gc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($o["field"])))."]']; if ($gc > f.selectedIndex) f.selectedIndex = $gc;\" onkeyup='keyupChange.call(this);'":"");$Ca.=$Jd;$xc=(in_array($q,$sc)||isset($sc[$q]));echo(count($sc)>1?"<select name='function[$D]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($sc,$q===null||$xc?$q:"")."</select>":nbsp(reset($sc))).'<td>';$Oc=$b->editInput($_GET["edit"],$o,$Ca,$Y);if($Oc!="")echo$Oc;elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$B);foreach($B[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ua=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$D][$s]' value='".(1<<$s)."'".($Ua?' checked':'')."$Jd>".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$D'$Jd>";elseif(($mf=preg_match('~text|lob~',$o["type"]))||preg_match("~\n~",$Y)){if($mf&&$x!="sqlite")$Ca.=" cols='50' rows='12'";else{$M=min(12,substr_count($Y,"\n")+1);$Ca.=" cols='30' rows='$M'".($M==1?" style='height: 1.2em;'":"");}echo"<textarea$Ca>".h($Y).'</textarea>';}elseif($q=="json")echo"<textarea$Ca cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$td=(!preg_match('~int~',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$A)?((preg_match("~binary~",$o["type"])?2:1)*$A[1]+($A[3]?1:0)+($A[2]&&!$o["unsigned"]?1:0)):($Ff[$o["type"]]?$Ff[$o["type"]]+($o["unsigned"]?0:1):0));if($x=='sql'&&$h->server_info>=5.6&&preg_match('~time~',$o["type"]))$td+=7;echo"<input".((!$xc||$q==="")&&preg_match('~(?<!o)int~',$o["type"])?" type='number'":"")." value='".h($Y)."'".($td?" maxlength='$td'":"").(preg_match('~char|binary~',$o["type"])&&$td>20?" size='40'":"")."$Ca>";}}}function
process_input($o){global$b;$u=bracket_escape($o["field"]);$q=$_POST["function"][$u];$Y=$_POST["fields"][$u];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($q=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($q=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($q=="json"){$q="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$cc=get_file("fields-$u");if(!is_string($cc))return
false;return
q($cc);}return$b->processInput($o,$Y,$q);}function
fields_from_edit(){global$Ab;$K=array();foreach((array)$_POST["field_keys"]as$y=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$y];$_POST["fields"][$X]=$_POST["field_vals"][$y];}}foreach((array)$_POST["fields"]as$y=>$X){$D=bracket_escape($y,1);$K[$D]=array("field"=>$D,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($y==$Ab->primary),);}return$K;}function
search_tables(){global$b,$h;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$oc=false;foreach(table_status('',true)as$R=>$S){$D=$b->tableName($S);if(isset($S["Engine"])&&$D!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$J=$h->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$J||$J->fetch_row()){if(!$oc){echo"<ul>\n";$oc=true;}echo"<li>".($J?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$D</a>\n":"$D: <span class='error'>".error()."</span>\n");}}}echo($oc?"</ul>":"<p class='message'>".lang(9))."\n";}function
dump_headers($Ec,$zd=false){global$b;$K=$b->dumpHeaders($Ec,$zd);$Ud=$_POST["output"];if($Ud!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Ec).".$K".($Ud!="file"&&!preg_match('~[^0-9a-z]~',$Ud)?".$Ud":""));session_write_close();ob_flush();flush();return$K;}function
dump_csv($L){foreach($L
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$L[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$L)."\r\n";}function
apply_sql_function($q,$e){return($q?($q=="unixepoch"?"DATETIME($e, '$q')":($q=="count distinct"?"COUNT(DISTINCT ":strtoupper("$q("))."$e)"):$e);}function
get_temp_dir(){$K=ini_get("upload_tmp_dir");if(!$K){if(function_exists('sys_get_temp_dir'))$K=sys_get_temp_dir();else{$dc=@tempnam("","");if(!$dc)return
false;$K=dirname($dc);unlink($dc);}}return$K;}function
password_file($mb){$dc=get_temp_dir()."/adminer.key";$K=@file_get_contents($dc);if($K||!$mb)return$K;$qc=@fopen($dc,"w");if($qc){chmod($dc,0660);$K=rand_string();fwrite($qc,$K);fclose($qc);}return$K;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$o,$nf){global$b,$aa;if(is_array($X)){$K="";foreach($X
as$Vc=>$W)$K.="<tr>".($X!=array_values($X)?"<th>".h($Vc):"")."<td>".select_value($W,$_,$o,$nf);return"<table cellspacing='0'>$K</table>";}if(!$_)$_=$b->selectLink($X,$o);if($_===null){if(is_mail($X))$_="mailto:$X";if($me=is_url($X))$_=(($me=="http"&&$aa)||preg_match('~WebKit~i',$_SERVER["HTTP_USER_AGENT"])?$X:"https://www.adminer.org/redirect/?url=".urlencode($X));}$K=$b->editVal($X,$o);if($K!==null){if($K==="")$K="&nbsp;";elseif(!is_utf8($K))$K="\0";elseif($nf!=""&&is_shortable($o))$K=shorten_utf8($K,max(0,+$nf));else$K=h($K);}return$b->selectVal($K,$_,$o,$X);}function
is_mail($Jb){$_a='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$_b='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$ae="$_a+(\\.$_a+)*@($_b?\\.)+$_b";return
is_string($Jb)&&preg_match("(^$ae(,\\s*$ae)*\$)i",$Jb);}function
is_url($Q){$_b='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($_b?\\.)+$_b(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$A)?strtolower($A[1]):"");}function
is_shortable($o){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$o["type"]);}function
count_rows($R,$Z,$Tc,$r){global$x;$I=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($Tc&&($x=="sql"||count($r)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$r).")$I":"SELECT COUNT(*)".($Tc?" FROM (SELECT 1$I$tc) x":$I));}function
slow_query($I){global$b,$xf;$m=$b->database();$qf=$b->queryTimeout();if(support("kill")&&is_object($i=connect())&&($m==""||$i->select_db($m))){$ad=$i->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$xf,'&kill=',$ad,'\');
}, ',1000*$qf,');
</script>
';}else$i=null;ob_flush();flush();$K=@get_key_vals($I,$i,$qf);if($i){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($K);}function
get_token(){$re=rand(1,1e6);return($re^$_SESSION["token"]).":$re";}function
verify_token(){list($xf,$re)=explode(":",$_POST["token"]);return($re^$_SESSION["token"])==$xf;}function
lzw_decompress($La){$yb=256;$Ma=8;$ab=array();$Ae=0;$Be=0;for($s=0;$s<strlen($La);$s++){$Ae=($Ae<<8)+ord($La[$s]);$Be+=8;if($Be>=$Ma){$Be-=$Ma;$ab[]=$Ae>>$Be;$Ae&=(1<<$Be)-1;$yb++;if($yb>>$Ma)$Ma++;}}$xb=range("\0","\xFF");$K="";foreach($ab
as$s=>$Za){$Ib=$xb[$Za];if(!isset($Ib))$Ib=$cg.$cg[0];$K.=$Ib;if($s)$xb[]=$cg.$Ib[0];$cg=$Ib;}return$K;}function
on_help($eb,$Re=0){return" onmouseover='helpMouseover(this, event, ".h($eb).", $Re);' onmouseout='helpMouseout(this, event);'";}function
edit_form($a,$p,$L,$Nf){global$b,$x,$xf,$n;$hf=$b->tableName(table_status1($a,true));page_header(($Nf?lang(10):lang(11)),$n,array("select"=>array($a,$hf)),$hf);if($L===false)echo"<p class='error'>".lang(12)."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".lang(13)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$D=>$o){echo"<tr><th>".$b->fieldName($o);$sb=$_GET["set"][bracket_escape($D)];if($sb===null){$sb=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$sb,$ve))$sb=$ve[1];}$Y=($L!==null?($L[$D]!=""&&$x=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($L[$D])?array_sum($L[$D]):+$L[$D]):$L[$D]):(!$Nf&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$sb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$q=($_POST["save"]?(string)$_POST["function"][$D]:($Nf&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$q="now";}input($o,$Y,$q);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($p){echo"<input type='submit' value='".lang(14)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Nf?lang(15)."' onclick='return !ajaxForm(this.form, \"".lang(16).'...", this)':lang(17))."' title='Ctrl+Shift+Enter'>\n";}echo($Nf?"<input type='submit' name='delete' value='".lang(18)."'".confirm().">\n":($_POST||!$p?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$xf,'">
</form>
';}global$b,$h,$Bb,$Gb,$Ob,$n,$sc,$uc,$aa,$Nc,$x,$ba,$dd,$Id,$be,$af,$yc,$xf,$_f,$Ff,$Mf,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$G=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$G[]=true;call_user_func_array('session_set_cookie_params',$G);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$fc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$dd=array('en'=>'English','ar'=>'العربية','bg'=>'Български','bn'=>'বাংলা','bs'=>'Bosanski','ca'=>'Català','cs'=>'Čeština','da'=>'Dansk','de'=>'Deutsch','el'=>'Ελληνικά','es'=>'Español','et'=>'Eesti','fa'=>'فارسی','fi'=>'Suomi','fr'=>'Français','gl'=>'Galego','hu'=>'Magyar','id'=>'Bahasa Indonesia','it'=>'Italiano','ja'=>'日本語','ko'=>'한국어','lt'=>'Lietuvių','nl'=>'Nederlands','no'=>'Norsk','pl'=>'Polski','pt'=>'Português','pt-br'=>'Português (Brazil)','ro'=>'Limba Română','ru'=>'Русский язык','sk'=>'Slovenčina','sl'=>'Slovenski','sr'=>'Српски','ta'=>'த‌மிழ்','th'=>'ภาษาไทย','tr'=>'Türkçe','uk'=>'Українська','vi'=>'Tiếng Việt','zh'=>'简体中文','zh-tw'=>'繁體中文',);function
get_lang(){global$ba;return$ba;}function
lang($u,$Ed=null){if(is_string($u)){$ee=array_search($u,get_translations("en"));if($ee!==false)$u=$ee;}global$ba,$_f;$zf=($_f[$u]?$_f[$u]:$u);if(is_array($zf)){$ee=($Ed==1?0:($ba=='cs'||$ba=='sk'?($Ed&&$Ed<5?1:2):($ba=='fr'?(!$Ed?0:1):($ba=='pl'?($Ed%10>1&&$Ed%10<5&&$Ed/10%10!=1?1:2):($ba=='sl'?($Ed%100==1?0:($Ed%100==2?1:($Ed%100==3||$Ed%100==4?2:3))):($ba=='lt'?($Ed%10==1&&$Ed%100!=11?0:($Ed%10>1&&$Ed/10%10!=1?1:2)):($ba=='bs'||$ba=='ru'||$ba=='sr'||$ba=='uk'?($Ed%10==1&&$Ed%100!=11?0:($Ed%10>1&&$Ed%10<5&&$Ed/10%10!=1?1:2)):1)))))));$zf=$zf[$ee];}$xa=func_get_args();array_shift($xa);$nc=str_replace("%d","%s",$zf);if($nc!=$zf)$xa[0]=format_number($Ed);return
vsprintf($nc,$xa);}function
switch_lang(){global$ba,$dd;echo"<form action='' method='post'>\n<div id='lang'>",lang(19).": ".html_select("lang",$dd,$ba,"this.form.submit();")," <input type='submit' value='".lang(20)."' class='hidden'>\n","<input type='hidden' name='token' value='".get_token()."'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$ba="en";if(isset($dd[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ba=$_COOKIE["adminer_lang"];}elseif(isset($dd[$_SESSION["lang"]]))$ba=$_SESSION["lang"];else{$pa=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$B,PREG_SET_ORDER);foreach($B
as$A)$pa[$A[1]]=(isset($A[3])?$A[3]:1);arsort($pa);foreach($pa
as$y=>$ne){if(isset($dd[$y])){$ba=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($pa[$y])&&isset($dd[$y])){$ba=$y;break;}}}$_f=&$_SESSION["translations"];if($_SESSION["translations_version"]!=1926320121){$_f=array();$_SESSION["translations_version"]=1926320121;}function
get_translations($cd){switch($cd){case"en":$g="A9D�y�@s:�G�(�ff�����	��:�S���a2\"1�..L'�I��m�#�s,�K��OP#I�@%9��i4�o2ύ���,9�%�P�b2��a��r\n2�NC�(�r4��1C`(�:Eb�9A�i:�&㙔�y��F��Y��\r�\n� 8Z�S=\$A����`�=�܌���0�\n��dF�	��n:Zΰ)��Q�������Ak����}�e��AD���a�į���\\�}��5�#|@�h�3��N�}@��i����˞N�t��~9�����B؍�8�:-p���KX�9,�p�:�8��(�\0��(����R�,���@.��9�#����P��/�kz2�=-�(�߳�j��C�:����/����Zrxj��X�4M��;�P��0���#b�ʈ����L�|)���2�b���`��q�W\"��h1N�@�ƈ<h�H��C\$���Q�u�%\nX�	@t&��Ц)�B��U�\"��6��\$W@�Jk6��Cdñ0[�3�b��ʃ�9E�:\n���z5\r��6��Ƥ�c0�6F�k�2�bD3���֟�3�:��pf��զ�Z�ŵnF���i:+MP�Uؤ���0�I�)�B3.7�q�\\P-��:a~�i@��h=�k�vͶ�[-4��J2\\��_4�87%	R��2<SIn_���Ѐ���D4Oc���x海�Կ�8�ƚ��yP^4#�*:iB�,ލa|\$�H��:�x�'��04\r���ǌ�cӒ�K�dC��0	r�E���,����eKs�;�����k�j\n@���{�\n\0R� )�4X(݃�!\0Ǘ��N�%Ib\\�]ck�9s����i+�2'�}���#��-}�f�=� � ˺B����,ϧ�����4�#&��b��Ə;�@8:%��K�	�L*nX�R&�T�c8H�:�{G^��tk�)�Fq�r��I�% �3zfH� \$P\0003�@�	!�2d�#GN��bq���>��*=Q\$�L�c��ܡz�F.\"UG�I	(��D7 �N~3���(B�Xb�E+<E����4�]�FD�B\r��������6�ٰ��CHfZE����SO��T*`Z\npn5��E�B`��L�����e\"`�\$jS9sC�E��'`��W<F\r)�B���a�P(6A��X�y=��`�b��m�kI������W']0��(n��*�N���@���?)p7��B�i���2<q�AL�S���D��(��3�%�R�3y���S��\$!<%�rCAKA����\n�";break;case"ar":$g="�C�P���l*�\r�,&\n�A���(J.��0Se\\�\r��b�@�0�,\nQ,l)���µ���A��j_1�C�M��e��S�\ng@�Og���X�DM�)��0��cA��n8�e*y#au4�� �Ir*;rS�U�dJ	}���*z�U�@��X;ai1l(n������[�y�d�u'c(��oF����e3�Nb���p2N�S��ӳ:LZ�z�P�\\b�u�.�[�Q`u	!�)��&�<�q)�� ��F>ء�Ps7X�5g5�K�K�¦����0ʇƢ��\nS ��r\$��j�(�v����!Jb����q��0\n�����V�?�\$W���F��E{��-�:>W9�J|��eRhY�+dxB&�[�*��l�ꎠ(B&�����4S!��b�>��,?tO�	��?�:�X��3ޜ:������M�K��ά��J�*h������Ȓ,2 �B���C�d4�PH�� gL�)��kR<��J�\"���jڽ��Bh�EΡKDKo;�U����Qђ�Y%ȋ\r5 ��ڃ��ʲ[DV:|��)�N@�O��Y�oz�6�&ű0�*]��J	S�%�\$	К&�B��\rCP^6��x�0߃�A���m\$*�C!C��3�\0�94�x�3\r���t.P2�PSµ8�p4ԛ�B���\r��<���9����c0�6`�3�c�X�Y`�3�.�A��`�펭�P9�*zN��A\0�)�B2�#�*���tІ�pl�|�����4��D�0��ݏ�Y\nH�Q�j��l,[0�Z.�p�J����ZSf'�	�%z�0�˩>N�\"f&�#�v95=�;��2��ӈ�x0�8���C@�:�t�㿄#&�7��]Ԍ�x�7y��w��#�6�{b:w���\ra|\$���^6��x�!���\r��F6�R5��H���9O���O?d��&�JO� 1��07�J�BM_�¬���YV&2	��jC@plh��2*Z�U\$�a5Χ�*Cp���'�R�H\"�Nd����s+b��*�ә(e��#����b�Ei�5�J�c�&a\$��> iQ����7��\r�b�:�'���o\r�� �f,�\r����Fci])�&g��b�\0P	�L*�\"�Z�q0�)%4����S���bp���\r�����%�h�L�ba;�qʍ��kHP	@����ʙk�\r�;@�C8 \naD&\0�k�)�v�*	��`i|������c�fF��-ľM��?Nj������sS�ƨi�9�Q�ⱁ���\0�<@�� �yB�1H<M\$��0��`+���1��@��( ��6F�h��i̱�0�4�ut@�1?���T����	ܝ��0��n�I=�ܶ�r:�9#kű\\Khb�\n	�����	*�a*G�U\n*�*��� C)Ƞ�u-�\0\":��8���B P�\$D4%3�	�yE%0����\$O�L�q��\0�1k�4��਷&�j\"lpd|���OX�XS��1��Ȉ�UJ�%��\$�S�,U�5Jᐛ�;�A;ě!i��l�k�\0";break;case"bg":$g="�P�\r�E�@4�!Awh�Z(&��~\n��fa��N�`���D��4���\"�]4\r;Ae2��a�������.a���rp��@ד�|.W.X4��FP�����\$�hR�s���}@�Зp�Д�B�4�sE�΢7f�&E�,��i�X\nFC1��l7c��MEo)_G����_<�Gӭ}���,k놊qPX�}F�+9���7i��Z贚i�Q��_a���Z��*�n^���S��9���Y�V��~�]�X\\R�6���}�j�}	�l�4�v��=�H����D겹%�>L*H�8�@�����P|.�3d��m X���3����!r�'HS���1k6A>�¦�6��5	�ܸ�kJ��&�j�\"K������.-��:�Df�5Mb(�<��O�h�(�G�Zi2=�^������9-bk��1l�#���j��4����-j��/�h�C��>�BO��Km	�G�hLO<��B�Ť\0�'�\$���D�Kb��O�q��kT��`HKZ�u¶��H�T!hH���>Q/�H�UJ˶�4�A���!g\"�˼��M�6��ɩ�pQ�Jb�B�P����6#��'e�}	��=�C��.�L���Z%����j��`�X���yB8��IO��ZK�R�ډg����h�Ѡ��rP�Bں�g�Z���gQR����.��l;Ӡ�:M�_\$E�k6�!�z��6k����,#P9:>�hh~�)n�=�8	bIK�>v뫐�[�����}���8A]��\\��x�/�)��Uĳ\n�ؑ �zM��z�-!����l;㓺����\$�)i�לQz�ۮb�<�Š�G	�]6�dJ��\$rh!�nGk��UРx�+j)�����	�jMC���ˎ��I�Q�/\\��c�{j�يb�\"d�<D���*��ћ�|�=5SO+�w�\r�\$����w&̞<�xA\0hA�3�D�t��^�@.!�6���C�.\r��3�����x��9��� ��P���b\r��7�D��5ET�\"�x�>p���'�B��\r?D�G�S�t�S�D��F2Tr�8� �'v���)\$A?��Jj��bd%�ە8�U���8g=�g؎X�Ud\r�f�[sk�A;��@N��H\n5��\$��  ��� h*g)�ج;�_k���,�tB�ɋs?D��!���y_�����s&|	E�\"Z�)��iFB=�4�j�QG�|H�.�{�doMn���	�;���MB�,���0&C���z<F\\�Fç*;�D���PV�=\\�Qp�9�6�&�&!�!���̖����d-a����H�'�>o��8��aE��7�?�	���ڥ>rS��T@��D�Md�\rme��\0�Bag.���an0T�n�1�dHR�Z�@S�K��&��=\$}8Ub���S}��˴�\\km\"Z&�12�vUb:�\n��W��[���T	ݭrc�,��#\\۹3m�`�Y2�,�zVL�X��fYE���6�Y}:dŢ��[\n�B)���ҹ�L�+վ��\n�i��Ð�A�0@B�F����\$r�WyDq��z�R��t[�ϫ[�i-3!����s^�ʫ�so��%i��	���Ӽ��Dy���SF�ғń��\$s{e�̠bq[}�3i4\\\0��1�ꁊ7�!DV���dG�Dt���Ԏ�4��������r5�Cd��v�D��Jљ\n&9L\n�ќ+vԐ�cH�E2��a�LB/e��7iM��#�h���Q�V�)im�d!X3*�1�2��x1�r��I�2������Dcuɀ�++�up";break;case"bn":$g="�S)\nt]\0_� 	XD)L��@�4l5���BQp�� 9��\n��\0��,��h�SE�0�b�a%�. �H�\0��.b��2n��D�e*�D��M���,OJÐ��v����х\$:IK��g5U4�L�	Nd!u>�&������a\\�@'Jx��S���4�P�D�����z�.S��E<�OS���kb�O�af�hb�\0�B���r��)����Q��W��E�{K��PP~�9\\��l*�_W	��7��ɼ� 4N�Q�� 8�'cI��g2��O9��d0�<�CA��:#ܺ�%3��5�!n�nJ�mk����,q���@ᭋ�(n+L�9�x���k�I�B��4��< �� ��5m�n�6\0���j��9�z�� �,X���2����,(_)��7*��n�\r�%3l��M��� \r���m��K�Kp�LK���C	��S.�IL�G3�W9�S��2b�!���|���;I7����#��=���M�T�R�/�\rҞ���Y'ERj!*����؃�5eO�;w4�ӁM��\n���AFO���W5b�[��\\��*|NK��EP���#!��YȪ�iX0]�R0l*�#c\$�W��HK^����9r/��A l��(�m��N)�R�7:k\\�t���n�I�ºE�v�M�]�Ey�ac�l+r�\"�q�@y��C���ܷJ}�F5�=]z�d�3�P�>_�.)@�F�4:� %�c1�٭䩂�\\Q�5R`X\"�e��@A��4��mZ�ٕ��6h��Nڟ44�p�\$Bh�\nb�:�h\\-�\\��.��M���M���,�4�y`�:@S��#��7��0��%�o����ql�XSR3P*\r�8�0���@:�Ø�1�o��3�`@6\r�<h9�����#8�f�6ƃ��aO|��e9���2�Ih%F�Y�Joĭԓg^axV�\rw\ng��D��M���WVP�[q1J����ʍ��l*��bD�`�p����jՂ��ՓT��`1N	��9���z\" s�9/���iv��\0xO������s@��x��d~�2� ]8/��9���CHo�����S�\"�_@O@5� |Chp=��9�@x�>.'�F�޿�� y����z#kύ���*�L�R�u�T��;4B�_@�I��PgJT&�^TS�<\"N\r���\0ΠP	AS!��Y�`�a�@P\\�J�E�E8e�Nɋ6\"��7��V�ށ&P��\n�Q4�,rʕ\nV���j�V�ʱXIM˔�@âX����\0�sf-�&wOqM<Ql��1� T�\\�_渀\nU�Գ�&���>N� ��i>㜘?����|d�fA�6�\0���G?��7�N�;���)��P����\0�¡�E�u@rd[���L��aJ�� ���%\0R�:�\\�NS�6o:�)�Ԍלd�Jì&ʘ�7���Po� �, ��\0S\n!0c�ydX�Rf=�dLL��z��:�N���=c�d�nW��\$9(b'���nCW�-��_}۸p)�\$�Q���PqM&\r��s��ܕ�n.e+�\$\r�V��XRl=Q7Z�8���T�)��/Kra�#jM��_2��\r(�(!�\0�\n�pia�G�(�a\r�����.C3ғ��#Y�4b( Rt7\0�0-\0�9�<.�K�^`���޲�\n�	O�e��0Xe]ԇ�v��j*�o��*+~�ゾ±�`Y� ҫ�qps)�eR,u_�t\rg��/�?Eٍ� �(&�|31ْ��ȼ�n�.��5�ܢB���R�M�`2�uפ�tJ����Q|D���0&U�#�ɅI�8�Ņ^��y�0�\n	�J��]U�\$�L<��\0_��H���\r0���&zB���lDbOpc?A�8����J����(l|l�[6�t�fu6XXޞ�J3n(vO���5���>�孧�";break;case"bs":$g="D0�\r����e��L�S���?	E�34S6MƨA��t7��p�tp@u9���x�N0���V\"d7����dp���؈�L�A�H�a)̅.�RL��	�p7���L�X\nFC1��l7AG���n7���(U�l�����b��eēѴ�>4����)�y��FY��\n,�΢A�f �-�����e3�Nw�|��H�\r�]�ŧ��43�X�ݣw��A!�D��6e�iM�~�}œᣘ�!�2M�!���P�IW�I�K����l��m�0cL@�#A\0�24��*���#�\n��<M��+�s�hr�5����ү#��*#���ˢ8�B���/+������_ P�2��`�G\"c��\n���H�����Dk��łbr���P� 2�j�5(���G\"p�� ���*�� Ę��L�McR�7MSd���R���\\s�b�J�j�3�#L֌�\"9+.nbc-�p��#X���,\"�2��P�6ГпBxȗ��`�+.�`�Ċ{л����C��Ԫ�N����2�Ӥ%^�a�S/��ͫ�>2�3}y_ 6}�hؐ���%Ø�U�@t&��Ц)�C �\r�h\\-�7��.�c�>�BJBF\r��0�'�2�75f9U4t���hڍ)8�i�cT9�è؁\r�:�9���厌4B���T�\rêaJ\\'��n� ��)��R��3�?�*���2�6��p����B���\\+5�\n�S��!�h�[/96��1��P� �Ec�����4�w�@ #C&3��:����x�˅�>qP˘���\0����H�7���5#�/�����H�84�`�:�x�AM\\|4@m`A�ٯ�EPcj�v�>�k��#�j�����9=[7l㞞�/K�p�2����ٯ��{��4��((�?����A��p#L���Q|x��9'f�XV6zsjx��1��C��\"\rO���\n�=0@���3�oOl!,�*X@d\r(�F��!�6�H2��j��fDG� �G6ލ�d�9�fj��P�L���xS\n����J�V�G !�������� hH��XTK�.���B�`aSn���B�|��,3&mK�XK;	N(0���!���`���>��<���[8rbf�3 �LC��6�h˅9J@e9�i�<��C<�Jl%-�P��.��<�!�8IX�P\$�!M��y��V�ʘ\$�LB�[�CG���ځc�*2��>	Pv�sYAI<rQ\r�4T*`Zpnh��r\\��,�\r7L�xG�)��pZ��\n��3��ՠ<w��*�0L�bVai�'�@7�\"<���b����yfbP��E��\\O��c�s�2NB�E���-m8��rJ�L��T��O�jV.�Ё-2���Trȍi�L��JB_��\$��ߘBv�Uo�����i���e���>F@PR2���5�\"";break;case"ca":$g="E9�j���e3�NC�P�\\33A�D�i��s9�LF�(��d5M�C	�@e6Ɠ���r����d�`g�I�hp��L�9��Q*�K��5L� ��S,�W-��\r��<�e4�&\"�P�b2��a��r\n1e��y��g4��&�Q:�h4�\rC�� �M���Xa����+�����\\>R��LK&��v������3��é�pt��0Y\$l�1\"P� ���d��\$�S��L�\$�y�������)�n�+Oo���M|���)�N�S�,�,}��t�D����\n2�\r�\$4�쒠9������I�4��\nb*\r#��)�`N���(�ˍ�(9��\nH�0K� !����K�D	(���+�2��� &?��P\"���IC�B�B �(8�<�H�4�cJhŠ�2a�n|�4̍Z�0����˴�@ʡ9�(�C�p�����1����^t8c(��(�1؃��zR6\r�x�	㒌�&FZ�M��.̓29S��92��W �e��M� P����q]\$	���s\\��ӿc����1���OY�U�n\"��6\$�4�f϶�`2�s��ZV��G�L��\$Bh�\nb�2�x�6�����\"�T2ՐJ��d�4m*J���0��M������\$��Zt�s��ޮ'һ���<�31A2�2OĂ<��8¼��u���/��aL.7�n�@!�b������2�D9/H��c��8̺��TD�(x�ڞM7)�&)�M�L��M�:fK���V���͹;	��p���;���	����@&�C(3��:����x�υ��m6�����D\n�0H^1	+b:r��76\ra|�>����}��\0�7��H0�5��Y,ܘ�	M\"��ob��	�P���ڞ��'��+�4�2��2�}�e}Uj\n(	�7�۞AQ(q\nd�o���;�t��R��EO]kh�8e,K�Z=����@Oj#����@���N�����DCɤ��ܭ�Ԭ�M� 2�\\����z\0A��������1��l��F~�<)�B��>#�3��\$�B�e��� \$8���y�.����ܘ!��\0͠�VBWj�mе�C#\n΍��#�X1p@L)p,p@���M�ܞ�՛4?�&L����1�T���(Vť\0a\\�H���=)���3G`��I])H�+��P����J�*�qR�魕�e��EL�X5���\"h�6����Ҏje���2R�%�d��c_O��Du�P��h8[�@���*%�.�ٝ��(�M��0l�JϹ��g�(p�}6�|�UZ�/D�0��&Hy^����L]E�Ǟ��e!�S�a�t�I#�j\$�|�L�La�͛eԘ��	��]��7��Q\$�2�����Bh|��\"�p�Rp衘�l����IEL�\0�\$�Y�Aʦ�5���e�ʋ#0�Z�\n��\$�^9��";break;case"cs":$g="O8�'c!�~\n��fa�N2�\r�C2i6�Q��h90�'Hi��b7����i��i6ȍ���A;͆Y��@v2�\r&�y�Hs�JGQ�8%9��e:L�:e2���Zt�@\nFC1��l7AP��4T�ت�;j\nb�dWeH��a1M��̬���N���e���^/J��-{�J�p�lP���D��le2b��c��u:F���\r��bʻ�P��77��LDn�[?j1F�U5�/r(�?y\$ߝ��������ͦִJ�Mx�Ɋ�(��So\0�4����u��=\n �1�c(�*\n��99*�^����X�����a����8 Q�F&���0�B#Z:����0��)02�� �1��P�4���L\ni��R�B8�7����4Ƣ��=#�l:\"�-�����	,D7�B�,4��B9���j*Mc����;���'5n�\$�\rq J2��3��?�T�??K�0�������\\��b�L-C�5��2t4���ʋ2�&&��5Ə`�9��(Z�\0P�N�i�G\nK��P6���.V�#D;[�U�l<��'d�Ct>���H�f6uq1\r��jփcmY�՟Z(��k#�V���|�\$Bh�\nb�2�h\\-�X(�.�ՂH�/�P�:JbR���2�G�c,ӍV�\$�1�2�3]\r.�@6ѣB4�\rc���ɼ�1N-0XYn&�#RcV����6\r��d�6P7�Nu�ey��P�Eno����y�Q���i��\$5l�&J�iznY�j�/�橮��kM�������̓4��i�{�\ri�@!�b��C���C2R6�S�3���]o�j�2n�M\$�.�e���2\r���\r�S�G�ͻ|F��S7>����}�˼\n��L(M��K��vC7�\0�3��:�xt�㿼T��4%#8^1�az����`��K��9�/�Q�5�A�C�;H����x�>d���� ��݀&����L�+�}��`R���q5O�^�BpN���%e������>-T��S��èp��>��pp!>F��0��H\n\0��Z���(*\0���0�ݪ`v��8D0��Bmf�T|�#�<d��8E	�ۂ8��j�ӯwp����R����53��݈��T�\rr\$��	B��2>\"���5�أB��\0vW�앶R�Ɋ�:�@'�0�w\rk�j���\r��%�=�@ʋxo5�ֆ`�é��xԇ\$�d�+.�Q	����`�\\�z0#�x�(�C|^&�*D�~L\"�Br�������\\�'A�ǧ���\r�s<a�h���\r�b��5��\"C�u��(O��J��Dd���\rq�T�Ҷ\n(R`a`K�sR�h�\"�ŵ&�xȺ�04��>RzS7�y+l@6��P�#Z#�\0�\nӈQ�\rcP�##F���n1H*n��(�I�b���ҡqf(��\n�P#�pJ��%3�h�:P�V�d[��9WI>���4�T�t�\n�_�mv����\"(���'�m�?#h�@T��&E3�ti`z/�C���K#�b��B����Q�h���g�\"y@�ćB���y-e��aZC����Q3\\��H��<�\\�����kP�Y����v��kQH��8;�/Q�@�ڔƒ��Yk��<O��V*e�K�r\r��B�#\0��`0\$E�aEQ[XiM�\0";break;case"da":$g="E9�Q��k5�NC�P�\\33AAD����eA�\"���o0�#cI�\\\n&�Mpci�� :IM���Js:0�#���s�B�S�\nNF��M�,��8�P�FY8�0��cA��n8����h(�r4��&�	�I7�S	�|l�I�FS%�o7l51�r������(�6�n7���13�/�)��@a:0��\n��]���t��e�����8��g:`�	���h���F���A���wZv�\n)�0�3��h\n!��~�kjv�-3�e,��k\$S�V��G���)�O��������8���\r�;j����螮#+�����2���\"5�C*�\n-\0P������!K[��7�`�7\"czD��\"c���\"�Ȣ�sB��Q`�<�-�.���\0� �HK\"���\rC��@PH� h����;�@쳎k#4��m����K\$2C#���� ���k\"��B0�)\n�r|\n����Κ��jd��(�IR+`0��-I�c�\$	К&�B���z^-�e-[W���	;6�#A)\r�X,�� �ҍ�0�9����@Q�j:�\"����87c��1����:����9����i#=0��j�6�êjaJN*�����4\"�)�jƄ�ah@׍ѥ#\"�㓈���C�<\rX��S���4��ʘ�كbt�48��</C#,BN���Z5����H8��p@!\0О���D42���x聾�\rؼ��8^�jc�kjcp^.���:hB�ę��XD	#j<�)Qx�!��8�D�,�� -\0@3�M.h?�S%�����c(*:87(ֶ��09��,(�\$�:��#� �4�j����*�I�t˳a\0�\$\nm����P�8�9;�k�Ĺ^w���\"����9�h啥Ib\\��\\�̟�SP7�����x��\r������^�] @7\r��\r\n{x2�#��hC1�%�24��Kd|�?��*�%\$����wπ�>'Ȥ�#Z�6�Dy�������'���==���2�2I8uO�Ō��Nc��)dt���R��y\naD&���K=�P( b2ړS�.p��\0�!�\n����R\nt����q�\r�TTcTd��6��	:�HD`8*�F�J�R�8���)c��\$�\r��V�kp����aL��K|3�цH��\nA�rNRKY2B�F�2�vʋ�4yH�(S�|b�rD,�A�C@J���jp%�\"3-��w#���0�1�A����rD��3������C�D��9�&&���F���J_\\K�A��S\0��4^��z|�B�aZD7�,���_�9'�U\\�(�hg0�,����J܄�-���7�\n�왙��B�F@SBu���";break;case"de":$g="S4����@s4��S��%��pQ �\n6L�Sp��o��'C)�@f2�\r�s)�0a����i��i6�M�dd�b�\$RCI���[0��cI�� ��S:�y7�a��t\$�t��C��f4����(�e���*,t\n%�M�b���e6[�@���r��d��Qfa�&7���n9�ԇCіg/���* )aRA`��m+G;�=DY��:�֎Q���K\n�c\n|j�']�C�������\\�</���rQӯ@ݚ�S����J9�7%?,�a�a#�\\���1J*��n���.2:����8�P:������\r	f��:9#c2/�K�-)Sޡ��z-:`T`��0��H49Bp��:C���(�6���	���\"�C��C���(#��;�c��7��,KR���.��b�����F=!��<��HK;O	h5 R�1��\\�8b펮C����Ģ�Q��0�28܍���ލ)#8#���#�`���H�\n�\n:8c0�#p��S�X�1CKL�OaWV�k�Y`�m�]= v8�Wm��e�V�?��Լ\$	К&�B��,h\\-�Wh�.�l[v:�l�T�\r���� �\n7�Ԋ�ϡ���_�b6�M��-���3\r�X�7��\0�0 !h��tj�n���I��#@��\n������\rȸО )��g�� �!��-� ���7c�D�d�Q�e�;�ڹ���÷�r�g�v|��b��#��a��;#|��&L��H0�)���3T����Z�e���\0��bZ54�3�U83�c �6��Sɥs[I�����;\r\$V�j�Al�-˹��k%��3����֡�D������x����ڀ��t�3���^2�Z��@:0�`���3�A�6�|���H�x�!�	~n��M�(�[�0���{r	ʎ&aT��\0�d\\y'2'T(��B�-zfb\0/E�o�+d�2��0r:F(��H@Jq:R%l�B\nsΡN2&qy@�aӄ�􎂂�\n]qO#���\$!p�n�+�F�hI\r�Q��5B�ʢ�'\$ݟ1\"|P2�H������ΪD��\$0]92j.u�v-�Y�\n�q��gb����tՑ�AC#�/gUe��6S�sD���ˣ�- �F0�T�]~��Q�yJd��Ç��H3�����@�{E�Is��剤�i��3��Y DA�:�t*���\re 7)v�A�D� �D&J4�I�� �P(tFXZ.6.����aC��f/�.����:34��bR��2��=O�A6*�@�\n|'4��D \$���u��B\ng\r&����h��\nj�6���Vh 7&��u1֬�\$��,�i�R� \n�P#�pie�����Z��4�'�z���Q���A�&�J5S����ئ����(%K`��0�\$F<`(��N@�Q�#3=K���b)y�k�vXU�:�Q�*E���BD	�[%��IaIa4��f�:}PzI�h&��T��D%��6�BX��s�!̖u�R]'\$	<<TʮՀS��U����1�I�0@*��޼S��Ik�\0";break;case"el":$g="�J����=�Z� �&r͜�g�Y�{=;	E�30��\ng%!��F��3�,�̙i��`��d�L��I�s��9e'�A��='���\nH|�x�V�e�H56�@TБ:�hΧ�g;B�=\\EPTD\r�d�.g2�MF2A�V2i�q+��Nd*S:�d�[h�ڲ�G%����..YJ�#!��j6�2�>h\n�QQ34d�%Y_���\\Rk�_��U�[\n��OW�x�:�X� +�\\�g��+�[J��y��\"���Eb�w1uXK;r���h���s3�D6%������`�Y�J�F((zlܦ&s�/�����2��/%�A�[�7���[��JX�	�đ�Kں��m늕!iBdA\$��*�M\n@Pd0��0�7��7��lH桮�W/�Jj��(�\n�>�r��ϼbgfy�/.J��?�PE��WK�rC����)��/����J�\"�\0*�b���Ҫ�;\n���0�:ط1�\"���TIF��l��h�ʪ�Ft�.KL�\$��@Jyn���\$m/J�4�J��%o<Ӥ(e���|�޽���\$�=*�\0���J��ZŤ��oi���օBM:���E2�����N+���!��Qv*�1:�D����F|��� @1#���>2��)r�5�>&�xH�A�'�Ͻ@��L�v��j��8k�z���\"@�Ԗ2\0���\"T�2K�wI`P����6G��@L,�{�z�0�ʧ�+������-a�.��\r���C�y��a�6����ݲg���0��Rg/�IRg!ѝg{�DJ\$yn�ax����h��+9��_<�rF�>��b\r���N� �(B�_��A{�nH��1,̪}-���/X�_0� �'~婬ѥ���e�HY�¼����,��=]�wCh�Y�>�-�Dr���ɺ�3�l�K��Zjϑ�jJ5�'IK{ȵ�c���/�Z^��7�������>�=�'���c�!/���uaRʆ\"G�\"%\$�JIhC\naH#�L���K��P�M\n�N\$� ��U+�\$i@�_��(�tA\\��.eEᢗ�ɒ�%i�#�w���t4%\"��*}�I&,��M3R ��!�\\��AB`xA\0hA�3�D�t��^�\0.!�6���C�.\r��3����pxaA�9���\$ ��FP���b\r��7�D��4Ei���%>~��/ �\0���TKI�s\0�\n�_�	�\$�8V?g�/�)\$�PøVN��_��\"�yTT�a�U��z!�&�\n��f�oX�OIz�K���W�I��uL���l]\nz�E��\0�\"k�NL�[3�T\$�Q	��\0�\0(0@���_���vE����-��TK1N[�LH�+=Zfp��JaE)�;�P��D�TK��JQ\0��,��=;M'�SQB���=mԓ&�nˤTE������A6w�&�¨z骙��/ԁ�%�L��(BHi�L4��g�S�dH:L��՟��,L*h>���U�If\0P	�L*Ba�'	9Ԯ���\\UӅ@,E�&U7�U��f2�s�}�Qm^��!yV	�>dQ<�����?�g�5R�t�g� ʖ�@L��PD�\0�(�R�3�\$r�1Hu�����9gdi]���1ӯ����E.�z%�^o/!#����g�q'Yi��\"���}�;\$,�{�H_�m����߸&����E�\r�O���\rjHx���#{�Pv	��Q�*��la�6����|D�����|����(%rV)�Dv\"�*�%������F��h���}�\n%\r�!�P��h8)@��OS�apy��Z�6�%����,�=��/L)߫F2�\$b_	�y\$����k�tjD�Ml��c�n�r�2�<�I�B\nB���H3��8�H��E2��2���2���qyN��M*Ű^g�7�X��4+�2,�J�QFH��LP����駴Y-�lG?bXH40�vIz=�Mp��Иk�ÿ=�Fr�+��3e�E��[RWv}�R�Nw�J�Mƞ���c�Y��3x�s�cAf��������\"�T��9���B2/;A#���\rփE�E#��ѡu���o�4|�(";break;case"es":$g="E9�j��g:����P�\\33AAD�x��s\r�3I��eM�����r�s��v7��DYT��aa�b���E2H%��Z0%9��P\n�[/����Y��2���h5\r��Q��n3��U Q��i3��&ȝN�t2��h��2&�̆�1��'L�(>\")��DˌM�Q��v�T�6�>g���S���x�ˣ��Ȏu��@���N <�f�q�ϸ�prcq��\n)���}�#u����]�ri��&f��vI���ࢩ�P����� :��\"\n�ؿ2ô4��J������?j�ҫ&B�ҍ#\n\n�9��H����\"kP�2��P�2��ۂ4-�!�*�O4@)9M������a��p��Úf��d<���/�*s!\r����C��R�����*�2����\0�<�\0L�5M��<�K`H�� g<�1{���cI�Y��s�� �p�9FLD�6�/�1�4����@����P�2�0��# �����f74�D�2ӉR�V��t�4�L�VcLb��CY.�B@�	�ht)�`P�2�h��c\r�0��P�� ���p��Cd|̳i[\r�0��\rʻ�4�sv!Ē�P�#��*\r���78/�=J\"��:�Cd���ab�98#�]/K8A7�p��S��[\$!�b�����Z���6��VW�F\n����2�C2�6�bcyߴ#�[ы�-�R�U)����ZS2��ÉCo�`�c�1?p����A�LZ8��/	@�c��\\����p@?cC3��:����x�Ʌю;�p��<��#� ^/i;P:q\"��7\ra|\$�h�F⇁x�ch�F:E�MR&�2B:#1\"ox���>12H�L�3�MH�����_�%��1��t�&�/����+�C���( �zH�5��P�*2�0c�4Y���=�|���^ECl\$�0���EK9�F01�b��\\g���&q�ri'���v�a�>H�5��O�b>!�:�3`��PI\"!�t�4�T�!9���0�S	>D(6�J��C�2P\$��y[��&A@'�0�\r{�W\$q_����G\rp=t8M��:]���AL8���C\nB�iP���^�cF\$�5\0@Lid|*�@������W��Q^�`&D�B�I�?J�R�yNN��0���Jc,�A�;oѣ��dxH�aȢ^+i|�&�S_�����`+�&��%��\$�s>-�.�c�I�q2Ƙ�4H��� \n�P#�pE�q�0e��&�)+����#&S/>Kt�{�M\r�;%1R�h���h��	���gx2sO�T���\n��l�0�݅S�y �/4v�5 ���?f0������mzK\0��qj\\���ތN�E����@��CSL����&d�c�挧\rأӞ��Qx����v[�1�}��}�\$`U*�P�	}���UY�L";break;case"et":$g="K0���a�� 5�M�C)�~\n��fa�F0�M��\ry9�&!��\n2�IIن��cf�p(�a5��3#t����ΧS��%9�����p���N�S\$�X\nFC1��l7AGH��\n7��&xT��\n*LP�|� ���j��\n)�NfS����9��f\\U}:���Rɼ� 4Nғq�Uj;F��| ��:�/�II�����R��7���a�ýa�����t��p�Q��l��7׌���9���Q.�S�wL�����(L���G�ye:^#&X_v �R�ө�~2�,X2�Cj�(L3|����4��P�:��Ԡ���88#(�޷�Z�-�\0000��!-��\n�x�5�Bz:�H��B8�7���/�d\nH2p���C�0��rL��#�ނB`޶\"�	Nx��\n�K.�4�CPʈ �����2:,��3�PH� i@� P�:'@S\$4��V��L�B��6/�G(��\$�jV�	q:R�*d�҉�ܣC-�Hܤ�j�5ͣ�t�/cr<�B\"@�	�ht)�`R�6����g�\"�`���`� �Cd�2��\\���0̍������Ը��c|�J�+<�Z�1�l �3�b�-�C�X�W��3�/b^8�S�2��R�\r�x�0�a\0�)�B68=OeG<0� @;-#m�:�cJkݭ�ـ;iJ^7'�*�s1#L��\r�dJ3�j�?���fL���2���%H��K��8M�0\\���9�0z\r��8a�^���\\�f��\\���{�\r`ܝh!xD�E� 鳋�5�A�6�,�7��^0��� ��z��Q@�%P&.�����+4� |�~6?�¨������>CK�2;��0IRX���KF�4�ol��@������@�\rkN�5�u� �i����k�wV�]��+�k�Oh�(J'��/�H�y2����s:|L4Ƽ6@���fJ̨ �rP�Y����8�Y�&�@'�0�_�%,]��3�F�I2�\r��z�9�Q�-�>��9.&V?�LR	Ph\0���P�e c1��Ȇ�`o�xgL(��@�'� �#G����RN���\$�E^vCL��3R:-Y��g`(*��y��9*a����  ��ŭ���{Q%�'��X����N�����\n�9�Ei!��Və0a���N3�.n��P��h8�A�1��M\\y+k%H�'X�	5.%̍�rd���?�=`�/�0yF,̓�\$��o0hD�B��\$�8���J3�M��9	r�j*�\ro��bw�\$9�f+&R�JMY�Ũ���*nIX!�]�B!-��@Nf%�a�eG�D��\\2�����r<�IR�9�A/\r\$\$";break;case"fa":$g="�B����6P텛aT�F6��(J.��0Se�SěaQ\n��\$6�Ma+X�!(A������t�^.�2�[\"S��-�\\�J���)Cfh��!(i�2o	D6��\n�sRXĨ\0Sm`ۘ��k6�Ѷ�m��kv�ᶹ6�	�C!Z�Q�dJɊ�X��+<NCiW�Q�Mb\"����*�5o#�d�v\\��%�ZA���#��g+���>m�c���[��P�vr��s��\r�ZU��s��L�v4���K�\"��[���GXU�+)6\r��*��>n�?a �&IYd���cC1�[f���U6�	P��H*|�jڮ��\$+Tɬ�ZU9P�&��!��%E���2�z�'esΪ 0����r�41\"Ȉ=�	P�?�:���o����R@�7L�x��h���r�˾��&�����̜e7D��G\$��B�%v�L.	^�\"�#�-@HKA>�#��\$;�@PH�� gJ��c���X��iN��+L)���R=�ڈ�L	r��m�ê0�#�LN���|(X�pR���L�?�s���̛\0l�ɲ�_��\\��%�+�,Am���x�P�C<�\\s%��H)�&�X\$	К&�B��c�<��h�6�� �\\Bp�M:�vh9�c`�\$����hE�FPm���kd�؋I8,��S/�������V�y:�ɱ�U��I!�[z��RB\"��9d���@�٣?�(�uD?�}�O�f���Z*C�ޱB�)�\0�7�c(ݨ��eN�D�p]�,)S/�!��ezdtLC�終K]��bKx�j��lA2�%6�������L���n,Jػ;d���C!� w5�\$1>�����J΄��\r��3��:����x����6�#(�\r����\0�:nØ�7��xE�>��:y\"��6#p�֢v�p�2 xaɉ�4(����xI;�U�Tܪ	H\$<��\"�I\nr��A�ClL�b�Eƈ�/%����o�&U<��B/:���hU!JCj@\$�ࢉ��s��@\n\n)ql�:4���I�67�p��`�e�#tbr�9�E�5��Dh�I�Yi�y�jѝ2-���� ���1����ޠ�FH�y\r��@Ҡ�po�m�( �Hs8�P��XfA�6�\0����rnA��\0�xs��H�\0�C8e�I>�X���F%L��Gt�K�b\$��Vj,�p�r>�I\$wB@�?��R�I'Y�`�D�2S�6(��S�XP��C�x�0�&6O�.7�t��B0T�ΙP9�j�k�;ɫ:RmB1ħ�`@��.M�P䄟Q��f�(� U�P&�O�P�QE����\"����G�KOt�����I�T����G����I�DS<�J`��`+��1����a\\X��.�����U\n���B]�] Q��:�1N)�<��E2:��G��|\$�	#w ���'A�\nx��^*u����@�BD��lϟ�4�H9J74�o���b��] �.�Ewr���\r��갘Miϥ,��&���\\��E�d�\"!!v���Tբ]��X֛���Qg����j�J�÷Q�:1�����A+et\"���}�\r�5h[6�cO��[���2I�RŔf� ���";break;case"fi":$g="O6N��x��a9L#�P�\\33`����d7�Ά���i��&H��\$:GNa��l4�e�p(�u:��&蔲`t:DH�b4o�A����B��b��v?K������d3\rF�q��t<�\rL5 *Xk:��+d��nd����j0�I�ZA��a\r';e�� �K�jI�Nw}�G��\r,�k2�h����@Ʃ(vå��a��p1I��݈*mM�qza��M�C^�m��v�����ny�h��a�Rk�z�\n(H�X�\\Z`\n%�:�o�I����؂�-�M[c����j����i�82�C��ٽ�[�ɧ�@�84�P�:�C���4�P�߄>�	���4�Ct6!'mJt7.�P� �P�2���1`��|6\"��8ޝ=SPRB	�қ%�۽H��� �		cd���<��\\�,(1���\n������ʆ��x�:�!,���@�<��r>��\\t8c.3����c�&?M<���B���\$I��\n����4��l�\n��&-�D��2`P�4��H�K�V�LpJ�U�Y�[U(����3\\6W�\n�<��̀R\r�UYSUfZ��hCs�.	К&�B���\\����y���eR��@�1dv �3Ʉ`��4ي	b]�J��a-�3[\r#\nx6��J<8-�`�䎣sE�?���7LؓE1c�t�#K`X)(�:�T/4�N�FL�>����6V���xꭐ�I�4h���;`��g1=��r4�r͒����A�'\n\"y�d�Le+Uɚ�b��#�;���pAV[�`@6G#A��Κ�@���a7y Қ�(�K �u\\7M-ŭK*x��#s)H#�[�XҬͳ��R��2�����9�0z\r\n\0�9�Ax^;�rO�.at�3�뿲<H#s���^9��/�I6X£�Х!�^0�ϰ��C|��.��h��M�1�b���\ns����́J�|4�dR((c�9�?f�7��i��CG�\0\0����G�0@\n\np)3E`2�����!�AE���f�Na�`NQ���Tá5	eܠbx�	�A#̌6����.��@u���ZR �x�b8���J3�:8u�{m=�d&�� !�����Ù}?f�RGC��ɫKg���\0�T��,�ȶ���N6ƹ~���#�#��3��pS0i��:CNQJ�w�ȑF�L��8x��)���%�G'�*\0t���7��ӷ��`aļ���RTS�?���gBw6�j/DپE&�e��\\�M�\\zxhH�x�6��8U��q�\$%��	p�%֓P���`+6�-��0��mm�d��,P�J!����8�K6�dKل��F��C]3)Y�6.��E\"O�#m1���V�Q	�uy*�:\0��aL:I=���S~	�'5�\r��z(��c�����'pi��w1\$�Q1���;W��@AJ�u�8��R�䗹?4G��ʓ�bO\n�W(�k'My�@ȿ)�\\[L���mv���";break;case"fr":$g="�E�1i��u9�fS���i7\n��\0�%���(�m8�g3I��e��I�cI��i��D��i6L��İ�22@�sY�2:JeS�\ntL�M&Ӄ��� �Ps��Le�C��f4����(�i���Ɠ<B�\n �LgSt�g�M�CL�7�j��?�7Y3���:N��xI�Na;OB��'��,f��&Bu��L�K������^�\rf�Έ����9�g!uz�c7�����'���z\\�/;{��x��kG'���,shy��f3a}���B��6\r#�+�����c��`N�%\nJ�< L���*�����⼢��@*#��((7\0P�7��*���zP݄DʁB�0�es\n��K���B�82�#�#�q�&�'	�\n�#��G�9�Q���-c]0t|�1��_\r���7�j��쵈b�»C,d��`@ɍ���:\"� @7�h���u!I#�8�\r�H�� gP�2hʛ!�C��%�\n_G�e�N9+����PB\r#:B�S�#s\n�niB�B%)��Sv\nI�T!hK���o<���@�\$cΔ'��&�\r��&R�u�2\\hK����M�u#�t��p��@t&��Ц)�CP���h^-�8��.��C#�72v�>�hEUK��\\ׯ�*t)��Lb\"2nń2�����\n��擢��>:9����n5m�AN��L������� Wfn7�3Nd�欍T��R��ɤP������oV�t��B��5��Ȇ)�B3ڲ��K�AJT�o6�0���k<����� �X@׻4��^;���_�dR���1����?o��BP֤w'9�.�x�����CCx8a�^��H\\0���r��~��C�H��|0�W���5�5�A�>8Q%M��x�&)��+�3J�)�34�L��l��~_�� �Dj���5%t��4�S�CI�6�rɂB�I���ׂ�H\np:�\\ P�b�c�!\rĔ��N���k�:��^�Q��[��P�Ώ� )�<��7hd�� p��P����W��:CJi�I�v��7���qH�0��!P�Q	/4�ƊQ�93O�4;5ĉ�#�!@'�0�O�� ���c���Hd�.6�~��)�M�y6ԣ�D�'������ga����L!\n����_@oy���H��BJ�M+�L(���WB0T�h�� �҄�i. Et��\nLIBL���N�S�\r~/c;	���w3zp>�ĹEL�v0�.��*_J�~��y�f�Zޝ�.q�Y�WZ�k���/#�98m1t!|���X�`+h5�s:W`ܤ7ڑ�Zc��X���I��jhx�d�	����g@ \n�P#�pN������4Hl>�U	#��cQ��H��Џ�G\r#qW��@�-\0Q����`��n�\r��=!IB��\"��c1�	�cVL�#y\0��������t����H��P����C5���\\j- �7�LC\"M,ia45LYHe�v���:g�z�;f=_O����c���vLxE�Ǿy�c�b�UM�ה�l=`	��b�)Ml�2g�\0";break;case"gl":$g="E9�j��g:����P�\\33AAD�y�@�T���l2�\r&����a9\r�1��h2�aB�Q<A'6�XkY�x��̒l�c\n�NF�I��d��1\0��B�M��	���h,�@\nFC1��l7AF#��\n7��4u�&e7B\rƃ�b7�f�S%6P\n\$��ף���]E�FS���'�M\"�c�r5z;d�jQ�0�·[���(��p�% �\n#���	ˇ)�A`�Y��'7T8#D���q�NJ�̓B;�PQ\n�rǓ;���T�(^e�����:��3���ҲCI�Y�J�欥�r��*�4����4�oꆖ��{Z���[��.���\r�R8�\nN��B�߈c\n�߈N�Q�B�ʡ�B��7ģ��a�����`S�� S�:�+!(��6R��2�O����c�h���DC{갤(�::�(�C�J�S���H����PH�� gB�/+�1�誨�A����=2\"��#�@�P�2��B���*r�E( ��{� ����8I\"(�Ա���S��\rn4�Cx]<Nu���?�p�@�P�3��P�\$Bh�\nb�2�x�6����q�\"�=PK��*�8u�ϲ�n�L�ځ�4��Ԫ��.0�C9NP\"%���/���V��Cz���X�M�`¡\$*���*���7���'8E��@j��^�&'����cI^9<��N*\r�^8!�b�����\r�m���\n���P�T֪	b�6�ѽ�_�x���,*��\"��(�i����:��#O���>M����y�zʒ��ӻ����ћnߤ��(�͌��D4���9�Ax^;�te��Ar�3��J���*�I�P3���\$/����JI6���^0��P@�3���5�C�1C�J���-V��x\$,2�X�8��, ��1��D�@��S�s�������u>�@(	�\n7���*�Kro\n�#d��f�nSk���>֋/k�7����h������O0�y\"g�O�3Q��\r�򚆐;�n����ꛍ*&�}���\n2�7E\$�)��J�+V������a��P���P	�L*0�J��g=D�4�t�M�Q}�6	�hp�`	�6A�;�EIi=C�����|���Q�� \naD&38�u]q9'd��P��܅����������I�����rY��U��&�\0�Qe9!�*�5�\"d�#`xK��MԪN\r�3&u����U��0�T���B\r��1�p����xQ����َC� ��rV�C�u\$/l�&SQVT*`Zjs%��7�R�A3�I���H�#(V��WR�n&ޘ�+gy.1�1FF*�U�;�&p�ĜrL+G�=Dy�cc���6���K  ����o���()eםS��C�+%\$�P�։���4\n�\$�6gL��L��؝u?D\"YC��%��e]�gQA�F��kX�7�\$*z,�RU���1���";break;case"hu":$g="B4�����e7���P�\\33\r�5	��d8NF0Q8�m�C|��e6kiL � 0��CT�\\\n Č'�LMBl4�fj�MRr2�X)\no9��D����:OF�\\�@\nFC1��l7AL5� �\n�L��Lt�n1�eJ��7)��F�)�\n!aOL5���x��L�sT��V�\r�*DAq2Q�Ǚ�d�u'c-L� 8�'cI�'���Χ!��!4Pd&�nM�J�6�A����p�<W>do6N����\n)���pW7��c\r[�6+�*J�Un\\t�(;�1�(6?O���'�Z`AJ���cJ�92�3�:)�h6�����P��5O��a�izTV������h\"\"�@�\r##:�1e�X� #d��f=7�P�2��Kd�:��o��!BRP�D�BP���\"���=A\0��d�Ԑ���\0��2h:3��O��;�O��7\r�PH� iD� P���s�P�CC��\r�Ę�r�ž�]2�#��b�-cmS	m��/kx���k%�.�4��<�B�����GG-�ev��C-i[C	@�d��`]<ζujڳ�e�^YV������jZ�PڂT�\$H�t6����{�\"�\\6�� *#��6\$�RR�4�F֍�0̠!L95�uZ�L/��7���F�p�:�c\n9�ì1���\$#�����.�\\�6�㪲aJna�8����H@@!�b���C}	H�1 \\	v���I��4���8\r���R�:.>B5�,��6�R)�f�l�L�J��CV�㿐{`�c�3l��Ҥ��x��\n@��C@�:�t��DWY�9����`��CN��N�3�<����#p��H�86ې��}�JM-:�i�	�)H��90�۷�(B�2�hP�h?d7AHGqe�*�Y�%Z7\r.3��Pr5�S�]���fi|����gS��]lԁ��@@P(=�`PSPs#�\r��f�v��7WF�7��r�I�>(D�Թ�*�*��5p�J�S;2f|�@��Y7	\$D<�p@��)PiO�R�u0�(3\"J	�.�h�4��� �N ��0��n|E�\"ό��\0�¡07����\"-�Y�9��:���{\n1H9Aјh����:%��s�U��l�\$7z� oWD�����Q	��ښ�hLB0T�N�:������2�Ă\r1B4�d(N�5���Ne����E�S�X�D.�M���=%���6��q�P�j��(���9�x��0�|�\\_\r!��)9!�dR7\$H������q7Ҕ�\"�����U\n���>^'�n�A:�`���/a�g�:D%}�����\$�y#䄑�t���w�������O,���(����B�RK�1���tÑ�BH�P*�9f�ٛ�Db�<iP��>2&,�\$�;�QK�nv\r�\0g�aH�0\$�H�U���B���ߣ�f�WJ�c�Xs:d�#�?Nڱ;�L�2���YVj=&7D�S£(���� z)i��5��ܿ��~A<�0@�Zĵz0GI�ԓ�@";break;case"id":$g="A7\"Ʉ�i7��ᙘ@s\r0#X�p0��)��u��&���r5�Nb�Q�s0���yI�a�E�&��\"Rn`F��K61N�d�Q*\"pi���m:�����d3\rF�q��k7����Q��i9�&ȉ���ɍ��)��\n)�\r'	���%��%��y�@h0���q�@p���&�)�_Q�N*�D�p��LY�f���i�FNu�G#�[������~�@��p�X,�'\rĶG*0���4�1�#���\"�E�1�SYάn�ѥr٥@�u�I.��TwP8#�;��:R����(��0�޶HBN	LJ<��(ގBCH\"#2�9KꔷB���D&�J�>�\09\r��;��9�PȒ�N��L�!hH�A�!� R�������\"����\"�� /,Z͍#C\0:�C*�-�x�5=�P�0��H��	s�#!�䙎L��6'H:�6��HK#���Q)S7F�Cl�7�	�ht)�`P�<ՃȺ��hZ2�X�6��X6B@S�&,��3ո�2��;%	s�꘢#{-���@�>�Ɨ�c0�F\r�x΄ab�9Z�\nD�e&����aJX*\r�Z:b��#]�p칢apA@�������r�[�JjOESw��g�,^4��R�sQo,��\n%ƖG\n�d�c��H�(�8O�� cD�3��:����x��b+p�������+X^5#�<:g��V�\ra|\$���t:�x�>H��:\r|�:Zh3&�2�=����`���	���\"m�#2���⤊6Ð��.�O��\"��(&���2p	�P��*����\\���B�ϡn2?��ڢ\$�\"���'mΌ��x�8���*X3�?���4�i��	(p�ƧR;*�rhL�N#�ꗣC0��ɥ���}�w'���=�#(�'�b�\"Q�3&E���\r!&9�h�P�\$��7`�G���(�-�3jh�	B()!��0�3���0��8H�8�4�3�ra�e�Ă[�CQ���C�a�S�@�bCL>D% ���`�QZP�� 2�C�h%�\r	�V�CHc\"���'�h�rq+X����ٸ#D���\0�0-\0���8�G�b�F\$�18���yn%�u �8�չ\$/)�� �@Q�N�\$䦀S�7�l�=\"�����Z����<dY\$\r�m��w�\"�L��tPyB8)�d�p�[��	P�,��\0���!\$�Lh�2��d�i0���TP�'2W1*䁔4�jK��!\nF\0��.Ax�a�";break;case"it":$g="S4�Χ#x�%���(�a9@L&�)��o����l2�\r��p�\"u9��1qp(�a��b�㙦I!6�NsY�f7��Xj�\0��B��c���H 2�NgC,�Z0��cA��n8���S|\\o���&��N�&(܂ZM7�\r1��I�b2�M��s:�\$Ɠ9�ZY7�D�	�C#\"'j	�� ���!���4Nz��S����fʠ 1�����+k3��3	\r���J�R[i�\n\"�&V��3��Nw���0�)���ln4�Nt�]�R�ژj	iP�p�ƣލ�f�6�ʪ-�(��B#L�Cf�8@�N�)� �2�� �P ��\"㓳�b�t9��@�0*ݯ���	��zԒ�r7Fp�����62�k0J2�2\\�'� P�*�`PH�� g.�(s����8����9/Kb\\���l���<�7�jr��+�3�â� �C+ݯ�s8�JC,�0���E�At�&Q��9I�-2�(�v7�B@�	�ht)�`P�2�h��c�l<��P��7���=<\r3\n69�S �\"	�3Δ���l-� *\r��~<�l@�1��0�\r�ӌ4��0��]\$��Ckx��R���Z*b��#)�+d��x\\C�`6&��Լ�s��.J�����*ܤ���Q�<n�/�\$0�d�\"C�j��R&	�Ҩ931\\[6*��9�&&F�3��A�t�㾤T7��9�@������ ^5�����7\ra|\$���A\$��x�=A<4/-�0�T�������%�bB�o;�2Ȭ��\$+�>���m��q�3�8�c����\n��#�(	�юB�Ӆ\n0R��}��1()h��#Ctl��)�#O�8?\r�&�`����G+FvKԤ�c�\"�ɉ�Ƀ�R��CȎ��h@ �����_c��\rVr�yC�~V Q`�(�8R\r,�94\$��eI%�0�b�i6���B<�aN䄣��_I)�\\��x�\0S\n!0�����p�0�;���[�C�1i'4�њF:MX�33��\"L-P�9�Xt\"A\r�w�r#�Q�1&���T�*�Sd�\0��`��#p�F���,%�H/Ü[� !�ל�[^��g����Z�c��\r����E��T��\0�nShg%�H��z�Z���1	)&�*\n�!\$��Ab�]0x�,����\$hf*��W���N�F��wڒ\\��BL�_dSz�,�����F�%�����L��oT'\0�N��# q���ƩsА\n-l܌G�Y�� eQ�5ʞ̨/�������u\$2މ-r�]K�\n�L�L�\$h";break;case"ja":$g="�W'�\nc���/�ɘ2-޼O���ᙘ@�S��N4UƂP�ԑ�\\}%QGq�B\r[^G0e<	�&��0S�8�r�&����#A�PKY}t ��Q�\$��I�+ܪ�Õ8��B0��<���h5\r��S�R�9P�:�aKI �T\n\n>��Ygn4\n�T:Shi�1zR��xL&���g`�ɼ� 4N�Q�� 8�'cI��g2��My��d0�5�CA�tt0����S�~���9�����s��=��(��4���>�r�t/׮TR��E:S*Lҡ\0�U'�����(T#d	�H�E��q�E�')xZ��JA��1�� ����1@�#��9��򬣰D	s�IU�*����\$ʨS/�l� ��_')<E���`����.R���s�<�r�J8H*�AU*����dB8W�*Ԇ��E�>U#�R�8#��8DMC���_���lr�j�Hγ�A�*�^A\n�f��øs�P^�Q�PA�gI@B���]����D��J��<� S\\��\\u�j�����ZNiv]��!4B�c0�\$Ama���J� Q�@�1�M�YV���q�C�G!t�(%	CŹvrd�9(�E�t��P�Ձ7Y�Q%~_��C48b\"s���eŒd����ԨCH�4-�9�.��h��\"�>Y��\0006��H���\r�0�6<#+����iVӈ�<��QŠ*\r�x�0���@:�Ø�1�m��3�`@6\r�;�9����#8���`KW�����R���s��Ub��#N�*8Y���C�E��1��0�ں- �#�T���iR>[��@�D�>���A �o5O)9/R���%�r��&�#��96�;��^2��ӛ��p@-Fn3��:����x���ɸ��(�y#8^2��x��j�H���M�l��Ⱦr��k@�\$���m�k����|��	8��W��\"CY�\r!��>���Cptg�	Х�F�\\9&'�\$�'e6��Dj���ЊB����@Y1<\n (1D���P����Cɜ<���7�\"S	�bD��)��h��{o�6挤�ȮG�\0r��_�ت'�\0�/t�����HĘtc@��ib�\$��\$�(�!	M(b�a�q (\$�`�� iU�7�N)�f��:��8��o\r�� �vz�#���I�w(^)�9�@'�0�Ga1O���QM�	\"9����E�@)�]a�,�!r�0A �\"�����h�1�㺝2A��Ffi�Pjp7�fji��)��1�5���`��nU�<�9���rx9�ֶ��T�r��H�ad�TaR*hT&ŢPR4�����-C���!H�5.U����jVX���\"!\r���W-Hc\r`���p�Cd�7m:\n��Ԡ���\n�W�> �nT*`Z�uT����&RDpN��P)i}Qf�Hu��V�4&�& ���U�Йq����,(�q��@�D��d��Lș2GӘ�@��4��~9ũ�	��L� j�my&���f�ȅ�Ha<'�e6���2�2�Z�#�AY�� �Bs�}�]\n���*X+\rM�B_�|\\fn=2�qز�L";break;case"ko":$g="�E��dH�ڕL@����؊Z��h�R�?	E�30�شD���c�:��!#�t+�B�u�Ӑd��<�LJ����N\$�H��iBvr�Z��2X�\\,S�\n�%�ɖ��\n�؞VA�*zc�*��D���0��cA��n8ȡ�R`�M�i��XZ:�	J���>��]��ñN������,�	�v%�qU�Y7�D�	�� 7����i6L�S���:�����h4�N���P +�[�G�bu,�ݔ#�����q���O){��M%K�#�d��`�̫z	��[*K��XvEJ�Ld� ��*�\n�`��J<A@p*Ā?DY8v\"�9��#@N�%yp��C��0T���i0J��AW����BGYXʓăC\0�L��u��ʓdaڧ ��	,R�xu�EJ\\N���J�iXFP,j�e4�\\��[�u�DDt\\H�y�[����'Qk�	�N�rgGO�����R���bbRBH����dPv�`P��M�!hH����Y:D\"�EBbP:���P��>J��\n�/�!@v�s!�T�E�Y�\$VvCaR��e]�bF�ZG]����KO���-s1\$\\�2\nDL;�=!\"e�#��<�Ⱥ��hZ2�)X+ST�6��NԄ�׍�0�6<�+�B&��?P3�M�`P�7�Ch�7!\0�7c��1����:��\0�7�� �7Ör0���jwX@6����aK��L��H&b�)�1\re�%�\\��(S�s�J�F�p�?�4�ZJ����B2�*ru�'YFFm�t<�唔7��Q�&�#��96|��;��>2��ӏ��xx0�x���C@�:�t��t#&�7��]Ќ�x�7x�Ë�\r#�7��v:v����a|\$���r6��x�!�G���8�O����5��H���9��7�?�V�2*\\�zr�I!\$�\r�E�(���Py�\0����YR��( H�\0�qd#Ş���Sbl�@����I19��P��2�R��&0؜�J/� ;\"���2z�\n#��\0� �L�ܢ�`(\$���� iS����7��A�c��:�����o\r�� ��J�;�����}\\�(!@'�0�{X�Mp\\��B�+\n�W����(��YM)�F%��HwQ@�(M>w)��/��(@&���Pcf����z�A\0b\r!�0�\0f7�ۺ�� {7S������i�qx9�^��aB�`�\n9a*�R�Yab@X���1{Bi4Q���h�M��\n\n뒳zpN�i�\r��:���Ζ�0���o���\r!���\"���W�jX���T����Q�*|����}΂�&2w�cbR��)f	�M�a81Ե��C)��uA\0w	�2�a��+5J2�%��ȑE<!![��]O(\n�Ҽ6�^p�Z� �!0+�&vŐ��g�2���qX����\"�U���\$y��� d�R!��[���b�򷭪S.";break;case"lt":$g="T4��FH�%���(�e8NǓY�@�W�̦á�@f�\r��Q4�k9�M�a���Ō��!�^-	Nd)!Ba����S9�lt:��F �0��cA��n8��Ui0���#I��n�P!�D�@l2����Kg\$)L�=&:\nb+�u����l�F0j���o:�\r#(��8Yƛ���/:E����@t4M���HI��'S9���P춛h��b&Nq���|�J��PQO�n3����}W���Y���,�#H(�,1XI�3&��7�tٻ�,AuP��dtܺ�i�枧�z��8jJ��\n��д#R�Ӎ(��)�h\"��<� �:/�~6 ��*�D@�����5�Λ<+8�!�8�7���ȥ��[�K��5�+\"\\A�{l�-B�H8D)|7��h��%#P��/₀Ў�s�.\r2�-OXꥥ�P®-A(�=.����3����<���<��S.��Ztxj���*��c��9H�ҿ<�bU=!��ʀ�iZ ����`\\�NeV�) P��1n�.KcK����رZs;ď�L6B�cYkz	K ���Y�q�f��h��4��\$Bh�\nb�-�7��.��h���%uV�� Ȥǯ��S�{#2�x�3\r�8ʒ\nc(�K�ܻ/����7��X�<��41�l��3�b�7��p�4�@�,��j��8깅�R�!�l��	x�)�B3N��*f!#rf�2�M����7���x��K���ZH%�Z_���ʍ�J������N�Pj�6%��ζ%5���ꏺ��6cRF��x�h9�c��;�����/U�y�0��C@�:�t��\\#&r�Ar�3��r<.yp�7��xDՎL����n�5�A�6�{��:�x�@Az�K_�������cޞ!��P\n#f�c�T��h�Ŵ���Ռ��Z��o�����n(Dx�w~_Z%G�L(��~���?�\0�t��r1T�5�v���Q2`�<�p�o�\"�%d�6�^\\HdJŀ6�4�tBgu�g�a�6;�T��L� &��ˇB\\S��5G8�S?�0rG�� �&o�Aq��3+�y3Đ(9\"�m\0P	�L*D�F�h \naԕ�0��Z��k5��@��J��q�P��+i a��\\���>�0h��Y	�\r��C�����L#�pʙ�B��j)ܕ��Y�q���\"H`R/?�?���J�#Ec)�����M����&a/O��: 0��Zԛgfd��8 �ʜf-q5Z\\d\r!�5��)C�,��y��P���=��jK����¨T�����D\$��g��4G\nb�;	��.GV�+�N��@�)c����\\q�r#n�����-���y���E%q\0��^���	Ō��rqN=I8�����p\\`u=�&���6�̱I�A��,\\�ѡsR	�Й(ɩ�U�R5����a�B�=׵^�2��'=2�0�H�ee�}�D�OpE%����e�IR��K��\\P�1.pF3W7�L���N��%Β<GC��";break;case"nl":$g="W2�N�������)�~\n��fa�O7M�s)��j5�FS���n2�X!��o0���p(�a<M�Sl��e�2�t�I&���#y��+Nb)̅5!Q��q�;�9��`1ƃQ��p9 &pQ��i3�M�`(��ɤf˔�Y;�M`����@�߰���\n,�ঃ	�Xn7�s�����4'S���,:*R�	��5'�t)<_u�������FĜ���QO;z�nwf8�A�0�������x�\"T�_o�#��Ӌ��}��O�7�<!��j��*����%\n2J� c�2@̓��!���2�C2�4�eZ�����2I3Ȉ�x��/+���:�0�0p@�,	�,' NK�2��j���P������2\r-P�	>P���#h+�#�:�k�	#r^3�:<5\"��܎HC`�	���;�)\\��#�3�E=ă�H�A j����B�~宮 ¾�k�W9��F�B�:@@P�P��h�/��z�8�H�\rJ��HR��O�-MT8hh��&I����U;L����n��è\$	К&�B���%L6����o�B�%�ʘ掌��ȍ���̠��X7��2<�����B��1̬kCS���	r��ƒc0�6�9��v0�񢊽*�Hڽ�XP9�-�֎Ƀ8@!�b���9apAZ\$�����̻'h�\rズ2�i��:`P��&�:\\��6n\"_����3��9N�⡤�ɼ���.����8F��d;�D3��:7A�^��\\�����.�8^��o�t4�AxD�H�鼋�N5�A�6��,�7��^0��(A!6#zR�uc\n:�Hn����ui�����@�C�J>�/��\0+̖��/	`�\$\nw��AR��1:�8P�䨾O7z8�6�2�ʚ���v��Q5{78I��9�4)�R�MBI&h높�S��3u�ȩ���J8 �0����Y��8A���rU\r��(�i�\$�DԒS_ʴ\reɎ��w����\\����C��#g\\�P@��ܡ��j�\"9�5������� \naD&A#LK\r)��Qꕲ�����i�#�\0�@<���4��SQm\$�8:(�j�I?i��?\$�E�<zmN�a�WDT��e�n�5�\\3>m�� ��O�l&D(��F���F��:�R�TJ(U\n���Ybk���ʂ�JH���9�>�i���}��)�1�+&#E��Ge,	.K�Lg\\C0yS�٠����MD���%)�z\$ �v�'(�,���e�����\na��R10�%�&P�z��Pa\"��̒>dK\n'e&P�0�LP�j�]I�\"E0���h\n��K.���Å-��8��(k^��1�Ԏ�z.s\n'*s��";break;case"no":$g="E9�Q��k5�NC�P�\\33AAD����eA�\"a��t����l��\\�u6��x��A%���k����l9�!B)̅)#I̦��Zi�¨q�,�@\nFC1��l7AGCy�o9L�q��\n\$�������?6B�%#)��\n̳h�Z�r��&K�(�6�nW��mj4`�q���e>�䶁\rKM7'�*\\^�w6^MҒa��>mv�>��t��4�	����O�[���߽��0�ȽGy�`N-1�B9{�mi���&�@��v�l����H�S\$�c/߾��C��80r`6� ²zd4����8���a����������*���-ʠ�9k㌅-�;��!Kh�7B�<ΎP��緫dh(!L�.7:Cc��Bp��1hh��)\0�����CP�\"�H�xH b��n��;-��̨��E��\r�H\$2C#̹O ��h�7��P��B�қ'�\n����s���m�(-H�Jrx�M�*�2S��M=�К&�B���zb-���J����Ar�<7#��Z���hН�-��7���3�����P�ҡ\0�9\n�x�HRZ*9�����c0�6#�=�3�[l0��*�'��e�2��R���8�6/ː@!�b��c��J���� �X�2�,23�m�*��5+��b<�Ra�[�o�����b����FM��\0��ҍR��#�\r��f��@!\0П��D4&À��xﱅ�]���Ar�3��^�<\$ �7��xD��K���;<�A�6��\"!A�^0��l�1����8yvձ��9HJ]S�fAjt\\R#�;C\rX�;��\$����J⹩���'��=χ#����\$\nom�>�pP��*jdd\nZ�Z�.���y��p̴2#�պ%)Z���,��^2~:FJ`�mun.=��y��4�ݒ\"V�B\0�7�Rxt\r@�P�O��������\n.��#e�p6�\\#B>i\"�p�Ȇ�2���REAԠ�R��Y�\r�м7����.������	0g�)�7@�_��2\r(yT��@̑#�ܑB�	�S\n!0�e��ڨF\n�A���\n��?F)S%�R�ً.�9��@�B�z)�.�tC!Ey��\$|JR�Lu�ۇ\"���(n�J�rRИla����pˢ�/�PӪw1Q�tƝ�!�1��T��c�PΞC{ؒ	<�4�3����3��9��HK�%Q����k��4���6v\$c\0Q|#�5�\0��_�Y�<P5��e�� 2�n�t&�9\r2�)��A���i'0� �l�T�řq��0O�@l}q�@��Μ�ZF�D�C���3�\0S�ݪ���l��.��p��6�Q@H";break;case"pl":$g="C=D�)��eb��)��e7�BQp�� 9���s�����\r&����yb������ob�\$Gs(�M0��g�i��n0�!�Sa�`�b!�29)�V%9���	�Y 4���I��0��cA��n8��X1�b2���i�<\n!Gj�C\r��6\"�'C��D7�8k��@r2юFF��6�Վ���Z�B��.�j4� �U��i�'\n���v7v;=��SF7&�A�<�؉���vw�C���N���A�g\r�(�s:�D�\\�<���#�(�r7��\\��xy�����)�V�>��2��A\n����o�|�!��*#��0j3<�� P�:��#�=?�8¾7�\0�=(ȨȠ�zh�\r*\0��hz��(�����	�˄0,�9;Ɍ3#�8��#{v6\r�;�9�.[�0��Z��h(�/	ђ�2C\"&2\$�X�����93��92���<�h�pHP��)�C��ŁC8�=!�0ء�✖�0�*�:H�7(���7�錐��H�,P�1ñz{P6II�B�r�`+��D�X�R�)��V5p\\ض=I�Ve\\��͌AY��k\$I����@�	�ht)�`P�\r�p�9^����U\nb�#�p� �h*��x�3\$O�l)����`K��4O�V���Sr1�X�ʌA#:#X�3��SԐ�ʹ�3�@�����g�&,����<��Ig��n�?�e�����j[�[٠��g\nt���~}��:V�,�>N9�C��\$f��i�����\n2J���\rh�@!�b�����n������X�:��؅鲂�b����m���t\\̠��<�nd�f#-ˤ�!�&���^T�K�4tjΔϯ���=\r������D4���9�Ax^;�uc�@�t�3������7K�h^5���2��0�1q�p�͐�6�Ir!N�x�(V8���3}\$�N_P�nIt�BXP`Q)u�\0��\"�~�3Kl:�\"0��Hw@\$0^�xo@A�BƎ�(�V'�WP4#��ԗ�f]�:�hA]+�\\H��.I���U��\0(*\0��A��h��6'qֶ���[�ue�i��VJT�(k>�ȳ2rN��?�\$��#��h��t\\�S&&�*�`�L�`���\$�@��A�P��T����)�L��2�D�+�qxJ��@ph6����8�)�ȥJ�8ȃ�!Q�L���]H�\0��\0003��GCy\rS	�7(�c�/{D�ԅ0��0��r8��TL�ɇ99�F\n�A�B�����E9������Is�,��}OLA�O��\\��)f�����\r��ɕ\ng��g��V�?Y�l�l�`Q��Hh����x4��H��}&�\r ��Vʬ�(N:Y���9�'\"zNl�Ka\$L�32�jI9�-���4�_¨T��jQA�f�M��W�ܐ�\"\nH,��YZ2ح��Qr��ko�tE�6�@ϫ�IuJ�1��-��r/���Q���e�!�+O�i�uD0�4���SNA�50\"_�����{��.G\0?C�#H�����[���Le	Ԇ;%�o1��=\\4ڞk��2�)��ZP������\$Hcb%�l�ٰ�N���	5�P,U��a4��]Iob�%�\rL�8Ԉc�A�)?X�@j��";break;case"pt":$g="T2�D��r:OF�(J.��0Q9��7�j���s9�էc)�@e7�&��2f4��SI��.&�	��6��'�I�2d��fsX�l@%9��jT�l 7E�&Z!�8���h5\r��Q��z4��F��i7M�ZԞ�	�&))��8&�̆���X\n\$��py��1~4נ\"���^��&��a�V#'��ٞ2��H���d0�vf�����β�����K\$�Sy��x��`�\\[\rOZ��?����2wYn��6M�[�<��7�ES�<�t���L@:��p�+�K\$a����ÁJ�d�##R��3I��4�͐�2�pҤ6C�Jڹ�Z�8ȱt6���\"7.�L� P�0�iX!/\n�\nN��㌯����Bc2�\"�+�E242��(����Pӽ.p�ǉ�\n�+�H#&�F�p�;#2>�!� @1(H�S��-�7.A j����B�l1����8�ce ��`��/bx�\r�.4�6�(H ��������N�!jx4�b\$� ����#r��JV�O	=^�%	Tp���0�%}c���B@�	�ht)�`P�2�h��c\r�0���_U9�SqCc�4m*Y*\r�0���I�N9%QBr���&ؤ(�r7�	����C�ƃ\$0�R˻\$6c�iY�p@�)�\n:�!@���x֔�)�R�=j@\\W�3����n.�.-R�9�-��/�H�� ���x���I��	���#�k�6%�C�*Cz6�&��r:�c��e�:2ga�43�0z\r��8a�^��H]`�8\\��zQ�0�U��|9�>�/�Cbz5�A�6�\r~�:�x�AaX:'�i�9~F:#�\"{�'��A0�ʒ M��9�t�2�D'�J�'Kp	�ܴ\n@���,�*JN�BlX�C� ؜=�3��5+.���>I�Q8g9����P�+�J�9��z��\n��p��@�ϻb?gI\0006d�T�&�!�T�;�7��Ω2�~I�!�ƒ�h��?��އ�ҔHO\naQ#�O���/��6��d�,��xO��\$0u��8Jg^l\n9���u�N�����Dm��8����\0�Ba�V	Qc\0�=NE�`�\$D�7\$��zڃ:R4�;#��t���Ш3c����T&l0�d���r�woT��g�hQ��\r����&	 zAA�7�#;Kr�%��/�t�Aj�*q���xa� \n�P#�pI�sS1a�3��gSy���Wʕ�8\$q��d!h��SH�r�Ƀ��V�A:0������U&t9�f�\$�*�x�(�O��q��V�QU~�-C�t�%��4�XN�BcH�a���QK�L\r���\0�U�4�7	8��=#�T�4R�1y^sA�N\n�u��ȍ�����r�;0P6*@̮�V4�0f�O�B'\nMjM\0���΀";break;case"pt-br":$g="V7��j���m̧(1��?	E�30��\n'0�f�\rR 8�g6��e6�㱤�rG%����o��i��h�Xj���2L�SI�p�6�N��Lv>%9��\$\\�n 7F��Z)�\r9���h5\r��Q��z4��F��i7M�����&)A��9\"�*R�Q\$�s��NXH��f��F[���\"��M�Q��'�S���f��s���!�\r4g฽�䧂�f���L�o7T��Y|�%�7RA\\yi����uL�b�0՝4�\$�ˊ͒rF��(�s�/�6��:�\0Ꞅ\r�p� ̹�Z������h@5(l�@���JB��(��*�@�7C�ꡯ��2]\r�ZD�7���C!�0�LP��B���B8��=��l&3�R.ȪK��G�Ц���P��Ƭؘ7��tF9'�rV�#z�!4�R���\0�<��L�9N��<�Cr��xH�A�(4��.�I��!a\0؀�@P�9GL����	�S�N��1�,6\"�������P������ ���_-���5[�7�)RX�)!t�8ו[p3/��\\�,x0��h\$	К&�B��� ^6��x�0��Q6�#�귶�6=@ST�%��3�c\0002��ZZ��U�6*\r�\n|<�L��1�I�:�4��9��(�Z����Aӊ���@��x֕��)�\"X���(A\\%�E2b�z�خ�k��<	+{9412�7�\nF¬��5�8�B�?��a��([\0��Ϣ	�r�p�;��@�4c \\���ь��D4���9�Ax^;��ts��ar�3��_<A#�J�N�3��о1\r����H�86���}7h�N#������2��3v�7�1������6�Z��l���#�D+%|���Ke0܌�@��whf��\n�R�,Ы\$9�#rl�'/��4���O��\0�*�\nrN���t\"�Q���~΍��T�\n\r.�3���0(\r����ECɫ@�Pػc0vN�4j@��NBdq�ײ�Ƥ��8M����T@����\$�H�gF�e���&'\r2�b� �C\\��mNxnC�E�u@gPz��O�1�&�b�r/��)��Y�W �#G�O��Fj�ةB��E��R�8�\$�N��\n6�)���dz�X&��/�%d��\r�bH3#̈I�w*F�ME��{�BƕNE����+䡨F�6�nT�\r���2��A/FIɂ�&NB4y����d�T��, �̑ޕ)��ɂ9+d��+�H�L��b5!��-rFL�\$��rRfj�:�ȝ��:�l�~��pP�hÙ\nhiƿ���a�>�NO/�\$`Y�2s%�Z�O��C↘Q��KУ���Lߦ숾3zb���ɺvNYDE��'=��4���0dF�MS%��:��|Fl! �L�\"0&ₘ�/Yh:l��h9�����";break;case"ro":$g="S:���VBl� 9�L�S������BQp����	�@p:�\$\"��c���f���L�L�#��>e�L��1p(�/���i��i�L��I�@-	Nd���e9�%�	��@n��h��|�X\nFC1��l7AFsy�o9B�&�\rن�7F԰�82`u���Z:LFSa�zE2`xHx(�n9�̹�g��I�f;���=,��f��o��NƜ��� :n�N,�h��2YY�N�;���΁� �A�f����2�r'-Kk{3���>��1�`�����L@�[�Q2���Bz2�˨ބ��:�/a6����2�ā�J�'����&��::�8�0���Ґ/!���¸+�Mc�\"1Ic��)	��\r)�[�c��1�P\$T80K�&\nH!6��(�6���Z��p#0�/��\$1�i2���0���Ή�x�	��f���*ί�X��sd΄� @7ɒ�D�tl*�CA j��8�B����������:@#����(2Ѯ��7��,�Ƀ��4�\r(��\r���?Kê|�4H�\"�1Rr�W��\n[���H(��\\�(��n8�B��W���x%��h\$	К&�B��� \\6��p�<�Ⱥ�V���\r��أs�3�b��a��w	(\"b�B���O�����9�c2�6NϠYt�C�������R��b��#8x�?4�WA*��C4�\\㒊��:nD�O�+L���(J\r#���8H�Voa�C�;:���&:�2��êz&�*�f���QK��`A\0x�\r ��C@�:�t��D)Jd�9�����`�!.�^9Oܻ���7\ra|\$���+. A�^0�ʊ�.8�}�:^��OZ��>�Nj�4�p��2�C�e�=�t�\rںz�B�6��&M7�ż�x��#�B��NppUf(낂���2E饍&���		�d�2p�!�D�\r��RRP�)G#ȼ��#Z��l}-E\n���VV��������H3�'�\$���d��J�P�hІ�r\nq�!Ԭ�̰��A)ll�v�٢�8�&	��Vj(a@'�0��ɣ>'��E�@���#����\\�HD(���Ø&��a4&�����C)3'�&�v�Ù�����6hR�kQn�L(�¶�M�,�P(Ȍ�^\n�zd�(�<O\0R�<������ayZW��92�,L���Z.�J��Կ�A�Z�lhʔ�]Й�H8�V�0\r�84��W�a���q�Y�V�ٙ���HBSW	אCK��Ņ�ɺ�ؾ��,����S�n�DP�Шm��ɴ�B�F��y��9=R������t\\tn��Q\0�Ճ�p�Ej�8�!�&]�l����YO��eJ�%��xLҥ\n����K�%:�Ӂ��čJ�8%�6> @0�]��<a�z�e�|D��S�?���N�bm�s��'i�Pf�G���^ѱ�+G�=V�MXb� a�P�D�tB+oUfzT�:�����*���\$e&�5�)1����C�";break;case"ru":$g="�I4Qb�\r��h-Z(KA{���ᙘ@s4��\$h�X4m�E�FyAg�����\nQBKW2)R�A@�apz\0]NKWRi�Ay-]�!�&��	���p�CE#���yl��\n@N'R)��@%9���*I.�Z�3��{�AZ(���Tq\0(`1ƃQ��p9���Xi\$fi'B�����2��,l�Ƅ~C>�4P��T!�H�k���hR��Hb�����4��i6FFc{Y��3�-j�rɼ� 4N�Q�� 8�'cI��g2��O9��d0�<�CA��:#ܹ�)#d���à���),zn��Lӊ֮�m&��0��N�.�A%�\no�7�d\r����C8���h�*����h�Z�]9kcFh�0�:�2�FH�1s �S�ѯ*in��h�ɉ9!��L�.�H��h�\r�,	���dĦ���3H�(�J�X�D����4ƁN�()|�����F������йt�Ҋ#���\n�1Pqs���,�J�S�\n��\rHh7�Ӂ����SЬ3C.�K�*5�?KB�N���2O9�m��0\$zTY(���Vm-q:��脣#R�&�M�y�t��y\rU���\0P���O0�pH�A�3i��d���J�~���UZ���]b�JKHdښ���-n�1:\0�IjĚh�[�[.�C���j��X���q2�M�ʊ��*��r�Ф^R9%`H���� B��l��}�^02��_�I��,Z���ƾ���s>�)�ӵ�2�K�BBF�l�^ӊ;���t����8th)\$�'�(�>Z�r�k�g��M�&Ac`�9N�0�O �3�dV2��\n�t��H*\r�8�0���@:�Ø�1�o��3�`@6\r�<V9�����#8���6�c��aJ���[9�R�T�b��#6˽G��U����Y�b��J��^,�d��f�q\\,\r�weF��y7K������%D}�'����Ɂ((�\\�:W��*d\r�R��:�[	�q�ź�)G	��9���z\" s�9/ ��iv!�����x�f��4@��:�;�P\\C#�\r��9��xe\r��<��C|sG��\0���x����C��\r��:�^A�o>R,���}�\rg�4�C�k\r��ܐ�O\nѩJḬ����ңb�5�'֐�Y�L�4���%Q�&']¡��!ãl)�h˴<��J^YIm��46��!\rS�,�\0P\\R�;M��(T��'�*�(s��f�&�k��-RP\\ԩ%3�������7��N�TK	��U.�ΕG*�By0��C�A�\$�6pU���4DZa�ı\$�8I\"���\0�W����9Is�|��q��O`��h 1���s��\0cz����x�|ɺ���Z/4��9�*��%����O\naP���lD-bN�@7=-i4�,uph��9EPMh�Ų�w_���^z��j�IU*d�~&d!�i�6b��ô�f�����7���Ho�\0�+� ��\0S\n!0c�ydW�P(Z@ܼ�L���zN��Pi�r<q���rZ�	9)&'���qn:��8){sƅ�:˼�J��OѲ�(�6��6�[�&,�����K.�w����;�[�� w���q}�����7�nA\r��(!���\n��Wɪi�{�-��{6�:uv�U{�t1p�k��u���1I���T����+��L9�t \n#%�%�L%DH�=)�� ���W�FD�\$��\r�!�.(�hB.��u#�B�#I�`�J:����'�n,\0� @(&��L�y&),�e��#���P�<h�X���ɬ��\$<{�ё�L�P�0��cg���@�7<IQ�&�\0���.�K��h�.���gb��>���S�x�EK�f���f&C�����PX�/�I��`���,���v�K!�+Pj�2DPOpc?A���\$�4c3f�,�����^Wg�A�)D�/�֊XB���*��T@���~��\"D";break;case"sk":$g="N0��FP�%���(��]��(a�@n2�\r�C	��l7��&�����������P�\r�h���l2������5��rxdB\$r:�\rFQ\0��B���18���-9���H�0��cA��n8��)���D�&sL�b\nb�M&}0�a1g�̤�k0��2pQZ@�_bԷ���0 �_0��ɾ�h��\r�Y�83�Nb���p�/ƃN��b�a��aWw�M\r�+o;I���Cv���M��\n����Db#�&�*�����0��<���P9P������96JPʷ�#�@����4��Z�9�*2����Ҹ�2;��'��a�-`�8 Q�F<��0�B\"`�?���0���ʓ���K�`9.���(�6���2��I���� �֎@P��C%l6��P��\$�<4\r����q`�993,B�̓2sBs���M��� @1 ��>���A��\0�֎�P��M�pHR���4'��\rc\$7����-\r�T)1�b])�B�1�o����(Z���P�2(PdWK��\$�ΐ\r-~�El`���ݠ0�E�?����M�6\r6��[�[�����I�Ck]˥uݶ�@;%-�J=K�@t&��Ц)�C \\6���凎B�m\\(�\$_\r�PΩ(�7��5Ȍ*/�{*��C3���ސ�cp��p�:�q��9�è�\$�l5��f0����.�Xں���P9�)H���v�X�!\0�)�B0\\Y�-�\0�Ș۟G�\0�ѹ)NS2�s������2\$#�@�3# �:���7�c�F9<�âN���M;��9�{v�0�)_&���;�v��8\r#�����H2���D4���9�Ax^;��r����\\���zs�\r�mÍ�xD�#�H���Ű5�A�6�	Đ7��^0��xAd\r޷�#Z�)���b���,��r�/��D;\\�E�y(�ԛ��@JK�{/�`�S��rt	�1�V���l��F�#�9�^�s��p������S�X!�\r9iաL\"q�7�q ���h���^LY��)&%bp��DJL������/O*-g�V�JBI&z��há')�:CVꃈu5Q�3��C#�?�45��H��6���RR~Y�\$�.!�BxS\n�Y��W�yR�Lb��pD�tW�%1���RRP@f.a��� �]Pk�i���7�f�t7�Â�˘ \naD&	TN	�{*���.p��GT��a�����'��M��y=d�M��\0'��A����*V��\0000�龊�Ề��D�v��\r���;=����P%!\r%�V� k�(��#�q�D�DMu\$t�C��2D�#���Kzi�,*�@�A��A\$l��}4������=Ԝ�W�x.�	OEo)>�/&��)�E��F���r	HT0��*F!#���C&i�fD�������@�\$h�גS}�Sn{�\$�(�C)cC3#A��6��5u:�����`��jZ\rl���/R�n:�^_�'&��|O�ᨃ1�%�p%F��ʶ��*@g�Rp͐dA,�9�]=9Oni��:G�9�ޮ!�Bt�UZ0&\r+P�L=v8�򤒂";break;case"sl":$g="S:D��ib#L&�H�%���(�6�����l7�WƓ��@d0�\r�Y�]0���XI�� ��\r&�y��'��̲��%9���J�nn��S鉆^ #!��j6� �!��n7��F�9�<l�I����/*�L��QZ�v���c���c��M�Q��3���g#N\0�e3�Nb	P��p�@s��Nn�b���f��.������Pl5MB�z67Q����>�g�k5�3t��r�ρD�ы(�P�	FS��U8F���zi6�3�i�I2��sy�O����\nE.������/b�;Z�4��P ,��)���6�H�N�!-��Bj\n�D�8�7��(�9!1 ��#�j����0쏡�[�PAB�6qhi\0�)�\0��P�֍H�'&��7�h �2E���I����\$�0�PԒ͡�7ˀP��K@�pHO����!+�֣I�t�#I,�	�BI	����:n���B(Z6�#J�'��P���ܖ�<#r[%�%p�'�b����O�+�(V�Zn�?��yQ*����l��WuD4��T��\rŋhX�\0엏I@�	@t&��Ц)�C \\6����y�B�2����:U�d^1LdD���2t�5Qx�;�\$��r��7�U\0�<��p�:�c49�è�\$n4�E��������\rêaJ^��2s��\r�k�!�b���Y�C246�Q@�>sZ:%�d�����ᅔ(�UK[O\nY[h�+Ό�Ul��J����l6��H69���t<A�ֈ&�`�3��:����x�ǅͶaM�����<����CH�7�93#�\n/�X��H�82�h�:�x�?���4>��AP(�\"M�ώ�X�3ya�(��9\$�4X7��z����\nތ���*Y�z��#�Kl�����@�\n@R��Ұ�7�~oT��r�d�3f�ę�Rv��2Ou����V��̈́��D|_�E<����җ	�\nM�9��D�ɋ\$���~�Cq���͐P�L�?ǘ��[�٣ga��1Fi[��j����\$��\\}�@'�0���\rGa3@qCI�}QH��c�a�#�=����!PcV�|�`@M�pgL(��@�0�#G�Bϱ�=���C�X��3Q-/��N��d.J&\\�I��*P87I��R�v/��%�dQ�iF[izO5@�q���2��VL�#r��E�}��aZ��\\��e�ϙ(�.����`+\rd�5�Rp^�A>}��ߩr\\�4�w�d��S��T��-\0�ϩ�/��i�}�!��KT*��}1V\"Ϡ\$�1̺\nHh;�Y�n��r\\h|��j�Z����bL���]�Q	��3��m����D)`�CCPsA@*r%�n�y�R�9}0�c�G\"���	dh�\"_�\$���Lm�\n	���u!W� �\0��9�@�e�A�8�V=[h�Ly����ȋ�bFf\\1�J�Q�Q�����J��q���#��˪�\r	J�+b�\\Cę�,8\0";break;case"sr":$g="�J4��4P-Ak	@��6�\r��h/`��P�\\33`���h���E����C��\\f�LJⰦ��e_���D�eh��RƂ���hQ�	��jQ����*�1a1�CV�9��%9��P	u6cc�U�P��/�A�B�P�b2��a��s\$_��T���I0�.\"u�Z�H��-�0ՃAcYXZ�5�V\$Q�4�Y�iq���c9m:��M�Q��v2�\r����i;M�S9�� :q�!���:\r<��˵ɫ�x�b���x�>D�q�M��|];ٴRT�R�)��H�3�)C�����mj�\$��?ƃF�1E��D4�8���t�%L�n�5�8���x�&�45-�J�h%��z�)Ţ�!I�:۬�е�*��H�\"��h\"|�>��r\\-q,2�5�Z�������E\$�+\$�J���z��,mZHQ&EԂA6���#LtU8��i���R�rX\$�Tf����6�\\H�22ⴲσT�Q�dB�.)!?E>��Q1O;�)UT�6�\\�Tԡ(Ȃ3�:�U�!X�=a��2I����pH�A��S�4J0ΖuS>�(%��¤�0�?o=	V���\rU	��w�TZI���XȤ��\nJKq!\$��p��������N�D56�*�}���*�,e��Cq��Ji�\r% Au���/jh�c��K��H�+�d�ik�b�)�)i�e�dK6q�-��3��\$	К&�B��� \\6��p�<�Ⱥ�1�ʐ���ۗ�C`�97-�@0�N�3�d2�;:�}���YQ����\r��<���9����c0�6`�3�C�X�\\`�3�0A�X#l:��@��j\"�\"PR�!�b��E��?l.Ў�\rf���S��	s����Q���Y+���-wL7[\"-b#z��4N���?>��3&E��3	���N/�9��x�]����[�Z\0�0�����\"\r�:\0��x/�L��pe@��p^Ct]ǆ��A�n�4:@��w�Pk@�\$���r�l ���|@ �'d7����k8!�:X4�`�n���fP]:,\"�YG�š{i�A�B�@���&嘵��@S�m3��hG����<G\r�0������@\$�ڙDsh)u�T�yI�:v\$��!2jmLaRB+]@R����6&�yy=�>gH1�W����� ��T,ivA2�hH\$UE����	ZGA\$����J�8q49��v�{u!��D���xm���va\0 njf�	���l�6m�]�BxS\n��96?Uj5�BO�n�c�Jx�E�X����x��@�����N�(�E��as)�ju�d���\0s(F��7�a�o��� ��\0S\n!0c�pNL�RC8�va����2�͉�3C���g�!�6���P)l��pIjiG���C�i����) �	]\"BX*�YU�j���0?r͔���S������:������>�W�\\�iBm�6��D��M�b�\r]S���\0��M�u~t�%��@B�F��B\0�Pg�J��\"yRz�*���YG����2v���\"e&\r�������&]\r)N�ez����'L��'�T�`�ɏ.�5a��@45�J�v��ڥђ�>6�[�v�uou�jԺP�}C�A�Mkl���A���Q�A����L�R8:��DLD��)��ۏ]�����5桮2 <��!��NXc:�4�[>OB�*��<���V��PT8��^���fc�.O';���X�Ċ��|���";break;case"ta":$g="�W* �i��F�\\Hd_�����+�BQp�� 9���t\\U�����@�W��(<�\\��@1	|�@(:�\r��	�S.WA��ht�]�R&����\\�����I`�D�J�\$��:��TϠX��`�*���rj1k�,�Յz@%9���5|�Ud�ߠj䦸��C��f4����~�L��g�����p:E5�e&���@.�����qu����W[��\"�+@�m��\0��,-��һ[�׋&��a;D�x��r4��&�)��s<�!���:\r?����8\nRl�������[zR.�<���\n��8N\"��0���AN�*�Åq`��	�\no\0�7�2k,�SD)Y�,�:҄)\rkf�.b��:�C� �lJ�����Nr\$��Ţ��)2��0�\n��q\$&�����*A\$�:S���Pz��ik\0ҏ��9�#xܣ��U-�P�	J�8�\r,suY���B��\"�\"+I\\��Բ#6��|\"ܢʵ(�+�r\0�7��CU��Rl�,�A\\�'\r�{E�H_*�4�ة�P)��DX��\$B\0T�2�&4\r�R�B�\$��.k{��k=8�F�@�2��h�f�N=�ޮ�}��%\n�?���R���E|�Q\r�O`6�x\n���9Z�BO�S#z�Bͅ�J�d�8*�dgdD0%AY�D� c�����ue# W4AM�!A�r�J2GA]m9���6JtT�w����O �xH����a��j\0L��\r>�Α.�䈌M���pD1J�/�r��5�;��[�|ܥL�<	)֤BO.��dW5��u�H�H�ʓd1Z+�a�gr6\$����s�V�Z|*��b�UK�u7�3�7�S�R�H]��GF��ȏX����t�,����ފ���&�+��c���\$	К&�B��� ^6��x�<��Ȼ}B-�����1JLʦՃe����!�����b+�q�hU�� d�)������T%�.e~��o<��0����{��1�����l3����r��3�V!�F\r��:�pP�I^aL)b�l�2�y�׸�V�H �.��c�4i8W+nّ�q�����h�l�J�����PB�L� ϗ�8���\"����Bt��I`�%@M\"�\r9k�A�az�DEL+�#3IvM���&Z�\$h� (&��}Ñ���;����(x�H�	ހ��� ��p`����3�qE�a����l�xe\r�e<ͤ���x\">0�I���%\r`��N{pn���|_ς�?!�� A	Y�\r!��0�I5'��R-��^h��QEJT���c<\".ᔜ��(Z��M�q&�Q.S�s7b�5����W_�\0�\nE�\r���W,���(��,�S�oM��n1�,�0���l�\r�U,�c�ɱw�.0(z��^}iH4ֳX�F��A�:����,iʺ2��qW����d��!�m&�T[B��T��4���WJ�+��b��լ�����Y�{1�a\$���� ih��0��?O�����:�����2M6|CD�����p~��8\r�#�&Y�{&Zd`(�,!��J���E��1�!(�v��M�X�ּs}�wT��/�;���h(i�3��C��O���K��á����|�d\0���Q�W�0��=���L�)�%h���j	@�ͱ\r��MT�坓��*�R�J/[��hw�-���kIƈe�d5e*��/A��À�e~��\\��i���C\$��uG,	^t�(dgi���Y��A��6\\Ȥ��w�#2���X��M�X5����3zB��B%,��\n��ia�'�A0C�a\r����9�C4'�ex#��C����_��0-\0�m_;B�3�*�U�J)�(�aD�w*N�ቲ͇)��%�'��K��wR�?��[զ������r�r�%A�`�r����g�ќ�hJ�&���6�	.!��S��H��|ީ�<엫6�(>��Y��˙�����GPVMM\"�i��e�PR���'��޺�JD�86��K��m-��4��D!�\nB�uٳ=n��q:�\n��H���%\neS�ܭh�!���� ��oF(��[#�H޲هL��;֨��Ϫ�,�2��ˊ�\n��� o�q�����2\$�����C(sQ����u��m��������?���]+�o,�i���\r��{�IIV=��M�p�աq���2C������@";break;case"th":$g="�\\! �M��@�0tD\0�� \nX:&\0��*�\n8�\0�	E�30�/\0ZB�(^\0�A�K�2\0���&��b�8�KG�n����	I�?J\\�)��b�.��)�\\�S��\"��s\0C�WJ��_6\\+eV�6r�Jé5k���]�8��@%9��9��4��fv2� #!��j6�5��:�i\\�(�zʳy�W e�j�\0MLrS��{q\0�ק�|\\Iq	�n�[�R�|��馛��7;Z��4	=j����.����Y7�D�	�� 7����i6L�S�������0��x�4\r/��0�O�ڶ�p��\0@�-�p�BP�,�JQpXD1���jCb�2�α;�󤅗\$3��\$��4��<3���/�m�J������'�6��Dڲ�6��@��)[t�����+.�~� ��s0/�p�#\r�R�'�L[IΓʕEhD)1q7��h���\rl�\n(��E��9�����*P��>�t\\�8�*/��TI9��&��35�kh��_���H\"U�����F�q8Ő�.��e|����&�l UP�I����sL�J�/\$�'���X�nK��\"�UZ���aY93d�\\!Wj�eQ5�����lT�'�J��'�\$!,�\n��w��Va�\$�b��.��b�����{Q;w��J:�ȓ9P�\\��C��> PH�� g��*�ث���W��3��:V�n;5��e78λ'Ä���lub�;+��7mK,Y;�������Ǻ�98�+���S�*���k����>o���k+AJQ{�Bkqf�a6%<�Ŋ�O� P�\$Bh�\nb��eH,��;F���V\\���~�2'qyJ\r���=P�9=�x�3\r���⹤Z�VY����R~�nb��r*\r��0���@:�Ø�1�o��3�`@6\r�<x�a�O�0�p��6���A@s/`�2~����Q��0��38:��ʤ�`ms	��*�T4_��'�cn��{�Dl�&e�ɍ��'�eQ!�8���T�,�7�CxnPPɯ��^@��FPP����X�`=��x�M��E�d��d�\0PM!��#�Øw\r�ɛ�P�K�����zހf��4@��:�;�P\\C\$\r\r��9���xe\r҄< W�%\"?�<��I�k�\r`����m�A����� �H7�s�0�k=�:98���n�}1.X�S�U`JH��Ü�8����5\n�3�Q)ԝ83 t�ӉN	�D-��N��)\n (\0PbJ�B�|Ǩ�zNّ�V��n\$hLʩW+/\rF<c	�;��e���WgK�Tp�D���>Z�aN�`���C�v8F�4��v�d[[����Ē\\	�kB�\\��JOH �������A���&hfA�6�\0�&^�v@�7�T�S����D[E��,�Uȸ[��'�i��cL�)�\nPDΞR*�\0�g	 �T\0Z��9s�eN���hc�c��H���۔Q�R*��'��RC�}��7ɀA!�i�x(��@���>�#I���i���f��oV��PG�N�c����1(ߪT��ʩ'�q\r]�`xWsZ�l��9�2K�B��7A(9K��i���*����z�kQP���:ڬj��^d�R���\r������Y\09�a��e�T��K5�`#[��c� S.)P��h8�1�Tx��gm)'�v���aц����u�U��%V7�v�\r	Og*��\\���.�!�'�P��Qݰ�%��8WD�{�����\r�XNǅ���f��:��'9~Ƨwv��U)b�^#\\ɑ�L1��U&A2�Դ{��lg���m���˹�ĝ�G���c@����F�����+0��æ��k�a�-1����WrK.-\n��&�q���^��YkF�⠔";break;case"tr":$g="E6�M�	�i=�BQp�� 9������ 3����!��i6`'�y�\\\nb,P!�= 2�̑H���o<�N�X�bn���)̅'��b��)��:GX���@\nFC1��l7ASv*|%4��F`(�a1\r�	!���^�2Q�|%�O3���vM��A�\\ 7\\����e9��3���a:sF�Nd�p���'������tFK���!�vt�	�@e���#>��ǜ��㑄���̠���%�%�M��	��:���I�r�?���F���� 5���	�\"i�h`t�t�T�;��ơ���䐣��#���#Cd<Ck��L�PX9�`�*�#��z�:A\"cJ���j�����1��˷\0�0b\nh��Do`Ҳ�Bb���!c�,L��Ae�\\���:2��<��k�1����\\�8c9�\0�a��X�#�먠��h�>�p�<���8/�h��4�4�#ɋ^厫��Z;KC-\rD\"��7K� �K2����T8�ӣ�^6TI:�4���)�B �h��<�Ⱥ�#Z3���^�Pe86EKA��3���2���7�xa���֟H��޹��p�[��1�����΁ac49]��0��d���\rP9�)<I8#�0��)�H@58�\\�(ڞ4#[�9���N!+,�P��s]��0�(ȟ\$�zv9���3zgX��ؼ�2b��4�HK.o���P�0�h�@8k���ʣ(�8=�(ɏ����9�0z\r��8a�^���]S��\\���zc����5���/�.���H�87	���|�318�7ʬ��4CK\n8#�o=���\n��4*���9�\r��w%���7IL0։w�Cm�b��(:>x�=��(��I8NO{������6a�n\"�>�<�%)Z�#�{~�����Z�� �SرZ���3�@cN eە2<��\rIG�7p�C�!<TITȘP�L]I�3-�8�Wp0rD�� �G�àhiጹA�FiZ�[��C�rl^�x\r`�(�\r� ����d��O�ܨ�x`��A#dxːcܼ�g[���Ӝ��a()𓘢x���s��S�BlC8 \naD&B�`KCI�Q�Ԫ�8r0��B��G���J0x�%bq��#\"�7/C��0�1�JN��\\�7���eJ�\r���2�V��B�d\r�-�\$1>�ÑL�i�S��^{MCE�����`�\n�����l�HU\n�����AĔ�VY@A1Y�4�X3�^��P�s���@�:�(�\$弸�8>�	�LV�6p�`���y;ĥYZ���yF2OYzYf�\0�\"�nH�b%L���}�\0>�D����Q�1	���JD�	����D��M���s�X�0�E�BR\n)�RB�dQ���\$\0��Y|3���!=j��A�����{�5c.R�)b܁�ĺ��\0";break;case"uk":$g="�I4�ɠ�h-`��&�K�BQp�� 9��	�r�h-��-}[��Z����H`R������db��rb�h�d��Z��G��H�����\r�Ms6@Se+ȃE6�J�Td�Jsh\$g�\$�G��f�j>���C��f4����j��SdR�B�\rh��SE�6\rV�G!TI��V�����{Z�L����ʔi%Q�B���vUXh���Z<,�΢A��e�����v4��s)�@t�NC	Ӑt4z�C	��kK�4\\L+U0\\F�>�kC�5�A��2@�\$M��4�TA��J\\G�B��4��;��!/�(+`���P���{\\��\r�'��T��SX6��VZ(�\"I(L�` ���ʱ\n�f@��\\�����.)D����(S�kZڱ-�ꄗ.�YD��~�HM�V�F: ��E:f�F��(ɳ˚l�G�L���A�;�Szu CD�R�J��`�hr@�=������B��s;�h4�TJ�&\n4MM�_5�d:4O�j�@���GD�C�W�%�Nܦ�����\"�G31R��s*����#@�%�HKh�=k[�sU�Ő`���]E��\\wXc^1CV]#E�f�����Sr\rWM��Z�R�����\$�1�w��aE(Z6�.�]7���R�����zPr\\�OY4����ec��c.��b������c\nj<�`�X\\�-^Z��َQ,��\\?ʣC��9���)Z#w���FmND-�����b֔�y�[��&.۶Se\n4��v�^��.@ob�a�����\0P�:@S��#��7��0��]7F!tf�]E����p��p�:�c�9�è�\r�x�q�ь#>*7��\r�����R��Z�}\$K�*�!�b�����\\�#�,������U*��h�(L���Z3 �.�I�I3鲅!�:qq�B�3r��o%�H��r�#�.A�ﲂꎑ�kP�)U��d��Q03e=�D4 ��M!��#�Øw\r��h�P�K��\\��0=A�:@���/��\"��n��B���(n���:`��\":�4�Ht�0a\r����C��\r�D:�^A�Xx����v\0a\rg 4�C��l���vnǊ�\r\\�H��&�JH2�l\$A�a`��;�6j4��|JJJ~�@\$\0Z\$�S�rM�\n`��\$�9�*��U\$h���DG�����BDR� �*B��fG�Ї�b���ʅ�,����0M��.��H��qE(��׸R\r�j���5LB�l�,�{���6�`29%P\$��c|���F����.N ��h����w<'Y��uc�fA�6�\0��&<D7cD���P�36^�Q�~jy\\�B@,U�w��(��%!��z��\nK��t{���S��A�U����T�*��*�B�X���VB�!%2��3�\\N\n�E�DїA.p(Hc�N�4���!�b\r!�0�\0f:' �C`��x\r�D4ƈW�큣tv�#�ҜHr1�K4|��	��59��C,���\"��٢�Y�3�Cd��3�@Z�]�C�p���%�-Jܴ;Som[�l��g?{�Ъ���������\nn 6��Q��\\�^r\\��m�|�4XۻT��1:\$��\0��`�\0u���1G�xB�F��E���g'��K���.��JM�xéuJ�Y�?���)�\"I�\\�Ȩ��%�n0���*�b*�0�l��\$͘�LI��\r�kؚ�[��	� 3��\nP��,��zE��7D�ʟ�P9�Wd\0���1��s�+\n��\"������_l!�5�U����Ċ��B:#S`��+�B +@Wp�\n�A�<�CL��j�ʺCi\$޸��@�)(��Iz\r�H1��ȩ�9v�JJ��E��p��>*�#L�\nh�J����\"�&=~h��~�&�K�;y;��R �";break;case"vi":$g="Bp��&������ *�(J.��0Q,��Z���)v��@Tf�\n�pj�p�*�V���C`�]��rY<�#\$b\$L2��@%9���I�����Γ���4˅����d3\rF�q��t9N1�Q�E3ڡ�h�j[�J;���o��\n�(�Ub��da���I¾Ri��D�\0\0�A)�X�8@q:�g!�C�_#y�̸�6:����ڋ�.���K;�.������i�n���������E�{\rB\n'��_���2�ka��!W�&Asv6�'H���ƻ�������vO�IvL�Ø�:�J8楩�B�a�k�j�*�#�ӊX�\n\npE�ɚ44�K\n�d����@3��!��pK� P�k�<�H\n3��|��/�\"1J'\0��ҕ��	Z80��ț'��a��`�/?�zT�&! bk��/�B<@�(3��/%3��L�\$q*��C����:�@��LpѪ PH�� gN��	X�n	~�/E+�1�L�a�M�]�@����pM���	\n,�Ak`�2�S�N��I�Y�6Fs!w3F��'<�ՁS�a+\rfP���F���_��l<4D<��X@t&��Ц)�B��\"�Z6��h�2;vC�ʲ��6-\0P�7�C�2�x�3\r��ʗHemf�e=�#�?%.j��H⊒)�r��5�7z5l���.Q���ӡ��5F��]?�s*0�%J�n�С�b��#f�N����M\0��I �l��]c�]qC(�X��Η\n�ĕ����p�2����F������F�P��YtVͯ��w����_%�\0x�����C@�:�t��l# ۑAp�9�x�7xC� 7cK��H�43���X/�Cd�5�A����\nd�p��^0���?�h*��EB\\�O����k�؉������ˢ����H�� ��\r|.†%t-��P	@�*c4G���'d��\$Rٸ g%�����p��LK�I�?�������7�@���?��]��`��B�������DjB����~��ok�Ȁ�PRK�I,`���y�o\rv/@�C)�'�3�]Ӽ&������g�����	�\$'Т�^xS\n��:��N]*�i��*B`��i7'\$��ؒ@E����R�q�+�(h�{��%�y��\r)�w�'\\�b>��#H(o�3jsd�`A��1�	��<�1Lݗ�H���7y�\\�s�Y\"SR	sP@p�����R���x'1JAh\r��ߪ�_�C>-���a�&%���g���&5��B�F��n!��J)�2&N@/Y���!\$��- fy�9F��e!p\n\n!�*�L�������8�k��4��uϙ�>�؋3eږp�R`cG�� �*�f�R`X�yEL�OG�tg2I&C�(!nAp��H�D����\r�00�b/�>J��9XD��T��SR�; �C~.�z��)cc����U��HD��&��:�";break;case"zh":$g="�^��s�\\�r����|%��:�\$\nr.���2�r/d�Ȼ[8� S�8�r�!T�\\�s���I4�b�r��ЀJs!Kd�u�e�V���D�X,#!��j6� �:�t\nr���U:.Z�Pˑ.�\rVWd^%�䌵�r�T�Լ�*�s#U�`Qd�u'c(��oF����e3�Nb�`�p2N�S��ӣ:LY�ta~��&6ۊ��r�s���k��{���f�q�w��-���\n�2���#*�B!@�L�N�z�Ш@F��:QQ�W���s�~�r.�ndJ��X��ˊ�;.�M(�bx���d�*�c�T�Ans�%��O-�3��!J��1.[\$�h����V��d�Dc�M��Al����N-9@��)6_��D����/K��L��t*[�\$j�W��9@@���4^����F'<�\$̩!`r�e�<�1Hx�DA�-ˁA b�����8s��ZN]��\"�^��9zW%�s\0]�A��Y�E�t�I�E�+!(Z���A�bZN��A�#%��Q7O	[�y#TL,5�j�A�-�@0�7��P�\$Bh�\nb�-�7(�.��h�� TUUd���`�91�x@0�L��3�c�2��r�E2��seA�J=\"���\r��<���9����c0�6`�3���X�X��3�.`A�YA\0���XP9�8+\0�)�B0@���9F*�IF�֕�'�i+a�y\n�>�\ny\0�7�����\">:v�KTǫ��h�9�c�3��c��9N�(�8\r7�����ߣ0z\r��8a�^���\\0����2�Av�3��(�ҏ\r^7���I~4#�/�x���H�83�oL:�x�(�|֍�K�#[*4���A���p���#���O�\nt�%��QhI_	�K���?�޸��Q(W��Jt\n@�}���#�9�!� ��������C���c@����d`I�7'\"a\\-S�N�X�%�D'��x�0\$�0� iN�]�7L�q�_��:�'���o\r�� ��ލk���CcI[١6��U�6�xS\n�����WyA+��!R� (����!T���D��Hcq�lY������ A�3�\0�B` �xʙ����b��4����^���1#(�KB�;ǀR>r9�ً.�4Ya6-t����Jæ`��(\$��S�.�(���7��b9D��1�\r{��WHc\r`��H�Cd=4�Q䆐�����1�V� �{e\n�P#�p0c��4ڳR�#%`����G��Ub��+���lݛ�L��8Z(�JA~\\D�/	D��4&�@�b�s�F�(���P\\�Q� �|�t�ԗHH�A2?��N��6o�Tԛ�'�--m��&9��@l&|1���LJz:Ks�C�y�?h*�9e�dS	8�����0,8A��";break;case"zh-tw":$g="�^��%ӕ\\�r�����|%��u:H�B(\\�4��p�r��neRQ̡D8� S�\n�t*.t�I&�G�N��AʤS�V�:	t%9��Sy:\"<�r�ST�,#!��j6�1uL\0�����U:.��I9���B��K&]\nD�X�[��}-,�r����������&��a;D�x��r4��&�)��s3�S���t�\r�A��b���E�E1��ԣ�g:�x�]#0, (��4���\r���G�q��Z���S� )ЪOLP\0��Δ�:}����r���yZ��se�\\B��ABs�� @�2*bPr��\n���/k��)�P��)<�ĩp���Y.R�D��L�GI,I��i.�Oc�t��\0F��dt�)�\\��*��ڬ�ey�L��)pY��r��2���v��Y`\\��0�d,��\$��PMd�\\���\0�<�@��C�N3�PH�� gD��Y N(Kq�]�g1G��9{;��q\$r�Dx�'�:ZE���9Q�%�C�d��V�IZ�e��_�AU=��*K���	\\��yr���[\n˖]��*[W�lȜ�y|�*�@�	�ht)�`P�<݃Ⱥ\r�h\\2�e\\I��C`�92L�@0�L��3�c�2�G!x].J����Ve�*\r���0���@:�Ø�1�m8�3�`@6\r�;�9��H�#8���K<����>���0��Bib��#5#x�2����E�\$9��%�x�/�),WB\$B|E�f,Ȋy0�7��(Y\$	��f����>�72\"h�9��=��c��9O#(�8\r8(����`�0z\r��8a�^��\\0����2�Aw3���Z<6�7�S�4ç./����H�84�n�:�x�A�G��\r��Tcz~r:3�F7Ӎãu��c�g���@DVr��+�n#0\$B�TB1��I�rQ�%x��ѣ�\0��A(-��R`�~\r�Q�!����H��al���.&ɣ���+��%\rT�Aa8 	�A,�H���\"���\$3\0��� iO&q�6�􍙨`��:�w���o\r�� �V���P��DcS\\�7A@'�0��x\$�UC�9���(Pd�F��\"��C��<�@�Ɉ� �\"��&eCc�7�F��HgL(��@��4NL#@���ry\r/\rý���S���̺��*[�t�ٷ���x�\"�C�M�C��ӫ`���8��,�t:%��\0�Ie-y� ^��'���k�6��Ck\r�G�`�\"kMz�D4�f=)��F�/P:��f��U\n���@��:F鷎Q��s;1�L��V��̰�%�'\0��;'r�%@C\n�P�D�pj\0t�q8:	�J5\r\nV+��A�@r+��/�s�&E9���(��r����#b	Ҩ�\"u�P@k��x1�,D��L�0�Um��3`�G@�_\"�^��ū5L���Ʊt*�2�R'�:�B�y���D\\��\\*��";break;}$_f=array();foreach(explode("\n",lzw_decompress($g))as$X)$_f[]=(strpos($X,"\t")?explode("\t",$X):$X);return$_f;}if(!$_f)$_f=get_translations($ba);if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$ee=array_search("SQL",$b->operators);if($ee!==false)unset($b->operators[$ee]);}function
dsn($Eb,$V,$H){try{parent::__construct($Eb,$V,$H);}catch(Exception$Sb){auth_error($Sb->getMessage());}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($I,$Gf=false){$J=parent::query($I);$this->error="";if(!$J){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($J);return$J;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result($J=null){if(!$J){$J=$this->_result;if(!$J)return
false;}if($J->columnCount()){$J->num_rows=$J->rowCount();return$J;}$this->affected_rows=$J->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($I,$o=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch();return$L[$o];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$L=(object)$this->getColumnMeta($this->_offset++);$L->orgtable=$L->table;$L->orgname=$L->name;$L->charsetnr=(in_array("blob",(array)$L->flags)?63:0);return$L;}}}$Bb=array();class
Min_SQL{var$_conn;function
__construct($h){$this->_conn=$h;}function
select($R,$N,$Z,$r,$E=array(),$z=1,$F=0,$je=false){global$b,$x;$Tc=(count($r)<count($N));$I=$b->selectQueryBuild($N,$Z,$r,$E,$z,$F);if(!$I)$I="SELECT".limit(($_GET["page"]!="last"&&+$z&&$r&&$Tc&&$x=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$N)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($r&&$Tc?"\nGROUP BY ".implode(", ",$r):"").($E?"\nORDER BY ".implode(", ",$E):""),($z!=""?+$z:null),($F?$z*$F:0),"\n");$Xe=microtime(true);$K=$this->_conn->query($I);if($je)echo$b->selectQuery($I,format_time($Xe));return$K;}function
delete($R,$pe,$z=0){$I="FROM ".table($R);return
queries("DELETE".($z?limit1($I,$pe):" $I$pe"));}function
update($R,$P,$pe,$z=0,$Me="\n"){$Tf=array();foreach($P
as$y=>$X)$Tf[]="$y = $X";$I=table($R)." SET$Me".implode(",$Me",$Tf);return
queries("UPDATE".($z?limit1($I,$pe):" $I$pe"));}function
insert($R,$P){return
queries("INSERT INTO ".table($R).($P?" (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")":" DEFAULT VALUES"));}function
insertUpdate($R,$M,$he){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$Bb["sqlite"]="SQLite 3";$Bb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$fe=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($dc){$this->_link=new
SQLite3($dc);$Vf=$this->_link->version();$this->server_info=$Vf["versionString"];}function
query($I){$J=@$this->_link->query($I);$this->error="";if(!$J){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($J->numColumns())return
new
Min_Result($J);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($I,$o=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->_result->fetchArray();return$L[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($J){$this->_result=$J;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$U=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($dc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($dc);}function
query($I,$Gf=false){$xd=($Gf?"unbufferedQuery":"query");$J=@$this->_link->$xd($I,SQLITE_BOTH,$n);$this->error="";if(!$J){$this->error=$n;return
false;}elseif($J===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($J);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($I,$o=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->_result->fetch();return$L[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($J){$this->_result=$J;if(method_exists($J,'numRows'))$this->num_rows=$J->numRows();}function
fetch_assoc(){$L=$this->_result->fetch(SQLITE_ASSOC);if(!$L)return
false;$K=array();foreach($L
as$y=>$X)$K[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$K;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$D=$this->_result->fieldName($this->_offset++);$ae='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($ae\\.)?$ae\$~",$D,$A)){$R=($A[3]!=""?$A[3]:idf_unescape($A[2]));$D=($A[5]!=""?$A[5]:idf_unescape($A[4]));}return(object)array("name"=>$D,"orgname"=>$D,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($dc){$this->dsn(DRIVER.":$dc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");}function
select_db($dc){if(is_readable($dc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$dc)?$dc:dirname($_SERVER["SCRIPT_FILENAME"])."/$dc")." AS a")){parent::__construct($dc);return
true;}return
false;}function
multi_query($I){return$this->_result=$this->query($I);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$he){$Tf=array();foreach($M
as$P)$Tf[]="(".implode(", ",$P).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($M))).") VALUES\n".implode(",\n",$Tf));}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($I,$Z,$z,$Gd=0,$Me=" "){return" $I$Z".($z!==null?$Me."LIMIT $z".($Gd?" OFFSET $Gd":""):"");}function
limit1($I,$Z){global$h;return($h->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($I,$Z,1):" $I$Z");}function
db_collation($m,$cb){global$h;return$h->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($D=""){global$h;$K=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$L){$L["Oid"]=1;$L["Auto_increment"]="";$L["Rows"]=$h->result("SELECT COUNT(*) FROM ".idf_escape($L["Name"]));$K[$L["Name"]]=$L;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$L)$K[$L["name"]]["Auto_increment"]=$L["seq"];return($D!=""?$K[$D]:$K);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$h;return!$h->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){global$h;$K=array();$he="";foreach(get_rows("PRAGMA table_info(".table($R).")")as$L){$D=$L["name"];$U=strtolower($L["type"]);$sb=$L["dflt_value"];$K[$D]=array("field"=>$D,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$sb,$A)?str_replace("''","'",$A[1]):($sb=="NULL"?null:$sb)),"null"=>!$L["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$L["pk"],);if($L["pk"]){if($he!="")$K[$he]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$K[$D]["auto_increment"]=true;$he=$D;}}$Ve=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$Ve,$B,PREG_SET_ORDER);foreach($B
as$A){$D=str_replace('""','"',preg_replace('~^"|"$~','',$A[1]));if($K[$D])$K[$D]["collation"]=trim($A[3],"'");}return$K;}function
indexes($R,$i=null){global$h;if(!is_object($i))$i=$h;$K=array();$Ve=$i->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$Ve,$A)){$K[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$A[1],$B,PREG_SET_ORDER);foreach($B
as$A){$K[""]["columns"][]=idf_unescape($A[2]).$A[4];$K[""]["descs"][]=(preg_match('~DESC~i',$A[5])?'1':null);}}if(!$K){foreach(fields($R)as$D=>$o){if($o["primary"])$K[""]=array("type"=>"PRIMARY","columns"=>array($D),"lengths"=>array(),"descs"=>array(null));}}$We=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$i);foreach(get_rows("PRAGMA index_list(".table($R).")",$i)as$L){$D=$L["name"];$v=array("type"=>($L["unique"]?"UNIQUE":"INDEX"));$v["lengths"]=array();$v["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($D).")",$i)as$De){$v["columns"][]=$De["name"];$v["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($D).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$We[$D],$ve)){preg_match_all('/("[^"]*+")+( DESC)?/',$ve[2],$B);foreach($B[2]as$y=>$X){if($X)$v["descs"][$y]='1';}}if(!$K[""]||$v["type"]!="UNIQUE"||$v["columns"]!=$K[""]["columns"]||$v["descs"]!=$K[""]["descs"]||!preg_match("~^sqlite_~",$D))$K[$D]=$v;}return$K;}function
foreign_keys($R){$K=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$L){$lc=&$K[$L["id"]];if(!$lc)$lc=$L;$lc["source"][]=$L["from"];$lc["target"][]=$L["to"];}return$K;}function
view($D){global$h;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($D))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$h;return
h($h->error);}function
check_sqlite_name($D){global$h;$Yb="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Yb)\$~",$D)){$h->error=lang(21,str_replace("|",", ",$Yb));return
false;}return
true;}function
create_database($m,$d){global$h;if(file_exists($m)){$h->error=lang(22);return
false;}if(!check_sqlite_name($m))return
false;try{$_=new
Min_SQLite($m);}catch(Exception$Sb){$h->error=$Sb->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$h;$h->__construct(":memory:");foreach($l
as$m){if(!@unlink($m)){$h->error=lang(22);return
false;}}return
true;}function
rename_database($D,$d){global$h;if(!check_sqlite_name($D))return
false;$h->__construct(":memory:");$h->error=lang(22);return@rename(DB,$D);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$D,$p,$ic,$fb,$Nb,$d,$Ea,$Yd){$Qf=($R==""||$ic);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$Qf=true;break;}}$c=array();$Td=array();foreach($p
as$o){if($o[1]){$c[]=($Qf?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$Td[$o[0]]=$o[1][0];}}if(!$Qf){foreach($c
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$D&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($D)))return
false;}elseif(!recreate_table($R,$D,$c,$Td,$ic))return
false;if($Ea)queries("UPDATE sqlite_sequence SET seq = $Ea WHERE name = ".q($D));return
true;}function
recreate_table($R,$D,$p,$Td,$ic,$w=array()){if($R!=""){if(!$p){foreach(fields($R)as$y=>$o){$p[]=process_field($o,$o);$Td[$y]=idf_escape($y);}}$ie=false;foreach($p
as$o){if($o[6])$ie=true;}$Db=array();foreach($w
as$y=>$X){if($X[2]=="DROP"){$Db[$X[1]]=true;unset($w[$y]);}}foreach(indexes($R)as$Yc=>$v){$f=array();foreach($v["columns"]as$y=>$e){if(!$Td[$e])continue
2;$f[]=$Td[$e].($v["descs"][$y]?" DESC":"");}if(!$Db[$Yc]){if($v["type"]!="PRIMARY"||!$ie)$w[]=array($v["type"],$Yc,$f);}}foreach($w
as$y=>$X){if($X[0]=="PRIMARY"){unset($w[$y]);$ic[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($R)as$Yc=>$lc){foreach($lc["source"]as$y=>$e){if(!$Td[$e])continue
2;$lc["source"][$y]=idf_unescape($Td[$e]);}if(!isset($ic[" $Yc"]))$ic[]=" ".format_foreign_key($lc);}queries("BEGIN");}foreach($p
as$y=>$o)$p[$y]="  ".implode($o);$p=array_merge($p,array_filter($ic));if(!queries("CREATE TABLE ".table($R!=""?"adminer_$D":$D)." (\n".implode(",\n",$p)."\n)"))return
false;if($R!=""){if($Td&&!queries("INSERT INTO ".table("adminer_$D")." (".implode(", ",$Td).") SELECT ".implode(", ",array_map('idf_escape',array_keys($Td)))." FROM ".table($R)))return
false;$Df=array();foreach(triggers($R)as$Bf=>$rf){$Af=trigger($Bf);$Df[]="CREATE TRIGGER ".idf_escape($Bf)." ".implode(" ",$rf)." ON ".table($D)."\n$Af[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$D")." RENAME TO ".table($D));if(!alter_indexes($D,$w))return
false;foreach($Df
as$Af){if(!queries($Af))return
false;}queries("COMMIT");}return
true;}function
index_sql($R,$U,$D,$f){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($D!=""?$D:uniqid($R."_"))." ON ".table($R)." $f";}function
alter_indexes($R,$c){foreach($c
as$he){if($he[0]=="PRIMARY")return
recreate_table($R,$R,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($Xf){return
apply_queries("DROP VIEW",$Xf);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$Xf,$kf){return
false;}function
trigger($D){global$h;if($D=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$u='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$Cf=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$u\\s*(".implode("|",$Cf["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($u))?\\s+ON\\s*$u\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$h->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($D)),$A);$Fd=$A[3];return
array("Timing"=>strtoupper($A[1]),"Event"=>strtoupper($A[2]).($Fd?" OF":""),"Of"=>($Fd[0]=='`'||$Fd[0]=='"'?idf_unescape($Fd):$Fd),"Trigger"=>$D,"Statement"=>$A[4],);}function
triggers($R){$K=array();$Cf=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$L){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$Cf["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$L["sql"],$A);$K[$L["name"]]=array($A[1],$A[2]);}return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ROWID()");}function
explain($h,$I){return$h->query("EXPLAIN QUERY PLAN $I");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ge){return
true;}function
create_sql($R,$Ea){global$h;$K=$h->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$D=>$v){if($D=='')continue;$K.=";\n\n".index_sql($R,$v['type'],$D,"(".implode(", ",array_map('idf_escape',$v['columns'])).")");}return$K;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($k){}function
trigger_sql($R,$bf){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$h;$K=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$K[$y]=$h->result("PRAGMA $y");return$K;}function
show_status(){$K=array();foreach(get_vals("PRAGMA compile_options")as$Od){list($y,$X)=explode("=",$Od,2);$K[$y]=$X;}return$K;}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
support($bc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$bc);}$x="sqlite";$Ff=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$af=array_keys($Ff);$Mf=array();$Nd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$sc=array("hex","length","lower","round","unixepoch","upper");$uc=array("avg","count","count distinct","group_concat","max","min","sum");$Gb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Bb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$fe=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($Qb,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($O,$V,$H){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($H,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Vf=pg_version($this->_link);$this->server_info=$Vf["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($k){global$b;if($k==$b->database())return$this->_database;$K=@pg_connect("$this->_string dbname='".addcslashes($k,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($K)$this->_link=$K;return$K;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($I,$Gf=false){$J=@pg_query($this->_link,$I);$this->error="";if(!$J){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($J)){$this->affected_rows=pg_affected_rows($J);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$o=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
pg_fetch_result($J->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($J){$this->_result=$J;$this->num_rows=pg_num_rows($J);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$e=$this->_offset++;$K=new
stdClass;if(function_exists('pg_field_table'))$K->orgtable=pg_field_table($this->_result,$e);$K->name=pg_field_name($this->_result,$e);$K->orgname=$K->name;$K->type=pg_field_type($this->_result,$e);$K->charsetnr=($K->type=="bytea"?63:0);return$K;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($O,$V,$H){global$b;$m=$b->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$H);return
true;}function
select_db($k){global$b;return($b->database()==$k);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$he){global$h;foreach($M
as$P){$Nf=array();$Z=array();foreach($P
as$y=>$X){$Nf[]="$y = $X";if(isset($he[idf_unescape($y)]))$Z[]="$y = $X";}if(!(($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$Nf)." WHERE ".implode(" AND ",$Z))&&$h->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).")")))return
false;}return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2])){if($h->server_info>=9)$h->query("SET application_name = 'Adminer'");return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($I,$Z,$z,$Gd=0,$Me=" "){return" $I$Z".($z!==null?$Me."LIMIT $z".($Gd?" OFFSET $Gd":""):"");}function
limit1($I,$Z){return" $I$Z";}function
db_collation($m,$cb){global$h;return$h->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT user");}function
tables_list(){$I="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$I.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$I.="
ORDER BY 1";return
get_key_vals($I);}function
count_tables($l){return
array();}function
table_status($D=""){$K=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' WHEN 'mv' THEN 'materialized view' WHEN 'f' THEN 'foreign table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids::int AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v','mv','f')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
".($D!=""?"AND relname = ".q($D):"ORDER BY relname"))as$L)$K[$L["Name"]]=$L;return($D!=""?$K[$D]:$K);}function
is_view($S){return
in_array($S["Engine"],array("view","materialized view"));}function
fk_support($S){return
true;}function
fields($R){$K=array();$wa=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$L){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$L["full_type"],$A);list(,$U,$hd,$L["length"],$ra,$ya)=$A;$L["length"].=$ya;$Ta=$U.$ra;if(isset($wa[$Ta])){$L["type"]=$wa[$Ta];$L["full_type"]=$L["type"].$hd.$ya;}else{$L["type"]=$U;$L["full_type"]=$L["type"].$hd.$ra.$ya;}$L["null"]=!$L["attnotnull"];$L["auto_increment"]=preg_match('~^nextval\\(~i',$L["default"]);$L["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$L["default"],$A))$L["default"]=($A[1][0]=="'"?idf_unescape($A[1]):$A[1]).$A[2];$K[$L["field"]]=$L;}return$K;}function
indexes($R,$i=null){global$h;if(!is_object($i))$i=$h;$K=array();$if=$i->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $if AND attnum > 0",$i);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption FROM pg_index i, pg_class ci WHERE i.indrelid = $if AND ci.oid = i.indexrelid",$i)as$L){$we=$L["relname"];$K[$we]["type"]=($L["indisprimary"]?"PRIMARY":($L["indisunique"]?"UNIQUE":"INDEX"));$K[$we]["columns"]=array();foreach(explode(" ",$L["indkey"])as$Jc)$K[$we]["columns"][]=$f[$Jc];$K[$we]["descs"]=array();foreach(explode(" ",$L["indoption"])as$Kc)$K[$we]["descs"][]=($Kc&1?'1':null);$K[$we]["lengths"]=array();}return$K;}function
foreign_keys($R){global$Id;$K=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$L){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$L['definition'],$A)){$L['source']=array_map('trim',explode(',',$A[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$A[2],$od)){$L['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$od[2]));$L['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$od[4]));}$L['target']=array_map('trim',explode(',',$A[3]));$L['on_delete']=(preg_match("~ON DELETE ($Id)~",$A[4],$od)?$od[1]:'NO ACTION');$L['on_update']=(preg_match("~ON UPDATE ($Id)~",$A[4],$od)?$od[1]:'NO ACTION');$K[$L['conname']]=$L;}}return$K;}function
view($D){global$h;return
array("select"=>$h->result("SELECT pg_get_viewdef(".q($D).")"));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$h;$K=h($h->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$K,$A))$K=$A[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($A[3]).'})(.*)~','\\1<b>\\2</b>',$A[2]).$A[4];return
nl_br($K);}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($l){global$h;$h->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($D,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($D));}function
auto_increment(){return"";}function
alter_table($R,$D,$p,$ic,$fb,$Nb,$d,$Ea,$Yd){$c=array();$oe=array();foreach($p
as$o){$e=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $e";else{$Sf=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($R!=""?"ADD ":"  ").implode($X);else{if($e!=$X[0])$oe[]="ALTER TABLE ".table($R)." RENAME $e TO $X[0]";$c[]="ALTER $e TYPE$X[1]";if(!$X[6]){$c[]="ALTER $e ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $e ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$Sf!="")$oe[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($Sf!=""?substr($Sf,9):"''");}}$c=array_merge($c,$ic);if($R=="")array_unshift($oe,"CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($oe,"ALTER TABLE ".table($R)."\n".implode(",\n",$c));if($R!=""&&$R!=$D)$oe[]="ALTER TABLE ".table($R)." RENAME TO ".table($D);if($R!=""||$fb!="")$oe[]="COMMENT ON TABLE ".table($D)." IS ".q($fb);if($Ea!=""){}foreach($oe
as$I){if(!queries($I))return
false;}return
true;}function
alter_indexes($R,$c){$mb=array();$Cb=array();$oe=array();foreach($c
as$X){if($X[0]!="INDEX")$mb[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$Cb[]=idf_escape($X[1]);else$oe[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." (".implode(", ",$X[2]).")";}if($mb)array_unshift($oe,"ALTER TABLE ".table($R).implode(",",$mb));if($Cb)array_unshift($oe,"DROP INDEX ".implode(", ",$Cb));foreach($oe
as$I){if(!queries($I))return
false;}return
true;}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($Xf){return
drop_tables($Xf);}function
drop_tables($T){foreach($T
as$R){$Ye=table_status($R);if(!queries("DROP ".strtoupper($Ye["Engine"])." ".table($R)))return
false;}return
true;}function
move_tables($T,$Xf,$kf){foreach(array_merge($T,$Xf)as$R){$Ye=table_status($R);if(!queries("ALTER ".strtoupper($Ye["Engine"])." ".table($R)." SET SCHEMA ".idf_escape($kf)))return
false;}return
true;}function
trigger($D){if($D=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$M=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($D));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$L)$K[$L["trigger_name"]]=array($L["condition_timing"],$L["event_manipulation"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
last_id(){return
0;}function
explain($h,$I){return$h->query("EXPLAIN $I");}function
found_rows($S,$Z){global$h;if(preg_match("~ rows=([0-9]+)~",$h->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$ve))return$ve[1];return
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
set_schema($Fe){global$h,$Ff,$af;$K=$h->query("SET search_path TO ".idf_escape($Fe));foreach(types()as$U){if(!isset($Ff[$U])){$Ff[$U]=0;$af[lang(23)][]=$U;}}return$K;}function
use_sql($k){return"\connect ".idf_escape($k);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$h;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($h->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
support($bc){global$h;return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.($h->server_info>=9.3?'materializedview|':'').'scheme|processlist|sequence|trigger|type|variables|drop_col)$~',$bc);}$x="pgsql";$Ff=array();$af=array();foreach(array(lang(24)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(25)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(26)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(27)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(28)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(29)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$Ff+=$X;$af[$y]=array_keys($X);}$Mf=array();$Nd=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$sc=array("char_length","lower","round","to_hex","to_timestamp","upper");$uc=array("avg","count","count distinct","max","min","sum");$Gb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Bb["oracle"]="Oracle";if(isset($_GET["oracle"])){$fe=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($Qb,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($O,$V,$H){$this->_link=@oci_new_connect($V,$H,$O,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
true;}function
query($I,$Gf=false){$J=oci_parse($this->_link,$I);$this->error="";if(!$J){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$K=@oci_execute($J);restore_error_handler();if($K){if(oci_num_fields($J))return
new
Min_Result($J);$this->affected_rows=oci_num_rows($J);}return$K;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$o=1){$J=$this->query($I);if(!is_object($J)||!oci_fetch($J->_result))return
false;return
oci_result($J->_result,$o);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
__construct($J){$this->_result=$J;}function
_convert($L){foreach((array)$L
as$y=>$X){if(is_a($X,'OCI-Lob'))$L[$y]=$X->load();}return$L;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$e=$this->_offset++;$K=new
stdClass;$K->name=oci_field_name($this->_result,$e);$K->orgname=$K->name;$K->type=oci_field_type($this->_result,$e);$K->charsetnr=(preg_match("~raw|blob|bfile~",$K->type)?63:0);return$K;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($O,$V,$H){$this->dsn("oci:dbname=//$O;charset=AL32UTF8",$V,$H);return
true;}function
select_db($k){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($I,$Z,$z,$Gd=0,$Me=" "){return($Gd?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $I$Z) t WHERE rownum <= ".($z+$Gd).") WHERE rnum > $Gd":($z!==null?" * FROM (SELECT $I$Z) WHERE rownum <= ".($z+$Gd):" $I$Z"));}function
limit1($I,$Z){return" $I$Z";}function
db_collation($m,$cb){global$h;return$h->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($l){return
array();}function
table_status($D=""){$K=array();$He=q($D);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($D!=""?" AND table_name = $He":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($D!=""?" WHERE view_name = $He":"")."
ORDER BY 1")as$L){if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$L){$U=$L["DATA_TYPE"];$hd="$L[DATA_PRECISION],$L[DATA_SCALE]";if($hd==",")$hd=$L["DATA_LENGTH"];$K[$L["COLUMN_NAME"]]=array("field"=>$L["COLUMN_NAME"],"full_type"=>$U.($hd?"($hd)":""),"type"=>strtolower($U),"length"=>$hd,"default"=>$L["DATA_DEFAULT"],"null"=>($L["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$K;}function
indexes($R,$i=null){$K=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$i)as$L){$Hc=$L["INDEX_NAME"];$K[$Hc]["type"]=($L["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($L["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$K[$Hc]["columns"][]=$L["COLUMN_NAME"];$K[$Hc]["lengths"][]=($L["CHAR_LENGTH"]&&$L["CHAR_LENGTH"]!=$L["COLUMN_LENGTH"]?$L["CHAR_LENGTH"]:null);$K[$Hc]["descs"][]=($L["DESCEND"]?'1':null);}return$K;}function
view($D){$M=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($D));return
reset($M);}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$h;return
h($h->error);}function
explain($h,$I){$h->query("EXPLAIN PLAN FOR $I");return$h->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$D,$p,$ic,$fb,$Nb,$d,$Ea,$Yd){$c=$Cb=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($R!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$Cb[]=idf_escape($o[0]);}if($R=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($R)."\n".implode("\n",$c)))&&(!$Cb||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$Cb).")"))&&($R==$D||queries("ALTER TABLE ".table($R)." RENAME TO ".table($D)));}function
foreign_keys($R){$K=array();$I="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($R);foreach(get_rows($I)as$L)$K[$L['NAME']]=array("db"=>$L['DEST_DB'],"table"=>$L['DEST_TABLE'],"source"=>array($L['SRC_COLUMN']),"target"=>array($L['DEST_COLUMN']),"on_delete"=>$L['ON_DELETE'],"on_update"=>null,);return$K;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Xf){return
apply_queries("DROP VIEW",$Xf);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$h;return$h->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($Ge){global$h;return$h->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Ge));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$M=get_rows('SELECT * FROM v$instance');return
reset($M);}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
support($bc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$bc);}$x="oracle";$Ff=array();$af=array();foreach(array(lang(24)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(25)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(26)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(27)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$Ff+=$X;$af[$y]=array_keys($X);}$Mf=array();$Nd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$sc=array("length","lower","round","upper");$uc=array("avg","count","count distinct","max","min","sum");$Gb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Bb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$fe=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($O,$V,$H){$this->_link=@sqlsrv_connect($O,array("UID"=>$V,"PWD"=>$H,"CharacterSet"=>"UTF-8"));if($this->_link){$Lc=sqlsrv_server_info($this->_link);$this->server_info=$Lc['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($I,$Gf=false){$J=sqlsrv_query($this->_link,$I);$this->error="";if(!$J){$this->_get_error();return
false;}return$this->store_result($J);}function
multi_query($I){$this->_result=sqlsrv_query($this->_link,$I);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($J=null){if(!$J)$J=$this->_result;if(!$J)return
false;if(sqlsrv_field_metadata($J))return
new
Min_Result($J);$this->affected_rows=sqlsrv_rows_affected($J);return
true;}function
next_result(){return$this->_result?sqlsrv_next_result($this->_result):null;}function
result($I,$o=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->fetch_row();return$L[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($J){$this->_result=$J;}function
_convert($L){foreach((array)$L
as$y=>$X){if(is_a($X,'DateTime'))$L[$y]=$X->format("Y-m-d H:i:s");}return$L;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$K=new
stdClass;$K->name=$o["Name"];$K->orgname=$o["Name"];$K->type=($o["Type"]==1?254:0);return$K;}function
seek($Gd){for($s=0;$s<$Gd;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($O,$V,$H){$this->_link=@mssql_connect($O,$V,$H);if($this->_link){$J=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$L=$J->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$L[0]] $L[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
mssql_select_db($k);}function
query($I,$Gf=false){$J=mssql_query($I,$this->_link);$this->error="";if(!$J){$this->error=mssql_get_last_message();return
false;}if($J===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($I,$o=0){$J=$this->query($I);if(!is_object($J))return
false;return
mssql_result($J->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($J){$this->_result=$J;$this->num_rows=mssql_num_rows($J);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$K=mssql_fetch_field($this->_result);$K->orgtable=$K->table;$K->orgname=$K->name;return$K;}function
seek($Gd){mssql_data_seek($this->_result,$Gd);}function
__destruct(){mssql_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$he){foreach($M
as$P){$Nf=array();$Z=array();foreach($P
as$y=>$X){$Nf[]="$y = $X";if(isset($he[idf_unescape($y)]))$Z[]="$y = $X";}if(!queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$P).")) AS source (c".implode(", c",range(1,count($P))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Nf)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($u){return"[".str_replace("]","]]",$u)."]";}function
table($u){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($u);}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($I,$Z,$z,$Gd=0,$Me=" "){return($z!==null?" TOP (".($z+$Gd).")":"")." $I$Z";}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($m,$cb){global$h;return$h->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($m));}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$h;$K=array();foreach($l
as$m){$h->select_db($m);$K[$m]=$h->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$K;}function
table_status($D=""){$K=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$L){if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$L){$U=$L["type"];$hd=(preg_match("~char|binary~",$U)?$L["max_length"]:($U=="decimal"?"$L[precision],$L[scale]":""));$K[$L["name"]]=array("field"=>$L["name"],"full_type"=>$U.($hd?"($hd)":""),"type"=>$U,"length"=>$hd,"default"=>$L["default"],"null"=>$L["is_nullable"],"auto_increment"=>$L["is_identity"],"collation"=>$L["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$L["is_identity"],);}return$K;}function
indexes($R,$i=null){$K=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$i)as$L){$D=$L["name"];$K[$D]["type"]=($L["is_primary_key"]?"PRIMARY":($L["is_unique"]?"UNIQUE":"INDEX"));$K[$D]["lengths"]=array();$K[$D]["columns"][$L["key_ordinal"]]=$L["column_name"];$K[$D]["descs"][$L["key_ordinal"]]=($L["is_descending_key"]?'1':null);}return$K;}function
view($D){global$h;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$h->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($D))));}function
collations(){$K=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$K[preg_replace('~_.*~','',$d)][]=$d;return$K;}function
information_schema($m){return
false;}function
error(){global$h;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$h->error)));}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).(preg_match('~^[a-z0-9_]+$~i',$d)?" COLLATE $d":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($D,$d){if(preg_match('~^[a-z0-9_]+$~i',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($D));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$D,$p,$ic,$fb,$Nb,$d,$Ea,$Yd){$c=array();foreach($p
as$o){$e=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $e";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($R==""?substr($ic[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($e!=$X[0])queries("EXEC sp_rename ".q(table($R).".$e").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($D)." (".implode(",",(array)$c["ADD"])."\n)");if($R!=$D)queries("EXEC sp_rename ".q(table($R)).", ".q($D));if($ic)$c[""]=$ic;foreach($c
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($D)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$c){$v=array();$Cb=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Cb[]=idf_escape($X[1]);else$v[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$Cb||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$Cb)));}function
last_id(){global$h;return$h->result("SELECT SCOPE_IDENTITY()");}function
explain($h,$I){$h->query("SET SHOWPLAN_ALL ON");$K=$h->query($I);$h->query("SET SHOWPLAN_ALL OFF");return$K;}function
found_rows($S,$Z){}function
foreign_keys($R){$K=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$L){$lc=&$K[$L["FK_NAME"]];$lc["table"]=$L["PKTABLE_NAME"];$lc["source"][]=$L["FKCOLUMN_NAME"];$lc["target"][]=$L["PKCOLUMN_NAME"];}return$K;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Xf){return
queries("DROP VIEW ".implode(", ",array_map('table',$Xf)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Xf,$kf){return
apply_queries("ALTER SCHEMA ".idf_escape($kf)." TRANSFER",array_merge($T,$Xf));}function
trigger($D){if($D=="")return
array();$M=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($D));$K=reset($M);if($K)$K["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$K["text"]);return$K;}function
triggers($R){$K=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$L)$K[$L["name"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$h;if($_GET["ns"]!="")return$_GET["ns"];return$h->result("SELECT SCHEMA_NAME()");}function
set_schema($Fe){return
true;}function
use_sql($k){return"USE ".idf_escape($k);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
support($bc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$bc);}$x="mssql";$Ff=array();$af=array();foreach(array(lang(24)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(25)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(26)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(27)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$Ff+=$X;$af[$y]=array_keys($X);}$Mf=array();$Nd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$sc=array("len","lower","round","upper");$uc=array("avg","count","count distinct","max","min","sum");$Gb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Bb['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$fe=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$V,$H){$this->_link=ibase_connect($O,$V,$H);if($this->_link){$Pf=explode(':',$O);$this->service_link=ibase_service_attach($Pf[0],$V,$H);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return($k=="domain");}function
query($I,$Gf=false){$J=ibase_query($I,$this->_link);if(!$J){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
false;}$this->error="";if($J===true){$this->affected_rows=ibase_affected_rows($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$o=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;$L=$J->fetch_row();return$L[$o];}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($J){$this->_result=$J;}function
fetch_assoc(){return
ibase_fetch_assoc($this->_result);}function
fetch_row(){return
ibase_fetch_row($this->_result);}function
fetch_field(){$o=ibase_field_info($this->_result,$this->_offset++);return(object)array('name'=>$o['name'],'orgname'=>$o['name'],'type'=>$o['type'],'charsetnr'=>$o['length'],);}function
__destruct(){ibase_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2]))return$h;return$h->error;}function
get_databases($hc){return
array("domain");}function
limit($I,$Z,$z,$Gd=0,$Me=" "){$K='';$K.=($z!==null?$Me."FIRST $z".($Gd?" SKIP $Gd":""):"");$K.=" $I$Z";return$K;}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($m,$cb){}function
engines(){return
array();}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
tables_list(){global$h;$I='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$J=ibase_query($h->_link,$I);$K=array();while($L=ibase_fetch_assoc($J))$K[$L['RDB$RELATION_NAME']]='table';ksort($K);return$K;}function
count_tables($l){return
array();}function
table_status($D="",$ac=false){global$h;$K=array();$pb=tables_list();foreach($pb
as$v=>$X){$v=trim($v);$K[$v]=array('Name'=>$v,'Engine'=>'standard',);if($D==$v)return$K[$v];}return$K;}function
is_view($S){return
false;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"]);}function
fields($R){global$h;$K=array();$I='SELECT r.RDB$FIELD_NAME AS field_name,
r.RDB$DESCRIPTION AS field_description,
r.RDB$DEFAULT_VALUE AS field_default_value,
r.RDB$NULL_FLAG AS field_not_null_constraint,
f.RDB$FIELD_LENGTH AS field_length,
f.RDB$FIELD_PRECISION AS field_precision,
f.RDB$FIELD_SCALE AS field_scale,
CASE f.RDB$FIELD_TYPE
WHEN 261 THEN \'BLOB\'
WHEN 14 THEN \'CHAR\'
WHEN 40 THEN \'CSTRING\'
WHEN 11 THEN \'D_FLOAT\'
WHEN 27 THEN \'DOUBLE\'
WHEN 10 THEN \'FLOAT\'
WHEN 16 THEN \'INT64\'
WHEN 8 THEN \'INTEGER\'
WHEN 9 THEN \'QUAD\'
WHEN 7 THEN \'SMALLINT\'
WHEN 12 THEN \'DATE\'
WHEN 13 THEN \'TIME\'
WHEN 35 THEN \'TIMESTAMP\'
WHEN 37 THEN \'VARCHAR\'
ELSE \'UNKNOWN\'
END AS field_type,
f.RDB$FIELD_SUB_TYPE AS field_subtype,
coll.RDB$COLLATION_NAME AS field_collation,
cset.RDB$CHARACTER_SET_NAME AS field_charset
FROM RDB$RELATION_FIELDS r
LEFT JOIN RDB$FIELDS f ON r.RDB$FIELD_SOURCE = f.RDB$FIELD_NAME
LEFT JOIN RDB$COLLATIONS coll ON f.RDB$COLLATION_ID = coll.RDB$COLLATION_ID
LEFT JOIN RDB$CHARACTER_SETS cset ON f.RDB$CHARACTER_SET_ID = cset.RDB$CHARACTER_SET_ID
WHERE r.RDB$RELATION_NAME = '.q($R).'
ORDER BY r.RDB$FIELD_POSITION';$J=ibase_query($h->_link,$I);while($L=ibase_fetch_assoc($J))$K[trim($L['FIELD_NAME'])]=array("field"=>trim($L["FIELD_NAME"]),"full_type"=>trim($L["FIELD_TYPE"]),"type"=>trim($L["FIELD_SUB_TYPE"]),"default"=>trim($L['FIELD_DEFAULT_VALUE']),"null"=>(trim($L["FIELD_NOT_NULL_CONSTRAINT"])=="YES"),"auto_increment"=>'0',"collation"=>trim($L["FIELD_COLLATION"]),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"comment"=>trim($L["FIELD_DESCRIPTION"]),);return$K;}function
indexes($R,$i=null){$K=array();return$K;}function
foreign_keys($R){return
array();}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$h;return
h($h->error);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Fe){return
true;}function
support($bc){return
preg_match("~^(columns|sql|status|table)$~",$bc);}$x="firebird";$Nd=array("=");$sc=array();$uc=array();$Gb=array();}$Bb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$fe=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($k){return($k=="domain");}function
query($I,$Gf=false){$G=array('SelectExpression'=>$I,'ConsistentRead'=>'true');if($this->next)$G['NextToken']=$this->next;$J=sdb_request_all('Select','Item',$G,$this->timeout);if($J===false)return$J;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$I)){$ef=0;foreach($J
as$Uc)$ef+=$Uc->Attribute->Value;$J=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$ef,))));}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
__construct($J){foreach($J
as$Uc){$L=array();if($Uc->Name!='')$L['itemName()']=(string)$Uc->Name;foreach($Uc->Attribute
as$Ba){$D=$this->_processValue($Ba->Name);$Y=$this->_processValue($Ba->Value);if(isset($L[$D])){$L[$D]=(array)$L[$D];$L[$D][]=$Y;}else$L[$D]=$Y;}$this->_rows[]=$L;foreach($L
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($Ib){return(is_object($Ib)&&$Ib['encoding']=='base64'?base64_decode($Ib):(string)$Ib);}function
fetch_assoc(){$L=current($this->_rows);if(!$L)return$L;$K=array();foreach($this->_rows[0]as$y=>$X)$K[$y]=$L[$y];next($this->_rows);return$K;}function
fetch_row(){$K=$this->fetch_assoc();if(!$K)return$K;return
array_values($K);}function
fetch_field(){$Zc=array_keys($this->_rows[0]);return(object)array('name'=>$Zc[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$he="itemName()";function
_chunkRequest($Fc,$qa,$G,$Vb=array()){global$h;foreach(array_chunk($Fc,25)as$Wa){$Xd=$G;foreach($Wa
as$s=>$t){$Xd["Item.$s.ItemName"]=$t;foreach($Vb
as$y=>$X)$Xd["Item.$s.$y"]=$X;}if(!sdb_request($qa,$Xd))return
false;}$h->affected_rows=count($Fc);return
true;}function
_extractIds($R,$pe,$z){$K=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$pe,$B))$K=array_map('idf_unescape',$B[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($R).$pe.($z?" LIMIT 1":"")))as$Uc)$K[]=$Uc->Name;}return$K;}function
select($R,$N,$Z,$r,$E=array(),$z=1,$F=0,$je=false){global$h;$h->next=$_GET["next"];$K=parent::select($R,$N,$Z,$r,$E,$z,$F,$je);$h->next=0;return$K;}function
delete($R,$pe,$z=0){return$this->_chunkRequest($this->_extractIds($R,$pe,$z),'BatchDeleteAttributes',array('DomainName'=>$R));}function
update($R,$P,$pe,$z=0,$Me="\n"){$tb=array();$Pc=array();$s=0;$Fc=$this->_extractIds($R,$pe,$z);$t=idf_unescape($P["`itemName()`"]);unset($P["`itemName()`"]);foreach($P
as$y=>$X){$y=idf_unescape($y);if($X=="NULL"||($t!=""&&array($t)!=$Fc))$tb["Attribute.".count($tb).".Name"]=$y;if($X!="NULL"){foreach((array)$X
as$Vc=>$W){$Pc["Attribute.$s.Name"]=$y;$Pc["Attribute.$s.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Vc)$Pc["Attribute.$s.Replace"]="true";$s++;}}}$G=array('DomainName'=>$R);return(!$Pc||$this->_chunkRequest(($t!=""?array($t):$Fc),'BatchPutAttributes',$G,$Pc))&&(!$tb||$this->_chunkRequest($Fc,'BatchDeleteAttributes',$G,$tb));}function
insert($R,$P){$G=array("DomainName"=>$R);$s=0;foreach($P
as$D=>$Y){if($Y!="NULL"){$D=idf_unescape($D);if($D=="itemName()")$G["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$G["Attribute.$s.Name"]=$D;$G["Attribute.$s.Value"]=(is_array($Y)?$X:idf_unescape($Y));$s++;}}}}return
sdb_request('PutAttributes',$G);}function
insertUpdate($R,$M,$he){foreach($M
as$P){if(!$this->update($R,$P,"WHERE `itemName()` = ".q($P["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($bc){return
preg_match('~sql~',$bc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($m,$cb){}function
tables_list(){global$h;$K=array();foreach(sdb_request_all('ListDomains','DomainName')as$R)$K[(string)$R]='table';if($h->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$K;}function
table_status($D="",$ac=false){$K=array();foreach(($D!=""?array($D=>true):tables_list())as$R=>$U){$L=array("Name"=>$R,"Auto_increment"=>"");if(!$ac){$wd=sdb_request('DomainMetadata',array('DomainName'=>$R));if($wd){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$y=>$X)$L[$y]=(string)$wd->$X;}}if($D!="")return$L;$K[$R]=$L;}return$K;}function
explain($h,$I){}function
error(){global$h;return
h($h->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$i=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($R){return
fields_from_edit();}function
foreign_keys($R){return
array();}function
table($u){return
idf_escape($u);}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
limit($I,$Z,$z,$Gd=0,$Me=" "){return" $I$Z".($z!==null?$Me."LIMIT $z":"");}function
unconvert_field($o,$K){return$K;}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$D,$p,$ic,$fb,$Nb,$d,$Ea,$Yd){return($R==""&&sdb_request('CreateDomain',array('DomainName'=>$D)));}function
drop_tables($T){foreach($T
as$R){if(!sdb_request('DeleteDomain',array('DomainName'=>$R)))return
false;}return
true;}function
count_tables($l){foreach($l
as$m)return
array($m=>count(tables_list()));}function
found_rows($S,$Z){return($Z?null:$S["Rows"]);}function
last_id(){}function
hmac($va,$pb,$y,$te=false){$Na=64;if(strlen($y)>$Na)$y=pack("H*",$va($y));$y=str_pad($y,$Na,"\0");$Wc=$y^str_repeat("\x36",$Na);$Xc=$y^str_repeat("\x5C",$Na);$K=$va($Xc.pack("H*",$va($Wc.$pb)));if($te)$K=pack("H*",$K);return$K;}function
sdb_request($qa,$G=array()){global$b,$h;list($Cc,$G['AWSAccessKeyId'],$Ie)=$b->credentials();$G['Action']=$qa;$G['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$G['Version']='2009-04-15';$G['SignatureVersion']=2;$G['SignatureMethod']='HmacSHA1';ksort($G);$I='';foreach($G
as$y=>$X)$I.='&'.rawurlencode($y).'='.rawurlencode($X);$I=str_replace('%7E','~',substr($I,1));$I.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$Cc)."\n/\n$I",$Ie,true)));@ini_set('track_errors',1);$cc=@file_get_contents((preg_match('~^https?://~',$Cc)?$Cc:"http://$Cc"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$I,'ignore_errors'=>1,))));if(!$cc){$h->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$dg=simplexml_load_string($cc);if(!$dg){$n=libxml_get_last_error();$h->error=$n->message;return
false;}if($dg->Errors){$n=$dg->Errors->Error;$h->error="$n->Message ($n->Code)";return
false;}$h->error='';$jf=$qa."Result";return($dg->$jf?$dg->$jf:true);}function
sdb_request_all($qa,$jf,$G=array(),$qf=0){$K=array();$Xe=($qf?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$G['SelectExpression'],$A)?$A[1]:0);do{$dg=sdb_request($qa,$G);if(!$dg)break;foreach($dg->$jf
as$Ib)$K[]=$Ib;if($z&&count($K)>=$z){$_GET["next"]=$dg->NextToken;break;}if($qf&&microtime(true)-$Xe>$qf)return
false;$G['NextToken']=$dg->NextToken;if($z)$G['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($K),$G['SelectExpression']);}while($dg->NextToken);return$K;}$x="simpledb";$Nd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$sc=array();$uc=array("count");$Gb=array(array("json"));}$Bb["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$fe=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($O,$V,$H){global$b;$m=$b->database();$Pd=array();if($V!=""){$Pd["username"]=$V;$Pd["password"]=$H;}if($m!="")$Pd["db"]=$m;try{$this->_link=@new
MongoClient("mongodb://$O",$Pd);return
true;}catch(Exception$Sb){$this->error=$Sb->getMessage();return
false;}}function
query($I){return
false;}function
select_db($k){try{$this->_db=$this->_link->selectDB($k);return
true;}catch(Exception$Sb){$this->error=$Sb->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($J){foreach($J
as$Uc){$L=array();foreach($Uc
as$y=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$y]=63;$L[$y]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$L;foreach($L
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$L=current($this->_rows);if(!$L)return$L;$K=array();foreach($this->_rows[0]as$y=>$X)$K[$y]=$L[$y];next($this->_rows);return$K;}function
fetch_row(){$K=$this->fetch_assoc();if(!$K)return$K;return
array_values($K);}function
fetch_field(){$Zc=array_keys($this->_rows[0]);$D=$Zc[$this->_offset++];return(object)array('name'=>$D,'charsetnr'=>$this->_charset[$D],);}}}class
Min_Driver
extends
Min_SQL{public$he="_id";function
select($R,$N,$Z,$r,$E=array(),$z=1,$F=0,$je=false){$N=($N==array("*")?array():array_fill_keys($N,true));$Te=array();foreach($E
as$X){$X=preg_replace('~ DESC$~','',$X,1,$lb);$Te[$X]=($lb?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($R)->find(array(),$N)->sort($Te)->limit(+$z)->skip($F*$z));}function
insert($R,$P){try{$K=$this->_conn->_db->selectCollection($R)->insert($P);$this->_conn->errno=$K['code'];$this->_conn->error=$K['err'];$this->_conn->last_id=$P['_id'];return!$K['err'];}catch(Exception$Sb){$this->_conn->error=$Sb->getMessage();return
false;}}}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2]))return$h;return$h->error;}function
error(){global$h;return
h($h->error);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases($hc){global$h;$K=array();$qb=$h->_link->listDBs();foreach($qb['databases']as$m)$K[]=$m['name'];return$K;}function
collations(){return
array();}function
db_collation($m,$cb){}function
count_tables($l){global$h;$K=array();foreach($l
as$m)$K[$m]=count($h->_link->selectDB($m)->getCollectionNames(true));return$K;}function
tables_list(){global$h;return
array_fill_keys($h->_db->getCollectionNames(true),'table');}function
table_status($D="",$ac=false){$K=array();foreach(tables_list()as$R=>$U){$K[$R]=array("Name"=>$R);if($D==$R)return$K[$R];}return$K;}function
information_schema(){}function
is_view($S){}function
drop_databases($l){global$h;foreach($l
as$m){$_e=$h->_link->selectDB($m)->drop();if(!$_e['ok'])return
false;}return
true;}function
indexes($R,$i=null){global$h;$K=array();foreach($h->_db->selectCollection($R)->getIndexInfo()as$v){$wb=array();foreach($v["key"]as$e=>$U)$wb[]=($U==-1?'1':null);$K[$v["name"]]=array("type"=>($v["name"]=="_id_"?"PRIMARY":($v["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($v["key"]),"lengths"=>array(),"descs"=>$wb,);}return$K;}function
fields($R){return
fields_from_edit();}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
foreign_keys($R){return
array();}function
fk_support($S){}function
engines(){return
array();}function
found_rows($S,$Z){global$h;return$h->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($R,$D,$p,$ic,$fb,$Nb,$d,$Ea,$Yd){global$h;if($R==""){$h->_db->createCollection($D);return
true;}}function
drop_tables($T){global$h;foreach($T
as$R){$_e=$h->_db->selectCollection($R)->drop();if(!$_e['ok'])return
false;}return
true;}function
truncate_tables($T){global$h;foreach($T
as$R){$_e=$h->_db->selectCollection($R)->remove();if(!$_e['ok'])return
false;}return
true;}function
alter_indexes($R,$c){global$h;foreach($c
as$X){list($U,$D,$P)=$X;if($P=="DROP")$K=$h->_db->command(array("deleteIndexes"=>$R,"index"=>$D));else{$f=array();foreach($P
as$e){$e=preg_replace('~ DESC$~','',$e,1,$lb);$f[$e]=($lb?-1:1);}$K=$h->_db->selectCollection($R)->ensureIndex($f,array("unique"=>($U=="UNIQUE"),"name"=>$D,));}if($K['errmsg']){$h->error=$K['errmsg'];return
false;}}return
true;}function
last_id(){global$h;return$h->last_id;}function
table($u){return$u;}function
idf_escape($u){return$u;}function
support($bc){return
preg_match("~database|indexes~",$bc);}$x="mongo";$Nd=array("=");$sc=array();$uc=array();$Gb=array(array("json"));}$Bb["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$fe=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($Zd,$jb=array(),$xd='GET'){@ini_set('track_errors',1);$cc=@file_get_contents($this->_url.'/'.ltrim($Zd,'/'),false,stream_context_create(array('http'=>array('method'=>$xd,'content'=>json_encode($jb),'ignore_errors'=>1,))));if(!$cc){$this->error=$php_errormsg;return$cc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$cc;return
false;}$K=json_decode($cc,true);if($K===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$ib=get_defined_constants(true);foreach($ib['json']as$D=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$D)){$this->error=$D;break;}}}}return$K;}function
query($Zd,$jb=array(),$xd='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($Zd,'/'),$jb,$xd);}function
connect($O,$V,$H){$this->_url="http://$V:$H@$O/";$K=$this->query('');if($K)$this->server_info=$K['version']['number'];return(bool)$K;}function
select_db($k){$this->_db=$k;return
true;}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows;function
__construct($M){$this->num_rows=count($this->_rows);$this->_rows=$M;reset($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);next($this->_rows);return$K;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($R,$N,$Z,$r,$E=array(),$z=1,$F=0,$je=false){global$b;$pb=array();$I="$R/_search";if($N!=array("*"))$pb["fields"]=$N;if($E){$Te=array();foreach($E
as$bb){$bb=preg_replace('~ DESC$~','',$bb,1,$lb);$Te[]=($lb?array($bb=>"desc"):$bb);}$pb["sort"]=$Te;}if($z){$pb["size"]=+$z;if($F)$pb["from"]=($F*$z);}foreach($Z
as$X){list($bb,$Ld,$X)=explode(" ",$X,3);if($bb=="_id")$pb["query"]["ids"]["values"][]=$X;elseif($bb.$X!=""){$lf=array("term"=>array(($bb!=""?$bb:"_all")=>$X));if($Ld=="=")$pb["query"]["filtered"]["filter"]["and"][]=$lf;else$pb["query"]["filtered"]["query"]["bool"]["must"][]=$lf;}}if($pb["query"]&&!$pb["query"]["filtered"]["query"]&&!$pb["query"]["ids"])$pb["query"]["filtered"]["query"]=array("match_all"=>array());$Xe=microtime(true);$He=$this->_conn->query($I,$pb);if($je)echo$b->selectQuery("$I: ".print_r($pb,true),format_time($Xe));if(!$He)return
false;$K=array();foreach($He['hits']['hits']as$Bc){$L=array();if($N==array("*"))$L["_id"]=$Bc["_id"];$p=$Bc['_source'];if($N!=array("*")){$p=array();foreach($N
as$y)$p[$y]=$Bc['fields'][$y];}foreach($p
as$y=>$X){if($pb["fields"])$X=$X[0];$L[$y]=(is_array($X)?json_encode($X):$X);}$K[]=$L;}return
new
Min_Result($K);}}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2]))return$h;return$h->error;}function
support($bc){return
preg_match("~database|table|columns~",$bc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){global$h;$K=$h->rootQuery('_aliases');if($K){$K=array_keys($K);sort($K,SORT_STRING);}return$K;}function
collations(){return
array();}function
db_collation($m,$cb){}function
engines(){return
array();}function
count_tables($l){global$h;$K=$h->query('_mapping');if($K)$K=array_map('count',$K);return$K;}function
tables_list(){global$h;$K=$h->query('_mapping');if($K)$K=array_fill_keys(array_keys($K[$h->_db]["mappings"]),'table');return$K;}function
table_status($D="",$ac=false){global$h;$He=$h->query("_search?search_type=count",array("facets"=>array("count_by_type"=>array("terms"=>array("field"=>"_type",)))),"POST");$K=array();if($He){foreach($He["facets"]["count_by_type"]["terms"]as$R)$K[$R["term"]]=array("Name"=>$R["term"],"Engine"=>"table","Rows"=>$R["count"],);if($D!=""&&$D==$R["term"])return$K[$D];}return$K;}function
error(){global$h;return
h($h->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$i=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($R){global$h;$J=$h->query("$R/_mapping");$K=array();if($J){$nd=$J[$R]['properties'];if(!$nd)$nd=$J[$h->_db]['mappings'][$R]['properties'];if($nd){foreach($nd
as$D=>$o){$K[$D]=array("field"=>$D,"full_type"=>$o["type"],"type"=>$o["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($o["properties"]){unset($K[$D]["privileges"]["insert"]);unset($K[$D]["privileges"]["update"]);}}}}return$K;}function
foreign_keys($R){return
array();}function
table($u){return$u;}function
idf_escape($u){return$u;}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
fk_support($S){}function
found_rows($S,$Z){return
null;}function
create_database($m){global$h;return$h->rootQuery(urlencode($m),array(),'PUT');}function
drop_databases($l){global$h;return$h->rootQuery(urlencode(implode(',',$l)),array(),'DELETE');}function
drop_tables($T){global$h;$K=true;foreach($T
as$R)$K=$K&&$h->query(urlencode($R),array(),'DELETE');return$K;}$x="elastic";$Nd=array("=","query");$sc=array();$uc=array();$Gb=array(array("json"));}$Bb=array("server"=>"MySQL")+$Bb;if(!defined("DRIVER")){$fe=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($O="",$V="",$H="",$k=null,$de=null,$Se=null){mysqli_report(MYSQLI_REPORT_OFF);list($Cc,$de)=explode(":",$O,2);$K=@$this->real_connect(($O!=""?$Cc:ini_get("mysqli.default_host")),($O.$V!=""?$V:ini_get("mysqli.default_user")),($O.$V.$H!=""?$H:ini_get("mysqli.default_pw")),$k,(is_numeric($de)?$de:ini_get("mysqli.default_port")),(!is_numeric($de)?$de:$Se));return$K;}function
set_charset($Ra){if(parent::set_charset($Ra))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $Ra");}function
result($I,$o=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch_array();return$L[$o];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$V,$H){$this->_link=@mysql_connect(($O!=""?$O:ini_get("mysql.default_host")),("$O$V"!=""?$V:ini_get("mysql.default_user")),("$O$V$H"!=""?$H:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($Ra){if(function_exists('mysql_set_charset')){if(mysql_set_charset($Ra,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $Ra");}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($k){return
mysql_select_db($k,$this->_link);}function
query($I,$Gf=false){$J=@($Gf?mysql_unbuffered_query($I,$this->_link):mysql_query($I,$this->_link));$this->error="";if(!$J){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($J===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$o=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
mysql_result($J->_result,0,$o);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($J){$this->_result=$J;$this->num_rows=mysql_num_rows($J);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$K=mysql_fetch_field($this->_result,$this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=($K->blob?63:0);return$K;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($O,$V,$H){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$O)),$V,$H);return
true;}function
set_charset($Ra){$this->query("SET NAMES $Ra");}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($I,$Gf=false){$this->setAttribute(1000,!$Gf);return
parent::query($I,$Gf);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$P){return($P?parent::insert($R,$P):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$M,$he){$f=array_keys(reset($M));$ge="INSERT INTO ".table($R)." (".implode(", ",$f).") VALUES\n";$Tf=array();foreach($f
as$y)$Tf[$y]="$y = VALUES($y)";$df="\nON DUPLICATE KEY UPDATE ".implode(", ",$Tf);$Tf=array();$hd=0;foreach($M
as$P){$Y="(".implode(", ",$P).")";if($Tf&&(strlen($ge)+$hd+strlen($Y)+strlen($df)>1e6)){if(!queries($ge.implode(",\n",$Tf).$df))return
false;$Tf=array();$hd=0;}$Tf[]=$Y;$hd+=strlen($Y)+2;}return
queries($ge.implode(",\n",$Tf).$df);}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2])){$h->set_charset(charset($h));$h->query("SET sql_quote_show_create = 1, autocommit = 1");return$h;}$K=$h->error;if(function_exists('iconv')&&!is_utf8($K)&&strlen($Ee=iconv("windows-1250","utf-8",$K))>strlen($K))$K=$Ee;return$K;}function
get_databases($hc){global$h;$K=get_session("dbs");if($K===null){$I=($h->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$K=($hc?slow_query($I):get_vals($I));restart_session();set_session("dbs",$K);stop_session();}return$K;}function
limit($I,$Z,$z,$Gd=0,$Me=" "){return" $I$Z".($z!==null?$Me."LIMIT $z".($Gd?" OFFSET $Gd":""):"");}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($m,$cb){global$h;$K=null;$mb=$h->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$mb,$A))$K=$A[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$mb,$A))$K=$cb[$A[1]][-1];return$K;}function
engines(){$K=array();foreach(get_rows("SHOW ENGINES")as$L){if(preg_match("~YES|DEFAULT~",$L["Support"]))$K[]=$L["Engine"];}return$K;}function
logged_user(){global$h;return$h->result("SELECT USER()");}function
tables_list(){global$h;return
get_key_vals($h->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($l){$K=array();foreach($l
as$m)$K[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$K;}function
table_status($D="",$ac=false){global$h;$K=array();foreach(get_rows($ac&&$h->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($D!=""?"AND TABLE_NAME = ".q($D):"ORDER BY Name"):"SHOW TABLE STATUS".($D!=""?" LIKE ".q(addcslashes($D,"%_\\")):""))as$L){if($L["Engine"]=="InnoDB")$L["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$L["Comment"]);if(!isset($L["Engine"]))$L["Comment"]="";if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){global$h;return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"])||(preg_match('~NDB~i',$S["Engine"])&&version_compare($h->server_info,'5.6')>=0);}function
fields($R){$K=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$L){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$L["Type"],$A);$K[$L["Field"]]=array("field"=>$L["Field"],"full_type"=>$L["Type"],"type"=>$A[1],"length"=>$A[2],"unsigned"=>ltrim($A[3].$A[4]),"default"=>($L["Default"]!=""||preg_match("~char|set~",$A[1])?$L["Default"]:null),"null"=>($L["Null"]=="YES"),"auto_increment"=>($L["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$L["Extra"],$A)?$A[1]:""),"collation"=>$L["Collation"],"privileges"=>array_flip(preg_split('~, *~',$L["Privileges"])),"comment"=>$L["Comment"],"primary"=>($L["Key"]=="PRI"),);}return$K;}function
indexes($R,$i=null){$K=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$i)as$L){$K[$L["Key_name"]]["type"]=($L["Key_name"]=="PRIMARY"?"PRIMARY":($L["Index_type"]=="FULLTEXT"?"FULLTEXT":($L["Non_unique"]?"INDEX":"UNIQUE")));$K[$L["Key_name"]]["columns"][]=$L["Column_name"];$K[$L["Key_name"]]["lengths"][]=$L["Sub_part"];$K[$L["Key_name"]]["descs"][]=null;}return$K;}function
foreign_keys($R){global$h,$Id;static$ae='`(?:[^`]|``)+`';$K=array();$nb=$h->result("SHOW CREATE TABLE ".table($R),1);if($nb){preg_match_all("~CONSTRAINT ($ae) FOREIGN KEY ?\\(((?:$ae,? ?)+)\\) REFERENCES ($ae)(?:\\.($ae))? \\(((?:$ae,? ?)+)\\)(?: ON DELETE ($Id))?(?: ON UPDATE ($Id))?~",$nb,$B,PREG_SET_ORDER);foreach($B
as$A){preg_match_all("~$ae~",$A[2],$Ue);preg_match_all("~$ae~",$A[5],$kf);$K[idf_unescape($A[1])]=array("db"=>idf_unescape($A[4]!=""?$A[3]:$A[4]),"table"=>idf_unescape($A[4]!=""?$A[4]:$A[3]),"source"=>array_map('idf_unescape',$Ue[0]),"target"=>array_map('idf_unescape',$kf[0]),"on_delete"=>($A[6]?$A[6]:"RESTRICT"),"on_update"=>($A[7]?$A[7]:"RESTRICT"),);}}return$K;}function
view($D){global$h;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$h->result("SHOW CREATE VIEW ".table($D),1)));}function
collations(){$K=array();foreach(get_rows("SHOW COLLATION")as$L){if($L["Default"])$K[$L["Charset"]][-1]=$L["Collation"];else$K[$L["Charset"]][]=$L["Collation"];}ksort($K);foreach($K
as$y=>$X)asort($K[$y]);return$K;}function
information_schema($m){global$h;return($h->server_info>=5&&$m=="information_schema")||($h->server_info>=5.5&&$m=="performance_schema");}function
error(){global$h;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$h->error));}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).($d?" COLLATE ".q($d):""));}function
drop_databases($l){$K=apply_queries("DROP DATABASE",$l,'idf_escape');restart_session();set_session("dbs",null);return$K;}function
rename_database($D,$d){$K=false;if(create_database($D,$d)){$xe=array();foreach(tables_list()as$R=>$U)$xe[]=table($R)." TO ".idf_escape($D).".".table($R);$K=(!$xe||queries("RENAME TABLE ".implode(", ",$xe)));if($K)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$K;}function
auto_increment(){$Fa=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$v){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$v["columns"],true)){$Fa="";break;}if($v["type"]=="PRIMARY")$Fa=" UNIQUE";}}return" AUTO_INCREMENT$Fa";}function
alter_table($R,$D,$p,$ic,$fb,$Nb,$d,$Ea,$Yd){$c=array();foreach($p
as$o)$c[]=($o[1]?($R!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($R!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$ic);$Ye=($fb!==null?" COMMENT=".q($fb):"").($Nb?" ENGINE=".q($Nb):"").($d?" COLLATE ".q($d):"").($Ea!=""?" AUTO_INCREMENT=$Ea":"");if($R=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)$Ye$Yd");if($R!=$D)$c[]="RENAME TO ".table($D);if($Ye)$c[]=ltrim($Ye);return($c||$Yd?queries("ALTER TABLE ".table($R)."\n".implode(",\n",$c).$Yd):true);}function
alter_indexes($R,$c){foreach($c
as$y=>$X)$c[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$c));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Xf){return
queries("DROP VIEW ".implode(", ",array_map('table',$Xf)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Xf,$kf){$xe=array();foreach(array_merge($T,$Xf)as$R)$xe[]=table($R)." TO ".idf_escape($kf).".".table($R);return
queries("RENAME TABLE ".implode(", ",$xe));}function
copy_tables($T,$Xf,$kf){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$D=($kf==DB?table("copy_$R"):idf_escape($kf).".".table($R));if(!queries("\nDROP TABLE IF EXISTS $D")||!queries("CREATE TABLE $D LIKE ".table($R))||!queries("INSERT INTO $D SELECT * FROM ".table($R)))return
false;}foreach($Xf
as$R){$D=($kf==DB?table("copy_$R"):idf_escape($kf).".".table($R));$Wf=view($R);if(!queries("DROP VIEW IF EXISTS $D")||!queries("CREATE VIEW $D AS $Wf[select]"))return
false;}return
true;}function
trigger($D){if($D=="")return
array();$M=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($D));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$L)$K[$L["Trigger"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){global$h,$Ob,$Nc,$Ff;$wa=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Ef="((".implode("|",array_merge(array_keys($Ff),$wa)).")\\b(?:\\s*\\(((?:[^'\")]|$Ob)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$ae="\\s*(".($U=="FUNCTION"?"":$Nc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Ef";$mb=$h->result("SHOW CREATE $U ".idf_escape($D),2);preg_match("~\\(((?:$ae\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$Ef\\s+":"")."(.*)~is",$mb,$A);$p=array();preg_match_all("~$ae\\s*,?~is",$A[1],$B,PREG_SET_ORDER);foreach($B
as$Wd){$D=str_replace("``","`",$Wd[2]).$Wd[3];$p[]=array("field"=>$D,"type"=>strtolower($Wd[5]),"length"=>preg_replace_callback("~$Ob~s",'normalize_enum',$Wd[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Wd[8] $Wd[7]"))),"null"=>1,"full_type"=>$Wd[4],"inout"=>strtoupper($Wd[1]),"collation"=>strtolower($Wd[9]),);}if($U!="FUNCTION")return
array("fields"=>$p,"definition"=>$A[11]);return
array("fields"=>$p,"returns"=>array("type"=>$A[12],"length"=>$A[13],"unsigned"=>$A[15],"collation"=>$A[16]),"definition"=>$A[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ID()");}function
explain($h,$I){return$h->query("EXPLAIN ".($h->server_info>=5.1?"PARTITIONS ":"").$I);}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Fe){return
true;}function
create_sql($R,$Ea){global$h;$K=$h->result("SHOW CREATE TABLE ".table($R),1);if(!$Ea)$K=preg_replace('~ AUTO_INCREMENT=\\d+~','',$K);return$K;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($k){return"USE ".idf_escape($k);}function
trigger_sql($R,$bf){$K="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$L)$K.="\n".($bf=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($L["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($L["Trigger"])." $L[Timing] $L[Event] ON ".table($L["Table"])." FOR EACH ROW\n$L[Statement];;\n";return$K;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($o){if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return"AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$K){if(preg_match("~binary~",$o["type"]))$K="UNHEX($K)";if($o["type"]=="bit")$K="CONV($K, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$K="GeomFromText($K)";return$K;}function
support($bc){global$h;return!preg_match("~scheme|sequence|type|view_trigger".($h->server_info<5.1?"|event|partitioning".($h->server_info<5?"|routine|trigger|view":""):"")."~",$bc);}$x="sql";$Ff=array();$af=array();foreach(array(lang(24)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(25)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(26)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(30)=>array("enum"=>65535,"set"=>64),lang(27)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(29)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$Ff+=$X;$af[$y]=array_keys($X);}$Mf=array("unsigned","zerofill","unsigned zerofill");$Nd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$sc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$uc=array("avg","count","count distinct","group_concat","max","min","sum");$Gb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="4.2.4";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='https://www.adminer.org/editor/' target='_blank' id='h1'>".lang(31)."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($mb=false){return
password_file($mb);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){global$h;if($h){$l=$this->databases(false);return(!$l?$h->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$l[(information_schema($l[0])?1:0)]);}}function
schemas(){return
schemas();}function
databases($hc=true){return
get_databases($hc);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>',lang(32),'<td><input type="hidden" name="auth[driver]" value="server"><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(33),'<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".lang(34)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(35))."\n";}function
login($ld,$H){global$h;$h->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($gf){return
h($gf["Comment"]!=""?$gf["Comment"]:$gf["Name"]);}function
fieldName($o,$E=0){return
h($o["comment"]!=""?$o["comment"]:$o["field"]);}function
selectLinks($gf,$P=""){$a=$gf["Name"];if($P!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$P).'">'.lang(36)."</a>\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$ff){$K=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($R)."
ORDER BY ORDINAL_POSITION",null,"")as$L)$K[$L["TABLE_NAME"]]["keys"][$L["CONSTRAINT_NAME"]][$L["COLUMN_NAME"]]=$L["REFERENCED_COLUMN_NAME"];foreach($K
as$y=>$X){$D=$this->tableName(table_status($y,true));if($D!=""){$He=preg_quote($ff);$Me="(:|\\s*-)?\\s+";$K[$y]["name"]=(preg_match("(^$He$Me(.+)|^(.+?)$Me$He\$)iu",$D,$A)?$A[2].$A[3]:$D);}else
unset($K[$y]);}return$K;}function
backwardKeysPrint($Ia,$L){foreach($Ia
as$R=>$Ha){foreach($Ha["keys"]as$db){$_=ME.'select='.urlencode($R);$s=0;foreach($db
as$e=>$X)$_.=where_link($s++,$e,$L[$X]);echo"<a href='".h($_)."'>".h($Ha["name"])."</a>";$_=ME.'edit='.urlencode($R);foreach($db
as$e=>$X)$_.="&set".urlencode("[".bracket_escape($e)."]")."=".urlencode($L[$X]);echo"<a href='".h($_)."' title='".lang(36)."'>+</a> ";}}}function
selectQuery($I,$pf){return"<!--\n".str_replace("--","--><!-- ",$I)."\n($pf)\n-->\n";}function
rowDescription($R){foreach(fields($R)as$o){if(preg_match("~varchar|character varying~",$o["type"]))return
idf_escape($o["field"]);}return"";}function
rowDescriptions($M,$kc){$K=$M;foreach($M[0]as$y=>$X){if(list($R,$t,$D)=$this->_foreignColumn($kc,$y)){$Fc=array();foreach($M
as$L)$Fc[$L[$y]]=q($L[$y]);$vb=$this->_values[$R];if(!$vb)$vb=get_key_vals("SELECT $t, $D FROM ".table($R)." WHERE $t IN (".implode(", ",$Fc).")");foreach($M
as$C=>$L){if(isset($L[$y]))$K[$C][$y]=(string)$vb[$L[$y]];}}}return$K;}function
selectLink($X,$o){}function
selectVal($X,$_,$o,$Sd){$K=($X===null?"&nbsp;":$X);$_=h($_);if(preg_match('~blob|bytea~',$o["type"])&&!is_utf8($X)){$K=lang(37,strlen($Sd));if(preg_match("~^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)~",$Sd))$K="<img src='$_' alt='$K'>";}if(like_bool($o)&&$K!="&nbsp;")$K=($X?lang(38):lang(39));if($_)$K="<a href='$_'".(is_url($_)?" rel='noreferrer'":"").">$K</a>";if(!$_&&!like_bool($o)&&preg_match('~int|float|double|decimal~',$o["type"]))$K="<div class='number'>$K</div>";elseif(preg_match('~date~',$o["type"]))$K="<div class='datetime'>$K</div>";return$K;}function
editVal($X,$o){if(preg_match('~date|timestamp~',$o["type"])&&$X!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~',lang(40),$X);return$X;}function
selectColumnsPrint($N,$f){}function
selectSearchPrint($Z,$f,$w){$Z=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.lang(41)."</legend><div>\n";$Zc=array();foreach($Z
as$y=>$X)$Zc[$X["col"]]=$y;$s=0;$p=fields($_GET["select"]);foreach($f
as$D=>$ub){$o=$p[$D];if(preg_match("~enum~",$o["type"])||like_bool($o)){$y=$Zc[$D];$s--;echo"<div>".h($ub)."<input type='hidden' name='where[$s][col]' value='".h($D)."'>:",(like_bool($o)?" <select name='where[$s][val]'>".optionlist(array(""=>"",lang(39),lang(38)),$Z[$y]["val"],true)."</select>":enum_input("checkbox"," name='where[$s][val][]'",$o,(array)$Z[$y]["val"],($o["null"]?0:null))),"</div>\n";unset($f[$D]);}elseif(is_array($Pd=$this->_foreignKeyOptions($_GET["select"],$D))){if($p[$D]["null"])$Pd[0]='('.lang(7).')';$y=$Zc[$D];$s--;echo"<div>".h($ub)."<input type='hidden' name='where[$s][col]' value='".h($D)."'><input type='hidden' name='where[$s][op]' value='='>: <select name='where[$s][val]'>".optionlist($Pd,$Z[$y]["val"],true)."</select></div>\n";unset($f[$D]);}}$s=0;foreach($Z
as$X){if(($X["col"]==""||$f[$X["col"]])&&"$X[col]$X[val]"!=""){echo"<div><select name='where[$s][col]'><option value=''>(".lang(42).")".optionlist($f,$X["col"],true)."</select>",html_select("where[$s][op]",array(-1=>"")+$this->operators,$X["op"]),"<input type='search' name='where[$s][val]' value='".h($X["val"])."' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";$s++;}}echo"<div><select name='where[$s][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".lang(42).")".optionlist($f,null,true)."</select>",html_select("where[$s][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$s][val]' onchange='selectAddRow(this);' onsearch='selectSearch(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($E,$f,$w){$Rd=array();foreach($w
as$y=>$v){$E=array();foreach($v["columns"]as$X)$E[]=$f[$X];if(count(array_filter($E,'strlen'))>1&&$y!="PRIMARY")$Rd[$y]=implode(", ",$E);}if($Rd){echo'<fieldset><legend>'.lang(43)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Rd,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(44)."</legend><div>";echo
html_select("limit",array("","50","100"),$z),"</div></fieldset>\n";}function
selectLengthPrint($nf){}function
selectActionPrint($w){echo"<fieldset><legend>".lang(45)."</legend><div>","<input type='submit' value='".lang(46)."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($Kb,$f){if($Kb){print_fieldset("email",lang(47),$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".lang(48).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(49).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$f,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(11)."'>\n";echo"<p>".lang(50).": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($Kb)==1?'<input type="hidden" name="email_field" value="'.h(key($Kb)).'">':html_select("email_field",$Kb)),"<input type='submit' name='email' value='".lang(51)."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($f,$w){return
array(array(),array());}function
selectSearchProcess($p,$w){$K=array();foreach((array)$_GET["where"]as$y=>$Z){$bb=$Z["col"];$Ld=$Z["op"];$X=$Z["val"];if(($y<0?"":$bb).$X!=""){$gb=array();foreach(($bb!=""?array($bb=>$p[$bb]):$p)as$D=>$o){if($bb!=""||is_numeric($X)||!preg_match('~int|float|double|decimal~',$o["type"])){$D=idf_escape($D);if($bb!=""&&$o["type"]=="enum")$gb[]=(in_array(0,$X)?"$D IS NULL OR ":"")."$D IN (".implode(", ",array_map('intval',$X)).")";else{$of=preg_match('~char|text|enum|set~',$o["type"]);$Y=$this->processInput($o,(!$Ld&&$of&&preg_match('~^[^%]+$~',$X)?"%$X%":$X));$gb[]=$D.($Y=="NULL"?" IS".($Ld==">="?" NOT":"")." $Y":(in_array($Ld,$this->operators)||$Ld=="="?" $Ld $Y":($of?" LIKE $Y":" IN (".str_replace(",","', '",$Y).")")));if($y<0&&$X=="0")$gb[]="$D IS NULL";}}}$K[]=($gb?"(".implode(" OR ",$gb).")":"0");}}return$K;}function
selectOrderProcess($p,$w){$Ic=$_GET["index_order"];if($Ic!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($Ic!=""?array($w[$Ic]):$w)as$v){if($Ic!=""||$v["type"]=="INDEX"){$wc=array_filter($v["descs"]);$ub=false;foreach($v["columns"]as$X){if(preg_match('~date|timestamp~',$p[$X]["type"])){$ub=true;break;}}$K=array();foreach($v["columns"]as$y=>$X)$K[]=idf_escape($X).(($wc?$v["descs"][$y]:$ub)?" DESC":"");return$K;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Z,$kc){if($_POST["email_append"])return
true;if($_POST["email"]){$Le=0;if($_POST["all"]||$_POST["check"]){$o=idf_escape($_POST["email_field"]);$cf=$_POST["email_subject"];$ud=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$cf.$ud",$B);$M=get_rows("SELECT DISTINCT $o".($B[1]?", ".implode(", ",array_map('idf_escape',array_unique($B[1]))):"")." FROM ".table($_GET["select"])." WHERE $o IS NOT NULL AND $o != ''".($Z?" AND ".implode(" AND ",$Z):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$p=fields($_GET["select"]);foreach($this->rowDescriptions($M,$kc)as$L){$ye=array('{\\'=>'{');foreach($B[1]as$X)$ye['{$'."$X}"]=$this->editVal($L[$X],$p[$X]);$Jb=$L[$_POST["email_field"]];if(is_mail($Jb)&&send_mail($Jb,strtr($cf,$ye),strtr($ud,$ye),$_POST["email_from"],$_FILES["email_files"]))$Le++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(52,$Le));}return
false;}function
selectQueryBuild($N,$Z,$r,$E,$z,$F){return"";}function
messageQuery($I,$pf){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$I)."\n".($pf?"($pf)\n":"")."-->";}function
editFunctions($o){$K=array();if($o["null"]&&preg_match('~blob~',$o["type"]))$K["NULL"]=lang(7);$K[""]=($o["null"]||$o["auto_increment"]||like_bool($o)?"":"*");if(preg_match('~date|time~',$o["type"]))$K["now"]=lang(53);if(preg_match('~_(md5|sha1)$~i',$o["field"],$A))$K[]=strtolower($A[1]);return$K;}function
editInput($R,$o,$Ca,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ca value='-1' checked><i>".lang(8)."</i></label> ":"").enum_input("radio",$Ca,$o,($Y||isset($_GET["select"])?$Y:0),($o["null"]?"":null));$Pd=$this->_foreignKeyOptions($R,$o["field"],$Y);if($Pd!==null)return(is_array($Pd)?"<select$Ca>".optionlist($Pd,$Y,true)."</select>":"<input value='".h($Y)."'$Ca class='hidden'><input value='".h($Pd)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($R)."&field=".urlencode($o["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($o))return'<input type="checkbox" value="'.h($Y?$Y:1).'"'.($Y?' checked':'')."$Ca>";$Ac="";if(preg_match('~time~',$o["type"]))$Ac=lang(54);if(preg_match('~date|timestamp~',$o["type"]))$Ac=lang(55).($Ac?" [$Ac]":"");if($Ac)return"<input value='".h($Y)."'$Ca> ($Ac)";if(preg_match('~_(md5|sha1)$~i',$o["field"]))return"<input type='password' value='".h($Y)."'$Ca>";return'';}function
processInput($o,$Y,$q=""){if($q=="now")return"$q()";$K=$Y;if(preg_match('~date|timestamp~',$o["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote(lang(40)))).'(.*))',$Y,$A))$K=($A["p1"]!=""?$A["p1"]:($A["p2"]!=""?($A["p2"]<70?20:19).$A["p2"]:gmdate("Y")))."-$A[p3]$A[p4]-$A[p5]$A[p6]".end($A);$K=($o["type"]=="bit"&&preg_match('~^[0-9]+$~',$Y)?$K:q($K));if($Y==""&&like_bool($o))$K="0";elseif($Y==""&&($o["null"]||!preg_match('~char|text~',$o["type"])))$K="NULL";elseif(preg_match('~^(md5|sha1)$~',$q))$K="$q($K)";return
unconvert_field($o,$K);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($R,$bf,$I){global$h;$J=$h->query($I,1);if($J){while($L=$J->fetch_assoc()){if($bf=="table"){dump_csv(array_keys($L));$bf="INSERT";}dump_csv($L);}}}function
dumpFilename($Ec){return
friendly_url($Ec);}function
dumpHeaders($Ec,$zd=false){$Wb="csv";header("Content-Type: text/csv; charset=utf-8");return$Wb;}function
homepage(){return
true;}function
navigation($yd){global$ca;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="https://www.adminer.org/editor/#download" target="_blank" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($yd=="auth"){$gc=true;foreach((array)$_SESSION["pwds"]as$Uf=>$Pe){foreach($Pe[""]as$V=>$H){if($H!==null){if($gc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$gc=false;}echo"<a href='".h(auth_url($Uf,"",$V))."'>".($V!=""?h($V):"<i>".lang(7)."</i>")."</a><br>\n";}}}}else{$this->databasesPrint($yd);if($yd!="db"&&$yd!="ns"){$S=table_status('',true);if(!$S)echo"<p class='message'>".lang(9)."\n";else$this->tablesPrint($S);}}}function
databasesPrint($yd){}function
tablesPrint($T){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($T
as$L){$D=$this->tableName($L);if(isset($L["Engine"])&&$D!="")echo"<a href='".h(ME).'select='.urlencode($L["Name"])."'".bold($_GET["select"]==$L["Name"]||$_GET["edit"]==$L["Name"],"select")." title='".lang(56)."'>$D</a><br>\n";}}function
_foreignColumn($kc,$e){foreach((array)$kc[$e]as$jc){if(count($jc["source"])==1){$D=$this->rowDescription($jc["table"]);if($D!=""){$t=idf_escape($jc["target"][0]);return
array($jc["table"],$t,$D);}}}}function
_foreignKeyOptions($R,$e,$Y=null){global$h;if(list($kf,$t,$D)=$this->_foreignColumn(column_foreign_keys($R),$e)){$K=&$this->_values[$kf];if($K===null){$S=table_status($kf);$K=($S["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $t, $D FROM ".table($kf)." ORDER BY 2"));}if(!$K&&$Y!==null)return$h->result("SELECT $D FROM ".table($kf)." WHERE $t = ".q($Y));return$K;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($sf,$n="",$Qa=array(),$tf=""){global$ba,$ca,$b,$Bb,$x;page_headers();if(is_ajax()&&$n){page_messages($n);exit;}$uf=$sf.($tf!=""?": $tf":"");$vf=strip_tags($uf.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ba,'" dir="',lang(57),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>',$vf,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.2.4",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.2.4",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.2.4",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.2.4",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(57),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ca');\"");?>>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape(lang(58)),'\';
</script>

<div id="help" class="jush-',$x,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Qa!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$Bb[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$O=(SERVER!=""?h(SERVER):lang(59));if($Qa===false)echo"$O\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$O</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Qa)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Qa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Qa
as$y=>$X){$ub=(is_array($X)?$X[1]:h($X));if($ub!="")echo"<a href='".h(ME."$y=").urlencode(is_array($X)?$X[0]:$X)."'>$ub</a> &raquo; ";}}echo"$sf\n";}}echo"<h2>$uf</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($n);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($n){$Of=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$vd=$_SESSION["messages"][$Of];if($vd){echo"<div class='message'>".implode("</div>\n<div class='message'>",$vd)."</div>\n";unset($_SESSION["messages"][$Of]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($yd=""){global$b,$xf;echo'</div>

';switch_lang();if($yd!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(60),'" id="logout">
<input type="hidden" name="token" value="',$xf,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($yd);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($C){while($C>=2147483648)$C-=4294967296;while($C<=-2147483649)$C+=4294967296;return(int)$C;}function
long2str($W,$Zf){$Ee='';foreach($W
as$X)$Ee.=pack('V',$X);if($Zf)return
substr($Ee,0,end($W));return$Ee;}function
str2long($Ee,$Zf){$W=array_values(unpack('V*',str_pad($Ee,4*ceil(strlen($Ee)/4),"\0")));if($Zf)$W[]=strlen($Ee);return$W;}function
xxtea_mx($fg,$eg,$ef,$Vc){return
int32((($fg>>5&0x7FFFFFF)^$eg<<2)+(($eg>>3&0x1FFFFFFF)^$fg<<4))^int32(($ef^$eg)+($Vc^$fg));}function
encrypt_string($Ze,$y){if($Ze=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Ze,true);$C=count($W)-1;$fg=$W[$C];$eg=$W[0];$ne=floor(6+52/($C+1));$ef=0;while($ne-->0){$ef=int32($ef+0x9E3779B9);$Fb=$ef>>2&3;for($Vd=0;$Vd<$C;$Vd++){$eg=$W[$Vd+1];$_d=xxtea_mx($fg,$eg,$ef,$y[$Vd&3^$Fb]);$fg=int32($W[$Vd]+$_d);$W[$Vd]=$fg;}$eg=$W[0];$_d=xxtea_mx($fg,$eg,$ef,$y[$Vd&3^$Fb]);$fg=int32($W[$C]+$_d);$W[$C]=$fg;}return
long2str($W,false);}function
decrypt_string($Ze,$y){if($Ze=="")return"";if(!$y)return
false;$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Ze,false);$C=count($W)-1;$fg=$W[$C];$eg=$W[0];$ne=floor(6+52/($C+1));$ef=int32($ne*0x9E3779B9);while($ef){$Fb=$ef>>2&3;for($Vd=$C;$Vd>0;$Vd--){$fg=$W[$Vd-1];$_d=xxtea_mx($fg,$eg,$ef,$y[$Vd&3^$Fb]);$eg=int32($W[$Vd]-$_d);$W[$Vd]=$eg;}$fg=$W[$C];$_d=xxtea_mx($fg,$eg,$ef,$y[$Vd&3^$Fb]);$eg=int32($W[0]-$_d);$W[0]=$eg;$ef=int32($ef-0x9E3779B9);}return
long2str($W,true);}$h='';$yc=$_SESSION["token"];if(!$yc)$_SESSION["token"]=rand(1,1e6);$xf=get_token();$be=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$be[$y]=$X;}}function
add_invalid_login(){global$b;$dc=get_temp_dir()."/adminer.invalid";$qc=@fopen($dc,"r+");if(!$qc){$qc=@fopen($dc,"w");if(!$qc)return;}flock($qc,LOCK_EX);$Rc=unserialize(stream_get_contents($qc));$pf=time();if($Rc){foreach($Rc
as$Sc=>$X){if($X[0]<$pf)unset($Rc[$Sc]);}}$Qc=&$Rc[$b->bruteForceKey()];if(!$Qc)$Qc=array($pf+30*60,0);$Qc[1]++;$Ne=serialize($Rc);rewind($qc);fwrite($qc,$Ne);ftruncate($qc,strlen($Ne));flock($qc,LOCK_UN);fclose($qc);}$Da=$_POST["auth"];if($Da){$Rc=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$Qc=$Rc[$b->bruteForceKey()];$Cd=($Qc[1]>30?$Qc[0]-time():0);if($Cd>0)auth_error(lang(61,ceil($Cd/60)));session_regenerate_id();$Uf=$Da["driver"];$O=$Da["server"];$V=$Da["username"];$H=(string)$Da["password"];$m=$Da["db"];set_password($Uf,$O,$V,$H);$_SESSION["db"][$Uf][$O][$V][$m]=true;if($Da["permanent"]){$y=base64_encode($Uf)."-".base64_encode($O)."-".base64_encode($V)."-".base64_encode($m);$ke=$b->permanentLogin(true);$be[$y]="$y:".base64_encode($ke?encrypt_string($H,$ke):"");cookie("adminer_permanent",implode(" ",$be));}if(count($_POST)==1||DRIVER!=$Uf||SERVER!=$O||$_GET["username"]!==$V||DB!=$m)redirect(auth_url($Uf,$O,$V,$m));}elseif($_POST["logout"]){if($yc&&!verify_token()){page_header(lang(60),lang(62));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(63));}}elseif($be&&!$_SESSION["pwds"]){session_regenerate_id();$ke=$b->permanentLogin();foreach($be
as$y=>$X){list(,$Xa)=explode(":",$X);list($Uf,$O,$V,$m)=array_map('base64_decode',explode("-",$y));set_password($Uf,$O,$V,decrypt_string(base64_decode($Xa),$ke));$_SESSION["db"][$Uf][$O][$V][$m]=true;}}function
unset_permanent(){global$be;foreach($be
as$y=>$X){list($Uf,$O,$V,$m)=array_map('base64_decode',explode("-",$y));if($Uf==DRIVER&&$O==SERVER&&$V==$_GET["username"]&&$m==DB)unset($be[$y]);}cookie("adminer_permanent",implode(" ",$be));}function
auth_error($n){global$b,$yc;$n=h($n);$Qe=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$Qe]||$_GET[$Qe])&&!$yc)$n=lang(64);else{add_invalid_login();$H=get_password();if($H!==null){if($H===false)$n.='<br>'.lang(65,'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$Qe]&&$_GET[$Qe]&&ini_bool("session.use_only_cookies"))$n=lang(66);$G=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$G["lifetime"]);page_header(lang(34),$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(67),lang(68,implode(", ",$fe)),false);page_footer("auth");exit;}$h=connect();}$Ab=new
Min_Driver($h);if(!is_object($h)||!$b->login($_GET["username"],get_password()))auth_error((is_string($h)?$h:lang(69)));if($Da&&$_POST["token"])$_POST["token"]=$xf;$n='';if($_POST){if(!verify_token()){$Mc="max_input_vars";$sd=ini_get($Mc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$sd||$X<$sd)){$Mc=$y;$sd=$X;}}}$n=(!$_POST["token"]&&$sd?lang(70,"'$Mc'"):lang(62).' '.lang(71));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=lang(72,"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.lang(73);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
email_header($zc){return"=?UTF-8?B?".base64_encode($zc)."?=";}function
send_mail($Jb,$cf,$ud,$rc="",$ec=array()){$Pb=(DIRECTORY_SEPARATOR=="/"?"\n":"\r\n");$ud=str_replace("\n",$Pb,wordwrap(str_replace("\r","","$ud\n")));$Pa=uniqid("boundary");$Aa="";foreach((array)$ec["error"]as$y=>$X){if(!$X)$Aa.="--$Pa$Pb"."Content-Type: ".str_replace("\n","",$ec["type"][$y]).$Pb."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$ec["name"][$y])."\"$Pb"."Content-Transfer-Encoding: base64$Pb$Pb".chunk_split(base64_encode(file_get_contents($ec["tmp_name"][$y])),76,$Pb).$Pb;}$Ka="";$_c="Content-Type: text/plain; charset=utf-8$Pb"."Content-Transfer-Encoding: 8bit";if($Aa){$Aa.="--$Pa--$Pb";$Ka="--$Pa$Pb$_c$Pb$Pb";$_c="Content-Type: multipart/mixed; boundary=\"$Pa\"";}$_c.=$Pb."MIME-Version: 1.0$Pb"."X-Mailer: Adminer Editor".($rc?$Pb."From: ".str_replace("\n","",$rc):"");return
mail($Jb,email_header($cf),$Ka.$ud.$Aa,$_c);}function
like_bool($o){return
preg_match("~bool|(tinyint|bit)\\(1\\)~",$o["full_type"]);}$h->select_db($b->database());$Id="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$Bb[DRIVER]=lang(34);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$N=array(idf_escape($_GET["field"]));$J=$Ab->select($a,$N,array(where($_GET,$p)),$N);$L=($J?$J->fetch_row():array());echo$L[0];exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$Nf=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$D=>$o){if(!isset($o["privileges"][$Nf?"update":"insert"])||$b->fieldName($o)=="")unset($p[$D]);}if($_POST&&!$n&&!isset($_GET["select"])){$kd=$_POST["referer"];if($_POST["insert"])$kd=($Nf?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$kd))$kd=ME."select=".urlencode($a);$w=indexes($a);$If=unique_array($_GET["where"],$w);$qe="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($kd,lang(74),$Ab->delete($a,$qe,!$If));else{$P=array();foreach($p
as$D=>$o){$X=process_input($o);if($X!==false&&$X!==null)$P[idf_escape($D)]=$X;}if($Nf){if(!$P)redirect($kd);queries_redirect($kd,lang(75),$Ab->update($a,$P,$qe,!$If));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$J=$Ab->insert($a,$P);$fd=($J?last_id():0);queries_redirect($kd,lang(76,($fd?" $fd":"")),$J);}}}$L=null;if($_POST["save"])$L=(array)$_POST["fields"];elseif($Z){$N=array();foreach($p
as$D=>$o){if(isset($o["privileges"]["select"])){$za=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$za="''";if($x=="sql"&&preg_match("~enum|set~",$o["type"]))$za="1*".idf_escape($D);$N[]=($za?"$za AS ":"").idf_escape($D);}}$L=array();if(!support("table"))$N=array("*");if($N){$J=$Ab->select($a,$N,array($Z),$N,array(),(isset($_GET["select"])?2:1));$L=$J->fetch_assoc();if(!$L)$L=false;if(isset($_GET["select"])&&(!$L||$J->fetch_assoc()))$L=null;}}if(!support("table")&&!$p){if(!$Z){$J=$Ab->select($a,array("*"),$Z,array("*"));$L=($J?$J->fetch_assoc():false);if(!$L)$L=array($Ab->primary=>"");}if($L){foreach($L
as$y=>$X){if(!$Z)$L[$y]=null;$p[$y]=array("field"=>$y,"null"=>($y!=$Ab->primary),"auto_increment"=>($y==$Ab->primary));}}}edit_form($a,$p,$L,$Nf);}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$w=indexes($a);$p=fields($a);$mc=column_foreign_keys($a);$Hd="";if($S["Oid"]){$Hd=($x=="sqlite"?"rowid":"oid");$w[]=array("type"=>"PRIMARY","columns"=>array($Hd));}parse_str($_COOKIE["adminer_import"],$sa);$Ce=array();$f=array();$nf=null;foreach($p
as$y=>$o){$D=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$D!=""){$f[$y]=html_entity_decode(strip_tags($D),ENT_QUOTES);if(is_shortable($o))$nf=$b->selectLengthProcess();}$Ce+=$o["privileges"];}list($N,$r)=$b->selectColumnsProcess($f,$w);$Tc=count($r)<count($N);$Z=$b->selectSearchProcess($p,$w);$E=$b->selectOrderProcess($p,$w);$z=$b->selectLimitProcess();$rc=($N?implode(", ",$N):"*".($Hd?", $Hd":"")).convert_fields($f,$p,$N)."\nFROM ".table($a);$tc=($r&&$Tc?"\nGROUP BY ".implode(", ",$r):"").($E?"\nORDER BY ".implode(", ",$E):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Jf=>$L){$za=convert_field($p[key($L)]);$N=array($za?$za:idf_escape(key($L)));$Z[]=where_check($Jf,$p);$K=$Ab->select($a,$N,$Z,$N);if($K)echo
reset($K->fetch_row());}exit;}if($_POST&&!$n){$bg=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$Va=array();foreach($_POST["check"]as$Sa)$Va[]=where_check($Sa,$p);$bg[]="((".implode(") OR (",$Va)."))";}$bg=($bg?"\nWHERE ".implode(" AND ",$bg):"");$he=$Lf=null;foreach($w
as$v){if($v["type"]=="PRIMARY"){$he=array_flip($v["columns"]);$Lf=($N?$he:array());break;}}foreach((array)$Lf
as$y=>$X){if(in_array(idf_escape($y),$N))unset($Lf[$y]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Lf===array())$I="SELECT $rc$bg$tc";else{$Hf=array();foreach($_POST["check"]as$X)$Hf[]="(SELECT".limit($rc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$tc,1).")";$I=implode(" UNION ALL ",$Hf);}$b->dumpData($a,"table",$I);exit;}if(!$b->selectEmailProcess($Z,$mc)){if($_POST["save"]||$_POST["delete"]){$J=true;$ta=0;$P=array();if(!$_POST["delete"]){foreach($f
as$D=>$X){$X=process_input($p[$D]);if($X!==null&&($_POST["clone"]||$X!==false))$P[idf_escape($D)]=($X!==false?$X:idf_escape($D));}}if($_POST["delete"]||$P){if($_POST["clone"])$I="INTO ".table($a)." (".implode(", ",array_keys($P)).")\nSELECT ".implode(", ",$P)."\nFROM ".table($a);if($_POST["all"]||($Lf===array()&&is_array($_POST["check"]))||$Tc){$J=($_POST["delete"]?$Ab->delete($a,$bg):($_POST["clone"]?queries("INSERT $I$bg"):$Ab->update($a,$P,$bg)));$ta=$h->affected_rows;}else{foreach((array)$_POST["check"]as$X){$ag="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$J=($_POST["delete"]?$Ab->delete($a,$ag,1):($_POST["clone"]?queries("INSERT".limit1($I,$ag)):$Ab->update($a,$P,$ag)));if(!$J)break;$ta+=$h->affected_rows;}}}$ud=lang(77,$ta);if($_POST["clone"]&&$J&&$ta==1){$fd=last_id();if($fd)$ud=lang(76," $fd");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$ud,$J);if(!$_POST["delete"]){edit_form($a,$p,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$n=lang(78);else{$J=true;$ta=0;foreach($_POST["val"]as$Jf=>$L){$P=array();foreach($L
as$y=>$X){$y=bracket_escape($y,1);$P[idf_escape($y)]=(preg_match('~char|text~',$p[$y]["type"])||$X!=""?$b->processInput($p[$y],$X):"NULL");}$J=$Ab->update($a,$P," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($Jf,$p),!($Tc||$Lf===array())," ");if(!$J)break;$ta+=$h->affected_rows;}queries_redirect(remove_from_uri(),lang(77,$ta),$J);}}elseif(!is_string($cc=get_file("csv_file",true)))$n=upload_error($cc);elseif(!preg_match('~~u',$cc))$n=lang(79);else{cookie("adminer_import","output=".urlencode($sa["output"])."&format=".urlencode($_POST["separator"]));$J=true;$db=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$cc,$B);$ta=count($B[0]);$Ab->begin();$Me=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$M=array();foreach($B[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Me]*)$Me~",$X.$Me,$pd);if(!$y&&!array_diff($pd[1],$db)){$db=$pd[1];$ta--;}else{$P=array();foreach($pd[1]as$s=>$bb)$P[idf_escape($db[$s])]=($bb==""&&$p[$db[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$bb))));$M[]=$P;}}$J=(!$M||$Ab->insertUpdate($a,$M,$he));if($J)$Ab->commit();queries_redirect(remove_from_uri("page"),lang(80,$ta),$J);$Ab->rollback();}}}$hf=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(46).": $hf",$n);$P=null;if(isset($Ce["insert"])||!support("table")){$P="";foreach((array)$_GET["where"]as$X){if(count($mc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$P.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$P);if(!$f&&support("table"))echo"<p class='error'>".lang(81).($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($N,$f);$b->selectSearchPrint($Z,$f,$w);$b->selectOrderPrint($E,$f,$w);$b->selectLimitPrint($z);$b->selectLengthPrint($nf);$b->selectActionPrint($w);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$pc=$h->result(count_rows($a,$Z,$Tc,$r));$F=floor(max(0,$pc-1)/$z);}$Je=$N;if(!$Je){$Je[]="*";if($Hd)$Je[]=$Hd;}$kb=convert_fields($f,$p,$N);if($kb)$Je[]=substr($kb,2);$J=$Ab->select($a,$Je,$Z,$r,$E,$z,$F,true);if(!$J)echo"<p class='error'>".error()."\n";else{if($x=="mssql"&&$F)$J->seek($z*$F);$Lb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$M=array();while($L=$J->fetch_assoc()){if($F&&$x=="oracle")unset($L["RNUM"]);$M[]=$L;}if($_GET["page"]!="last"&&+$z&&$r&&$Tc&&$x=="sql")$pc=$h->result(" SELECT FOUND_ROWS()");if(!$M)echo"<p class='message'>".lang(12)."\n";else{$Ja=$b->backwardKeys($a,$hf);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$r&&$N?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(82)."</a>");$Ad=array();$sc=array();reset($N);$se=1;foreach($M[0]as$y=>$X){if($y!=$Hd){$X=$_GET["columns"][key($N)];$o=$p[$N?($X?$X["col"]:current($N)):$y];$D=($o?$b->fieldName($o,$se):($X["fun"]?"*":$y));if($D!=""){$se++;$Ad[$y]=$D;$e=idf_escape($y);$Dc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$ub="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($Dc.($E[0]==$e||$E[0]==$y||(!$E&&$Tc&&$r[0]==$e)?$ub:'')).'">';echo
apply_sql_function($X["fun"],$D)."</a>";echo"<span class='column hidden'>","<a href='".h($Dc.$ub)."' title='".lang(83)."' class='text'> ↓</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.lang(41).'" class="text jsonly"> =</a>';echo"</span>";}$sc[$y]=$X["fun"];next($N);}}$id=array();if($_GET["modify"]){foreach($M
as$L){foreach($L
as$y=>$X)$id[$y]=max($id[$y],min(40,strlen(utf8_decode($X))));}}echo($Ja?"<th>".lang(84):"")."</thead>\n";if(is_ajax()){if($z%2==1&&$F%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($M,$mc)as$C=>$L){$If=unique_array($M[$C],$w);if(!$If){$If=array();foreach($M[$C]as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$If[$y]=$X;}}$Jf="";foreach($If
as$y=>$X){if(($x=="sql"||$x=="pgsql")&&strlen($X)>64){$y=(strpos($y,'(')?$y:idf_escape($y));$y="MD5(".($x=='sql'&&preg_match("~^utf8_~",$p[$y]["collation"])?$y:"CONVERT($y USING ".charset($h).")").")";$X=md5($X);}$Jf.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$r&&$N?"":"<td>".checkbox("check[]",substr($Jf,1),in_array(substr($Jf,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Tc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Jf)."'>".lang(85)."</a>"));foreach($L
as$y=>$X){if(isset($Ad[$y])){$o=$p[$y];if($X!=""&&(!isset($Lb[$y])||$Lb[$y]!=""))$Lb[$y]=(is_mail($X)?$Ad[$y]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($y).$Jf;if(!$_&&$X!==null){foreach((array)$mc[$y]as$lc){if(count($mc[$y])==1||end($lc["source"])==$y){$_="";foreach($lc["source"]as$s=>$Ue)$_.=where_link($s,$lc["target"][$s],$M[$C][$Ue]);$_=($lc["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($lc["db"]),ME):ME).'select='.urlencode($lc["table"]).$_;if(count($lc["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$If))$_.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($If
as$Vc=>$W)$_.=where_link($s++,$Vc,$W);}$X=select_value($X,$_,$o,$nf);$t=h("val[$Jf][".bracket_escape($y)."]");$Y=$_POST["val"][$Jf][bracket_escape($y)];$Hb=!is_array($L[$y])&&is_utf8($X)&&$M[$C][$y]==$L[$y]&&!$sc[$y];$mf=preg_match('~text|lob~',$o["type"]);if(($_GET["modify"]&&$Hb)||$Y!==null){$vc=h($Y!==null?$Y:$L[$y]);echo"<td>".($mf?"<textarea name='$t' cols='30' rows='".(substr_count($L[$y],"\n")+1)."'>$vc</textarea>":"<input name='$t' value='$vc' size='$id[$y]'>");}else{$md=strpos($X,"<i>...</i>");echo"<td id='$t' onclick=\"selectClick(this, event, ".($md?2:($mf?1:0)).($Hb?"":", '".h(lang(86))."'").");\">$X";}}}if($Ja)echo"<td>";$b->backwardKeysPrint($Ja,$M[$C]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($M||$F)&&!is_ajax()){$Tb=true;if($_GET["page"]!="last"){if(!+$z)$pc=count($M);elseif($x!="sql"||!$Tc){$pc=($Tc?false:found_rows($S,$Z));if($pc<max(1e4,2*($F+1)*$z))$pc=reset(slow_query(count_rows($a,$Z,$Tc,$r)));else$Tb=false;}}if(+$z&&($pc===false||$pc>$z||$F)){echo"<p class='pages'>";$qd=($pc===false?$F+(count($M)>=$z?2:1):floor(($pc-1)/$z));if($x!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(87)."', '".($F+1)."'), event); return false;\">".lang(87)."</a>:",pagination(0,$F).($F>5?" ...":"");for($s=max(1,$F-4);$s<min($qd,$F+5);$s++)echo
pagination($s,$F);if($qd>0){echo($F+5<$qd?" ...":""),($Tb&&$pc!==false?pagination($qd,$F):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$qd'>".lang(88)."</a>");}echo(($pc===false?count($M)+1:$pc-$F*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($F+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.lang(89).'...\');" class="loadmore">'.lang(90).'</a>':'');}else{echo
lang(87).":",pagination(0,$F).($F>1?" ...":""),($F?pagination($F,$F):""),($qd>$F?pagination($F+1,$F).($qd>$F+1?" ...":""):"");}}echo"<p class='count'>\n",($pc!==false?"(".($Tb?"":"~ ").lang(91,$pc).") ":"");$zb=($Tb?"":"~ ").$pc;echo
checkbox("all",1,0,lang(92),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$zb' : checked); selectCount('selected2', this.checked || !checked ? '$zb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>',lang(82),'</legend><div>
<input type="submit" value="',lang(14),'"',($_GET["modify"]?'':' title="'.lang(78).'"'),'>
</div></fieldset>
<fieldset><legend>',lang(93),' <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="',lang(10),'">
<input type="submit" name="clone" value="',lang(94),'">
<input type="submit" name="delete" value="',lang(18),'"',confirm(),'>
</div></fieldset>
';}$nc=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($nc['sql']);break;}}if($nc){print_fieldset("export",lang(95)." <span id='selected2'></span>");$Ud=$b->dumpOutput();echo($Ud?html_select("output",$Ud,$sa["output"])." ":""),html_select("format",$nc,$sa["format"])," <input type='submit' name='export' value='".lang(95)."'>\n","</div></fieldset>\n";}echo(!$r&&$N?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",lang(96),!$M);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$sa["format"],1);echo" <input type='submit' name='import' value='".lang(96)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($Lb,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$xf'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$h->query("KILL ".number($_POST["kill"]));elseif(list($R,$t,$D)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$z=11;$J=$h->query("SELECT $t, $D FROM ".table($R)." WHERE ".(preg_match('~^[0-9]+$~',$_GET["value"])?"$t = $_GET[value] OR ":"")."$D LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT $z");for($s=1;($L=$J->fetch_row())&&$s<$z;$s++)echo"<a href='".h(ME."edit=".urlencode($R)."&where".urlencode("[".bracket_escape(idf_unescape($t))."]")."=".urlencode($L[0]))."'>".h($L[1])."</a><br>\n";if($L)echo"...\n";}exit;}else{page_header(lang(59),"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".lang(97).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".lang(41)."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.lang(98).'<td>'.lang(99)."</thead>\n";foreach(table_status()as$R=>$L){$D=$b->tableName($L);if(isset($L["Engine"])&&$D!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$R,in_array($R,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($R)."'>$D</a>";$X=format_number($L["Rows"]);echo"<td align='right'><a href='".h(ME."edit=").urlencode($R)."'>".($L["Engine"]=="InnoDB"&&$X?"~ $X":$X)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();