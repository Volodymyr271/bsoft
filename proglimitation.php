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
            <tr><td><?php
  switch ($cs) {
  case 0: 
    ShowMenu();
    break;
  case 1:
    ShowAdditionalProjectMenu($proj,$fld,$ver);
    if (strtolower($proj)!='storagemulti') ShowAdditionalProjectMenu_StepByStep($proj,$fld,$ver);
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


  <a name='4'></a>

    <h1>Ограничения на применение программ</h1>

<table class=module cellpadding=15>

  <tr><td>
   <P align=right><a class=a1 href=javascript:history.back()>Назад</a></P>

     <table width="100%" border="1" cellspacing="0" cellpadding="2">

       <tr bgcolor="#d1d1d1"> 
         <td> 
           <div align="center">Название программы</div>
         </td>
         <td> 
           <div align="center">Ограничения</div>
         </td>
       </tr>

       <tr bgcolor="#f4f4f4"> 
         <TH COLSPAN=2>Без регистрации</TH>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#1">Storage - сетевой Склад, производство, торговля</a></td>
         <td><div align="center">не больше 100 документов</div></td>
       </tr>
<!--       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#2">StorageMulti - сетевой Склад, производство, торговля</a></td>
         <td><div align="center">не больше 100 документов</div></td>
       </tr> -->
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#3">Huckster - Магазин, торговая точка</a></td>
         <td><div align="center">не больше 100 документов</div></td>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#4">Kassa - Рабочее место кассира</a></td>
         <td><div align="center">не больше 10 позиций товара в прайс-листе</div></td>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#5">PayOff - Платежка, банк, касса</a></td>
         <td><div align="center">не больше 100 документов</div></td>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#6">Prices - Заказ по прайс-листам поставщиков</a></td>
         <td>
           <div align="center">не больше 1 поставщика</div>
           <div align="center">не больше 1 прайс-листа</div>
         </td>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#7">Remark - сетевая Записная книжка врача</a></td>
         <td><div align="center">не больше 100 записей</div></td>
       </tr>


       <tr bgcolor="#f4f4f4"> 
         <TH COLSPAN=2>Бесплатная регистрация</TH>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#1">Storage - сетевой Склад, производство, торговля</a></td>
         <td> 
           <div align="center">не больше 3 поставщиков</div>
           <div align="center">не больше 3 получателей</div>
           <div align="center">не больше 100 наименований товара</div>
         </td>
       </tr>
<!--       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#2">StorageMulti - сетевой Склад, производство, торговля</a></td>
         <td> 
           <div align="center">не больше 3 поставщиков</div>
           <div align="center">не больше 3 получателей</div>
           <div align="center">не больше 100 наименований товара</div>
         </td>
       </tr> -->
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#3">Huckster - Магазин, торговая точка</a></td>
         <td> 
           <div align="center">не больше 5 поставщиков</div>
           <div align="center">не больше 100 наименований товара</div>
         </td>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#4">Kassa - Рабочее место кассира</a></td>
         <td> 
           <div align="center">не больше 100 позиций товара в прайс-листе</div>
         </td>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#5">PayOff - Платежка, банк, касса</a></td>
         <td> 
           <div align="center">не больше 10 плательщиков</div>
           <div align="center">не больше 10 получателей</div>
         </td>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#6">Prices - Заказ по прайс-листам поставщиков</a></td>
         <td> 
           <div align="center">не больше 3 поставщиков</div>
           <div align="center">не больше 3 прайс-листов</div>
         </td>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#7">Remark - сетевая Записная книжка врача</a></td>
         <td> 
           <div align="center">не больше 20 пациентов</div>
         </td>
       </tr>


       <tr bgcolor="#f4f4f4"> 
         <TH COLSPAN=2>Коммерческая регистрация</TH>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#1">Storage - сетевой Склад, производство, торговля</a></td>
         <td><div align="center">Нет</div></td>
       </tr>
<!--       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#2">StorageMulti - сетевой Склад, производство, торговля</a></td>
         <td><div align="center">Нет</div></td>
       </tr> -->
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#3">Huckster - Магазин, торговая точка</a></td>
         <td><div align="center">Нет</div></td>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#4">Kassa - Рабочее место кассира</a></td>
         <td><div align="center">Нет</div></td>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#5">PayOff - Платежка, банк, касса</a></td>
         <td><div align="center">Нет</div></td>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#6">Prices - Заказ по прайс-листам поставщиков</a></td>
         <td><div align="center">Нет</div></td>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#7">Remark - сетевая Записная книжка врача</a></td>
         <td><div align="center">Нет</div></td>
       </tr>
     </table>

   <P align=right><a class=a1 href=javascript:history.back()>Назад</a></P>
  </td></tr></table>


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
