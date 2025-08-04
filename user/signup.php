<?php include('../asserts/db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../asserts/cdn.php') ;?>
</head>
<body>
      <div class="container_slog d-flex align-item-center mt-5 w-100 p-5 justify-content-center">
            <form action="signup.php" method="POST" class="d-flex w-50 p-5 gap-3 border border-dark rounded mb-5 flex-column">
                <h2 class="text-center ">Sign Up</h2>

                 <label class="form-label ">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required> 


                <label class="form-label ">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required> 

                 <label class="form-label">Password:</label>
                <input type="password" name="pass" class="form-control" placeholder="Password" required> 

                 <label class="form-label">Confirm Password:</label>
                <input type="password" name="co_pass" class="form-control" placeholder="ReEnter" required> 

                <input type="submit" name="submit" class="btn btn-primary ">
                 <p class="fw-bold text-center">Have an account?<a class="fw-bold" href="index.php">Log in</a> </p>
            </form>
    </div>

     <?php
 if(isset($_POST['submit'])){


    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $co_pass=$_POST['co_pass'];

    $sql="insert into userlog(name,email,pass,co_pass) values ('$name','$email','$pass','$co_pass')";
    if($conn->query($sql)===true){
          echo "<script>alert('Inserted');</script>"; }
     else{
          echo "<script>alert('Not Inserted');</script>"; }
           

}
    ?>
</body>
</html>