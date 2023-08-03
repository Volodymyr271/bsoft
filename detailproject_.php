<?php
  include("functions.inc");
  SuppressionCache();
  $proj=$_GET["proj"];
  $ver=$_GET["ver"];
  $fld=$_GET["fld"];
  if (empty($_GET["cs"])) $cs=0;
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


    <h1>
	  <?php
	    echo $proj." ".$ver;
            if ($cs==1) echo " - краткое описание";
            if ($cs==2) echo " - полное описание";
	  ?>
	</h1>

  <table class=module cellpadding=15><tr><td>
  <?php
      ShowProjectHelp($proj,$fld,$ver,$cs);
  ?>
  </td></tr></table>


</td></tr>
</table>

       </td>
<!--end content-->


<!-- right column -->
       <td width="150" valign="top">

         <table class="right_col_shift" cellspacing="0" cellpadding="0" border="0">
         <tr>
            <tr><td  height="10"></td></tr>
            <tr><td><?php ShowWhatIsProgrammName($proj); ?></td></tr>
            <tr><td  height="10"></td></tr>
            <tr><td><?php
//  if (strtolower($proj)!='storagemulti') {
//    echo "<td class=rightnav>";
    if ((strtolower($fld)=='introduction/potential.htm') && ($proj !='Kassa')) ShowProgramInformer($proj);
    else if ($proj !='StorageUA') ShowProjectReview('Projects',$proj);
//    echo "</td>";
//  }
?></td></tr>
            <!--separator-->
            <tr><td  height="120"></td></tr>
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