<!DOCTYPE html>

<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
      <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/Style.css"> 

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


   <div id = "prof">
   <center>
<?php

echo'<h1>'."Name: ".'</label>'.$users_item['name'].'</h2>' ;

echo'<h1>'."NickName: ".'</label>'.$users_item['nickname'].'</h2>' ;

echo'<h1>'."Email: ".'</label>'.$users_item['email'].'</h2>' ;

echo'<h1>'."Home Address: ".'</label>'.$users_item['address'].'</h2>' ;

echo'<h1>'."Gender: ".'</label>'.$users_item['gender'].'</h2>' ;

echo'<h1>'."Cellphone Number: ".'</label>'.$users_item['cpnum'].'</h2>' ;

echo'<h1>'."comment: ".'</label>'.$users_item['comment'].'</h2>' ;
?>
</center>
</div>
</body>
</html>