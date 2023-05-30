<!DOCTYPE html>
<html>
<head>
    <title>Display HTML Values</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="html_input" placeholder="Enter HTML value" />
        <input type="submit" name="submit" value="Submit" />
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $htmlValue = $_POST['html_input'];
        echo $htmlValue;
    }
     echo '<div id="table" class="container">';
            echo '<table id = "resultTable" class="highlight "><thead><tr>';
            foreach ($headers as $header) {
                echo '<th>' . $header . '</th>';
    ?>
</body>
</html>

