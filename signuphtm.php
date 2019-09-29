<!DOCTYPE html>
<html>
<head>
	<style>
	body{
		background-color: #3377ff;
		margin: 0px;
}
.maindiv{
  background-color: white;
  font-weight: bold;
   font-family: "Helvetica", Times, serif;
  border: 3px solid #708090;
  color: white;
  border-radius: 5px;
  position: absolute;
  top: 55%;
  left: 70%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 50%;
  height: 70vh;
  padding: 20px;
  text-align: center;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,18), 0 6px 20px 0 rgba(0,0,0,0.30);
}
.bg-heading {
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0);
    color: white;
   font-family: Verlag,museo-sans,'Helvetica Neue',Helvetica,Arial,sans-serif;
  position: absolute;
  top: 15%;
  left: 59%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 70%;
  height: 40%;
  text-align: center;
}
.bg-text {
  background-color: white;
  font-weight: bold;
   font-family: "Helvetica", Times, serif;
  border: 3px solid #708090;
  color: white;
  border-radius: 25px;
  position: absolute;
  top: 55%;
  left: 70%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 50%;
  padding: 20px;
  text-align: center;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,18), 0 6px 20px 0 rgba(0,0,0,0.30);
}
.button:a{
  background-color: transparent;
  border: groove;
  color: white;
  border-radius: 25px;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
}

.registerbtn {
  background-color: #4169E1;
  color: white;
  border-radius: 25px;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
  font-size: 20px;
}
.registerbtn:hover {
   box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>
	<img src="logo.png" alt="logo" style="top: -260px; left: 50px;position: relative; z-index: 3; height: 20vh; width: 100px;" >
	<img src="signupbg3.png" alt="signup" style="top: 150px; left: 10px; position: relative; z-index: 2; height: 60vh; width: 350px;" >
<div class="bg-text">


    <h1 style="text-align:center; font-size:35px; color:black;font-style: Lato; font-family:san-serif;">Sign Up</h1>
<hr>
<br>
<br>
<form action="signup.php" method="post">
<input type="text" name="firstname" placeholder="Enter Your First Name" style="border-radius:10px; color: #000000; position:relative; z-index: 2; background-color:#C0C0C0; right:140px;width:280px; height:37px;"><br>
<br>
<input type="text" name="lastname" placeholder="Enter Your Last Name" style="border-radius:10px; position:relative; z-index: 2;color: #000000; right: -150px; bottom : 61px; background-color:#C0C0C0; width:280px; height:37px;"><br>
<br>
<input type="text" name="email" placeholder="Enter Your E-mail" style="border-radius:10px; position:relative; z-index: 2;color: #000000;  bottom: 57px; background-color:#C0C0C0; width:560px; height:37px;"><br>
<br>
<input type="text" name="username" placeholder="Enter Your User Name" style="border-radius:10px; position:relative; z-index: 2;color: #000000; bottom: 51px; background-color:#C0C0C0; width:560px; height:37px;"><br>
<br>
<input type="password" name="password" placeholder="Enter Password" style="border-radius:10px; position:relative; z-index: 2;color: #000000; bottom: 45px; background-color:#C0C0C0; width:560px; height:37px;">
<hr>
 <input type="submit" name="submit" class="registerbtn">


</form>
</body>
</html>