<?php
function vertical_headline($image, $title, $date, $author, $text, $id)
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
                            
?>