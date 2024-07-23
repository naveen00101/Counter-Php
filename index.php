<?php
require_once __DIR__ . '/vendor/autoload.php';

use MyApp\Counter;

session_start();

$counter = new Counter();

if (isset($_POST['action'])) {
    if ($_POST['action'] === 'increment') {
        $counter->increment();
    } elseif ($_POST['action'] === 'decrement') {
        $counter->decrement();
    }
}

$count = $counter->getCount();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Counter Application</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .counter { font-size: 48px; margin: 20px 0; }
        button { font-size: 18px; margin: 0 10px; padding: 10px 20px; }
    </style>
</head>
<body>
    <h1>PHP Counter Application</h1>
    <div class="counter"><?php echo $count; ?></div>
    <form method="post">
        <button type="submit" name="action" value="decrement">-</button>
        <button type="submit" name="action" value="increment">+</button>
    </form>
</body>
</html>