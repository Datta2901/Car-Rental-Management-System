<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "storedetails";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
 die('Could not Connect My Sql:' .mysqli_error());
}
?>

<?php
session_start();
if(isset($_POST['submit']))
{
    $Em = $_POST['Em'];
    $result = mysqli_query($conn,"SELECT * FROM userdetails where Email='" . $_POST['Em'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_Em=$row['Em'];
	$email_id=$row['Email'];
	$password=$row['Password'];
	if($Em==$fetch_Em) {
				$to = $email_id;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: password@studentstutorial.com" . "\r\n" .
                "CC: somebodyelse@example.com";
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'invalid userid';
				}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>user id:</td><td><input type='text' name='Email'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body>
</html>