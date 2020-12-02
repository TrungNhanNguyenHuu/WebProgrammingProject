<?php
  $connect = mysqli_connect("localhost","root","","mylabdb");

  $record_per_page = 3; /* number of record per a page */
  $page_Product = '';
  $output = '';

  if (isset($_POST["page_Product"])) {
    $page_Product = $_POST["page_Product"];
  } else {
    $page_Product = 1;
  }

  $start_from = ($page_Product - 1) * $record_per_page;
  $query = "SELECT * FROM product ORDER BY id ASC LIMIT $start_from, $record_per_page";

  $result = mysqli_query($connect, $query);
  $output .= "
  <table class='table table-bordered'>
    <tr>
      <th width='5%'>ID</th>
      <th width='5%'>Device Name</th>
      <th width='5%'>Price</th>
    </tr>
  ";

  while ($row = mysqli_fetch_array($result)) {
    $output .= '
      <tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["name"].'</td>
        <td>'.$row["price"].'</td>
      </tr>
    ';
  }

  $output .= '</table><br /><div align="center">';

  $page_query = "SELECT * FROM product ORDER BY id ASC";
  $page_result = mysqli_query($connect, $page_query);
  $total_records = mysqli_num_rows($page_result);
  $total_pages = ceil($total_records/$record_per_page);
  for ($i=1; $i<=$total_pages; $i++) {
    $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";
  }
  $output .= '</div><br /><br />';
  echo $output;

?>