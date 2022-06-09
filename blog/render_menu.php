<?php

function render_menu($menu)
{
    $menu_html = "";
    foreach($menu as $key=>$menu_btn)
    {
        $menu_html .= "<div class='menu_btn'>\n";
        $cur_sub_menu = "    $key\n";   // название пункта меню
        $cur_sub_menu .= "    <div class='sub_menu'>\n";
        foreach($menu_btn as $sub_menu_btn=>$sub_menu_href)
        {
            $cur_sub_menu .= "        <div class='sub_menu_btn'>\n";
            $cur_sub_menu .= "            <a href='$sub_menu_href'> $sub_menu_btn </a>\n";
            $cur_sub_menu .= "        </div>\n";
        }
        $cur_sub_menu .= "    </div>\n";
        $menu_html .= "$cur_sub_menu\n";
        $menu_html .= "</div>\n";
    }
    return $menu_html;
}


