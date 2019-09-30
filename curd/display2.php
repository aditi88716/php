<?php
include "sidebar.php";
include "header.php";
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    
</head>

<body>
    <!-- Left Panel -->



    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
    <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th>dob</th>
                                            <th>College</th>
                                            <th>Sem</th>
                                            <th>School</th>
                                            <th>Image</th>
                                            <th>Delete</th>
                                            <th>Update</th>
                                        </tr>
                 <?php
                    include('dbcon.php');
                    $q = "select * from student";
                    $query = mysqli_query($con, $q);

                    while($result = mysqli_fetch_array($query)){
                ?>
                        <tr class="text-center">
                            <td><?php echo $result['id']?></td>
                            <td><?php echo $result['username']?></td>
                            <td><?php echo $result['password']?></td>
                            <td><?php echo $result['email']?></td>
                            <td><?php echo $result['dob']?></td>
                            <td><?php echo $result['college']?></td>
                            <td><?php echo $result['sem']?></td>
                            <td><?php echo $result['school']?></td>
                            
                            <td><a href="<?php echo $result['image']?>"><img src="<?php echo $result['image']?>" width="100" height="100" style ="border-radius: 81px;"></a></td>
                            <td><a class="btn-danger btn" href="delete.php?id=<?php echo $result['id'];?>" class="text-white">Delete</a></td>
                            <td><a class="btn-primary btn" href="update1.php?id=<?php echo $result['id'];?>" class="text-white">Update</a></td>
                        </tr>
                <?php
                    }
                ?>  
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


</body>

</html>
<?php include "footer.php"; ?>
