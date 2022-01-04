<?php
$title = 'Index'; 
require_once 'includes/header.php';
ob_start();
session_start();
include 'db.php';
if(isset($_POST['passchange'])){
	$oldpass = $_POST['oldpass'];
	 $newpass = $_POST['newpass'];
	 $cnewpass = $_POST['cnewpass'];
	
	if($oldpass =='' || $newpass == ''|| $cnewpass==''){
	echo '<p class="cpass">All the fields are required</p>'; 
	}
	else{
		$sql =mysqli_query($dbcon, "SELECT * FROM userdetails where contact_id= '".$_SESSION['contact_id']."'");

			if(mysqli_num_rows($sql) == 1){
			$member = mysqli_fetch_assoc($sql);
			
			if($member['password']!=$oldpass){
			echo '<p class="cpass">your old password is invalid</p>';
			} 
				else 
					if($newpass!= $cnewpass){
					echo '<p class="cpass">Your passwords do not match</p>';
					}
					else{
					$query = mysqli_query($dbcon,"update userdetails set password='$newpass' where contact_id= '".$_SESSION['contact_id']."'");
					if($query){
					echo '<p class="cpasssuc">Password updated</p>';
					}
					else{
					echo 'error';
				}
			}
		}
	}
}

?>

<div id="main">
<h1> Phone Book</h1>
<?php  include_once 'menu-main.php';?></div><br><br>
  	<form class="passbox" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<h1> Change Password</h1>
		<table width="100%">
			<tr>
				<td><label>Old Password<span style="color:red">*</span></label> </td>
				<td><input type="password" name ="oldpass" ></td>
			</tr>
			<tr>
				<td><label>New Password<span style="color:red">*</span></label></td>
				<td><input type="password" name="newpass" ></td>
			</tr>
			<tr>
				<td><label>Confirm New Password<span style="color:red">*</span></label></td>
				<td><input type="password" name="cnewpass" ></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value ="Change" name="passchange"></td>
			</tr>
		</table>
	</form>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php';?>