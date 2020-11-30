<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!--Bootstrap 4 CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"><!-- Latest compiled and minified CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!-- jQuery library --> <!--already include AJAX load() method-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script><!-- Popper JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script><!-- Latest compiled JavaScript -->
    <!--External CSS file used for this HTML document-->
    <link rel="stylesheet" href="../view/style_Exercise.css">
  </head>
  <body>   
    <div id="coverExercise" class="container-fluid">
      <div id="Exercise_div_1">
        <div id="Exercise_div_2">
          <p>This is the Lab Exercise about PHP, MySQL, HTML5</p>
          <div id="Exercise_PHP_cover">
            <?php
              // PHP code: Start the connection to DataBase
              $servername = "localhost";  //This is DataBase Server
              $username = "root";         //This is User Name
              $password = "";             //This is Password
              $dbname = "mylabdb";          //This is DataBase Name
              $conn = mysqli_connect($servername, $username, $password, $dbname);
              if (!$conn) {
                echo '<p>Something Wrong is Happening</p>';
                die("Connection failed: " . mysqli_connect_error());
              } else {
                echo '<p>Connect to DataBase successfully</p>';
              }
            ?>
            <div id="Exercise_div_3">
              <table id="Exercise_TableSinger">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Year Of Birth</th>
                    <th>Gender</th>
                 </tr>    
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT ID, Name, YearOfBirth, Gender FROM singer";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        printf("<tr>");
                        printf("<td>%s</td>", $row["ID"]);
                        printf("<td>%s</td>", $row["Name"]);
                        printf("<td>%s</td>", $row["YearOfBirth"]);
                        printf("<td>%s</td>", $row["Gender"]);
                        printf("</tr>");
                        //printf("<p> %s (%s) (%s) (%s) </p>", $row["ID"], $row["Name"], $row["YearOfBirth"], $row["Gender"]);
                      }
                    }
                    mysqli_free_result($result);  
                  ?>
                </tbody>
              </table>
              <!-- Exercise Write code to add new singer to the table -->
              <div>
                <form action="" method="post" id="Exercise_Form_AddSinger">
                  <label for="f_ID">ID:</label><br>
                  <input type="text" id="f_ID" name="f_ID"><br>
                  <label for="f_Name">Name:</label><br>
                  <input type="text" id="f_Name" name="f_Name"><br>
                  <label for="f_Year">Year Of Birth:</label><br>
                  <input type="text" id="f_Year" name="f_Year"><br>
                  <label for="f_Gender">Gender:</label><br>
                  <input type="text" id="f_Gender" name="f_Gender"><br><br>
                  <input id="Exercise_Form_AddSinger_Reloader" type="submit" name="f_submit01" value="Submit"><br><br>
                  <button onclick="ExerciseReloadfunction()">Reload</button>
                </form>
              </div>
              <?php
                if (isset($_POST['f_submit01'])) {
                  $id = $_POST['f_ID'];
                  $name = $_POST['f_Name'];
                  $yearOfBirth = $_POST['f_Year'];
                  $gender = $_POST['f_Gender'];
                  $sql = "INSERT INTO singer (ID, Name, YearOfBirth, Gender) VALUES ('$id','$name','$yearOfBirth', '$gender')";
                  mysqli_query($conn, $sql);
                }   
              ?>
            </div>
            <?php
              // PHP code: Close the connection to DataBase
              mysqli_close($conn); 
            ?>
          </div>
        </div>
      </div>
    </div>
    <!--JavaScript start-->
    <script> 
      function ExerciseReloadfunction() {
        $("#coverExercise").load(" #coverExercise");
      }
    </script>
  </body>    
</html>