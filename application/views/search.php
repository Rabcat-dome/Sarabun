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
                             echo form_open('mainPage/send_search', $attributes);?>

                            <div class="panel-body">
                                <div class="list-group">
                                    <a  class="list-group-item" >
                                        <span class="badge" ><select name="search_year"  id="search_year" class="form-control" style="height:20px;width: 250px;">
									 <option ></option>
                                     <option value="2558" >2558</option>
                                     <option value="2559" >2559</option>
									 <option value="2559" >2560</option>
									 <option value="2559" >2561</option>
                                </select></span>
                                        หนังสือปี พ.ศ.
                                    </a>
									<a  class="list-group-item">
                                        <span class="badge" ><select name="search_outin" id="search_outin" class="form-control" style="height:20px;width: 250px;" ">
									<option ></option>
                                    <option style="color:blue;">หนังสือภายใน</option>
                                    <option style="color:blue;">หนังสือภายนอก</option>
                                </select></span>
                                        ประเภทหนังสือ
                                    </a>
									 <a  class="list-group-item">
                                        <span class="badge"><input name="search_id"  id="search_id"  class="form-control" placeholder="" style="height:20px;width: 250px;"></span>
                                        ที่ภายใน
                                    </a>
									<a  class="list-group-item">
                                        <span class="badge" ><select name="search_send"  id="search_send"  class="form-control" style="height:20px;width: 250px;" ">
									<option ></option>
									<option ></option>
                                    <option style="color:blue;">รับ</option>
                                    <option style="color:blue;">ส่ง</option>
                                </select></span>
                                        รับ/ส่ง
                                    </a>
                                   
                                          <a  class="list-group-item">
                                        <span class="badge" ><select name="search_type"  id="search_type" class="form-control" style="height:20px;width: 250px;">
                                    <option></option>
                                    
                                    <option><?php echo $r; ?></option>
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
                                        <span class="badge" ><select name="search_secret"  id="search_secret" class="form-control" style="height:20px;width: 250px;" ">
									<option ></option>
                                    <option >ปกติ</option>
                                    <option >ปกปิด</option>
									<option >ลับ</option>
									<option >ลับมาก</option>
									<option >ลับที่สุด</option>
                                </select></span>
                                        ชั้นความลับ
                                    </a>

                                   
                                    <a  class="list-group-item">
                                        <span class="badge"><input name="search_author"  id="search_author" class="form-control" placeholder="" style="height:20px;width: 250px;"></span>
                                        ส่วนราชการ
                                    </a>
                                    <a  class="list-group-item">
                                        <span class="badge"><input name="search_date"    id="search_date"  class="form-control" placeholder="" style="height:20px;width: 250px;" id="example1"></span>
                                        วันที่
                                    </a>
                                      <a  class="list-group-item">
                                        <span class="badge"><input name="search_subject"  id="search_subject"  class="form-control" placeholder="ใส่รายละเอียด" style="height:20px;width: 350px;" ></span>
                                        เรื่อง
                                    </a>
                                    <a  class="list-group-item">
                                        <span class="badge"><input name="search_beginword"  id="search_beginword"  class="form-control" placeholder="" style="height:20px;width: 250px;" name="mess8"  id="mess8"></span>
                                        คำขึ้นต้น
                                    </a>
									<a  class="list-group-item">
                                        <span class="badge"><input name="search_ddate"  id="search_ddate" class="form-control" placeholder="" style="height:20px;width: 250px;" id="example1"></span>
                                        วันที่รับ/ส่ง
                                    </a>
									<a  class="list-group-item">
                                        <span class="badge"><input name="search_tddate"  id="search_tddate" class="form-control" placeholder="" style="height:20px;width: 250px;" id="example1"></span>
                                        ถึง
                                    </a>
									<a  class="list-group-item">
                                        <span class="badge"><input name="search_signer"  id="search_signer" class="form-control" placeholder="" style="height:20px;width: 250px;" id="example1"></span>
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
