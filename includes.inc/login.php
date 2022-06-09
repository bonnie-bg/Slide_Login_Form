<?php
require_once("connect.php");
if (isset($_POST['login'])) {
       $email = $_POST['lemail'];
       $pws =  $_POST['lpassword'];

       $passHash  = md5($pwd);
       echo $query = mysqli_query($conn, "SELECT * FROM loggindata WHERE email = '$email'  ");

       if (mysqli_num_rows($query) == 1) {
              echo "login";
       }

       mysqli_close($conn);
}
