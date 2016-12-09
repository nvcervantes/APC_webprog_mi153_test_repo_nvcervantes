<html lang = "en">
 
	<head>
	<title>My Home Page</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css"/>

<style>
html { 
  background: url(css/uploads/lastpic.jpg) no-repeat center center fixed; 
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
table, th, td {
	border-style:double;
	border-collapse: collapse;
	text-align:center;
	padding: 5px;
}
</style>
	
<body> 

<div id ="prof">
 <center>
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>Nickname</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>home address</strong></td>
        <td><strong>Gender</strong></td>
        <td><strong>Cellphone number</strong></td>
        <td><strong>Comment</strong></td>
        <td><strong>Action</strong></td>
        
    </tr>
<?php foreach ($users as $users_item): ?>
        <tr>
            <td><?php echo $users_item['name']; ?></td> 
            <td><?php echo $users_item['nickname']; ?></td>
            <td><?php echo $users_item['email']; ?></td>
            <td><?php echo $users_item['hadd']; ?></td>
            <td><?php echo $users_item['gender']; ?></td>
            <td><?php echo $users_item['cpnum']; ?></td>
            <td><?php echo $users_item['comment']; ?></td>
            

            <td>
                <a href="<?php echo site_url('users/'.$users_item['slug']); ?>">View</a> 
                <a href="<?php echo site_url('users/edit/'.$users_item['id']); ?>">Edit</a> 
                <a href="<?php echo site_url('user_controller/delete/'.$users_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>

</center>
<div>
   </body>
	
</html>