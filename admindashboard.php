<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="project/css/bootstrap.min.css">
  
  <title>admin dashboard</title>
  <style>
    *
    {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .header
    {
      height: 10%;
      width: 100%;
      top: 2%;
      background-color: silver;
      position: fixed;
      color: white;
      
      
    }
    #nav
    {
      margin-top: 7%;
    }
    #container
    {
      height: 75%;
      width:90%;
      background-color: whitesmoke;
      position:relative ;
      
      top: 21%;
      border: solid 1px black;
      color: red;
      margin-left: 60px;
    }
    #td
    {
      border: 1px solid black;
      padding-left: 12px;
      text-align: left;
      width: 180px;
    }
    #id
    {
      border: 1px solid black;
      padding-left: 20px;
      color: black;
    }
    #department td
    {
      color: black;
    }
    
  </style>
  


  <?php
  session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"sps");

  ?>
</head>
<body>
<div class="header">
<center><strong>Student progress system <br> </strong> Email:  <?php echo $_SESSION['A_Email'] ?>  &nbsp&nbspName:<?php echo $_SESSION['A_Name'] ?>
<a href="signout.php">Logout</a>
</center>
</div>
<div id="nav">
  <center>
  <form action="" method="post">
    <table>
      <tr>
        <td><input type="submit" name="search_teacher" value="search teacher"></td>
     
        <td><input type="submit" name="edit_teacher" value="edit teacher"></td>
       
        <td><input type="submit" name="add_teacher" value="add teacher"></td>
      
        <td><input type="submit" name="show_teachers" value="Faculty members"></td>

        <td><input type="submit" name="department" value="Department"></td>
      </tr>
    </table>
  </form>
  </center>
</div>

<div id="container">
  <div id="">
    <?php
    if(isset($_POST['search_teacher'])){

    ?>
    <center>
      <h4>Enter id to search Teacher</h4>
      <form action="" method="POST">
        Enter id:
        <input type="text" name="ID">
        <input type="submit" name="search_by_rollno_search" value="Search"> 
      </form>
    </center>
    <?php
    }
    
    if(isset($_POST['search_by_rollno_search'])){
      $query = "select * from teachers_table where T_ID = '$_POST[ID]'";
      $query_run = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <table>
          <tr>
            <td><b>ID:</b></td>
            <td>
              <input type="text " value="<?php echo $row['T_ID']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>Name:</b></td>
            <td>
              <input type="text " value="<?php echo $row['T_NAME']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>email:</b></td>
            <td>
              <input type="text " value="<?php echo $row['T_EMAIL']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>password:</b></td>
            <td>
              <input type="text " value="<?php echo $row['T_Password']; ?>" hidden>
            </td>
          </tr>
          <tr>
            <td><b>DOB:</b></td>
            <td>
              <input type="text " value="<?php echo $row['T_DOB']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>gemder:</b></td>
            <td>
              <input type="text " value="<?php echo $row['T_GENDER']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>contact no.:</b></td>
            <td>
              <input type="text " value="<?php echo $row['T_MOB']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>Address:</b></td>
            <td>
              <input type="text " value="<?php echo $row['T_ADDRESS']; ?>" disabled>
            </td>
          </tr>
          
        </table>

      <?php
      }
    }
    ?>
     <?php
    if(isset($_POST['edit_teacher'])){

    ?>
    <center>
      <h4>Enter id to edit Teacher details</h4>
      <form action="" method="POST">
        Enter id:
        <input type="text" name="ID">
        <input type="submit" name="search_by_rollno_edit" value="Search"> 
      </form>
    </center>

    <?php
    }
    
    if(isset($_POST['search_by_rollno_edit'])){
      $query = "select * from teachers_table where T_ID = '$_POST[ID]'";
      $query_run = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <form action="admineditteacher.php" method="POST">
        <table>
        <tr>
            <td><b>ID:</b></td>
            <td>
              <input type="text " name="T_ID" value="<?php echo $row['T_ID']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>Name:</b></td>
            <td>
              <input type="text " name="T_NAME" value="<?php echo $row['T_NAME']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>email:</b></td>
            <td>
              <input type="text " name="T_EMAIL" value="<?php echo $row['T_EMAIL']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>password:</b></td>
            <td>
              <input type="text " name="T_Password" value="<?php echo $row['T_Password']; ?>" hidden>
            </td>
          </tr>
          <tr>
            <td><b>DOB:</b></td>
            <td>
              <input type="text " name="T_DOB" value="<?php echo $row['T_DOB']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>gemder:</b></td>
            <td>
              <input type="text " name="T_GENDER" value="<?php echo $row['T_GENDER']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>contact no.:</b></td>
            <td>
              <input type="text " name="T_MOB" value="<?php echo $row['T_MOB']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>Address:</b></td>
            <td>
              <input type="text " name="T_ADDRESS" value="<?php echo $row['T_ADDRESS']; ?>" >
            </td>
          </tr>
          
          <tr>
            <td></td>
            <td>
              <input type="submit" name="edit" value="Save">
            </td>
          </tr>
          
        </table>
        </form>

      <?php
      }
    }
    ?>

    <?php
      if(isset($_POST['add_teacher']))
      {
        ?>
        <center><h4>fill the given details</h4></center>
        <form action="addteacher.php" method="POST">
          <table>
          <tr>
            <td>ID</td>
            <td><input type="text" name="T_ID" required></td>
          </tr>
          <tr>
            <td>Name</td>
            <td><input type="text" name="T_NAME" required></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="text" name="T_EMAIL" required></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="text" name="T_Password" required></td>
          </tr>
          <tr>
            <td>DOB</td>
            <td><input type="text" name="T_DOB" required></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><input type="text" name="T_GENDER" required></td>
          </tr>
          <tr>
            <td>Contact no.</td>
            <td><input type="text" name="T_MOB" required></td>
          </tr>
          <tr>
            <td>Address</td>
            <td><input type="text" name="T_ADDRESS" required></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="add" value="add teacher"> </td>
          </tr>
          </table>
        </form>
        <?php
      }
      
    ?>
    <?php
      if(isset($_POST['delete_teacher']))
    
      {
        ?>
        <center>
          <h4>Enter id to delete teacher</h4>
          <form action="deleteteacher.php" method="POST">
            id <input type="text" name="id">
            <input type="submit" name="search_for_delete" value="delete teacher">
          </form>
        </center>
        <?php
      }
    ?>

    <?php
      if(isset($_POST['show_teachers'])){
        ?>
        <center>
          <h4>Faculty members details</h4>
          
        </center>
        <?php
         $connection = mysqli_connect("localhost","root","");
         $db = mysqli_select_db($connection,"sps");
         $query = "select * from teachers_table";
         $query_run = mysqli_query($connection,$query);
         while($row = mysqli_fetch_assoc($query_run)){
           ?>
           
             <div class="container">
             <table style="border-collapse: collapse;border:1px solid black;">
                <tr>
                  <td id="id">ID</td>
                  <td id="id">NAME</td>
                  <td id="id">EMAIL</td>
                  
                  <td id="id">DOB</td>
                  <td id="id">GENDER</td>
                  <td id="id">CONTACT NO.</td>
                  <td id="id">ADDRESS</td>
                  <td id="id">info</td>
                </tr>
               <tr>
                 <td id="td"><?php echo $row['T_ID']; ?></td>
                 <td id="td"><?php echo $row['T_NAME']; ?></td>
                 <td id="td"><?php echo $row['T_EMAIL']; ?></td>
                 <td id="td"><?php echo $row['T_DOB']; ?></td>
                 <td id="td"><?php echo $row['T_GENDER']; ?></td>
                 <td id="td"><?php echo $row['T_MOB']; ?></td>
                 <td id="td"><?php echo $row['T_ADDRESS']; ?></td>
                 <td id="td"><a href="viewdetail.php">View detail</a></td>
               </tr>
             </table>


             <table>
          <tr>
            <td style="color: black;">ID</td>
            <td><?php echo $row['T_ID']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">Name</td>
            <td><?php echo $row['T_NAME']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">Email</td>
            <td><?php echo $row['T_EMAIL']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">DOB</td>
            <td><?php echo $row['T_DOB']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">Gender</td>
            <td><?php echo $row['T_GENDER']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">Contact no.</td>
            <td><?php echo $row['T_MOB']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">Address</td>
            <td><?php echo $row['T_ADDRESS']; ?></td>
          </tr>
          
          </table>
          <br>
          <br>
             </div>
           
           <?php
         }
        
      }
    ?>
    <?php
      if(isset($_POST['department'])){
        ?>
        <center>
          <h4>Faculty members details</h4>
          
        </center>
        <?php
         $connection = mysqli_connect("localhost","root","");
         $db = mysqli_select_db($connection,"sps");
         $query = "select * from department";
         $query_run = mysqli_query($connection,$query);
         while($row = mysqli_fetch_assoc($query_run)){
           ?>
           
             <div class="container">


             <table>
          <tr>
            <td style="color: black;">ID</td>
            <td><?php echo $row['D_No.']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">Name</td>
            <td><?php echo $row['D_Name']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">Email</td>
            <td><?php echo $row['D_Head']; ?></td>
          </tr>
          </table>
          <br>
          <br>
             </div>
      
      <?php
      }
    }
    ?>
           
   
  </div>

</div>
  <script src="js/jquery-3.5.1.js"></script>
  <script scr="js/bootstrep.min.js"></script>
</body>
</html>