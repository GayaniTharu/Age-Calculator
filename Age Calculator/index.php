<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Age Calculator</h1>
        <form method="post" action="calculate_age.php">
            <div class="input-group">
                <label for="birthdate">Enter your birthdate (dd/mm/yyyy):</label>
                <input type="text" id="birthdate" name="birthdate" placeholder="e.g., 23/07/1990">
            </div>
            <?php
            if (isset($_GET['error'])) {
                echo '<div class="error">' . htmlspecialchars($_GET['error']) . '</div>';
            }
            if (isset($_GET['age'])) {
                echo '<div class="result">' . htmlspecialchars($_GET['age']) . '</div>';
            }
            ?>
            <button type="submit">Calculate Age</button>
        </form>
    </div>
</body>
</html>
