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
										<td align="middle" valign="bottom" rowspan="2"><a onclick="document.getElementById('myform4').submit()" href="#">บันที่ไฟล์ใหม่</a></td>;
										
										<td align="middle" valign="bottom" rowspan="2"><a onclick="document.getElementById('myform3').submit()" href="#">แก้ไขหนังสือ</a></td>;

										<td align="middle" valign="bottom" rowspan="2"><a onclick="document.getElementById('myform').submit()" href="#">จัดเก็บ</a></td>;
										
										<td align="middle" valign="bottom" rowspan="2"><a onclick="document.getElementById('myform2').submit()" href="#">จัดเก็บเพื่อทราบ</a></td>;
										<td align="middle" valign="bottom" rowspan="2"><a onclick="document.getElementById('myform5').submit()" href="#">ส่งหนังสือ</a></td>;
										<?php
									//	echo "<td align='middle' valign='bottom' rowspan='2'> <a href='ResendPro?bookID=".$r['bookID']."' >ส่งหนังสือ</a></td>";
										echo "<td align='middle'  valign='bottom'<th colspan='2' align='middle'>ออกหนังสือ</th></td>";
										echo "</tr>";
										echo "<tr>";
										echo "<td align='middle'  valign='bottom'<th >ภายใน</th>";
										echo "<td align='middle'  valign='bottom'<th>ภายนอก</th>";
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
		   <?php $attributes = array('id' => 'myform2');
              echo form_open('mainPage/save1book', $attributes);
		      echo "<input type='hidden' name='mess0' id='mess0' value=".$r['bookID']."></input>";
			  echo "<input type='hidden' name='mess1' id='mess1' value=".$r['unit']."></input>";
			  echo "<input type='hidden' name='mess2' id='mess2' value=".$r['beginword']."></input>";
			?>
		    <?php echo form_close(); ?>
			  <?php $attributes = array('id' => 'myform3');
              echo form_open('mainPage/editbook', $attributes);
		      echo "<input type='hidden' name='mess0' id='mess0' value=".$r['bookID']."></input>";
			  echo "<input type='hidden' name='mess1' id='mess1' value=".$r['unit']."></input>";
			  echo "<input type='hidden' name='mess2' id='mess2' value=".$r['beginword']."></input>";
			
			?>
			<?php echo form_close(); ?>
		      <?php $attributes = array('id' => 'myform4');
              echo form_open('mainPage/upbook', $attributes);
		      echo "<input type='hidden' name='mess0' id='mess0' value=".$r['bookID']."></input>";
			  echo "<input type='hidden' name='mess1' id='mess1' value=".$r['unit']."></input>";
			  echo "<input type='hidden' name='mess2' id='mess2' value=".$r['beginword']."></input>";
			
			
			?>
		    <?php echo form_close(); ?>
			   <?php $attributes = array('id' => 'myform5');
              echo form_open('mainPage/ResendPro', $attributes);
		      echo "<input type='hidden' name='mess0' id='mess0' value=".$r['bookID']."></input>";
			  echo "<input type='hidden' name='mess1' id='mess1' value=".$r['unit']."></input>";
			  echo "<input type='hidden' name='mess2' id='mess2' value=".$r['beginword']."></input>";
			
			}
              foreach ($bookin as $r) {
			  echo "<input type='hidden' name='mess3' id='mess3' value=".$r['acroname']."></input>";
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