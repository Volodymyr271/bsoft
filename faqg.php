<?php
  include("functions.inc");
  SuppressionCache();
  if (empty($_GET["sp"])) $sp=1;
  else $sp=$_GET["sp"];
  $s=$_GET["s"];
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

<h1>Вопросы - ответы:
  <?php
    switch ($s)
    {
      case 0: echo " общие"; Break;
      case 1: echo " storage"; Break;
      case 2: echo " storagemulti"; Break;
      case 3: echo " huckster"; Break;
      case 4: echo " payoff"; Break;
      case 5: echo " prices"; Break;
      case 6: echo " remark"; Break;
      case 7: echo " о доработке программ"; Break;
    }
  ?>

</h1>

  <table class=module cellpadding=15><tr><td>
  <?php
    switch ($s)
    {
      case 0: ShowFAQ('faq_general',$sp,'faqg.php','s=0'); Break;
      case 1: ShowFAQ('faq_storage',$sp,'faqg.php','s=1'); Break;
      case 2: ShowFAQ('faq_storagemulti',$sp,'faqg.php','s=2'); Break;
      case 3: ShowFAQ('faq_huckster',$sp,'faqg.php','s=3'); Break;
      case 4: ShowFAQ('faq_payoff',$sp,'faqg.php','s=4'); Break;
      case 5: ShowFAQ('faq_prices',$sp,'faqg.php','s=5'); Break;
      case 6: ShowFAQ('faq_remark',$sp,'faqg.php','s=6'); Break;
      case 7: ShowFAQ('faq_revision',$sp,'faqg.php','s=7'); Break;
    }
  ?>
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
