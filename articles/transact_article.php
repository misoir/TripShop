<?php
    session_start();
    include('path_articles.php');
    header('charset=utf-8');
    require_once DIR_MAIN.'paths.php';
            echo "jestem na miejscu11";
    
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
//            echo $error;
            if(empty($error))
            {
                //TODO
                //
                //sprawdz czy istnieje plik o tej samej nazwie
                //
                //nazywanie pliku wg. id
                //
                
//                echo date('Y-m-d');
                require DIR_DB_CONNECTION_PHP;
//                $query = "INSERT INTO `tripboard`.`articles` (`date`, `title`, `url`) VALUES ('" . date('Y-m-d') . "', '" .  $_POST['title'] . "', '2003\08\drugiArtykul.xml')";
//                $query = "INSERT INTO `tripboard`.`articles` (`date`, `title`, `url`) VALUES ('2013-08-02', 'Szok! Kolejny artykul!', '2003\\08\\drugiArtykul.xml')";

//                echo "<br>".$query;
//                echo "<br>".$query1;
//                $answer  = mysql_query($query);
//                echo $answer;
                $file_name = str_replace(array("\n", "\n\r", "\r\n", "\r", "<br />", " "), "", $_POST['title']). ".xml";
                if(!is_dir(DIR_ARTICLES.date('Y')."/".date('m')))
                {
                    mkdir(DIR_ARTICLES.date('Y')."/".date('m'), '0700',true);
                };
                $url = date('Y') . "/" . date('m') . "/" . $file_name;
                
                $xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
                $xml .= "<article>\n"."\xA";
                    
                $xml .= "<title>" . $_POST['title'] . "</title>\n";
                $xml .= "<author>" . $_SESSION['user'] . "</author>\n";
                $xml .= "<date>\n";
                $xml .= "<year>" . date('Y') . "</year>\n";
                $xml .= "<month>" . date('m') . "</month>\n";
                $xml .= "<day>" . date('d') . "</day>\n";
                $xml .= "</date>\n";
                $xml .= "<image>";
                $xml .= $_POST['image'];
                $xml .= "</image>\n";
                $xml .= "<content>\n";
                
//                $content = ($_POST["content"]);
                $content = str_replace("\r\n", "\n&lt;/p&gt; &lt;p&gt;\n",$_POST["content"]);
                $content = "&lt;p&gt;\n" . $content . "\n&lt;p/&gt;";
                    echo $content;
                    
                $xml .= $content;
                $xml .= "\n</content>\n";
                $xml .= "<tags>";
                $xml .= "</tags>\n";
                $xml .= "<url>";
                $xml .= $url;
                $xml .= "</url>\n";
                $xml .= "</article>";
                file_put_contents($url, $xml);
            }
            else
            {
                require_once DIR_HTTP_PHP;
//                redirect(DIR_INDEX_PHP);
//                header("location:".DIR_ADDARTICLE_PHP);
            }
            print_r($_POST);
    }
}

?>
