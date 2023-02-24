<?php
$page = 'homepage';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Home page</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,600;1,700&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/014abb33b0.js" crossorigin="anonymous"></script>
    @vite(['resources/css/common.css', 'resources/js/common.js'])

</head>

<body>
    
    <div class="container">
        @include('layouts/header')

        <div class="box_container">
           @include('layouts/left')

           @include('layouts/center')

           @include('layouts/right')
        </div>

    </div>
</body>

</html>