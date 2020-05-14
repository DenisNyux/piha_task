<?php
    require 'vendor/autoload.php';
    use Carbon\Carbon;
    echo Carbon::now() -> format('j.m.Y h:i');