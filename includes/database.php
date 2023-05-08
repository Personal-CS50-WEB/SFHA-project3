<?php
# Open the database
try {
    $db = new PDO("mysql:host=localhost;dbname=adventures", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    printf("Unable to open database: %s\n", $e->getMessage());
}
?>