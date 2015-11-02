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
                                <i class="fa fa-fw fa-arrows-v"></i>  ออกหนังสือ
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
                                <h3 class="panel-title"><i class="fa fa-fw fa-edit"></i> ค้นหาหนังสือ</h3>
                            </div>

                            <?php $attributes = array('id' => 'myform');
                             echo form_open('mainPage/newexbook', $attributes);?>

                            <div class="panel-body">
                                <div class="list-group">
                                    <a  class="list-group-item" >
                                        <span class="badge" ><select name="mess1" class="form-control" style="height:20px;width: 250px;">
                                    <option style="color:blue;">ปกติ</option>
                                    <option style="color:red;">ด่วน</option>
                                    <option style="color:red;">ด่วนมาก</option>
                                    <option style="color:red;">ด่วนที่สุด</option>
                                </select></span>
                                        หนังสือปี พ.ศ.
                                    </a>
									<a  class="list-group-item">
                                        <span class="badge" ><select name="mess3" id="mess3" class="form-control" style="height:20px;width: 250px;" ">
                                    <option style="color:blue;">รับ</option>
                                    <option style="color:blue;">ส่ง</option>
                                </select></span>
                                        รับ/ส่ง
                                    </a>
                                   
                                    <a  class="list-group-item">
                                        <span class="badge" ><select name="mess3" class="form-control" style="height:20px;width: 250px;">
                                    <option style="color:blue;">ปกติ</option>
                                    <option style="color:blue;">ปกปิด</option>
                                    <option style="color:red;">ลับ</option>
                                    <option style="color:red;">ลับมาก</option>
                                    <option style="color:red;">ลับที่สุด</option>
                                </select></span>
                                        ชนิดหนังสือ
                                    </a>
									
									  <a  class="list-group-item">
                                        <span class="badge" ><select name="mess3" id="mess3" class="form-control" style="height:20px;width: 250px;" ">
                                    <option style="color:blue;">รับ</option>
                                    <option style="color:blue;">ส่ง</option>
                                </select></span>
                                        ชั้นความลับ
                                    </a>

                                    <a  class="list-group-item">
                                        <span class="badge"><input name="mess5" class="form-control" placeholder="" style="height:20px;width: 250px;"></span>
                                        ที่
                                    </a>
                                    <a  class="list-group-item">
                                        <span class="badge"><input name="mess6" class="form-control" placeholder="" style="height:20px;width: 250px;"></span>
                                        ส่วนราชการ
                                    </a>
                                    <a  class="list-group-item">
                                        <span class="badge"><input name="mess1" class="form-control" placeholder="" style="height:20px;width: 250px;" id="example1"></span>
                                        วันที่
                                    </a>
                                      <a  class="list-group-item">
                                        <span class="badge"><input name="mess8" id="mess8" class="form-control" placeholder="ใส่รายละเอียด" style="height:20px;width: 350px;" ></span>
                                        เรื่อง
                                    </a>
                                    <a  class="list-group-item">
                                        <span class="badge"><input name="mess9" id="mess9" class="form-control" placeholder="" style="height:20px;width: 250px;" name="mess8"  id="mess8"></span>
                                        คำขึ้นต้น
                                    </a>
									<a  class="list-group-item">
                                        <span class="badge"><input name="mess7" class="form-control" placeholder="" style="height:20px;width: 250px;" id="example1"></span>
                                        วันที่รับ/ส่ง
                                    </a>
									<a  class="list-group-item">
                                        <span class="badge"><input name="mess7" class="form-control" placeholder="" style="height:20px;width: 250px;" id="example1"></span>
                                        ถึง
                                    </a>
									<a  class="list-group-item">
                                        <span class="badge"><input name="mess7" class="form-control" placeholder="" style="height:20px;width: 250px;" id="example1"></span>
                                        ผู้ลงนาม
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
