<?php
session_start();
include 'connect.php';

if (isset($_POST['add'])) {
    
    $category = $_POST['category'];
    $request = $_POST['request'];
    $note = ${POST['note']};

    //make query
    $ins = "INSERT INTO submission (category, request, note) VALUE ('$category', '$request', '$note')";
    $query = mysqli_query($conn, $ins);

    if ($query) {
        header ('Location: home.php?status=success');
    } else {
        header ('Location: home.php?status=failed');
    }
} else {
    die("Submission Failed to Recorded");
}