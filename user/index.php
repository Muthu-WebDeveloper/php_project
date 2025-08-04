

<?php
    include('../asserts/db.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../asserts/cdn.php') ;?>
</head>
<body>
    <!--userlogin-->
    
    <div class="container_ulog d-flex align-item-center mt-5 w-100 p-5 justify-content-center">
            <form action="index.php" method="POST" class="d-flex w-50 p-5 gap-3 border border-dark rounded mb-5 flex-column">
                <h2 class="text-center ">User Login</h2>
                <label class="form-label ">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required> 

                 <label class="form-label">Password:</label>
                <input type="password" name="pass" class="form-control" placeholder="Enter Password" required> 

                <input type="submit" name="submit" class="btn btn-primary ">
                 <p class="fw-bold text-center">Don't have an account? <a class="fw-bold" href="signup.php">SignUp</a> </p>
            </form>
    </div>
    <?php
        if(isset($_POST['submit'])){
            $email=$_POST['email'];
            $pass=$_POST['pass'];

            $sql="select * from userlog where email='".$email."' and pass='".$pass."'";
            $query_run=mysqli_query($conn,$sql);
            if(mysqli_num_rows($query_run)==1){
               
                echo "<script>window.open('e.php','_self');</script>";

            }
            else{
                echo "<script>alert('Invaild Username');</script>";
            }
        }
    ?>
</body>
</html>