<!-- ONLY CALL ONCE -->
<!-- Creates database for site -->
 <?php
    $conn = mysqli_connect("localhost","root","");
    $sql = "create database asg_3;";
    if($conn){
     echo "connected";
     if (mysqli_query($conn, $sql)) {
         echo "database created";
     }
    }

    mysqli_close($conn);