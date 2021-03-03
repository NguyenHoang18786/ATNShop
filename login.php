<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link rel="stylesheet" href="styleAs.css">
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <script>
      // Prevent dropdown menu from closing when click inside the form
      $(document).on("click", ".navbar-right .dropdown-menu", function(e){
        e.stopPropagation();
      });
    </script>
    <nav class="navbar navbar-default navbar-expand-lg navbar-light">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php"><b>ATN</b>Shop</a>  		
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
        <span class="navbar-toggler-icon"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
      </div>
    </nav>
</head>
<body>
  <center>
    <div class="container">
      <div class="row">
        <div class="col">
        </div>
        <div class="col-5">
          <div class="p-3 border bg-light">
            <h1 style="padding: 10px">Login for ATN storage </h1>
            <form method="post">          
        <div class="form-group">
          <label for="username">Username</label>
          <input type="username" class="form-control" id="username" placeholder="Enter your username ..." name="username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter your password ..." name="password">
        </div>    
          <input type="submit" name="submit" class="btn btn-primary" value="Login">
          <?php
              $host_heroku = "ec2-34-203-255-149.compute-1.amazonaws.com";
              $db_heroku = "d4o7gh1clss23f";
              $user_heroku = "dlzccrebdqajnt";
              $pw_heroku = "e77829266d73cbd262849d8d0f071233f6bd1fcaec827e4f57d10a008ee1b6ac"; 
              $conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
              $pg_heroku = pg_connect($conn_string);
            if(isset($_POST['submit'])){
              $username = $_POST["username"];
              $password = $_POST["password"];
                $username = $_POST["username"];
                $password = $_POST["password"];
                $query ="select * from accounts where username = '$username' and password = '$password' ";
                $result = pg_query($pg_heroku,$query); 
                $login_check = pg_num_rows($result);
                $queryrolecheck = "select role from accounts where username = '$username' and password = '$password' ";  
                $result2 = pg_query($pg_heroku,$queryrolecheck);
                $role_check = pg_fetch_assoc($result2);
                if($login_check == 0){        
                    echo "Invalid Details!!";   
                }
                elseif($role_check == 'admin')
                {        
                          header('location: storage.php');
                }
                else($role_check == 'staff')
                {
                          header('location: StorageManagement.php');
                }
            }
            ?>
     </form>
    </div>                         
        </div>
        <div class="col">
        </div>
      </div>
    </div>                                                               
  </center>
</body>
</html>


