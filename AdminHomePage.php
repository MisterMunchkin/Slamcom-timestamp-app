
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

    <!-- Custom Fonts -->
    <link href="AdminPageBootStrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">

    <link href="munchkinBootStrap/CSS/userCSS.css" rel="stylesheet" type="text/css">
    <link href="mrjsontable/css/mrjsontable.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="index.html">SB Admin</a>
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
                                                                                                                $firstname = $_SESSION['firstname'];
                                                                                                                $lastname = $_SESSION['lastname'];
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
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
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

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome, <?php 
                                                $name = $_SESSION['firstname'];
                                                echo "$name";
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
                <div class="col-lg-6">

                    <h2>Agents</h2>
                    <div class="table-responsive">
                        <table id="UsersTable" class="table table-hover table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Email add</th>
                                </tr>
                            </thead>
                            <tbody>
                            <!-- turn this into a form so we can serialize and pass to ajax POST-->
                                <?php
                                    include("DBconnect.php");
                                    $query = 'SELECT `userID`, `firstname`, `lastname`, `emailadd` FROM `user` WHERE 1';

                                    $result = mysqli_query($conn,$query);

                                    while($row=mysqli_fetch_array($result)){
                                        echo '<tr id='.$row[0].'>
                                                <td>'.$row[0].'</td>
                                                <td>'.$row[1].'</td>
                                                <td>'.$row[2].'</td>
                                                <td>'.$row[3].'</td>
                                                </tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
             <button type="button" id="userbuttonRow" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="display: none">Open Modal</button>
                
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                      
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 id="UserModalName" class="modal-title">Modal Header</h4>
                                </div>
                                <div id="ContentContainer" class="modal-body">
                                    <div class="dropdown" style="float:right;">
                                        <button class="dropbtn">Sort By</button>
                                        <div class="dropdown-content">
                                            <a id="sortByMonth" href="#">Month</a>
                                            <a id="sortByYear" href="#">Year</a>
                                            <a id="sortByAllTime" href="#">of All time</a>
                                        </div>
                                    </div>
                                    <div id="userHoursTableContainer" class="table-responsive" style="display: none">
                               
                                        <table id="UserHoursTable" class="table table-hover table-striped" cellspacing="0" width="100%" style="display: none">
                                                <tr>
                                                    <th>Day</th>
                                                    <th>Time In</th>
                                                    <th>Time Out</th>
                                                    <th>Number of hours</th>
                                                </tr>
                                                <tbody id="UserHoursTableBody">
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                
                                    <div class="form-group">
                                        <span>Total Hours : </span> <input class="form-control" id="totalHours"  name="txt_totalHours" readonly="readonly">
                                    </div>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                    
                    </div>
                </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
      <!-- jQuery -->
 
    
    <script src="AdminPageBootStrap/js/jquery.js"></script>
    <script type="text/javascript" charset="utf-8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="AdminPageBootStrap/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>
   
   

    <script> 
        jQuery(document).ready(function(){
            var table = $("#UsersTable").DataTable();

            function getUserhours(data){
                if(data){    
                    console.log("success in retrieving user hours");
                    var obj = $.parseJSON(data);
                    
                    var len = obj.length;
                    var txt = "";

                    if(len > 0){
                        var cnt = 1;
                        var diff;
                        var SS;
                        var HH;
                        var MM;

                        var time_In;
                        var time_Out;
                        
                        var totalHH = 0;
                        var totalMM = 0;

                        var totalformatted = 0;
                        var formatted;

                        for(var i = 0; i < len && (obj[i].timeIn && obj[i].timeOut); i++){
                            time_In = new Date(Date.parse(obj[i].timeIn));
                            time_Out = new Date(Date.parse(obj[i].timeOut));
                            
                            diff = time_Out - time_In;
                            SS = diff/1000;
                            MM = Math.floor((SS % 3600)/60);
                            HH = Math.floor(SS / 3600);

                            formatted = ((HH < 10) ? ("0" + HH) : HH) + ":" + ((MM < 10) ? ("0" + MM) : MM);

                            txt += "<tr><td>"+cnt+"</td><td>"+obj[i].timeIn+"</td><td>"+obj[i].timeOut+"</td><td>"+formatted+"</td></tr>";

                            totalHH += HH;
                            totalMM += MM;
                            cnt++;
                        }
                        if(txt != ""){

                            totalformatted = ((totalHH < 10) ? ("0" + totalHH) : totalHH) + ":" + ((totalMM < 10) ? ("0" + totalMM) : totalMM);

                            $("#userHoursTableContainer").css("display","block");
                            $("#UserHoursTable").css("display","block");
                            $("#UserHoursTableBody").html(txt);
                            $("#totalHours").attr('value', totalformatted);

                            return totalformatted;
                            
                        }
                    }else{
                        alert("something weird happened");
                    }
                }else{
                        txt = "<p>user has no activity...</p>";

                        $("#UserHoursTableBody").html(txt);
                }

            }

            $("#UsersTable tbody").on('click', 'tr', function(){
                var data = table.row(this).data();

                $.ajax({
                    type: 'POST',
                    url: 'GetUserHours.php',
                    data: {userID: data[0]},
                   // dataType: 'json',
                    success: function(data){
                        // var timeIn = obj[0].timeIn;
                        // console.log(timeIn);
                        getUserhours(data);
                        $("#userbuttonRow").trigger('click');
                    },
                    error: function(){
                        console.log("failed in retrieving user hours");
                    }
                })
            });
        });
    
    </script>

   

    <!-- Morris Charts JavaScript -->
    <script src="AdminPageBootStrap/js/plugins/morris/raphael.min.js"></script>
    <script src="AdminPageBootStrap/js/plugins/morris/morris.min.js"></script>
    <script src="AdminPageBootStrap/js/plugins/morris/morris-data.js"></script>

  

</body>

</html>
