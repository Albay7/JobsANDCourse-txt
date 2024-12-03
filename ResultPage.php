<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_input = [];
    for ($i = 1; $i <= 36; $i++) {
        $user_input[] = isset($_POST["q$i"]) ? (int)$_POST["q$i"] : 0;
    }

    // Include the KNN algorithm
    include "knn.php";

    // Load and normalize the dataset
    $dataset = load_dataset("data.csv");
    $normalized_dataset = standardize_data($dataset);

    // Perform the recommendation
    $recommended_courses = knn_recommendation($normalized_dataset, $user_input, 3);
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Course Recommendation</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
            background-color: #f7f8fc; /* Light greyish-blue background */
        }
        h1 {
            color: #2c3e50; /* Dark Blue for main heading */
            margin-bottom: 30px;
        }
        .result-container {
            margin: 20px auto;
            width: 60%;
            background-color: #ffffff; /* White background for the results container */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .progress-bar-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            position: relative;
        }
        .progress-bar {
            background-color: #e0e0e0; /* Light grey background for progress bar */
            border-radius: 10px;
            flex-grow: 1;
            margin-left: 10px;
            height: 35px;
            overflow: hidden;
            position: relative;
        }
        .progress-bar-inner {
            background-color: #3498db; /* Soft blue for progress */
            height: 100%;
            border-radius: 10px;
            width: 0;
            transition: width 1s ease-in-out;
            position: relative;
        }
        .progress-label {
            font-weight: bold;
            color: #3498db; /* Matching color with progress bar */
            width: 200px;
            text-align: left;
        }
        .progress-bar-inner:hover::after {
            content: attr(data-percentage) "%";
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
            font-weight: bold;
            font-size: 14px;
        }
        .tooltip {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            white-space: nowrap;
            display: none;
        }
        .learn-more {
            margin-top: 40px;
            font-size: 18px;
            color: #2c3e50; /* Dark blue color for the link */
        }
        .learn-more a {
            text-decoration: none;
            color: #2c3e50; /* Purple color for the link */
            font-weight: bold;
        }
        .learn-more a:hover {
            color: #3498db; /* Blue on hover for the link */
        }
    </style>
    </head>
    <body>

    <h1>Top Courses Matching Your Profile</h1>

    <div class="result-container">
        <h2>We recommend the following courses:</h2>

        <?php
        // Display the recommendations with adjusted gaps
        if (!empty($recommended_courses)) {
            $displayed_courses = [];
            $counter = 0;
            foreach ($recommended_courses as $course) {
                if (!in_array($course[1], $displayed_courses)) {
                    $percentage = round($course[0], 2);

                    // Adjust width for top 3 courses with scaling
                    if ($counter === 0) {
                        $percentage = min($percentage + 10, 100); // Top course gets an extra boost
                        $gap = '30px'; // More gap after the first course
                    } elseif ($counter === 1) {
                        $percentage = $percentage * 1.1;
                        $gap = '20px'; // Medium gap after second course
                    } else {
                        $gap = '10px'; // Smaller gap for the third course
                    }

                    echo '
                    <div class="progress-bar-container" style="margin-bottom: ' . $gap . ';">
                        <span class="progress-label">' . htmlspecialchars($course[1]) . '</span>
                        <div class="progress-bar">
                            <div class="progress-bar-inner" data-percentage="' . $percentage . '" style="width: ' . $percentage . '%;"></div>
                        </div>
                    </div>';
                    $displayed_courses[] = $course[1];
                    $counter++;
                }
            }
        } else {
            echo "<p>No course recommendation available.</p>";
        }
        ?>

        <div class="learn-more">
            <p>To know more about these courses <a href="KnowledgePage.php">click here!</a></p>
        </div>
    </div>

    <script>
        // Optional: Add animation to the progress bars
        window.addEventListener('load', function () {
            const bars = document.querySelectorAll('.progress-bar-inner');
            bars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                setTimeout(() => {
                    bar.style.width = width;
                }, 100);
            });
        });
    </script>

    </body>
    </html>

<?php
}
?>
