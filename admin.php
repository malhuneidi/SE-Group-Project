
<!DOCTYPE html>
<html>
<title>Order ThaiFood now</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body {padding:0; height:100%;}
body,h1 {font-family: "Raleway", Arial, sans-serif}
h1 {letter-spacing: 6px}
.w3-row-padding img {margin-bottom: 12px}
body{
	overflow-x:hidden;
}
input[type=text ]{
width:330px;
      box-sizing: border-box;
border: 2px solid #ccc;
	border-radius:4px;
	font-size:16px;
	background-color: white;
	background-image: url('searchicon.png');
	background-position:10px 10px;
	background-repeat: no-repeat;
padding : 12px 20px 12px 12px;
	  -webkit-transition: width 0.4s ease-in-out;
transition: width 0.4s ease-in-out;
}
input[type=password ]{
width:330px;
      box-sizing: border-box;
border: 2px solid #ccc;
        border-radius:4px;
        font-size:16px;
        background-color: white;
        background-image: url('searchicon.png');
        background-position:10px 10px;
        background-repeat: no-repeat;
padding : 12px 20px 12px 12px;
          -webkit-transition: width 0.4s ease-in-out;
transition: width 0.4s ease-in-out;
}

footer{
width: 100%;

}
</style>

<body>
<div class="w3-container w3-padding-44 w3-light-green w3-center">

<div class="w3-padding-62">
<div class="w3-btn-bar w3-border w3-show-inline-block w3-left">
<a href="index.php" class="w3-btn w3-border w3-xlarge w3-opacity ">Homepage</a>

<a href="order.php" class="w3-btn w3-border w3-xlarge w3-opacity ">Order Now</a>
<a href="contactus.php" class="w3-btn w3-border w3-xlarge w3-opacity ">Contact Us</a>
<a href="admin.php" class="w3-btn w3-border w3-xlarge w3-opacity ">Admin Sign in</a>
<a href="tilt1.php" class="w3-btn w3-border w3-xlarge w3-opacity ">Merchandise</a>

</div>
</div>

</div>
<!-- !PAGE CONTENT! -->

<!-- Header -->
<header class="w3-panel w3-padding-228 w3-center w3-opacity">
<h1 class="w3-xlarge">Admin Sign in</h1>
<h3>Please Sign in here to add or remove items from Menu!</h3>
</header>
<div class="w3-btn-bar  w3-center">

<p style="border:3px; border-style:solid;  border-color:green; "> 
<form id="login" name="login" method="post" action="auth.php">
<label class="w3-padding-44 w3-xlarge"> Username: </label><br><input type="text" name="username"/>
<br>
<label class="w3-padding-44  w3-xlarge"> Password:   </label><br><input type="password" name="password"/>
<br>
<input type="submit" value="Login" name="signin" class="w3-xlarge w3-panel"/>



</form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- Footer -->
<footer class="footer w3-padding-64 w3-light-green w3-center"> 
<a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
<a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
<p>Powered by Amazon's Web Service Server</p>
</footer>
</body>
</html>


