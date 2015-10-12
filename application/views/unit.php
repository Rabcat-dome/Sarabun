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
                                <i class="fa fa-fw fa-user"></i> <a href="unit">หน่วยในระบบ</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                    <div class="col-lg-8 col-md-offset-2">
           
                        <div class="table-responsive">
                            <table class="table  table-bordered table-hover table-striped" >
                                <thead >
                                    <tr  >
                                        <th style="text-align:center">หน่วย</th>
                                        <th style="text-align:center">ชื่อย่อ</th>
                                        <th style="text-align:center">เลขธุรการ</th>
                                        <th style="text-align:center">ส่วนราชการ</th>
                
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($rs)==0)
                                    {
                                        echo "<tr><td colspan='4' align='center'>--no data--</td></tr>";
                                    }
                                    else
                                    {
                                       // $no=1;
                                        foreach ($rs as $r) {
                                        echo "<tr>";
                                        echo "<td align='left'> ".$r['name']."</td>";
                                        echo "<td align='left'> ".$r['acroname']."</td>";
                                        echo "<td align='left'> ".$r['nameID']."</td>";
                                        echo "<td align='left'> ".$r['section']."</td>";
                                        echo "</tr>";
                                                            }
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

<? $this->load->view('include/jQfooter'); ?>

</body>

</html>
