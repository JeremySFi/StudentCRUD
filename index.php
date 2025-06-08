<?php
include 'db.php';
$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
<title>Students</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
<h1>Student List</h1>
<a href="add.php" class="btn btn-success mb-3">Add Student</a>
<table class="table table-bordered">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Age</th><th>Actions</th></tr>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
  <td><?= $row['id'] ?></td>
  <td><?= $row['name'] ?></td>
  <td><?= $row['email'] ?></td>
  <td><?= $row['age'] ?></td>
  <td>
    <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a> |
    <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
  </td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>