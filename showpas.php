<?php
session_start(); 
include "include/database.php";?>
<!DOCTYPE html>
<html>
<head>

	<style>
		table {
			position: relative;
			z-index: 0;
			left: 200px;
			top: 160px;
  border: 0px 0px 10px 0px solid black;
  border-collapse: collapse;
  text-align: center;
  padding: 20px;
  color: white;
}
th{
	position: relative;
			z-index: 0;
			top: 60px;
			border-bottom-width:10px; 
			border-color: white;
  text-align: center;
  color: white;
}
td{
	position: relative;
			z-index: 0;
			padding: 5px;
			top: 80px;
  border: 0px 0px 5px 0px solid black;
margin: 10px;  text-align: center;
  color: white;
}
.sidepanel  {
  width: 0px;
  position: fixed;
  z-index: 1;
  height: 2000px;
  top: 0;
  left: 0;
  background-color: black;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 50px;
}

.sidepanel a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidepanel a:hover {
  color: #f1f1f1;
}

.sidepanel p {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}


.sidepanel .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color:#444;
}
	</style>
</head>
<body>
	<body style="background-image: linear-gradient(to right,#434343 0%, black 100%); min-height: 100%; overflow-x: hidden; position: relative; padding-bottom: 6rem;">
	<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">   &times; </a>

  <a style="color: blue;" href="#">Show All Passwards</a>
  <a href="addpass.php">Add Passwards</a>
    <a href="loginhtm.php" style="position: relative; z-index: 2; top: 430px;">Log Out</a>
    <a href="loginafter.php" style="position: relative; z-index: 2; top: 350px;">Back To Main Page</a>

</div>
<div style="position: absolute; float: left; margin: 20px 0px 15px 7px; padding: 0px; font-size: 36px; color: black; cursor: pointer; text-align: right;" onclick="openNav()"><span style="animation: glowingBar 2s; animation-iteration-count: 3; animation-delay: 6s; border-radius: 5px;">&#9776;</span>
            </div>
 <script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>
<img src="logo.png" style="height: 27vh; width: 180px; position: absolute; z-index: 10; top: 15px; right: 550px;">
<?php 
echo '<table style="width:70%">';
 echo "<tr>";
  echo	'<th style="font-size: 30px">Passwords For</th>'; 
   echo '<th style="font-size: 30px">Passwards</th>'; 
  echo "</tr>";


       $sql ="SELECT * FROM ".$_SESSION['username'].";";
       
       if($result=mysqli_query($conn,$sql))
      {
        while ($row=mysqli_fetch_row($result))
        {
          // var_dump($row);
          // die();
          echo "<tr>";
           echo "<td>".$row[1]."</td>";
           echo "<td>".$row[2]."</td>";
           echo "</tr>";
        }
      }
    
    else{
           header("Location=./showpas.php?error=cantretrieve");
         }   
echo "</table>";
  ?>
    
</body>
</html>