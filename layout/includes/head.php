<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Simple Task Manager</title>
    <meta charset="UTF-8">
    <!-- TODO: Add external stylesheets and other dependencies here -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>

<body>
<div class="container">
    <div class="row">
        <?php include('layout/includes/navigation.php'); ?>