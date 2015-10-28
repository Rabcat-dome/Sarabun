<!DOCTYPE html>
<html lang="en">
<head>
   <title>Sarabun System </title>
 <?php $this->load->view('include/headHTML'); ?>
</head>
<body>
    <div id="wrapper" style="width: 100%;">
       <?php $noo=""; if($this->session->userdata('logged_in')["access"]=="u1"){ ?>
		 <?php   ?>
		 <?php } else{ }?>

        <div id="page-wrapper" style="width: 100%;">
                            <?php $attributes = array('id' => 'myform','enctype' => 'multipart/form-data');
                             echo form_open_multipart('mainPage/do_upload', $attributes);?>
            <div class="container-fluid" >
                                 
                <!-- Page Heading -->


			<div class="row">

                    <div class="col-lg-12">
                            <br />

	  
						    </a>
                            </li>
                          
                                 <a href="main"> 
                           
							 <ol class="breadcrumb">บันทึก 
                        </ol>
                    </div>
                </div>
					
                <!-- /.row -->
                    <div class="col-lg-12" >
                            
                        <div class="table-responsive">
                         
						
                         	 
							   <table class="table table-bordered table-hover table-striped">
                                <thead>
								<tr>
                                        <th colspan="9"><?php 
						
							 $this->load->view('detailbook'); ?></th>
                                        
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
										echo "<input type='hidden' name='mess0' id='mess0' value=".$r['bookID'].">";
										echo "<input type='hidden' name='bookid' id='bookid' value=".$r['bookID'].">";
                                        echo "<input type='hidden' name='user' value=".$this->session->userdata('logged_in')["username"].">";
                                        echo "<input type='hidden' name='des' value=".$r['bookID'].">";
                                        echo "<tr>";
                                     	echo "<td ><font size='4'><INPUT size='40' TYPE=FILE NAME=userfile></font></td>";
										echo "<td align='middle' valign='bottom'><a href='ResendPro?bookID=".$r['bookID']."'>ไม่มีไฟล์</a></a></td>";
										?>
										<td align='middle' valign='bottom'> <a onclick="document.getElementById('myform').submit()" href="#">บันทึก </a></td>
                                        <?php
										echo "</tr>";}
                                    }
                                    ?>

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
