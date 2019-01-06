<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli("localhost", "root","","phpdasar");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// two password are equal to each other
	if ($_POST['password'] == $_POST['confirmpassword']) {
		//print_r($_FILES); die;
		$username    = $mysqli->real_escape_string($_POST['username']);
		$email       = $mysqli->real_escape_string($_POST['email']);
		$password    = md5($_POST['password']); // md5 has password security
		$avatar_path = $mysqli->real_escape_string('img/avatar/'.$_FILES['avatar']['name']);
		//make sure type is image
		if (preg_match("!image!", $_FILES['avatar']['type'])) {
			//copy image to img
			if (copy($_FILES['avatar']['tmp_name'],$avatar_path)) {
				$_SESSION['username'] = $username;
				$_SESSION['avatar']   = $avatar_path;
				$sql_u = "SELECT * FROM users WHERE username='$username'";
			  	$sql_e = "SELECT * FROM users WHERE email='$email'";
			  	$res_u = mysqli_query($mysqli, $sql_u);
			  	$res_e = mysqli_query($mysqli, $sql_e);
			  	if (mysqli_num_rows($res_u) > 0) {
			  	  $_SESSION['message'] = 'Sorry... username already taken'; 	
			  	}else (mysqli_num_rows($res_e) > 0){
			  	  $_SESSION['message'] = 'Sorry... email already taken'; 	 	
			  	}
				$sql = "INSERT INTO users (username, email, password, avatar) "	. " VALUES ('$username', '$email', '$password', '$avatar_path')";
				//if the is successful, redirect to welcome.php page, done!
				if ($mysqli->query($sql) === true ) {
					$_SESSION['message'] = 'Registration successful! Added '.$username.' to the database';
					//ob_start();
					header("Location: welcome.php");
				 }
                else {
                    $_SESSION['message'] = 'User could not be added to the database!';
                }
                $mysqli->close();          
            }
            else {
                $_SESSION['message'] = 'File upload failed!';
            }
        }
        else {
            $_SESSION['message'] = 'Please only upload GIF, JPG or PNG images!';
        }
    }
    else {
        $_SESSION['message'] = 'Two passwords do not match!';
    }
}

?>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>