<?php
    include('paths_users.php');
    include(DIR_MAIN.'header.php');
	session_start();
	$_SESSION['logged']=0;
	$_SESSION['user'] = 0;
        session_destroy();
        
        
	header ("Refresh: 3; URL=".DIR_MENUBAR."mainPage.php");
        echo "Zostałeś wylogowany";
	
     include(DIR_MAIN.'footer.php');
?>