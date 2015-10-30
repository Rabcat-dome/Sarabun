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
                                    <?php if(count($bookin)==0)
                                    {
                                        echo "<tr><td colspan='9' align='center'>--no data--</td></tr>";
                                    }
                                    else
                                    {
                                        foreach ($bookin as $r) {

					                   
                                        echo "<tr>";
                                     
										echo "<td align='left'> ";
            if($r['send']=="N"){echo "<FONT color=green>(รับ) </FONT>".$this->session->userdata('logged_in')["section"]." ".$r['INID'];}
                                else{echo "<FONT color=blue>(รับ) </FONT>".$r['author']." ".$r['inid'];}
										 echo "</td>";
                                        echo "<td align='left'> ".$r['secret']."</td>";
                                        echo "<td align='left'> ".$r['speed']."</td>";
                                        echo "<td align='left'> ";
                                        if($r['bookFile']!=""){get_pdf($r['bookFile']);}
                                        echo "</td>";
                                        echo "<td align='left'> ".$r['subject']."</td>";
                                        echo "<td align='left'> ".$r['id']."</td>";
                                        echo "<td align='left'> ".$r['author']."</td>";
                                        $var1 = $r['days'];
                                        echo "<td align='left'>".$var1."</td>";
                                        echo "</tr>";}
                                    }
                                    ?>

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
