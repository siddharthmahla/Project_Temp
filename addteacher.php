<?php
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,"sps");
 $query = "insert into teachers_table values($_POST[T_ID],'$_POST[T_NAME]','$_POST[T_EMAIL]','$_POST[T_Password]','$_POST[T_DOB]','$_POST[T_GENDER]','$_POST[T_MOB]','$_POST[T_ADDRESS]')";
 
  $query_run = mysqli_query($connection,$query);
?>

<script>
  alert("Successfully added");
  window.location.href = "admindashboard.php";
</script>