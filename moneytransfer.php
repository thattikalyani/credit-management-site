<html>
<head>
	<title>transfer</title>
    <style>
       
        ul {
    list-style-type: none;
    margin:0%;
    padding:0;
    overflow:hidden;
    background-color: cornflowerblue;
    text-align: center;
    
}
li{
    float:left;
    font-size:20px;
}
li a{
    font-family: lato;
    float: left
    display: block;
    color:white;
    text-align: center;
    padding: 10px;
    width:30%;
    text-decoration: none;  
}
li a:hover{
    background-color:palegreen;
    color: blue;
  }
body{
    background-image:  url(https://www.dream-wallpaper.com/free-wallpaper/nature-wallpaper/wonderful-green-nature-wallpapers-1-wallpaper/1920x1440/free-wallpaper-1.jpg);
    background-size: cover;
}
label{
    color: orange;
    font-size: 50px;
     padding: 12px 12px 12px 0;
  display: inline-block;
}

{
  box-sizing: border-box;
}

input[type=text]{
  width: 10%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


      
    </style>
</head>
<body>
    <ul>
      <li><a href="home.html">Home</a></li>
      <li><a href="insertvalue.html">Enter Details</a></li>
      <li><a href="UserDetails.php">View Users</a></li>
     <li><a href="moneytransfer.php">Transactions</a></li>
      <li><a href="transferhistory.php">Transaction History</a></li>
     
      </ul>
	<center>
	
    <form action="updatedetails.php" method="post">
	<h2>TRANSFER MONEY</h2>
<label>Sender:</label>
<input type="hidden" name="sender">
<select>
  <option disabled selected>-- Select Name --</option>
<?php

$db = mysqli_connect("localhost","root","","kal");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

$records = mysqli_query($db, "SELECT name From kalyani");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option>" .$data['name'] ."</option>";  // displaying data in option menu
        } 
    $db->close();

?>
</select><br>
<label>Receiver:</label>
<input type="hidden" name="receiver">
<select>
<option disabled selected>-- Select Name --</option>
<?php

$db = mysqli_connect("localhost","root","","kal");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
       
        $records = mysqli_query($db, "SELECT name From kalyani");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option>" .$data['name'] ."</option>";  // displaying data in option menu
        } 
     
$db->close();


?>

</select><br>
     <label>Transfer Money:</label>
     <input type="text" name="credit">

     <br>
     <br>
     <button>SUBMIT</button>
</form>
</center>
	</body>
	</html>