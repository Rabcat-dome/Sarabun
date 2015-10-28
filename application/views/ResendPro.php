<!DOCTYPE html>
<html lang="en">
<head>
   <title>Sarabun System </title>
 <?php $this->load->view('include/headHTML'); ?>
</head>
<body>
    <div id="wrapper" style="width: 100%;">
       <?php $noo=""; if($this->session->userdata('logged_in')["access"]=="u1"){ ?>
		 <?php ?>
		 <?php } else{ }?>

        <div id="page-wrapper" style="width: 100%;">
                          
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
							 
							 $this->load->view('detailbook'); ?></th>
                                        
                                    </tr>
                                    <tr>
									
                                     <?php 

									 $bookID = $_GET["bookID"];
									  
									 echo "<td colspan='4'  align='middle' valign='bottom' rowspan='2'> <a href='save1book?bookID=".$bookID."' >จัดเก็บเพื่อทราบ</a></td>";?>
                                      
                                    </tr>
                                </thead>
                                <tbody>
						        <?php $attributes = array('id' => 'myform');
                                echo form_open('mainPage/send', $attributes);?>
                                    <?php 
									echo "<INPUT  name='mess0' id='mess0' type=hidden value=".$bookID.">"; 
									
									if(count($bookin_r)==0)
                                    {
                                        echo "<tr><td colspan='9' align='center'>--no data--</td></tr>";
                                    }
                                    else
                                    {
                                        foreach ($bookin_r as $r) {
										
								        
                                        echo "<tr>";
                                     	echo "<td align='left' valign='bottom'><INPUT  name='nameID[]' id='nameID[]' type=checkbox value=".$r['id'].">";
									    echo "<td align='left' valign='bottom'>".$r['acroname']."</td>";
										echo "<INPUT  name='mess1' id='mess1' type=text value=".$r['acroname'].">"; 
                                        echo "</tr>";
										
										}
                                    }
                                    ?>
					<td align="middle" colspan="4" ><INPUT  name=send type=submit value="    ส่ง    ">&nbsp;<INPUT  name=send type=reset value=" Reset "></td>
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
