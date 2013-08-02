<?php
include '../class/hook.php';
?>
<form id="form1" name="form1" method="post" action="login_auth.php">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="14%"><p>&nbsp;</p>      </td>
      <td colspan="4"><h4><?php
      if(isset($_GET['msg'])){
          echo ($_GET['msg']);
      }


?></h4></td>
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td width="8%">&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>username</td>
      <td width="1%">&nbsp;</td>
      <td width="9%"><label>
        <input name="username"  width="100%" type="text" id="username" />
      </label></td>
      <td width="68%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>password</td>
      <td>&nbsp;</td>
      <td><input name="password" width="100%" type="password" id="password" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="right">
        <input type="submit" name="Submit" value="Submit" />
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
  </table>
  <label></label>
</form>

