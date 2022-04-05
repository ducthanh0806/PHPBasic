<?php
session_start();
require_once "LoginPdo.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <title>Login</title>
</head>

<body>
    <div id="login">
        <div class="container">
        <?php echo isset($_SESSION["errors"]) ? $_SESSION['errors'] : ""; ?>
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label>
                                <br>
                                <input type="text" name="email" id="email" class="form-control"
                                       value="<?php echo isset($_COOKIE['mail']) ? $_COOKIE['mail'] : ''; ?>">
                                <?php if (isset($error['email'])): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $error['email']; ?>
                                    </div>
                                <?php endif ?>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label>
                                <br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <?php if (isset($error['password'])): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $error['password']; ?>
                                </div>
                                <?php endif ?>
                            <div class="form-group">
                                <label for="" class="text-info">
                                    <span>Remember me</span>
                                    <span>
                                        <input id="remember" name="remember" type="checkbox"
                                               value="<?php echo isset($_COOKIE['userLogin']) ? $_COOKIE['userLogin'] : ''; ?>">
                                    </span>
                                </label>
                                <br>
                                <button name="login" class="btn btn-info btn-md">
                                    Login
                                </button>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="Register.php" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
