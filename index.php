<?php include 'hed.php'; ?>
    <title>
    </title>
  </head>
  <body>
      <div class="cont">
          <a class="login" href="index.php">Регистрация </a> <a class="login" href="login.php"> Войти </a>
          <form action="reg.php" method="post" name="registerform">
            <p>  <input name="name" type="text" class="text" value="" placeholder="Имя" required="true" />  </p>
            <p>  <input name="surname" type="text"  class="text"  value="" placeholder="Фамилия" required="true" />  </p>
            <p>  <input name="email" type="email"  class="text"  value="" placeholder="Емейл" required="true" />  </p>
            <p>  <input name="password" type="password"   class="text"  value="" placeholder="Пароль" required="true" />  </p>
            <p>  <input name="password_2" type="password"   class="text"  value="" placeholder="Повторите пароль" required="true" />  </p>
            <p>  <input name="register" class="sub" type="submit" value="Зарегистрироваться"/>  </p>
          </form>
      </div>
  </body>
</html>
