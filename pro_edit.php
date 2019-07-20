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
    while($project = $st->fetchObject()):?>
      <p>id: <?= $project->id ?> </p>
      <form action="edit.php?id= <?= $id ?> " method="post" name="registerform">
      <p>name: <input name="name" type="text" class="big_text"  value="" placeholder=" <?= $project->name ?>" required="true" /><input name="register" type="submit" class="cnopkamini" value="Create">  </p>
      </form>
      <p>creater: <?= $project->creator ?> </p>
      <p>tickets:</p>
    <?php endwhile ?>
  </body>
</html>
