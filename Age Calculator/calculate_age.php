<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $birthdate = $_POST['birthdate'];
    $error = "";

    // Validate date format
    if (!preg_match("/^\d{2}\/\d{2}\/\d{4}$/", $birthdate)) {
        $error = "Please enter the date in the correct format (dd/mm/yyyy)!";
    } else {
        list($day, $month, $year) = explode('/', $birthdate);
        if (!checkdate($month, $day, $year)) {
            $error = "Please enter a valid date!";
        } else {
            $birthDate = new DateTime("$year-$month-$day");
            $currentDate = new DateTime();
            $interval = $birthDate->diff($currentDate);
            $years = $interval->y;
            $months = $interval->m;
            $days = $interval->d;
            $age = "You are $years years, $months months, and $days days old.";
        }
    }

    if (!empty($error)) {
        header("Location: index.php?error=" . urlencode($error));
    } else {
        header("Location: index.php?age=" . urlencode($age));
    }
    exit();
}
?>
