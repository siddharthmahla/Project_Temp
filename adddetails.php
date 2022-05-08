              <?php
              $connection = mysqli_connect("localhost","root","");
              $db = mysqli_select_db($connection,"sps");
              $query = "insert into department values($_POST[D_No],'$_POST[D_Name]','$_POST[D_Head]')";
              
                $query_run = mysqli_query($connection,$query);
              ?>

              <script>
                alert("Successfully added");
                window.location.href = "admindashboard.php";
              </script>