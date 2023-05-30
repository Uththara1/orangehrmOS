<!DOCTYPE html>
<html>
<head>
    <title>Employee List</title>
</head>
<body>
    <h1>Employee List</h1>
    <ul>
        <?php
        $employees = [
            "<script>alert('XSS attack!');</script>",
            "John Doe",
            "Jane Smith",
            "<img src='malicious-image.jpg' onload='alert(\"XSS attack!\");'>",
            "Robert Johnson",
        ];

        foreach ($employees as $employee) {
            echo "<li>$employee</li>";
        }
        ?>
    </ul>
</body>
</html>

