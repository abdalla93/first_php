<?php

//connect to database
$conn = mysqli_connect('localhost', 'abdallah', '', 'pizza');

if (!$conn) {
    echo 'Connection error:' . mysqli_connect_error();

}
