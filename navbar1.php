<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship Management system</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>-->  
    <link rel="stylesheet" href="navcss.css">
    <script>
        

    </script>  
    </head>
<body>
<header class="header">
  <a href="homepagetpo.php" class="logo">HOME</a>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu" >
    <?php 
      if($_SESSION["user_role"]=="TPO" || $_SESSION["user_role"]=="TPC")
      {
         echo '<li><a href="welcome.php">COMPANY VIEW</a></li>';
      }
    ?>
    <?php 
      if($_SESSION["user_role"]=="TPO" || $_SESSION["user_role"]=="TPC")
      {
         echo '<li><a href="student_display.php">STUDENT VIEW</a></li>';
      }
    ?>
    <?php 
      if($_SESSION["user_role"]=="TPO")
      {
         echo '<li><a href="insert.php">INSERT</a></li>';
      }
      else if($_SESSION["user_role"]=="STUDENT")
      {
        echo '<li><a href="student_insert.php">PREFERENCE FORM</a></li>';
      }
    ?>
    <li><a href="help3.php">HELP</a></li>
    <li><a href="contacts.php">CONTACT</a></li>
    <li><a href="logout.php">LOGOUT</a></li>
  </ul>
</header>

</body>
</html>