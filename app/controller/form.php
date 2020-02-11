<?php

function insert_user_form($conn)
{
    print "<form method='post'><input type='text' name='name' placeholder='Name'><input type='email' name='email' placeholder='Email'><input type='password' name='password' placeholder='Password'><button type='submit' name='sent'>Siusti</button></form>";

    if (isset($_POST['sent'])) {
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $psw = $_POST['password'];
            $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES (\"$name\", \"$email\", \"$psw\")";
            print 'duomenys irasyti';
            return $conn->query($sql);
            print 'Tavo vardas yra:' . $_POST['name'] . '<br> Tavo el.pastas yra:' . $_POST['email'] . "<br> Tavo slaptazodis yra:" . $_POST['password'];
        } else {
            print "Klaidingai ivesti duomenys";
        }
    }
}

function edit_user_form($conn)
{
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }

    $userId = '';
    $userName = '';
    $userEmail = '';
    $userPassword = '';
    if (isset($_POST['getUserData'])) {
        if (!empty($_POST['id'])) {
            $sql = "SELECT `id`, `name`, `email`, `password` FROM `users` WHERE `id` = \"$id\"";
            $userArray = get($conn, $sql);

            $userId = $userArray[0]['id'];

            $userName = $userArray[0]['name'];
            $userEmail = $userArray[0]['email'];
            $userPassword = $userArray[0]['password'];
        } else {
            print "Klaidingai ivesti duomenys";
        }
    }

    print "<form method='post'><input type='text' name='id' value='$userId' placeholder='User ID'><input type='text' name='name' value='$userName' placeholder='Name'><input type='email' name='email' value='$userEmail' placeholder='Email'><input type='password' name='password' value='$userPassword' placeholder='Password'><button type='submit' name='sentUserData'>Siusti</button><button type='submit' name='getUserData'>Get User Data</button></form>";

    if (isset($_POST['sentUserData'])) {
        if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $userId = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $psw = $_POST['password'];
            $sql = "UPDATE `users` SET `name`= \"$name\",`email`=\"$email\",`password`=\"$psw\" WHERE `id` = \"$userId\"";
            print 'duomenys atnaujinti';
            return $conn->query($sql);
        } else {
            print "Klaidingai ivesti duomenys";
        }
    }
}