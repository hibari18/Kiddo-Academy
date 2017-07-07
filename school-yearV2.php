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
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- sweetalert -->
    <script src="sweetalert-master/dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="sweetalert-master/dist/sweetalert.css">

  <link rel="stylesheet" type="text/css" href="css/validDesignSchoolYr.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <script>
    $(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
      localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
      if(activeTab){
        $('#myTab a[href="' + activeTab + '"]').tab('show');
      }
    });
    </script>

    <style>
  .popup
  {
    position: relative;
    display: inline-block;
    cursor: pointer;
  }
  .popup .popuptext
  {
    visibility: hidden;
    width: 260px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 35%;
    margin-left: -80px;
  }
  .popup .popuptext::after
  {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
  }
  .popup .show
  {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
  }
  @-webkit-keyframes fadeIn
  {
    from {opacity: 0;}
    to {opacity: 1;}
  }
  @keyframes fadeIn
  {
    from {opacity: 0;}
    to {opacity: 1;}
  }
  </style>

  <script>
  function fn1()
  {
    var stat = document.getElementById("selUpdSyAct").value;
    if(stat != "INACTIVE")
    {
      var popup = document.getElementById("pop");
      popup.classList.toggle("show");
    }
  }

  (function(){
    if(window.addEventListener){
      window.addEventListener('load',run,false);
    }else if(window.attachEvent){
      window.attachEvent('onload',run);
    }
    function run(){
      var t=document.getElementById('datatable');
      t.onclick=function(event){
        event=event || window.event;
        var target=event.target||event.srcElement;
        while (target&&target.nodeName!='TR'){
          target=target.parentElement;
        }
        var cells=target.cells;

        if(!cells.length||target.parentNode.nodeName=='THEAD'){return;}
        var f1=document.getElementById('txtUpdSyId');
        var f2=document.getElementById('txtUpdSyCurrId');
        var f3=document.getElementById('txtUpdSyName');
        var f4=document.getElementById('txtUpdSyYear');
        var f5=document.getElementById('selUpdSyCurr');
        var f6=document.getElementById('selUpdSyAct');
        var f7=document.getElementById('txtDelSyId');
        /*var f8=document.getElementById('temp');*/
        f1.value=cells[0].innerHTML;
        f2.value=cells[1].innerHTML;
        f3.value=cells[3].innerHTML;
        f4.value=cells[2].innerHTML;
        f5.value=cells[4].innerHTML;
        f6.value=cells[5].innerHTML;
        f7.value=cells[0].innerHTML;
        /*f8.value=cells[5].innerHTML;*/
      };
    }})();
  (function(){
    if(window.addEventListener){
      window.addEventListener('load',run,false);
    }else if(window.attachEvent){
      window.attachEvent('onload',run);
    }
    function run(){
      var t=document.getElementById('datatable1');
      t.onclick=function(event){
        event=event || window.event;
        var target=event.target||event.srcElement;
        while (target&&target.nodeName!='TR'){
          target=target.parentElement;
        }
        var cells=target.cells;

        if(!cells.length||target.parentNode.nodeName=='THEAD'){return;}
        var f1=document.getElementById('NumClassId');
        var f2=document.getElementById('updNumMonth');
        var f3=document.getElementById('updNumDay');
        f1.value=cells[0].innerHTML;
        f2.value=cells[1].innerHTML;
        f3.value=cells[2].innerHTML;
      };
    }})();

    $(function(){
      $('input[class=form-group]').change(function(){
        $('input[name=updNumMonth]').attr('disabled', 'disabled');
      });
    });

    function showTblMonth()
    {
      var xmlhttp =  new XMLHttpRequest();
      xmlhttp.open("GET","showTblMonth.php?getSySelect="+document.getElementById("getSySelect").value,false);
      xmlhttp.send(null);

      document.getElementById("datatable1").innerHTML=xmlhttp.responseText;
    }
  </script>

</head>

<body class="hold-transition skin-green-light sidebar-mini">

  <?php
    $message = isset($_GET['message'])?intval($_GET['message']):0;

    if($message == 1) {
      echo "<script> swal('Data insertion failed!', ' ', 'error'); </script>";
    }

    if($message == 2) {
      echo "<script> swal('Added succesfully!', ' ', 'success'); </script>";
    }

    if($message == 3) {
      echo "<script> swal('Data update failed!', ' ', 'error'); </script>";
    }

    if($message == 4) {
      echo "<script> swal('Updated succesfully!', ' ', 'success'); </script>";
    }

    if($message == 5) {
      echo "<script> swal('Data deletion failed!', ' ', 'error'); </script>";
    }

    if($message == 6) {
      echo "<script> swal('Deleted succesfully!', ' ', 'success'); </script>";
    }
  ?>

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
                  <small>School Head</small>
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
      </div> <!-- navbar-custom -->
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
            <li><a href="school-yearv2.php"><i class="fa fa-circle"></i>School Year</a></li>
            <li><a href="sectionv2.php"><i class="fa fa-circle-o"></i>Section</a></li>
            <li><a href="requirementv2.php"><i class="fa fa-circle-o"></i>Requirement</a></li>
            <li><a href="paymentv2.php"><i class="fa fa-circle-o"></i>Payment</a></li>
            <li><a href="profilev2.php"><i class="fa fa-circle-o"></i>Profile</a></li>
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
        <li><a href="dashboard.php"  style="color: black;"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#" style="color: black;">Maintenance</a></li>
        <li class="active">School Year</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="margin-top: 3%">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border"></div> <!-- /.box-header -->
              <div class="box-body">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs" id="myTab">
                      <li class="active"><a href="#tab_1" data-toggle="tab">School Year</a></li>
                      <li><a href="#tab_2" data-toggle="tab">Grading</a></li>
                    </ul>

                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <div class="box">
                      <div class="box-header"></div>
                        <div class="box-body">
                          <div class="btn-group" style="margin-bottom: 3%">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModalOne"><i class="fa fa-plus"></i>Add</button>
                          </div>

                          <table id="datatable" name="datatable" class="table table-bordered table-striped">
                            <thead>
                             <?php
                                $query = "select s.tblSchoolYrId, s.tblSchoolYrYear, s.tblSchoolYrActive, s.tblSchoolYr_tblCurriculum, s.tblSchoolYrStart, c.tblCurriculumName FROM tblschoolyear s, tblcurriculum c WHERE s.tblSchoolYr_tblCurriculum = c.tblCurriculumId and s.tblSchoolYearFlag=1 group by s.tblSchoolYrYear asc";
                                $result = mysqli_query($con, $query);
                                ?>
                              <tr>
                                <th hidden></th>
                                <th hidden>Curriculum Id</th>
                                <th>Start of Year</th>
                                <th>School Year</th>
                                <th>Curriculum Name</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>

                            <tbody>
                              <?php
                                  while($row = mysqli_fetch_array($result))
                                  {
                                  ?>
                              <tr>
                                <td hidden><?php echo $row['tblSchoolYrId'] ?></td>
                                <td hidden><?php echo $row['tblSchoolYr_tblCurriculum'] ?></td>
                                <td style="width: 100px"><?php echo $row['tblSchoolYrStart'] ?></td>
                                <td style="width: 100px"><?php echo$row['tblSchoolYrYear'] ?></td>
                                <td style="width: 100px"><?php echo$row['tblCurriculumName'] ?></td>
                                <td style="width: 100px"><?php echo $row['tblSchoolYrActive'] ?></td>
                                <td style="width: 50px"><input type='button' class='btn   btn-info' value='View Curriculum'>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#updateModalOne"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModalOne"><i class="fa fa-trash"></i></button></td>
                              </tr>
                                <?php } ?>
                            </tbody>
                          </table>
                      </div> <!-- box body -->
                    </div> <!-- box -->
                    <!-- Modal starts here-->
                    <div class="modal fade" id="addModalOne" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title" style="font-style: bold">Add School Year</h3>
                          </div>

                          <form data-toggle="validator" role="form" method="post" action="saveSchoolYear.php" name="addSchoolYr" id="addSchoolYr">
                            <div class="modal-body inline">
                              <div class="form-group" style="margin-top: 5%">
                                  <label class="col-sm-4" style="text-align: right">Start of school year</label>
                                  <div class="col-sm-7 selectContainer">
                                    <div class="input-group" style="width: 100%">
                                    <input type="text" class="form-control" id="txtAddSy" name="txtAddSy" maxlength="4">
                                    </div>
                                  </div>
                              </div>

                              <div class="form-group" style="margin-top: 15%">
                                <label class="col-sm-4" style="text-align: right">Curriculum</label>
                                  <div class="col-sm-7 selectContainer">
                                    <div class="input-group" style="width: 100%">
                                      <select class="form-control choose" name="selAddSyCurr" id="selAddSyCurr">
                                        <option disabled="disabled" selected="selected">--SELECT CURRICULUM--</option>
                                          <?php
                                          $query = "select tblCurriculumId, tblCurriculumName from tblcurriculum where tblCurriculumFlag=1";
                                          $result = mysqli_query($con, $query);
                                          while($row = mysqli_fetch_array($result))
                                          {
                                            ?>
                                        <option value="<?php echo $row['tblCurriculumId'] ?>"><?php echo $row['tblCurriculumName'] ?></option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                  </div>
                              </div>
                            </div> <!-- modal-body inline-->

                            <div class="modal-footer" style="margin-top: 10%">
                              <button type="submit" class="btn btn-info" name="btnAddSy" id="btnAddSy">Save</button>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </form>
                        </div> <!--modal content add modal-->

                      </div> <!--modal dialog add modal -->
                    </div> <!--modal fade-->

                    <div class="modal fade" id="updateModalOne" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title" style="font-style: bold">Update School Year</h3>
                          </div>

                          <form data-toggle="validation" role="form" method="post" action="updateSchoolYear.php" name="UpdSchoolYr" id="UpdSchoolYr">
                            <div class="modal-body">
                              <div class="form-group">
                                <div>
                                  <input type="hidden" id="txtUpdSyId" name="txtUpdSyId">
                                  <input type="hidden" id="txtUpdSyCurrId" name="txtUpdSyCurrId">
                                </div>
                                <label class="col-sm-4 control-label" for="textinput" style="text-align: right" >School Year</label>
                                <div class="col-sm-7 selectContainer">
                                  <input type="text" placeholder="S.Y." name="txtUpdSyName" id="txtUpdSyName" class="form-control" disabled>
                                </div>
                              </div>

                              <div class="form-group" style="margin-top: 10%">
                                  <label class="col-sm-4 control-label" for="textinput" style="text-align: right" >Start of school year</label>
                                  <div class="col-sm-7 selectContainer">
                                    <input type="text" name="txtUpdSyYear" id="txtUpdSyYear" class="form-control" maxlength="4">
                                  </div>
                              </div>

                              <div class="form-group" style="margin-top: 20%">
                                <label class="col-sm-4" style="text-align: right">Curriculum</label>
                                <div class="col-sm-7 selectContainer">
                                  <select class="form-control choose" style="width: 100%;" name="selUpdSyCurr" id="selUpdSyCurr">
                                    <option selected="selected">--SELECT CURRICULUM--</option>
                                      <?php
                                      $query = "select tblCurriculumId, tblCurriculumName from tblcurriculum where tblCurriculumFlag=1";
                                      $result = mysqli_query($con, $query);
                                      while($row = mysqli_fetch_array($result))
                                      {
                                        ?>
                                    <option value="<?php echo $row['tblCurriculumName'] ?>"><?php echo $row['tblCurriculumName'] ?></option>
                                      <?php } ?>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group" style="margin-top: 30%">
                                <label class="col-sm-4" style="text-align: right">Status</label>
                                <div class="popup col-sm-7 selectContainer">
                                  <select class="form-control choose" style="width: 100%;" name="selUpdSyAct" id="selUpdSyAct" onmouseover="fn1()">
                                    <option value="selected" selected>--Select--</option>
                                    <?php
                                      $query ="select distinct tblSchoolYrActive from tblschoolyear where tblSchoolYearFlag = 1";
                                      $result = mysqli_query($con, $query);
                                      while($row = mysqli_fetch_array($result)){
                                    ?>
                                    <option value="<?php echo $row['tblSchoolYrActive'] ?>"><?php echo $row['tblSchoolYrActive'] ?></option>
                                      <?php } ?>
                                  </select>
                                  <span class="popuptext" id="pop">There are no active school year</span>
                                </div>
                              </div>
                          </div> <!-- modal body update modal -->

                          <div class="modal-footer" style="margin-top: 10%">
                            <button type="submit" class="btn btn-info" name="btnUpdReq" id="btnUpdReq">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          </div>
                          </form>
                        </div> <!-- modal container uodate modal-->

                      </div> <!-- modal dialog update modal -->
                    </div> <!--modal fade update modal -->

                    <div class="modal fade" id="deleteModalOne" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title" style="font-style: bold">Delete School Year</h3>
                          </div>

                          <form action="deleteSchoolYear.php" method="post">
                            <div class="modal-body">
                              <div class="box-body table-responsive no-padding"   style="margin-top: 2%">
                                <div><input type="hidden" name="txtDelSyId" id="txtDelSyId"/></div>
                                  <div>
                                    <h4 align="center" style="margin-top: 5%">Are you sure you want to delete this record?</h4>
                                  </div>
                              </div>
                            </div>

                            <div class="modal-footer" style="margin-top: 5%; float: center">
                              <button type="submit" class="btn btn-danger" name="btnDelSy" id="btnDelSy">Delete</button>
                              <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                            </div>
                          </form>
                        </div> <!-- modal content -->

                      </div> <!-- modal dialog delete modal -->
                    </div> <!-- modal fade delete modal end-->

                      <?php
                        if(isset($_GET['msg']))
                        {
                          $msg = $_GET['msg'];
                          if ($msg == 1)
                          {
                          echo "<script> swal('Data already exist!', ' ', 'info'); </script>";
                          }else if ($msg == 2)
                          {
                          echo "<script> swal('Data succesfully updated!', ' ', 'info'); </script>";
                          }
                        }
                      ?>

                </div>
                <!-- /.tab-pane tab 1-->
           
              


              <div class="tab-pane fade" id="tab_2">
                        <div class="box">

                          <div class="box-body">

                              <table id="datatable1" class="table table-bordered table-striped" style="margin-top: 3%">
                               <thead>
                                <tr>
                                  <th>Grading Period</th>
                                  <th>Date of Start</th>
                                  <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <td>First Grading</td>
                                  <td>07/9/2017</td>
                                  <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#updateModalTwo"><i class="fa fa-edit"></i></button></td>
                                </tr>
                                </tbody>
                              </table>
                          </div>
                        </div>
              </div>

                <div class="modal fade" id="updateModalTwo" role="dialog">
                            <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h3 class="modal-title" style="font-style: bold">Edit Grading Period</h3>
                                </div>

                                  <form autocomplete="off" method="post" >
                                    <div class="modal-body">
                                      <div class="form-group"  style="margin-top: 5%">
                                        <div><input type="hidden"></div>
                                        <label class="col-sm-4 control-label" for="textinput" style="text-align: right">Grading Period</label>
                                        <div class="col-sm-7 selectContainer">
                                          <input type="text" class="form-control" style="text-transform:uppercase ;" disabled="disabled">
                                        </div>
                                      </div>

                                      <div class="form-group"  style="margin-top: 15%">
                                        <div><input type="hidden"></div>
                                        <label class="col-sm-4 control-label" for="textinput" style="text-align: right">Date of Start</label>
                                        <div class="col-sm-7 selectContainer">
                                          <input type="date" class="form-control">
                                        </div>
                                      </div>


                                      <div class="modal-footer" style="margin-top: 25%">
                                        <button type="submit" class="btn btn-info" name="btnUpdDiv" id="btnUpdDiv">Save</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </form>
                              </div> <!-- modal content -->
                            </div> <!-- modal dialog -->
                          </div> <!-- modal fade -->


                 </div>
              <!-- /.tab-content -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- box body -->
           </div>
           <!-- box box-default -->
          </div>
          <!-- col-md-12 -->
        </div>
        <!-- row -->
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
            <ul class="control-sidebar-menu"></ul>
            <!-- /.control-sidebar-menu -->
            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu"></ul>
            <!-- /.control-sidebar-menu -->
          </div> <!-- /.tab-pane control side bar-->
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
        </div> <!-- tab content -->
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

    <script src="js/select2.full.min.js"></script>

      <script>
        $(function () {
          $("#datatable").DataTable();
          $("#datatable1").DataTable();
          $("#datatable2").DataTable();
          $("#datatable3").DataTable();
        });

      </script>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

        <script>
          $(document).ready(function() {
            $('#addSchoolYr').bootstrapValidator({
              feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                  txtAddSy: {
                    validators: {
                      stringLength: {
                        min: 4,
                        max: 4,
                        message: 'Please enter 4 numeric characters only'
                      },
                      regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'Please enter numeric characters only.'
                      },
                      notEmpty: {
                        message: 'School year is required'
                      }
                    }
                  },
                  selAddSyCurr: {
                    validators: {
                      notEmpty: {
                          message: 'Curriculum name is required.'
                      },
                    }
                  },
                }
              })
                  .on('success.form.bv', function (e) {
                // Prevent form submission
                  e.preventDefault();
                  });

            $('#addModalOne')
               .on('shown.bs.modal', function () {
                   $('#addSchoolYr').find().focus();
                })
                .on('hidden.bs.modal', function () {
                    $('#addSchoolYr').bootstrapValidator('resetForm', true);
                });
          });
        </script>
        <!--UPDATE VALIDATOR-->
          <script>
          $(document).ready(function() {
            $('#UpdSchoolYr').bootstrapValidator({
              feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
              },
              fields: {
                txtUpdSyYear: {
                  validators: {
                    stringLength: {
                        min: 4,
                        max: 4,
                        message: 'Please enter 4 numeric characters only'
                    },
                    regexp: {
                      regexp: /^[0-9]+$/,
                      message: 'Please enter numeric characters only.'
                    },
                    notEmpty: {
                      message: 'School year is required'
                    }
                  }
                },
              }
            })
              .on('success.form.bv', function (e) {
              // Prevent form submission
              e.preventDefault();
              });

            $('#updateModalOne')
               .on('shown.bs.modal', function () {
                   $('#UpdSchoolYr').find().focus();
                })
                .on('hidden.bs.modal', function () {
                    $('#UpdSchoolYr').bootstrapValidator('resetForm', true);
                });
          });
        </script>
      </body>
</html>
