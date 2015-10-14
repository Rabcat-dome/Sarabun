<!DOCTYPE html>
<html lang="en">
<head>
   <title>Sarabun System </title>
 <?php $this->load->view('include/headHTML') ?>
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
                                <i class="fa fa-fw fa-arrows-v"></i>  รับหนังสือ
                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i> <a href="main">ภายในระบบ</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                    <div class="col-lg-12">
           
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>กดรับ</th>
                                        <th>ที่ภายใน</th>
                                        <th>ชั้นความลับ</th>
                                        <th>ความเร่งด่วน</th>
                                        <th>ไฟล์แนบ</th>
                                        <th>เรื่อง</th>
                                        <th>ที่</th>
                                        <th>ส่วนราชการ</th>
                                        <th>วันที่</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($bookin)==0)
                                    {
                                        echo "<tr><td colspan='9' align='center'>--no data--</td></tr>";
                                    }
                                    else
                                    {
                                        foreach ($bookin as $r) {
                                        echo "<tr>";
                                        echo "<td align='left'> ".$r['booktb.bookID']."</td>";
            if($r['booktb.send']=="N"){echo "<FONT color=green>(รับ) </FONT>".$this->session->userdata('logged_in')["section"]." ".$r['booktb.inid'];}
                                else{echo "<FONT color=blue>(รับ) </FONT>".$r['booktb.author']." ".$r['booktb.inid'];}
                                        echo "<td align='left'> ".$r['booktb.secret']."</td>";
                                        echo "<td align='left'> ".$r['booktb.speed']."</td>";
                                        echo "<td align='left'> ";
                                        if($r['booktb.bookFile']!=""){get_pdf($r['booktb.bookFile']);}
                                        echo "</td>";
                                        echo "<td align='left'> ".get_linka($r['booktb.bookID'],$r['booktb.subject'])."</td>";
                                        echo "<td align='left'> ".get_linka($r['booktb.bookID'],$r['booktb.id'])."</td>";
                                        echo "<td align='left'> ".get_linka($r['booktb.bookID'],$r['booktb.author'])."</td>";
                                        $var1 = standard_date('DATE_RFC822',$r['booktb.days']);
                                        echo "<td align='left'> ".get_linka($r['booktb.bookID'],$var1)."</td>";
                                        echo "</tr>";}
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php $this->load->view('include/jQfooter'); ?>

</body>

</html>
