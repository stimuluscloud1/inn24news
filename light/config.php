<?php
class Config
{
    function myConfig()
    {
        $servername = "localhost";
        $username = "demo_inn24ne";
        $password = "software1234";
        $db = "demo_inn24ne";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $db);
        return $conn;

    }
}
?>