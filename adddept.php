<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  #department
  {
      height: 75%;
      width:90%;
      background-color: whitesmoke;
      position:fixed ;
      
      top: 21%;
      border: solid 1px black;
      color: red;
      margin-left: 60px;
  }
</style>
<body>
  <center><h2>Add Department Details</h2></center>
<div id="department">
             <form action="adddetails.php" method="POST">
           <table>
             <tr>
               <td>Department no</td>
               <td><input type="text" name="D_No" ></td>
             </tr>
             <tr>
               <td>Department name</td>
               <td><input type="text" name="D_Name" ></td>
             </tr>
             <tr>
               <td>Department head</td>
               <td><input type="text" name="D_Head" ></td>
             </tr>

           </table>
           <center><input id="dbtn" type="submit" name="adddept" value="save"></center>
           </form>
           
           
           </div>
           
</body>
</html>
