<?php
$alert=false;
if ($_SERVER["REQUEST_METHOD"]=="POST"){

    include 'partials/_dbconnect.php';
    $Fname=$_POST["Fname"];
    $Lname=$_POST["Lname"];
    $country=$_POST["country"];
    $state=$_POST["state"];
    $city=$_POST["city"];
    $email=$_POST["Email"];
    $passing=$_POST["passing"];
    $exp=$_POST["exp"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $exists=false;
    if(($password==$cpassword) && $exists==false){
        $sql="INSERT INTO `users` (`Fname`, `Lname`, `country`, `state`, `city`, `email`, `passing`, `exp`, `password`) VALUES ( '$Fname', '$Lname', '$country', '$state', '$city', '$email', '$passing', '$exp', '$password')";
        $result=mysqli_query($conn,$sql);
        if ($result){
            $alert=true;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sign Up!</title>
  </head>
<body>
    <?php require 'partials/_nav.php' ?>
    <?php
    if($alert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your account is created.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>';
    }
    ?>

    <h1>Sign Up Form!</h1>
    <div class="container">
        <form action="/LOC 5.0/signup.php" method="post" enctype="multipart/form-data">
        <div class="form-row">
                <div class="col-md-4 mb-3">
                <label for="Fname">First name</label>
                <input type="text" class="form-control is-valid" id="Fname" placeholder="First name" name="Fname" required>
                <div class="valid-feedback">
                </div>
                </div>
                <div class="col-md-4 mb-3">
                <label for="Lname">Last name</label>
                <input type="text" class="form-control is-valid" id="Lname"  name="Lname" placeholder="Last name" required>
                <div class="valid-feedback">
                </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="country">Country</label>
                <input type="text" class="form-control is-invalid" id="country" name="country" placeholder="country" required>
                <div class="invalid-feedback">
                    Please provide a valid country.
                </div>
                </div>
                <div class="col-md-3 mb-3">
                <label for="state">State</label>
                <input type="text" class="form-control is-invalid" id="state" name="state" placeholder="state" required>
                <div class="invalid-feedback">
                    Please provide a valid state.
                </div>
                </div>
                <div class="col-md-3 mb-3">
                <label for="city">City</label>
                <input type="text" class="form-control is-invalid" id="city" name="city" placeholder="city" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
                </div>
            </div>
            <div class="form-group">
                <label for="Email">Email address</label>
                <input type="email" class="form-control" id="Email" name="Email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="passing">Year of Passing</label>
                <input type="text" class="form-control" id="passing" name="passing" placeholder="Enter your Passout Year">
            </div>
            <div class="form-group">
                <label for="exp">Experience</label>
                <input type="text" class="form-control" id="exp" name="exp" placeholder="Years of Experience">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name ="cpassword" placeholder="Password">
                <br><small id="emailHelp" class="form-text text-muted">Enter the same password.</small>
            </div>
            <button type="submit" class="btn btn-primary">SignUp</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>