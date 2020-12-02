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
    <link rel="stylesheet" href="../view/style_HomePage2.css">
  </head>
  <body>   
    <div id="coverHomePage2" class="container-fluid">
      <div id="HomePageWelcome2">
        <?php
          switch($_SESSION["userType"]) {
            case "1":
              printf("<p>Welcome MEMBER <span>%s</span> to my website !</p>",$_SESSION["userName"]);
              break;

            case "2":
              printf("<p>Welcome VIP <span>%s</span> to my website !</p>",$_SESSION["userName"]);
              break;

            case "3":
              printf("<p>Welcome ADMIN <span>%s</span> to my website !</p>",$_SESSION["userName"]);
              break;

            default:
            
          }          
        ?>
      </div>
    </div>
  </body>    
</html>