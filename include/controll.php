<?php

include 'connection.php';
if (isset($_POST['Submit'])) {
    $fname=$_POST['fname'];
    $mobile=$_POST['pnumber'];
    $email=$_POST['email'];
    $msg=$_POST['textareamsg'];

    $sql="INSERT INTO contact(Name,Mobile,Email,Msg) VALUES('$fname','$mobile','$email','$msg')";
    $result=$conn->query($sql);
    echo "<script>window.open('index.php','_self')</script>";
}

?>
