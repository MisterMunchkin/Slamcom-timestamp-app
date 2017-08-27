
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

   <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">-->
    <link rel = "stylesheet" href= "https://fonts.googleapis.com/icon?family=Material+Icons" >
    <link rel = "stylesheet" href= "https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css" >
    <!-- Bootstrap Core CSS -->
    <link href="AdminPageBootStrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="AdminPageBootStrap/css/sb-admin.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">

   
    <!-- Custom Fonts -->
    <link href="AdminPageBootStrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">

    <link href="munchkinBootStrap/CSS/userCSS.css" rel="stylesheet" type="text/css">

 
    

    <link href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet">
 
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="WeeklySchedulerv2/dist/jquery.schedule.css">
    
     

    
    

    <style>
        .datepickerdemo md-content{
            display: flex;
        
        }
        .datepickerdemo .validation-messages{
            font-size: 11px;
            color: darkred;
            margin: 10px 0 0 25px;
        }
        .buttondemoBasicUsage section {
            background: #f7f7f7;
            border-radius: 3px;
            text-align: center;
            margin: 1em;
            position: relative !important;
            padding-bottom: 10px; 
        }
        .buttondemoBasicUsage md-content {
            margin-right: 7px; 
        }
        .buttondemoBasicUsage section .md-button {
            margin-top: 16px;
            margin-bottom: 16px; 
        }
        .buttondemoBasicUsage .label {
            position: absolute;
            bottom: 5px;
            left: 7px;
            font-size: 14px;
            opacity: 0.54; 
        }
        .buttonSize{
            width:20%;
     
        }
        #startDATE {
            width: 48%;
        
        }
        #endDATE{
            width: 38%;
      
        }
        .Row{
            display: table;

        }
        .Column{
            display: table-cell;
        }
    </style>
    
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
                    <li>
                        <a href="AdminDashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="AdminHomePage.php"><i class="fa fa-fw fa-edit"></i>Employees</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-edit"></i>Admins</a>
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
                       
                    </div>
                </div>
                <!-- /.row -->
            </div>

          
                <div id="tabContainer" ng-controller = "tabController as ctrl" ng-cloak style="position: relative;">
                   
                    <md-content layout = "column" layout-fill>
                        <md-tabs layout-fill class = "md-accent" md-selected = "data.selectedIndex" 
                            md-align-tabs = "{{data.bottom ? 'bottom' : 'top'}}">
                            <md-tab id = "tab1">
                                <md-tab-label>{{data.firstLabel}}</md-tab-label>
                                <md-tab-body>
                                    <div class = "Column buttonSize">
                                                    <md-button id="submitEmployeeSchedule" flex="15" class="md-raised md-primary">submit</md-button>
                                            </div>
                                    <div id="schedule-demo" class="jqs-demo">
                                        
                                    </div>
                                </md-tab-body>
                            </md-tab>
                            <md-tab id = "tab2">
                                <md-tab-label>{{data.secondLabel}}</md-tab-label>
                                <md-tab-body>
                                    <div id="MonthContainer">
                                        <div class="Row">
                                            <!--<div id="startDATE" class="Column datepickerdemo" ng-controller = "StartdateController as ctrl"
                                            layout = "column" ng-cloak >
                                                <md-content>
                                                    <h4>start date</h4>
                                                    <md-datepicker id= "STARTDate"
                                                    ng-model="ctrl.startDate"                                                
                                                    ng-placeholder="start date"
                                                    required
                                                    md-open-on-focus></md-datepicker>
                                                </md-content>                                
                                            </div>-->
                                            <div class = "Column">
                                                <input type="text" id="startDate" placeholder="start date">
                                            </div>
                                           <!-- <div id="endDATE" class=" Column datepickerdemo" ng-controller = "EnddateController as ctrl"
                                            layout = "column" ng-cloak >
                                                <md-content>
                                                    <h4>end date  </h4>
                                                    <md-datepicker id = "ENDDate" 
                                                    ng-model="ctrl.endDate"
                                                    ng-placeholder="end date"
                                                    required
                                                    ng-change="onclick()"
                                                    md-open-on-focus></md-datepicker>                                                 
                                                </md-content>
                                                
                                            </div>-->
                                            <div class = "Column">
                                                <input type="text" id="endDate" placeholder="end date">
                                            </div>
                                            <div class = "Column buttonSize">
                                                    <md-button id="submitDateInterval" flex="15" class="md-raised md-primary">submit</md-button>
                                            </div>
                                        </div>
                                        <table id="UserMonthTable" class="table table-hover table-striped" cellspacing="0" width="100%" height="100%">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Time In</th>
                                                    <th>Time Out</th>
                                                    <th>Number of hours</th>
                                                    
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
                   
                </div>
                            
               
        
            <!-- /.container-fluid -->





        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
                                         

      <!-- jQuery -->
    <!--  <script src="HomePageBootStrap/vendor/jquery/jquery.min.js"></script> -->
     <!-- <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="WeeklySchedulerv2/dist/jquery.schedule.js"></script>

        

        <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
          <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-resource.min.js"></script>
          <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
          <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
          <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>
          <script src = "https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>

        

      <script type="text/javascript" charset="utf-8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
    
                                    
   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  -->
  
    
    
    
   
  

    
    

    <!-- Bootstrap Core JavaScript -->
    <script src="AdminPageBootStrap/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>



    <script>
        
         var app = angular.module("tableApplication", ['ngMaterial', 'ngMessages']);
       var STARTDate;
       var ENDDate;
        app.controller('tabController', function($scope){
            $scope.data = {
            selectedIndex: 0,
            bottom: false,
            firstLabel: "Edit Employee schedule",
            secondLabel: "Employee log",
          

            };
            $scope.next = function(){
                $scope.data.selectedIndex = Math.min($scope.data.selectedIndex + 1, 2);

            }
            $scope.previous = function(){
                $scope.data.selectedIndex = Math.max($scope.data.selectedIndex - 1, 0);
            }

            
        });
        app.controller('StartdateController', function($scope){

          
         //  STARTDate = moment(this.startDate).format('YYYY-MM-DD');
          
        });
        
        app.controller('EnddateController', function($scope){

        
          //  ENDDate = moment(this.endDate).format('YYYY-MM-DD');
        });
        
        app.directive('mdDatepicker', function(){
            return{
                link: function(scope, element){
                    var controller = element.controller('mdDatepicker');
                    
                    var event = {
                        target: document.body
                    };
                    var input = element.find('input');

                    input.on('focus', function(e){
                        scope.$apply(function(){
                            controller.openCalendarPane(event);
                        });
                    });
                    input.on('click', function(e){
                        e.stopPropagation();
                    });
                }
            };
        });

        jQuery(document).ready(function(){

            var hoursTable = $("#UserHoursTable").DataTable();
        
           
            $("#schedule-demo").jqs({
               // hour: 12
            });

            $("#submitEmployeeSchedule").on("click",function(){
                alert($("#schedule-demo").jqs("export"));
                var schedule = $("#schedule-demo").jqs("export");

                 $.ajax({
                    url: "",
                    method: "POST",
          
                    data: {schedule: schedule},
                    success: function(data){
                      
                    },
                    error: function(data){
             
                    }
                });
            })

            $("#startDate").datepicker({dateFormat: 'yy-mm-dd'});
            $("#endDate").datepicker({dateFormat: 'yy-mm-dd'});

            $("#submitDateInterval").on("click",function(){
                var startDate = $("#startDate").val();
                var endDate = $("#endDate").val();
                
               
                alert(startDate);
                alert(endDate);
                

                MonthAjax(startDate,endDate);
            });

            //ajax on history log
            function MonthAjax(startDate, endDate){
               
                $.ajax({
                    url: "exactMonthTableLoader.php",
                    method: "POST",
          
                    data: {startDate : startDate,
                            endDate : endDate},
                    success: function(data){
                        alert(data);
                      
                        var response = $.parseJSON(data);
                        populateUserTable(response);

                        $("#UserMonthTable").DataTable();

                        $("#totalHours").val(getTotalHours(response));
                    },
                    error: function(data){
                        alert(data);
                    }
                });
            }
        });

        
        function getTotalHours(response){
            var len = response.length;
            var time_In;
            var time_Out;

            var SS;
            var MM;
            var HH;
            var diff;

            var totalHH = 0;
            var totalMM = 0;

            var totalformatted = 0;

            var ms;
            if(len > 0){
                for(var i = 0; i < len && (response[i].timeIn && response[i].timeOut); i++){
                    ms = moment(response[i].timeOut, "YYYY-MM-DD HH:mm:ss").diff(moment(response[i].timeIn, "YYYY-MM-DD HH:mm:ss"));
                    var d = moment.duration(ms);
                }
                totalformatted = ((totalHH < 10) ? ("0" + totalHH) : totalHH) + ":" + ((totalMM < 10) ? ("0" + totalMM)  : totalMM);
            }else{
                totalformatted = "00:00";
            }
            return totalformatted;
        }

        //populates after start date and end date php pass
        function populateUserTable(response){
            var totalHours = 0;
            $.each(response, function(i, item){
                var $tr = $('<tr>').append(
                    $('<td>').text(item.timeIn),
                    $('<td>').text(item.timeOut),
                    $('<td>').text(item.numberOfHours)
                );
                //totalHours += new Date(Date.parse(item.numberOfHours));
                //console.log(totalHours);
               // $("#totalHours").val(item.totaHours);
               // alert(item.totalHours);
                $('#UserMonthTable tbody').append($tr);
            });
            //$("#totalHours").val(totalHours);
           // console.log(totalHours);
        }
    </script>




</body>

</html>
