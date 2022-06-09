<?php

require("./menu_data.php");
require("./render_menu.php");

$html = file_get_contents("./index.html");

$menu_html = render_menu(GUEST_MENU);

$html = str_replace("<!--#menu-->", $menu_html, $html);

echo $html;

$link = mysqli_connect("localhost", "root", "");

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    $sql = 'INSERT INTO cities SET name = "Moscow"';
    $result = mysqli_query($link, $sql);

    if ($result == false) {
        print("Произошла ошибка при выполнении запроса");
    }
    else {
        $city_id = mysqli_insert_id($link);

        $sql = 'INSERT INTO weather_log SET city_id = ' . $city_id . ', day = "2017-09-03", temperature = 10, cloud = 1';

        $result = mysqli_query($link, $sql);

        if ($result == false) {
            print("Произошла ошибка при выполнении запроса");
        }
    }
}
$link = mysqli_connect("localhost", "root", "");

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
}