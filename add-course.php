<?php
// add_course.php

// Include the database connection and other necessary files
include_once('config.php');

// Check if the request is an AJAX request
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
    // Get the submitted course data
    $title = $_POST['title'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $link = $_POST['link'];

    // Insert the course into the database
    $stmt = $con->prepare("INSERT INTO toate_cursurile (title, image, description, link) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $image, $description, $link);

    if ($stmt->execute()) {
        // Course insertion successful
        $courseId = $stmt->insert_id;
        $stmt->close();

        // Return the newly inserted course data
        $response = [
            'status' => 'success',
            'courseId' => $courseId,
            'courseData' => [
                'title' => $title,
                'image' => $image,
                'description' => $description,
                'link' => $link
            ]
        ];
        echo json_encode($response);
    } else {
        // Course insertion failed
        $response = [
            'status' => 'error',
            'message' => 'Failed to insert course'
        ];
        echo json_encode($response);
    }
} else {
    // Handle non-AJAX request if needed
    // ...
}
?>
