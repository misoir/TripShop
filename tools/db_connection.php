<?php
function db_connect()
{
    $mysql_host = "localhost"; 
    // user
    $mysql_user = "root"; 
    // hasło 
    $mysql_pass = '';
    // nazwa bazy 
    $mysql_db = "TripBoard"; 
    @mysql_connect($mysql_host, $mysql_user, $mysql_pass) 
    or die('Brak połączenia z serwerem MySQL.'); 
    // łączymy się z bazą danych 
    @mysql_select_db($mysql_db) 
    or die('Błąd wyboru bazy danych.');
}

function db_query($query, $answer){
    $answer = mysql_query($query);
}
 ?>