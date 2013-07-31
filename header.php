<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php header('Content-Type: text/html; charset=utf-8'); ?>

<!DOCTYPE html>

<?php
    session_start();
?>
<html>
    <head>
        <title>Probna strona</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <script src="css/bootstrap.css"></script>
        <script src="css/tripshop.css"></script>
        <script src="js/tripshop.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/tripshop.css">
        
    </head> 
    
    <body style="background-color: #cccc99">
        <div id="main">
            <div class="header mainSize" id="header"></div>
            <div><a href="index.php" style="text-decoration: none" class="header_font">TripHouse</a></div>
            
            
            <div class="mainSize" id="navigationMenu">
                <ul class="topNav">
                    <li><a href="mainPage.php" id="MainPageButton">Główna</a></li>
                    <li><a href="#">Co nowego?</a></li>
                    <li><a href="#" id="ContactButton">Eventy</a></li>
                    <li><a href="aboutUs.php" id="AboutButton">O nas</a></li>
                </ul>
                <ul class="topPur">
                    <?
                    if(isset($_SESSION['logged']) && $_SESSION['logged']==1)
                    {
                        echo "<li><a href=\"#\">Dodaj artykuł</a></li>";
                        echo "<li><a href=\"#\">". $_SESSION['user'] ."</a></li>";
                        echo "<li><a href=\"logOut.php\">Wyloguj</a></li>";
                    }
                    else
                    {
                        echo "<li><a href=\"log_form.php\" id=\"loginButton\">Zaloguj</a></li>";
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
                    <div class="span8" id="content">
                        