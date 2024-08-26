<?php
$animals = [
    "Elephant",
    "Giraffe",
    "Kangaroo",
    "Penguin",
    "Tiger"
];
$animal = $animals[array_rand($animals)];
?>


<!DOCTYPE html>
<html>
<body>
    <h1>Welcome to my PHP app.</h1>

    <?php
    echo "<p>My favorite animal is " . $animal . "</p>";
    ?>
</body>
</html>