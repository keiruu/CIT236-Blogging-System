<?php

$conn = mysqli_connect('localhost', 'root', '', 'bloggingsystem');

if (!$conn){
	die("Connection failed: " .mysqli_connect_error());
}