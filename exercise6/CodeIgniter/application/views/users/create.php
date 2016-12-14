<!DOCTYPE html> 

<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Mypage</title>  
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
<p><span class="error"><u>* required field.</u></p>

<?php echo validation_errors(); ?>
 <?php echo form_open('users/create'); ?>    
   
<table BORDER="1" BORDERCOLOR="BLACK" cellpadding="5px">
	<tr> 
		<td>
			<label for="name">Name:</label>
		</td>
		<td>
			<input type="text" name="name" size="30" />
			<span class="error">*</span>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="nickname">Nickname:</label>
		</td>
		<td>
			<input type="text" name="nickname" size="30" />
			<span class="error">*</span>
		</td>
	</tr>
		
	<tr>
		<td>
			<label for="email">E-mail:</label>
		</td>
		<td>
			<input type="text" name="email" size="30" />
			<span class="error">*</span>
		</td>
	</tr>
		
	<tr>
		<td>
			<label for="sddress">Home Address:</label>
		</td>
		<td>
			<textarea name="address" rows="5" cols="30"></textarea>
		</td>
	</tr>

	<tr>
		<td>
			<label for="gender">Gender:</label>
		</td>
		<td>
			<input type="radio" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			<input type="radio" name="gender"<?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<span class="error">*</span>
		</td>
	</tr>

	<tr>
		<td>
			<label for="number">Mobile Number:</label>
		</td>
		<td>
			<input type="text" name="number" size="30" />
			<span class="error">*</span>
		</td>
	</tr>	
	
	<tr>
		<td>
			<label for="comment">Comment:</label>
		</td>
		<td>
			<textarea name="comment" rows="5" size="30"></textarea>
		</td>
	</tr>
</table>
<br>	
            <input type="submit" name="submit" value="Create Users item" />
</form>
</center>
</div>
   </body>
</html>