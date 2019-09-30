
<?php include "sidebar.php";
include "header.php";
?>

<?php 
include('dbcon.php');
if(isset($_POST['submit']))
{
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $dob = $_POST['dob'];
      $college = $_POST['college'];
      $sem = $_POST['sem'];
      $school = $_POST['school'];

      $filename = $_FILES['img'] ['name'];
      $tempname = $_FILES['img'] ['tmp_name'];
      $image = "upload/" .$filename;
      //echo $image;
     //print_r($_FILES['image']);
     move_uploaded_file($tempname, $image);
     //echo "<img src='$image' height='100' width='100'/> ";
     $q ="insert into student ( username, password, email, dob, college, sem, school, image) values ('$username','$password','$email','$dob','$college','$sem','$school', '$image')";
     $query = mysqli_query($con, $q);
}
?>                   
<form method="post" enctype="multipart/form-data">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Form</strong></div>
                <div class="card-body card-block">
                    <div class="form-group">
                        <label class=" form-control-label">Username</label>
                        <input type="name" name="username" placeholder="Enter your username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label  class=" form-control-label">Password</label>
                        <input type="password" name="password" placeholder="Enter your password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label  class=" form-control-label">Email</label>
                        <input type="email" name="email" placeholder="Enter Email" class="form-control">
                    </div>
                    <div class="row form-group">
                    <div class="col-8">
                    <div class="form-group">
                        <label class=" form-control-label">DOB</label>
                        <input type="text" name="dob" placeholder="Enter your dob" class="form-control">
                    </div>
                    </div>
                    <div class="col-8">
                    <div class="form-group">
                        <label for="postal-code" class=" form-control-label">College</label>
                        <input type="text" name="college" placeholder="Enter your college" class="form-control">
                    </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="country" class=" form-control-label">SEM</label>
                        <input type="text" name="sem" placeholder="Enter your sem" class="form-control">
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="country" class=" form-control-label">SCHOOL</label>
                        <input type="text" name="school" placeholder="Enter your school" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="country" class=" form-control-label">IMAGE</label>
                        <input type="file" name="img" class="form-control">
                    </div>
                    </div>
                        <input type="submit" name="submit" class="btn btn-info">
                    </div>
                </div>
</form>
<?php include "footer.php";?>