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
                         
						
                         	 
							   <table class="table table-bordered table-hover table-striped">
                                <thead>
								<tr>
                                        <th colspan="9"><?php 
							 $bookID=$_GET['bookID'];
							 $this->load->view('detailbook',$bookID); ?></th>
                                        
                                    </tr>
                                    <tr>
                                        <td align='middle' <th>หน่วยปฏิบัติ </th>
                                        <td align='middle' <th>ปฏิบัติ</th>
                                        <td align='middle' <th>หน่วย </th>
                                        <td align='middle' <th>วันที่ / เวลา </th>
                                     
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 
									
									
									if(count($bookin_transaction)==0)
                                    {
                                        echo "<tr><td colspan='9' align='center'>--no data--</td></tr>";
                                    }
                                    else
                                    {
                                        foreach ($bookin_transaction as $r) {
                                        echo "<tr>";
                                     	echo "<td align='middle' valign='bottom'>".$r['unit']."</a></td>";
										echo "<td align='middle' valign='bottom'>".$r['actions']."</a></td>";
										echo "<td align='middle' valign='bottom'>".$r['acUnit']."</a></td>";
										echo "<td align='middle' valign='bottom'>".$r['trandate']."</a></td>";
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
