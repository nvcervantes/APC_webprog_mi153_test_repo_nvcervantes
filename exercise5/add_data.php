<!DOCTYPE html PUBLIC>
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // var for input data
 $name = $_POST['name'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $comment = $_POST['comment'];
 $cpnum = $_POST['cpnum'];
 $gender = $_POST['gender'];
 $nickname = $_POST['nickname'];
  
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(name,email,address, comment, cpnum, gender, nickname) VALUES('$name','$email','$address', '$comment', '$cpnum', '$gender', '$nickname')";
 mysqli_query($con,$sql_query);
        
 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
html { 
  background: url(another.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
div.container {
    width: 100%;
    border: 1px solid black;
	color: white;
	text-align: center;
	clear: center;
	font-size:large;
}
footer {
	padding: 0.3em;
    color: white;
    background-img: lastpic.jpg;
    clear: left;
    text-align: center;
    font-family: french script mt;
	font-size: 150%;
 }
header {
    padding: 0.3em;
    color: white;
    background-img: lastpic.jpg;
    clear: left;
    text-align: center;
    font-family: french script mt;
	font-size: 150%;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 6em;
}

nav ul {
    list-style-type: none;
    padding: 1em;
	clear: left;
}
			
nav ul a {
    text-decoration: none;	
}

article {
    margin-left: 170px;
    border-left: 1px gray;
    padding: 1em;
    overflow: hidden
	font-size: large
	background-color: beige;
	font-family: comic sans ms;
}
div.form {
 padding: 70px 0;
    border: 3px solid green;
}
</style>
</head>
<body>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Data</title>
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label><font size="10">Add Data</font></label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php"><font size="10">Back to main page</font></a></td>
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