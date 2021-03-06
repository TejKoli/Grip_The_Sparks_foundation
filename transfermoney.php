<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>

<body style="background-color : #BDC3C7;">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container" >
        <h2 class="text-center pt-4" style="color : black;">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2" style="border-color: #000000;">Id</th>
                            <th scope="col" class="text-center py-2" style="border-color: #000000;">Name</th>
                            <th scope="col" class="text-center py-2" style="border-color: #000000;">E-Mail</th>
                            <th scope="col" class="text-center py-2" style="border-color: #000000;">Balance</th>
                            <th scope="col" class="text-center py-2" style="border-color: #000000;">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2" style="border-color: #000000;"><?php echo $rows['id'] ?></td>
                        <td class="py-2" style="border-color: #000000;"><?php echo $rows['name']?></td>
                        <td class="py-2" style="border-color: #000000;"><?php echo $rows['email']?></td>
                        <td class="py-2" style="border-color: #000000;"><?php echo $rows['balance']?></td>
                        <td style="border-color: #000000;"><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #98FB98;">Send money</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <footer class="text-center mt-5 py-2">
         <p>Tejas Koli | @GRIP apr'22. <br> &copy 2022, <b>Tejas Koli</b><br></p>
         <div>
        <p class='text-right'; >contact me
       <a href="https://github.com/TejKoli/Grip_The_Sparks_foundation"><img src="img/git.png" align="right-center" width='2%'></a> 
        <a href="https://www.linkedin.com/in/tejas-koli-230555183/"><img src="img/linkedin.png" align="right" width='2%'></a></p>
        <p class='text-right'; >mahabank@gmail.com</p>
      </div>
        </footer>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>