<?php
  include("functions.inc");
  SuppressionCache();
  $proj=$_GET["proj"];
  $chap=$_GET["chap"];
  $step=$_GET["step"];
  if (empty($_GET["fld"])) $fld='';
  else $fld=$_GET["fld"];
  if (empty($_GET["ver"])) $ver='';
  else $ver=$_GET["ver"];
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


<?php ShowPageHead(10); ?>

    <tr>

<!-- left column -->
       <td width="150" valign="top">

         <table class="left_col_shift" cellspacing="0" cellpadding="0" border="0">
         <tr>
            <!--separator-->
            <tr><td  height="10"></td></tr>
            <tr><td><?php ShowAdditionalProjectMenu($proj,$fld,$ver); ?></td></tr>
            <!--separator-->
            <tr><td  height="10"></td></tr>
            <tr><td><?php if (strtolower($proj)!='storagemulti') { ShowAdditionalProjectMenu_StepByStep($proj,$fld,$ver); } ?></td></tr>
            <!--separator-->
            <tr><td  height="10"></td></tr>
         </tr>
         </table>


       </td>



<!--begin content-->
<!--       <td class="content" valign="top" colspan=2>-->
       <td class="content" valign="top">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
<td>

  <?php
    ShowStepDescription($proj, $chap, $step);
  ?>


</td></tr>
</table>

       </td>
<!--end content-->

<!-- right column -->
       <td width="10" valign="top">

         <table class="right_col_shift" cellspacing="0" cellpadding="0" border="0">
         <tr>
            <tr><td  height="10"></td></tr>
         </tr>
         </table>


       </td>


    </tr>


<?php  ShowFooter(10); ?>


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
