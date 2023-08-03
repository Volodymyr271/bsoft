<?php

function SuppressionCache() {
  //http заголовки - подавление кэша
  header("Expires: Mon, 23 May 1995 02:00:00 GMT");
  header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
}



function OutputHead() {
  echo "<head>\r\n";
  echo "<meta http-equiv='Content-Type' content='text/html; charset=windows-1251'>\r\n";
  echo "<meta name='keywords' content='Babylon Soft, Soft, Free, софт, бесплатный, бесплатно, скачать, бизнес, склад, производство, торговля, учёт, складской, магазин, торговая точка, бухгалтерия, бух, бух., платежка, банк, касса, автоматизация, накладные, заказ по прайсам, Storage, StorageMulti, Prices, PayOff, Huckster, Remark, врач, регистрационная карта, учет пациентов, обследования, заключения, услуга, услуги, ВебЧек'>\r\n";
  echo "<meta name='description' content='Babylon Soft - бесплатные и коммерческие программы для бизнеса'>\r\n";
  echo "<title>Babylon Soft</title>\r\n";
  echo "<link rel='SHORTCUT ICON' href='./images/bsicon.ico'>\r\n";
  echo "<link rel='stylesheet' type='text/css' href='stylesheet.css'>\r\n";
  echo "</head>\r\n";
}



function ShowPageHead($WidthRightColumn) {
//  echo "<script language='JavaScript' type='text/JavaScript' src='snow.js'></script>\r\n";

//  echo "<table width='100%' cellspacing='0' cellpadding='0' align='center' border='0'>";
//  echo "<tr>";
//  echo "  <td><img src='dot00000.gif' width='1' height='1'><br></td>";
//  echo "  <td valign='top' width='1011'>";
//  echo "    <table  BGCOLOR='Silver' width='100%' height='100%' cellspacing='0' cellpadding='0' border='0' >";
//  echo "<!-- header line -->";
  echo "    <tr>";
  echo "       <td valign='top'></td>";
  echo "       <td colspan='3' height='3' valign='top'></td>";
  echo "    </tr>";
  echo "    <tr>";
  echo "       <td width='150' valign='top'></td>";
  echo "       <td height=80 valign='top' background='./images/logorep.jpg'>";
  echo "          <img align=left width=33 height=80 src='./images/logorep.jpg'>";
//  echo "          <img align=left width=72 height=80 src='./images/logotype_winter.gif'>";
  echo "          <img align=left width=72 height=80 src='./images/logotype.jpg'>";
  echo "          <img align=left width=30 height=80 src='./images/logorep.jpg'>";
  echo "          <img align=left width=340 height=80 src='./images/logo.jpg'>";
  echo "        </td>";
  echo "       <td width='10' valign='top'></td>";
  echo "    </tr>";
  echo "    <tr><td height='3'></td></tr>";
  echo "    <tr>";
  echo "      <td width='150' valign='top'></td>";
  echo "      <td height=25 valign='top'>";
  echo "        <table width='100%' height='100%' cellspacing='0' cellpadding='0' border='0'>";
  echo "        <tr>";
  echo "          <th class='menu' ALIGN='left'>";
  echo "            <A class=blacklink href='index.php'><b>Главная</b></A> | <A class=blacklink href='projects.php'><b>Программы</b></A> |";
//  echo "            <A class=blacklink href='http://www.bsoft.net.ua/forum/'><b>Форум</b></A> |";
//   echo "            <A class=blacklink href='videolessons.php'><b>Видеоуроки</b></A> |";
  echo "            <A class=blacklink href='prices.php'><b>Цены</b></A> |";
  echo "            <A class=blacklink href='faqg.php?s=0'><b>Вопросы</b></A> |";
   echo "            <A class=blacklink href='contacts.php'><b>Контакты</b></A>";
  echo "          </th>";
  echo "        </tr>";
  echo "        </table>";
  echo "       </td>";
  echo "       <td width=".$WidthRightColumn." valign='top'></td>";
  echo "    </tr>";
  echo "    <tr><td height='3'></td></tr>";
//  echo "    </table>";
//  echo "  </td>";
//  echo "  <td><img src='dot00000.gif' width='1' height='1'><br></td>";
//  echo "</tr>";
//  echo "</table>";
}



function ShowLine($height,$bgColor,$width) {
//  echo "<TABLE height=1 cellSpacing=0 cellPadding=0 width='100%' bgColor=#000000 border=0>";
  echo "<TABLE height=".$height." cellSpacing=0 cellPadding=0 width='".$width."%' bgColor=".$bgColor." border=0>";
  echo "<TBODY><TR><TD></TD></TR></TBODY></TABLE>";
}



function ShowMenu() {
  echo "<table class=modulegray cellpadding=10><tr><td>";
  echo "<b><center>Программы</center></b>";
  ShowLine(1,0,100);
  echo "<br><a class=blacklink href=projects.php#1><b>Storage - Украина</b> - сетевой Склад, Производство, Торговля, Услуги</a><br>";
  echo "<br><a class=blacklink href=projects.php#2><b>Storage</b> - сетевой Склад, Производство, Торговля, Услуги</a><br>";
//  echo "<br><a class=blacklink href=projects.php#2><b>StorageMulti</b> - сетевой Склад, Производство, Торговля, Услуги</a><br>";
  echo "<br><a class=blacklink href=projects.php#4><b>Huckster</b> - Магазин, Торговая точка</a><br>";
  echo "<br><a class=blacklink href=projects.php#5><b>Kassa</b> - Рабочее место кассира</a><br>";
  echo "<br><a class=blacklink href=projects.php#6><b>PayOff</b> - Платежка, Банк, Касса</a><br>";
  echo "<br><a class=blacklink href=projects.php#7><b>Prices</b> - сетевой Заказ по прайс-листам поставщиков</a><br>";
  echo "<br><a class=blacklink href=projects.php#8><b>Remark</b> - сетевая Записная книжка врача</a><br><br>";
  echo "</td></tr></table>";
//  echo "<table class=modulegray cellpadding=10><tr><td>";
//  echo "<b><center>Шаг за шагом...</center></b>";
//  ShowLine(1,0,100);
//  echo "<br><b><a href=step.php?proj=PayOff&chap=2&step=1>Первая платежка</a></b><br>";
//  echo "<br><b><a href=step.php?proj=PayOff&chap=3&step=1>Один расчетный счет</a></b><br>";
//  echo "<br><b><a href=step.php?proj=PayOff&chap=5&step=1>Несколько расчетных счетов</a></b><br>";
//  echo "<br><img src='./images/new.gif'><br><b><a href=step.php?proj=PayOff&chap=4&step=1>Несколько расчетных счетов</a></b><br>";
//  echo "</td></tr></table>";
}



function ShowFooter($WidthRightColumn) {
//  echo "<table width='100%' cellspacing='0' cellpadding='0' align='center' border='0'>";
//  echo "<tr>";
//  echo "  <td><img src='dot00000.gif' width='1' height='1'><br></td>";
//  echo "  <td valign='top' width='1011'>";
//  echo "    <table BGCOLOR='Silver' width='100%' height='100%' cellspacing='0' cellpadding='0' border='0' >";
  echo "    <tr><td height='3'></td></tr>";
  echo "    <tr>";
  echo "      <td width='150' valign='top'></td>";
  echo "      <td height='15' valign='top'>";
  echo "         <table width='90%'><tr><td ALIGN='right'><small>&copy; 1997-2022 Babylon Soft</small></td></tr></table>";
  echo "      </td>";
  echo "      <td width=".$WidthRightColumn." valign='top'></td>";
  echo "    </tr>";
  echo "    <tr><td height='3'></td></tr>";
  echo "<!-- footer line -->";
  echo "      <tr>";
  echo "	<td valign='top'></td>";
  echo "	<td colspan='3' height='3' valign='top'></td>";
  echo "      </tr>";
//  echo "    </table>";
//  echo "  </td>";
//  echo "  <td><img src='dot00000.gif' width='1' height='1'><br></td>";
//  echo "</tr>";
//  echo "</table>";
}



function ShowQuickNews() {
  echo "<table class=modulegray cellpadding=10>";
  echo "<tr><td>";
  echo "<b><center>Новости</center></b>";
  ShowLine(1,0,100);
  $fp = fopen("./db/news.txt","r");
  $header=1;
  $counter=0;
  while(!feof($fp))
  {
    $str = fgets($fp,65535);

    if($str!="===---===---===---===\r\n")
    {
      if ($header==1)
      {
        $strqnews=$str;
        $header=0;
      }
      else
      {
        if ($header==0 && trim($strqnews)!="")
        {
          $counter++;
          echo "<br><a class=blacklink href=news.php#".$counter.">";
          echo "<b>".$str."</b>";
          echo "<br>";
          echo $strqnews;
          echo "</a><br>";
          $strqnews="";
        }
      }
    }
    else
    {
      $header=1;
      $strqnews="";
    }
    if($counter==3)
      break;
  }
  fclose($fp);
  echo "<br>";
  ShowLine(1,0,100);
  echo "<a class=blacklink href=news.php>Архив новостей...</a>";
  echo "<table width='100%' cellspacing='5' cellpadding='0' border='0'><tr></tr><tr><td><img src='images/go.gif' border=10></td><td><a class=blacklink href=subscribe.php>Подписаться<br>на рассылку новостей...</a></td></tr></table>";
  echo "</td></tr></table>";
}



function ShowAllNews($SrcPage) {
  $fp = fopen("./db/news.txt","r");
  $header=1;
  $counter=0;
  $PageCounter=1;
  $MaxRecords=3;

  while(!feof($fp))
  {
    $str = fgets($fp,65535);
    if($str=="===---===---===---===\r\n")
    {
      $counter++;
      if ($counter>$MaxRecords)
      {
        $PageCounter++;
        $counter=1;
      }
    }
  }

  echo "Страницы:&nbsp;&nbsp;&nbsp;&nbsp;";
  ShowRowNumberPages($SrcPage,$PageCounter,'news.php');


  if (fseek($fp,0,SEEK_SET)==0)
  {
    
    $counter=0;

    while(!feof($fp))
    {
      $str = fgets($fp,65535);

      if($str!="===---===---===---===\r\n")
      {
        if ($header==1 && trim($str)!="")
        { 
          $counter++;
          if (($counter>(($SrcPage-1)*$MaxRecords)) && ($counter<=($SrcPage*$MaxRecords)))
          {
            echo "<tr><td class=tdhead width=12% align=left bgcolor='#e3e3e3'>&nbsp;".fgets($fp,65535)."</td>\r\n";
            echo "<a name='".$counter."'><td class=tdhead align=left bgcolor='#e3e3e3'>&nbsp;".$str."</td></a>\r\n";
            echo "<tr><td colspan=2>\r\n";
          }
          $header=0;
          
        }
        else
        {
          if (($counter>(($SrcPage-1)*$MaxRecords)) && ($counter<=($SrcPage*$MaxRecords)))
            echo $str;
        }
      }
      else
      {
        $header=1;
      } 
    }

  }

  fclose($fp);

  echo "</br></br>";
  ShowLine(3,'FFFFFF',100);
  ShowLine(1,0,90);
  ShowLine(3,'FFFFFF',100);
  echo "Страницы:&nbsp;&nbsp;&nbsp;&nbsp;";
  ShowRowNumberPages($SrcPage,$PageCounter,'news.php');

}


function ShowRowNumberPages($SrcPage,$PageCounter,$SrcURL) 
{
  for ($a = 1; $a <= $PageCounter; $a++)
  {
    if ($PageCounter>12)
    {
      if (($SrcPage<7) or ($SrcPage>$PageCounter-6))
      {
        switch ($a)
        {
          case 1:
          case 2:
          case 3:
          case 4:
          case 5:
          case 6:
          case 7:
          case $PageCounter-5:
          case $PageCounter-4:
          case $PageCounter-3:
          case $PageCounter-2:
          case $PageCounter-1:
          case $PageCounter:
            if ($a==$SrcPage) echo "<B><FONT SIZE='+1'>".$a."</FONT></B>";
            else echo "<a class=blacklink href=".$SrcURL."?sp=".$a.">".$a."</a>";
            break;
          case 8:
          case $PageCounter-6:
             if ((($a)==($PageCounter-6)) or ($a==($PageCounter-6))) echo "<a class=blacklink href=".$SrcURL."?sp=".$a.">".$a."</a>";
             else echo "&nbsp;&nbsp;...&nbsp;&nbsp;"; 
             break;
        }    
        switch ($a)
        {
          case 1:
          case 2:
          case 3:
          case 4:
          case 5:
          case 6:
          case $PageCounter-6:
          case $PageCounter-5:
          case $PageCounter-4:
          case $PageCounter-3:
          case $PageCounter-2:
          case $PageCounter-1:
            echo " | ";
            break;
          case 7:
             if (($a+1)==($PageCounter-6)) echo " | "; 
             break;
        }
      }
      else
      {
        switch ($a)
        {
          case 1:
          case 2:
          case 3:
          case $PageCounter-2:
          case $PageCounter-1:
          case $PageCounter:
            if ($a==$SrcPage) echo "<B><FONT SIZE='+1'>".$a."</FONT></B>";
            else echo "<a class=blacklink href=".$SrcURL."?sp=".$a.">".$a."</a>";
            break;
          case 4:
          case $PageCounter-3: echo "&nbsp;&nbsp;...&nbsp;&nbsp;"; break;
        }    
        switch ($a)
        {
          case 1:
          case 2:
          case $PageCounter-2:
          case $PageCounter-1:
            echo " | "; break;
        }
        switch ($a)
        {
          case $SrcPage-2:
          case $SrcPage-1:
          case $SrcPage:
          case $SrcPage+1:
          case $SrcPage+2:
            if ($a==$SrcPage) echo "<B><FONT SIZE='+1'>".$a."</FONT></B>";
            else echo "<a class=blacklink href=".$SrcURL."?sp=".$a.">".$a."</a>";
            break;
        }
        switch ($a)
        {
          case $SrcPage-2:
          case $SrcPage-1:
          case $SrcPage:
          case $SrcPage+1:
            echo " | "; break;
        }    
      }

    }
    else
    {
      if ($a==$SrcPage) echo "<B><FONT SIZE='+1'>".$a."</FONT></B>";
      else echo "<a class=blacklink href=".$SrcURL."?sp=".$a.">".$a."</a>";
      if ($a!=$PageCounter) echo " | ";
    }
  } 
}



function ShowFAQ($FAQDB,$SrcPage,$SrcURL,$ParamURL) {
  $fp = fopen("./db/".$FAQDB.".txt","r");
  $header=1;
  $counter=0;
  $PageCounter=1;
  $MaxRecords=3;

  while(!feof($fp))
  {
    $str = fgets($fp,65535);
    if($str=="===---===---===---===\r\n")
    {
      $counter++;
      if ($counter>$MaxRecords)
      {
        $PageCounter++;
        $counter=1;
      }
    }
  }

  echo "Страницы:&nbsp;&nbsp;&nbsp;&nbsp;";
  ShowRowNumberPagesVer2($SrcPage,$PageCounter,$SrcURL,$ParamURL);
  ShowLine(3,'FFFFFF',100);
  ShowLine(1,0,90);
  ShowLine(3,'FFFFFF',100);
  echo "</br>";


  if (fseek($fp,0,SEEK_SET)==0)
  {
    $counter=0;
    while(!feof($fp))
    {
      $str = fgets($fp,65535);

      if($str!="===---===---===---===\r\n")
      {
        if ($header==1 && trim($str)!="")
        { 
          $counter++;
          $header=0;
          
        }
        if (($counter>(($SrcPage-1)*$MaxRecords)) && ($counter<=($SrcPage*$MaxRecords)))
          echo $str."<BR>";
      }
      else
      {
        $header=1;
      } 
    }
  }

  fclose($fp);

  echo "</br></br>";
  ShowLine(3,'FFFFFF',100);
  ShowLine(1,0,90);
  ShowLine(3,'FFFFFF',100);
  echo "Страницы:&nbsp;&nbsp;&nbsp;&nbsp;";
  ShowRowNumberPagesVer2($SrcPage,$PageCounter,$SrcURL,$ParamURL);

}


function ShowRowNumberPagesVer2($SrcPage,$PageCounter,$SrcURL,$ParamURL) 
{
  for ($a = 1; $a <= $PageCounter; $a++)
  {
    if ($PageCounter>12)
    {
      if (($SrcPage<7) or ($SrcPage>$PageCounter-6))
      {
        switch ($a)
        {
          case 1:
          case 2:
          case 3:
          case 4:
          case 5:
          case 6:
          case 7:
          case $PageCounter-5:
          case $PageCounter-4:
          case $PageCounter-3:
          case $PageCounter-2:
          case $PageCounter-1:
          case $PageCounter:
            if ($a==$SrcPage) echo "<B><FONT SIZE='+1'>".$a."</FONT></B>";
            else echo "<a class=blacklink href=".$SrcURL."?".$ParamURL."&sp=".$a.">".$a."</a>";
            break;
          case 8:
          case $PageCounter-6:
             if ((($a)==($PageCounter-6)) or ($a==($PageCounter-6))) echo "<a class=blacklink href=".$SrcURL."?".$ParamURL."&sp=".$a.">".$a."</a>";
             else echo "&nbsp;&nbsp;...&nbsp;&nbsp;"; 
             break;
        }    
        switch ($a)
        {
          case 1:
          case 2:
          case 3:
          case 4:
          case 5:
          case 6:
          case $PageCounter-6:
          case $PageCounter-5:
          case $PageCounter-4:
          case $PageCounter-3:
          case $PageCounter-2:
          case $PageCounter-1:
            echo " | ";
            break;
          case 7:
             if (($a+1)==($PageCounter-6)) echo " | "; 
             break;
        }
      }
      else
      {
        switch ($a)
        {
          case 1:
          case 2:
          case 3:
          case $PageCounter-2:
          case $PageCounter-1:
          case $PageCounter:
            if ($a==$SrcPage) echo "<B><FONT SIZE='+1'>".$a."</FONT></B>";
            else echo "<a class=blacklink href=".$SrcURL."?".$ParamURL."&sp=".$a.">".$a."</a>";
            break;
          case 4:
          case $PageCounter-3: echo "&nbsp;&nbsp;...&nbsp;&nbsp;"; break;
        }    
        switch ($a)
        {
          case 1:
          case 2:
          case $PageCounter-2:
          case $PageCounter-1:
            echo " | "; break;
        }
        switch ($a)
        {
          case $SrcPage-2:
          case $SrcPage-1:
          case $SrcPage:
          case $SrcPage+1:
          case $SrcPage+2:
            if ($a==$SrcPage) echo "<B><FONT SIZE='+1'>".$a."</FONT></B>";
            else echo "<a class=blacklink href=".$SrcURL."?".$ParamURL."&sp=".$a.">".$a."</a>";
            break;
        }
        switch ($a)
        {
          case $SrcPage-2:
          case $SrcPage-1:
          case $SrcPage:
          case $SrcPage+1:
            echo " | "; break;
        }    
      }

    }
    else
    {
      if ($a==$SrcPage) echo "<B><FONT SIZE='+1'>".$a."</FONT></B>";
      else echo "<a class=blacklink href=".$SrcURL."?".$ParamURL."&sp=".$a.">".$a."</a>";
      if ($a!=$PageCounter) echo " | ";
    }
  } 
}


function ShowShortDescriptionProjects() {
  $fp = fopen("./db/projects/shortdescription.txt","r");
  $counter=0;
  $counterprogi=0;
  $proga="";
  $runame="";
  $version="";
  while(!feof($fp))
  {
    $str = fgets($fp,65535);
    $counter++;

    if($str!="===---===---===---===\r\n")
    {
      if($counter==1)
      {
        $runame=trim($str);
      }
      if($counter==2)
      {
        $proga=trim($str);
      }
      if($counter==3)
      {
        $counterprogi++;
        $version=trim($str);
        echo "<table class=module cellpadding=5 style='background:white'>\r\n";
        echo "<tr><a name='".$counterprogi."'></a><th COLSPAN=2 height=25px class=tdhead align=center bgcolor='#e3e3e3' style='background:#e3e3e3 url(./images/gr3.gif); background-repeat:repeat-x;'>";
        echo $proga." ".$version." - ".$runame;
        echo "</th></tr>\r\n";
        echo "<tr><td VALIGN=top><img align=left src='./images/".strtolower($proga).".jpg'>\r\n";
        echo "</td><td>\r\n";
      }
      if($counter>3)
        echo $str."\r\n";
    }
    else
    {
      echo "</td></tr>\r\n";
      echo "<tr>";
      echo "<td COLSPAN=2 align=right>\r\n";

      if (strtolower($proga)=='prices' or strtolower($proga)=='storage' or strtolower($proga)=='huckster' or strtolower($proga)=='payoff' or strtolower($proga)=='remark' or strtolower($proga)=='kassa')
      {
//        echo "<a class=redlink href=./detailproject.php?fld=introduction/potential.htm&cs=1&proj=".$proga."&ver=".$version.">Подробнее</a>\r\n";
        echo "&nbsp;&nbsp;&nbsp;<a class=redlink href=./download.php?fld=Projects&proj=".$proga."&ver=".$version.">Скачать</a>\r\n";
      }
      else if (strtolower($proga)=='storageua')
      {
//        echo "<a class=redlink href=./detailproject.php?fld=howbegin/PRRO_WEBCheck.html&cs=1&proj=".$proga."&ver=".$version.">Подробнее</a>\r\n";
        echo "&nbsp;&nbsp;&nbsp;<a class=redlink href=./download.php?fld=Projects&proj=".$proga."&ver=".$version.">Скачать</a>\r\n";
      }
      else if (strtolower($proga)=='uzd')
      {
//        echo "<a class=redlink href=./detailproject.php?fld=introduction/potential.htm&cs=1&proj=".$proga."&ver=".$version.">";
        echo "&nbsp;&nbsp;&nbsp;<a class=redlink href=./download.php?fld=Projects&proj=".$proga."&ver=".$version.">Скачать</a>\r\n";
      }
//      else if (strtolower($proga)=='storagemulti')
//      {
//        echo "<a class=redlink href=./detailproject.php?fld=introduction/potential.htm&cs=1&proj=".$proga."&ver=".$version.">Подробнее</a>\r\n";
//      }
//      else
//      {
//        echo "<a class=redlink href=./aboutproject.php?fld=Projects&proj=".$proga."&ver=".$version.">О программе</a>\r\n";
//        echo "&nbsp;&nbsp;&nbsp;<a class=redlink href=./historychange.php?fld=Projects&proj=".$proga."&ver=".$version.">История изменений</a>\r\n";
//      }
//      if (strtolower($proga)<>'storagemulti')
//      {
//        echo "&nbsp;&nbsp;<a class=redlink href=./registration.php?fld=Projects&proj=".$proga."&ver=".$version.">Зарегистрировать</a>";
//      }

      echo "</td></tr></table>";
      $counter=0;
    }
  }
  fclose($fp);
}



function ShowShortDescriptionProjectsUnderOrder() {
  $fp = fopen("./db/gallery/shortdescription.txt","r");
  $counter=0;
  $counterprogi=0;
  $proga="";
  $runame="";
  while(!feof($fp))
  {
    $str = fgets($fp,65535);
    $counter++;

    if($str!="===---===---===---===\r\n")
    {
      if($counter==1)
      {
        $proga=trim($str);
      }
      if($counter==2)
      {
        $runame=trim($str);
        $counterprogi++;
        $version=trim($str);
        echo "<table class=module cellpadding=5 style='background:white'>";
        echo "\r\n<tr><a name='".$counterprogi."'></a><td height=25px class=tdhead align=center bgcolor='#e3e3e3' style='background:#e3e3e3 url(./images/gr3.gif); background-repeat:repeat-x;'>";
        echo $runame;
        echo "</td></tr>\r\n";
        echo "<tr><td>\r\n<img align=left HSPACE=10 src='./images/gl".strtolower($proga).".jpg'>\r\n";
      }
      if($counter>2)
        echo $str."\r\n";
    }
    else
    {
      echo "\r\n";
      echo "<tr>";
//      echo "<td colspan=2 align=right>\r\n";
//      echo "<a class=redlink href=./aboutproject.php?fld=Projects&proj=".$proga."&ver=".$version.">О программе</a>\r\n";
//      echo "&nbsp;&nbsp;&nbsp;<a class=redlink href=./historychange.php?fld=Projects&proj=".$proga."&ver=".$version.">История изменений</a>\r\n";
//      echo "&nbsp;&nbsp;&nbsp;<a class=redlink href=./download.php?fld=Projects&proj=".$proga."&ver=".$version.">Скачать</a>\r\n";
//      echo "&nbsp;&nbsp;<a class=redlink href=./registration.php?fld=Projects&proj=".$proga."&ver=".$version.">Зарегистрировать</a>";
//      echo "</tr></td></table>";
      $counter=0;
    }
  }
  fclose($fp);
}



function ShowShortDescriptionOneProject($proj) {
  $fp = fopen("./db/projects/shortdescription.txt","r");
  $counter=0;
  $proga="";
  $runame="";
  $version="";
  while(!feof($fp))
  {
    $str = fgets($fp,65535);
    $counter++;

    if($str!="===---===---===---===\r\n")
    {
      if($counter==1)
      {
        $runame=trim($str);
      }
      if($counter==2)
      {
        $proga=trim($str);
      }
      if($counter==3 and $proga==$proj)
      {
        $version=trim($str);
        echo "<table class=module style='background:white'>";	
//        echo "\r\n<tr><td height=25px class=tdhead align=center bgcolor='#e3e3e3' style='background:#e3e3e3 url(./images/gr3.gif); background-repeat:repeat-x;'>";
//        echo $proga." ".$version." - ".$runame;
//        echo "</td></tr>\r\n";
//        echo "<tr><td>\r\n<img align=left src='./images/".strtolower($proga).".jpg'>\r\n";
      }
//      if($counter>3 and $proga==$proj)
//        echo $str."<br>\r\n";
    }
    else
    {
      if($proga==$proj)
      {
        echo "\r\n";
        echo "<tr>";
        echo "<td colspan=2 align=right>\r\n";
        echo "&nbsp;&nbsp;&nbsp;<a class=redlink href=./historychange.php?fld=Projects&proj=".$proga.">История изменений</a>\r\n";
        echo "&nbsp;&nbsp;&nbsp;<a class=redlink href=./download.php?fld=Projects&proj=".$proga.">Скачать</a>\r\n";
        echo "&nbsp;&nbsp;<a class=redlink href=./registration.php?fld=Projects&proj=".$proga.">Зарегистрировать</a>";
        echo "</tr></td></table>";
      }
      $counter=0;
    }
  }
  fclose($fp);
}



function ShowProjectInfo($fld, $proj, $typeinfo) {
  $fp = fopen("./db/".strtolower($fld)."/".strtolower($proj)."/".strtolower($proj).strtolower($typeinfo).".txt","r");
  while(!feof($fp))
  {
    $str = fgets($fp,65535);
    echo $str;
  }
  fclose($fp);
}



function ShowBuck() {
  echo "<table class=module cellpadding=5>";
  echo "<tr>";
  echo "<td align=left valign=center><a class=redlink href=javascript:history.back()>Назад</a></td>";
  echo "</tr>";
  echo "</table>";
  echo "<TBODY><TR><TD></TD></TR></TBODY></TABLE>";
}


function ShowProjectHistory($fld, $proj) {
  $fp = fopen("./db/".strtolower($fld)."/".strtolower($proj)."/".strtolower($proj)."history.txt","r");
  $header=1;
  while(!feof($fp))
  {
    $str = fgets($fp,65535);

    if($str!="===---===---===---===\r\n")
    {
      if ($header==1 && trim($str)!="")
      { 
        echo "<tr><td class=tdhead width=12% align=left bgcolor='#e3e3e3'>&nbsp;".$str."</td>\r\n";
        echo "<td class=tdhead align=left bgcolor='#e3e3e3'>&nbsp;".fgets($fp,65535)."</td>\r\n";
        echo "<tr><td colspan=2>\r\n";
        $header=0;
      }
      else
      {
        echo $str;
      }
    }
    else
    {
      echo "</td><tr>\r\n";
      $header=1;
    } 
  }
  fclose($fp);
}


function ShowProgramInformer($proj) {
  echo "<table class=modulegray cellpadding=10>";
  echo "<tr>";
  echo "<td><center><b>Рейтинг</b></center>";
  ShowLine(1,0,100);
  echo "<br>";

  switch ($proj)
  {
    case 'StorageMulti':
//      echo "<a href='http://soft.mail.ru/program_informer.php?grp=56353'><center><img src='http://soft.mail.ru/informers/informer_big.php?cid=56353' alt='Просмотры и закачки программы на SOFT@Mail.Ru' width=88 height=88 border=0></center></a>";
//      ShowLine(3,'e3e3e3',100);
      echo "<center><b>freesoft.ru</b><script src=http://freesoft.ru/res/inf.php?cp=default&id=674861></script></center>";
      ShowLine(3,'e3e3e3',100);
      echo "<center><SCRIPT type='text/javascript' src='http://soft.softodrom.ru/scr/informer.php?id=7393'></SCRIPT></center>";
//      echo "<a href=http://www.soft32.ru><center><img border=0 width=88 height=31 alt='Soft32.ru' src='http://www.soft32.ru/cgi-bin/informer.cgi?id=2550'></center></a>";
      ShowLine(3,'e3e3e3',100);
      echo "<center><a href='http://www.izone.ru/business/work/storagemulti.htm'><img border='0' src='http://www.izone.ru/imagesawards/award403.gif' width='106' height='59' alt='Huckster в софт-каталоге IZone.ru'></a></center>";
      break;

    case 'Storage':
    case 'StorageUA':
//      echo "<a href='http://soft.mail.ru/program_informer.php?grp=30457'><center><img src='http://soft.mail.ru/informers/informer_big.php?cid=30457' alt='Просмотры и закачки программы на SOFT@Mail.Ru' width=88 height=88 border=0></center></a>";
//      ShowLine(3,'e3e3e3',100);
      echo "<center><b>freesoft.ru</b><script src=http://freesoft.ru/res/inf.php?cp=default&id=672343></script></center>";
//      ShowLine(3,'e3e3e3',100);
//      echo "<a href=http://www.soft32.ru><center><img border=0 width=88 height=31 alt='Soft32.ru' src='http://www.soft32.ru/cgi-bin/informer.cgi?id=1938'></center></a>";
      ShowLine(3,'e3e3e3',100);
      echo "<center><a href='http://www.izone.ru/business/work/storage.htm'><img border='0' src='http://www.izone.ru/imagesawards/award403.gif' width='106' height='59' alt='Huckster в софт-каталоге IZone.ru'></a></center>";
      break;

    case 'Huckster':
//      echo "<a href='http://soft.mail.ru/program_informer.php?grp=30455'><center><img src='http://soft.mail.ru/informers/informer_big.php?cid=30455' alt='Просмотры и закачки программы на SOFT@Mail.Ru' width=88 height=88 border=0></center></a>";
//      ShowLine(3,'e3e3e3',100);
      echo "<center><b>freesoft.ru</b><script src=http://freesoft.ru/res/inf.php?cp=default&id=669414></script></center>";
//      ShowLine(3,'e3e3e3',100);
//      echo "<a href=http://www.soft32.ru><center><img border=0 width=88 height=31 alt='Soft32.ru' src='http://www.soft32.ru/cgi-bin/informer.cgi?id=1870'></center></a>";
      ShowLine(3,'e3e3e3',100);
      echo "<center><a href='http://www.izone.ru/business/work/huckster.htm'><img border='0' src='http://www.izone.ru/imagesawards/award403.gif' width='106' height='59' alt='Huckster в софт-каталоге IZone.ru'></a></center>";
      break;

    case 'PayOff':
//      echo "<a href='http://soft.mail.ru/program_informer.php?grp=30454'><center><img src='http://soft.mail.ru/informers/informer_big.php?cid=30454' alt='Просмотры и закачки программы на SOFT@Mail.Ru' width=88 height=88 border=0></center></a>";
//      ShowLine(3,'e3e3e3',100);
      echo "<center><b>freesoft.ru</b><script src=http://freesoft.ru/res/inf.php?cp=default&id=669415></script></center>";
//      ShowLine(3,'e3e3e3',100);
//      echo "<a href=http://www.soft32.ru><center><img border=0 width=88 height=31 alt='Soft32.ru' src='http://www.soft32.ru/cgi-bin/informer.cgi?id=1939'></center></a>";
      ShowLine(3,'e3e3e3',100);
      echo "<center><a href='http://www.izone.ru/business/bookoffice/payoff.htm><img border='0' src='http://www.izone.ru/imagesawards/award403.gif' width='106' height='59' alt='Huckster в софт-каталоге IZone.ru'></a></center>";
      break;

    case 'Prices':
//      echo "<a href='http://soft.mail.ru/program_informer.php?grp=30456'><center><img src='http://soft.mail.ru/informers/informer_big.php?cid=30456' alt='Просмотры и закачки программы на SOFT@Mail.Ru' width=88 height=88 border=0></center></a>";
//      ShowLine(3,'e3e3e3',100);
      echo "<center><b>freesoft.ru</b><script src=http://freesoft.ru/res/inf.php?cp=default&id=669432></script></center>";
//      ShowLine(3,'e3e3e3',100);
//      echo "<a href=http://www.soft32.ru><center><img border=0 width=88 height=31 alt='Soft32.ru' src='http://www.soft32.ru/cgi-bin/informer.cgi?id=1940'></center></a>";
      ShowLine(3,'e3e3e3',100);
      echo "<center><a href='http://www.izone.ru/business/work/prices.htm'><img border='0' src='http://www.izone.ru/imagesawards/award403.gif' width='106' height='59' alt='Prices в софт-каталоге IZone.ru'></a></center>";
      break;

    case 'Remark':
//      echo "<a href='http://soft.mail.ru/program_informer.php?grp=42253'><center><img src='http://soft.mail.ru/informers/informer_big.php?cid=42253' alt='Просмотры и закачки программы на SOFT@Mail.Ru' width=88 height=88 border=0></center></a>";
//      ShowLine(3,'e3e3e3',100);
      echo "<center><b>freesoft.ru</b><script src=http://freesoft.ru/res/inf.php?cp=default&id=672342></script></center>";
//      ShowLine(3,'e3e3e3',100);
//      echo "<a href=http://www.soft32.ru><center><img border=0 width=88 height=31 alt='Soft32.ru' src='http://www.soft32.ru/cgi-bin/informer.cgi?id=2332'></center></a>";
      ShowLine(3,'e3e3e3',100);
      echo "<center><a href='http://www.izone.ru/business/work/remark.htm'><img border='0' src='http://www.izone.ru/imagesawards/award403.gif' width='106' height='59' alt='Huckster в софт-каталоге IZone.ru'></a></center>";
      break;

  }

  echo "<br>";
  ShowLine(1,0,100);
  echo "<a href=rating.php>Все рейтинги...</a>";
  echo "</td></tr></table>";

  switch ($proj)
  {
    case 'PayOff':
      echo "<table class=modulegray cellpadding=10>";
      echo "<tr>";
      echo "<td><center><b>Награды</b></center>";
      ShowLine(1,0,100);
      echo "<br>";
      echo "<a target='_blank' href='./images/payoff_cert_image.gif'><center><img src='./images/remark-choice-week.gif' alt='Знак отличия на SOFT@Mail.Ru'border=0></center></a>";
//      echo "<a href=javascript:newWindow('./images/payoff_cert_image.gif',0,0);><center><img src='./images/remark-choice-week.gif' alt='Знак отличия на SOFT@Mail.Ru'border=0></center></a>";
      ShowLine(3,'e3e3e3',100);
      echo "</td></tr></table>";
      break;

    case 'Remark':
      echo "<table class=modulegray cellpadding=10>";
      echo "<tr>";
      echo "<td><center><b>Награды</b></center>";
      ShowLine(1,0,100);
      echo "<br>";
      echo "<a target='_blank' href='./images/remark_cert_image.gif'><center><img src='./images/remark-choice-week.gif' alt='Знак отличия на SOFT@Mail.Ru'border=0></center></a>";
//      echo "<a href=javascript:newWindow('./images/remark_cert_image.gif',0,0);><center><img src='./images/remark-choice-week.gif' alt='Знак отличия на SOFT@Mail.Ru'border=0></center></a>";
      ShowLine(3,'e3e3e3',100);
      echo "</td></tr></table>";
      break;

  }


}



function ShowProjectReview($fld, $proj) {
  echo "<table class=modulegray width=100% border=0 cellspacing=10 cellpadding=3>\r\n";
  echo "<tr>\r\n";
  echo "<td width=100% align=left>\r\n";
  echo "<table width=100% border=0 cellspacing=0 cellpadding=0>\r\n";
  echo "<td width=20><img src='images/voteq.gif' width=20 height=20 border=0></td>\r\n";
  echo "<td width=5><spacer type=block width=5></td>\r\n";
  echo "<td><b>Опрос пользователей</b></td>\r\n";
  echo "</table>\r\n";

  ShowLine(1,0,100);
  echo "<p>- <b>Чем вас привлекла  наша программа?</b>\r\n";

  $fp = fopen("./db/".strtolower($fld)."/".strtolower($proj)."/".strtolower($proj)."thanattracted.txt","r");
  while(!feof($fp))
  {
    $str = fgets($fp,65535);
    echo "<br>- ".$str."\r\n";
  }
  fclose($fp);

  echo "<br><br>\r\n";

  ShowLine(1,0,100);
  echo "<p>- <b>Для какого вида бизнеса вы намерены применять нашу программу?</b>\r\n";

  $fp = fopen("./db/".strtolower($fld)."/".strtolower($proj)."/".strtolower($proj)."whereused.txt","r");
  while(!feof($fp))
  {
    $str = fgets($fp,65535);
    echo "<br>- ".$str."\r\n";
  }
  fclose($fp);

  echo "</td></tr>\r\n";
  echo "</table>\r\n";
}



function ShowStepDescription($proj, $chap, $step) {

  $fp = fopen("./db/stepbystep/".strtolower($proj)."/chapter".$chap."/chapter.txt","r");
  $str = trim(fgets($fp,65535));
    echo "<h1>".$str."</h1>\r\n";
    echo "</td></tr>\r\n";
    echo "</table>\r\n";
  $strtmp = trim(fgets($fp,65535));
    $PrevProj=strtok($strtmp, ";");
    $PrevChap=strtok(";");
    $PrevStep=strtok(";");
  $strtmp = trim(fgets($fp,65535));
    $NextProj=strtok($strtmp, ";");
    $NextChap=strtok(";");
    $NextStep=strtok(";");
  fclose($fp);

  if ($step>1)
  {
    $PrevProj=$proj;
    $PrevChap=$chap;
    $PrevStep=$step-1;
  }


  $MaxStep=0;
  while(is_dir("./db/stepbystep/".strtolower($proj)."/chapter".$chap."/step".($MaxStep+1)."/"))
  {
    $MaxStep=$MaxStep+1;
  }
  if ($step<$MaxStep)
  {
    $NextProj=$proj;
    $NextChap=$chap;
    $NextStep=$step+1;
  }




  echo "<table class=module style='background:white'>\r\n";
  echo "<tr><td align=center valign=center>\r\n";
  echo "<a class=bluelink href=javascript:history.back()>Назад</a>\r\n";
  if ($NextStep<>0)
    echo " | <a class=bluelink href=step.php?proj=".$NextProj."&chap=".$NextChap."&step=".$NextStep.">Далее</a>\r\n";
  echo "</td></tr>\r\n";
  echo "</table>\r\n";


  $fp = fopen("./db/stepbystep/".strtolower($proj)."/chapter".$chap."/step".$step."/step.txt","r");
  while(!feof($fp))
  {
    $str = fgets($fp,65535);
    echo $str;
  }
  fclose($fp);


  echo "<table class=module style='background:white'>\r\n";
  echo "<tr><td align=center valign=center>\r\n";
  echo "<a class=bluelink href=javascript:history.back()>Назад</a>\r\n";
  if ($NextStep<>0)
    echo " | <a class=bluelink href=step.php?proj=".$NextProj."&chap=".$NextChap."&step=".$NextStep.">Далее</a>\r\n";


}


function ShowProjectDownloadVideo($proj,$id) {
  echo "<UL>\r\n";
  $fp = fopen("./db/projects/".strtolower($proj)."/".strtolower($proj)."downloadvd.txt","r");
  while(!feof($fp))
  {
    $str = fgets($fp,65535);
    if (strlen($id)>0)
    {
      if (substr_count($str,$id)>0)
        echo $str;
    }
    else
      echo $str;
  }
  fclose($fp);
  echo "</UL>\r\n";
}


function ShowProjectHelp($proj,$fld,$ver,$cs) {
  $fp = fopen("./help/".strtolower($proj)."/".$fld,"r");
  $Permit=1;

  echo "<P align=right><a class=a1 href=javascript:history.back()>Назад</a></P>\r\n";


  while(!feof($fp))
  {
    $str = fgets($fp,65535);
    if (stristr($str,'<html>')!==FALSE or 
       stristr($str,'<body>')!==FALSE or 
       stristr($str,'</html>')!==FALSE or
       stristr($str,'</body>')!==FALSE or
       stristr($str,'<body style')!==FALSE)
    {
    }
    elseif (stristr($str,'<head')!==FALSE)
    {
      $Permit=0;
    }
    elseif (stristr($str,'</head')!==FALSE)
    {
      $Permit=1;
    }
    elseif ($Permit==1)
    {
      if (stristr($str,'href=')!==FALSE)
      {
        if (!(stristr($str,'bsoft')!==FALSE) and (!(stristr($str,'yandex.ru')!==FALSE)) and (!(stristr($str,'webchek')!==FALSE)))
        {
          $str=str_ireplace('href="','href="./detailproject.php?proj='.$proj.'&ver='.$ver.'&cs='.$cs.'&fld=',$str);
          $str=str_ireplace("\\","/",$str);
        }
        switch ($proj)
        {
          case 'Kassa':
            if (stristr($str,'ad\bsoft')!==FALSE) $str=''; /* удалить рекламную страничу ad\bsoft.html */
            break;
        }
      }


      if (stristr($str,' src=')!==FALSE)
      {
        switch ($proj)
        {
          case 'Kassa':
            $str=str_ireplace(' src="..',' src="./help/'.strtolower($proj).'/',$str);
            break;
          default:
            $str=str_ireplace(' src="',' src="./help/'.strtolower($proj).'/',$str);
            break;
        }
        $str=str_ireplace("\\","/",$str);
      }
      echo $str;
    } 
  }
  fclose($fp);

  echo "<P align=right><a class=a1 href=javascript:history.back()>Назад</a></P>\r\n";

}


/*function ShowAdditionalProjectMenu($proj,$fld,$ver) {

  echo "<P><a class=a1 href='./detailproject.php?proj=".$proj."&ver=".$ver."&fld=contents.html'>Содержание</a>\r\n";


  echo "&nbsp;&nbsp;&nbsp;\r\n";
  echo "<a class=a1 href='./detailproject.php?proj=".$proj."&ver=".$ver."&fld=introduction/potential.htm'>Возможности</a>\r\n";



  if (strtolower($proj)=='storagemulti') 
  {
    echo "&nbsp;&nbsp;&nbsp;\r\n";
    echo "<a class=a1 href='./detailproject.php?proj=".$proj."&ver=".$ver."&fld=work/setup/request.htm'>Требования</a>\r\n";
  }


  if (strtolower($proj)=='prices' or strtolower($proj)=='storage' or strtolower($proj)=='storageua' or strtolower($proj)=='huckster' or strtolower($proj)=='payoff' or strtolower($proj)=='remark') 
  {
    echo "&nbsp;&nbsp;&nbsp;\r\n";
    echo "<a class=a1 href='./step.php?proj=".$proj."&chap=1&step=1'>Установка</a>\r\n";
  }


  if (strtolower($proj)=='payoff') 
  {
    echo "&nbsp;&nbsp;&nbsp;\r\n";
    echo "<a class=a1 href='./step.php?proj=".$proj."&chap=6&step=1'>Регистрация</a>\r\n";
  }


  if (strtolower($proj)=='storage' or strtolower($proj)=='storageua' or strtolower($proj)=='huckster') 
  {
    echo "&nbsp;&nbsp;&nbsp;\r\n";
    echo "<a class=a1 href='./step.php?proj=".$proj."&chap=7&step=1'>Регистрация</a>\r\n";
  }


  if (strtolower($proj)=='prices') 
  {
    echo "&nbsp;&nbsp;&nbsp;\r\n";
    echo "<a class=a1 href='./step.php?proj=".$proj."&chap=4&step=1'>Регистрация</a>\r\n";
  }


  if (strtolower($proj)=='remark') 
  {
    echo "&nbsp;&nbsp;&nbsp;\r\n";
    echo "<a class=a1 href='./step.php?proj=".$proj."&chap=2&step=1'>Регистрация</a>\r\n";
  }


  if (strtolower($proj)=='payoff') 
  {
    echo "&nbsp;&nbsp;&nbsp;\r\n";
    echo "<a class=a1 href='./step.php?proj=".$proj."&chap=2&step=1'>Шаг за шагом</a>\r\n";
  }


  if (strtolower($proj)=='storage' or strtolower($proj)=='storageua' or strtolower($proj)=='huckster') 
  {
    echo "&nbsp;&nbsp;&nbsp;\r\n";
    echo "<a class=a1 href='./downloadvd.php?proj=".$proj."&id=0'>Видео приложение</a>\r\n";
  }


  echo "&nbsp;&nbsp;&nbsp;\r\n";
  echo "<a class=a1 href='./detailproject.php?proj=".$proj."&ver=".$ver."&fld=appendix/update.htm'>История изменений</a>\r\n";


  echo "</P>\r\n";

//  if (strtolower($proj)=='storage' or strtolower($proj)=='huckster' or strtolower($proj)=='payoff' or strtolower($proj)=='remark') 
//  {
    echo "<P><a class=a1 href='./regfree.php'>Бесплатная регистрация</a>\r\n";
    echo "&nbsp;&nbsp;&nbsp;<a class=a1 href='./regcommercial.php'>Коммерческая регистрация</a>\r\n";
    echo "&nbsp;&nbsp;&nbsp;<a class=a1 href='./proglimitation.php'>Ограничения</a></P>\r\n";
//  }

  if (strtolower($proj)=='storagemulti') 
  {
    echo "<P><a class=a1 href='./licensingworkplace.php'>Лицензирование</a></P>\r\n";
  }


}
*/

function ShowAdditionalProjectMenu($proj,$fld,$ver) {
  echo "<table class=modulegray cellpadding=10><tr><td>";
  echo "<b><center>".$proj."</center></b>";
  ShowLine(1,0,100);

  echo "<br><a class=blacklink href='./detailproject.php?proj=".$proj."&ver=".$ver."&fld=introduction/potential.htm&cs=1'><b>Краткое описание</b></a><br>\r\n";
  echo "<br><a class=blacklink href='./detailproject.php?proj=".$proj."&ver=".$ver."&fld=contents.html&cs=2'><b>Полное описание</b></a><br>\r\n";

//  if (strtolower($proj)=='storagemulti') 
//  {
//    echo "<br><a class=blacklink href='./detailproject.php?proj=".$proj."&ver=".$ver."&fld=work/setup/request.htm&cs=0'><b>Требования</b></a><br>\r\n";
//  }

  echo "<br><a class=blacklink href='./detailproject.php?proj=".$proj."&ver=".$ver."&fld=appendix/update.htm'><b>История изменений</b></a><br>\r\n";
  echo "<br><a class=blacklink href='./regfree.php?proj=".$proj."&ver=".$ver."&cs=1'><b>Бесплатная регистрация</b></a><br>\r\n";
  echo "<br><a class=blacklink href='./regcommercial.php?proj=".$proj."&ver=".$ver."&cs=1'><b>Коммерческая регистрация</b></a><br>\r\n";
  echo "<br><a class=blacklink href='./proglimitation.php?proj=".$proj."&ver=".$ver."&cs=1'><b>Ограничения</b></a><br>\r\n";

  if (strtolower($proj)=='storage' or strtolower($proj)=='storageua') 
  {
    echo "<br><a class=blacklink href='./storage321.php'><b>Версия 3.21</b></a><br>\r\n";
  }

  if (strtolower($proj)=='storage' or strtolower($proj)=='storageua' or strtolower($proj)=='remark' or strtolower($proj)=='prices') 
  {
    echo "<br><a class=blacklink href='./licensingworkplace.php?proj=".$proj."&ver=".$ver."&cs=1'><b>Лицензирование дополнительных рабочих мест</b></a><br>\r\n";
  }

  echo "</td></tr></table>";
}





function ShowAdditionalProjectMenu_StepByStep($proj,$fld,$ver) {
  echo "<table class=modulegray cellpadding=10><tr><td>";
  echo "<b><center>Шаг за шагом</center></b>";
  ShowLine(1,0,100);

  if (strtolower($proj)=='prices' or strtolower($proj)=='storage' or strtolower($proj)=='storageua' or strtolower($proj)=='huckster' or strtolower($proj)=='payoff') 
  {
    echo "<br><a class=blacklink href='./step.php?proj=".$proj."&chap=1&step=1&ver=".$ver."&fld=".$fld."'><b>Установка</b></a><br>\r\n";
  }

  if (strtolower($proj)=='prices' or strtolower($proj)=='remark') 
  {
    echo "<br><a class=blacklink href='./detailproject.php?proj=".$proj."&ver=".$ver."&fld=startup/whatbegin.htm&cs=0'><b>С чего начать...</b></a><br>\r\n";
  }

  if (strtolower($proj)=='remark') 
  {
    echo "<br><a class=blacklink href='./detailproject.php?proj=Remark&ver=&cs=0&fld=work/setup/workmode.htm'><b>Режимы работы</b></a><br>\r\n";
  }

  if (strtolower($proj)=='storagemulti' or strtolower($proj)=='storage' or strtolower($proj)=='storageua' or strtolower($proj)=='huckster') 
  {
    echo "<br><a class=blacklink href='./detailproject.php?proj=".$proj."&ver=".$ver."&fld=howbegin/howbegin.html&cs=0'><b>С чего начать...</b></a><br>\r\n";
  }

  if (strtolower($proj)=='storage' or strtolower($proj)=='storageua')
  {
    echo "<br><a class=blacklink href='./step.php?proj=".$proj."&chap=9&step=1&ver=".$ver."&fld=".$fld."'><b>Производство</b></a><br>\r\n";
    echo "<br><a class=blacklink href='./step.php?proj=".$proj."&chap=8&step=1&ver=".$ver."&fld=".$fld."'><b>Настройка печатных форм</b></a><br>\r\n";
  }

  if (strtolower($proj)=='storage' or strtolower($proj)=='storageua' or strtolower($proj)=='huckster') 
  {
    echo "<br><a class=blacklink href='./step.php?proj=".$proj."&chap=7&step=1&ver=".$ver."&fld=".$fld."'><b>Регистрация</b></a><br>\r\n";
  }


  if (strtolower($proj)=='prices') 
  {
    echo "<br><a class=blacklink href='./step.php?proj=".$proj."&chap=4&step=1&ver=".$ver."&fld=".$fld."'><b>Регистрация</b></a><br>\r\n";
  }

  if (strtolower($proj)=='remark') 
  {
    echo "<br><a class=blacklink href='./detailproject.php?proj=".$proj."&ver=".$ver."&fld=appendix/registration.htm&cs=0'><b>Регистрация</b></a><br>\r\n";
  }

  if (strtolower($proj)=='payoff') 
  {
    echo "<br><a class=blacklink href='./step.php?proj=".$proj."&chap=2&step=1&ver=".$ver."&fld=".$fld."'><b>Первая платежка</b></a><br>\r\n";
    echo "<br><a class=blacklink href='./step.php?proj=".$proj."&chap=3&step=1&ver=".$ver."&fld=".$fld."'><b>Один расчетный счет</b></a><br>\r\n";
    echo "<br><a class=blacklink href='./step.php?proj=".$proj."&chap=4&step=1&ver=".$ver."&fld=".$fld."'><b>Защита расчетного счета</b></a><br>\r\n";
    echo "<br><a class=blacklink href='./step.php?proj=".$proj."&chap=5&step=1&ver=".$ver."&fld=".$fld."'><b>Несколько расчетных счетов</b></a><br>\r\n";
    echo "<br><a class=blacklink href='./step.php?proj=".$proj."&chap=6&step=1&ver=".$ver."&fld=".$fld."'><b>Настройка печатных форм</b></a><br>\r\n";
    echo "<br><a class=blacklink href='./step.php?proj=".$proj."&chap=7&step=1&ver=".$ver."&fld=".$fld."'><b>Регистрация</b></a><br>\r\n";
  }

  if (strtolower($proj)=='storagemulti' or strtolower($proj)=='storage' or strtolower($proj)=='storageua' or strtolower($proj)=='huckster' or strtolower($proj)=='prices') 
  {
//    echo "<br><a class=blacklink href='./downloadvd.php?proj=".$proj."&id=0&cs=1'><b>Видео уроки</b></a><br>\r\n";
    echo "<br><a class=blacklink href='./videolessons.php'><b>Видео уроки</b></a><br>\r\n";
  }

  if (strtolower($proj)=='kassa') 
  {
    echo "<br><a class=blacklink href='./detailproject.php?proj=".$proj."&ver=".$ver."&fld=startup/whatbegin.htm&cs=0'><b>С чего начать...</b></a><br>\r\n";
  }

  echo "</td></tr></table>";
}



function ShowQuickNotice() {
  echo "<table class=modulegray cellpadding=10>";
  echo "<tr><td>";
  echo "<b><center>Объявления !!!</center></b>";
  ShowLine(1,0,100);
  echo "<br>";
  $fp = fopen("./db/notice.txt","r");
  while(!feof($fp))
  {
    $str = fgets($fp,65535);
    if($str!="===---===---===---===\r\n")
    {
      echo $str;
    }
    else
    {
      echo "<br><br>";
      ShowLine(1,0,100);
      echo "<br>";
    }
  }
  fclose($fp);
  echo "</td></tr></table>";
}



function ShowAdditionalProjectMenu_Forum($proj,$fld,$ver) {
  echo "<table class=modulegray cellpadding=10><tr><td>";
  echo "<b><center>Форум</center></b>";
  ShowLine(1,0,100);

  if (strtolower($proj)=='storagemulti')
  {
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/forum/viewforum.php?f=12'><b>Обсуждение программы</b></a><br>\r\n";
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/forum/viewforum.php?f=13'><b>Выдержки из переписки службы поддержки</b></a><br>\r\n";
  }

  if (strtolower($proj)=='storage' or strtolower($proj)=='storageua')
  {
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/forum/viewforum.php?f=9'><b>Обсуждение программы</b></a><br>\r\n";
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/forum/viewforum.php?f=10'><b>Выдержки из переписки службы поддержки</b></a><br>\r\n";
  }

  if (strtolower($proj)=='huckster')
  {
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/forum/viewforum.php?f=2'><b>Обсуждение программы</b></a><br>\r\n";
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/forum/viewforum.php?f=11'><b>Выдержки из переписки службы поддержки</b></a><br>\r\n";
  }

  if (strtolower($proj)=='payoff')
  {
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/forum/viewforum.php?f=3'><b>Обсуждение программы</b></a><br>\r\n";
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/forum/viewforum.php?f=14'><b>Выдержки из переписки службы поддержки</b></a><br>\r\n";
  }

  if (strtolower($proj)=='prices')
  {
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/forum/viewforum.php?f=4'><b>Обсуждение программы</b></a><br>\r\n";
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/forum/viewforum.php?f=15'><b>Выдержки из переписки службы поддержки</b></a><br>\r\n";
  }

  if (strtolower($proj)=='remark')
  {
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/forum/viewforum.php?f=5'><b>Обсуждение программы</b></a><br>\r\n";
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/forum/viewforum.php?f=16'><b>Выдержки из переписки службы поддержки</b></a><br>\r\n";
  }

  echo "</td></tr></table>";
}



function ShowAdditionalProjectMenu_Question($proj) {
  echo "<table class=modulegray cellpadding=10><tr><td>";
  echo "<b><center>Вопрос - ответ</center></b>";
  ShowLine(1,0,100);

  if (strtolower($proj)=='storage' or strtolower($proj)=='storageua')
  {
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/faqg.php?s=0'><b>Общие</b></a><br>\r\n";
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/faqg.php?s=1'><b>По программе</b></a><br>\r\n";
  }

  if (strtolower($proj)=='storagemulti')
  {
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/faqg.php?s=0'><b>Общие</b></a><br>\r\n";
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/faqg.php?s=2'><b>По программе</b></a><br>\r\n";
  }

  if (strtolower($proj)=='huckster')
  {
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/faqg.php?s=0'><b>Общие</b></a><br>\r\n";
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/faqg.php?s=3'><b>По программе</b></a><br>\r\n";
  }

  if (strtolower($proj)=='payoff')
  {
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/faqg.php?s=0'><b>Общие</b></a><br>\r\n";
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/faqg.php?s=4'><b>По программе</b></a><br>\r\n";
  }

  if (strtolower($proj)=='prices')
  {
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/faqg.php?s=0'><b>Общие</b></a><br>\r\n";
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/faqg.php?s=5'><b>По программе</b></a><br>\r\n";
  }

  if (strtolower($proj)=='remark')
  {
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/faqg.php?s=0'><b>Общие</b></a><br>\r\n";
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/faqg.php?s=6'><b>По программе</b></a><br>\r\n";
  }

  if (strtolower($proj)=='kassa')
  {
    echo "<br><a class=blacklink href='http://www.bsoft.net.ua/faqg.php?s=0'><b>Общие</b></a><br>\r\n";
  }

  echo "</td></tr></table>";
}


/*
function ShowSubscribeForm($email) {

  $email=trim($email);

  if (strlen($email)==0)
  {
    echo "<p>Подпишитесь на рассылку новостей нашего сайта<BR>";
    echo "и Вы будете всегда в курсе выхода новых версий наших программ.";
    echo "<p>Для этого укажите ниже свой e-mail и нажмите кнопку <b>Подпишись !!!</b>";
    echo "</p>";
    echo "<form name='subscribe' method='get' action='subscribe.php'>";
    echo "<INPUT TYPE=text NAME=email SIZE=40 MAXLENGTH=100 VALUE='ваш e-mail'>";
    echo "&nbsp;<input type='submit' value='Подпишись !!!'>";
    echo "</form>";
  }
  else
  {
    if (strpos($email,"@")>0 and strpos($email,".")>0)
    {
      $counter=0;
      $fp=fopen("./db/newssubscribe.txt","a+");
      while(!feof($fp))
      {
        $str = trim(fgets($fp,65535));
        if ($str==$email)
        {
          $counter++;
          break;
        }
      }
      if ($counter>0)
      {
        echo "<p>Ваш e-mail</p>";
        echo "<p><b>".$email."</b></p>";
        echo "<p>уже был зарегистрирован раньше!</p>";
        echo "<p>Вы уже подписаны к рассылке новостей нашего сайта!</p>";
      }
      else
      {
        fputs($fp,$email."\r\n");
        echo "<p>Ваш e-mail</p>";
        echo "<p><b>".$email."</b></p>";
        echo "<p>успешно зарегистрирован в базе данных рассылки новостей нашего сайта!</p>";
      }
      fclose($fp);
    }
    else
    {
      echo "<p>Подписаться на рассылку новостей не удалось.<BR>";
      echo "Вы указали неправильный e-mail: <b>".$email."</b><BR>";
      echo "Попробуйте еще раз...";
      echo "<p>Для этого укажите ниже свой e-mail и нажмите кнопку <b>Подпишись !!!</b>";
      echo "</p>";
      echo "<form name='subscribe' method='get' action='subscribe.php'>";
      echo "<INPUT TYPE=text NAME=email SIZE=40 MAXLENGTH=100 VALUE='ваш e-mail'>";
      echo "&nbsp;<input type='submit' value='Подпишись !!!'>";
      echo "</form>";
    }
  }
}
*/

function ShowWhatIsProgrammName($proj) {
  echo "<table class=modulegray cellpadding=10>";
  echo "<tr>";
  echo "<td><center><b>Что означает название программы?</b></center>";
  ShowLine(1,0,100);
  echo "<br>";
  if (strtolower($proj)=='storage' or strtolower($proj)=='storageua')
  {
    echo "<b>Storage</b> (по русски - <b>сторидж</b>) - английское слово. Означает <b>хранение</b>, <b>кладовка</b>. Изначально программа была просто складом, но за прошедшее время она дополнилась модулями для учета услуг, производства и рознично-оптовой торговли.";
  }
  if (strtolower($proj)=='storagemulti')
  {
    echo "<b>StorageMulti</b> (по русски - <b>сторидж-малти</b>) - состоит из двух английских слов Storage и Multi. Storage означает <b>хранение</b>, <b>кладовка</b>. Multi означает <b>много</b> и применено в значении <b>многопользовательский сетевой</b>.";
  }
  if (strtolower($proj)=='huckster')
  {
    echo "<b>Huckster</b> (по русски - <b>хакстер</b>) - американское слово. Означает <b>торговец</b>.";
  }
  if (strtolower($proj)=='payoff')
  {
    echo "<b>PayOff</b> (по русски - <b>пейоф</b>) - сочетание двух английских слов <b>Pay</b> и <b>Off</b>. Означает <b>полностью оплатить</b>.";
  }
  if (strtolower($proj)=='prices')
  {
    echo "<b>Prices</b> (по русски - <b>прайсес</b>) - английское слово. Означает <b>Цены</b>. Название указывает на основное назначение программы - поиск товара для торговли с оптимальной закупочной ценой.";
  }
  if (strtolower($proj)=='remark')
  {
    echo "<b>Remark</b> (по русски - <b>римарк</b>) - английское слово. Означает <b>замечание, пометка</b>. Название указывает на основное назначение программы - регистрация записей.";
  }
  if (strtolower($proj)=='kassa')
  {
    echo "<b>Kassa</b> - название указывает на основное назначение программы - Продажа товара за наличные в торговом зале на рабочем месте кассира.";
  }
  echo "</td></tr></table>";
}


function ShowListVideoLessons() {
  $fp = fopen("./db/projects/listvideolessons.txt","r");
  $counter=0;
  $videocounter=0;
  while(true)
  {
    $str = fgets($fp,65535);
    if (feof($fp)) break;
    $counter++;

    if($str!="===---===---===---===\r\n")
    {
      if($counter==1)
      {
        echo "<table class=module cellpadding=15><tr><td>";
        echo "<P><b>".$str."</b><UL>";
      }
      if($counter>1)
      {
            if (strpos($str,'<VIDEO--')=== false)
            {
               $videocounter++;
               echo "<LI><a class=redlink href=./videolesson.php?cs=".$videocounter.">$str</a></LI>\r\n";
            }
      }
    }
    else
    {
      echo "</UL></P></td></tr>\r\n";
      echo "</table>";
      $counter=0;
    }
  }
  fclose($fp);
}

function ShowVideoLesson($cs) {
  $fp = fopen("./db/projects/listvideolessons.txt","r");
  $counter=0;
  $section="";
  $lessonname="";
  $videocounter=0;
  
  while(true)
  {
    $str = fgets($fp,65535);
    if (feof($fp)) break;
    $counter++;

    if($str!="===---===---===---===\r\n")
    {
      if($counter==1)
      {
        $section=trim($str);
      }
      if($counter>1)
      {
          if (strpos($str,'<VIDEO--')=== false)
          {
             $videocounter++;
          }
          if ($videocounter==$cs)
          {
            $lessonname=$str;

            $str = fgets($fp,65535);
            $str = str_replace('<VIDEO--','',$str);
            $str = str_replace('-->','',$str);
            $str = trim($str);

            echo "<h1>".$section."</h1>";
            echo "<table class=module cellpadding=15>";
            echo "<tr><td>";
            echo "<P align=right><a class=a1 href=javascript:history.back()>Назад</a></P>";
            echo "<h1>".$lessonname."</h1>";
            echo "<h1>видеоурок</h1>";
            echo "<P></P>";
            echo "<P align=center>".$str."</P>";
            echo "</td></tr>";
            echo "</table>";
            break;
          }
      }
    }
    else
    {
      $counter=0;
    }
  }
  fclose($fp);

}

?>