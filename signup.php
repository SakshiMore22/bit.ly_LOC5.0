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
<div class="container">
    <form action="/LOC 5.0/signup.php" method="post">
            <h1>Sign Up Form!</h1>
        <div class="form-row">
                <div class="col-md-4 mb-3">
                <label for="validationServer01">First name</label>
                <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                <div class="valid-feedback">
                </div>
                </div>
                <div class="col-md-4 mb-3">
                <label for="validationServer02">Last name</label>
                <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
                <div class="valid-feedback">
                </div>
                </div>
                <div class="col-md-4 mb-3">
                <label for="validationServerUsername">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                    </div>
                    <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                    <div class="invalid-feedback">
                    Please choose a username.
                    </div>
                </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="validationServer03">City</label>
                <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
                </div>
                <div class="col-md-3 mb-3">
                <label for="validationServer04">State</label>
                <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                <div class="invalid-feedback">
                    Please provide a valid state.
                </div>
                </div>
                <div class="col-md-3 mb-3">
                <label for="validationServer05">Zip</label>
                <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Year of Passing</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your Passout Year">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Experience</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Years of Experience">
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Remote</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">In Office</label>
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
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Choose...</option>
                    <option value="1">React Developer</option>
                    <option value="2">Java Developer</option>
                    <option value="3">Python</option>
                </select>
                </div>
                <div class="col-auto my-1">
                <div class="custom-control custom-checkbox mr-sm-2">
                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                    <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
                </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload your Resume</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <button type="submit" class="btn btn-primary">SignUp</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>