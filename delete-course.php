<?php
include_once('config.php');
session_start();

// Check if the user is logged in and has the necessary permissions
if (isset($_SESSION['role']) && $_SESSION['role'] === 'profesor') {
    // Check if the course_id parameter is provided
    if (isset($_POST['course_id'])) {
        $courseID = $_POST['course_id'];

        // Delete the course from the database
        $sql = "DELETE FROM toate_cursurile WHERE id = '$courseID'";
        if ($con->query($sql) === true) {
            echo "Course deleted successfully.";
            header("Location:toate-cursurile.php");
        } else {
            echo "Error deleting course: " . $con->error;
        }
    } else {
        echo "Invalid request. Course ID not provided.";
    }
} else {
    echo "You don't have permission to delete courses.";
}
?>
