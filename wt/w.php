<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php
    
$i = $_GET['n'];
$unselected = isset($_GET['unselected']) ? 'true' : 'false';

$c = [
    'FF5040',
    'FF8F38',
    'FFD32F',
    'D9EC4D',
    '7DE633',
    '2FE137',
    '2CE48D',
    '2AE5C8',
    '23CFFF',
    '3987FE',
    '3F39F7', 
    '8A3DFF',
    'E356FE',
    'FC54DC', 
    'DD4D74'
];

$path = 'c.php?n=' . $c[$i - 1] . '&unselected=' . $unselected;
echo $path;
    
    ?>" >
    <title>﻿</title>
    <style>
        body {
            background-color: #<?php echo $c[$i - 1] ?>;
            overflow: none;
        }
        div {
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            margin: 0;
            padding: 0;
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(255, 255, 255, 0));
        }
    </style>
</head>
<body>
    <div></div>
</body>
</html>