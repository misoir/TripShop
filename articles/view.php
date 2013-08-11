<?php
function horizontal_headline($image, $title, $date, $author, $text, $id)
{
    echo "<div class=\"headline\">";
        echo "<div  class=\"col-1-3 headlineImage\">";
            echo "<img class=\"absoluteCenter\" src=\"" . $image . "\">";
        echo "</div>";
        echo "<div  class=\"col-2-3 headlineDescr\">";
            echo "<div>";
                echo "<h2 style=\"margin-bottom:0;\">" . $title; 
            echo "</div>";
            echo "<div class=\"dateAuthor\" >";
                echo $date. " " . $author;
            echo "</div>";
            echo "<div style=\"padding-left: 5px; padding-right: 5px; margin-top:10px;\">";
                echo "<p>";
                    echo substr($text,0,strrpos(substr($text,0,400)," "))."...";
                echo "<a href=\"" . DIR_READ_PHP . "?url=" . $id . "\" >czytaj dalej</a>";
                echo "</p>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
}
function vertical_headline($image, $title, $text, $id)
{
    $vert = '';
    $vert .= "<div class=\"vert_head\">";
    $vert .= vertical_equip($image, $title, $text, $id);
    $vert .= "</div>";
    echo $vert;
}
function vertical_equip($image, $title, $text, $id)
{
    $content = '';
    $content .= "<div>";
    $content .= "<div class = \"vert_equip_image \"><img  src=\"" . DIR_IMG . $image . "\"></div>";
    $content .= "<div class=\"vert_equip_title\"><a href=\"" . DIR_EQUIP_SHOW_PHP . "?id=" . $id . "\" >" . $title . "</a></div>";
    $content .= "<div class=\"vert_equip_text\">" . substr($text,0,strrpos(substr($text,0,250)," "))."...</div>";
    $content .= "</div>";
    return $content;
}
?>