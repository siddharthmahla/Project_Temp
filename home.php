<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="project/css/bootstrap.min.css">
  <link rel="stylesheet" href="stylehome.css">
  <title>student progress system</title>
</head>
<style>
 
   h1
{
  color:#300904      ;
    ;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.btn
{
  
  width: 25%;
  height:40px;
  margin:20px;
  border-radius: 5%;
  text-decoration:none;
  background-color:white;
  color:teal ;
  border:none;
  font-size: 20px;
  margin-top: 17%;
  
}
</style>
<body style="background-color:#BFB8B7;">

  <center><h1> STUDENT PROGRESS DETAIL SYSTEM </h1></center>
<center>
  <div id="container">
  <div class="left">
      <h1>Know your progress</h1>
  </div>
  <div class="right">
  
  <form action="" method="post">

    <input class="btn" type="submit" name="admin_login" value="Admin login">  
  <input class="btn" type="submit" name="Faculty login" value="Faculty login">
  <input class="btn" type="submit" name="Studentlogin" value="Student login">
  </form>
  </div>
  </div>
  </center>
  <?php
  if(isset($_POST['admin_login'])){
    header("Location: admin.php");
  }
  if(isset($_POST['student_login'])){
    header("Location: student.php");
  }

  ?>
  <script src="js/jquery-3.5.1.js"></script>
  <script scr="js/bootstrep.min.js"></script>
</body>
</html>