<?php 
	session_start();

	if(isset($_SESSION['status'])){

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>From Submition</title>
</head>
<body>
    <form method= "post" action ="">
		<h1>Registration!</h1>
        <table>
        
        <tr>
						<td>FullName</td>
						<td><input type="text" name="username" value=""></td>
					</tr>
                    <tr>
						<td>FatherName</td>
						<td><input type="text" name="" value=""></td>
                        <tr>
						<td>MotherName</td>
						<td><input type="text" name="" value=""></td>
					</tr>
					</tr>
                    <td>Age </td>
						<td> <input type="number" name=""></td>
					</tr>
                    <tr>
						<td>PhoneNumber</td>
						<td><input type="text" name="phonenumber" value=""></td>
					</tr>
                    <tr>
						<td>NIDNumber </td>
						<td><input type="text" name="NID" value=""></td>
					</tr>
                    <tr>
					<td>Gender</td>
                       <td><input type="radio" name="gender" value=""/> Male
                       <input type="radio" name="gender" value=""/> Female
                       <input type="radio" name="gender" value=""/> Other</td>
					</tr>

                    <td>Image</td>
						<td> <input type="file" name=""></td>
					</tr>
                  
                    <tr>
						<td>Address </td>
						<td> <textarea> </textarea>	</td>
					</tr>
                    <td> 
							<input type="button" name=""  value="Save" />
							<input type="submit" name=""  value="Submit" />
							<input type="reset" name=""  value="Reset" />
					</td>

    </td>




        </table>

    </form>
		<a href="logout.php"> logout </a>
</body>
</html>

<?php } else{

	echo "invalid request";
    
} ?>
<?php

if ($_SERVER['REQUEST_METHOD']=='post')
{
$FullName=$_REQUEST['FullName'];
$FatherName=$_REQUEST['FatherName'];
$MotherName=$_REQUEST['MotherName'];
$PhoneNumber=$_REQUEST['PhoneNumber'];
$NIDNumber =$_REQUEST['NIDNumber '];
$Age =$_REQUEST['Age '];
$Image=$_REQUEST['Image'];
$Address=$_REQUEST['Address'];
//$FatherName=$_REQUEST['FatherName'];


 if ($FullName==null||$FatherName==null||$MotherName==null||$PhoneNumber==null||$NIDNumber==null||$Age==null||$Image==null||$Address==null){

 echo"Fill Up info Incorrect";
 }
 else{

 echo"successsful";

 }
}




?>