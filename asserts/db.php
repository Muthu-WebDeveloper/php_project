<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="muthu";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        echo "Connect Error:".$conn->connect_error;
    }
    