<?php
  include("functions.inc");
  SuppressionCache();
  if (empty($_GET["cs"])) $cs=1;
  else $cs=$_GET["cs"];
?>

<html>

<?php
  OutputHead();
?>

<body link="#000000" leftmargin=5 topmargin=0 marginwidth=0 marginheight=0 vlink="#000000" alink="#000000">
<table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
  <td valign="top">

  <td><img src="dot00000.gif" width="1" height="1"><br></td>
  <td valign="top" width="1011">
    <table BGCOLOR='Silver' width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" >


<?php ShowPageHead(150); ?>

    <tr>

<!-- left column -->
       <td width="150" valign="top">

         <table class="left_col_shift" cellspacing="0" cellpadding="0" border="0">
         <tr>
            <!--separator-->
            <tr><td  height="10"></td></tr>
            <tr><td><?php ShowMenu(); ?></td></tr>
         </tr>
         </table>


       </td>



<!--begin content-->
       <td class="content" valign="top">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
<td>

  <?php
    ShowVideoLesson($cs);
  ?>

</td>
</table>

       </td>
<!--end content-->


<!-- right column -->
       <td width="150" valign="top">

         <table class="right_col_shift" cellspacing="0" cellpadding="0" border="0">
         <tr>
            <tr><td  height="10"></td></tr>
            <tr><td><?php ShowQuickNews(); ?></td></tr>

    <tr><td  height="10"></td></tr>
    <tr><td>
    <table class=modulegray cellpadding=10><tr><td><center><b>Babylon Soft<br>на YouTube</b></center>
    <TABLE height=1 cellSpacing=0 cellPadding=0 width='100%' bgColor=0 border=0><TBODY><TR><TD></TD></TR></TBODY></TABLE><br>
    <div>Подпишись на наш канал и смотри видеоуроки в своем YouTube аккаунте.</div><br>
    <a href='http://www.youtube.com/BabylonSoft' target='_blank'>Подписаться на канал</a>
    </td></tr>
    </table>
    </td></tr>

         </tr>
         </table>


       </td>


    </tr>


<?php  ShowFooter(150); ?>


    </table>
  </td>
  <td><img src="dot00000.gif" width="1" height="0"><br></td>
</tr>
</table>



</td>
</tr>
</table>

</body>

</html>
