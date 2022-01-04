<?php
$title = 'Index'; 
require_once 'includes/header.php'; 
?>

<title>Phone Book</title>
    <script src="script/loginjs.js"></script>
        <div class="container">
            <form class="signUp">
                <h3>Create Your Account</h3>
                <p>Just enter your email address</br>
                    and your password for join.
                </p>
                <input class="w100" type="email" placeholder="Insert eMail" reqired autocomplete='off' />
                <input type="password" placeholder="Insert Password" reqired />
                <input type="password" placeholder="Verify Password" reqired />
                <button class="form-btn sx log-in" type="button">Log In</button>
                <button class="form-btn dx" type="submit">Sign Up</button>
            </form>
        </div>
<br>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
