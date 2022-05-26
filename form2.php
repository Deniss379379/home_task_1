<html>

<head>
  <title>YLAB</title>
</head>

<body>
  <div>
    <h2> Шук Денис. Домашнее задание 1. Задача 4.</h2>
  </div>
  <form method="POST" action="">
    <input name="firstname" type="text" placeholder="Имя" />
    <input name="lastname" type="text" placeholder="Фамилия" />
    <input type="submit" value="Отправить" />
  </form>
  </div>
</body>

</html>

<?php

if (isset($_POST['firstname']) && isset($_POST['lastname'])) {

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];

  //переменные для доступа к базе данных
  $db_host = "localhost";
  $db_user = "name";
  $db_password = "qwerty123";
  $db_base = "ylab";
  $db_table = "ylab";

  try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("set names utf8");
    $data = array('firstname' => $firstname, 'lastname' => $lastname);
    $query = $db->prepare("INSERT INTO $db_table (firstname, lastname) VALUES ('$firstname', '$lastname')");

    $query->execute($data);
    $result = true;
  } catch (PDOException $e) {
    print "Ошибка!: " . $e->getMessage() . "<br/>";
  }

  if ($result) {
    echo "Информация занесена в базу успешно";
  }
}

?>