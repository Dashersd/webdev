<!DOCTYPE html>
<html>
<head>
    <title>One Piece</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="shortcut icon" href="Image/Strawhat.jpg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
</head>

<style>
/* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
        }

    header{
            text-align: center;
            font-size: 75px;
            font-family: 'Bungee Spice', sans-serif;
            color: #e6ccb2;

        }

    .image{
            width: 150px;
            height: 150px;
            padding: 20px;
        }

        /* Set a background color and text color for the body */
        body {
            background-image: url(Image/back.jpg);
            background-size: cover;
            background-repeat: no-repeat; 
            color: #fff;
            font-family: 'Courier New', sans-serif;
        }

        /* Center the login container vertically and horizontally */
        .login-container {
            width: 250px;
            margin: 0 auto;
            text-align: center;
            background:transparent;
            border: 1px solid #e6ccb2;
            padding: 20px;
            margin-top: 1px;
            border-radius: 15px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Style the h2 header */
        .login-container h2 {
            font-size: 40px;
            margin-bottom: 20px;
            font-family: 'Bungee Spice', sans-serif;
        }

        /* Style form labels */
        .login-container label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #FF9130;
        }

        /* Style form inputs */
        .login-container input {
            width: 80%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #e6ccb2;
            border-radius: 5px;
            text-align: center;
        }

        /* Style the submit button */
        .login-container input[type="submit"] {
            background-color: #FF5B22;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

    

        .login-container input[type="submit"]:hover {
            background-color: #FF9130;
        }

        /* Style error messages */
        .login-container p {
            color: red;
            margin-top: 10px;
        }

        /* Style links */
        .login-container a {
            text-decoration: none;
            color: #FF5B22;
        }

        /* Style links on hover */
        .login-container a:hover {
            text-decoration: underline;
        }

        .sleigh {
            background-color: #e6ccb2; 
            color: black; 
            padding: 10px 20px; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            font-size: 16px; 
            margin-bottom:10px;
            }

        .sleigh::placeholder {
            font-style: italic;
            font-size: 15px; 
        }
        

        .button-78 {
            align-items: center;
            appearance: none;
            background-clip: padding-box;
            background-color: initial;
            background-image: none;
            border-style: none;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            flex-direction: row;
            flex-shrink: 0;
            font-family: Eina01,sans-serif;
            font-size: 16px;
            font-weight: 800;
            justify-content: center;
            line-height: 24px;
            margin: 0;
            min-height: 50px;
            outline: none;
            overflow: visible;
            padding: 19px 26px;
            pointer-events: auto;
            position: relative;
            text-align: center;
            text-decoration: none;
            text-transform: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: middle;
            width: auto;
            word-break: keep-all;
            z-index: 0;
            }

        @media (min-width: 768px) {
        .button-78 {
            padding: 10px 20px;
        }
        }

        .button-78:before,
        .button-78:after {
            border-radius: 80px;
        }

        .button-78:before {
            background-image: linear-gradient(92.83deg, #ff7426 0, #f93a13 100%);
            content: "";
            display: block;
            height: 100%;
            left: 0;
            overflow: hidden;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: -2;
        }

        .button-78:after {
            background-color: initial;
            background-image: linear-gradient(#541a0f 0, #0c0d0d 100%);
            bottom: 4px;
            content: "";
            display: block;
            left: 4px;
            overflow: hidden;
            position: absolute;
            right: 4px;
            top: 4px;
            transition: all 100ms ease-out;
            z-index: -1;
        }

        .button-78:hover:not(:disabled):before {
            background: linear-gradient(92.83deg, rgb(255, 116, 38) 0%, rgb(249, 58, 19) 100%);
        }

        .button-78:hover:not(:disabled):after {
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            transition-timing-function: ease-in;
            opacity: 0;
        }

        .button-78:active:not(:disabled) {
            color: #ccc;
        }

        .button-78:active:not(:disabled):before {
            background-image: linear-gradient(0deg, rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), linear-gradient(92.83deg, #ff7426 0, #f93a13 100%);
        }

        .button-78:active:not(:disabled):after {
            background-image: linear-gradient(#541a0f 0, #0c0d0d 100%);
            bottom: 4px;
            left: 4px;
            right: 4px;
            top: 4px;
        }

        .button-78:disabled {
            cursor: default;
            opacity: .24;
        }

</style>

<header>
<h1>Mugiwara-Kun</h1>
</header>
<body> <br> <br>
    <div class="login-container">
        <h2>Login</h2>
        <center>
        <form method="post" autocomplete="off" action="login.php">
            <label for="username">Username:</label>
            <input placeholder="Username" type="text" name="username" id="username" class="sleigh" required>

            <label for="password">Password:</label>
            <input placeholder="Password" type="password" name="password" id="password" class="sleigh" required>

            <input type="submit" value="Login">
        </form>
    </div>    

</body>
</html>
