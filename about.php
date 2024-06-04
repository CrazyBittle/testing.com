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
        .main-box {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .about-logo {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 450px; /* Match the width of the form box */
    height: 450px; /* Match the height of the form box */
    background: #ffffff;
    margin-right: 10px; /* Adjust spacing between image and form */
    border: 2px solid #8d6e63; /* Brown border to represent the coconut shell */
    border-radius: 20px;
        }
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
    </style>
</head>
<body>
<div class="nav">
        <div class="logo">
            <p>About Peysbuko</p>
        </div>
        <p><a class="btn" href="home.php">Back</a></p>
    </div>
    <div class="main-box">
        <b>This Project was developed by 2 people from BSIT 2D of Davao del Norte State College.</b>
        <p>People below are the members of the group with their names and contribution for the project.</p>
    <img src="358147734_1758303121310275_1045416116999786071_n.jpg" alt="Christian Jay S. Orcullo" class="about-logo">
    <div class="bottom">
            <div class="box">
                <b>Christian Jay S. Orcullo</b>
                <p></p>
            </div>
    <img src="1717207015492.jpg" alt="Kenneth Origenes" class="about-logo">
    <div class="bottom">
    <div class="box">
                <b>Kenneth Origenes</b>
                <p></p>
            </div>
    </div>
</body>
</html>
