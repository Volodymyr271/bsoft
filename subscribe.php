<?php
  include("functions.inc");
  SuppressionCache();
  if (empty($_GET["email"])) $email="";
  else $email=$_GET["email"];
?>

<html>

<?php  OutputHead(); ?>

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


<h1>�������� ��������</h1>

<p>����������� �� �������� �������� ������ �����<BR>
� �� ������ ������ � ����� ������ ����� ������ ����� ��������.
<p>��� ����� ������� ���� ���� e-mail � ������� ������ <b>OK</b>
</p>

<FORM TARGET=_top ACTION=http://subscribe.ru/member/quick METHOD=GET>
<INPUT TYPE=hidden NAME=action VALUE=quick>
<INPUT TYPE=hidden NAME=src    VALUE="list_comp.soft.biz.bsoft1">
<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=2><TR><TD BGCOLOR=#FCF5E9 ALIGN=center>
<FONT SIZE=-1 color=black>�������� </FONT><A target=_top HREF=http://subscribe.ru/><B><font size=-1 color=blue>Subscribe.Ru</font></B></A>
</TD></TR><TR><TD BGCOLOR=#FFFFFF ALIGN=CENTER VALIGN=middle>
<FONT SIZE=-1 color=black>������� ������� Babylon Soft</FONT><BR>
<FONT SIZE=2>
<INPUT TYPE=hidden NAME=grp VALUE=comp.soft.biz.bsoft1>
<INPUT TYPE=text NAME=email SIZE=60 MAXLEN=100 VALUE="��� e-mail" style="font-size: 9pt">
<INPUT TYPE=submit VALUE="OK" style="font-size: 9pt">
</FONT></TD></TR></TABLE>
</FORM>


<p>&nbsp;</p>
<p>&nbsp;</p>
<IMG align=left SRC="./images/warn.gif" border=0>
<BLOCKQUOTE>
<P>��������!</P>
<P>�������� �������� ������������ � �������������� ������� ��������������� ������ <B>Subscribe.Ru</B>.
����� ������� ������ �� �� �������� �� ���� subscribe.ru. ���� �� �� ���� ����� ���������������� �� ���� �����, �� ��� ���� ����� ������ ��������� �����������.
������ ����� ����� �� ������� �� ������ �������� ������� �� ��������� ���� e-mail, �� � ��������� ������ ����������, ������������������� �� ���� �����.
</P>
</BLOCKQUOTE>

</td></tr>
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
