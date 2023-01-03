<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Signup page </title>

  <!-- custom css file link -->
  <link rel="stylesheet" href="homepage.css">
</head>
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

             
<div class="form-container">
    <form action ="" method = "post">
        <h3> Signup Now</h3>
        <input type ="text" name = " name" required placeholder="enter your name" >
        <input type ="email" name = " email" required placeholder="enter your email" >
        <input type ="password" name = " password" required placeholder="enter your password">
        <input type ="password" name = " password" required placeholder="confirm your password">
        <select name="user_type">
            <option value ="user">user</option>
            <option value ="admin">admin</option>
            <option value ="superadmin">superadmin</option>
        </select>
        <input type="submit"name="submit" value="signup now" class="form-btn">
        <p>Already have an account?<a href="Log In"></a></p>
    </form>
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