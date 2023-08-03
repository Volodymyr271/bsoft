<?php
  include("functions.inc");
  SuppressionCache();
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

    <h1>Вопросы - ответы *</h1>



  <table class=module cellpadding=15><tr><td>

<p><strong><a href='faqg.php?s=0'>Общие</a></strong></p>
<p><strong><a href='faqg.php?s=1'>По программе Storage</a></strong></p>
<p><strong><a href='faqg.php?s=2'>По программе StorageMulti</a></strong></p>
<p><strong><a href='faqg.php?s=3'>По программе Huckster</a></strong></p>
<p><strong><a href='faqg.php?s=4'>По программе PayOff</a></strong></p>
<p><strong><a href='faqg.php?s=5'>По программе Prices</a></strong></p>
<p><strong><a href='faqg.php?s=6'>По программе Remark</a></strong></p>
<p><strong><a href='faqg.php?s=7'>О доработке программ</a></strong></p>

       <table cellpadding=5><tr><td>
       * - база данных вопросов и ответов основывается на переписке службы поддержки с пользователями наших программ.
       </td></tr></table>

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
