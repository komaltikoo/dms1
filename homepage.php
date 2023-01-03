<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/9788dfdf15.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="homepage.css">
  <title>Hello, world!</title>

  <style>
  span {
    color: floralwhite;
  }

  #emblem {
    border: 0;
  }

  .topnav-right {
    float: right
  }
  </style>

<body>

  <!-- navbar -->
  <nav class="navbar navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand">
        <img id="emblem" src="./images/emblem.png" width="40px" height="40px">&nbsp;
        <span>J&K GOVERNEMT</span>
        </a>
      <span id="marq"><marquee width="60%" direction="left" height="50px">
Document Management System by J&K Government
</marquee></span>
<div class="content">
              <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link"class="topnav-right"class="topnav-right" href="signup.php">
               <span> <i class="fas fa-user"></i> SignUp</a></span>
              </a>
          </li>
      </div>
    </div>

  </nav>

                   <!-- php code -->
  <?php

         
       if($_SERVER['REQUEST_METHOD']=='POST'){
        $email=$_POST['email'];
        $password=$_POST['password'];

$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);

if(!$conn)
{
  echo "not connect";
}
else
{
  echo "connected";
}

       }

  ?>


  <!--main -->

  <div class="container">
        
    <form class="form" action="" method="post">
      <h2>Log In</h2>
    <input class="box" type="email" name="email" id="email" placeholder="enter your email">
    <input class="box" type="password" name="password" id="password" placeholder="enter your password">
   <input type="submit" value="SIGN IN" id="submit">
   <a href="">Forgot Password?</a>

</form>
<div class="side">
  <img src="./images/JK-government.webp" alt="" srcset="">
</div>
  </div>




  <!-- Footer -->
  <footer id="last" class="bg-light fixed text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="">Jammu Authority</a>
  </div>
  <!-- Copyright -->
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>



</body>

</html>