<?php

function connectToDB() {
//    do wpisania parametry host user password
    $connection = new mysqli('h', 'u', 'p', 'formMP3');
    if ($connection->connect_error) {
        die("Nie nawiązano połączenia: " . $connection->connect_error);
    }
    return $connection;
}

function displayAudio($path) {
    echo '<audio controls>';
    echo "<source src='$path' type='audio/mpeg'>";
    echo '</audio>';
    
    $connection = connectToDB();
    $connection->close();
}

function addSongToDB($title, $author, $album, $path) {
    $connection = connectToDB();
    $sql = "INSERT INTO mp3(title, author, album, path) VALUES ('$title','$author', '$album', '$path')";

    $result = $connection->query($sql);
    if ($result != false) {
        echo 'Zapisano piosenkę.<br>';
        displayAudio($path);
    } else {
        echo 'Błąd przy zapisie piosenki w bazie danych.';
    }
    $connection->close();
}

if (isset($_POST['submit']) && $_POST['submit'] == 'wyślij mp3') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $album = $_POST['album'];
    $pathToDir = __DIR__ . '/../songs/' . basename($_FILES['song']['name']);
    $path = 'songs/' . basename($_FILES['song']['name']);
    if (move_uploaded_file($_FILES['song']['tmp_name'], $pathToDir)) {
        addSongToDB($title, $author, $album, $path);
    } else {
        echo 'Błąd przy zapisywaniu piosenki.';
    }
}




    