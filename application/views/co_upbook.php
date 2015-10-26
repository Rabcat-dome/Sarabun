<?php
$bookid = $_POST['bookid'];
$des = $_POST['des'];
if (empty($userfile_name)){  
   $b=""  ;
}
else{
    if (empty($userfile_size)){
  	 echo "ขนาดไฟล์ผิดพลาด กรุณาตรวจสอบ";
  	 $b=""  ;
	}
        else{
 	 $dot=".";
 	 $arr=explode($dot,$userfile_name);
  	$a="pdf/Up".$bookid.$user.".".$arr[1];	
      	 copy(stripslashes($userfile),$a); 
 	 $b="Up".$bookid.$user.".".$arr[1]; 
	}
}

echo "<html>";
echo "<head>";

echo "<script language=VBScript>";
echo "Sub window_onLoad()";
			echo "addForm.submit()";
echo "End sub";
echo "</script>";

echo "</head>";
echo "<body>";
echo form_open_multipart('mainPage/do_upload');
echo "<input type=hidden  name=bookid value=".$bookid.">";
echo "<input type=hidden  name=fFname value=".$b.">";
echo "<input type=hidden  name=des value=".$des.">";
echo "</form>";
echo "<br><br><br><br>";
echo"<center>";
echo $bookid;
echo "test";
echo"</center>";
echo "</body>";
echo "</html>";
?>
