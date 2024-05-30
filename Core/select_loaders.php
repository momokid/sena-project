<?php
//start the session
session_start();

//Database connection
require "functions.php";

$a = mysqli_query($dbc, "SELECT * FROM classroom ORDER BY ClassroomName ASC");

if (mysqli_num_rows($a) == 0) {

    echo '<option selected>Classroom not created</option>';

} else {
    echo '<option id="" selected>Select Classroom</option>';
    while ($an = mysqli_fetch_assoc($a)) {
        echo ' <option id=' . $an['id'] . '> ' . $an['ClassroomName'] . ' </option> ';
    }

}
