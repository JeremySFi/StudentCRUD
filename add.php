<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $conn->query("INSERT INTO students (name, email, age) VALUES ('$name', '$email', $age)");
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  
<title>Add Student</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h1>Add Student</h1>
<form method="post" class="mt-3">
  <div class="mb-3">
      <label class="form-label">Name:</label>
      <input type="text" name="name" class="form-control" required>
  </div>

  <div class="mb-3">
      <label class="form-label">Email:</label>
      <input type="email" name="email" class="form-control" required>
  </div>

  <div class="mb-3">
      <label class="form-label">Age:</label>
      <input type="number" name="age" class="form-control" required>
  </div>
      <button type="submit" value="Add" name="Add" class="btn btn-success">Add User</button>
      <a href="index.php" class="btn btn-secondary">Cancel</a>
</form>
</body>
</html>