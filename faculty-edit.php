<?php
  include "db_connect.php";
?>

<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kiddo Academy SIS</title>
    <link rel="icon" type="image/gif" href="images/School Logo/symbol.png"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  </head>

  <body class="hold-transition skin-green-light sidebar-mini">

  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="dashboard.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><image src="images/School Logo/logo.ico" style="width: 50px; padding: 3px"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><image src="images/School Logo/logo.png" style="width: 200px; padding: 3px;"></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="images/Employees/admin.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Kim Shook Jin</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="images/Employees/admin.jpg" class="img-circle" alt="User Image">

                  <p>
                    Kim Shook Jin
                    <small>Head Teacher</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Logout</a>
                  </div>
                </li>
              </ul>
            </li>
             <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="images/Employees/admin.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info" style="margin-top: 3%">
            <p>Kim Shook Jin<i class="fa fa-circle text-success" style="margin-left: 5px"></i></p>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" style="font-size:17px;">
          <li class="header" style="color: white">Welcome!</li>
          <li class="treeview">
            <a href="dashboard.php">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>
          <li class="treeview">
            <a href="AdminMessage.html">
              <i class="fa fa-envelope-o"></i> <span>Message</span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-gears"></i> <span>Maintenance</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="curriculumv2.php"><i class="fa fa-circle-o"></i>Curriculum</a></li>
              <li><a href="school-yearv2.php"><i class="fa fa-circle-o"></i>School Year</a></li>
              <li><a href="sectionv2.php"><i class="fa fa-circle-o"></i>Section</a></li>
              <li><a href="requirementv2.php"><i class="fa fa-circle-o"></i>Requirement</a></li>
              <li><a href="paymentv2.php"><i class="fa fa-circle-o"></i>Payment</a></li>
              <li><a href="profilev2.php"><i class="fa fa-circle"></i>Profile</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-refresh"></i> <span>Transaction</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="sectioningv2.html"><i class="fa fa-circle-o"></i>Sectioning</a></li>
              <li><a href="dismiss-withdraw.html"><i class="fa fa-circle-o"></i>Dismissal/ Withdrawal</a></li>
              <li><a href="billing.html"><i class="fa fa-circle-o"></i>Billing</a></li>
            </ul>
          </li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
       <section class="content-header">
        <ol class="breadcrumb" style="font-size:15px;">
          <li><a href="dashboard.php" style="color: black;"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li><a href="#" style="color: black;">Maintenance</a></li>
          <li><a href="profilev2.php" style="color: black;">Profile</a></li>
          <li class="active">Edit Faculty Profile</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <!-- Custom Tabs -->
            <div class="box box-primary" style="margin-top: 3%">
              <div class="box-header with-border">
              <!-- left column -->
                <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top:2%;">
                  <div class="text-center">
                    <img src="images/default-user.png" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6>Upload new photo</h6>
                    <input type="file" class="text-center center-block well well-sm">
                  </div>
                </div>
                <!-- edit form column -->
                <div class="col-md-8 col-sm-6 col-xs-12 personal-info" style="margin-top: 4%">

                  <form class="form-horizontal" role="form" method="post" action="updateFacultyProfile.php">
                    <?php
                      $id=$_POST['txtFacultyId'];
                      $query="select * from tblfaculty where tblFacultyId='$id' and tblFacultyFlag=1";
                      $result=mysqli_query($con, $query);
                      $row = mysqli_fetch_array($result);
                      $fname=$row['tblFacultyFname'];
                      $lname=$row['tblFacultyLname'];
                      $mname=$row['tblFacultyMname'];
                      $bday=$row['tblFacultyBday'];
                      $bplace=$row['tblFacultyBplace'];
                      $gender=$row['tblFacultyGender'];
                      $add=$row['tblFacultyAddress'];
                      $no=$row['tblFacultyContact'];
                      $email=$row['tblFacultyEmail'];
                      $position=$row['tblFaculty_tblFacultyPositionId'];
                    ?>

                    <input class="form-control" type="hidden" name="txtId" id="txtId" value="<?php echo $id ?>">
                      <div class="form-group">
                        <label class="col-lg-3 control-label">First name:</label>
                        <div class="col-lg-7">
                          <input class="form-control" type="text" name="txtFname" id="txtFname" value="<?php echo $fname ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-3 control-label">Last name:</label>
                        <div class="col-lg-7">
                          <input class="form-control" type="text" name="txtLname" id="txtLname" value="<?php echo $lname ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-3 control-label">Middle name:</label>
                        <div class="col-lg-7">
                          <input class="form-control" type="text" name="txtMname" id="txtMname" value="<?php echo $mname ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-3 control-label">Birthday:</label>
                        <div class="col-lg-7">
                          <input type="text" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask name="txtBday" id="txtBday" value="<?php echo $bday ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-3 control-label">Birthplace:</label>
                        <div class="col-lg-7">
                          <input class="form-control" type="text" name="txtBplace" id="txtBplace" value="<?php echo $bplace ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-3 control-label">Gender:</label>
                          <div class="col-lg-7">
                            <label class="radio-inline">
                              <input type="radio" name="optradio" value="M" <?php echo($gender=='M')?'checked':'' ?>>Male
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="optradio" value="F" <?php echo($gender=='F')?'checked':'' ?>>Female
                            </label>
                          </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-3 control-label">Home Address:</label>
                        <div class="col-lg-7">
                          <input class="form-control" type="text" name="txtAdd" id="txtAdd" value="<?php echo $add ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-3 control-label">Phone:</label>
                        <div class="col-lg-7">
                          <input class="form-control" type="text" name="txtNo" id="txtNo" maxlength="11" value="<?php echo $no ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-3 control-label">E-mail:</label>
                        <div class="col-lg-7">
                          <input class="form-control" type="text" name="txtEmail" id="txtEmail" value="<?php echo $email ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-3 control-label">Position:</label>
                          <div class="col-sm-7">
                            <select class="form-control choose" style="width: 100%;" name="selPosition" id="selPosition">
                              <option disabled>--Select position--</option>
                              <option value=1 <?php echo ($position == 1)?"selected":"" ?>>TEACHER</option>
                              <option value=2 <?php echo ($position == 2)?"selected":"" ?>>REGISTRAR</option>
                            </select>
                          </div>
                      </div>

                     <div class="btn-group" style="margin-top: 5%; float: right">
                      <button type="submit" class="btn btn-info" name="btnUpd" id="btnUpd">Save</button>
                    </div>
                  </form>
                </div> <!-- col col -->
              </div> <!-- box header -->
            </div> <!-- box box primary -->
          </div> <!-- col-md-12 -->
        </div> <!-- row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> Last na please
      </div>
      <strong>Copyright &copy; 2017 <a href="http://almsaeedstudio.com">Kiddo Academy and Development Center</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class="control-sidebar-menu">

          </ul>
          <!-- /.control-sidebar-menu -->

          <h3 class="control-sidebar-heading">Tasks Progress</h3>
          <ul class="control-sidebar-menu">

          </ul>
          <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>

            <h3 class="control-sidebar-heading">Message Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Show me as online
                <input type="checkbox" class="pull-right" checked>
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Turn off notifications
                <input type="checkbox" class="pull-right">
              </label>
            </div>
            <!-- /.form-group -->
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 2.2.3 -->
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- DataTables -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script>
    $(function () {
      $("#datatable").DataTable();
      $("#datatable1").DataTable();
      $("#datatable2").DataTable();
      $("#datatable3").DataTable();
    });
  </script>
  </body>
</html>
