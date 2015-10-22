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
                            <?php $attributes = array('id' => 'myform');
                             echo form_open('mainPage/receive', $attributes);?>
							
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                            <br />
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-fw fa-arrows-v"></i>  
								       <a onclick="document.getElementById('myform').submit()" href="#">รับหนังสือ </a>
                            </li>
                            <li class="active">
                                 <a href="main"><i class="fa fa-fw fa-table"></i> ภายในระบบ</a>
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
                                        <th>กดรับ</th>
                                        <th>ที่ภายใน</th>
                                        <th>ชั้นความลับ</th>
                                        <th>ความเร่งด่วน</th>
                                        <th>ไฟล์แนบ</th>
                                        <th>เรื่อง</th>
                                        <th>ที่</th>
                                        <th>ส่วนราชการ</th>
                                        <th>วันที่</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
									
									
									if(count($bookin)==0)
                                    {
                                        echo "<tr><td colspan='9' align='center'>--no data--</td></tr>";
                                    }
                                    else
                                    {
										
                                        foreach ($bookin as $r) {
                                        echo "<tr>";
                                        echo "<td align='left'> <INPUT type='checkbox' name='BookID[]' id='BookID[]'  value=".$r['bookID']."";
										echo "</td><td align='left'> ";
            if($r['send']=="N"){echo "<FONT color=green>(รับ) </FONT>".$this->session->userdata('logged_in')["section"]." ".$r['inid'];}
                                else{echo "<FONT color=blue>(รับ) </FONT>".$r['author']."".$r['unit']."".$r['inid'];}
										 echo "</td>";
                                        echo "<td align='left'> ".$r['secret']."</td>";
                                        echo "<td align='left'> ".$r['speed']."</td>";
                                        echo "<td align='left'> ";
                                        if($r['bookFile']!=""){get_pdf($r['bookFile']);}
                                        echo "</td>";
										echo "<td align='left'><a  href='reunitAc?bookID=".$r['bookID']."'>".$r['subject']." </a>";
										echo "</td>";
                                         /// echo "<td align='left'> ".$r['subject']."</td>";
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
         <?php echo form_close(); ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php $this->load->view('include/jQfooter'); ?>

</body>

</html>
