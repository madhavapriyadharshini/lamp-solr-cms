<?php
include '../config/db.php';
include '../core/functions.php';

$posts = getPosts($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>CMS with Solr Search</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <h1>Content Management System</h1>
  <form method="post" action="search.php">
    <input type="text" name="query" placeholder="Search articles...">
    <button type="submit">Search</button>
  </form>

  <?php while ($row = $posts->fetch_assoc()): ?>
    <div class="post">
      <h2><?= $row['title'] ?></h2>
      <p><?= $row['body'] ?></p>
    </div>
  <?php endwhile; ?>
</body>
</html>
