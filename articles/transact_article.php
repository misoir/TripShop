<?php

    include('path_articles.php');

    require_once DIR_MAIN.'paths.php';
            //echo "jestem na miejscu11";
if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'addArticle':
            $error = '';
            if(empty($_POST['title']))
            {
                $error .= "bral podanego tytułu!<br>";
            }
            if(empty($_POST['image']))
            {
                $error .= "nie podano ścieżki obrazka!<br>";
            }
            if(empty($_POST['content']))
            {
                $error .= "nie wprowadzono tekstu!<br>";
            }
            echo $error;
            if(empty($error))
            {
                echo date('Y-m-d');
                require DIR_DB_CONNECTION_PHP;
                $query = "INSERT INTO `tripboard`.`articles` (`date`, `title`, `url`) VALUES ('" . date('Y-m-d') . "', '" .  $_POST['title'] . "', '2003\08\drugiArtykul.xml')";
//                $query = "INSERT INTO `tripboard`.`articles` (`date`, `title`, `url`) VALUES ('2013-08-02', 'Szok! Kolejny artykul!', '2003\\08\\drugiArtykul.xml')";

                echo "<br>".$query;
//                echo "<br>".$query1;
                $answer  = mysql_query($query);
//                echo $answer;
                
            }
            print_r($_POST);
    }
}

?>
