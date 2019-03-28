<!DOCTYPE html>
<?php
  
  // $con = mysql_connect("localhost","root","dell");
  // mysql_select_db("kusu");
    
  if (isset($_POST["username"])) {
    $username=$_POST["username"];
    $password=$_POST["password"];
    // mysql_query("Select * from login where username",$con);
    if ($username=="123" and $password=="123") {
      header("location:index.html"); 
    }
    else{
      echo "Invaid...";
    }
}
  ?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>KUSU</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">  
</head>

<body>
  <div class="container">
    <div class="pen-title text-center">
      <h1>Kabul University Students Union</h1>
    </div>
      <div class="form" >
        <form class="form-horizontal" method="post">
      <div class="form-group">
        <label for="username" class="col-sm-5 control-label">User Name</label>
        <div class="col-sm-3">
          <input type="text" name="username" class="form-control" id="username" placeholder="username">
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-sm-5 control-label">Password</label>
        <div class="col-sm-3">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-5 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-5 col-sm-10">
          <button type="submit" class="btn btn-default">Sign in</button>
        </div>
      </div>
    </form>
    </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>

</body>
</html>
