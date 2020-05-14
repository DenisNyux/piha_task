<?php
    require 'vendor/autoload.php';
    use Carbon\Carbon;
    echo '<h1>Nyukhalov Denis</h1>';
    $date = Carbon::now() -> format('j.m.Y h:i');
    echo '<h2>' . $date . '</h2>';