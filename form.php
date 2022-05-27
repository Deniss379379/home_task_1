<HTML>

<HEAD>
    <TITLE>YLAB</TITLE>
</HEAD>

<BODY>
    <div>
        <h2> Шук Денис. Домашнее задание 1. Задача 2.<h2>
    </div>
    <form method="GET" action="form.php">
        <input name="firstname" type="text" placeholder="Имя" />
        <input name="lastname" type="text" placeholder="Фамилия" />
        <input type="submit" value="Отправить" />
    </form>

    <?php
    echo "Привет " . $_GET['firstname'] . " " . $_GET['lastname'];
    ?>
</BODY>

</HTML>
