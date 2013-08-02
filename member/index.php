<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
include '../class/LoginState.php';
session_start();
$imageSrc = $_SESSION['USESS'];
$pic = $imageSrc->pic;
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="http://jqueryui.com/jquery-wp-content/themes/jqueryui.com/style.css" />
<script>

  $(document).ready(function(){
  $("#test").click(function(){
 $("#div1").load("e.php");
//   alert("xxxx");
  });
});
</script>
<style type="text/css">
<!--
#div1 {
	position:absolute;
	width:865px;
	height:298px;
	z-index:1;
	left: 229px;
	top: 42px;
}
#Layer2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 221px;
	top: 31px;
}
-->
</style>

<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="11%" height="17">&nbsp;</td>
        <td width="8%">&nbsp;</td>
        <td width="34%">&nbsp;</td>
        <td width="47%"><div align="right"><a href="../login/logout.php">logout</a></div></td>
    </tr>
    <tr>
      <td height="86" colspan="2"><div align="center"><img src="<?php echo $pic ?>" width="100" height="70" /></div></td>
        <td colspan="2" rowspan="4"><div id="div1"></div></td>
    </tr>
    <tr>
        <td height="17" colspan="2"><div align="center">Hilmanshini</div></td>
    </tr>
    <tr>
        <td height="67" colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><div align="center"><a href="#history" id="test" onclick="showHint('d.php')">History</a></div></td>
                </tr>
                <tr>
                    <td><div align="center"></div></td>
                </tr>
                <tr>
                    <td height="31"><div align="center"><a href="#message"  onclick="showHint('e.php')">Message</a></div></td>
                </tr>
            </table></td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
</table>
