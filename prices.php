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

    <h1>���� �� ���������</h1>

<table class=module>
<tr>
<td rowspan="2" align="right" valign="middle"><b>������</b></td>
<td align="left" valign="middle" width="90">
<form method=post>
<select name='cc' onchange=window.location=this.options[selectedIndex].value>
  <option value='prices.php?cc=1'<?php if($cc==1) echo "selected"?>>������� ���</option>
  <option value='prices.php?cc=2'<?php if($cc==2) echo "selected"?>>������ �������</option>
  <option value='prices.php?cc=3'<?php if($cc==3) echo "selected"?>>����� ������</option>
  <option value='prices.php?cc=5'<?php if($cc==5) echo "selected"?>>WebMoney.�������</option>
  <option value='prices.php?cc=6'<?php if($cc==6) echo "selected"?>>WebMoney.�����</option>
  <option value='prices.php?cc=7'<?php if($cc==7) echo "selected"?>>WebMoney.������</option>
<!--  <option value='prices.php?cc=4'<?php if($cc==4) echo "selected"?>>������.������</option> -->
</select>
</td>
</tr>
</table>

      <h2>�������������������� ���������</h2>


      <P>����������� ���� ��������� ����� ������������ <b>���������</b> � ���������� 
      <a href="./proglimitation.php">�������������</a>
      ��� ��� ����������� ����� ��������� ������������ (�������) �����������.</P>


       <table width="100%" border="1" cellspacing="0" cellpadding="2"><!-- bordercolor=black> "#2F4F4F"> -->

       <tr bgcolor="#d1d1d1"> 
         <td> 
           <div align="center"><b>�������� ���������</b></div>
         </td>
         <td width="80"> 
           <div align="center"><b>��� �����������</b><br>����</div>
         </td>
         <td width="80"> 
           <div align="center"><a href="./regfree.php"><b>���������� �����������</b></a><br>����</div>
         </td>
         <td width="90"> 
           <div align="center"><a href="./regcommercial.php"><b>������������ �����������</b></a><br>����</div>
         </td>
       </tr>

       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#1">StorageUA - �����, ������������, ��������, ������</a> *</td>
         <td><div align="center"><font color="#FF0000">���������</font></div></td>
         <td><div align="center"><font color="#FF0000">���������</font></div></td>
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
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#2">Storage - �����, ������������, ��������, ������</a> *</td>
         <td><div align="center"><font color="#FF0000">���������</font></div></td>
         <td><div align="center"><font color="#FF0000">���������</font></div></td>
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
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#2">StorageMulti - �����, ������������, ��������, ������</a> *</td>
         <td><div align="center"><font color="#FF0000">���������</font></div></td>
         <td><div align="center"><font color="#FF0000">���������</font></div></td>
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
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#4">Huckster - �������, �������� �����</a></td>
         <td><div align="center"><font color="#FF0000">���������</font></div></td>
         <td><div align="center"><font color="#FF0000">���������</font></div></td>
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
         <td>&nbsp;&nbsp;&nbsp;<a class=redlink href="./projects.php#5">Kassa - ������� ����� �������</a></td>
         <td><div align="center"><font color="#FF0000">���������</font></div></td>
         <td><div align="center"><font color="#FF0000">���������</font></div></td>
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
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#6">PayOff - ��������, ����, �����</a></td>
         <td><div align="center"><font color="#FF0000">���������</font></div></td>
         <td><div align="center"><font color="#FF0000">���������</font></div></td>
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
         <td>&nbsp;&nbsp;&nbsp;<a class=redlink href="./projects.php#7">Prices - ����� �� �����-������ �����������</a> *</td>
         <td><div align="center"><font color="#FF0000">���������</font></div></td>
         <td><div align="center"><font color="#FF0000">���������</font></div></td>
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
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#8">Remark - �������� ������ �����</a> *</td>
         <td><div align="center"><font color="#FF0000">���������</font></div></td>
         <td><div align="center"><font color="#FF0000">���������</font></div></td>
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
       * - ��������������� �������������������� ����� ������ ���������.
<!--       <?php ShowLine(7,'FFFFFF',100); ?>
       ** - ��������� Prices ����� ������������ ��� ����������� ��������� � ������������������� ������ ��� �����������. 
          ������������ ������� �� ������������ ����������� - ������� ����� ������� ����� �������� ��� ������ ���������.
          ���������� ����������� ��������� Prices �� ����������.-->
       </td></tr></table>


<!--       <table cellpadding=5><tr><td>
       <IMG align=left SRC="./images/warn.gif" border=0>
       <BLOCKQUOTE>
       <B>��������!!!</B>
       <UL>
         <LI>��� �������������, ���������� ������������ ����������� ��������� Storage, StorageMulti ��� Huckster, ������������ ����������� ��������� Prices ���������� ���������.
       </LI>
       </UL>
       </BLOCKQUOTE>
       </td></tr></table>  -->


      <h2>��������������������� ������� ���������</h2>

       <table width="100%" border="1" cellspacing="0" cellpadding="2">

       <tr bgcolor="#d1d1d1">
         <TH ROWSPAN=2><div align="center">�������� ���������</div></TH>
         <TH COLSPAN=2><div align="center"><a href="./licensingworkplace.php">��������</a>
            <BR>���� �� ���� ������� �����</div></TH>
       </tr>

       <tr bgcolor="#d1d1d1">
         <td width="90"> 
           <div align="center"><b>������ *</b></div>
         </td>
         <td width="90"> 
           <div align="center"><b>������ **</b></div>
         </td>
       </tr>

<!--       <tr bgcolor="#d1d1d1">
         <td width="90"> 
           <div align="center">���� ***</div>
         </td>
         <td width="90"> 
           <div align="center">���� ***</div>
         </td>
       </tr>-->


       <tr> 
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#1">StorageUA - ������� �����, ������������, ��������, ������</a></td>
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
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#2">Storage - ������� �����, ������������, ��������, ������</a></td>
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
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#7">Prices - ������� ����� �� �����-������ �����������</a></td>
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
         <td>&nbsp;&nbsp;&nbsp;<a href="./projects.php#8">Remark - ������� �������� ������ �����</a></td>
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
<!--         <td><div align="center"><font color="#FF0000">���������</font></div></td>-->

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
       * - ������� ������� �����, ��� ��� ����� ��������� ���� ������
       <?php ShowLine(7,'FFFFFF',100); ?>
       ** - ������ �������������� ������� ����� � ��������� ���� �����������
       <?php ShowLine(7,'FFFFFF',100); ?>
       *** - ������ ����� - ��������� ������ ���� ��������; ����� � ������� ������� - ��������� ������� ���������� �������.
       </td></tr></table>

       <table cellpadding=5><tr><td>
       <IMG align=left SRC="./images/warn.gif" border=0>
       <BLOCKQUOTE>
       <B>��������!!!</B>
       <UL>
         <LI>��� ����������� �������������� ������� ���� <B>��������</B> � ��������� � ������� ������������ ������������, ������������ ������ <B>�������</B>.
         <LI>���� �� ������ �������������������� ������������ ����������� ���������, �� ��� �������� �� ��������� � ������� ��������������������� ������ �� ��������� �������� ����� ������� ���������
             �������������������� ������������ ����������� ���������.
<!--         <LI>��� �������� � ��������� Storage �� ������� ��������� StorageMulti �� ��������� StorageMulti ����� ������� ��������� ������������ ����������� ��������� Storage. -->
       </LI>
       </UL>
       </BLOCKQUOTE>
       </td></tr></table>



    <h2>������� ������ ��� ������:
         <?php switch($cc) {
           case 1: echo '������� ���'; break;
           case 2: echo '������ �������'; break;
           case 3: echo '����� ������'; break;
           case 4: echo '������.������'; break;
           case 5: echo 'WebMoney.�������'; break;
           case 6: echo 'WebMoney.�����'; break;
           case 7: echo 'WebMoney.������'; break;
         } ?>
    </h2>

  <?php
  if(($cc==1) or ($cc==2)) 
  {
  echo '�� �������� ������ ������� ������� �������� �����, ������� ��������� ����� ������������� �������� ������������ ����������� ��� �������� � ������� ������ ���� � ������� ������������� ��������.<br><br><b>������� �� ��������� ������:</b><br>';
  }
  if(($cc==3) or ($cc==4) or ($cc==5) or ($cc==6)) 
  {
  echo '<b>�� ��������� ������:</b><br>';
  }
  ?>

  <UL>

  <?php if(($cc==1) or ($cc==3)) 
  echo "<LI>��������� � ������������� ������� <b>Western Union</b>;<br>
  (��������� ���������� �� ���� ������� ����� �������� �� ����� <b><a href='http://www.westernunion.ru/'>http://www.westernunion.ru/</a></b>)
  </LI>";
  ?>

  <?php if(($cc==1) or ($cc==3)) 
  echo "<LI>��������� � ������������� ������� <b>�����</b><br>
  (��������� ���������� �� ���� ������� ����� �������� �� ����� <b><a href='http://www.leadermt.ru/'>http://www.leadermt.ru/</a></b>)
  </LI>";
  ?>

  <?php if(($cc==1) or ($cc==3))
  echo "<LI>��������� � ������������� ������� <b>Contact</b><br>
  (��������� ���������� �� ���� ������� ����� �������� �� ����� <b><a href='http://www.contact-sys.com/'>http://www.contact-sys.com/</a></b>)
  </LI>";
  ?>

  <?php if(($cc==1) or ($cc==3))
  echo "<LI>��������� � ������������� ������� <b>�����</b><br>
  (��������� ���������� �� ���� ������� ����� �������� �� ����� <b><a href='http://www.migom.com/'>http://www.migom.com/</a></b>)
  </LI>";
  ?>

  <?php if($cc==2)
  { 
  echo "<LI>��������� � <b>�����������</b> (��������� ���� �� ����� ��������)</LI>";
//  echo "<LI>�������� ��������� ����� <b>�������-��������</b> � <b>�������-�����</b></LI>";
//  echo "<LI>�������� ��������� ����� <b>�����-��������</b> � <b>���������� ���� �����</b></LI>";
  echo "<LI>��������� � ������� ������������� ��������� <b>Western Union</b></LI>";
  }
  ?>

  <?php if(($cc==5) or ($cc==6) or ($cc==7)) 
  echo "<LI>��������� � ��������-������� <b>WebMoney</b><br>
  (��������� ���������� �� ���� ������� ����� �������� �� ����� <b><a href='http://www.webmoney.ru/'>http://www.webmoney.ru/</a></b>)
  </LI>";
  ?>

  <?php if($cc==4) 
  echo "<LI>��������� � ��������-������� <b>������-������</b>;<br>
  (��������� ���������� �� ���� ������� ����� �������� �� ����� <b><a href='http://money.yandex.ru/'>http://money.yandex.ru/</a></b>)
  </LI>";
  ?>

  <?php if($cc==2)
  echo "<LI>�������� ��������� (����� ����������� �������� ���������� ����� 3 ����).
  </LI>";
  ?>

  <?php if($cc==3) 
  echo "<LI>��������� ����� ������� ����������� �������� ��������� <b>����� ������</b>;<br>
  (��������� ���������� �� ���� ������� ����� �������� �� ����� <b><a href='http://www.russianpost.ru/portal/ru/home/financial/cybermoney_world'>http://www.russianpost.ru/</a></b>)<br>
  ����� ����������� �������� ���������� ����� 2 ����.
  </LI>";
  ?>

  </LI>
  </UL>
  <br>
  ��� ����������� ��� �������� ��������� �� ������ �� ���������� �� ��� e-mail.


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

  <P><strong>��� ����� ����- ���������������� ���������?</strong><BR>
  ��� ���������, ������� ��������� �������� � ����� ����� ������ ������������ ������ ������ ������������.</P>

  </td></tr>
  </table>

         </td></tr>

            <tr><td  height="3"></td></tr>
            <tr><td>


  <table class=modulegray width=100% border=0 cellspacing=10 cellpadding=3>
  <tr>
  <td width=100% align=left>

  <P><strong>��� ����� �����- ���������������� ������� ���������?</strong><BR>
  ��� ���������, ������� ��������� �������� � ����� ����� ������ ������������ ���������� ������������� � ���������� �����������,
      ������������ � ���� ��������� ������������ ����.</P>


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
