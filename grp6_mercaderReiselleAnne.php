<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Exercise</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $file = "grp6data.txt";
    $second_file = "sample.txt";
    $data = '"The only way to learn to program is to program." - Linus Torvalds';

if (file_exists($file)) {
    $lines = file($file);

    foreach ($lines as $line) {
        echo $line . "<br>";
    }

    if (file_put_contents($second_file, $data)) {
        $contents = file_get_contents($second_file);
        echo $contents;
    } else {
        echo '<script>showAlert("Failed to append data to file.");</script>';
    }
} else {
    echo '<script>showAlert("File not found.");</script>';
}
?>
</body>
</html>