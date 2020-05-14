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
    <h1>Задание 2</h1>
    <input type="text">
    <h5></h5>
    <script>{
        document.querySelector('input')
        .addEventListener('input', e => {
        fetch('/rates.php?dollars=' + e.target.value)
        .then(x => x.text())
        .then(x => document.querySelector('h5').textContent = x)
        .catch(() => document.querySelector('h5').textContent = 'Error');
        });}
    </script>
</body>
</html>