
<?php
       
       include('connection.php');
       
        ?>  
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
                <a class="navbar-brand" href="index.php">PHP CRUD using MySQLi Database</a>
            </div>
     
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
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
                         Enter Details of Property
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->


             <div class="col-lg-12">
                        <h2>List of Records</h2> <a href="add.php?action=add" type="button" class="btn btn-xs btn-info">Add New</a>
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Property Name</th>
                                        <th>Delivery Type</th>
                                        <th>Availablility</th>
                                        <th>Price</th>
                                        <th>Property Image</th>
                                        <th>Number of Bedrooms</th>
                                        <th>Number of Living rooms</th>
                                        <th>Number of Parking spaces</th>
                                        <th>Number of Kitchens</th>
                                        <th>Utility</th>

                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM properties';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['property_title'].'</td>';
                            echo '<td>'. $row['property_details'].'</td>';
                            echo '<td>'. $row['delivery_type'].'</td>';
                            echo '<td>'. $row['availablility'].'</td>';
                            echo '<td>'. $row['price'].'</td>';
                            echo '<td>'. $row['property_address'].'</td>';
                            echo '<td>'. $row['property_img'].'</td>';
                            echo '<td>'. $row['bed_room'].'</td>';
                            echo '<td>'. $row['liv_room'].'</td>';
                            echo '<td>'. $row['parking'].'</td>';
                            echo '<td>'. $row['kitchen'].'</td>';
                            echo '<td>'. $row['utility'].'</td>';
                            echo '<td>'. $row['property_type'].'</td>';
                            echo '<td>'. $row['floor_space'].'</td>';
                            echo '<td> <a type="button" class="btn btn-xs btn-info" href="searchfrm.php?action=edit & id='.$row['people_id'] . '" > SEARCH </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & id='.$row['people_id'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="del.php?type=people&delete & id=' . $row['people_id'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 

CREATE TABLE `properties` (
  `property_id` int(10) NOT NULL,
  `property_title` varchar(150) DEFAULT NULL,
  `property_details` text,
  `delivery_type` varchar(20) DEFAULT NULL,
  `availablility` int(5) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `property_address` varchar(200) DEFAULT NULL,
  `property_img` varchar(200) DEFAULT NULL,
  `bed_room` int(5) DEFAULT NULL,
  `liv_room` int(5) DEFAULT NULL,
  `parking` int(5) DEFAULT NULL,
  `kitchen` int(5) DEFAULT NULL,
  `utility` varchar(100) DEFAULT NULL,
  `property_type` varchar(20) DEFAULT NULL,
  `floor_space` varchar(20) DEFAULT NULL,
  `agent_id` int(10) DEFAULT NULL
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
