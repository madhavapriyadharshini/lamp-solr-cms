<?php
function getPosts($conn) {
    $sql = "SELECT * FROM posts ORDER BY created_at DESC";
    return $conn->query($sql);
}
?>
