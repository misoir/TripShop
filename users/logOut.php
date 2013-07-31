<?php
    include('paths_users.php');
    include('header.php');
	session_start();
	$_SESSION['logged']=0;
	$_SESSION['user'] = 0;
        session_destroy();
        
        
	header ("Refresh: 3; URL=mainPage.php");
        echo "Zostałeś wylogowany";
	
     include('footer.php');
?>