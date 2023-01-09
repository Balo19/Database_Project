<?php

// mysql console:
// 
// Zeige alle Datenbanken:
// mysql> show databases;
//
// Erstelle eine Datenbank "test_ef5":
// mysql> CREATE DATABASE test_ef5;

$servername = "localhost";
$user = "root";
$pw = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=test_ef5", $user, $pw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected!<br>";
} catch (PDOException $e) {
    echo "Connection failed. " . $e->getMessage();
}

$disableForeignKeys = 'SET foreign_key_checks = 0';
$dropTableGroup = 'DROP TABLE IF EXISTS ClGroup;';
$dropTableTeams = 'DROP TABLE IF EXISTS Teams;';
$dropTableGame = 'DROP TABLE IF EXISTS game';
$dropTableStadium = 'DROP TABLE IF EXISTS Stadium';
$enableForeignKeys = 'SET foreign_key_checks = 0';

try {
    $conn->exec($disableForeignKeys);
    $conn->exec($dropTableGroup);
    $conn->exec($dropTableTeams);
    $conn->exec($dropTableGame);
    $conn->exec($dropTableStadium);
    $conn->exec($enableForeignKeys);


    echo "Tabellen geloescht.<br>";
} catch (PDOException $e) {
    echo "drop Tables failed: " . $e->getMessage();
}

?>