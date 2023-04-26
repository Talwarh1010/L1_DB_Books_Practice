<!DOCTYPE HTML>

<html lang="en">
<?php
session_start();
include("functions.php");
include('config.php');

$dbconnect = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (mysqli_connect_error()) {
    echo "Connection failed:" . mysqli_connect_error();
    exit;
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Book Review Database">
    <meta name="keywords" content="books, reading,fiction,non-fiction,genre,reviews">
    <meta name="author" content="Harveer Talwar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Website Title goes here</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="book_style.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="box banner">
            
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Logo - Click here to go to the Home Page">
            <img src="images/books_second.jpeg"class="img-circle" width="200" height="150" alt="Books"/>
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>Orchid Reading</h1>
        </div>    <!-- / banner -->

        <!-- Navigation goes here.  Edit BOTH the file name and the link name -->
        <div class="box side">
        <h2>Search | <a class="side" href="show_all.php">Show All</a></h2>
            <i> Type part of title / author name if desired</i>

            <hr />
            Title search<br />
            Author search<br />
            Genre search<br />
            Rating search

        </div>    <!-- / nav -->       