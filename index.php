<?php
$title = 'Index'; 
require_once 'includes/header.php'; 
	ob_start();
	session_start();
	include 'db.php';
	if(isset($_POST['submit'])){
		$username = $_POST['username1'];
		$password = $_POST['password'];
		
		if($username =='' || $password == ''){
		echo '<p class="errorMsg">All the fields are required</p>'; 
		}
		else{
			$sql = mysqli_query($dbcon,"SELECT * FROM userdetails WHERE username = '$username' AND password = '$password'");
		if(mysqli_num_rows($sql) == 1){
		$member = mysqli_fetch_assoc($sql);
			
				$_SESSION['username'] = $username;
				$_SESSION['contact_id'] = $member['contact_id'];
				header('Location: dashboard.php?d=dashboard'); 
		}
		else{
		echo '<p class="loginerror">Invalid username or password</p>';
			}
		}
}
?>

<!-- <form class="loginbox" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<h1>Login</h1>
	<div class="mb-3">
		Username<span style="color:red;">*</span><input type="text" name ="username1" >
	</div>
	<div class="mb-3"> 	
	Password<span style="color:red;">*</span><input type="password" name="password" >
	</div>
<input type="submit" value ="login" name="submit"> -->
<h1>Login</h1>
<form class="loginbox" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div class="mb-3">
    <label for="exampleInputUsername1" class="form-label">Username</label>
    <input type="username" class="form-control" id="exampleInputUsename1" aria-describedby="usernameHelp" name ="username1">
    <div id="usernameHelp" class="form-text">We'll never share your username with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name ="password">
  </div>
  <button type="submit" value ="login" class="btn btn-primary" name="submit">Submit</button>
</form>
<p> Not a member yet? Register <a href="registration.php" id="reg"> Here</a>

<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>