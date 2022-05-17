<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        width: 100%;
        height: 100vh;
      }
      .div1{
        /*margin-left: 170px;*/
      }
    </style>
  </head>
  <body>
    <div class="div1">
      <?php
      include 'connect.php';
      $sid=$_GET['studentid'];
      $sql="SELECT resume from student where sid= '".$sid."' ";
      $query=mysqli_query($con,$sql);
      while ($info=mysqli_fetch_array($query)) {
        ?>
      <embed type="application/pdf" src="uploaded/<?php echo $info['resume'] ; ?>">
    <?php
      }

      ?>

    </div>

  </body>
</html>