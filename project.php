<?php
session_start();
if (!isset($_SESSION['user'])) {
  header('Location: /index.php');
}

include 'hed.php';
?>

    <title></title>
  </head>
  <body>
    <h1>Проект</h1>
    <a href="exit.php">Exit</a>

    <?php include 'connect.php';
    $id=$_GET['id'];
    $st = $dbh->prepare("SELECT * FROM projects WHERE id=$id;");
    $st->execute();

while($project = $st->fetchObject()): ?>
            <p>id: <?= $project->id ?></p>
            <p>name: <?= $project->name ?> </p>
            <p>creator: <?= $project->creator ?> </p>
  <?php endwhile ?>
  </body>
</html>
