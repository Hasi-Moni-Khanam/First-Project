<?php 

include "config.php";
  if (isset($_POST['submit'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
      echo "New record created successfully.";
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 
    $conn->close(); 
  }
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>





<div class="container "> 

  <div class="card"> 

  <div class="card">
  <div class="card-header">
  <div class="text-center  py-2 bg- "> <h1>SIGNUP FORM</h1></div>
  </div>

  





  <div class="col-lg-6 m-auto "> 
    <div class="card-body"> 

  <form action="" method="POST">
  <fieldset>
  <div class="card">
  <div class="card-header">
  <div class="text-center  py-2 bg- "><legend class="text-center py-2">PERSONAL INFORMATION</legend> </div>
  </div>
    
    

    First Name:<br>
    <input type="text" name="firstname" placeholder="First Name" class="form-control mb2">
    <br>
    Last Name:<br>
    <input type="text" name="lastname"placeholder="Last Name" class="form-control mb2">
    <br>
    Email:<br>
    <input type="email" name="email"placeholder="email" class="form-control mb2" >
    <br>
     Password:<br>
    <input type="password" name="password"placeholder="password" class="form-control mb2">
    <br>





   



 <!-- <select class="form-select form-select-lg mb-3" aria-label="Large select example">
        <option selected> Gender:</option>
        <option value="1">Male</option>
        <option value="2">Female</option>
        
  </select> -->

    Gender:<br>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <br>


    <button class="btn btn-success ">
    <input type="submit" name="submit" value="submit"placeholder="submit" class="form-control mb2">
    </button>
  </fieldset>
</form>

      </div>
   </div>
  </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

