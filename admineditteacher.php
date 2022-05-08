<?php
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,"sps");
 $query = "update teachers_table set T_NAME = '$_POST[T_NAME]',T_EMAIL = '$_POST[T_EMAIL]',T_DOB = '$_POST[T_DOB]',T_GENDER = '$_POST[T_GENDER]',T_MOB = '$_POST[T_MOB]',T_ADDRESS = '$_POST[T_ADDRESS]'  where T_ID = $_POST[T_ID]";
  $query_run = mysqli_query($connection,$query);
?>

<script>
  alert("Successfully updated");
  window.location.href = "admindashboard.php";
</script>