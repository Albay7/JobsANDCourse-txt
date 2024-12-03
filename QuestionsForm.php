<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        label {
            display: block;
            width: 1000px;
        }
        select {
            width: 200px;
        }
        /* General Body Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;  /* Light blue-grey background */
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Header Styling */
        h1 {
            color: #2d3e50;  /* Dark blue */
            text-align: center;
            margin-top: 20px;
            font-size: 36px;
        }

        h2 {
            color: #2d3e50;
            font-size: 24px;
            margin-top: 30px;
        }

        /* Form Styling */
        form {
            max-width: 800px;
            margin: 30px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Paragraph Styling */
        p {
            font-size: 18px;
            color: #555;
            text-align: center;
            margin-bottom: 30px;
        }

        /* Label Styling */
        label {
            display: block;
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
        }

        /* Select Dropdown Styling */
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: #fafafa;
        }

        /* Input Submit Button Styling */
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #2d3e50;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #415a74;  /* Hover effect for the button */
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            form {
                padding: 20px;
            }
            
            h1 {
                font-size: 28px;
            }
            
            h2 {
                font-size: 20px;
            }
        }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Path Finder</title>
</head>
<body>
    <h1>Career Path Finder</h1>
    <form action="ResultPage.php" method="POST">
    <p>Please rate yourself on the following categories to help us recommend suitable Course Path:</p>

        <!-- Skills Section -->
        <h2>Section 1: Skills (Practical Abilities)</h2>
        <label for="q1">1. I enjoy problem-solving and critical thinking</label><br>
        <select id="q1" name="q1" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Strongly Disagree</option>
            <option value="2">Somewhat Agree</option>
            <option value="3">Strongly Agree</option>
        </select>
        <br><br>

        <label for="q2">2. I am interested in designing and developing software</label><br>
        <select id="q2" name="q2" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Strongly Disagree</option>
            <option value="2">Somewhat Agree</option>
            <option value="3">Strongly Agree</option>
        </select><br><br>

        <label for="q3">3. I like working with computers and technology</label><br>
        <select id="q3" name="q3" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Strongly Disagree</option>
            <option value="2">Somewhat Agree</option>
            <option value="3">Strongly Agree</option>
        </select><br><br>

        <label for="q4">4. I am good at analyzing data and finding patterns</label><br>
        <select id="q4" name="q4" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Strongly Disagree</option>
            <option value="2">Somewhat Agree</option>
            <option value="3">Strongly Agree</option>
        </select><br><br>

        <label for="q5">5. I enjoy learning about computer systems and networks</label><br>
        <select id="q5" name="q5" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Strongly Disagree</option>
            <option value="2">Somewhat Agree</option>
            <option value="3">Strongly Agree</option>
        </select><br><br>

        <label for="q6">6. I am interested in creating games and interactive experiences</label><br>
        <select id="q6" name="q6" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Strongly Disagree</option>
            <option value="2">Somewhat Agree</option>
            <option value="3">Strongly Agree</option>
        </select><br><br>

        <label for="q7">7. I like working on projects that involve coding and programming</label><br>
        <select id="q7" name="q7" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Strongly Disagree</option>
            <option value="2">Somewhat Agree</option>
            <option value="3">Strongly Agree</option>
        </select><br><br>

        <label for="q8">8. I am good at communicating technical information to others</label><br>
        <select id="q8" name="q8" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Strongly Disagree</option>
            <option value="2">Somewhat Agree</option>
            <option value="3">Strongly Agree</option>
        </select><br><br>

        <label for="q9">9. I enjoy learning about cybersecurity and protecting computer systems</label><br>
        <select id="q9" name="q9" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Strongly Disagree</option>
            <option value="2">Somewhat Agree</option>
            <option value="3">Strongly Agree</option>
        </select><br><br>

        <label for="q10">10. I am interested in designing and developing databases</label><br>
        <select id="q10" name="q10" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Strongly Disagree</option>
            <option value="2">Somewhat Agree</option>
            <option value="3">Strongly Agree</option>
        </select><br><br>

        <label for="q11">11. I like working on projects that involve data analysis and interpretation</label><br>
        <select id="q11" name="q11" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Strongly Disagree</option>
            <option value="2">Somewhat Agree</option>
            <option value="3">Strongly Agree</option>
        </select><br><br>

        <label for="q12">12. I am good at troubleshooting and repairing computer hardware</label><br>
        <select id="q12" name="q12" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Strongly Disagree</option>
            <option value="2">Somewhat Agree</option>
            <option value="3">Strongly Agree</option>
        </select><br><br>

        <!-- Knowledge Section -->
        <h2>Section 2: Interests (Areas of Focus or Curiosity)</h2>

        <label for="q13">13. I know how to program in at least one programming language</label><br>
        <select id="q13" name="q13" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Familiar</option>
            <option value="2">Somewhat Familiar</option>
            <option value="3">Very Familiar</option>
        </select><br><br>

        <label for="q14">14. I am familiar with computer-aided design (CAD) software</label><br>
        <select id="q14" name="q14" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Familiar</option>
            <option value="2">Somewhat Familiar</option>
            <option value="3">Very Familiar</option>
        </select><br><br>

        <label for="q15">15. I know how to design and develop websites</label><br>
        <select id="q15" name="q15" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Familiar</option>
            <option value="2">Somewhat Familiar</option>
            <option value="3">Very Familiar</option>
        </select><br><br>

        <label for="q16">16. I am familiar with database management systems</label><br>
        <select id="q16" name="q16" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Familiar</option>
            <option value="2">Somewhat Familiar</option>
            <option value="3">Very Familiar</option>
        </select><br><br>

        <label for="q17">17. I know how to analyze and interpret data</label><br>
        <select id="q17" name="q17" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Familiar</option>
            <option value="2">Somewhat Familiar</option>
            <option value="3">Very Familiar</option>
        </select><br><br>

        <label for="q18">18. I am familiar with computer networks and protocols</label><br>
        <select id="q18" name="q18" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Familiar</option>
            <option value="2">Somewhat Familiar</option>
            <option value="3">Very Familiar</option>
        </select><br><br>

        <label for="q19">19. I know how to design and develop software applications</label><br>
        <select id="q19" name="q19" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Familiar</option>
            <option value="2">Somewhat Familiar</option>
            <option value="3">Very Familiar</option>
        </select><br><br>

        <label for="q20">20. I am familiar with the principles of cybersecurity</label><br>
        <select id="q20" name="q20" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Familiar</option>
            <option value="2">Somewhat Familiar</option>
            <option value="3">Very Familiar</option>
        </select><br><br>

        <label for="q21">21. I know how to use project management tools</label><br>
        <select id="q21" name="q21" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Familiar</option>
            <option value="2">Somewhat Familiar</option>
            <option value="3">Very Familiar</option>
        </select><br><br>

        <label for="q22">22. I am familiar with the principles of cloud computing</label><br>
        <select id="q22" name="q22" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Familiar</option>
            <option value="2">Somewhat Familiar</option>
            <option value="3">Very Familiar</option>
        </select><br><br>

        <label for="q23">23. I know how to work with virtual machines and containers</label><br>
        <select id="q23" name="q23" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Familiar</option>
            <option value="2">Somewhat Familiar</option>
            <option value="3">Very Familiar</option>
        </select><br><br>

        <label for="q24">24. I am familiar with artificial intelligence and machine learning concepts</label><br>
        <select id="q24" name="q24" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Familiar</option>
            <option value="2">Somewhat Familiar</option>
            <option value="3">Very Familiar</option>
        </select><br><br>

        <!-- Interest -->
        <h2>Section 3: Knowledge (Concepts or Theoretical Understanding)</h2>

        <label for="q25">25. I know how to design and develop mobile applications</label><br>
        <select id="q25" name="q25" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Familiar</option>
            <option value="2">Somewhat Familiar</option>
            <option value="3">Very Familiar</option>
        </select><br><br>

        <label for="q26">26. I am familiar with internet of things (IoT) technology</label><br>
        <select id="q26" name="q26" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Familiar</option>
            <option value="2">Somewhat Familiar</option>
            <option value="3">Very Familiar</option>
        </select><br><br>

        <label for="q27">27. I am familiar with blockchain and cryptocurrency technology</label><br>
        <select id="q27" name="q27" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Familiar</option>
            <option value="2">Somewhat Familiar</option>
            <option value="3">Very Familiar</option>
        </select><br><br>

        <label for="q28">28. I know how to use data analysis tools like Python and R</label><br>
        <select id="q28" name="q28" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Familiar</option>
            <option value="2">Somewhat Familiar</option>
            <option value="3">Very Familiar</option>
        </select><br><br>

        <label for="q29">29. I know how to use machine learning libraries like TensorFlow</label><br>
        <select id="q29" name="q29" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Familiar</option>
            <option value="2">Somewhat Familiar</option>
            <option value="3">Very Familiar</option>
        </select><br><br>

        <label for="q30">30. I know how to use web development frameworks like Angular or React</label><br>
        <select id="q30" name="q30" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Familiar</option>
            <option value="2">Somewhat Familiar</option>
            <option value="3">Very Familiar</option>
        </select><br><br>

        <label for="q31">31. I have a talent for simplifying complex ideas for others to understand</label><br>
        <select id="q31" name="q31" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Strong</option>
            <option value="2">Somewhat Strong</option>
            <option value="3">Very Strong</option>
        </select><br><br>

        <label for="q32">32. I am good at working with numbers and financial data</label><br>
        <select id="q32" name="q32" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Strong</option>
            <option value="2">Somewhat Strong</option>
            <option value="3">Very Strong</option>
        </select><br><br>

        <label for="q33">33. I enjoy working with others to brainstorm and come up with creative solutions</label><br>
        <select id="q33" name="q33" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Strong</option>
            <option value="2">Somewhat Strong</option>
            <option value="3">Very Strong</option>
        </select><br><br>

        <label for="q34">34. I am skilled at working with people from diverse backgrounds</label><br>
        <select id="q34" name="q34" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Strong</option>
            <option value="2">Somewhat Strong</option>
            <option value="3">Very Strong</option>
        </select><br><br>

        <label for="q35">35. I have a strong ability to think critically and make decisions under pressure</label><br>
        <select id="q35" name="q35" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Strong</option>
            <option value="2">Somewhat Strong</option>
            <option value="3">Very Strong</option>
        </select><br><br>

        <label for="q36">36. I am good at networking and building relationships with others in professional settings</label><br>
        <select id="q36" name="q36" required>
            <option value="" disabled selected>Choose your answer</option>
            <option value="1">Not Strong</option>
            <option value="2">Somewhat Strong</option>
            <option value="3">Very Strong</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
