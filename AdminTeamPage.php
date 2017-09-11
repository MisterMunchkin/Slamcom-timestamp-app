
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

    <link href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet">

    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="WeeklySchedulerv2/dist/jquery.schedule.css">


    <link rel="stylesheet" href="munchkinBootStrap/CSS/userCSS.css">
    <!--this link won't work and I don't know why -->


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
        .FAB{
          position: fixed;
          bottom:0;
          right:0;
        }
        #page-wrapper{
            width: 89%;
        }
        .modal-dialog{
            width: 90%;
        }
    </style>

</head>

<body>

    <div id="wrapper">


        <?php include("sideBar.php"); ?>

        <div  ng-app = "tableApplication" id="page-wrapper">

            <div class="container-fluid">

                <!-- /.row -->
            </div>
            <div class = "Column buttonSize">
                  <md-button id="RButton" flex="15" class="md-raised md-primary">refresh</md-button>
            </div>

                <div id="tabContainer" ng-controller = "tabController as ctrl" ng-cloak style="position: relative;">

                    <md-content layout = "column" layout-fill>
                        <md-tabs layout-fill class = "md-accent" md-selected = "data.selectedIndex"
                            md-align-tabs = "{{data.bottom ? 'bottom' : 'top'}}">
                            <md-tab id = "tab1">
                                <md-tab-label>{{data.firstLabel}}</md-tab-label>
                                <md-tab-body>
                                    <div class="table-responsive">
                                        <table id="TeamTable" class="table table-hover table-striped" cellspacing="0" width="100%" >
                                            <thead>
                                                <tr>
                                                    <th>Team ID</th>
                                                    <th>Team Name</th>
                                                    <th>Team Description</th>

                                                    <th>Delete/edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <!-- turn this into a form so we can serialize and pass to ajax POST-->
                                                <?php
                                                  include("DBconnect.php");
                                                  $sql = "SELECT * FROM `Team` WHERE 1";

                                                  $result = mysqli_query($conn, $sql);

                                                  if(mysqli_num_rows($result) > 0){
                                                      $data_array = array();

                                                      while($row = mysqli_fetch_array($result)){
                                                          /*
                                                          $data_array[] = array(
                                                              'TeamID' => $row['TeamID'],
                                                              'TeamName' => $row['TeamName'],
                                                              'TeamDesc' => $row['TeamDesc']
                                                          );
                                                          */
                                                          echo '<tr id='.$row['TeamID'].'>
                                                                  <td>'.$row['TeamID'].'</td>
                                                                  <td>'.$row['TeamName'].'</td>
                                                                  <td>'.$row['TeamDesc'].'</td>

                                                                  <td><button id="delTeambutton" type="button" class="btn btn-sm btn-danger">Delete</button>
                                                                      <button id="editTeambutton" type="button" class="btn btn-sm btn-warning">Edit</button></td>

                                                                  </tr>';
                                                      }
                                                      /*
                                                      $json = json_encode($data_array);
                                                      echo $json;
                                                      */
                                                  }else{
                                                    echo "no data";
                                                  }

                                                ?>

                                            </tbody>
                                        </table>
                                    </div>

                                </md-tab-body>
                            </md-tab>
                            <md-tab id = "tab2">
                                <md-tab-label>{{data.secondLabel}}</md-tab-label>
                                <md-tab-body>

                                </md-tab-body>
                            </md-tab>
                        </md-tabs>
                    </md-content>

                </div>

                <div ng-controller="FABCtrl as demo" class="FAB" ng-cloak>
                    <md-content>
                        <md-fab-speed-dial md-open="demo.isOpen"
                            md-direction="{{demo.selectedDirection}}"
                              ng-class="demo.selectedMode">
                              <md-fab-trigger>
                                <md-button id="addNewTeamTrigger" aria-label="menu" class="md-fab md-primary">
                                  <md-icon md-svg-src="img/icons/addIcon.svg"></md-icon>
                                </md-button>
                              </md-fab-trigger>

                        </md-fab-speed-dial>
                    </md-content>
                </div>

            <!-- /.container-fluid -->
            <button type="button" id="AddTeamModalButton" class="btn btn-info btn-lg" data-toggle="modal" data-target="#AddTeamModal" style="display: none">Open Modal</button>
            <div class="modal fade" id="AddTeamModal" role="dialog">
                <div class="modal-dialog">

                        <!-- Modal content modal to add team-->
                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                            </div>
                            <div class="modal-body">

                                  <div class="form-group">
                                    <h4>Team Name</h4>
                                      <input class="form-control" id="TeamName" placeholder="team name" name="txt_teamName" type="text" autofocus required>
                                  </div>
                                  <div class="form-group">
                                    <h4>Team Description</h4>
                                      <input class="form-control" id="TeamDesc" placeholder="team description" name="txt_teamDesc" type="text" required>
                                  </div>

                                  <div class = "Column buttonSize">
                                        <md-button id="submitNewTeam" flex="15" class="md-raised md-primary">submit</md-button>
                                  </div>
                            </div>
                            <div class="modal-footer">

                                <div class="form-group">

                                </div>
                                <button id="addTeamcloseButton" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                </div>
            </div>

            <button type="button" id="AddScheduleModalButton" class="btn btn-info btn-lg" data-toggle="modal" data-target="#AddScheduleModal" style="display: none">Open Modal</button>
            <div class="modal fade" id="AddScheduleModal" role="dialog">
                <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <!--<input id="teamNameText" class="form-control" readonly></input>-->
                                <div id="teamNameText">
                                </div>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                            </div>
                            <div class="modal-body">

                                
                                <div class = "Column buttonSize">
                                    <md-button id="submitEmployeeSchedule" flex="15" class="md-raised md-primary">submit</md-button>
                                </div>
                                <div id="schedule-demo" class="jqs-demo">

                                </div>

                            </div>


                            <div class="modal-footer">

                                <div class="form-group">

                                </div>
                                <button id="addTeamcloseButton" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                </div>
            </div>

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
            firstLabel: "Active Teams",
            secondLabel: "Inactive Teams",


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
        app.controller('FABCtrl', function(){
          this.topDirections = 'up';
          this.bottomDirections = 'down';

          this.isOpen = false;
          this.availableModes = 'md-fling';
          this.selectedMode = 'md-fling';
          this.availableDirections = 'up';
          this.selectedDirection = 'up';
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
            var TeamTable = $("#TeamTable").DataTable();

            $("#RButton").on("click", function(){
              //$("#nonActiveTable").load("deletedEmployees.php #nonActiveTable");
              window.location.reload();
            });

            $("#TeamTable tbody").on("click",'td',function(){
                if($(this).index() == 3){
                    return;
                }else{
                    var data = TeamTable.row($(this).parents('tr')).data();
                    $("#teamNameText").html("<h4>"+data[1]+"</h4>");
                    $("#AddScheduleModalButton").trigger("click");

                    $.ajax({
                        url: "loadScheduleBackground.php",
                        data: {TeamID: data[0]},
                        success: function(data){

                        },
                        error: function(data){

                        }
                    })

                    $("#submitEmployeeSchedule").on("click",function(){
                        alert($("#schedule-demo").jqs("export"));
                        var schedule = $("#schedule-demo").jqs("export");

                         $.ajax({
                            url: "insertScheduleBackground.php",
                            method: "POST",

                            data: {schedule: schedule,TeamID: data[0]},
                            success: function(response){
                                alert(response);
                            },
                            error: function(response){
                                alert(response);
                            }
                        });

                    })
                }
            });


            $("#schedule-demo").jqs({
                hour: 12
            });

            $("#addNewTeamTrigger").on("click", function(){
                $("#AddTeamModalButton").trigger("click");

            });
            $("#submitNewTeam").on("click", function(){
                $.ajax({
                    method: 'POST',
                    data: {txt_teamName : $("#TeamName").val(),
                           txt_teamDesc : $("#TeamDesc").val()
                    },
                    url: 'addTeamBackground.php',
                    success: function(data){
                        alert(data);
                    },
                    error: function(data){
                        alert(data);
                    }
                })
                $("#addTeamcloseButton").trigger("click");
            });


            //initialization of datepickers
            $("#startDate").datepicker({dateFormat: 'yy-mm-dd'});
            $("#endDate").datepicker({dateFormat: 'yy-mm-dd'});

            $("#submitDateInterval").on("click",function(){
                var startDate = $("#startDate").val();
                var endDate = $("#endDate").val();


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
                      //  alert(data);
                        var response = $.parseJSON(data);
                        populateUserTable(response);

                        $("#UserMonthTable").DataTable();
                      //  getTotalHours(response);
                        //$("#totalHours").val(getTotalHours(response));
                    },
                    error: function(data){
                        alert(data);
                    }
                });
            }
        });

        //populates after start date and end date php pass
        function populateUserTable(response){
            var totalHours = 0;
            $.each(response, function(i, item){
                var $tr = $('<tr>').append(
                    $('<td>').text(item.timeIn),
                    $('<td>').text(item.timeOut),
                    $('<td>').html("<p class='totalHour'>"+item.numberOfHours+"</p>")
                );

                $('#UserMonthTable tbody').append($tr);
            });
            var t1 = "00:00";
            var mins = 0;
            var hours = 0;
            var numrow = 0;
            $(".totalHour").each(function(){

                numrow++;
                t1 = t1.split(':');
                var t2 = $(this).text().split(':');
                mins = parseInt(t1[1]) + parseInt(t2[1]);
                alert(t1[1]);
                var minhrs = Math.floor(parseInt(mins/60));
                hours = Number(t1[0]) + Number(t2[0]) + minhrs;
                mins = mins % 60;
                t1 = padTime(hours) + ':' + padTime(mins);
                console.log(t1);

            });
            alert(t1);
            $("#totalHours").val(t1);
        }
        function padTime(time){
            return (time < 10)? '0' + time : time;
        }
    </script>




</body>

</html>
