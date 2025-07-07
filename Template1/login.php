<?php 
  include 'conn.php';
 
  if(isset($_POST["btnsubmit"])){
    // echo "btn clicked";die;
    $uname = $_POST["Name"];
    $pwd = $_POST["Password"];
    $sql=("select * from tbl_admin where Name='$uname' and Password='$pwd'") or die(mysqli_error($conn));
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    // print_r($result->num_rows);die;
    if($result->num_rows>0){
      echo '<script>
      window.location.href="index.php"
      </script>';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sign In</title>
  
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    body {
      background: linear-gradient(to right, #74ebd5, #acb6e5);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .signin-form {
      background-color: #ffffff;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .signin-form h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    .form-control {
      border-radius: 8px;
    }

    .btn-primary {
      border-radius: 8px;
      background-color: #4e73df;
      border: none;
    }

    .btn-primary:hover {
      background-color: #2e59d9;
    }

    .form-footer {
      text-align: center;
      margin-top: 15px;
    }

    .form-footer a {
      text-decoration: none;
      color: #4e73df;
    }

    .form-footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="signin-form">
    <h2>Sign In</h2>
    <form method="post">
      <div class="mb-3">
        <label for="uname" class="form-label">Username</label>
        <input type="text" class="form-control" name="Name" id="uname" placeholder="Enter your Username" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="Password" id="password" placeholder="Enter your password" required>
      </div>

      <input type="submit" class="btn btn-primary w-100" name="btnsubmit" value="Submit">

      <!-- <div class="form-footer mt-3">
        <a href="#">Forgot Password?</a>
      </div> -->
    </form>
  </div>

  <!-- Bootstrap JS Bundle (optional for dropdowns, modals etc.) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>