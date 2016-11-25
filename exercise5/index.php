<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
$sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysqli_query($con,$sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
?>

<!DOCTYPE html PUBLIC>
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

#content {
    padding: 0.3em;
    color: white;
    background-img: lastpic.jpg;
    clear: left;
    text-align: center;
    font-family: french script mt;
	font-size: 1550%;
}
			
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<center>

<div id="header">

</div>

<div id="body">
 <div id="content">
 <header>
    <table align="center">
    <tr>
    <th colspan="5"><a href="add_data.php"><font size="20">You may add data here.</font></a></th>
    </tr>
    <th><font size="10">Name</th></font>
    <th><font size="10">Email</th></font>
    <th><font size="10">Address</th></font>
    <th><font size="10">Comment</th></font>
    <th><font size="10">Cellphone Number</th></font>
    <th><font size="10">Gender</th></font>
    <th><font size="10">Nickname</th></font>
</header>
    <th colspan="2"><font size="10">Operations</th></font>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysqli_query($con,$sql_query);
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
		
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>
</html>