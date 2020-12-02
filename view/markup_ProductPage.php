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
    <link rel="stylesheet" href="../view/style_ProductPage.css">
  </head>
  <body>   
    <div id="cover_ProductPage" class="container-fluid">
      <div id="ProductPage_Content">
        <div class="table-responsive" id="ProductPage_pagination_data">

        </div>
      </div>
    </div>
    <script>
      $(document).ready(function(){
        load_data();
        function load_data(page_Product){ /*page*/
          $.ajax({
            url:"../controller/controller_ProductPage.php", /*pagination.php*/
            method:"POST",
            data:{page_Product:page_Product},
            success:function(data){
              $('#ProductPage_pagination_data').html(data);
            }
          });
        }

        $(document).on('click', '.pagination_link', function(){
          var page_Product = $(this).attr("id");
          load_data(page_Product);
        });
      });
    </script>
  </body>    
</html>