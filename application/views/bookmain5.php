<!DOCTYPE html>
<html lang="en">
<head>
   <title>Sarabun System </title>
 <?php $this->load->view('include/headHTML'); ?>
</head>
<body>
    <div id="wrapper" style="width: 100%;">
        <?php if($this->session->userdata('logged_in')["access"]=="u1")
        {$this->load->view('include/menuMain');}
        else{$this->load->view('include/menu');}?>

        <div id="page-wrapper" style="width: 100%;">
                            <?php $attributes = array('id' => 'myform');
                             echo form_open('mainPage/receive', $attributes);?>
            <div class="container-fluid" >
                                 
                <!-- Page Heading -->


			<div class="row">

                    <div class="col-lg-12">
                            <br />

	  
						    </a>
                            </li>
                          
                                 <a href="main"> 
                           
							 <ol class="breadcrumb">การดำเนินการ 
                        </ol>
                    </div>
                </div>
					
                <!-- /.row -->
                    <div class="col-lg-12" >
                            
                        <div class="table-responsive">
                         
						
                         	 
							   <table class="table table-bordered table-hover table-striped" >
                                <thead>
								<tr>
                                <th colspan="9"><?php 							
							//$bookID=$_POST['bookID'];
							    if (!isset($_GET['bookID']))
								{
									$bookID = "";
								}
									else
								{
									$bookID = $_GET['bookID'];
								}
								

							 $this->load->view('detailbook',$bookID); ?></th>
                                        
                                    </tr>
                                  <?php 
									if(count($bookin)==0)
                                    {
                                        echo "<tr><td colspan='9' align='center'>--no data--</td></tr>";
                                    }
                                    else
                                    {
										
                                        foreach ($bookin as $r) {
								
                                        echo "<tr>";
                                        echo "<td align='middle' valign='bottom' rowspan='2'> <a href='transaction?bookID=".$r['bookID']."' >แสดงประวัติ</a></td>";
									    echo "<td align='middle' valign='bottom' rowspan='2'> <a href='upbook?bookID=".$r['bookID']."' >บันที่ไฟล์ใหม่</a></td>";
                                        echo "<td align='middle' valign='bottom' rowspan='2'> <a href='editbook?bookID=".$r['bookID']."' >แก้ไขหนังสือ</a></td>";
										echo "<td align='middle' valign='bottom' rowspan='2'> <a href='transaction.asp?bookID=".$r['bookID']."' >จัดเก็บ</a></td>";
										echo "<td align='middle' valign='bottom' rowspan='2'> <a href='transaction.asp?bookID=".$r['bookID']."' >จัดเก็บเพื่อทราบ</a></td>";
										echo "<td align='middle' valign='bottom' rowspan='2'> <a href='transaction.asp?bookID=".$r['bookID']."' >ส่งหนังสือ</a></td>";
										echo "<td align='middle'  valign='bottom'<th colspan='2' align='middle'>ออกหนังสือ</th></td>";
										echo "</tr>";
										echo "<tr>";
										echo "<td align='middle'  valign='bottom'<th >ภายใน</th>";
										echo "<td align='middle'  valign='bottom'<th>ภายนอก</th>";

                                        echo "</tr>";
								    }
									}
                                    ?>
                                </thead>
                                <tbody>
                                  
										
                                </tbody>
                         

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
