<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<form action ="" method=POST>
<div class="container">
<h1>Register</h1>
<p>Wanna create an account for free?</p>
<input type="text" placeholder="First Name" name="fname" id="fname"
required>
<input type="text" placeholder="Last Name" name="lname" id="lname"
required>
<input type="email" placeholder="Email" name="email" id="email" required>
<input type="password" placeholder="Password" name="pass" id="pass"
required>
<input type="password" placeholder="Confirm Password" name="cpass"
id="cpass" required>
<input type="date" placeholder="Birthday Date" name="bday" id="bday"
required>
<p><input type="checkbox"> I accept the <font color="green">Terms of Use
</font>& <font color="green">Privacy policy</font>.</p>
<input type="submit" value="Register Now" style="background-color: #50a84f;
color: white;
padding: 16px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
opacity: 0.9;">
</div>
</form>
<p style="color:white;">Already have an account? <a href="login.php">Sign
in</a>.</p> </center>
</body>
</html> <?php
if($_POST){
$servername = "localhost";
$username = "root";
$password = "lamp";
$dbname = "lampdb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection
failed: " .$conn->connect_error);
}
$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['email'];
$d=$_POST['pass'];
$e=$_POST['bday'];
$sql = "INSERT INTO login (firstname, lastname, email, password,DOB) VALUES ('$a','$b','$c','$d','$e')";
if ($conn->query($sql) === TRUE)
{
header('location:login.php');
} else {
echo "Error: " . $sql . "<br>" .
$conn->error;
}
$conn->close();
}
?>