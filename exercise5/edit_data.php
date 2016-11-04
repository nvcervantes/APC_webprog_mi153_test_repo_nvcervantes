<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
<<<<<<< HEAD
 $fetched_row=mysql_fetch_array($result_set);
=======
  $fetched_row=mysql_fetch_array($result_set);
>>>>>>> 028622bd4938c9f63e79a3ec6927cbcf3a40f516
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $city_name = $_POST['city_name'];
 // variables for input data
<<<<<<< HEAD

 // sql query for update data into database
 $sql_query = "UPDATE users SET first_name='$first_name',last_name='$last_name',user_city='$city_name' WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
=======
 
 // sql query for update data into database
 $sql_query = "UPDATE users SET first_name='$first_name',last_name='$last_name',user_city='$city_name' WHERE user_id=".$_GET['edit_id'];
        mysqli_query($con, $sql_query);
 // sql query for update data into database 
}
?>

<html>
>>>>>>> 028622bd4938c9f63e79a3ec6927cbcf3a40f516
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<<<<<<< HEAD
<div id="header">
 <div id="content">
    <label>CRUD Operations With PHP and MySql - By Cleartuts</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
=======
<div id="body">
 <div id="content">
    <form method="post"><
>>>>>>> 028622bd4938c9f63e79a3ec6927cbcf3a40f516
    <table align="center">
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" value="<?php echo $fetched_row['first_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $fetched_row['last_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="City" value="<?php echo $fetched_row['user_city']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
<<<<<<< HEAD
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
=======
>>>>>>> 028622bd4938c9f63e79a3ec6927cbcf3a40f516
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>