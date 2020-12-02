<?php
  session_start();
  
  //printf("<p>UserName: %s </p>", $_POST['Login_userName']);
  //printf("<p>PassWord: %s </p>", $_POST['Login_passWord']);
  //printf("<p>UserType: %s </p>", $_POST['opUser']);
  $userName = $_POST['Login_userName'];
  $passWord = $_POST['Login_passWord'];
  $userType = $_POST['opUser'];
  $login_success = 0;

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

  }

  switch($userType) {
    case "1":
      $sql = "SELECT * FROM user_member";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          if ($userName == $row["userName"] && $passWord == $row["passWord"]){
            $login_success = 1;
            break;
          }
        }
      }
      mysqli_free_result($result);
      break;

    case "2":
      $sql = "SELECT * FROM user_vip";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          if ($userName == $row["userName"] && $passWord == $row["passWord"]){
            $login_success = 1;
            break;
          }
        }
      }
      mysqli_free_result($result);
      break;

    case "3":
      $sql = "SELECT * FROM user_admin";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          if ($userName == $row["userName"] && $passWord == $row["passWord"]){
            $login_success = 1;
            break;
          }
        }
      }
      mysqli_free_result($result);
      break;

    default:

  }

  // PHP code: Close the connection to DataBase
  mysqli_close($conn);
  
  if ($login_success == 1) {
    $_SESSION["userName"] = $userName;
    $_SESSION["userType"] = $userType;
    echo "<script>location.href='index.php'</script>"; // Return the index.php here

  } else {
    echo "<script>alert('Username or Password incorrect! Please try again.')</script>";
    echo "<script>location.href='index.php?page=markup_Login.html'</script>"; // Return the index.php here
  }
?>