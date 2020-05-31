<?php
include 'db.php';
$msg='';
if(!empty($_POST['email']) && isset($_POST['email']) &&  !empty($_POST['password']) &&  isset($_POST['password']) )
{
// username and password sent from Form
$email=mysqli_real_escape_string($connection,$_POST['email']); 
$password=mysqli_real_escape_string($connection,$_POST['password']); 

$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';

if(preg_match($regex, $email))
{  
$password=md5($password); // Encrypted password
$activation=md5($email.time()); // Encrypted email+timestamp

$count=mysqli_query($connection,"SELECT member_id FROM user_info WHERE email='$email'");
if(mysqli_num_rows($count) < 1)
{
mysqli_query($connection,"INSERT INTO user_info(email,pword,code) VALUES('$email','$password','$activation');");

include 'smtp/Send_Mail.php';
$to=$email;
$subject="Email verification";
$body='Hi, <br/> <br/> We need to make sure you are human. Please verify your email and get started using your Website account. <br/> <br/> <a href="'.$base_url.'activation/'.$activation.'">'.$base_url.'activation/'.$activation.'</a>';
Send_Mail($to,$subject,$body);

$msg= "Registration successful, please activate email.";	

}
else
{
$msg= '<font color="#cc0000">The email is already taken, please try new.</font>';	
}



}
else
{
   $msg = '<font color="#cc0000">The email you have entered is invalid, please try again.</font>';  
}


}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>PHP Email Verification Script</title>
<link rel="stylesheet" href="style.css"/>
</head>

<body>
<div id="main">
<h1>PHP Email Verification Script</h1>

<form action="" method="post">
<label>Email</label> <input type="text" name="email" class="input" autocomplete="off"/>
<label>Password </label><input type="password" name="password" class="input" autocomplete="off"/><br/>
<input type="submit" class="button button-primary" value="Registration" /> <span class='msg'><?php echo $msg; ?></span> 
</form>	
</div>
</body>
</html>