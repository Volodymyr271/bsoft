<?php
  include("functions.inc");
  SuppressionCache();
  if (empty($_GET["cc"])) $cc=1;
  else $cc=$_GET["cc"];
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

    <h1>Цены на программы</h1>

<table class=module>
<tr>
<td rowspan="2" align="right" valign="middle"><b>Валюта</b></td>
<td align="left" valign="middle" width="90">
<form method=post>
<select name='cc' onchange=window.location=this.options[selectedIndex].value>
  <option value='prices.php?cc=1'<?php if($cc==1) echo "selected"?>>Доллары США</option>
  <option value='prices.php?cc=2'<?php if($cc==2) echo "selected"?>>Гривны Украины</option>
  <option value='prices.php?cc=3'<?php if($cc==3) echo "selected"?>>Рубли России</option>
  <option value='prices.php?cc=5'<?php if($cc==5) echo "selected"?>>WebMoney.Доллары</option>
  <option value='prices.php?cc=6'<?php if($cc==6) echo "selected"?>>WebMoney.Рубли</option>
  <option value='prices.php?cc=7'<?php if($cc==7) echo "selected"?>>WebMoney.Гривны</option>
<!--  <option value='prices.php?cc=4'<?php if($cc==4) echo "selected"?>>Яндекс.Деньги</option> -->
</select>
</td>
</tr>
</table>

      <h2>Однопользовательские программы</h2>


      <P>Приведенные ниже программы можно использовать <b>БЕСПЛАТНО</b> с небольшими 
      <a href="./proglimitation.php">ограничениями</a>
      или без ограничений после получения коммерческой (платной) регистрации.</P>


       <table width="100%" border="1" cellspacing="0" cellpadding="2"><!-- bordercolor=black> "#2F4F4F"> -->

       <tr bgcolor="#d1d1d1"> 
         <td> 
           <div align="center"><b>Название программы</b></div>
         </td>
         <td width="80"> 
           <div align="center"><b>Без регистрации</b><br>Цена</div>
         </td>
         <td width="80"> 
           <div align="center"><a href="./regfree.php"><b>Бесплатная регистрация</b></a><br>Цена</div>
         </td>
         <td width="90"> 
           <div align="center"><a href="./regcommercial.php"><b>Коммерческая регистрация</b></a><br>Цена</div>
         </td>
       </tr>

       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#1">StorageUA - Склад, производство, торговля, услуги</a> *</td>
         <td><div align="center"><font color="#FF0000">Бесплатно</font></div></td>
         <td><div align="center"><font color="#FF0000">Бесплатно</font></div></td>
         <td><div align="center"><font color="#FF0000">
         <?php switch($cc) {
           case 1: echo '100'; break;
           case 2: echo '2000'; break;
           case 3: echo '-'; break;
           case 5: echo '110'; break;
           case 6: echo '-'; break;
           case 7: echo '2200'; break;
         } ?>
         </font></div></td>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#2">Storage - Склад, производство, торговля, услуги</a> *</td>
         <td><div align="center"><font color="#FF0000">Бесплатно</font></div></td>
         <td><div align="center"><font color="#FF0000">Бесплатно</font></div></td>
         <td><div align="center"><font color="#FF0000">
         <?php switch($cc) {
           case 1: echo '50'; break;
           case 2: echo '1000'; break;
           case 3: echo '3000'; break;
           case 5: echo '55'; break;
           case 6: echo '3300'; break;
           case 7: echo '1100'; break;
         } ?>
         </font></div></td>
       </tr>
<!--       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#2">StorageMulti - Склад, производство, торговля, услуги</a> *</td>
         <td><div align="center"><font color="#FF0000">Бесплатно</font></div></td>
         <td><div align="center"><font color="#FF0000">Бесплатно</font></div></td>
         <td><div align="center"><font color="#FF0000">
         <?php switch($cc) {
           case 1: echo '50'; break;
           case 2: echo '600'; break;
           case 3: echo '3000'; break;
           case 5: echo '55'; break;
           case 6: echo '3300'; break;
           case 7: echo '660'; break;
         } ?>
         </font></div></td>
       </tr> -->
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#4">Huckster - Магазин, торговая точка</a></td>
         <td><div align="center"><font color="#FF0000">Бесплатно</font></div></td>
         <td><div align="center"><font color="#FF0000">Бесплатно</font></div></td>
         <td><div align="center"><font color="#FF0000">
         <?php switch($cc) {
           case 1: echo '40'; break;
           case 2: echo '800'; break;
           case 3: echo '2400'; break;
           case 5: echo '44'; break;
           case 6: echo '2640'; break;
           case 7: echo '880'; break;
         } ?>
         </font></div></td>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a class=redlink href="./projects.php#5">Kassa - Рабочее место кассира</a></td>
         <td><div align="center"><font color="#FF0000">Бесплатно</font></div></td>
         <td><div align="center"><font color="#FF0000">Бесплатно</font></div></td>
         <td><div align="center"><font color="#FF0000">
         <?php switch($cc) {
           case 1: echo '25'; break;
           case 2: echo '500'; break;
           case 3: echo '1500'; break;
           case 5: echo '27,5'; break;
           case 6: echo '1650'; break;
           case 7: echo '550'; break;
         } ?>
         </font></div></td>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#6">PayOff - Платежка, банк, касса</a></td>
         <td><div align="center"><font color="#FF0000">Бесплатно</font></div></td>
         <td><div align="center"><font color="#FF0000">Бесплатно</font></div></td>
         <td><div align="center"><font color="#FF0000">
         <?php switch($cc) {
           case 1: echo '20'; break;
           case 2: echo '400'; break;
           case 3: echo '1200'; break;
           case 5: echo '22'; break;
           case 6: echo '1320'; break;
           case 7: echo '440'; break;
         } ?>
         </font></div></td>
       </tr>
       <!--<tr bgcolor="#f4f4f4"> -->
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a class=redlink href="./projects.php#7">Prices - Заказ по прайс-листам поставщиков</a> *</td>
         <td><div align="center"><font color="#FF0000">Бесплатно</font></div></td>
         <td><div align="center"><font color="#FF0000">Бесплатно</font></div></td>
         <td><div align="center"><font color="#FF0000">
         <?php switch($cc) {
           case 1: echo '30'; break;
           case 2: echo '600'; break;
           case 3: echo '1700'; break;
           case 5: echo '34'; break;
           case 6: echo '1870'; break;
           case 7: echo '660'; break;
         } ?>
         </font></div></td>
       </tr>
       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#8">Remark - Записная книжка врача</a> *</td>
         <td><div align="center"><font color="#FF0000">Бесплатно</font></div></td>
         <td><div align="center"><font color="#FF0000">Бесплатно</font></div></td>
         <td><div align="center"><font color="#FF0000">
         <?php switch($cc) {
           case 1: echo '20'; break;
           case 2: echo '400'; break;
           case 3: echo '1200'; break;
           case 5: echo '22'; break;
           case 6: echo '1320'; break;
           case 7: echo '440'; break;
         } ?>
         </font></div></td>
       </tr>


       </table>


       <table cellpadding=5><tr><td>
       * - рассматривается однопользовательский режим работы программы.
<!--       <?php ShowLine(7,'FFFFFF',100); ?>
       ** - программу Prices можно использовать без регистрации бесплатно в полнофункциональном режиме без ограничений. 
          Единственное отличие от коммерческой регистрации - наличие блока рекламы наших программ при старте программы.
          Бесплатная регистрация программы Prices не проводится.-->
       </td></tr></table>


<!--       <table cellpadding=5><tr><td>
       <IMG align=left SRC="./images/warn.gif" border=0>
       <BLOCKQUOTE>
       <B>Внимание!!!</B>
       <UL>
         <LI>Для пользователей, получивших коммерческую регистрацию программы Storage, StorageMulti или Huckster, коммерческая регистрация программы Prices проводится бесплатно.
       </LI>
       </UL>
       </BLOCKQUOTE>
       </td></tr></table>  -->


      <h2>Многопользовательские сетевые программы</h2>

       <table width="100%" border="1" cellspacing="0" cellpadding="2">

       <tr bgcolor="#d1d1d1">
         <TH ROWSPAN=2><div align="center">Название программы</div></TH>
         <TH COLSPAN=2><div align="center"><a href="./licensingworkplace.php">Лицензия</a>
            <BR>Цена за одно рабочее место</div></TH>
       </tr>

       <tr bgcolor="#d1d1d1">
         <td width="90"> 
           <div align="center"><b>Мастер *</b></div>
         </td>
         <td width="90"> 
           <div align="center"><b>Клиент **</b></div>
         </td>
       </tr>

<!--       <tr bgcolor="#d1d1d1">
         <td width="90"> 
           <div align="center">Цена ***</div>
         </td>
         <td width="90"> 
           <div align="center">Цена ***</div>
         </td>
       </tr>-->


       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#1">StorageUA - сетевой Склад, производство, торговля, услуги</a></td>
         <td><div align="center"><font color="#FF0000">
         <?php switch($cc) {
           case 1: echo '100'; break;
           case 2: echo '2000'; break;
           case 3: echo '-'; break;
           case 5: echo '110'; break;
           case 6: echo '-'; break;
           case 7: echo '2200'; break;
         } ?>
          </font></div></td>
         <td><div align="center"><font color="#FF0000">
         <?php switch($cc) {
           case 1: echo '50'; break;
           case 2: echo '1000'; break;
           case 3: echo '-'; break;
           case 5: echo '55'; break;
           case 6: echo '-'; break;
           case 7: echo '1100'; break;
         } ?>
         </font></div></td>
       </tr>

       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#2">Storage - сетевой Склад, производство, торговля, услуги</a></td>
         <td><div align="center"><font color="#FF0000">
         <?php switch($cc) {
           case 1: echo '50'; break;
           case 2: echo '1000'; break;
           case 3: echo '3000'; break;
           case 5: echo '55'; break;
           case 6: echo '3300'; break;
           case 7: echo '1100'; break;
         } ?>
          </font></div></td>
         <td><div align="center"><font color="#FF0000">
         <?php switch($cc) {
           case 1: echo '25'; break;
           case 2: echo '500'; break;
           case 3: echo '1500'; break;
           case 5: echo '27,5'; break;
           case 6: echo '1650'; break;
           case 7: echo '550'; break;
         } ?>
         </font></div></td>
       </tr>



       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#7">Prices - сетевой Заказ по прайс-листам поставщиков</a></td>
         <td><div align="center"><font color="#FF0000">
         <?php switch($cc) {
           case 1: echo '30'; break;
           case 2: echo '600'; break;
           case 3: echo '1700'; break;
           case 5: echo '34'; break;
           case 6: echo '1870'; break;
           case 7: echo '660'; break;
         } ?>
          </font></div></td>
         <td><div align="center"><font color="#FF0000">
         <?php switch($cc) {
           case 1: echo '15'; break;
           case 2: echo '300'; break;
           case 3: echo '850'; break;
           case 5: echo '17'; break;
           case 6: echo '935'; break;
           case 7: echo '330'; break;
         } ?>
         </font></div></td>
       </tr>


       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#8">Remark - сетевая Записная книжка врача</a></td>
         <td><div align="center"><font color="#FF0000">
         <?php switch($cc) {
           case 1: echo '20'; break;
           case 2: echo '400'; break;
           case 3: echo '1200'; break;
           case 5: echo '22'; break;
           case 6: echo '1320'; break;
           case 7: echo '440'; break;
         } ?>
          </font></div></td>
<!--         <td><div align="center"><font color="#FF0000">Бесплатно</font></div></td>-->

         <td><div align="center"><font color="#FF0000">
         <?php switch($cc) {
           case 1: echo '0 (10) ***'; break;
           case 2: echo '0 (200) ***'; break;
           case 3: echo '0 (600) ***'; break;
           case 5: echo '0 (11) ***'; break;
           case 6: echo '0 (660) ***'; break;
           case 7: echo '0 (220) ***'; break;
         } ?>
         </font></div></td>
       </tr>

       </table>

       <table cellpadding=5><tr><td>
       * - главное рабочее место, там где будет храниться база данных
       <?php ShowLine(7,'FFFFFF',100); ?>
       ** - каждое дополнительное рабочее место в локальной сети предприятия
       <?php ShowLine(7,'FFFFFF',100); ?>
       *** - первое число - стоимость первых трех клиентов; число в круглых скобках - стоимость каждого следующего клиента.
       </td></tr></table>

       <table cellpadding=5><tr><td>
       <IMG align=left SRC="./images/warn.gif" border=0>
       <BLOCKQUOTE>
       <B>Внимание!!!</B>
       <UL>
         <LI>При подключении дополнительных рабочих мест <B>Клиентов</B> к программе с сетевой коммерческой регистрацией, оплачиваются только <B>Клиенты</B>.
         <LI>Если вы имеете однопользовательскую коммерческую регистрацию программы, то при переходе на программу в сетевом многопользовательском режиме из стоимости лицензии будет вычтена стоимость
             однопользовательской коммерческой регистрации программы.
<!--         <LI>При переходе с программы Storage на сетевую программу StorageMulti из стоимости StorageMulti будет вычтена стоимость коммерческой регистрации программы Storage. -->
       </LI>
       </UL>
       </BLOCKQUOTE>
       </td></tr></table>



    <h2>Способы оплаты для валюты:
         <?php switch($cc) {
           case 1: echo 'Доллары США'; break;
           case 2: echo 'Гривны Украины'; break;
           case 3: echo 'Рубли России'; break;
           case 4: echo 'Яндекс.Деньги'; break;
           case 5: echo 'WebMoney.Доллары'; break;
           case 6: echo 'WebMoney.Рубли'; break;
           case 7: echo 'WebMoney.Гривны'; break;
         } ?>
    </h2>

  <?php
  if(($cc==1) or ($cc==2)) 
  {
  echo 'Мы оставили только быстрые способы перевода денег, которые позволяют нашим пользователям получить коммерческую регистрацию или лицензию в течении одного часа с момента осуществления перевода.<br><br><b>Поэтому мы принимаем оплату:</b><br>';
  }
  if(($cc==3) or ($cc==4) or ($cc==5) or ($cc==6)) 
  {
  echo '<b>Мы принимаем оплату:</b><br>';
  }
  ?>

  <UL>

  <?php if(($cc==1) or ($cc==3)) 
  echo "<LI>переводом в международной системе <b>Western Union</b>;<br>
  (подробную информацию об этой системе можно получить на сайте <b><a href='http://www.westernunion.ru/'>http://www.westernunion.ru/</a></b>)
  </LI>";
  ?>

  <?php if(($cc==1) or ($cc==3)) 
  echo "<LI>переводом в международной системе <b>Лидер</b><br>
  (подробную информацию об этой системе можно получить на сайте <b><a href='http://www.leadermt.ru/'>http://www.leadermt.ru/</a></b>)
  </LI>";
  ?>

  <?php if(($cc==1) or ($cc==3))
  echo "<LI>переводом в международной системе <b>Contact</b><br>
  (подробную информацию об этой системе можно получить на сайте <b><a href='http://www.contact-sys.com/'>http://www.contact-sys.com/</a></b>)
  </LI>";
  ?>

  <?php if(($cc==1) or ($cc==3))
  echo "<LI>переводом в международной системе <b>Мигом</b><br>
  (подробную информацию об этой системе можно получить на сайте <b><a href='http://www.migom.com/'>http://www.migom.com/</a></b>)
  </LI>";
  ?>

  <?php if($cc==2)
  { 
  echo "<LI>наличными в <b>Приватбанке</b> (пополнить счет на нашей карточке)</LI>";
//  echo "<LI>денежным переводом через <b>Правэкс-Телеграф</b> в <b>Правэкс-Банке</b></LI>";
//  echo "<LI>денежным переводом через <b>Аваль-Экспресс</b> в <b>Райффайзен Банк Аваль</b></LI>";
  echo "<LI>переводом в системе международных переводов <b>Western Union</b></LI>";
  }
  ?>

  <?php if(($cc==5) or ($cc==6) or ($cc==7)) 
  echo "<LI>переводом в интернет-системе <b>WebMoney</b><br>
  (подробную информацию об этой системе можно получить на сайте <b><a href='http://www.webmoney.ru/'>http://www.webmoney.ru/</a></b>)
  </LI>";
  ?>

  <?php if($cc==4) 
  echo "<LI>переводом в интернет-системе <b>Яндекс-Деньги</b>;<br>
  (подробную информацию об этой системе можно получить на сайте <b><a href='http://money.yandex.ru/'>http://money.yandex.ru/</a></b>)
  </LI>";
  ?>

  <?php if($cc==2)
  echo "<LI>почтовым переводом (время прохождения перевода составляет около 3 дней).
  </LI>";
  ?>

  <?php if($cc==3) 
  echo "<LI>переводом через систему электронных денежных переводов <b>Почты России</b>;<br>
  (подробную информацию об этой системе можно получить на сайте <b><a href='http://www.russianpost.ru/portal/ru/home/financial/cybermoney_world'>http://www.russianpost.ru/</a></b>)<br>
  Время прохождения перевода составляет около 2 дней.
  </LI>";
  ?>

  </LI>
  </UL>
  <br>
  Все необходимые для проплаты реквизиты мы вышлем по требованию на Ваш e-mail.


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

            <tr><td  height="3"></td></tr>
            <tr><td>


  <table class=modulegray width=100% border=0 cellspacing=10 cellpadding=3>
  <tr>
  <td width=100% align=left>

  <P><strong>Что такое одно- пользовательская программа?</strong><BR>
  Это программа, которая позволяет работать с одной базой данных одновременно только одному пользователю.</P>

  </td></tr>
  </table>

         </td></tr>

            <tr><td  height="3"></td></tr>
            <tr><td>


  <table class=modulegray width=100% border=0 cellspacing=10 cellpadding=3>
  <tr>
  <td width=100% align=left>

  <P><strong>Что такое много- пользовательская сетевая программа?</strong><BR>
  Это программа, которая позволяет работать с одной базой данных одновременно нескольким пользователям с нескольких компьютеров,
      объединенных в одну локальную компьютерную сеть.</P>


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
