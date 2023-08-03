<?php
  include("functions.inc");
  SuppressionCache();
  if (empty($_GET["proj"])) $proj='';
  else $proj=$_GET["proj"];
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
            <tr><td><?php ShowMenu();?></td></tr>
         </tr>
         </table>


       </td>



<!--begin content-->
       <td class="content" valign="top">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
<td>


<table class=module cellpadding=5 style='background:white'>
<tr><a name='1'></a><th COLSPAN=2 height=25px class=tdhead align=center bgcolor='#e3e3e3' style='background:#e3e3e3 url(./images/gr3.gif); background-repeat:repeat-x;'>Storage 3.21 - Склад, производство, торговля (сборка 17.11.2008)</th></tr>
<tr><td VALIGN=top><img align=left src='./images/storage321.jpg'>
</td><td>
       <P>Разработка линейки программы Storage 3.xx прекращена.<br>
          Последняя доступная версия - 3.21</P>

       <P><b>Принципиальные отличия версии 3.21 от линейки 4.хх:</b></P>

       <table width="100%" border="1" cellspacing="0" cellpadding="2"><!-- bordercolor=black> "#2F4F4F"> -->

       <tr bgcolor="#d1d1d1"> 
         <td> 
           <div align="center"></div>
         </td>
         <td width="50"> 
           <div align="center"><b>3.21</b></div>
         </td>
         <td width="50"> 
           <div align="center"><b>4.01</b></div>
         </td>
       </tr>

       <tr> 
         <td>&nbsp;&nbsp;&nbsp;Ведение учета товара по группам</td>
         <td><div align="center"><font color="#FF0000">Нет</font></div></td>
         <td><div align="center"><font color="#FF0000">Есть</font></div></td>
       </tr>

       <tr> 
         <td>&nbsp;&nbsp;&nbsp;Поддержка интерфейса программы на английском языке</td>
         <td><div align="center"><font color="#FF0000">Есть</font></div></td>
         <td><div align="center"><font color="#FF0000">Нет</font></div></td>
       </tr>

       <tr> 
         <td>&nbsp;&nbsp;&nbsp;Поддержка интерфейса программы на украинском языке</td>
         <td><div align="center"><font color="#FF0000">Есть</font></div></td>
         <td><div align="center"><font color="#FF0000">Нет</font></div></td>
       </tr>

       <tr> 
         <td>&nbsp;&nbsp;&nbsp;Поддержка интерфейса программы на киргизском языке</td>
         <td><div align="center"><font color="#FF0000">Есть</font></div></td>
         <td><div align="center"><font color="#FF0000">Нет</font></div></td>
       </tr>

       </table>


</td></tr>
<tr><td COLSPAN=2 align=right>
<a class=a1 href=javascript:history.back()>Назад</a>
</td></tr>
</table>

  </td></table>


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
