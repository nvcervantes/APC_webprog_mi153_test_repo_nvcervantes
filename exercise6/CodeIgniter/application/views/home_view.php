<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to my first CodeIgniter application.</title>
<style type="text/css">
   html { 
  background: url(lastpic.jpg) no-repeat center center fixed; 
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
<div id="container">
    <h1>Welcome to First CodeIgniter Application.</h1>
    <div id="body">
        <div class="gallery">
            <ul>
            <?php if(!empty($images)): foreach($images as $img): ?>
               <li><img src="uploads/<?php echo $img['image']; ?>" alt=""></li>
            <?php endforeach; endif; ?>
            </ul>
        </div>
    </div>
</div>
</body>
</html>