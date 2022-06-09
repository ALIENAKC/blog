<?php

require("./render_menu.php");
require("./menu_data.php");

function sign_up_render()
{
    $auth_pattern = file_get_contents("./auth_pattern.html");
    $auth_pattern = str_replace("<!--#auth_type-->", "Sign Up", $auth_pattern);
    $html = file_get_contents("./index.html");
    $html = str_replace("<!--#auth-->", $auth_pattern, $html);

    $menu_html = render_menu(GUEST_MENU);
    $html = str_replace("<!--#menu-->", $menu_html, $html);
    echo $html;
}

function sign_up()
{
    
}

if(isset($_POST["email"]) && isset($_POST["password"]))
    sign_up();
else
    sign_up_render();









