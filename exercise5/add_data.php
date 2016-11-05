<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $name = $_POST['name'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $website = $_POST['website'];
 $comment = $_POST['comment'];
 $cpnum = $_POST['cpnum'];
 $gender = $_POST['gender'];
 $nickname = $_POST['nickname'];
 
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(name,email,address, website, comment, cpnum, gender, nickname) VALUES('$name','$email','$address',$website, $comment, $cpnum, $gender, $nickname)";
 mysqli_query($con,$sql_query);
        
        // sql query for inserting data into database
 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>CRUD Operations With PHP and MySql - By Cleartuts</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="name" placeholder="Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="address" placeholder="Address" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="website" placeholder="Website" required /></td>
    </tr>
    <tr>
	<tr>
    <td><input type="text" name="comment" placeholder="Comment" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="cpnum" placeholder="Cellphone Number" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="gender" placeholder="Gender" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="nickname" placeholder="Nickname" required /></td>
    </tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>