<?php include('header.php'); ?>

    <form action="tryLog.php" method="post" >
        <!--<input type="hidden" name="redirect" value="<?php // echo $_GET['redirect']; ?>">-->
	Użytkownik:<br>
	<input type="text" name="username"><br>
	Hasło:<br>
        <input type="password" name="password"><br><br>
	<input type="submit" name="submit" value="Zaloguj">
        <!--logForm += "<button class=\"btn\" onclick=\"tryLog.php\">Zaloguj</button>";-->
    </form>;
        
<?php include('footer.php'); ?>