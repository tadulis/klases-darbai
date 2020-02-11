<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=testine", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


function get($conn, $sql)
{
    $stmt = $conn->query($sql);
    return $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

//delete_user($conn, 6);

function delete_user_form($conn)
{
    print "<form method='post'><input type='text' name='id'
 placeholder='user id'><button name='delete' type='submit'>Delete</button>
 </form>";

    if (isset($_POST['delete'])) {
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $sql = "DELETE FROM `users` WHERE `id` = $id";
            print "Useris istrintas ($id)";
            return $conn->query($sql);
        } else {
            print "Klaidingai ivesti duomenys";
        }
    }
}

?>