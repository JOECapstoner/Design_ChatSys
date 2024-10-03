<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Simple Chat System using AJAX</title>
    
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom Luxury Styling -->
    <style>
        /* Add background image to the body */
        body {
            background-image: url('upload/sample-pic.jpeg'); /* Path to the background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #ffffff;
            font-family: 'Arial', sans-serif;
        }

        #login_form {
            width: 400px;
            height: auto;
            background-color: rgba(26, 41, 62, 0.9); /* Make background slightly transparent */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.3);
            margin: 80px auto;
        }

        h2 {
            color: #f0a500;
            font-weight: bold;
        }

        .form-control {
            background-color: #0d1b2a;
            border: 1px solid #f0a500;
            color: #ffffff;
        }

        .form-control:focus {
            border-color: #f0a500;
            box-shadow: none;
        }

        button {
            background-color: #f0a500;
            border-color: #f0a500;
            color: #0d1b2a;
            font-weight: bold;
        }

        button:hover {
            background-color: #c78b00;
            border-color: #c78b00;
        }

        .well {
            border: none;
            background-color: transparent;
        }

        /* Styling for logo image */
        .img-logo {
            width: 100px;
            height: 100px;
            display: block;
            margin: 0 auto 20px auto;
            border-radius: 50%;
        }

        a {
            color: #f0a500;
            font-weight: bold;
        }

        a:hover {
            color: #c78b00;
        }
    </style>
</head>
<body>
<div class="container">
    <div id="login_form" class="well">
        <!-- Insert Image for Logo -->
        <img src="upload/potzee.jpg" alt="Logo" class="img-logo"> <!-- Replace with your logo image -->
        <!-- ^^^^^^ Insert Image File path ABOVE ^^^^^^ -->
        <h2><center><span class="glyphicon glyphicon-lock"></span> Please Login</center></h2>
        <hr>

        <form method="POST" action="login.php">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control" required>
            <div style="height: 10px;"></div>

            <label for="password">Password:</label>
            <input type="password" name="password" class="form-	control" required>
            <div style="height: 10px;"></div>

            <button type="submit" class="btn btn-primary btn-block">
                <span class="glyphicon glyphicon-log-in"></span> Login
            </button>

            <div style="height: 10px;"></div>
            <center>No account? <a href="signup.php"> Sign up</a></center>
        </form>

        <div style="height: 15px;"></div>

        <!-- Error message display -->
        <div style="color: red; font-size: 15px;">
            <center>
                <?php
                session_start();
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
            </center>
        </div>
    </div>
</div>
</body>
</html>
