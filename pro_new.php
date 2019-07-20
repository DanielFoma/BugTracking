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
      <div class="page_block">
          <h1>Новый проект</h1>
          <a href="exit.php">Exit</a>
          <form action="save.php" method="post" name="registerform">
            <p>  <input name="name" type="text" class="text"  value="" placeholder="Name" required="true" />  </p>
            <p>  <input name="register" type="submit" class="ss" value="Create">  </p>
          </form>
      </div>

  </body>
</html>
