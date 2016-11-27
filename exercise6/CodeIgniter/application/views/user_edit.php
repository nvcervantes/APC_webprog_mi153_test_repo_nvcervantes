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
</style>

<body>
<h1>Form</h1>

<br>
<br>  
  
  
<label>Don't forget to click submit then View Data.</label>
      <form method = "" action = "">
		
         <?php 
            echo form_open('user_controller/update_user'); 
            echo form_hidden('old_user_id',$old_user_id); 

			
			echo "<tr>"; 
			echo "<td>"; 
			
            echo form_label('User Number'); 
            echo form_input(array('id'=>'user_id',
               'name'=>'user_id','value'=>$records[0]->user_id)); 
            echo "<br/>"; 
			echo "</tr>"; 
echo "</td>"; 
			
			
			
			
			echo "<tr>"; 
			echo "<td>"; 	
            echo form_label('Nickname'); 
            echo form_input(array('id'=>'nickname','name'=>'nickname',
               'value'=>$records[0]->name)); 
            echo "<br/>"; 
echo "</tr>"; 
echo "</td>"; 
			
			
			echo "<tr>"; 
			echo "<td>"; 	
            echo form_label('Email'); 
            echo form_input(array('id'=>'email','name'=>'email',
               'value'=>$records[0]->name)); 
            echo "<br/>"; 
			echo "</tr>"; 
echo "</td>"; 
			
			
			
			echo "<tr>"; 
			echo "<td>"; 	            
            echo form_label('Address'); 
            echo form_input(array('id'=>'address','name'=>'address',
               'value'=>$records[0]->name)); 
            echo "<br/>"; 
echo "</tr>"; 
echo "</td>"; 

			
			echo "<tr>"; 
			echo "<td>"; 	 
            echo form_label('Gender'); 
            echo form_input(array('id'=>'gender','name'=>'gender',
               'value'=>$records[0]->name)); 
            echo "<br/>"; 
echo "</tr>"; 
echo "</td>"; 
			
			
			echo "<tr>"; 
			echo "<td>"; 	
            echo form_label('Celphone Number'); 
            echo form_input(array('id'=>'cpnum','name'=>'cpnum',
               'value'=>$records[0]->name)); 
            echo "<br/>"; 
echo "</tr>"; 
echo "</td>"; 
			
			
			echo "<tr>"; 
			echo "<td>"; 	      
            echo form_label('Comment'); 
            echo form_input(array('id'=>'comment','name'=>'comment',
               'value'=>$records[0]->name)); 
            echo "<br/>"; 
			echo "</tr>"; 
echo "</td>"; 
	
	
	echo "<tr>"; 
			echo "<td>";
            echo form_submit(array('id'=>'submit','value'=>'Submit')); 
            echo form_close();
echo "</tr>"; 
echo "</td>"; 

			?> 
			
			</table>
</center>			
      </form> 
      </div>
   </body>
	
</html>