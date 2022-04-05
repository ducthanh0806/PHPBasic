<?php
session_start();
require_once "RegisterPdo.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<title>Registation</title>
</head>
<body>
  <form class="form-horizontal" action="" style="margin-left: 20px;" method="POST">
    <fieldset>
      <h3 class="text-center text-info">Register for Users</h3>
        <div class="form-group ">
          <label class="col-sm-2 col-form-label">Name:</label>
          <div class="col-sm-10">
            <input type="text"  class="form-control" id="name" name="name" placeholder="Enter your name..."
                   value="<?php echo isset($_POST["name"]) ? htmlentities($_POST["name"]) : ''; ?>">
            <?php if (isset($error['name'])): ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $error['name']; ?>
                </div>
            <?php endif ?>
          </div>
        </div>
        <div class="form-group ">
          <label class="col-sm-2 col-form-label">Address:</label>
          <div class="col-sm-10">
            <input type="text"  class="form-control" id="address" name="address" placeholder="Enter your address..."
                   value="<?php echo isset($_POST["address"]) ? htmlentities($_POST["address"]) : ''; ?>">
            <?php if (isset($error['address'])): ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $error['address']; ?>
                </div>
            <?php endif ?>
          </div>
        </div>
        <div class="form-group ">
          <label class="col-sm-2 col-form-label">Phone Number:</label>
          <div class="col-sm-10">
            <input type="text"  class="form-control" id="phone" name="phone" placeholder="Enter your phone number..."
                   value="<?php echo isset($_POST["phone"]) ? htmlentities($_POST["phone"]) : ''; ?>">
            <?php if (isset($error['phone'])): ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $error['phone']; ?>
                </div>
            <?php endif ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-form-label">Email:</label>
          <div class="col-sm-10">
            <input type="text"  class="form-control" id="email" name="email" placeholder="Enter your email..."
                   value="<?php echo isset($_POST["email"]) ? htmlentities($_POST["email"]) : ''; ?>">
            <?php if (isset($error['email'])): ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $error['email']; ?>
                </div>
            <?php endif ?>
          </div>
        </div>
        <div class="form-group ">
          <label class="col-sm-2 col-form-label">Password:</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password..." >
            <?php if (isset($error['password'])): ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $error['password']; ?>
                </div>
            <?php endif ?>
          </div>
        </div>
        <div class="form-group ">
          <label class="col-sm-2 col-form-label">Password Confirm:</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="passwordCofirm" name="confirm_password" placeholder="Enter password again...">
            <?php if (isset($error['confirm_password'])): ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $error['confirm_password']; ?>
                </div>
            <?php endif ?>
          </div>
        </div>
        <div class="control-group">
          <div class="text-center">
            <button class="btn btn-success" style="padding: 10px 20px; margin-top: 50px;" name="register">
                Register
            </button>
            <br>
            <a href='Login.php'> Login </a>
            <br>
          </div>
      </div>
    </fieldset>
  </form>
</body>
</html>
