<?php
  session_start();

  include '../view/markup_Header.html'; // Always include the header for all pages
  
  if (isset($_GET['page'])) { // Method GET case
    $page = $_GET['page'];
    include_once '../view/markup_NavBar.html';
    include_once "../view/$page";

  } else if (isset($_POST['page'])) { //Method POST case 

  } else { // Default case
    include_once '../view/markup_NavBar.html';
    include_once '../view/markup_HomePage.html';      
  }

  include '../view/markup_Footer.html'; // Always include the footer for all pages
?>
  <!--
        $username1 = $_POST['username'];
    $password1 = $_POST['password'];

    echo "Username: $username1";
    echo "<br>";
    echo "Password: $password1";
    echo "<br><br><br>";

    $goldenName = "a";
    $goldenPass = "b";

    if (strcmp($username1, $goldenName) == 0){
        if (strcmp($password1, $goldenPass) == 0) {
            echo "Welcome TN User ^_^";
        } else{
            echo "Wrong PassWord ^_^";
        }
    } else{
        echo "Wrong UserName ^_^";
    }
  -->