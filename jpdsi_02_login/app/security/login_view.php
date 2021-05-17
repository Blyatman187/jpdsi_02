<!DOCTYPE HTML>
<html xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/security/login.php" method="post" class="pure-form pure-form-stacked">
	<legend>Logowanie</legend>
	<fieldset>
		<label for="id_x">Login</label><br>
		<input id="id_x" type="text" name="login" value="<?php out($form['login']) ?>"/><br/>
		<label for="id_y">Password</label><br>
		<input id="id_y" type="text" name="password"/><br/>
	</fieldset>
	<input type="submit" value="Login" class="pure-button pure-button-primary"/>
</form>


<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ul style="margin: 20px; list-style: none; position: absolute; top: 37%; left: 48%; transform: translateX(-50%); padding: 10px 10px 10px 30px; border-radius: 50px;  background-color: black; color: red; width:250px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<ul style="border-bottom: 1px solid red">'.$msg.'</ul>';
		}
		echo '</ul>';
	}
}
?>



</body>
</html>