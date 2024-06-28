<?php


$conn = new mysqli("localhost", "root", "", "ttech");

$sql="SELECT * FROM contacts";

$result=mysqli_query($conn,$sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin home</title>
    <link rel="stylesheet" href="admin.css">
     <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
   
<?php
include 'admin_sidebar.php';
   ?>
   <div class="content">
   <h1>Applied for admissions</h1>
   
<center>
   <table style="width:100%">
  <tr>
  <th style="padding:20px; font-size:15px;">Name</th>
  <th style="padding:20px; font-size:15px;">lastname</th>

      <th style="padding:20px; font-size:15px;">Email</th>
      <th style="padding:20px; font-size:15px;">Services</th>
      <th style="padding:20px; font-size:15px;">Message</th>

  </tr>
  <?php
    while ($info=$result->fetch_assoc()){

   
?>
  <tr>
    <td style="padding:20px";>
    <?php  echo "{$info['first_name']}";
       ?></td>
        <td style="padding:20px";>
    <?php  echo "{$info['last_name']}";
       ?></td>
    <td style="padding:20px";>
    <?php  echo "{$info['email']}";
       ?></td>
    <td style="padding:20px;">
    <?php  echo "{$info['field']}";
       ?></td>
    <td style="padding:20px;">
    <?php  echo "{$info['message']}";
       ?></td>

  </tr>
  <?php
    }
  ?>

</table>
  </center>
   
   </table>

</div>
   </body>
   </html>