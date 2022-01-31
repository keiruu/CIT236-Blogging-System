<?php

$conn = mysqli_connect('localhost', 'root', '', 'comment');

if (!$conn){
	die("Connection failed: " .mysqli_connect_error());
}