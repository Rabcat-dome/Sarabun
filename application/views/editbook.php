<!DOCTYPE html>
<html lang="en">

<head>
   <title>Sarabun System </title>
 <?php $this->load->view('include/headHTML') ?>
 <link href="<?php echo base_url(); ?>asset/css/datepicker.css" rel="stylesheet">
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
                            <li>
                                <i class="fa fa-fw fa-arrows-v"></i>  แก้ไขหนังสือ
                            </li>
                            <li class="active">
                                <a href="newexbook"><i class="fa fa-fw fa-edit"></i> ภายนอก:เรื่องใหม่ (ออกหนังสือภายใน)</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                    <div class="col-lg-8 col-md-offset-2">
           
                        <div class="table-responsive">
                            <div class="col-lg-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-fw fa-edit"></i> แก้ไขหนังสือ</h3>
                            </div>

                            <?php $attributes = array('id' => 'myform');
                             echo form_open('mainPage/outinbook', $attributes);?>
							 <?php $bookinout = $_GET["bookID"]?>
                            <div class="panel-body">
							     <?php   foreach ($bookin as $r) { 
                                           $speed =      $r['speed'];
										   $secret =     $r['secret'];
										   $id =         $r['id'];
										   $author =    $r['author'];
										   $days =    $r['days'];
										   $subject =    $r['subject'];
										   $beginword =    $r['beginword'];
								              }  ?>
                                <div class="list-group">
                                    <a  class="list-group-item" >
                                        <span class="badge" ><select name="mess1" id="mess1" class="form-control" style="height:20px;width: 250px;" ">
                                    <option style="color:blue;" value="ปกติ" <?php  if($speed=="ปกติ"){echo "selected='selected'";} ?>>ปกติ</option>
                                    <option style="color:red;"  value="ด่วน"  <?php  if($speed=="ด่วน"){echo "selected='selected'";} ?>>ด่วน</option>
                                    <option style="color:red;"  value="ด่วนมาก"  <?php  if($speed=="ด่วนมาก"){echo "selected='selected'";} ?>>ด่วนมาก</option>
                                    <option style="color:red;"  value="ด่วนที่สุด"   <?php  if($speed=="ด่วนที่สุด"){echo "selected='selected'";} ?> >ด่วนที่สุด</option>
                                </select></span>


								

                                        ความเร่งด่วน
                                    </a>
                                    <a  class="list-group-item">
                                        <span class="badge" ><select name="mess2" id="mess2" class="form-control" style="height:20px;width: 250px;" >
                                    <option></option>
                                    <?php foreach($rs as $r)  ?>
                                    <option><?php echo $r[0]; ?></option>
                                    <option>สวัสดิการ / การส่งกำลังบำรุง</option>
                                    <option>กำลังพล</option>
                                    <option>การฝึก / ศึกษา / อบรม</option>
                                    <option>คำสั่ง</option>
                                    <option>ระเบียบ</option>
                                    <option>เรื่องเชิญ</option>
                                    <option>รายงาน</option>
                                    <option>เรือ / อากาศยาน</option>
                                    <option>แผนงาน</option>
                                    <option>การข่าว</option>
                                    <option>อื่นๆ</option>
                                    <option>อนุมัติ</option>
                                </select></span>
                                        ชนิดหนังสือ
                                    </a>
                             
											  
											
									
                                    <a  class="list-group-item">
                                        <span class="badge" ><select name="mess3" id="mess3" class="form-control" style="height:20px;width: 250px;" ">
                                    <option style="color:blue;" value="ปกติ"  <?php  if($secret=="ปกติ"){echo "selected='selected'";} ?> >ปกติ</option>
                                    <option style="color:blue;" value="ปกปิด" <?php  if($secret=="ปกปิด"){echo "selected='selected'";} ?> >ปกปิด</option>
                                    <option style="color:red;"  value="ลับ"   <?php  if($secret=="ลับ"){echo "selected='selected'";} ?> >ลับ</option>
                                    <option style="color:red;"  value="ลับมาก" <?php  if($secret=="ลับมาก"){echo "selected='selected'";} ?>>ลับมาก</option>
                                    <option style="color:red;"  value="ลับที่สุด" <?php  if($secret=="ลับที่สุด"){echo "selected='selected'";} ?>>ลับที่สุด</option>
                                </select></span>
                                        ชั้นความลับ
                                    </a>
								
                                    <a  class="list-group-item">
                                        <span class="badge"><input name="mess5" id="mess5" class="form-control" placeholder="" style="height:20px;width: 250px;"" value =<?php echo $id ?>></span>
                                        ที่
                                    </a>
                                    <a  class="list-group-item">
                                        <span class="badge"><input name="mess6"  id="mess6" class="form-control" placeholder="" style="height:20px;width: 250px;" " value =<?php echo $author ?>></span>
                                        ส่วนราชการ
                                    </a>
                                     <a  class="list-group-item">
                                        <span class="badge"><input name="mess7" class="form-control" placeholder="" style="height:20px;width: 250px;" id="example1" value="<?php echo $days ?>"></span>
                                        วันที่
                                    </a>
                                    <a  class="list-group-item">
                                        <span class="badge"><input name="mess8" id="mess8" class="form-control" placeholder="ใส่รายละเอียด"   value="<?php  echo $speed ?>" style="height:20px;width: 350px;" ></span>
                                        เรื่อง
                                    </a>
                                    <a  class="list-group-item">
                                        <span class="badge"><input name="mess9" id="mess9" class="form-control" placeholder="" style="height:20px;width: 250px;" name="mess8"  id="mess8" value="<?php echo $beginword ?>"></span>
                                        คำขึ้นต้น
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a onclick="document.getElementById('myform').submit()" href="#">บันทึก <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
									
                            <?php echo form_close(); ?>

                        </div>
                    </div>
                        </div>
                    </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php $this->load->view('include/jQfooter');//script jquery ?>
<?php $this->load->view('include/Datefooter');//javascript date picker ?>
</body>
</html>