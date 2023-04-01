<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Register Page of BMS</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="register.css">


	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		
	<link rel="stylesheet" href="./style.css">
    <style>
        .form {
            margin: 50px auto;
            width: 300px;
            padding: 30px 25px;
            background: white;
        }
    </style>
</head>

<body>
    


	<form action="" method="post">
		<div class="box-form">
			<div class="left">
				<div class="overlay">
					<h1>BMS Register</h1><br>
					<p>BMS - Blood Management System</p>
					<span>
						<p>login with social media</p>
						<a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</span>
				</div>
			</div>


			<div class="right">
				<h5 style="font-size:70px; width:450px">Register</h5>
                
                <?php
                    require('db.php');
                    // When form submitted, insert values into the database.
                    // $result=false;
                    // $stmt = $con->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
                    // $stmt->bind_param("sss", $username, $email, $password);
                    if (isset($_POST['submit'])) {
                        $username = $_POST['username'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        // Check if username already exists
                        $sql_u = "SELECT * FROM user WHERE username='$username'";
                        $res_u = mysqli_query($con, $sql_u);

                        if (mysqli_num_rows($res_u) > 0) {
                            echo "<p style='color:red'>Sorry... username already taken</p>";
                        }else{
                            $query = "INSERT INTO user (username, email, password,create_datetime) 
                                    VALUES ('$username', '$email', '".md5($password)."',current_timestamp());)";
                            $results = mysqli_query($con, $query);
                            echo "<p style='color:green'>Registration successful!</p>";
                        }
                    }
                ?>
                
                
				<p>Have an account? <a href="/BMS/login/login.php">Login</a></p>
				<div class="inputs">
					<input type="text" placeholder="user name" name="username" id="un">
					<br>
					<input type="email"  placeholder="email" name="email" id="em">
                <br>
					<input type="password" placeholder="password" name="password" id="pwd">
				</div>

				<br><br>

				<br>
				<button type="submit" name="submit" value="Register">Register</button>
         
				<P> Back to Home <a href="/BMS/index.html">Home</a></P>
				<br>
				<br>
				<br>
			</div>

		</div>
	</form>
	<!-- partial -->


</body>

</html>