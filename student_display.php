<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship Management system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylecss.css">
    <link rel="stylesheet" href="navcss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 30px;
      }
      .div1{
        margin-left: 170px;
      }
    </style>
    <title>Document</title>
    </head>
    <body>
    <?php include 'navbar1.php';?>
    <div class = "wrapper">
    <div class="container">
        <table id="tableid" class="table">
            <thead>
                <tr>
                    <th scope="col">ROLL No</th>
                    <th scope="col">Company 1</th>
                    <th scope="col">Company 2</th>
                    <th scope="col">Company 3</th>
                    <th scope="col">Self</th>
                    <th scope="col">Resume</th> 
                </tr>
            </thead>
    
            <tbody>
                <?php
                $sql="select * from student order by sid asc";
                $result=mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_array($result)){
                        $sid=$row['sid'];
                        $company1=$row['company1'];
                        $company2=$row['company2'];
                        $company3=$row['company3'];
                        $self=$row['self'];
                        $resume=$row['resume'];
                        echo '<tr>
                        <th scope="row">'.$sid.'</th>
                        <td>'.$company1.'</td>
                        <td>'.$company2.'</td>
                        <td>'.$company3.'</td>
                        <td>'.$self.'</td>
                        <td> <button class="btnd" ><a href="viewresume.php?studentid='.$sid.'" ><img src="img/curriculum-resume-svgrepo-com.svg" alt="" height="40vh" width="40vw"></a></button></td>
                        </tr>';
                    }
                 
                }
                ?>
                
            </tbody>
        </table>
            </div>
            </div>
            <?php include 'footer.php';?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Script -->
   
    <script>
    $(document).ready(function() {
        $('#tableid').DataTable();
    } );
    </script>
    </body>
</html>