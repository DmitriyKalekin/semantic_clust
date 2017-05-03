<?php
set_time_limit(0);

function getRecs()
{
    global $mysqli;

    $data = array();

    if ($result = $mysqli->query("SELECT * FROM clust_lexems_2 WHERE ids_cls LIKE '%;%';")) {
        printf("Select вернул %d строк.\n", $result->num_rows);

        $data = $result->fetch_all(MYSQLI_ASSOC);

        $result->close();
    }

    return $data;
}


$mysqli = new mysqli("localhost", "root", "123123", "opencorpora");

/* проверка соединения */
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}



$mysqli->set_charset("utf8");





?>