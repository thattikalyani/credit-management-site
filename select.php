<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
  <style>
        
        a{
            font-family: inherit;
            font-size: 45px;
            padding: 20px;
            margin: 20px;
        }
        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: plum;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
}


      
    </style>
</head>
<body>
    <ul>
  <li><a class="active" href="home.html">Home</a></li>
  <li><a href="insertvalue.html">Insert values</a></li>
  <li><a href="UserDetails.php">User Details</a></li>
  <li><a href="moneytransfer.html">Transfer</a></li>
  <li><a href="transferhistory.html">Transfer History</a></li>
</ul>
<br>
<br>


<center>
  <legend>USER DETAILS</legend>
    <form action="insert.php" method="post">


<table border="2">
  <tr>
    <td>Id</td>
    <td>Name</td>
    <td>Emil</td>
    <td>Deposit</td>
  </tr>

<?php

$db = mysqli_connect("localhost","root","","kal");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}


$id=$_GET['id'];
$records = mysqli_query($db,"select * from users where id = $id"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['deposit']; ?></td>
  </tr>	
<?php
}
?>
</table>


<?php mysqli_close($db); // Close connection ?><br>


</body>
</html>