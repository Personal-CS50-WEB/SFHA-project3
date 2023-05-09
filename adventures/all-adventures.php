<!DOCTYPE html>
<html>

<head>
    <title>Halifax Canoe and Kayak</title>
    <?php include('../includes/head.html'); ?>
</head>

<body>
    <?php include('../includes/header.php');
    include('../includes/database.php'); ?>
    <main>

        <section class="image-background">
            <h1>Come Experience Canada</h1>
        </section>

        <!-- Adding a section with information about upcoming adventures -->
        <section>
            <h2>Upcoming adventures</h2>
            <hr>
            </hr>
            <?php
            // Retrieve all records from the trip table
            $stmt = $db->prepare("SELECT * FROM trip");
            $stmt->execute();
            $hasTrips = false;

            //Adding an article for each adventure
            while ($row = $stmt->fetch()) {
                echo "<article>";
                echo "<h3><a href='#'>" . $row['heading'] . "</a></h3>";
                echo "<p><strong>Date: </strong>" . $row['tripDate'] . "</p>";
                echo "<p><strong>Duration: </strong>" . $row['duration'] . " days</p>";
                echo "<h4>Summary</h4><p>" . $row['summary'] . "</p>";
                echo "</article>";
                $hasTrips = true;
            }
            if (!$hasTrips) { // check if there are no trips
                echo "<p>No available trips.</p>";
            } ?>

        </section>
    </main>
    <?php include('../includes/footer.html'); ?>