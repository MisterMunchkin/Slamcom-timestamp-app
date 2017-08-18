
<?php
include("AdminLoginVerification.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>



    <!-- Bootstrap Core CSS -->
    <link href="AdminPageBootStrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="AdminPageBootStrap/css/sb-admin.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="AdminPageBootStrap/css/plugins/morris.css" rel="stylesheet">

    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="AdminPageBootStrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">

    <link href="munchkinBootStrap/CSS/userCSS.css" rel="stylesheet" type="text/css">
    <link href="mrjsontable/css/mrjsontable.css" rel="stylesheet" />

    <link href="bootstrapmonthPicker/css/style.css" rel="stylesheet">

    <link href= "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet">
    <link href= "https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css" rel = "stylesheet">
    <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet"/>

          <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
          <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-resource.min.js"></script>
          <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
          <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
          <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>
          <script src = "https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>



    <script language="javascript">
      angular
        .module("tableApplication", ['ngMaterial'])
        .controller('tabController', tabController);

      function tabController($scope){
        $scope.data = {
          selectedIndex: 0,
          bottom: false,
          firstLabel: "of All Time",
          secondLabel: "Monthly",
          thirdLabel: "Weekly"

        };
        $scope.next = function(){
          $scope.data.selectedIndex = Math.min($scope.data.selectedIndex + 1, 2);

        }
        $scope.previous = function(){
          $scope.data.selectedIndex = Math.max($scope.data.selectedIndex - 1, 0);
        }
      }

    </script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="AdminDashboard.php">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php
                                                                                                                $firstname = $_SESSION['Adminfirstname'];
                                                                                                                $lastname = $_SESSION['Adminlastname'];
                                                                                                                echo "$firstname $lastname";
                                                                                                            ?></small> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="AdminLogout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="AdminDashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="AdminHomePage.php"><i class="fa fa-fw fa-edit"></i>Employees</a>
                    </li>
                    <!--
                    <li>
                      <a href="deletedEmployees.php"><i class="fa fa-fw fa-dashboard"></i> Deleted Employees</a>
                    </li>
                  -->
                    <li>
                        <a href="AdminPageBootStrap/charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="AdminPageBootStrap/tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="AdminPageBootStrap/forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="AdminPageBootStrap/bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="AdminPageBootStrap/bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div  ng-app = "tableApplication" id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                             <?php
                                                $firstname = $_SESSION['firstname'];
                                                $lastname = $_SESSION['lastname'];
                                                echo "$firstname";
                                            ?>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            <div class="container-fluid">

                <div>
                    <div id="tabContainer" ng-controller = "tabController as ctrl" ng-cloak >
                        <!--<div id="ContentContainer">-->
                            <md-content layout = "column" layout-fill>
                                <md-tabs layout-fill class = "md-accent" md-selected = "data.selectedIndex" 
                                    md-align-tabs = "{{data.bottom ? 'bottom' : 'top'}}">
                                    <md-tab id = "tab1">
                                        <md-tab-label>{{data.firstLabel}}</md-tab-label>
                                        <md-tab-body>
                                            <div id="HoursContainer">
                                                <table id="UserHoursTable" class="table table-hover table-striped" cellspacing="0" width="100%" height="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Day</th>
                                                            <th>Time In</th>
                                                            <th>Time Out</th>
                                                            <th>Number of hours</th>
                                                            <th>user ID</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="UserHoursTableBody">
                                                    <?php

                                                        include("DBconnect.php");

                                                        $userID = $_SESSION["employeeID"];

                                                        $query = "SELECT * FROM `timetable` WHERE `userID` = '$userID'";

                                                        $result = mysqli_query($conn,$query);
                                                        // echo "$userID";

                                                        $x = 0;
                                                        while($row = mysqli_fetch_array($result)){
                                                        // $interval = date_diff($row[0],$row[1]);
                                                            $x++;
                                                            echo '<tr id='.$row[0].'>
                                                                    <td>'.$x.'</td>
                                                                    <td>'.$row[0].'</td>
                                                                    <td>'.$row[1].'</td>
                                                                    <td>'.$row[2].'</td>
                                                                    <td>'.$row[3].'</td>
                                                                    </tr>';
                                                        }
                                                    ?>
                                                    </tbody>
                                                    <tfoot>
                                                    </tfoot>
                                                </table>
                                                <div class="form-group">
                                                    <span>Total Hours : </span> <input class="form-control" id="totalHours"  name="txt_totalHours" readonly="readonly">
                                                </div>
                                            </div>
                                        </md-tab-body>
                                    </md-tab>
                                    <md-tab id = "tab2">
                                        <md-tab-label>{{data.secondLabel}}</md-tab-label>
                                        <md-tab-body>
                                            <div id="MonthContainer">
                                                <!--<input class="date-own form-control" style="width: 300px;" type="text">
                                                <div class="month-picker">
                                                    <a href="index.html" class="month-picker-nav" title="Not implemented">&lt;</a>
                                                    <fieldset class="month-picker-fieldset">
                                                    <input type="radio" name="month" value="jan" id="jan">
                                                    <label for="jan" class="month-picker-label">Jan</label>
                                                    <input type="radio" name="month" value="feb" id="feb">
                                                    <label for="feb" class="month-picker-label">Feb</label>
                                                    <input type="radio" name="month" value="mar" id="mar">
                                                    <label for="mar" class="month-picker-label">Mar</label>
                                                    <input type="radio" name="month" value="apr" id="apr">
                                                    <label for="apr" class="month-picker-label">Apr</label>
                                                    <input type="radio" name="month" value="may" id="may">
                                                    <label for="may" class="month-picker-label">May</label>
                                                    <input type="radio" name="month" value="jun" id="jun">
                                                    <label for="jun" class="month-picker-label">Jun</label>
                                                    <input type="radio" name="month" value="jul" id="jul">
                                                    <label for="jul" class="month-picker-label">Jul</label>
                                                    <input type="radio" name="month" value="aug" id="aug">
                                                    <label for="aug" class="month-picker-label">Aug</label>
                                                    <input type="radio" name="month" value="sep" id="sep" checked>
                                                    <label for="sep" class="month-picker-label">Sep</label>
                                                    <input type="radio" name="month" value="oct" id="oct">
                                                    <label for="oct" class="month-picker-label">Oct</label>
                                                    <input type="radio" name="month" value="nov" id="nov">
                                                    <label for="nov" class="month-picker-label">Nov</label>
                                                    <input type="radio" name="month" value="dec" id="dec">
                                                    <label for="dec" class="month-picker-label">Dec</label>
                                                    </fieldset>
                                                    <a href="index.html" class="month-picker-nav" title="Not implemented">&gt;</a>
                                                </div>
                                                                -->                                                 
                                                <p id="DatePicker">
                                                    <input id = "startDate" type="text" class="date start" placeholder="start date" />                                                 
                                                    <input id = "endDate" type="text" class="date end" placeholder="end date"/>
                                                    <button id="submitDateInterval" class="btn  btn-primary">submit</button>
                                                </p>

                                                <table id="UserMonthTable" class="table table-hover table-striped" cellspacing="0" width="100%" height="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Day</th>
                                                            <th>Time In</th>
                                                            <th>Time Out</th>
                                                            <th>Number of hours</th>
                                                            <th>user ID</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="UserMonthTableBody">
                                                    <?php // add table shit here?>
                                                    </tbody>
                                                    <tfoot>
                                                    </tfoot>
                                                </table>
                                                <div class="form-group">
                                                    <span>Total Hours : </span> <input class="form-control" id="totalHours"  name="txt_totalHours" readonly="readonly">
                                                </div>
                                            </div>
                                        </md-tab-body>
                                    </md-tab>
                                </md-tabs>
                            </md-content>
                        <!--</div>-->
                    </div>
                            
                </div>
            </div>
            <!-- /.container-fluid -->





        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
                                         

      <!-- jQuery -->
      <script src="HomePageBootStrap/vendor/jquery/jquery.min.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script type="text/javascript" charset="utf-8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
    <!--<script src="//code.jquery.com/jquery-1.12.4.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    
    <script type="text/javascript" src="datepair.js"></script>
    <script type="text/javascript" src="jquery.datepair.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="AdminPageBootStrap/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>



    <script>
        jQuery(document).ready(function(){

            var hoursTable = $("#UserHoursTable").DataTable();
            var monthsTable = $("#UserMonthTable").DataTable();

            /*$("#jan").on("click",function(){
                
                var month = 1;
                MonthAjax(month);
            });
            $("#aug").on("click",function(){
                var month = 8;
                MonthAjax(month);
            });
            */
            $("#DatePicker .date").datepicker({
                'format': 'yyyy-m-d',
                'autoclose': true
            });
            var datePicker = document.getElementById('DatePicker');
            var datePair = new Datepair(datePicker);

            $('.date-own').datepicker({
                minViewMode: 2,
                format: 'yyyy'
            });
            
            $("#submitDateInterval").on("click",function(){
                var startDate = $("#startDate").val();
                var endDate = $("#endDate").val();

                var startYear = startDate.substring(0,4);
                var startMonth = startDate.substring()
            });
            function MonthAjax(data){
               
                $.ajax({
                    url: "exactMonthTableLoader.php",
                    method: "POST",
                    data: {month : data},
                    success: function(data){
                        alert("i like kittens");
                        alert(data);
                    },
                    error: function(data){
                        alert(data);
                    }
                });
            }
        });

    </script>



    <!-- Morris Charts JavaScript -->
    <script src="AdminPageBootStrap/js/plugins/morris/raphael.min.js"></script>
    <script src="AdminPageBootStrap/js/plugins/morris/morris.min.js"></script>
    <script src="AdminPageBootStrap/js/plugins/morris/morris-data.js"></script>



</body>

</html>
