<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PathFinder</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fc;  /* Light blue-grey background */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        /* Full-width Navigation Bar */
        .header {
            width: 100%;
            background-color: #2d3e50;  /* Dark blue background */
            padding: 5px 10%;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            height: 50px;
            border-radius: 50%;
        }

        .logo span {
            font-size: 1.8rem;
            color: #fff;
            font-weight: 600;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        .nav-links li a {
            text-decoration: none;
            color: #d8d8d8;  /* Light grey for links */
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links li a:hover {
            color: #2d3e50;  /* Dark blue hover effect */
        }

        /* Main Content Section */
        .container {
            width: 100%;
            max-width: 1200px;
            text-align: center;
            padding: 80px 20px;
            margin-top: 60px; /* Adjust for fixed header */
            display: flex;
            justify-content: space-between;
            gap: 20px; /* Reduced gap for better fit */
        }

        .intro h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #2d3e50;  /* Dark blue text */
        }

        .intro p {
            font-size: 1.2rem;
            color: #555;  /* Dark grey text */
            margin-bottom: 40px;
        }

        /* Adjusted size for the boxes to take half the page width */
        .box {
            background-color: #ffffff;  /* White background for boxes */
            border-radius: 15px;
            padding: 40px; /* Increased padding for more space inside */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 48%; /* Set width to 48% to make them fit side by side */
            height: auto; /* Ensures height adjusts to content */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .box h2 {
            font-size: 2.2rem; /* Increased font size for better readability */
            margin-bottom: 20px;
            color: #2d3e50;  /* Dark blue for box headings */
        }

        .box p {
            margin: 10px 0;
            font-size: 18px; /* Increased font size for the description */
            color: #333;  /* Dark grey for text */
        }

        .btn {
            background-color: #2d3e50;  /* Dark blue button */
            color: #fff;
            padding: 20px 50px; /* Increased padding for a larger button */
            border: none;
            border-radius: 30px; /* Slightly larger border-radius for a more rounded button */
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: 700; /* Increased font weight for emphasis */
            font-size: 1.5rem; /* Increased font size for better readability */
        }

        .btn:hover {
            background-color: #415a74;  /* Lighter dark blue hover effect */
        }

        /* Footer Styling */
        footer {
            width: 100%;
            background-color: #2d3e50;  /* Dark blue footer */
            text-align: center;
            padding: 15px 0;
            color: #fff;
            font-size: 0.9rem;
            position: absolute;
            bottom: 0;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .container {
                flex-direction: column;
                gap: 40px; /* Adjusted gap for mobile */
            }
            
            .box {
                width: 80%; /* Ensure boxes take full width on mobile */
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="navbar">
            <div class="logo">
                <img src="Pathfinder_logo.png" alt="PathFinder Logo">
                <span>PathFinder</span>
            </div>
            <ul class="nav-links">
                <li><a href="Home_page.php">HOME</a></li> <!-- Link back to Home Page -->
                <li><a href="KnowledgePage.php">LEARN</a></li>
                <li><a href="AboutUsPage.php">ABOUT US</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="box">
            <h2>COURSES</h2>
            <button class="btn" onclick="window.location.href='QuestionsForm.php'">LET'S FIND OUT!</button>
        </div>
        <div class="box">
            <h2>JOBS</h2>
            <button class="btn" onclick="window.location.href='QuestionFormJob.php'">LET'S FIND OUT!</button>
        </div>
    </div>
    <footer>
        © 2024 PathFinder. All rights reserved.
    </footer>
</body>
</html>
