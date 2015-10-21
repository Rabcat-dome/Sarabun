        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <?php $this->load->view('include/headerNav'); ?>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div id="sidebar-wrapper" class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> รับหนังสือ <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="main"><i class="fa fa-fw fa-table"></i>ภายในระบบ</a>
                            </li>
                            <li>
                                <a href="newexbook"><i class="fa fa-fw fa-edit"></i>ภายนอก:เรื่องใหม่</a>
                            </li>
                            <li>
                                <a href="oldexbook"><i class="fa fa-search"></i> ภายนอก:เรื่องเดิม</a>
                            </li>
                            <li>
                                <a href="backexbook"><i class="fa fa-search"></i> ภายนอก:ตอบกลับ</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-arrows-v"></i> ออกหนังสือ <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="outinbook"><i class="fa fa-fw fa-edit"></i>ภายใน</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="UnitAction"><i class="fa fa-fw fa-table"></i> อยู่ระหว่างดำเนินการ(ยก.)</a>
                    </li>
                    <li>
                                <a href="backexbook"><i class="fa fa-search"></i> ค้นหาหนังสือรับ(ยก.)</a>
                    </li>
                    <li>
                                <a href="backexbook"><i class="fa fa-search"></i> ค้นหาหนังสือออก(ยก.)</a>
                    </li><li>.</li>
                    <li>
                                <a href="newexbook"><i class="fa fa-fw fa-edit"></i>บันทึกงานนอกระบบ</a>
                    </li>
                    <li>.</li>
                                        <li >
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-fw fa-arrows-v"></i> ติดตามหนังสือ <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse">

                    <li>
                        <a href="UnitAction"><i class="fa fa-fw fa-table"></i> อยู่ระหว่างดำเนินการ</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-search"></i> ค้นหาหนังสือทั้งหมด</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-desktop"></i> เรื่องเพื่อทราบ</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-desktop"></i> ทะเบียนหนังสือ</a>
                    </li>
                        </ul>
                    </li>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav> 
