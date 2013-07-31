<?php
    include('header.php');
	session_start();
	$_SESSION['logged']=0;
	$_SESSION['user'] = 0;
	if(isset($_POST['submit']))
	{
		if(($_POST['username'] == "Misoir" || $_POST['username'] == "Ożar") &&
			$_POST['password'] == "małżowinamałży" )
		{
			$_SESSION['logged'] = 1;
                        $_SESSION['user']=$_POST['username'];
			header ("Refresh: 3; URL=mainPage.php");
			echo "Witaj <b>". $_POST['username']."</b><br>";
                        echo "Zostaniesz przekierowany na sronę główną.";
		}
		else
		{
                    header ("Refresh: 3; URL=log_form.php");
                    echo "Niepoprawny login lub hasło";   
                }
        }
     include('footer.php');
?>