<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $inputValue = $_POST['input_value'];
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Input Values Display</title>
</head>
<body>
  <form method="POST" action="">
    <label for="input_value">Input Value:</label>
    <input type="text" name="input_value" id="input_value">
    <button type="submit">Submit</button>
  </form>

  <?php if (isset($inputValue)): ?>
    <h2>Input Value:</h2>
    <p><?php echo $inputValue; ?></p>
  <?php endif; ?>
</body>
</html>

