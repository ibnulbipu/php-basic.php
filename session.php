<?php
session_start();
$_SESSION['user id']=42;

echo $_SESSION['user id'];