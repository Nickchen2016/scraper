<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>PHP to MySQL</title>
</head>
<body>

<?php
    $stringOne = 'lookin turts on ';
    $stringTwo = 'https://www.youtube.com/watch?v=U2EliFC9NrQ&t=14s';
    //echo $stringOne.$stringTwo;
    //echo "$stringOne $stringTwo \"waaa\""; //double quote will concatenate two var together
    //echo $stringOne[0];
    //echo strlen($stringTwo);
    // echo strtoupper($stringOne);
    echo preg_replace('/l/','zz',$stringOne); //use regex to relpace part of str
?>
</body>
</html>