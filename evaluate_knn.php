<?php
include "knn.php";

/**
 * Split the dataset into training and testing sets
 * $test_ratio - Proportion of the dataset to be used as test data
 */

function split_dataset($dataset, $test_ratio = 0.2) {
    shuffle($dataset);
    $test_size = (int)(count($dataset) * $test_ratio);
    $test_data = array_slice($dataset, 0, $test_size);
    $train_data = array_slice($dataset, $test_size);
    return [$train_data, $test_data];
}


/**
 * Evaluate the accuracy of the KNN model
 * $dataset - The full dataset
 *  $k - Number of nearest neighbors to consider
 *  Accuracy of the model as a percentage
 */

function evaluate_knn_accuracy($dataset, $k = 3) {
    list($train_data, $test_data) = split_dataset($dataset);

    $correct = 0;
    $total = count($test_data);

    foreach ($test_data as $entry) {
        $user_input = array_slice($entry, 0, 36);
        $actual_course = $entry[36];

        $predictions = knn_recommendation($train_data, $user_input, $k);
        $predicted_course = $predictions[0][1] ?? null; // Get the top prediction

        if ($predicted_course === $actual_course) {
            $correct++;
        }
    }

    return ($correct / $total) * 100; // Return accuracy as a percentage
}

// Load and normalize the dataset
$dataset = load_dataset("data.csv");
$normalized_dataset = standardize_data($dataset);

// Evaluate KNN accuracy
$accuracy = evaluate_knn_accuracy($normalized_dataset, 3);
echo "KNN Model Accuracy For Course Recommendations: " . round($accuracy, 2) . "%\n";
?>
