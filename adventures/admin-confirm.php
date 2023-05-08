<!DOCTYPE html>
<html>
<head>
    <title>confirm Trip</title>
    <?php include('../includes/head.html'); ?>
</head>
<body>
    <?php include('../includes/header.php'); ?>
    <main class='paddingTop'>
        <?php

        if (isset($_POST['heading'])) {

            // Get the data from the form
            $heading = trim($_POST["heading"]);
            $tripDate = trim($_POST["tripDate"]);
            $duration = trim($_POST["duration"]);
            $summary = trim($_POST["summary"]);

            if (!$heading || !$tripDate || !$duration || !$summary) {
                printf("You must fill all fields");
                printf("<br><a href=../all-adventures.php>Return to home page </a>");
                exit();
            }
            $heading = addslashes($heading);
            $tripDate = addslashes($tripDate);
            $duration = addslashes($duration);
            $summary = addslashes($summary);

            include('../includes/database.php');
            // Check if a record with the same heading and tripDate already exists
            $stmt = $db->prepare("SELECT * FROM trip WHERE heading=:heading AND tripDate=:tripDate AND duration=:duration");
            $stmt->bindParam(':heading', $heading);
            $stmt->bindParam(':tripDate', $tripDate);
            $stmt->bindParam(':duration', $duration);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                // A matching record was found, display an error message
                printf("<h2>Invalid Entry</h2><hr></hr><p class='error-message'>Adventure with the same details already exists!</p>");

            } else {

                // Prepare an insert statement and execute it
                $stmt = $db->prepare("insert into trip values (null, ?, ?, ?, ?)");
                $stmt->execute(array("$heading", "$tripDate", "$duration", "$summary"));

                printf("<h2>confirmation</h2><hr></hr><p>New Trip Has Been Added!</p>");

            }
            printf("<br><h3><a href=./all-adventures.php>View All Adventures</a></h3>");
            exit;
        }

        include('../includes/footer.html'); ?>