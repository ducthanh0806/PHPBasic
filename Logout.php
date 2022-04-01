<?php
   session_start();
   unset($_SESSION["mail"]);
   unset($_SESSION["password"]);
   header("location: Login.php");
   