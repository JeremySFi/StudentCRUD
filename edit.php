<?php
include 'db.php';
$id = $_GET['id'];
$student = $conn->query("SELECT * FROM students WHERE id=$id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $conn->query("UPDATE students SET name='$name', email='$email', age=$age WHERE id=$id");
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Student</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h1>Edit Student</h1>
<form method="post">
  <div class="mb-3">
      <label class="form-label">Name:</label>
      <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($student['name']) ?>" required>
    </div>

  <div class="mb-3">
      <label class="form-label">Email:</label>
      <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($student['email']) ?>" required>
  </div>
  <div class="mb-3">
      <label class="form-label">Age:</label>
      <input type="number" name="age" class="form-control" value="<?= htmlspecialchars($student['age']) ?>" required>
  </div>

      <button type="submit" value="Update" class="btn btn-warning">Update</button>
      <a href="index.php" class="btn btn-secondary">Cancel</a>
</form>
</body>
</html>