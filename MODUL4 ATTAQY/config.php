<?php

$conn = mysqli_connect("localhost", "root", "", "MODUL4", 3308);

if (!$conn) {
    echo "<script> alert('Failed to Connect into Database') </script>";

    die(mysqli_connect_error());
}