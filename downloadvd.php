<?php
  include("functions.inc");
  SuppressionCache();
  $proj=$_GET["proj"];
  $id=$_GET["id"];
  if (empty($_GET["cs"])) $cs=0;
  else $cs=$_GET["cs"];
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


<?php ShowPageHead(150); ?>

    <tr>

<!-- left column -->
       <td width="150" valign="top">

         <table class="left_col_shift" cellspacing="0" cellpadding="0" border="0">
         <tr>
            <!--separator-->
            <tr><td  height="10"></td></tr>
            <tr><td><?php
  switch ($cs) {
  case 0: 
    ShowMenu();
    break;
  case 1:
    ShowAdditionalProjectMenu($proj,$fld,$ver);
    ShowAdditionalProjectMenu_StepByStep($proj,$fld,$ver);
    break;
  }
?></td></tr>
         </tr>
         </table>


       </td>



<!--begin content-->
       <td class="content" valign="top">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
<td>


    <h1><?php echo $proj?>: ��������� �����-������</h1>

  <table cellpadding=15>
    <tr><td>
      ����� ����� ������������ � ���� ������ AVI-�������, ������ ��� ���������� ����������� ������ ����������� <b>RAR ��� Windows</b>.<br>
      ������������ ����� - <b>Microsoft Video 1</b> �� ������������ ������ ������������ <b>Video for Windows</b> ������������ ������ ��������� <b>Windows</b>
      (������������ � <b>Windows</b> �� ���������).<br>
      ������ �����-����� <b>1024�736</b>.<br>
      <br>
      ��� ��������� ����� ������:
      <UL>
      <LI>���������� ����� ����� �� ����� ����������, 
      <LI>���������� ��� �� ������ ���������� <b>RAR ��� Windows</b>,
      <LI>�������������� ����� �������������� �����������.
      </LI>
      </UL>
      <br>
      <b>����� ��� ����������:</b>
      <?php ShowProjectDownloadVideo($proj,$id); ?>
    </td></tr>
  </table>

  <table cellpadding=5><tr><td><a class=a1 href=javascript:history.back()>�����</a></td></tr></table>



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
