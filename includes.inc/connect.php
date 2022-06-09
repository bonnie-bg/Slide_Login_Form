<?php
$conn = mysqli_connect("localhost", "root", "", "LogDesign");
if (mysqli_connect_error()) {
    die('Connection failed (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
}
