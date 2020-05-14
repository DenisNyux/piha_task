<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
        require 'vendor/autoload.php';
        use Carbon\Carbon;
        echo '<h1>Nyukhalov Denis</h1>';
        $date = Carbon::now() -> format('j.m.Y h:i');
        echo '<h2>' . $date . '</h2>';
    ?>
    </div>
</body>
</html>