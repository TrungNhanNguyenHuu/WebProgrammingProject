<?php
  $conn = new mysqli("localhost","root","","mylabdb");
  if ($conn->connect_error) {
    die("Failed to connect!".$conn->connect_error);
  }
  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $query = "SELECT name FROM product WHERE name LIKE '%$inpText%'";
    $result = $conn->query($query);
    if ($result->num_rows > 0){
      while ($row = $result->fetch_assoc()){
        echo "<p><a href='#'>".$row['name']."</a></p>";
      }
    }
    else {
      echo "<p><a>No Record</a></p>";
    }
  }
?>