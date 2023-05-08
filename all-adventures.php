<!DOCTYPE html>
<html>

<head>
    <title>Halifax Canoe and Kayak</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/main.css'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src='./js/main.js'></script>
</head>

<body>
    <?php include('./includes/header.php');
    include('./includes/database.php'); ?>
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

            //Adding an article for each adventure
            while ($row = $stmt->fetch()) {
                echo "<article>";
                echo "<h3><a href='#'>" . $row['heading'] . "</a></h3>";
                echo "<p><strong>Date: </strong>" . $row['tripDate'] . "</p>";
                echo "<p><strong>Duration: </strong>" . $row['duration'] . " days</p>";
                echo "<h4>Summary</h4><p>" . $row['summary'] . "</p>";
                echo "</article>";
            } ?>

        </section>
    </main>
    <?php include('./includes/footer.html'); ?>