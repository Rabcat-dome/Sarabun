<!DOCTYPE html>
<html lang="en">

<head>
   <title>Sarabun System </title>
 <? $this->load->view('include/headHTML') ?>
</head>

<body>
    <div id="wrapper">
<? if($this->session->userdata('logged_in')["access"]=="u1")
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
                                <i class="fa fa-fw fa-user"></i> <?= $this->session->userdata('logged_in')["name"];?>
                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-user"></i> <a href="unit">ภายนอก:เรื่องใหม่ (รับหนังสือจากภายนอก)</a>
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
                                <h3 class="panel-title"><i class="fa fa-fw fa-edit"></i> รับหนังสือจากภายนอก</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a  class="list-group-item" >
                                        <span class="badge" ><select class="form-control" style="height:20px;width: 250px;">
                                    <option>ปกติ</option>
                                    <option style="color:red;">ด่วน</option>
                                    <option style="color:red;">ด่วนมาก</option>
                                    <option style="color:red;">ด่วนที่สุด</option>
                                </select></span>
                                        ความเร่งด่วน
                                    </a>
                                    <a  class="list-group-item">
                                        <span class="badge" ><select class="form-control" style="height:20px;width: 250px;">
                                    <option>--XXX--</option>        
                                    <option>งป. / การเงิน</option>
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
                                        <span class="badge" ><select class="form-control" style="height:20px;width: 250px;">
                                    <option>ปกติ</option>
                                    <option>ปกปิด</option>
                                    <option style="color:red;">ลับ</option>
                                    <option style="color:red;">ลับมาก</option>
                                    <option style="color:red;">ลับที่สุด</option>
                                </select></span>
                                        ชั้นความลับ
                                    </a>
                                    <a  class="list-group-item">
                                        <span class="badge"><input class="form-control" placeholder="ใส่รายละเอียด" style="height:20px;width: 250px;"></span>
                                        รับจาก
                                    </a>
                                    <a  class="list-group-item">
                                        <span class="badge"><input class="form-control" placeholder="ใส่รายละเอียด" style="height:20px;width: 250px;"></span>
                                        ที่
                                    </a>
                                    <a  class="list-group-item">
                                        <span class="badge"><input class="form-control" placeholder="ใส่รายละเอียด" style="height:20px;width: 250px;"></span>
                                        สว่นราชการ
                                    </a>
                                    <a  class="list-group-item">
                                        <span class="badge"><input class="form-control" placeholder="กดเพื่อใส่วันที่" style="height:20px;width: 250px;" id="example1"></span>
                                        วันที่
                                    </a>
                                    <a  class="list-group-item">
                                        <span class="badge"><input class="form-control" placeholder="ใส่รายละเอียด" style="height:20px;width: 350px;"></span>
                                        เรื่อง
                                    </a>
                                    <a  class="list-group-item">
                                        <span class="badge"><input class="form-control" placeholder="ใส่รายละเอียด" style="height:20px;width: 250px;"></span>
                                        คำขึ้นต้น
                                    </a>
                                </div>

                                <div class="text-right">
                                    <a href="#">รับหนังสือ <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
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

<? $this->load->view('include/jQfooter'); ?>
</body>

</html>
