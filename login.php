<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    // Connect to your MySQL database
    $host = "sql212.infinityfree.com";
    $db_username = "if0_35772382";
    $db_password = "sT3yQomameGwU";
    $db_name = "if0_35772382_users";
    
    $conn = new mysqli($host, $db_username, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch user from the database
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) 
    {
      $user = $result->fetch_assoc();
      echo "Fetched password from database: " . $user["password"] . "<br>";
       echo "Fetched password from database: " . $user["name"] . "<br>";
       echo "Fetched password from database: " . $user["uid"] . "<br>";
        echo "Fetched password from database: " . $user["dept"] . "<br>";
        echo "Fetched password from database: " . $user["position"] . "<br>";
         $name= $user["name"];
         $userid= $user["uid"];
          $userdept= $user["dept"];
             $userpos= $user["position"];
               //  $usersec= $user["sec"];
    // Verify the password
     if ($user["password"]==$_POST["password"]) 
     {
        // Password is correct, set up a session and redirect to the dashboard
        $_SESSION["name"] = $name;
        $_SESSION["uid"] = $userid;
         $_SESSION["dept"] = $userdept;
         $_SESSION["position"] = $userpos;
           //  $_SESSION["sec"] = $usersec;
        header("Location: dashboard.php"); // Redirect to the dashboard
        exit();
        } 
        else 
        {
        $error_message = "Invalid password.";
        
    }
} else {
    
    $error_message = "Invalid username.";
}

    $conn->close();
}
?>

<script>
function saveDataAndRefreshTable() {
             var idno = document.getElementById("idno").value;
        var name = document.getElementById("name").value;
        var status = document.getElementById("status").value;

        var formData = new FormData();
        formData.append("idno", idno);
        formData.append("name", name);
        formData.append("status", status);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "save_patientdata.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    var response = xhr.responseText;
                    if (response === "exists") {
                   //   document.getElementById("message").innerHTML = "IDNO already exist";
                      //  alert("IDNO already exists."); // You can change this to your preferred notification method
                    } else {
                   //     document.getElementById("message").innerHTML = "Data (IDNO: " + idno + ", Name: " + name + ", Status: " + status + ") was saved.";
                        // Clear input fields after successful save
                        document.getElementById("idno").value = "";
                        document.getElementById("name").value = "";
                        document.getElementById("status").value = "";
                          updateTable();
                          
                        showMessage("Data saved successfully!");
                   
                    }
                } 
                else
                 {
                  //  document.getElementById("message").innerHTML = "Error: " + xhr.responseText;
                }
            }
        };
        xhr.send(formData);
            refreshDataTable();
            fetchStatusCounts();
        }

         function refreshDataTable() {
        var dataRows = document.getElementById("data-rows");
        while (dataRows.firstChild) {
            dataRows.removeChild(dataRows.firstChild);
        }

        var xhr = new XMLHttpRequest();
        xhr.open("GET", "fetch_data.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                response.forEach(function (row) {
                    var newRow = document.createElement("tr");
                    var idnoCell = document.createElement("td");
                    idnoCell.textContent = row.idno;
                    var nameCell = document.createElement("td");
                    nameCell.textContent = row.name;
                    var statusCell = document.createElement("td");
                    statusCell.textContent = row.status;

                    newRow.appendChild(idnoCell);
                    newRow.appendChild(nameCell);
                    newRow.appendChild(statusCell);
                    dataRows.appendChild(newRow);
                });
            }
        };
        xhr.send();
    }




window.addEventListener("load", function () {
    fetchStatusCounts(); // Fetch counts when the page loads
});

</script>

<!DOCTYPE html>
<html>
<head>
    <title>Login Result</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="icon" type="image/x-icon" href="https://static.vecteezy.com/system/resources/previews/024/477/857/original/beautiful-duck-ai-generated-free-png.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <title>LOGIN</title>
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
            background-image: url('https://e0.pxfuel.com/wallpapers/675/866/desktop-wallpaper-dark-walnut-board-dark-wooden-texture-macro-dark-walnut-dark-wood-wooden-textures-dark-background-wooden-background-for-with-resolution-high-quality.jpg');
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
            background-image: url('https://e0.pxfuel.com/wallpapers/675/866/desktop-wallpaper-dark-walnut-board-dark-wooden-texture-macro-dark-walnut-dark-wood-wooden-textures-dark-background-wooden-background-for-with-resolution-high-quality.jpg'); 
            border: 1px solid #e6ccb2;
            padding: 20px;
            margin-top: 1px;
            border-radius: 15px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 30%;
            left: 41%;
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
            background-color: #FF5B22; 
            color: white; 
            padding: 10px 20px; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            font-size: 14px; 
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
<h1>Nickelodeon</h1>
</header>
<body>
    <div class="login-container">
        <h2>Login Result</h2>
        <img src="https://media.tenor.com/nJMGfZDwMWcAAAAi/nickelodeon-nickelodeon-logo.gif" alt="" class="image">
        <center>
        <?php if (isset($error_message)) { ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php } ?> <br>
        <a href="index.php"> <button class="sleigh">Back to Login</button></a>
    </div>
</body>
</html>
