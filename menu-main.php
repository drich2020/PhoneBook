<?php
$title = 'Index'; 
require_once 'includes/header.php';
require_once 'db.php';
$query = "SELECT contact_id FROM contactdetails ";
    $result = mysqli_query($dbcon,$query);
	$row = @mysqli_num_rows($result);
?>
<div class="navbar">
  <a href="dashboard.php">Home</a>
  <a href="add_user.php">Add New Contact</a>
  <a href="view_user.php">View All Contacts</a>
  <div class="dropdown">
    <button class="dropbtn">Profile
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="viewProfile.php">View</a>
      <a href="changepassword.php">Change Password</a>
      <a href="logout.php">Logout</a>
    </div>
   </div>
   <a href="contact.php">Contacts Us</a>
</div>  
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>