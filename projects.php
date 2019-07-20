<?php
include 'hed.php';
session_start();
if (!isset($_SESSION['user'])) {
  header('Location: /index.php');
}

?>
    <title></title>
  </head>
  <body>

    <h1>Проекты</h1>
    <a href="exit.php">Exit</a>
    <a href="pro_new.php" class="ss">Новый проект</a>
    <table>
      <?php include 'connect.php';
      $st = $dbh->prepare("SELECT * FROM projects;");
      $st->execute(); ?>
         <tr>
          <td>id</td>
          <td>name</td>
          <td>creater</td>
          <td>action</td>
         </tr>
        <?php while($project = $st->fetchObject()): ?>
            <tr>
                <td><?= $project->id ?></td>
                <td><?= $project->name ?></td>
                <td><?= $project->creator ?></td>
                <td>
                    <a href="project.php?id=<?= $project->id ?>">Show</a>
                    <a href="pro_edit.php?id=<?= $project->id ?>">Edit</a>
                    <a href="delete.php?id=<?= $project->id ?>">Delete</a>
                </td>
            </tr>
        <?php endwhile ?>
    </table>
  </body>
</html>
