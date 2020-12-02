<?php
  session_start();

  include '../view/markup_Header.html'; // Always include the header for all pages

  if (isset($_SESSION["userName"])) {
    if (isset($_GET['page'])) { // Method GET case
      $page = $_GET['page'];
      include_once '../view/markup_NavBar2.html';
      include_once "../view/$page";
  
    } else if (isset($_POST['page'])) { //Method POST case 
  
    } else { // Default case
      include_once '../view/markup_NavBar2.html';
      include_once '../view/markup_HomePage2.php';      
    }
    
  } else {
    if (isset($_GET['page'])) { // Method GET case
      $page = $_GET['page'];
      include_once '../view/markup_NavBar.html';
      include_once "../view/$page";
  
    } else if (isset($_POST['page'])) { //Method POST case 
  
    } else { // Default case
      include_once '../view/markup_NavBar.html';
      include_once '../view/markup_HomePage.html';      
    }
  }
  
  include '../view/markup_Footer.html'; // Always include the footer for all pages
?>