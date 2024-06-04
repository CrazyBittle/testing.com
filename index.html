<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Login</title>
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
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $password = mysqli_real_escape_string($con, $_POST['password']);

                    $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email' AND Password='$password'") or die("Select Error");
                    $row = mysqli_fetch_assoc($result);

                    if(is_array($row) && !empty($row)){
                        $_SESSION['valid'] = $row['Email'];
                        $_SESSION['username'] = $row['Username'];
                        $_SESSION['age'] = $row['Age'];
                        $_SESSION['id'] = $row['Id'];
                    } else {
                        echo "<div class='message'>
                                <p>Wrong Username or Password</p>
                              </div> <br>";
                        echo "<a href='index.php'><button class='btn'>Go Back</button>";
                    }
                    if(isset($_SESSION['valid'])){
                        header("Location: home.php");
                    }
                  } else {
                ?>
                <header>Login</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>

                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Login" required>
                    </div>
                    <div class="links">
                        Don't have account? <a href="register.php">Sign Up Now</a>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>
