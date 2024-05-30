<?php
//start the session
session_start();

//Database connection
include('Core/Database.php');

echo json_encode(['Welcome']);