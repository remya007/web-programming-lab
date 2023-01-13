<html>
<head>
<title>odd or even</title>
</head>
<body>
<form name="fomrs"method="POST"action="<?php echo $_SERVER['PHP_SELF'];?>">
Name:<input type="text"name="name"><br><br>
Email Id:<input type="email"name="mail"><br><br>
Address:<textarea name="address"></textarea><br><br>
Gender:
   <input type="radio"id="male"name="gender"value="male">male
   <input type="radio"id="female"name="gender"value="male">female
<br><br>
Date of birth:<input type="date"name="dob"><br>
<input type="submit"name="submit"value="submit">
</form></body></html>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
$name=$_REQUEST['name'];
$email=$_REQUEST['mail'];
$address=$_REQUEST['address'];
$gender=$_REQUEST['gender'];
$dob=$_REQUEST['dob'];
echo "Name:".$name."<br>";
echo "Email Id:".$email."<br>";
echo "address:".$address."<br>";
echo "gender:".$gender."<br>";
echo "date of birth:".$dob."<br>";
}
?>

