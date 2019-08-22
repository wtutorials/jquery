<?php


$username = $_GET['username'];

$password = $_GET['password'];

$userData = array(
  'username' => $username,
  'password' => $password
);

echo json_encode($userData);