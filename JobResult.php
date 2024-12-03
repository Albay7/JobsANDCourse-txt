<?php
include 'JobKnn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_input = [];
    for ($i = 1; $i <= 36; $i++) {
        $user_input[] = isset($_POST["q$i"]) ? (int)$_POST["q$i"] : 0;
    }

    // Load the dataset (make sure the path is correct)
    $dataset = load_dataset("job_data.csv");

    // Perform the recommendation (k=3 for top 3 jobs)
    $recommended_jobs = knn_recommendation($dataset, $user_input, 3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Recommendations</title>
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

<h1>Top Jobs Matching Your Profile</h1>

<div class="result-container">
    <h2>We recommend the following job roles:</h2>

    <?php
    // Display the recommendations with custom gap adjustments
    if (!empty($recommended_jobs)) {
        $displayed_jobs = [];
        $counter = 0;
        foreach ($recommended_jobs as $job) {
            if (!in_array($job[1], $displayed_jobs)) {
                $percentage = round($job[0], 2); // Directly use the KNN percentage

                // Initialize gap and visual width
                $gap = 0;
                $visual_width = $percentage;

                // Adjust gaps dynamically based on the counter (using fixed percentage gaps)
                if ($counter === 0) {
                    // First job: no gap
                    $gap = '30px';  // 30% gap after the first job
                } elseif ($counter === 1) {
                    // Second job: 30% gap after the first job
                    $gap = '20px';  // 20% gap after the second job
                } else {
                    // Third job: 20% gap after the second job
                    $gap = '10px';  // 10% gap after the third job
                }

                // Display the job with a fixed gap
                echo '
                <div class="progress-bar-container" style="margin-bottom: ' . $gap . ';">
                    <span class="progress-label">' . htmlspecialchars($job[1]) . '</span>
                    <div class="progress-bar">
                        <div class="progress-bar-inner" data-percentage="' . $percentage . '" style="width: ' . $percentage . '%;"></div>
                    </div>
                </div>';
                $displayed_jobs[] = $job[1];
                $counter++;

                // Stop after displaying the top 3 jobs
                if ($counter >= 3) break;
            }
        }
    } else {
        echo "<p>No job recommendation available.</p>";
    }
    ?>

    <div class="learn-more">
        <p>To know more about these jobs <a href="KnowledgePage.php">click here!</a></p>
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
