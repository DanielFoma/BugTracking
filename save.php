<?php
session_start();
include 'connect.php';
$st = $dbh->prepare("INSERT INTO projects(name,creator) VALUES (:name, :creator);");
$st->bindParam(':name', $_POST['name']);
$st->bindParam(':creator', $_SESSION['user']->name);
$res = $st->execute();
header('Location: /projects.php');
