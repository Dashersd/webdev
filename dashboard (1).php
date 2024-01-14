<?php
session_start();

if (!isset($_SESSION["name"])) {
    header("Location: index.php");
    exit();}

    $host = "sql212.infinityfree.com";
    $db_username = "if0_35772382";
    $db_password = "sT3yQomameGwU";
    $db_name = "if0_35772382_users";
    $conn = new mysqli($host, $db_username, $db_password, $db_name);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="Image/Strawhat.jpg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <title>One Piece</title>
    <style>
    * {
        margin: 0;
    }
        /* CSS Styles */

        main{
            display: flex;
        }

        header{
            text-align: center;
            font-size: 50px;
            font-family: 'Bungee Spice', sans-serif;
            color: #e6ccb2;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Courier New;
            color: #ffff;
            background-image: url(Image/back.jpg);
            background-size: cover;
            background-repeat: no-repeat; 
        }

        header {
            text-align: center;
            background-color: transparent; 
            color: fff; 
        }

        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .left-nav, .right-nav {
            background-image: url();
            flex-basis: 20%;
            background-color: rgba(220, 220, 220, 0.5);
            border: 2px solid #e6ccb2;
            border-radius: 15px;
            padding: 10px;
            margin: 10px;
            height: 80%;
        }

        .container1{
            width: 850px;
            height: 400px;
            background-color: rgba(255, 255, 255, 0.774);
            position: absolute;
            left: 30%;
            display: none;
            top: 20%;
            color: #e6ccb2;
            border: 2px solid #e6ccb2;
            border-radius: 15px; 
        }

        .container7{
            width: 500px;
            height: 400px;
            background: #5484b7; 
            position: absolute;
            left: 35%;
            display: none;
            top: 20%;
             color: #fff;
            border: 2px solid #e6ccb2;
            border-radius: 20px; 
        }


        .container2{
            width: 600px;
            height: 530px;
            background: #5484b7;
            position: absolute;
            left: 32%;
            display: none;
            top: 20%;
            color: #e6ccb2;
            border: 2px solid #e6ccb2;
            border-radius: 15px; 
        }

        .container3{
            width: 560px;
            height: 230px;
            background: #5484b7;
            position: absolute;
            left: 3%;
            top: 53%;
            color: #e6ccb2;
            border: 2px solid #e6ccb2;
            border-radius: 15px; 
        }

        .container4{
            width: 700px;
            height: 400px;
            background-image: background-image: url(Image/HAT.jpg); 
            background: ;
            position: absolute;
            left: 30%;
            top: 20%;
            color: #e6ccb2;
            border: 2px solid #e6ccb2;
            border-radius: 15px; 
        }

         .container5{
            width: 640px;
            height: 630px;
            background-image: url(Image/HAT.jpg);
            background-color: rgba(255, 255, 255, 0.774);
            position: absolute;
            left: 32%;
            display: none;
            top: 18%;
            color: #e6ccb2;
            border: 2px solid #e6ccb2;
            border-radius: 15px; 
        }

        .container6{
            width: 600px;
            height: 230px;
            background-image: url(Image/HAT.jpg);
            background-color: rgba(255, 255, 255, 0.774);
            position: absolute;
            left: 3%;
            top: 60%;
            color: #e6ccb2;
            border: 2px solid #e6ccb2;
            border-radius: 15px; 
        }


         .dashboard1{
            padding-left: 190px;
            width: 300px;
            height: 30px;
            color: #e6ccb2;
           

        }

        .mind1{
            padding-left: 190px;
            width: 300px;
            height: 30px;
            color: #e6ccb2;

        }
        
        .patient1{
            padding-left: 190px;
            width: 300px;
            height: 30px;
            color: #e6ccb2;
         
        }

         .cashier1{
            padding-left: 190px;
            width: 300px;
            height: 30px;
            color: #e6ccb2;

        }

        .transaction{
            padding-left: 190px;
            width: 300px;
            height: 30px;
            color: #e6ccb2;
        }

        .transact{
            left: 500px;
        }

        
        .adduser1{
            padding-left: 190px;
            width: 300px;
            height: 30px;
            color: #e6ccb2;

        }

        .image{
            width: 150px;
            height: 150px;
            position: absolute;
            padding: 20px;
        }

         .image1{
            width: 150px;
            height: 150px;
            position: absolute;
            padding: 20px;
            top: 20%;
        }

        .status{
            width: 80px;
            color: black;
        }

        .profile1{
            padding-left: 180px;
        }

        .divider{
            width: 300px;
            height: 3px;
            background-color: #7f5539;
            display: inline-block;
            margin: 0;
            padding: 0;
            color: #ddb892;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 50%;
        }

        .button-container:button {
            background-color: green;
            color: black;
            border: 2px solid #e6ccb2;
        }

        .middle-container {
            flex-basis: 30%;
            padding: 10px;
            background-color: transparent;
    
        }

        .middle-container_2 {
            display: flex;
            flex-basis: 30%;
            padding: 10px;
            background-color: transparent;
            border: 2px solid #e6ccb2;
            border-radius: 15px;
            margin: 10px;
            height: 300px
        }

        .form-container {
            border: 2px solid #e6ccb2;
            border-radius: 20px;
            padding: 10px;
            width: 90%;
            padding: 15px;
            margin: 5px 0;
         }

         .form-element{
             padding: 5px;
             color: #e6ccb2;
         }

        .haha {
            text-align: center;
            color: black;
            font-size: 15px;
             font-weight: bold;
            
        }

        select, input[type="text"], input[type="submit"] {
            width: 90%;
            padding: 5px;
            margin: 5px 0;
        }

        select, input[type="number"], input[type="submit"] {
            width: 50%;
            padding: 5px;
            margin: 5px 0;
        }

        select, input[type="text2"], input[type="submit"] {
            width: 90%;
            padding: 5px;
            margin: 5px 0;
        }

        select, input[type="text3"], input[type="submit"] {
            width: 50%;
            padding: 5px;
            margin: 5px 0;
        }

        h2 {
            text-align: center;
            color: #e6ccb2;
        }


        .content-box-symptoms {
            flex-basis: 30%;
            padding: 10px;
            background-color: transparent;
            border: 2px solid #e6ccb2;
            border-radius: 15px;
            margin: 10px;
        }

        .content-box-symptoms {
            background-color: transparent(27, 25, 27, 0.774);
            color: white;
            width: 200px;
            height: 500px;
            border-radius: 20px;
            padding: 10px;
            border: 2px solid #e6ccb2;
            margin-bottom: 10px;
        }
        h2{
            display:flex;
            align-items:center;
            justify-content:center;
            text-align:center;

        }
        p{
            margin:5px;
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

        .sleigh1 {
            background-color: #ede0d4; 
            color: black; 
            padding: 10px 20px; 
            border: none; 
            border-radius: 5px;  
            font-size: 16px; 
            margin-bottom:10px;
            }

        .sleigh2 {
            background-color: #e6ccb2; 
            color: black; 
            padding: 5px 10px; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            font-size: 16px; 
            margin-bottom:10px;
            }

        .sleigh3 {
            background-color: #e6ccb2; 
            color: black; 
            padding: 5px 10px; 
            border: none; 
            border-radius: 5px; 
            font-size: 16px; 
            margin-bottom:10px;
            }
            

        .sleigh:hover {
            background-color: #b08968; 
            }

        .board {
            display: grid;
            grid-template-columns: repeat(3, 71px);
            grid-gap: 2px;
            margin-top: 10px;
        }
        .cell {
            width: 50px;
            height: 50px;
            text-align: center;
            vertical-align: middle;
            font-size:50px;
            font-weight: bold;
            border: 2px solid #e6ccb2;
            cursor: pointer;
            margin-bottom:10px;
            color: #e6ccb2;
        }
        .winning-cell {
            background-color: #8ACB88;
        }

        .tie-cell{
            background-color: yellow;
        }

        #result{
            text-align: center;
        }

        .memory-game {
            display: grid;
            grid-template-columns: repeat(4, 100px);
            gap: 10px;
            margin: 20px auto;
            width: 400px;
        }

        /* Styling for individual cards */
        .card {
            width: 80px;
            height: 80px;
            background-color: #211c1c;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 36px;
            cursor: pointer;
            perspective: 1000px; 
            transform-style: preserve-3d; 
            transition: transform 0.3s ease;
            border: 2px solid #616161;
            box-shadow: 0 10px 20px rgba(57, 55, 59, 0.5);
            border-style: double;
        }

        .card .back img {
            width: 100%; 
            height: 100%; 
            object-fit: cover; 
        }

        .card .back {
            display: none;
        }

        .card.flip {
            transform: rotateY(180deg);
        }

        .card.flip .back {
            display: block;
        }

        .game_button {
            display: block;
            margin: 10px auto;
            color: black;
            font-size: medium;
            padding: 5px;
        }

        .timer {
            background-color: #e6ccb2; 
            color: black; 
            padding: 10px 20px; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            font-size: 17px; 
            margin-bottom:10px;
            left: 40px; 
            }

        .gam {
            background-color: #e6ccb2; 
            color: black; 
            padding: 10px 20px; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            font-size: 17px; 
            margin-bottom:10px;
            left: 20px;
            }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th{
            padding: 5px;
            text-align: left;
            background-color: #e6ccb2;
        }

        td {
            padding: 15px;
            
        }

        form {
            margin-bottom: 20px;
        }

        input, select {
            margin-bottom: 10px;
            padding: 8px;
        }

        buttonsx{
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
            justify-content: center;
            align-items: center;
        }

        button:hover {
            background-color: #b08968;
        }
        .sleigh1::placeholder {
            font-style: italic;
            font-size: 15px; 
        }

      /* CSS for the table */
        #data-grid {
            overflow-y: auto; /* Enable vertical scrolling */
            max-height: 180px; /* Set a fixed height for the table body */
            position: relative; /* Create a positioning context for the thead */
            }

        #data-table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            }

        #data-table th,
        #data-table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            }

        /* Optional: Specify a width for each column */
        #data-table th:nth-child(1),
        #data-table td:nth-child(1) {
            width: 20%; /* Adjust the width as needed */
            }

        #data-table th:nth-child(2),
        #data-table td:nth-child(2) {
            width: 40%; /* Adjust the width as needed */
            }

        #data-table th:nth-child(3),
        #data-table td:nth-child(3) {
            width: 40%; /* Adjust the width as needed */
            }

        /* Fixed header styles */
        #data-table thead {
            position: sticky;
            top: 0;
            background-color: black; /* Add a background color if needed */
            z-index: 1; /* Ensure the header stays above the scrolling entries */
            }

        .count-container {
            text-align: center;
            background-color: transparent;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100px;
            left: 80.5%;
            position: absolute;
            border: 2px solid #616161;
            bottom: 35%;
        }

        .count-container1 {
            text-align: center;
            background-color: transparent;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100px;
            left: 25%;
            position: absolute;
            border: 2px solid #616161;
            bottom: 45%;
        }

        .count-container2 {
            text-align: center;
            background-color: transparent;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100px;
            left: 43.5%;
            position: absolute;
            border: 2px solid #616161;
            bottom: 45%;
        }

         .count-container3 {
            text-align: center;
            background-color: transparent;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100px;
            left: 62%;
            position: absolute;
            border: 2px solid #616161;
            bottom: 45%;
        }

        p {
            margin: 5px 0;
        }

        span1 {
            font-weight: bold;
            color: orange;
        }
    .IMG{
        border-radius: 50%;
    }
    </style>
       
</head>
<body>
<header>
    <h1>Mugiwara-kun</h1>
</header>
<div class="container">
        <div class="left-nav">
            <!-- Left Navigation Content -->
            <div class="button-container"> <br>
                <button onclick = "displaydash()"class="sleigh">Dashboard</button> <br>
                <button onclick = "display()"class="sleigh">Add Patient</button> <br>
                <button onclick = "displaycashier()"class="sleigh">Add Cashier</button> <br>
                <button onclick = "displayitems()"class="sleigh">Add Items</button> <br>
                <button onclick = "displaytransaction()"class="sleigh">Transactions</button> <br>
                <button onclick = "displayuser()"class="sleigh">Today Sales</button> <br>
                <button onclick = "display()"class="sleigh">Weekly Sales</button> <br>
                <button onclick = "displayuser()"class="sleigh">Monthly Sales</button> <br>
            </div>
    </div>

    <div class="container1" id="dashboard1"><br>
            <h2>DASHBOARD</h2> <br><br>
            <div class="count-container1">
            <h2>Daily Sales</h2>
            <p>Total Sales: <br><span1 id="daily-sales"></span1></p>
            <script>
    window.addEventListener("load", function () {
        fetchDailySales(); // Fetch daily sales when the page loads
    });

    function fetchDailySales() {
        var xhr = new XMLHttpRequest();

        // Send a request to your PHP script that calculates daily sales
        xhr.open("GET", "fetch_daily_sales.php", true);

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    var dailySales = JSON.parse(xhr.responseText);

                    // Set the daily sales value in the HTML element
                    document.getElementById("daily-sales").textContent = dailySales.dailySales;
                }
            }
        };

        xhr.send();
    }
</script>
</div>

<div class="count-container2">
<h2>Monthly Sales</h2>
    <p>Total Sales: <span1 id="monthly-sales"></span1></p>

    <script>
        window.addEventListener("load", function () {
            fetchMonthlySales(); // Fetch monthly sales when the page loads
        });

        function fetchMonthlySales() {
            var xhr = new XMLHttpRequest();

            // Send a request to your PHP script that calculates monthly sales
            xhr.open("GET", "calculate_monthly_sales.php", true);

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        var monthlySales = JSON.parse(xhr.responseText).monthlySales;

                        // Set the calculated monthly sales in the HTML element
                        document.getElementById("monthly-sales").textContent = monthlySales;
                    }
                }
            };

            xhr.send();
        }
    </script>
    </div>

<div class="count-container3">
    <h2>Yearly Sales</h2>
    <p>Total Sales: <span1 id="yearly-sales"></span1></p>
    <script>
        window.addEventListener("load", function () {
            fetchYearlySales(); // Fetch yearly sales when the page loads
        });

        function fetchYearlySales() {
            var xhr = new XMLHttpRequest();

            // Send a request to your PHP script that calculates yearly sales
            xhr.open("GET", "calculate_yearly_sales.php", true);

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        var yearlySales = JSON.parse(xhr.responseText).yearlySales;

                        // Set the calculated yearly sales in the HTML element
                        document.getElementById("yearly-sales").textContent = yearlySales;
                    }
                }
            };

            xhr.send();
        }
    </script>
    </div>

                  <div class="count-container">
            <h2>Status Counts</h2> <br>
            <p>Failed: <br><span1 id="failed-count"></span1></p>
            <p>Survive:<br> <span1 id="survive-count"></span1></p>
            <script>
            window.addEventListener("load", function () {
                fetchStatusCounts(); // Fetch counts when the page loads
            });
            function fetchStatusCounts() {
                var xhr = new XMLHttpRequest();

                // Send a request to your PHP script that counts "Failed" and "Survive"
                xhr.open("GET", "count_status.php", true);

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {
                            var counts = JSON.parse(xhr.responseText);

                            // Set the count values in the HTML elements
                            document.getElementById("failed-count").textContent = counts.failedCount;
                            document.getElementById("survive-count").textContent = counts.surviveCount;
                        }
                    }
                };

                xhr.send();
            }
</script>
        </div>
                <div class="img">
                <img src="https://media.tenor.com/nJMGfZDwMWcAAAAi/nickelodeon-nickelodeon-logo.gif" alt="" class="image">
                </div>
                <div class="dashboard1" style="display: inline-block;"> <br><br><br><br><br><br><br><br><br><br><br>
                &#160&#160&nbsp;&nbsp;&nbsp;&nbsp;&#160&#160&nbsp;&nbsp;<button onclick = "displaymind()"class="sleigh">&#160&#160&nbsp;&nbsp;&nbsp; Memory Game &nbsp;&nbsp;&nbsp;&nbsp;</button> <br>
                &#160&#160&nbsp;&nbsp;&nbsp;&nbsp;&#160&#160&nbsp;&nbsp;&nbsp;&nbsp;&#160&#160&nbsp;&nbsp;&nbsp;<button onclick = "displaydash()"class="sleigh">Back</button><br>
            </div>
        </div>         

        
                 <!-- DASHBOARD SCRIPT -->
            <script>
            function displaydash(){
            const display = document.getElementById('dashboard1');
            const displayStyle = display.style.display;
            if(displayStyle === "none"){
                document.getElementById("dashboard1").style.display = "block";
            }
            else{
                document.getElementById("dashboard1").style.display = "none"
            }
            }   
             </script>
        
            
            <div class="container1" id="mind1"><br>
            <h2>MEMORY GAME</h2><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span id="timer" class="timer">Timer: 30</span>
                <div class="box-4" >
                    <div class="memory-game">
                    <div class="card" data-card="https://assets-global.website-files.com/646218c67da47160c64a84d5/6463428fbecdbd5e3e1ba1c7_29.png"><div class="back"><img               src="https://assets-global.website-files.com/646218c67da47160c64a84d5/6463428fbecdbd5e3e1ba1c7_29.png" alt="Image 1"></div></div>
                    <div class="card" data-card="https://assets-global.website-files.com/646218c67da47160c64a84d5/6463428fbecdbd5e3e1ba1c7_29.png"><div class="back"><img src="https://assets-global.website-files.com/646218c67da47160c64a84d5/6463428fbecdbd5e3e1ba1c7_29.png" alt="Image 1"></div></div>
                    <div class="card" data-card="https://media.tenor.com/IEis2kQmnLUAAAAi/blue-emoji.gif"><div class="back"><img src="https://media.tenor.com/IEis2kQmnLUAAAAi/blue-emoji.gif" alt="Image 2"></div></div>
                    <div class="card" data-card="https://media.tenor.com/IEis2kQmnLUAAAAi/blue-emoji.gif"><div class="back"><img src="https://media.tenor.com/IEis2kQmnLUAAAAi/blue-emoji.gif" alt="Image 2"></div></div>
                    <div class="card" data-card="https://i.redd.it/um0n2dhyulqb1.png"><div class="back"><img src="https://i.redd.it/um0n2dhyulqb1.png" alt="Image 1"></div></div>
                    <div class="card" data-card="https://i.redd.it/um0n2dhyulqb1.png"><div class="back"><img src="https://i.redd.it/um0n2dhyulqb1.png" alt="Image 1"></div></div>
                    <div class="card" data-card="https://assets-global.website-files.com/646218c67da47160c64a84d5/646339c1f1c7ec90c726318c_07.png"><div class="back"><img src="https://assets-global.website-files.com/646218c67da47160c64a84d5/646339c1f1c7ec90c726318c_07.png" alt="Image 2"></div></div>
                    <div class="card" data-card="https://assets-global.website-files.com/646218c67da47160c64a84d5/646339c1f1c7ec90c726318c_07.png"><div class="back"><img src="https://assets-global.website-files.com/646218c67da47160c64a84d5/646339c1f1c7ec90c726318c_07.png" alt="Image 2"></div></div>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" id="reset-button" class="gam">Reset</button>&#160&#160&#160
                <button id="start-button" class="gam">Start</button>&#160&#160&#160
                <button onclick = "displaymind()"class="gam">Back</button><br>
            </div>
        </div> 

  <script>
   // JavaScript code for the memory game
const cards = document.querySelectorAll(".card");
const resetButton = document.getElementById("reset-button");
const startButton = document.getElementById("start-button");
const timerDisplay = document.getElementById("timer");

let hasFlippedCard = false;
let lockBoard = false;
let firstCard, secondCard;
let timerInterval;
let seconds = 30;
let score = 0;

// Function to flip a card when clicked
function flipCard() {
    if (!startButton.style.display || startButton.style.display === "none") {
        // The "Start" button is not visible or has been hidden
        if (lockBoard) return;
        if (this === firstCard) return;
        this.classList.add("flip");
        if (!hasFlippedCard) {
            hasFlippedCard = true;
            firstCard = this;
            return;
        }
        secondCard = this;
        checkForMatch();
    }
}

// Function to check if two flipped cards match
function checkForMatch() {
    let isMatch = firstCard.dataset.card === secondCard.dataset.card;

    if (isMatch) {
        disableCards();
    } else {
        unflipCards();
    }
}

// Function to disable matched cards
function disableCards() {
    firstCard.removeEventListener("click", flipCard);
    secondCard.removeEventListener("click", flipCard);

    resetBoards();
}

// Function to unflip non-matching cards
function unflipCards() {
    lockBoard = true;

    setTimeout(() => {
        firstCard.classList.remove("flip");
        secondCard.classList.remove("flip");

        resetBoards();
    }, 1000);
}

// Function to reset the game board
function resetBoards() {
    [hasFlippedCard, lockBoard] = [false, false]; // Reset the game state variables
    [firstCard, secondCard] = [null, null]; // Reset the flipped card references

    // Check if all cards are matched
    if (document.querySelectorAll(".flip").length === cards.length) {
        clearInterval(timerInterval); // Clear the timer interval
        endGame("You Win!");
    }
}

// Function to shuffle the order of cards
function shuffle() {
    cards.forEach(card => {
        let randomPos = Math.floor(Math.random() * 8);
        card.style.order = randomPos;
    });
}

// Add event listeners to cards for clicking and reset button
cards.forEach(card => card.addEventListener("click", flipCard));
resetButton.addEventListener("click", () => {
    clearInterval(timerInterval); // Clear the timer interval
    timerDisplay.textContent = "Timer: 30"; // Reset the timer display
    seconds = 30; // Reset the timer seconds
    cards.forEach(card => card.classList.remove("flip"));
    shuffle();
    resetBoards();
    startButton.style.display = "block"; // Make the start button visible again
});

// Shuffle the cards on page load
shuffle();

// Function to start the game and timer
function startGame() {
        // Hide the start button
        startButton.style.display = "none";

        // Start the timer
        timerInterval = setInterval(() => {
            seconds--;
            timerDisplay.textContent = `Timer: ${seconds} seconds`;

            if (seconds === 0) {
                clearInterval(timerInterval);
                endGame("Game Over (Time's Up)");
            }
        }, 1000);

        // Add event listeners to cards for clicking
        cards.forEach(card => card.addEventListener("click", flipCard));
    }

    // Add event listener for the start button
    startButton.addEventListener("click", startGame);

    // Function to end the game
    // Function to end the game
 function endGame(message) {
    lockBoard = true;
    timerDisplay.textContent = message;
    startButton.style.display = "block"; // Make the start button visible again

    // Calculate the score based on the remaining time (in seconds)
    let secondsLeft = seconds; // Get the remaining time
    score = secondsLeft; // Assign a score based on the remaining time
    alert(`You scored: ${score} seconds left`);
}
</script>
                 <!-- PLAY GAME SCRIPT -->
            <script>

            function displaymind(){
            const display = document.getElementById('mind1');
            const displayStyle = display.style.display;
            if(displayStyle === "none"){
                document.getElementById("mind1").style.display = "block";
            }
            else{
                document.getElementById("mind1").style.display = "none"
            }
            }   
             </script>
        
<div class="container2" id="addpatient"><br>
    <h2>ADD PATIENT</h2> <br>
    <div class="img">
        <img src=<img src="Images/HAT.jpg" alt=""> alt="" class="image">
    </div>
    <div class="patient1" style="display: inline-block;">
        <form method="post" autocomplete="off">
            <div class="patient">
                <label for="idno">Id:</label> <br>
                <input name="idno" id="idno" type="text" placeholder="Patient ID" class="sleigh1" required> <br>
            </div>
            <div class="patient">
                <label for="name">Name:</label>
                <input name="name" id="name" type="text" placeholder="Name" class="sleigh1" required> <br>
            </div>
            <div class="patient">
                <label for="status">Issue:</label>
                <input name="status" id="patientIssue" type="text" placeholder="Issue" class="sleigh1" required> <br>
            </div>

            <label for="status">Status:</label>
            <select name="status" id="status" class="status">
                <option value="failed">Failed</option>
                <option value="survive">Survive</option>
            </select> <br><br>

<div class="container3" id="addpatient"> 
           <div id="data-grid" class="form-table ">
                         <table id="data-table">
                            <thead>
                            &nbsp;&nbsp;&nbsp;<input type="text" id="findIdInput" placeholder="Enter ID" class="sleigh2">
                                <tr>
                                    <th class="sleigh1">ID Number</th>
                                    <th class="sleigh1">Name</th>
                                    <th class="sleigh1">Status</th>
                                </tr>
                            </thead>
                            <tbody id="data-rows">
                            </tbody>
                         </table>
                    </div> <br>
                <div class="buttonsx">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="button" value="Save" onclick="saveDataAndRefreshTable()"class="sleigh2"></input>
                    <input type="button" value="Find" onclick="findData()" class="sleigh2"></input>
                    <input type="button" value="Delete" onclick="enableDeleteMode()" class="sleigh2"></input>
                    <input type="button" value="Clear" onclick="clearDataAndRefreshTable()"class="sleigh2"></input>
                    <input type="button" value="Print" onclick="printTable()" class="sleigh2"></input>
                    <input type="button" value="Update" onclick="updateDataAndRefreshTable()"class="sleigh2"></input>
                </div>
                </div>
            </div>
        </form>
        </div>


                               <?php    
                                $hostname = "sql212.infinityfree.com";
                                $username = "if0_35772382";
                                $password = "sT3yQomameGwU";
                                $database = "if0_35772382_users";
                                $mysqli = new mysqli($hostname, $username, $password, $database);
                                if ($mysqli->connect_error) {
                                    die("Connection failed: " . $mysqli->connect_error);
                                }
                                $query = "SELECT idno, name, status FROM patient ORDER BY idno DESC";
                                $result = $mysqli->query($query);
                                if ($result) {
                                    echo "<script>";
                                    echo "var dataTable = document.getElementById('data-table');";
                                    echo "var dataRows = document.getElementById('data-rows');";
                                    echo "while (dataRows.firstChild) { dataRows.removeChild(dataRows.firstChild); }"; // Clear existing rows

                                    while ($row = $result->fetch_assoc()) {
                                        echo "var newRow = document.createElement('tr');";
                                        echo "var idnoCell = document.createElement('td');";
                                        echo "idnoCell.textContent = '" . $row["idno"] . "';";
                                        echo "var nameCell = document.createElement('td');";
                                        echo "nameCell.textContent = '" . $row["name"] . "';";
                                        echo "var statusCell = document.createElement('td');";
                                        echo "statusCell.textContent = '" . $row["status"] . "';";
                                        echo "newRow.appendChild(idnoCell);";
                                        echo "newRow.appendChild(nameCell);";
                                        echo "newRow.appendChild(statusCell);";
                                        echo "dataRows.appendChild(newRow);";
                                    }
                                    echo "</script>";
                                    $result->close();
                                }
                                $mysqli->close();                                 
                                ?>

                                <script>

                                function findData() {
    const input = document.getElementById('findIdInput');
    const filter = input.value.toUpperCase();
    const table = document.getElementById('data-table');
    const rows = table.getElementsByTagName('tr');

    for (let i = 0; i < rows.length; i++) {
        const idCell = rows[i].getElementsByTagName('td')[0]; // Assuming ID is the first column
        if (idCell) {
            const idText = idCell.textContent || idCell.innerText;
            if (idText.toUpperCase().indexOf(filter) > -1) {
                rows[i].style.display = ''; // Show the row
            } else {
                rows[i].style.display = 'none'; // Hide the row
            }
        }
    }
}

                                </script>


                                <script>
    function printTable() {
        var printContents = document.getElementById("data-grid").innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

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

// Function to enable delete mode
    function enableDeleteMode() {
    var tableRows = document.getElementById("data-rows").getElementsByTagName("tr");

    Array.from(tableRows).forEach(function (row) {
        row.addEventListener("click", function () {
            if (confirm("Are you sure you want to delete this row?")) {
                var idToDelete = this.cells[0].textContent; // Assuming the first cell contains the ID

                // Send an AJAX request to your PHP script for deletion
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "delete_patient.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        if (xhr.responseText === "success") {
                            showMessage("Row deleted successfully!");
                            fetchAndUpdateTable(); // Refresh the table after deletion
                        } else {
                            showMessage("Error deleting row.");
                        }
                    }
                };
                xhr.send("id=" + idToDelete);
            }
        });
    });
}

</script>



    <script>
        <!-- ADD PATIENT SCRIPT -->

        function display(){
            const display = document.getElementById('addpatient');
            const displayStyle = display.style.display;
            if(displayStyle === "none"){
                document.getElementById("addpatient").style.display = "block";
            }
            else{
                document.getElementById("addpatient").style.display = "none"
            }
        }
        
    </script>

    <div class="container2" id="addcashier"><br>
    <h2>ADD CASHIER</h2> <br><br>
    <div class="img">
        <img src="https://media.tenor.com/nJMGfZDwMWcAAAAi/nickelodeon-nickelodeon-logo.gif" alt="" class="image">
    </div>
    <div class="cashier1" style="display: inline-block;">
        <form method="post" autocomplete="off">
            <div class="cashier">
                <label for="empid">EmpId:</label> <br>
                <input name="empid" id="empid" type="text" placeholder="Employee ID" class="sleigh1" required> <br>
            </div>
            <div class="cashier">
                <label for="cname">Name:</label>
                <input name="cname" id="cname" type="text" placeholder="Name" class="sleigh1" required> <br>
            </div>
            <div class="cashier">
                <label for="address">Address:</label>
                <input name="address" id="address" type="text" placeholder="Address" class="sleigh1" required> <br>
            </div>

<div class="container3" id="addcashier"> 
           <div id="data-grid" class="form-table">
                         <table id="data-table1">
                            <thead>
                                <tr>
                                    <th class="sleigh1">EmpID</th>
                                    <th class="sleigh1">Name</th>
                                    <th class="sleigh1">Address</th>
                                </tr>
                            </thead>
                            <tbody id="data-rows1">
                            </tbody>
                         </table>
                    </div> <br>
                <div class="buttonsx">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="button" value="Save" onclick="saveDataAndRefreshTable1()"class="sleigh2"></input>
                    <input type="button" value="Find" onclick="findDataAndRefreshTable1()"class="sleigh2"></input>
                    <input type="button" value="Delete" onclick="enableDeleteMode()" class="sleigh2"></input>
                    <input type="button" value="Clear" onclick="clearDataAndRefreshTable1()"class="sleigh2"></input>
                    <input type="button" value="Print" onclick="printDataAndRefreshTable1()"class="sleigh2"></input>
                    <input type="button" value="Update" onclick="updateDataAndRefreshTable1()"class="sleigh2"></input>
                </div>
                </div>
            </div>
        </form>
        </div>


                               <?php    
                                 $hostname = "sql212.infinityfree.com";
                                $username = "if0_35772382";
                                $password = "sT3yQomameGwU";
                                $database = "if0_35772382_users";
                                $mysqli = new mysqli($hostname, $username, $password, $database);
                                if ($mysqli->connect_error) {
                                    die("Connection failed: " . $mysqli->connect_error);
                                }
                                $query = "SELECT empid, cname, address FROM cashier ORDER BY empid DESC";
                                $result = $mysqli->query($query);
                                if ($result) {
                                    echo "<script>";
                                    echo "var dataTable = document.getElementById('data-table1');";
                                    echo "var dataRows = document.getElementById('data-rows1');";
                                    echo "while (dataRows.firstChild) { dataRows.removeChild(dataRows.firstChild); }"; // Clear existing rows

                                    while ($row = $result->fetch_assoc()) {
                                        echo "var newRow = document.createElement('tr');";
                                        echo "var empidCell = document.createElement('td');";
                                        echo "empidCell.textContent = '" . $row["empid"] . "';";
                                        echo "var cnameCell = document.createElement('td');";
                                        echo "cnameCell.textContent = '" . $row["cname"] . "';";
                                        echo "var addressCell = document.createElement('td');";
                                        echo "addressCell.textContent = '" . $row["address"] . "';";
                                        echo "newRow.appendChild(empidCell);";
                                        echo "newRow.appendChild(cnameCell);";
                                        echo "newRow.appendChild(addressCell);";
                                        echo "dataRows.appendChild(newRow);";
                                    }
                                    echo "</script>";
                                    $result->close();
                                }
                                $mysqli->close();                                 
                                ?>

            <script>
        function saveDataAndRefreshTable1() {
             var empid = document.getElementById("empid").value;
        var cname = document.getElementById("cname").value;
        var address = document.getElementById("address").value;

        var formData = new FormData();
        formData.append("empid", empid);
        formData.append("cname", cname);
        formData.append("address", address);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "save_employeedata.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.address == 200) {
                    var response = xhr.responseText;
                    if (response === "exists") {
                   //   document.getElementById("message").innerHTML = "EmpID already exist";
                      //  alert("EmpId already exists."); // You can change this to your preferred notification method
                    } else {
                   //     document.getElementById("message").innerHTML = "Data (EmpId: " + empid + ", Name: " + cname + ", Address: " + address + ") was saved.";
                        // Clear input fields after successful save
                        document.getElementById("empid").value = "";
                        document.getElementById("cname").value = "";
                        document.getElementById("address").value = "";
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
            refreshDataTable1();
            fetchAddressCounts();
        }

         function refreshDataTable1() {
        var dataRows = document.getElementById("data-rows1");
        while (dataRows.firstChild) {
            dataRows.removeChild(dataRows.firstChild);
        }

        var xhr = new XMLHttpRequest();
        xhr.open("GET", "fetch_data.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.address === 200) {
                var response = JSON.parse(xhr.responseText);
                response.forEach(function (row) {
                    var newRow = document.createElement("tr");
                    var empidCell = document.createElement("td");
                    empidCell.textContent = row.empid;
                    var cnameCell = document.createElement("td");
                    cnameCell.textContent = row.cname;
                    var addressCell = document.createElement("td");
                    addressCell.textContent = row.address;

                    newRow.appendChild(empidCell);
                    newRow.appendChild(cnameCell);
                    newRow.appendChild(addressCell);
                    dataRows.appendChild(newRow);
                });
            }
        };
        xhr.send();
    }
window.addEventListener("load", function () {
    fetchAddressCounts(); // Fetch counts when the page loads
});

// Function to enable delete mode
    function enableDeleteMode() {
    var tableRows = document.getElementById("data-rows").getElementsByTagName("tr");

    Array.from(tableRows).forEach(function (row) {
        row.addEventListener("click", function () {
            if (confirm("Are you sure you want to delete this row?")) {
                var idToDelete = this.cells[0].textContent; // Assuming the first cell contains the ID

                // Send an AJAX request to your PHP script for deletion
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "delete_patient.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        if (xhr.responseText === "success") {
                            showMessage("Row deleted successfully!");
                            fetchAndUpdateTable(); // Refresh the table after deletion
                        } else {
                            showMessage("Error deleting row.");
                        }
                    }
                };
                xhr.send("id=" + idToDelete);
            }
        });
    });
}

</script>
        
                 <!-- ADD USER SCRIPT -->
            <script>
            function displaycashier(){
            const display = document.getElementById('addcashier');
            const displayStyle = display.style.display;
            if(displayStyle === "none"){
                document.getElementById("addcashier").style.display = "block";
            }
            else{
                document.getElementById("addcashier").style.display = "none"
            }
        }

</script>

    <div class="container2" id="additems">
    <h2>ADD ITEMS</h2> <br><br>
    <div class="img">
        <img src="https://media.tenor.com/nJMGfZDwMWcAAAAi/nickelodeon-nickelodeon-logo.gif" alt="" class="image">
    </div>
    <div class="patient1" style="display: inline-block;">
        <form method="post" autocomplete="off">
            <div class="items">
                <label for="prodCode">ProdCode:</label> <br>
                <input name="prodCode" id="prodCode" type="text" placeholder="Product Code" class="sleigh1" required> <br>
            </div>
            <div class="items">
                <label for="description">Description:</label>
                <input name="description" id="description" type="text" placeholder="Description" class="sleigh1" required> <br>
            </div>
            <div class="items">
                <label for="price">Price:</label>
                <input name="price" id="price" type="text" placeholder="Price" class="sleigh1" required> <br>
            </div>

<div class="container3" id="additems"> 
           <div id="data-grid" class="form-table ">
                         <table id="data-table2">
                            <thead>
                                <tr>
                                    <th class="sleigh1">ProdCode</th>
                                    <th class="sleigh1">Description</th>
                                    <th class="sleigh1">Price</th>
                                </tr>
                            </thead>
                            <tbody id="data-rows2">
                            </tbody>
                         </table>
                    </div> <br>
                <div class="buttonsx">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="button" value="Save" onclick="saveDataAndRefreshTable2()"class="sleigh2"></input>
                    <input type="button" value="Retrieve" onclick="findDataAndRefreshTable()"class="sleigh2"></input>
                    <input type="button" value="Delete" onclick="enableDeleteMode()" class="sleigh2"></input>
                    <input type="button" value="Delete" onclick="clearDataAndRefreshTable()"class="sleigh2"></input>
                    <input type="button" value="Print" onclick="printDataAndRefreshTable()"class="sleigh2"></input>
                </div>
                </div>
            </div>
        </form>
        </div>

        
                               <?php    
                                 $hostname = "sql212.infinityfree.com";
                                $username = "if0_35772382";
                                $password = "sT3yQomameGwU";
                                $database = "if0_35772382_users";
                                $mysqli = new mysqli($hostname, $username, $password, $database);
                                if ($mysqli->connect_error) {
                                    die("Connection failed: " . $mysqli->connect_error);
                                }
                                $query = "SELECT prodCode, description, price FROM item ORDER BY prodCode DESC";
                                $result = $mysqli->query($query);
                                if ($result) {
                                    echo "<script>";
                                    echo "var dataTable = document.getElementById('data-table2');";
                                    echo "var dataRows = document.getElementById('data-rows2');";
                                    echo "while (dataRows.firstChild) { dataRows.removeChild(dataRows.firstChild); }"; // Clear existing rows

                                    while ($row = $result->fetch_assoc()) {
                                        echo "var newRow = document.createElement('tr');";
                                        echo "var prodCodeCell = document.createElement('td');";
                                        echo "prodCodeCell.textContent = '" . $row["prodCode"] . "';";
                                        echo "var descriptionCell = document.createElement('td');";
                                        echo "descriptionCell.textContent = '" . $row["description"] . "';";
                                        echo "var priceCell = document.createElement('td');";
                                        echo "priceCell.textContent = '" . $row["price"] . "';";
                                        echo "newRow.appendChild(prodCodeCell);";
                                        echo "newRow.appendChild(descriptionCell);";
                                        echo "newRow.appendChild(priceCell);";
                                        echo "dataRows.appendChild(newRow);";
                                    }
                                    echo "</script>";
                                    $result->close();
                                }
                                $mysqli->close();                                 
                                ?>

            <script>
        function saveDataAndRefreshTable2() {
             var prodCode = document.getElementById("prodCode").value;
        var description = document.getElementById("description").value;
        var price = document.getElementById("price").value;

        var formData = new FormData();
        formData.append("prodCode", prodCode);
        formData.append("description", description);
        formData.append("price", price);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "save_itemdata.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.price == 200) {
                    var response = xhr.responseText;
                    if (response === "exists") {
                   //   document.getElementById("message").innerHTML = "prodCode already exist";
                      //  alert("prodCode already exists."); // You can change this to your preferred notification method
                    } else {
                   //     document.getElementById("message").innerHTML = "Data (ProdCode: " + prodCode + ", Name: " + description + ", Address: " + price + ") was saved.";
                        // Clear input fields after successful save
                        document.getElementById("prodCode").value = "";
                        document.getElementById("description").value = "";
                        document.getElementById("price").value = "";
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
            refreshDataTable2();
            fetchpriceCounts();
        }

         function refreshDataTable2() {
        var dataRows = document.getElementById("data-rows2");
        while (dataRows.firstChild) {
            dataRows.removeChild(dataRows.firstChild);
        }

        var xhr = new XMLHttpRequest();
        xhr.open("GET", "fetch_data.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.price === 200) {
                var response = JSON.parse(xhr.responseText);
                response.forEach(function (row) {
                    var newRow = document.createElement("tr");
                    var prodCodeCell = document.createElement("td");
                    prodCodeCell.textContent = row.prodCode;
                    var descriptionCell = document.createElement("td");
                    descriptioneCell.textContent = row.description;
                    var priceCell = document.createElement("td");
                    priceCell.textContent = row.price;

                    newRow.appendChild(prodCodeCell);
                    newRow.appendChild(descriptionCell);
                    newRow.appendChild(priceCell);
                    dataRows.appendChild(newRow);
                });
            }
        };
        xhr.send();
    }
window.addEventListener("load", function () {
    fetchpriceCounts(); // Fetch counts when the page loads
});

// Function to enable delete mode
    function enableDeleteMode() {
    var tableRows = document.getElementById("data-rows").getElementsByTagName("tr");

    Array.from(tableRows).forEach(function (row) {
        row.addEventListener("click", function () {
            if (confirm("Are you sure you want to delete this row?")) {
                var idToDelete = this.cells[0].textContent; // Assuming the first cell contains the ID

                // Send an AJAX request to your PHP script for deletion
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "delete_patient.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        if (xhr.responseText === "success") {
                            showMessage("Row deleted successfully!");
                            fetchAndUpdateTable(); // Refresh the table after deletion
                        } else {
                            showMessage("Error deleting row.");
                        }
                    }
                };
                xhr.send("id=" + idToDelete);
            }
        });
    });
}

</script>
        
    
<!-- ADD ITEMS SCRIPT -->
            <script>
            function displayitems(){
            const display = document.getElementById('additems');
            const displayStyle = display.style.display;
            if(displayStyle === "none"){
                document.getElementById("additems").style.display = "block";
            }
            else{
                document.getElementById("additems").style.display = "none"
            }
        }

</script>

 <div class="container5" id="addtransaction">
    <h2>TRANSACTION</h2> <br>
    <div class="img">
        <img src="https://media.tenor.com/nJMGfZDwMWcAAAAi/nickelodeon-nickelodeon-logo.gif" alt="" class="image1">
    </div>
<div class="transaction" style="display: inline-block;">
        <form method="post" autocomplete="off">
            <div class="transact">
                <label for="prodcode">Product Code:</label> <br>
                <input name="prodcode" id="prodcode" type="text" placeholder="Product Code" class="sleigh1" required> <br>
            </div>
            <div class="transact">
                <label for="dsc">Description:</label>
                <input name="dsc" id="dsc" type="text" placeholder="Description" class="sleigh1" required> <br>
            </div>
            <div class="transact">
                <label for="prc">Price:</label>
                <input name="prc" id="prc" type="text" placeholder="Price" class="sleigh1" required> <br>
            </div>
            <div class="transact">
                <label for="qty">Quantity:</label><br>
                <input name="qty" id="qty" type="number" placeholder="Quantity" class="sleigh1" required oninput="calculateTotal()"> <br>
            </div>
            <div class="transact">
                <label for="total">Total:</label><br>
                <input name="total" id="total" type="text2" placeholder="Total" class="sleigh1" required>
            </div>
            <div class="profile"><br>
                    <label for="name">Cashier: &nbsp;&nbsp;  <?php if(isset($_SESSION["name"])){ echo $_SESSION["name"];}?> </label>
                    </div>

<div class="container6" id="transaction"> 
           <div id="data-grid" class="form-table ">
                         <table id="data-table3">
                            <thead>
                                <tr>
                                    <th class="sleigh1">ProdCode</th>
                                    <th class="sleigh1">Description</th>
                                    <th class="sleigh1">Price</th>
                                    <th class="sleigh1">Quantity</th>
                                    <th class="sleigh1">Total</th>
                                </tr>
                            </thead>
                            <tbody id="data-rows3">
                            </tbody>
                         </table>
                    </div> <br>
                <div class="buttonsx">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="button" value="Save" onclick="saveDataAndRefreshTable3()"class="sleigh2"></input>
                    <input type="button" value="Find" onclick="findDataAndRefreshTable()"class="sleigh2"></input>
                    <input type="button" value="Delete" onclick="enableDeleteMode()" class="sleigh2"></input>
                    <input type="button" value="Clear" onclick="clearDataAndRefreshTable()"class="sleigh2"></input>
                    <input type="button" value="Print" onclick="printDataAndRefreshTable()"class="sleigh2"></input>
                    <input type="button" value="Update" onclick="updateDataAndRefreshTable()"class="sleigh2"></input>
                </div>
                </div>
            </div>
        </form>
        </div>


                               <?php    
                                  $hostname = "sql212.infinityfree.com";
                                $username = "if0_35772382";
                                $password = "sT3yQomameGwU";
                                $database = "if0_35772382_users";
                                $mysqli = new mysqli($hostname, $username, $password, $database);

                                if ($mysqli->connect_error) {
                                    die("Connection failed: " . $mysqli->connect_error);
                                }

                                $query = "SELECT prodcode, dsc, prc, qty, total FROM transaction ORDER BY prodcode DESC";
                                $result = $mysqli->query($query);

                                if ($result) {
                                    echo "<script>";
                                    echo "var dataRows = document.getElementById('data-rows3');";
                                    echo "while (dataRows.firstChild) { dataRows.removeChild(dataRows.firstChild); }"; // Clear existing rows

                                    while ($row = $result->fetch_assoc()) {
                                        echo "var newRow = document.createElement('tr');";
                                        echo "var prodcodeCell = document.createElement('td');";
                                        echo "prodcodeCell.textContent = '" . $row["prodcode"] . "';";
                                        echo "var dscCell = document.createElement('td');";
                                        echo "dscCell.textContent = '" . $row["dsc"] . "';";
                                        echo "var prcCell = document.createElement('td');";
                                        echo "prcCell.textContent = '" . $row["prc"] . "';";
                                        echo "var qtyCell = document.createElement('td');";
                                        echo "qtyCell.textContent = '" . $row["qty"] . "';";
                                        echo "var totalCell = document.createElement('td');";
                                        echo "totalCell.textContent = '" . $row["total"] . "';";
                                        echo "newRow.appendChild(prodcodeCell);";
                                        echo "newRow.appendChild(dscCell);";
                                        echo "newRow.appendChild(prcCell);";
                                        echo "newRow.appendChild(qtyCell);";
                                        echo "newRow.appendChild(totalCell);";
                                        echo "dataRows.appendChild(newRow);";
                                    }
                                    echo "</script>";
                                    $result->close();
                                }

                                $mysqli->close();
                                ?>

                                <script>
    function calculateTotal() {
        var price = parseFloat(document.getElementById("prc").value);
        var quantity = parseFloat(document.getElementById("qty").value);
        var total = price * quantity;

        if (!isNaN(total)) {
            document.getElementById("total").value = total.toFixed(2); // Adjust to the required decimal places
        }
    }
</script>

            <script>
        function saveDataAndRefreshTable3() {
                var prodcode = document.getElementById("prodcode").value;
                var dsc = document.getElementById("dsc").value;
                var prc = document.getElementById("prc").value;
                var qty = document.getElementById("qty").value;
                var total = document.getElementById("total").value;
    

        var formData = new FormData();
        formData.append("prodcode", prodcode);
        formData.append("dsc", dsc);
        formData.append("prc", prc);
        formData.append("qty", qty);
        formData.append("total", total);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "save_transactiondata.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 6) {
                if (xhr.total == 200) {
                    var response = xhr.responseText;
                    if (response === "exists") {
                   //   document.getElementById("message").innerHTML = "IDNO already exist";
                      //  alert("IDNO already exists."); // You can change this to your preferred notification method
                    } else {
                   //     document.getElementById("message").innerHTML = "Data (IDNO: " + idno + ", Name: " + name + ", Status: " + status + ") was saved.";
                        // Clear input fields after successful save
                        document.getElementById("prodcode").value = "";
                        document.getElementById("dsc").value = "";
                        document.getElementById("prc").value = "";
                        document.getElementById("qty").value = "";
                        document.getElementById("total").value = "";
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
            refreshDataTable3();
            fetchStatusCounts();
        }

         function refreshDataTable3() {
        var dataRows = document.getElementById("data-rows3");
        while (dataRows.firstChild) {
            dataRows.removeChild(dataRows.firstChild);
        }

        var xhr = new XMLHttpRequest();
        xhr.open("GET", "fetch_data.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.total === 200) {
                var response = JSON.parse(xhr.responseText);
                response.forEach(function (row) {
                    var newRow = document.createElement("tr");
                    var prodcodeCell = document.createElement("td");
                    prodcodeCell.textContent = row.prodcode;
                    var dscCell = document.createElement("td");
                    dscCell.textContent = row.dsc;
                    var prcCell = document.createElement("td");
                    prcCell.textContent = row.prc;
                    var qtyCell = document.createElement("td");
                    qtyCell.textContent = row.qty;
                    var totalCell = document.createElement("td");
                    totalCell.textContent = row.total;

                    newRow.appendChild(prodcodeCell);
                    newRow.appendChild(dscCell);
                    newRow.appendChild(prcCell);
                    newRow.appendChild(qtyCell);
                    newRow.appendChild(totalCell);
                    dataRows.appendChild(newRow);
                });
            }
        };
        xhr.send();
    }
window.addEventListener("load", function () {
    fetchStatusCounts(); // Fetch counts when the page loads
});

// Function to enable delete mode
    function enableDeleteMode() {
    var tableRows = document.getElementById("data-rows3").getElementsByTagName("tr");

    Array.from(tableRows).forEach(function (row) {
        row.addEventListener("click", function () {
            if (confirm("Are you sure you want to delete this row?")) {
                var idToDelete = this.cells[0].textContent; // Assuming the first cell contains the ID

                // Send an AJAX request to your PHP script for deletion
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "delete_transaction.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        if (xhr.responseText === "success") {
                            showMessage("Row deleted successfully!");
                            fetchAndUpdateTable(); // Refresh the table after deletion
                        } else {
                            showMessage("Error deleting row.");
                        }
                    }
                };
                xhr.send("id=" + idToDelete);
            }
        });
    });
}

</script>

        
<!-- ADD ITEMS SCRIPT -->
            <script>
            function displaytransaction(){
            const display = document.getElementById('addtransaction');
            const displayStyle = display.style.display;
            if(displayStyle === "none"){
                document.getElementById("addtransaction").style.display = "block";
            }
            else{
                document.getElementById("addtransaction").style.display = "none"
            }
        }

</script>


    <div class="middle-container">
        <!-- First Middle Container - Calculator -->
        <div class="form-container">
            <h2>Calculator</h2>
            <form id="calculator-form">
                <div class="form-element">
                    <label for="num1">Number 1:</label>
                    <input type="text" id="num1" name="num1" class="sleigh1"required>
                </div>
                <div class="form-element">
                    <label for="num2">Number 2:</label>
                    <input type="text" id="num2" name="num2" class="sleigh1"required>
                </div>
                <div class="form-element">
                    <label for="operation">Operation:</label>
                    <select id="operation" name="operation"class="sleigh1">
                        <option value="addition">Addition</option>
                        <option value="subtraction">Subtraction</option>
                        <option value="multiplication">Multiplication</option>
                        <option value="division">Division</option>
                    </select>
                </div>
                <div class="form-element">
                    <input type="button" value="Calculate" onclick="calculate()"class="sleigh">
                </div>
            </form>
            <p id="answer">Answer: </p>
        </div>
    </div>

            <script>
function calculate() {
    const num1Input = document.getElementById("num1");
    const num2Input = document.getElementById("num2");
    const operation = document.getElementById("operation").value;

    let result;
    switch (operation) {
        case "addition":
            result = parseFloat(num1Input.value) + parseFloat(num2Input.value);
            break;
        case "subtraction":
            result = parseFloat(num1Input.value) - parseFloat(num2Input.value);
            break;
        case "multiplication":
            result = parseFloat(num1Input.value) * parseFloat(num2Input.value);
            break;
        case "division":
            const num2 = parseFloat(num2Input.value);
            if (num2 === 0) {
                result = "Cannot divide by zero";
            } else {
                result = parseFloat(num1Input.value) / num2;
            }
            break;
        default:
            result = "Invalid operation";
    }

    // Display the result
    document.getElementById("answer").textContent = "Answer: " + result;

    // Reset the input fields
    num1Input.value = "";
    num2Input.value = "";
}
</script>

<div class="middle-container_2">
    <!-- Second Middle Container - Single Textbox and Button -->
    <div class="form-container_2">
        <h2>12 Days Of Christmas</h2>
        <form method="post" autocomplete="off">
            <div class="form-element">
                <label for="dayNumber">Enter a number (1-12):</label>
                <input type="text" id="dayNumber" name="dayNumber" class="sleigh1"required>
            </div>
            <div class="form-element">
                <input type="submit" name="submit" value="Submit" class="sleigh">
            </div>
        </form>
          <?php
        if (isset($_POST["submit"])) {
            $dayNumber = $_POST["dayNumber"];
            
            // Define an array of songs each day
            $verses = array(
                "1st" => "A partridge in a pear tree",
                "2nd" => "Two turtle doves",
                "3rd" => "Three French hens",
                "4th" => "Four calling birds",
                "5th" => "Five golden rings",
                "6th" => "Six geese a-laying",
                "7th" => "Seven swans a-swimming",
                "8th" => "Eight maids a-milking",
                "9th" => "Nine ladies dancing",
                "10th" => "Ten lords a-leaping",
                "11th" => "Eleven pipers piping",
                "12th" => "Twelve drummers drumming"
            );
            
            // Check if the entered number corresponds to a valid day
            if ($dayNumber >= 1 && $dayNumber <= 12) {
                $day = $dayNumber . "th";
                if ($dayNumber == 1) {
                    $day = "1st";
                } elseif ($dayNumber == 2) {
                    $day = "2nd";
                } elseif ($dayNumber == 3) {
                    $day = "3rd";
                }

                $verse = $verses[$day];
                echo "<p>On the $day day of Christmas, my true love gave to me: $verse</p>";
            } else {
                echo "<p>Ayaw pag Binugo... 1-12 ray ge ingon</p>";
            }
        }
        ?>
    </div>
</div>

 <div class="middle-container symptoms-container">
            <!-- Third Middle Container - Symptoms -->
            <div class="form-container">
            <h2>Symptoms</h2>
                <form method="post" autocomplete="off">
                    <div class="form-element">
                        <label for="symptom1">Symptom 1:</label>
                        <input type="text" id="symptom1" name="symptom1"class="sleigh1" required>
                    </div>
                    <div class="form-element">
                        <label for="symptom2">Symptom 2:</label>
                        <input type="text" id="symptom2" name="symptom2"class="sleigh1">
                    </div>
                    <div class="form-element">
                        <label for="symptom3">Symptom 3:</label>
                        <input type="text" id="symptom3" name="symptom3"class="sleigh1">
                    </div>
                    <div class="form-element">
                        <label for="symptom4">Other Symptom:</label>
                        <input type="text" id="symptom4" name="symptom4"class="sleigh1" >
                    </div>
                    <div class="form-element">
                        <input type="submit" value="Identify Disease" class="sleigh">
                    </div>
                </form>

                            <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Retrieve the entered symptoms
                        $symptom1 = $_POST["symptom1"];
                        $symptom2 = $_POST["symptom2"];
                        $symptom3 = isset($_POST["symptom3"]) ? $_POST["symptom3"] : "";
                        $symptom4 = isset($_POST["symptom4"]) ? $_POST["symptom4"] : "";
                        
                        // Define a list of diseases ug ang ilang symptoms
                        $diseases = array(
                            "FEVER" =>         array("sakit sa ulo","Sakit sa ulo","ubo","Ubo", "sipon","Sipon", "lipong", "Lipong"),
                            "INFLUENZA" =>     array("Fever","fever","Cough", "cough","Fatigue", "fatigue", "congestion", "Congestion"),
                            "DIARRHEA" =>      array("sakit tiyan","Sakit Tiyan","sakit sa tiyan","Sakit sa Tiyan","kalibangon pirme", "Kalibangon pirme","suka", "Suka"),
                            "DIABETES" =>      array( "Polyuria","polyuria", "polydipsia","Polydipsia", "weight loss", "Weight loss"),
                            "TUBERCULOSIS" =>  array("Night Sweats","night sweats", "Hemoptytis","hemoptytis",),
                            "ALZYMER'S" =>     array("Memory Loss","memory loss", "Confusion","confusion", "Agitation", "agitation", "Wandering", "wandering"),
                            "MIGRAINE" =>      array("headache","Headache","Aura", "aura","Photophobia","photophobia","nausea", "Nausea"),
                            "LEUKEMIA" =>      array("Paleness","paleness","Easy Bruising", "easy bruising","enlarge lymph nodes", "Enlarge lymph nodes"),
                            "HYPERTENSION" =>  array("Dizziness","dizziness","Nosebleed", "nosebleed","nosebleeding", "chest pain", "Chest Pain"),
                            "ASTHMA" =>        array("Wheezing","wheezing", "Chest Tightness", "chest tightness"),
                            "HEART DISEASE" => array("Chest Pain", "chest pain", "Shortness of breath","shortness of breath","Palpitation","palpitation","palpitate"),
                            "CANCER" =>        array("Lump","lump", "Weight loss","weight loss", "Pain", "pain"),
                            "ALLERGIES" =>     array("Sneezing","sneezing", "Itchy Eyes","itchy eyes", "Runny Nose","runny nose", "Hives", "hives"),
                            "STROKE" =>        array("Numbness","numbness", "Weakness", "weakness", "Speech Difficulty","speech difficulty", "Vision Problems", "vision problems"),
                            "ECZEMA" =>        array("Itching", "itching", "Rash", "rash", "Dry Skin", "dry skin", "Inflamation", "inflamation"),
                            "DEPRESSION" =>    array("Sadness","sadness", "Hopelessness", "hopelessness", "Sleep Disturbances", "sleep disturbances"),
                            "ARTHRITIS" =>     array("Joint pain","joint pain","Morning Stiffness", "morning stiffness", "Joint Deformity","joint deformity"),
                            "OSTEOARTHRITIS" => array("Joint Pain", "joint pain", "Limited Range of Motion", "limited range of motion", "Crepitus","crepitus" ),
                            "GASTROESOPHAGEAL REFLUX DISEASE" => array("Heartburn","heartburn", "regurgitation", "Chest pain"),
                            "IRRITABLE BOWEL SYNDROME" => array("bloated", "bloating", "diarrhea", "constipation"),
                            "CANCER" =>         array("hair loss", "pain", "skin changes", "abnormal bumps"),
                            "URINARY TRACT INFECTION" => array("sakit puson", "sakit mangihi", "sakit sa kilid"),
                            "WA RAKAY KWARTA" => array("pikon", "sigeg kasuko", "labad ulo"),
                        );
                        
                        // Initialize an array to store matching diseases
                        $matchingDiseases = array();
                        
                        // Check for diseases that match the entered symptoms
                        foreach ($diseases as $disease => $symptomArray) {
                            $matches = 0;
                            if (in_array($symptom1, $symptomArray)) {
                                $matches++;
                            }
                            if (in_array($symptom2, $symptomArray)) {
                                $matches++;
                            }
                            if ($symptom3 !== "" && in_array($symptom3, $symptomArray)) {
                                $matches++;
                            }
                            if ($symptom4 !== "" && in_array($symptom4, $symptomArray)) {
                                $matches++;
                            }
                            
                            // If a disease matches at least 1dd symptoms, add it to the list of matching diseases
                            if ($matches >= 1) {
                                $matchingDiseases[] = $disease;
                            }
                        }
                        
                        // Display the matching diseases
                        if (!empty($matchingDiseases)) {
                            echo "<h3>Possible Matching Diseases:</h3>";
                            echo "<ul>";
                            foreach ($matchingDiseases as $matchingDisease) {
                                echo "<li>$matchingDisease</li>";
                            }
                            echo "</ul>";
                        } else {
                            echo "<p>No matching diseases found for the entered symptoms.</p>";
                        }
                    }
                    ?>
            </div>
        </div>


<div class="waani">
    <div class="content-box-symptoms">
        <h2>Tic Tac Toe</h2>
        <div class="board" id="board">
            <div class="cell" onclick="makeMove(0, 0)"></div>
            <div class="cell" onclick="makeMove(0, 1)"></div>
            <div class="cell" onclick="makeMove(0, 2)"></div>
            <div class="cell" onclick="makeMove(1, 0)"></div>
            <div class="cell" onclick="makeMove(1, 1)"></div>
            <div class="cell" onclick="makeMove(1, 2)"></div>
            <div class="cell" onclick="makeMove(2, 0)"></div>
            <div class="cell" onclick="makeMove(2, 1)"></div>
            <div class="cell" onclick="makeMove(2, 2)"></div>
        </div>
        <!-- Moved the result element within the content-box-symptoms div -->
        <div id="score" class="cars"> <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button onclick="resetBoard()" class="sleigh" >Reset</button>
            <p>Score:</p>
            <p>Player 1 X: <span id="scoreX">0</span></p>
            <p>Player 2 O: <span id="scoreO">0</span></p> &nbsp;&nbsp;&nbsp;
            <button onclick="resetScore()" class="sleigh">Reset Score</button>
        </div> <br>
        <div id="result" class="cars"></div>
    </div>
</div>
<script>
  let currentPlayer = 'X';
  let board = ['', '', '', '', '', '', '', '', ''];
  let gameEnded = false;
  let scoreX = 0;
  let scoreO = 0;

  function makeMove(row, col) {
    if (!gameEnded && board[row * 3 + col] === '') {
      board[row * 3 + col] = currentPlayer;
      document.getElementById('board').children[row * 3 + col].textContent = currentPlayer;
      currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
      checkWinner();
    }
  }

  function checkWinner() {
    const winPatterns = [[0, 1, 2], [3, 4, 5], [6, 7, 8], [0, 3, 6], [1, 4, 7], [2, 5, 8], [0, 4, 8], [2, 4, 6]];

    for (let pattern of winPatterns) {
      const [a, b, c] = pattern;
      if (board[a] && board[a] === board[b] && board[a] === board[c]) {
        gameEnded = true;
        document.getElementById('result').textContent = `${board[a]} wins! Very Good!`;
        document.getElementById('board').children[a].classList.add('winning-cell');
        document.getElementById('board').children[b].classList.add('winning-cell');
        document.getElementById('board').children[c].classList.add('winning-cell');

        if (board[a] === 'X') {
          scoreX++;
          document.getElementById('scoreX').textContent = scoreX;
        } else if (board[a] === 'O') {
          scoreO++;
          document.getElementById('scoreO').textContent = scoreO;
        }

        // Set the winner as the first player for the next round
        currentPlayer = board[a];

        return;
      }
    }

    if (!board.includes('') && !gameEnded) {
      gameEnded = true;
      document.getElementById('result').textContent = "It's a tie!";
    }
  }

  function resetBoard() {
    board = ['', '', '', '', '', '', '', '', ''];
    gameEnded = false;
    document.getElementById('result').textContent = '';
    const cells = document.getElementsByClassName('cell');
    for (let cell of cells) {
      cell.textContent = '';
      cell.classList.remove('winning-cell');
    }
  }

  function resetScore() {
    scoreX = 0;
    scoreO = 0;
    document.getElementById('scoreX').textContent = '0';
    document.getElementById('scoreO').textContent = '0';
  }
</script>    


    <div class="right-nav">
            <!-- Right Navigation Content -->
            <div class="button-container"><br><br><br><br><br><br><br>
            <div class="mypic">
            <img src="Images/ace.jpg" alt="" style: "border-radius:50%;">
            </div> <br>
                <p class="haha">  Admin </p> <br>
                <button  id="profile" onclick = "displayp()"class="sleigh">Profile</button> <br><br>
                <a href="index.php"> <button class="sleigh"> Log out</button></a>
            </div>
        </div>
    </div>
    <br><br>

    <div class="container7" id="profile1">
            <h2>PROFILE</h2> 
             <img class="IMG" src="Images/ace.jpg" alt="">
            <br>
                <div class="profile1" style="display: inline-block;">
                <form method="post">
                    <div class="profile">
                        <label for="uid">User ID: <br><?php if(isset($_SESSION["uid"])){ echo $_SESSION["uid"];}?> </label> 
                    <span class="divider"></span>
                    <br>
                    </div>
                    <div class="profile"><br>
                        <label for="name">Name: <br><?php if(isset($_SESSION["name"])){ echo $_SESSION["name"];}?> </label>
                    <span class="divider"></span>
                    <br>
                    </div>
                    <div class="profile"><br>
                        <label for="dept">Dept: <br><?php if(isset($_SESSION["dept"])){ echo $_SESSION["dept"];}?> </label>
                   <span class="divider"></span>
                   <br>
                    </div>
                    <div class="profile"><br>
                        <label for="position">Position: <br><?php if(isset($_SESSION["position"])){ echo $_SESSION["position"];}?> </label>
                   <span class="divider"></span>
                   <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button onclick = "displayp()"class="sleigh">Back</button><br>
            </div>
        </div>

                 <!-- PROFILE SCRIPT -->
    <script>

        function displayp(){
            const display = document.getElementById('profile1');
            const displayStyle = display.style.display;
            if(displayStyle === "none"){
                document.getElementById("profile1").style.display = "block";
            }
            else{
                document.getElementById("profile1").style.display = "none"
            }
        }
        
    </script>
</div>
</body>
</html>
