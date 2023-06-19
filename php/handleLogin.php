<?php
echo "<h1> LOGGED IN </h1>";
$sanitizedUsername = strip_tags($_POST["username"]);
$sanitizedPassword = strip_tags($_POST["password"]);

if ($sanitizedPassword === getUserDetails($sanitizedUsername)) {
    echo "<h1> Welcome " . $sanitizedUsername . "</h1>";
}

//TODO Fetch username and password from db for milestone 3
function getUserDetails($username): string
{
    return "password";
}
