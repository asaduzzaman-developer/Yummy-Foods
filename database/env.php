<?php
// session_start();

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "yummy_food");

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);