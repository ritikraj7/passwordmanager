<?php
session_start(); 
include "include/database.php";?>

<!DOCTYPE html>
<html>
<head>
	<style>
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
.registerbtn {
  background-color: #4169E1;
  color: white;
  border-radius: 25px;
  padding: 16px 20px;
  margin: 8px 0;
  position: absolute;
  top: 410px;
  left: 500px;
  border: none;
  cursor: pointer;
  width: 15%;
  opacity: 0.9;
  font-size: 20px;
}
	</style>
</head>
<body>
<body style="background-image: linear-gradient(to right,#434343 0%, black 100%); min-height: 100%; overflow-x: hidden; position: relative; padding-bottom: 6rem;">
	<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">   &times; </a>

  <a href="showpas.php">Show All Passwards</a>
  <a style="color: blue;" href="#">Add Passwards</a>
    <a href="loginhtm.php"style="position: relative; z-index: 2; top: 430px;">Log Out</a>
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
<img src="logo.png" style="height: 27vh; width: 180px; position: absolute; z-index: 10; top: 15px; right: 580px;">
<h2 style="position: relative; z-index: 5; top: 220px; left: 340px; color: white;">Enter Website:</h2>
<form action="addtemp.php" method="post">
<input type="text" name="passwordof" style="border-radius:10px;position: relative; color: black;  background-color:#C0C0C0; width:380px; height:37px; top: 160px; left: 500px;"><br>
<h2 style="position: relative; z-index: 5; top: 180px; left: 320px; color: white;">Enter Passward:</h2>
<input type="password" name="password"  style="border-radius:10px; position:relative; z-index: 2;color: #000000; top: 130px; left: 500px; background-color:#C0C0C0; width:380px; height:37px;">
<input type="submit" name="submit" class="registerbtn"></input>
</form>
</body>
</html>