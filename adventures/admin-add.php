<!DOCTYPE html>
<html>
<head>
    <title>Add Trip</title>
    <?php include('../includes/head.html'); ?>
</head>
<body>
        <?php include('../includes/header.php');
        include('../includes/database.php'); ?>
        <main class='paddingTop'>
        <h1 class="h1">Add Adventure</h1>
        <div class="center">
            <!-- form for new trips -->
            <form action="admin-confirm.php" method="POST">
                <label for="heading">Heading:</label>
                <input type="text" id="heading" name="heading" required>

                <label for="tripDate">Trip Date:</label>
                <input type="date" id="tripDate" name="tripDate" min="<?php echo date('Y-m-d'); ?>" required>

                <label for="duration">Duration:</label>
                <input type="number" id="duration" name="duration" required>

                <label for="summary">Summary:</label>
                <textarea id="summary" name="summary" rows="5" required></textarea>

                <button type="submit">Add Adventure</button>
        </div>
    </main>
    <?php include('../includes/footer.html'); ?>