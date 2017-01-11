


<h1>Äventyret</h>
<?php
	if ($_GET['player_name'] == NULL):
?>
<br>
<br>
<form action="index.php">
	<label>Vad heter du?</label>
	<input type="text" name="player_name">
	<input type="submit" value="skicka">
</form>

<?php
	else:
?>
<h2>Hej <? echo $_GET[player_name];?></h2>
<?php endif ?>