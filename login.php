<?php include 'hed.php'; ?>
    <title>
    </title>
  </head>
  <body>
      <div class="cont">
          <a class="login" href="index.php">Регистрация </a> <a class="login" href="login.php"> Войти </a>
          <form action="vhod.php" method="post" name="registerform">
            <p>  <input name="email" type="email"  class="text"  value="" placeholder="Емейл" required="true" />  </p>
            <p>  <input name="password" type="password"   class="text"  value="" placeholder="Пароль" required="true" />  </p>
            <p>  <input name="register" class="sub" type="submit" value="Войти"/>  </p>
          </form>
      </div>
  </body>
</html>
