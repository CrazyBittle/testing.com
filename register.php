<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Register</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .nav {
            background: #a1887f;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }
        .logo a {
            text-decoration: none;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
            
        }
        .right-links {
            display: flex;
            align-items: center;
        }
        .right-links a {
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
        }
        .main-box {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .box {
            margin-bottom: 10px;
        }
        .box p {
            margin: 0;
        }
        .top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .top p {
            font-size: 18px;
            font-weight: bold;
        }
        .bottom {
            margin-top: 20px;
        }
        .btn {
            background-color: #a1887f;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #3b5998;
        }
    </style>
</head>
<body>
<div class="nav">
        <div class="logo">
            <p>Welcome to Peysbuko</p>
        </div>
        <p><a class="btn" href="about.php">About</a></p>
    </div>
    <div class="outer-container">
        <div class="image-container">
            <img src="Peysbuko.png" alt="Peysbuko Logo" class="login-logo">
        </div>
        <div class="container">
            <div class="box form-box">
                <?php 
                include("php/config.php");
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $age = $_POST['age'];
                    $password = $_POST['password'];

                    $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

                    if(mysqli_num_rows($verify_query) != 0 ){
                        echo "<div class='message'>
                                <p>This email is used, Try another One Please!</p>
                              </div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                    } else {
                        mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Error Occurred");

                        echo "<div class='message'>
                                <p>Registration successfully!</p>
                              </div> <br>";
                        echo "<a href='index.php'><button class='btn'>Login Now</button>";
                    }
                } else {
                ?>
                <header>Sign Up</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>

                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Register" required>
                    </div>
                    <div class="links">
                        Already a member? <a href="index.php">Sign In</a>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>
