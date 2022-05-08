<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="project/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Student Login</title>
</head>
<body>
<center>
  <div>
  <h1>Student Login</h1>
  <form action="" method="post">
  <input type="text" placeholder="Email" name="email" required><br><br>
  <input type="password" placeholder="password" name="password" required><br><br>
  <input type="submit" name="submit">
  </form>
  </div>
  </center>
  <?php
  if(isset($_POST['submit'])){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"sps2");
    $query = "select * from student where email = '$_POST[email]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      if($row['email'] == $_POST['email']){
        if($row['password'] == $_POST['password']){
          header("Location: student_dashboard.php");
         
        }
        else{
          echo "wrong password";
        }
      }
      else{
        echo "wrong email id";
      }
    }
  }
 

  ?>
  <script src="js/jquery-3.5.1.js"></script>
  <script scr="js/bootstrep.min.js"></script>
</body>
</html>