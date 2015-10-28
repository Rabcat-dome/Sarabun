<!DOCTYPE html>
<html lang="en">
<head>
   <title>Sarabun System </title>

</head>
<body>
    <div id="wrapper1"  style="width: 100%;">
     	<?php if($this->session->userdata('logged_in')["access"]=="u1")
        {$this->load->view('include/menuMain');}
        else{$this->load->view('include/menu');}?>

        <div id="page-wrapper"  style="width: 100%;">
                            <?php $attributes = array('id' => 'myform');
                             echo form_open('mainPage/receive', $attributes);?>
							
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row1">
                    <div class="col-lg-12">
                            <br>
                       
                    </div>
                </div>
                <!-- /.row -->
                    <div class="col-lg-12">
           
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                      
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
								    $now_date =date('Y-m-d', strtotime(now()));
									$date = mdate("%d", strtotime(now()));
									$month_str = mdate("%M", strtotime(now()));
									$year = mdate("%Y", strtotime(now()));
									if($month_str=="Jan"){$month=" มกราคม ";};
									if($month_str=="Feb"){$month=" กุมพาพันธ์ ";};
									if($month_str=="Mar"){$month=" มีนาคม ";};
									if($month_str=="Apr"){$month=" เมษายน ";};
									if($month_str=="May"){$month=" พฤษภาคม ";};
									if($month_str=="Jun"){$month=" มิถุนายน ";};
									if($month_str=="Jul"){$month=" กรกฎาดม ";};
									if($month_str=="Aug"){$month=" สิงหาคม ";};
									if($month_str=="Sep"){$month=" กันยายน ";};
									if($month_str=="Oct"){$month=" ตุลาคม ";};
									if($month_str=="Nov"){$month=" พฤศจิกายน ";};
								    if($month_str=="Dec"){$month=" ธันวาคม ";};
									$year =$year+543;
									//$strMonthCut = Array("ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
									//$strMonthThai=$strMonthCut[$month];

									$now_date = " วันที่ ".$date."".$month." พ.ศ ".$year;
									if(count($bookin)==0)
                                    {
                                        echo "<tr><td colspan='9' align='center'>--no data--</td></tr>";
                                    }
                                    else
                                    {
										
                                        foreach ($bookin as $r) {
                                        echo "<tr>";
                                       echo "</td><td align='left'> ";
            if($r['send']=="N"){echo "<FONT color=blue>(รับ) </FONT>".$this->session->userdata('logged_in')["section"]." ".$r['inid'];}
                                else{echo "<FONT color=blue>(ส่ง) </FONT>".$r['author']."".$r['unit']."".$r['inid'];}
							
					
								echo "&nbsp;ที่:&nbsp; <FONT color=blue>&nbsp;".$r['inid']."</FONT>";
								echo "<br>ที่:&nbsp;<FONT color=blue>&nbsp;".$r['id']."</FONT>";
								echo "<br>ชั้นความลับ:<FONT color=blue>&nbsp;".$r['secret']."</FONT>";
								echo "<br>ชนิดหนังสือ:<FONT color=blue>&nbsp;".$r['bookType']."</FONT>";
								echo "<br>ส่วนราชการ:<FONT color=blue>&nbsp;".$r['author']."</FONT>".$now_date."";
								echo "<br>เรื่อง:<FONT color=blue>&nbsp;".$r['subject']."</FONT>";
							    echo "<br>คำขึ้นต้น:<FONT color=blue>&nbsp;".$r['beginword']."</FONT>";
								echo "<div style='width: 100%;  position: fixed;'></div>";
								
							    echo "</td>";
                                echo "</tr>";}
                                       /// echo "<td align='left'> ".$r['subject']."</td>";
								
							
	
	/*

	<font size="4" face="CordiaUPC" color?#ffff97?><b><FONT 
            color=mediumblue><%=reOrse%> </FONT>
end if
if rs("inid")<> 0 then
inid=rs("inid")
mannual=false
else
inid=rs("mannualID")
mannual=true
end if
bdate=rs("days")
dday=day(cdate(bdate))
dmonth=month(cdate(bdate))
dyear=year(cdate(bdate))+543
Nmonth=Array("มกราคม","กุมภาพันธุ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฏาคม","สิงหาคม","กันยายน","ตุลาคม.","พฤศจิกายน","ธันวาคม")
ddate= dday &" "& Nmonth(dmonth-1)& " พ.ศ."& dyear
dim secret
if rs("secret")<>"ปกติ" then
secret="<FONT face='CordiaUPC' size=3><STRONG><FONT color=red>" & rs("secret") & "</FONT></STRONG>"
else
secret="<FONT face='CordiaUPC' size=3><STRONG><FONT color=blue>" & rs("secret") &"</FONT></STRONG>"
end if

if rs("booKfile")<>"" then
		if rs("secret")<>"ปกติ" and rs("secret")<>"ปกปิด" and session("access")<>"view" then
		book="<A href='logsecret.asp?bookid=" & rs("bookId") &"'target='"& rs("bookId") &"'>" & rs("subject") & "</a>"
		else
		book="<a href='pdf/" & rs("bookfile") &"' target=" &rs("bookID") &">" & rs("subject") & "</a>"
		end if
else 
book=rs("subject")
end if
			
			%>
            <tr> 
              <td align="left" bgcolor="#ffffff" nowrap>
            <P>&nbsp;&nbsp;
              <font size="4" face="CordiaUPC" color?#ffff97?><b><FONT 
            color=mediumblue><%=reOrse%> </FONT><%=bookunitshow%> ที่&nbsp; </b></font>
              &nbsp;&nbsp;<font size="4" face="CordiaUPC"> <FONT 
            color=mediumblue><FONT color=mediumblue face="Times New Roman" 
            size=3><STRONG><%=inid%></STRONG></FONT>&nbsp;</FONT>&nbsp;&nbsp;&nbsp; <br>
              &nbsp;</font>
              <font size="4" face="CordiaUPC" color?#ffff97?><STRONG>ที่ 
            :&nbsp; </STRONG></font>
              <font size="4" face="CordiaUPC"> 
            <FONT color=blue><%=rs("id")%></FONT>&nbsp;&nbsp;&nbsp;&nbsp;<BR>&nbsp;&nbsp; 
            ชั้นความลับ&nbsp;:&nbsp;<%=secret%><BR>&nbsp;&nbsp;<font size="4" face="CordiaUPC" color?#558097?><b> ชนิดหนังสือ</b></font>&nbsp;: 
            <FONT color=mediumblue><%=rs("name")%></FONT>
              </font><FONT face=CordiaUPC 
            size=4>  <br>&nbsp;</FONT>         
              <font size="4" face="CordiaUPC" color?#558097?><b>ส่วนราชการ :&nbsp; </b></font>
              <font size="4" face="CordiaUPC"><FONT color=blue><%=rs("author")%></FONT>&nbsp;&nbsp; วันที่ <%=ddate%><br>
              <font size="4" face="CordiaUPC" color?#558097?><b>&nbsp; เรื่อง : <FONT 
            color=mediumblue><%=book%></FONT><BR>&nbsp;&nbsp;คำขึ้นต้น&nbsp;: <FONT 
            color=mediumblue><%=rs("beginword")%></FONT>  </b></font></font><FONT 
            color=blue >&nbsp; </FONT></P>   
              </td>
            </tr>
           <% if rs("refer")<>0 then %>
            <tr>
            <td align="right"><FONT size="4"  color=blue ><a href="refer.asp?refer=<%=rs("refer")%>"> หนังสือที่เกี่ยวข้อง </A>&nbsp; </FONT>
            </td>
            </tr>
			<% end if %>
		</table>
*/
									
									
									}
										

										
                                    ?>
      
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            <!-- /.container-fluid -->
         <?php echo form_close(); ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



</body>

</html>
