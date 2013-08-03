<?php
session_start();
?>
<?php 
    header('Content-Type: text/html; charset=utf-8');
    //define(MAIN_DIR, 'localhost\Tripshop_reorg');
?>

<!DOCTYPE html>


<html>
    <head>
        <title>TripBoard</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php
            //STYLE
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"".DIR_MAIN."css/bootstrap.css\">";
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"".DIR_MAIN."css/tripshop.css\">";
//            echo "<script src=\"".DIR_MAIN."css/tripshop.css\"></script>";
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"".DIR_MAIN."css/articles.css\">";
            
            //SKTYPTY JAVASCRIPT
            echo "<script src=\"".DIR_MAIN."js/tripshop.js\"></script>";
//            echo "<link rel=\"stylesheet\" href=\"".DIR_MAIN."css/bootstrap.css\">";
        ?>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        
    </head> 
    
    <body style="background-color: #cccc99">
        <div id="main">
            <div class="header mainSize" id="header"></div>
            <div><a <?php echo "href=\"".DIR_MAIN."index.php\"" ?> style="text-decoration: none" class="header_font">TripBoard</a></div>
            
            
            <div class="mainSize" id="navigationMenu">
                <ul class="topNav">
                    <li><a <?php echo "href=\"".DIR_MENUBAR."mainPage.php\"" ?> id="MainPageButton">Główna</a></li>
                    <li><a <?php echo "href=\"".DIR_NEWS_PHP."\"" ?> id="newsButton">Co nowego?</a></li>
                    <li><a href="#" id="ContactButton">Eventy</a></li>
                    <li><a <?php echo "href=\"".DIR_MENUBAR."aboutUs.php\"" ?> id="AboutButton">O nas</a></li>
                </ul>
                <ul class="topPur">
                    <?
                    if(isset($_SESSION['logged']) && $_SESSION['logged']==1)
                    {
                        echo "<li><a href=\"#\">Dodaj artykuł</a></li>";
                        echo "<li><a href=\"#\">". $_SESSION['user'] ."</a></li>";
                        echo "<li><a href=\"".DIR_USERS."logOut.php\">Wyloguj</a></li>";
                    }
                    else
                    {
                        echo "<li><a href=\"".DIR_USERS."log_form.php\" id=\"loginButton\">Zaloguj</a></li>";
                    }
                    ?>
                </ul>
            </div>

            <div class="mainSize" id="page">
                <div class="row">
                    <div class="span2" id="leftMenu">
                        <ul class="nav nav-list">
                            <li class="nav-header">Kategorie</li>
                            <li><a href="#">Miotły</a></li>
                            <li><a href="#">Bakterie</a></li>
                            <li><a href="#">Grzyby</a></li>
                            <li><a href="#">Rowery</a></li>
                            
                            <li class="nav-header">Najlepsze produkty</li>
                            <li><a href="#">Grzybica stóp</a></li>
                            <li><a href="#">Łoże fakira</a></li>
                          </ul>
                    </div>
                    <div class="span10" id="content">
                        