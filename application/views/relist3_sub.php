<!DOCTYPE html>
<html lang="en">
<head>
   <title>Sarabun System </title>
 <?php $this->load->view('include/headHTML'); ?>
</head>
<body>
    <div id="wrapper">
        <?php if($this->session->userdata('logged_in')["access"]=="u1")
        {$this->load->view('include/menuMain');}
        else{$this->load->view('include/menu');}?>

                            <?php $attributes = array('id' => 'myform');
                             echo form_open('mainPage/relist3', $attributes);?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                            <br />
                        <ol class="breadcrumb">
                    
                            <li class="active">
                                 <a href="main"><i class="fa fa-fw fa-table"></i> หนังสือที่อยู่ในขั้นระหว่างดำเนินการของ ยก.ทหาร</a>
                            </li> 
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                    <div class="col-lg-12">
           
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th rowspan="2">ที่ภายใน</th>
                                        <th rowspan="2">ชั้นความลับ</th>
                                        <th rowspan="2">ความเร่งด่วน</th>
                                        <th rowspan="2">ไฟล์แนบ</th>
                                        <th rowspan="2">เรื่อง</th>
                                        <th colspan="4">การดำเนินการครั้งสุดท้าย</th></tr>
                                        <tr>
                                        <th>หน่วยปฏิบัติ</th>
                                        <th>การปฏิบัติ</th>
                                        <th>หน่วย</th>
                                        <th>วันที่</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($relist3_bookTB)==0)
                                    {
                                        echo "<tr><td colspan='9' align='center'>--no data--</td></tr>";
                                    }
                                    else
                                    {
                                        foreach ($relist3_bookTB as $r) {

					                   
                                        echo "<tr>";
                                     
										echo "<td align='left'> ";
            if($r['send']=="N"){echo "<FONT color=green>(รับ) </FONT>".$this->session->userdata('logged_in')["section"]." ".$r['INID'];}
                                else{echo "<FONT color=blue>(รับ) </FONT>".$r['author']." ".$r['inid'];}
										echo "</td>";
										echo "<input type='text' name='bookid' id='bookid' value=".$r['bookID']."></input>";
                                        echo "<td align='left'> ".$r['secret']."</td>";
                                        echo "<td align='left'> ".$r['speed']."</td>";
                                        echo "<td align='left'> ";
                                        if($r['bookFile']!=""){get_pdf($r['bookFile']);}
                                        echo "</td>";
                                        echo "<td align='left'> ".$r['subject']."</td>";
										echo "<td align='left'> ".$r['subject']."</td>";  
										echo "<td align='left'> ".$r['subject']."</td>";
                                        echo "<td align='left'> ".$r['subject']."</td>";
                                        $var1 = $r['days'];
                                        echo "<td align='left'>".$var1."</td>";
                                        echo "</tr>";
										$bookid_s =$r['bookID'];
									    //$this->load->view("relist3_sub",$bookid_s); 
                                        }


										
                                    }
								
									
                                    ?>

                                  <div class="text-right">
                                    <a onclick="document.getElementById('myform').submit()" href="#">บันทึก <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php $this->load->view('include/jQfooter'); ?>

</body>

</html>

