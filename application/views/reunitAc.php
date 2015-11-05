<!DOCTYPE html>
<html lang="en">
<head>
   <title>Sarabun System </title>
 <?php $this->load->view('include/headHTML'); ?>
</head>
<body>
    <div id="wrapper" style="width: 100%;">

	
        <div id="page-wrapper" style="width: 100%;">
                            <?php $attributes = array('id' => 'myform');
                             echo form_open('mainPage/savebook', $attributes);?>



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
		
			
			
							   $this->load->view('detailbook'); 

							   ?></th>
                                        
                                    </tr>
                                  <?php 
									if(count($bookin)==0)
                                    {
                                        echo "<tr><td colspan='9' align='center'>--no data--</td></tr>";
                                    }
                                    else
                                    {
										
                                        foreach ($bookin as $r) {
								        echo "<input type='hidden' name='mess0' id='mess0' value=".$r['bookID']."></input>";
								        echo "<input type='hidden' name='mess1' id='mess1' value=".$r['unit']."></input>";
						                echo "<input type='hidden' name='mess2' id='mess2' value=".$r['beginword']."></input>";
                                        echo "<tr>";
                                        echo "<td align='middle' valign='bottom' rowspan='2'> <a href='transaction?bookID=".$r['bookID']."' >แสดงประวัติ</a></td>";
						
                                        ?>
										<td align="middle" valign="bottom" rowspan="2"><a onclick="document.getElementById('myform4').submit()" href="#">รับหนังสือ</a></td>
								
										<td align="middle" valign="bottom" rowspan="2"><a onclick="document.getElementById('myform5').submit()" href="#">ส่งหนังสือ</a></td>
										<?php
										echo "</tr>";
										echo "<tr>";
										?>
									
										<?php
                                        echo "</tr>";
								   
										?>
										<div class="text-right">
                                  
                                </div>
                                </thead>
                                <tbody>
                                  
										
                                </tbody>
                         

                        </div>
                    </div>
            </div>

    
           <?php echo form_close(); ?>
		 
		   
			<?php echo form_close(); ?>
		      <?php $attributes = array('id' => 'myform4');
              echo form_open('mainPage/upbook', $attributes);
		      echo "<input type='hidden' name='mess0' id='mess0' value=".$r['bookID']."></input>";
			  echo "<input type='hidden' name='mess1' id='mess1' value=".$r['unit']."></input>";
			  echo "<input type='hidden' name='mess2' id='mess2' value=".$r['beginword']."></input>";
			?>
		  
			
		    <?php echo form_close(); ?>
			   <?php $attributes = array('id' => 'myform5');
              echo form_open('mainPage/ResendPro?bookID='.$r['bookID'], $attributes);
		      echo "<input type='hidden' name='mess0' id='mess0' value=".$r['bookID']."></input>";
			  echo "<input type='hidden' name='mess1' id='mess1' value=".$r['unit']."></input>";
			  echo "<input type='hidden' name='mess2' id='mess2' value=".$r['beginword']."></input>";
			
			}
           
			}
			?>
		    <?php echo form_close(); ?>
		
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php $this->load->view('include/jQfooter'); ?>

</body>

</html>
