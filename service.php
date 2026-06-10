<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample PHP Page</title>
</head>
<body>

    <?php
    // 1. Single-line comment: Define variables
    $heading = "Welcome to My PHP Website!"; 
    $user_logged_in = true;
    $items = ["Learn PHP Syntax", "Connect a Database", "Build Web Apps"];

    /* 
       2. Multi-line comment:
       A basic reusable function that prints a greeting
    */
    function generate_greeting($status) {
        if ($status) {
            return "Hello, registered user!";
        } else {
            return "Hello, Guest!";
        }
    }
    ?>

    <!-- 3. Outputting a variable directly into HTML -->
    <h1><?php echo $heading; ?></h1>

    <!-- 4. Conditional logic using the function -->
    <p><strong>Status:</strong> <?php echo generate_greeting($user_logged_in); ?></p>

    <!-- 5. Looping through an array to create a list -->
    <h3>Next Steps:</h3>
    <ul>
        <?php foreach ($items as $item): ?>
            <li><?php echo htmlspecialchars($item); ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- 6. Displaying the current date dynamically -->
    <footer>
        <p>Page generated on: <?php echo date('Y-m-d H:i:s'); ?></p>
    </footer>

</body>
</html>
