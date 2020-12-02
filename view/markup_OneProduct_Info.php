<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!--Bootstrap 4 CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"><!-- Latest compiled and minified CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!-- jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script><!-- Popper JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script><!-- Latest compiled JavaScript -->
    <!--External CSS file used for this HTML document-->
    <link rel="stylesheet" href="../view/style_OneProduct_Info.css">
  </head>
  <body>   
    <div id="cover_OneProduct_Info" class="container-fluid">
      <div id="OneProduct_Info_Content">
        <div id="OneProduct_Info_PHPcode">
          <!--
          <p>Hello World</p>
          <p>Hello World Hi HI Hi HI HI HI</p>
          -->
          <?php
            $conn = new mysqli("localhost","root","","mylabdb");
            if ($conn->connect_error){
              die("Failed to connect".$conn->connect_error);
            }
            if (isset($_POST['Search_submit'])) {
              $data = $_POST['search'];
              $sql = "SELECT * FROM product WHERE name='$data'";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();

              printf("<p>ID of this Device: %s</p>",$row['id']);
              printf("<p>Device Name: %s</p>",$row['name']);
              printf("<p>Price: %s</p>",$row['price']);
            }
            mysqli_close($conn);
          ?>
        </div>
      </div>
    </div>
  </body>    
</html>