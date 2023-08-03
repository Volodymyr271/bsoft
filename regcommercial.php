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



  <a name='2'></a>

    <h1>
<?php
  switch ($cs) {
  case 0: 
    echo "Коммерческая регистрация однопользовательских программ";
    break;
  case 1:
    echo $proj." - коммерческая регистрация";
    break;
  }
?>
</h1>

<table class=module cellpadding=15>

  <tr><td>
   <P align=right><a class=a1 href=javascript:history.back()>Назад</a></P>
   Для коммерческой регистрации необходимо отправить нам заявку на получение коммерческого регистрационного кода одним из указанных ниже способов:
  <UL>
  <LI>автоматически из программы через пункт меню <b>Справка -> Регистрация</b> с выбором коммерческой регистрации.
      Компьютер при этом должен быть подключен к интернету.
  </LI>
  <br>
  <LI>вручную, отправив письмо с заявкой и регистрационной анкетой на адрес <b><a href=mailto:support@bsoft.net.ua>support@bsoft.net.ua</a></b>.
      <br>
      Шаблон заявки в формате Microsoft Word возьмите здесь:   <b><A class=redlink href="./dl/comdecl.rtf">Заявка.rtf</A></b>
      <br>
      Заполните ее, прикрепите к электронному письму и отправьте нам на адрес <b><a href=mailto:support@bsoft.net.ua>support@bsoft.net.ua</a></b>.
  </LI>
  </UL>
  <br><br>
  После получения заявки мы вышлем на ваш e-mail письмо с необходимыми для проплаты реквизитами.<br>
  После подтверждения <a class=redlink href="./prices.php#3">оплаты</a> с вашей стороны письмом на адрес <b><a href=mailto:support@bsoft.net.ua>support@bsoft.net.ua</a></b>
  мы в течении часа вышлем Вам коммерческий регистрационный код на Ваш e-mail, который<br>
  <font color="#FF0000"><b>отменит все ограничения программы !!!</b></font>
  <br>
   <P align=right><a class=a1 href=javascript:history.back()>Назад</a></P>
</td></tr>

</table>


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
