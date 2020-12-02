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
    <link rel="stylesheet" href="../view/style_Search.css">
  </head>
  <body>   
    <div id="coverSearch" class="container-fluid"> <!--The body-->
      <div id="Search_Content">
        <div id="Search_SearchBar_List">
          <form id="Search_Form" action="../controller/index.php?page=markup_OneProduct_Info.php" method="post"> <!--form handler is file markup_OneProductInfo.php-->
            <div id="Search_Input_Group">
              <input type="text" name="search" id="search" placeholder="Search..."> <!--id "search"-->
              <div id="Search_btn">
                <input type="submit" name="Search_submit" value="Search">
              </div>
            </div>    
          </form>
          <div id="Search_List">
            <!--
            <p><a href="#">Search List will appear here</a></p>
            <p><a href="#">Search list 1</a></p>
            <p><a href='#'>Search list 2/<a></p>
            <p><a href='#'>Samsung Galaxy Note 20 Ultra 5G</a></p>
            -->
          </div>  
        </div>
      </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#search").keyup(function(){
          var searchText = $(this).val();
          if (searchText != '') {
            $.ajax({
              url:'../controller/controller_Search.php',
              method:'post',
              data:{query:searchText},
              success:function(response){
                $("#Search_List").html(response);
              }
            });
          } else {
            $("#Search_List").html('');
          }
        });
        $(document).on('click','a',function(){
          $("#search").val($(this).text());
          $("#Search_List").html('');
        });
      });
    </script>
  </body>
  <!--
  <body class="bg-info">
  <div class="container">
    <div class="row mt-4">
      <div class="col-md-8 mx-auto bg-light rounded p-4">
        <h5 class="text-center font-weight-bold">AutoComplete Search Using Bootstrap 4, PHP, PDO - MySQL & Ajax</h5>
        <hr class="my-1">
        <h5 class="text-center text-secondary">Write any country name in the search box</h5>
        <form action="details.php" method="post" class="p-3">
          <div class="input-group">
            <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-info" placeholder="Search..." autocomplete="off" required>
            <div class="input-group-append">
              <input type="submit" name="submit" value="Search" class="btn btn-info btn-lg rounded-0">
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-5" style="position: relative;margin-top: -38px;margin-left: 215px;">
        <div class="list-group" id="show-list">
          <p>Here the list will display here</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
  </body>
  -->
</html>