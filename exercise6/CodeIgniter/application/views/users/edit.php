<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
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
   </head> 
	
   <body> 


   <div id ="prof">
   <center>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('users/edit/'.$users_item['id']); ?>
  		  <br>
            <br>
        
            <label for="name">Name</label>
            <input type="input" name="name" size="20"  value="<?php echo $users_item['name'] ?>" />
            <br>
            <br>
            
        	 <label for="nickname">NickName</label>
            <input type="input" name="nickname" size="20" value="<?php echo $users_item['nickname'] ?>" />
        	<br>
            <br>
        
			<label for="email">Email</label>
            <input type="input" name="email" size="20"  value="<?php echo $users_item['email'] ?>"/>
        	<br>
            <br>

            <label for="hadd">Home Address</label>
            <input type="input" name="hadd" size="20" value="<?php echo $users_item['hadd'] ?>"/>
            <br>
            <br>

            <label for="gender">Gender</label>
            <input type="input" name="gender" size="20" value="<?php echo $users_item['gender'] ?>"/>
    		<br>
            <br>    
 

            <label for="cpnum">Cellphone Number</label>
            <input type="input" name="cpnum" size="20" value="<?php echo $users_item['cpnum'] ?>"/>
 			<br>
            <br>


            <label for="text">Comment</label>
            <textarea name="comment" rows="10" cols="40"><?php echo $users_item['comment'] ?></textarea>
        	<br>
        	<br>
        
        

            <input type="submit" name="submit" value="Edit User Information" />
        </div>
        </body>
	
</html>
    
</form>