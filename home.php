<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Peysbuko</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            color: #000;
            margin: 0;
            padding: 0;
            transition: background-color 0.3s, color 0.3s;
        }
        body.dark-mode {
            background-color: #121212;
            color: #e0e0e0;
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
            color: #000;
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, color 0.3s;
        }
        body.dark-mode .main-box {
            background-color: #333;
            color: #e0e0e0;
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
        .dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    right: 0;
}

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .coconut {
            cursor: pointer;
            display: inline-block;
            width: 100px;
            height: 100px;
        }
        .coconut svg {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Peysbuko</a></p>
        </div>
        <div class="right-links">
            <?php 
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");
            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            ?>
            <div class="dropdown">
                <button class="btn">Menu</button>
                <div class="dropdown-content">
                    <a href="about.php">About</a>
                    <a href="edit.php?Id=<?php echo $res_id; ?>">Edit Profile</a>
                    <a href="php/logout.php">Log Out</a>
                </div>
            </div>
        </div>
    </div>
    <main>
       <div class="main-box">
       <b>Profile</b>
          <div class="bottom">
            <div class="box">
                <p>Hello, <b><?php echo $res_Uname ?></b>!</p>
            </div>
            <div class="bottom">
            <div class="box">
                <p>Your email is <b><?php echo $res_Email ?></b></p>
            </div>
          </div>
          <div class="bottom">
            <div class="box">
                <p>You are <b><?php echo $res_Age ?> years old</b></p> 
            </div>
          </div>
          <div class="bottom">
            <div class="box">
                <p>The Coconut!</p>
                <div class="coconut" id="coconut">
                    <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="30" fill="#6b4423"/>
                    </svg>
                </div>
            </div>
          </div>
          <button class="btn" id="toggle-dark-mode">Toggle Dark Mode</button>
       </div>
    </main>
    <script>
        document.getElementById('toggle-dark-mode').addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
        });

        let clickCount = 0;
        const coconut = document.getElementById('coconut');
        coconut.addEventListener('click', function() {
            clickCount++;
            if (clickCount >= 1) {
                window.location.href = 'https://www.youtube.com/watch?v=PKQPey6L42M';
            }
        });
    </script>
</body>
</html>
