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
                                <i class="fa fa-fw fa-gear"></i> <a href="editPass">แก้ไขข้อมูล</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                    <div class="col-lg-10 col-md-offset-1">
           
                        <div class="table-responsive">
                            <?= form_open('mainPage/editPass');?>
                            <table class="table  table-bordered table-hover table-striped" >
                                <thead >
                                    <tr  >
                                        <th style="text-align:center">หน่วย</th>
                                        <th style="text-align:center">ชื่อย่อ</th>
                                        <th style="text-align:center">เลขธุรการ</th>
                                        <th style="text-align:center">ส่วนราชการ</th>
                                        <th style="text-align:center">Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        echo "<tr>";
                                        echo "<td align='left'> <input class='form-control' name='tname' value='$name'></td>";
                                        echo "<td align='left'> <input class='form-control' name='tacroname' value='$acroname'></td>";
                                        echo "<td align='left'> <input class='form-control' name='tnameid' value='$nameID'></td>";
                                        echo "<td align='left'> <input class='form-control' name='tsection' value='$section'></td>";
                                        echo "<td align='left'> <div class='form-group has-error'><input class='form-control' name='tpassword' placeholder='input Password' id='inputError' required></div></td>";
                                        echo "</tr>";
                                    ?>
                                </tbody>
                            </table>
                            <div class="col-lg-3 col-md-offset-9">
                            <?php
                            echo "<input type='submit' name='btsave' id='btsave' class='btn btn-primary'value='บันทึกการแก้ไข'> ";
                            echo "<button type='reset' class='btn btn-primary'>ยกเลิก</button>";
                            ?>
                            <?= form_close();?>
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
