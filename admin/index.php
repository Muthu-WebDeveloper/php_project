<?php
    include('../asserts/db.php');
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <?php include('../asserts/cdn.php') ;?>
</head>
<body>

    <!--adminlogin-->

    <div class="container_adlog d-flex align-item-center mt-5 w-100 p-5 justify-content-center">
            <form action="index.php" method="POST" class="d-flex w-50 p-5 gap-3 border border-dark rounded mb-5 flex-column">
                <h2 class="text-center ">Admin Login</h2>
                <label class="form-label ">User Name:</label>
                <input type="text" name="uname" class="form-control" placeholder="User Name"> 

                 <label class="form-label">Password:</label>
                <input type="password" name="pass" class="form-control" placeholder="Password"> 

                <input type="submit" name="submit" class="btn btn-primary ">
            </form>
    </div>

    <?php
        if(isset($_POST['submit'])){
            $uname=$_POST['uname'];
            $pass=$_POST['pass'];

            $sql="select * from adminlog where uname='".$uname."' and pass='".$pass."'";
            if($uname=='Muthu' && $pass='Muthu@007'){
             $query_run=mysqli_query($conn,$sql);
            if(mysqli_num_rows($query_run)==1){
                 
        
                echo "<script>window.open('dashboard.php','_self');</script>";
            }
            else{
                echo "<script>alert('invaild username');</script>";
            }
        }
    }
    ?>
</body>
</html>