<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Content-Type: application/json");
require "db.php"; // Database connection file

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["comments_name"]);
    $comment = trim($_POST["comments_comment"]);

    if (!empty($name) && !empty($comment)) {
        $stmt = $conn->prepare("INSERT INTO comments (name, comment) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $comment);

        if ($stmt->execute()) {
            echo json_encode(["success" => true, "message" => "Comment submitted successfully!"]);
        } else {
            echo json_encode(["success" => false, "message" => "Failed to submit comment."]);
        }
        $stmt->close();
    } else {
        echo json_encode(["success" => false, "message" => "All fields are required."]);
    }
}
?>
