<?php
include 'db.php'; // Make sure you have a DB connection file

$limit = 3; // Number of comments per page
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $limit;

// Fetch total count
$totalQuery = $conn->query("SELECT COUNT(*) as total FROM comments");
$totalResult = $totalQuery->fetch_assoc();
$totalComments = $totalResult['total'];
$totalPages = ceil($totalComments / $limit);

// Fetch comments for the current page
$query = $conn->prepare("SELECT * FROM comments ORDER BY created_at DESC LIMIT ?, ?");
$query->bind_param("ii", $offset, $limit);
$query->execute();
$result = $query->get_result();

$comments = [];
while ($row = $result->fetch_assoc()) {
    $comments[] = $row;
}

// Return JSON response
echo json_encode([
    "comments" => $comments,
    "totalPages" => $totalPages
]);
?>
