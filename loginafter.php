<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-color: white;
		}
		.h1{
			position: relative;
			z-index: 4;
			left: 500px;
			top: 80px;
			font-size: 40px;
			color: white;
			font-style: quando;
		}
		.h3{
			position: relative;
			z-index: 5;
			left: 430px;
			top: 100px;
			font-size: 20px;
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
		<img src="logo.png" style="height: 20vh; width: 130px; position: absolute; z-index: 10; top: 350px; right: 450px;">

	<h1 class="h1">Welcome <?php echo $_SESSION['username']?></h1>
<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">   &times; </a>

  <a href="showpas.php">Show All Passwards</a>
  <a href="addpass.php">Add Passwards</a>
    <a href="loginhtm.php" style="position: relative; z-index: 2; top: 430px;">Log Out</a>

</div>
<div style="position: absolute; float: left; margin: -80px 0px 15px 7px; padding: 0px; font-size: 36px; color: black; cursor: pointer; text-align: right;" onclick="openNav()"><span style="animation: glowingBar 2s; animation-iteration-count: 3; animation-delay: 6s; border-radius: 5px;">&#9776;</span>
            </div>
 <script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>
<img src="userimg.jpg" style="position: relative; z-index: 6; left: 500px; top: 60px;">
<h3 class="h3">Name:<?php echo $_SESSION['firstname']." ".$_SESSION['lastname']?> </h3>
<h3 class="h3">User Name:<?php echo $_SESSION['username']?> </h3>
<h3 class="h3">E-mail:<?php echo $_SESSION['email']?> </h3>

</body>
</html>