<?php
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
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if ($page == "index" or $page == "document_1_mainPage" or $page == "document_3_login") {
      include "$page.html";
    } else {
      include "$page.php";
    }
  } else if (isset($_POST['page'])) {
    $page = $_POST['page'];
    include "$page.php";
  }
-->
<!--
    session_start();

    include '../../secret/config.php';
    include "./common/autoAuthen.php";

    $page_content = array();

    AutoAuthen::rememberMe();



    array_push($page_content , "../views/header.html");
    if (isset($_SESSION['user_type'])){
        $nav = $_SESSION['user_type'];
        array_push($page_content ,"../views/navbar_$nav.html");
    } else {
        array_push($page_content , "../views/navbar.html");
    }


    $page = isset($_GET['page']) ? $_GET['page']: '';

    switch(true) {
        case !isset($_GET['page']):
            header("Location: ".Config::getConfig()['domain'] ."bodyBanner");
            break;

        case (!isset($_SESSION['user_type']) && in_array($_GET['page'],Config::getPermission()['common'])):
            array_push($page_content , "../views/$page.html");
            break;
        case (!isset($_SESSION['user_type']) && !in_array($_GET['page'],Config::getPermission()['common'])):
            header("Location: ".Config::getConfig()['domain'] ."formLogin");
            break;
        case in_array($page, Config::getPermission()['loginCommon']):
        case in_array($page, Config::getPermission()[$_SESSION['user_type']]):
            array_push($page_content , "../views/$page.html");
            break;
        default:
            header("Location: ".Config::getConfig()['domain'] ."bodyBanner");
    }

    if (in_array($_GET['page'],Config::get()['pageGoWithCouting'])){
        array_push($page_content , "../views/counting.html");
    }
    
    array_push($page_content , "../views/footer.html");

    foreach ($page_content as $value) {
        include_once $value;
    }
*/
  -->

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