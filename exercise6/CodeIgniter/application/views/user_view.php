<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>User</title> 

	  
	  <style>
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
 #s a{
	   
	   font-size:45px;
	   font-family: Impact;
	   color:blue;
   }
</style>

<body>


<div id ="s">
      <a href = "<?php echo base_url(); ?>index.php/user/add_view">Add Data</a>
</div>	

<br>
<center>	
      <table border = "1"> 
         <?php 
            $i = 1; 
            echo "<tr>"; 
            echo "<td>User#</td>"; 
            echo "<td>user_id</td>"; 
            echo "<td>name</td>"; 
			echo "<td>nickname</td>";
			echo "<td>email</td>";
			echo "<td>address</td>";
			echo "<td>gender</td>";
			echo "<td>cpnum</td>";
			echo "<td>comment</td>";
			
			
			
			
            echo "<td>Edit</td>"; 
            echo "<td>Delete</td>"; 
            echo "<tr>"; 
				
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$i++."</td>"; 
               echo "<td>".$r->user_id."</td>"; 
               echo "<td>".$r->name."</td>"; 
			      echo "<td>".$r->nickname."</td>"; 
			      echo "<td>".$r->email."</td>"; 
			      echo "<td>".$r->address."</td>"; 
			      echo "<td>".$r->gender."</td>"; 
			      echo "<td>".$r->cpnum."</td>"; 
			      echo "<td>".$r->comment."</td>"; 
               echo "<td><a href = '".base_url()."index.php/user/edit/"
                  .$r->user_id."'>Edit</a></td>"; 
               echo "<td><a href = '".base_url()."index.php/user/delete/"
                  .$r->user_id."'>Delete</a></td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table> 
		</center>
   </body>
</html>