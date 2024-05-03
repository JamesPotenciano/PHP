
<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical 1 - Display</title>
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h2 {
    color: #333;
    font-size: 24px;
    margin-bottom: 10px;
}

p {
    color: #666;
    font-size: 16px;
    margin-bottom: 5px;
}

strong {
    font-weight: bold;
}

input[type="submit"] {
    background-color: #007bff;
    border: none;
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>
    <h2>Personal Information</h2>
    <p><strong>First Name:</strong> <?php echo isset($_SESSION['firstName']) ? $_SESSION['firstName'] : ''; ?></p>
    <p><strong>Last Name:</strong> <?php echo isset($_SESSION['lastName']) ? $_SESSION['lastName'] : ''; ?></p>
    <p><strong>Gender:</strong> <?php echo isset($_SESSION['gender']) ? $_SESSION['gender'] : ''; ?></p>
    <p><strong>Place of Birth:</strong> <?php echo isset($_SESSION['placeOfBirth']) ? $_SESSION['placeOfBirth'] : ''; ?></p>
    <p><strong>Birthday:</strong> <?php echo isset($_SESSION['birthday']) ? $_SESSION['birthday'] : ''; ?></p>

    <h2>Previous School</h2>
    <p><strong>Previous School:</strong> <?php echo isset($_SESSION['previousSchool']) ? $_SESSION['previousSchool'] : ''; ?></p>
    <p><strong>Year Level at Previous School:</strong> <?php echo isset($_SESSION['levelAtPreviousSchool']) ? $_SESSION['levelAtPreviousSchool'] : ''; ?></p>
    <p><strong>Language of Instruction:</strong> <?php echo isset($_SESSION['language']) ? $_SESSION['language'] : ''; ?></p>

    <h2>Medical Record</h2>
    <p><strong>Medical Records:</strong> <?php echo isset($_SESSION['medical']) ? $_SESSION['medical'] : ''; ?></p>

    <form action="index.php" method="post">
        <input type="submit" name="goback" value="Go Back">
    </form>
</body>

</html>
