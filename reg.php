<?php

if (!isset($_POST["register"])) {
  die();
}

include 'connect.php';

$st = $dbh->prepare("SELECT * FROM users WHERE email = :email;");
$st->bindParam(':email', $_POST['email']);
$st->execute();

if($st->fetchObject()) {
  echo "Этот email занятый. Попробуйте другой!";
  die();
}

if($_POST['password_2'] !=$_POST['password']){
  echo "Повторный пароль введен не верно!";
  die();
}

$pass=password_hash($_POST['password'], PASSWORD_BCRYPT);
$st = $dbh->prepare("INSERT INTO users(name,surname,email,password) VALUES (:name, :surname, :email, :password);");
$st->bindParam(':name', $_POST['name']);
$st->bindParam(':surname', $_POST['surname']);
$st->bindParam(':email', $_POST['email']);
$st->bindParam(':password', $pass);
$res = $st->execute();


if($res){
    session_start();
    $st = $dbh->prepare("SELECT * FROM users WHERE email = :email;");
    $st->bindParam(':email', $_POST['email']);
    $st->execute();
    $user = $st->fetchObject();
    $_SESSION['user'] = $user;
    header('Location: /projects.php');
}
else {
    echo "Не удалось добавить информацию";
    var_dump($st->errorInfo());
}

 ?>
