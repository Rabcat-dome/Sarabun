            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="main"><< Sarabun System >></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="https://mail.j3.mil/owa/" target=_blank class="dropdown-toggle" ><i class="fa fa-envelope"> จดหมายเวียน </i> </a>
    
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> แจ้งเตือน <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">

                        <li>
                            <a href="">ระบบคาดว่าแล้วเสร็จ 07/2558 <span class="label label-danger">แจ้งเตือน</span></a>
                        </li>
                        
                       
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $name;?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="unit"><i class="fa fa-fw fa-user"></i> หน่วยในระบบ</a>
                        </li>
                        <li>
                            <a href="editPass"><i class="fa fa-fw fa-gear"></i> แก้ไขข้อมูล</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>