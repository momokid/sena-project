<?php

date_default_timezone_set('Europe/London');

#Database connection here....
($dbc = mysqli_connect('localhost', 'root', '', 'sena')) or
  die('Cannot Locate Server Port Number. Contact your system administrator');

$ajaxDate = date('Y-m-d');
$ajaxTime = date('Y-m-d H:i:s');