<?php
require_once("connect.php");

if (isset($_POST['signup'])) {
       $email = mysqli_real_escape_string($conn, $_POST['email']);
       $password = mysqli_real_escape_string($conn, $_POST['password']);
       $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
       if ($password !== $cpassword) {
              echo '<script  type="text/javascript">alert("password not equal to conform password error");</script>';
       } else {
              $password == $cpassword;
              //password hashing
              $hashpassword = md5($$password);
              //sql query to insert data in db 
              $query =  "INSERT INTO `signdata`( `email`, `password`) VALUES (?,?)");
              //create prepared statement
              $stmt = mysqli_stmt_int($stmt);
              //prepare prepared statement
              if(!mysqli_stmt_prepare($stmt, $query)){
              echo "sql Prepaerd statement Error</br>";
              echo "Error:".$query.</br>.mysqli_error($conn);
              }else{
              //bind prepared statement
              mysqli_stmt_bind_param($stmt,"ss",$email,$hashpassword);
              //execute the statement
              mysqli_execute($stmt);
              echo '<script type="text/javascript">alert("Data inserted correctly");</script>';
              }
       }
      //close connection
	mysqli_close($conn);
}
