<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - PathFinder</title>
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
            justify-content: flex-start;
            height: 100vh;  /* Full viewport height */
            overflow: hidden;  /* Prevent scrolling */
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

        /* About Us Section */
        .container {
            width: 100%;
            max-width: 1200px;
            text-align: center;
            padding: 20px; /* Reduced padding */
            margin-top: 100px; /* Adjusted to fit below navbar */
            flex: 1;  /* Allow the container to take available space */
        }

        .about h1 {
            font-size: 3.5rem;
            margin-bottom: 30px;
            color: #2d3e50;  /* Dark blue text */
            font-weight: 700;
        }

        .about p {
            font-size: 1.25rem;
            color: #555;  /* Dark grey text */
            margin-bottom: 40px;
            line-height: 1.8;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .team {
            display: flex;
            justify-content: space-around;
            gap: 40px;
            margin-top: 60px;
            flex-wrap: wrap;
        }

        .team .member {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 25px;
            width: 23%;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .team .member:hover {
            transform: translateY(-10px);
        }

        .team .member img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 15px;
            object-fit: cover;
        }

        .team .member h3 {
            font-size: 1.6rem;
            color: #2d3e50;
            margin-bottom: 10px;
        }

        .team .member p {
            color: #555;
            font-size: 1rem;
            margin-top: 10px;
            line-height: 1.6;
            max-width: 200px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Footer Styling */
        footer {
            width: 100%;
            background-color: #2d3e50;  /* Dark blue footer */
            text-align: center;
            padding: 15px 0;
            color: #fff;
            font-size: 0.9rem;
            position: fixed;
            bottom: 0;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .container {
                padding: 40px 20px;
            }

            .about h1 {
                font-size: 2.8rem;
                margin-bottom: 20px;
            }

            .about p {
                font-size: 1.1rem;
                max-width: 90%;
            }

            .team {
                flex-direction: column;
                align-items: center;
            }

            .team .member {
                width: 80%;
                margin-bottom: 30px;
            }
        }

        @media (max-width: 768px) {
            .team .member {
                width: 100%;
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
                <li><a href="Home_page.php">HOME</a></li>
                <li><a href="knowledgePage.php">LEARN</a></li>
                <li><a href="AboutUsPage.php">ABOUT US</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="about">
            <h1>About Us</h1>
            <p>At PathFinder, our mission is to provide a seamless way to help individuals discover the best learning and career paths. We offer a platform that assists users in identifying the right courses and job roles based on their unique skills, interests, and needs.</p>
            <p>We aim to simplify the decision-making process for users by guiding them with personalized recommendations, ensuring they make informed choices for their future growth.</p>

            <h2>Meet the Team</h2>
            <div class="team">
                <div class="member">
                    <img src="Hendrix.jpg" alt="Team Member 1">
                    <h3>Albay, Hendrix B.</h3>
                    <p>Contact Us through Email: ahb0562@dlsud.edu.ph</p>
                </div>
                <div class="member">
                    <img src="Jl.jpg" alt="Team Member 2">
                    <h3>Trampe, John Lirams</h3>
                    <p>Contact Us through Email: tjp0611@dlsud.edu.ph</p>
                </div>
                <div class="member">
                    <img src="Jess.jpg" alt="Team Member 3">
                    <h3>Da Silva H. Ferreira, Jessica Alen</h3>
                    <p>Contact Us through Email: djx2462@dlsud.edu.ph</p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        © 2024 PathFinder. All rights reserved.
    </footer>
</body>
</html>
