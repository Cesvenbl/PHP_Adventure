


<h1>Da Quest For Weed</h>
<?php
	if ($_GET['player_name'] == NULL):
?>
<br>
<br>
<form action="index.php">
	<label>What tha fuck iz yo' name?</label>
	<input type="text" name="player_name">
	<input type="hidden" name="page" value="1">
	<input type="submit" value="send">
</form>

<?php
	elseif ($_GET['page'] == 1):
?>
<h2>Hello <? echo $_GET[player_name];?></h2>
<p>Yo ass is now standin up in tha middle of a gangbangin' forest.</p>
<form action="index.php">
	<label>In what direction do you go?</label>
	<br>
	<input type="radio" name="page" value="2">
	<label for="west">Go to tha Westside</label>
	<br>
	<input type="radio" name="page" value="3">
	<label for="north">Go to tha Northside</label>
	<br>
	<input type="radio" name="page" value="4">
	<label for="east">Go to tha Eastside</label>
	<br>
	<input type="radio" name="page" value="5">
	<label for="south">Go to tha Southside</label>
	<input type="hidden" name="player_name" value="<?=$_GET[player_name]?>">
	<br>
	<input type="submit" value="Send">
</form>
<?php
	elseif ($_GET['page'] == 2):
?>
<h2>Oh you went ta tha westside</h2>
<p>i'm sorry ta rap but you fell tha fuck into tha handz of a mafia boss n' is now on yo' way ta tha slaughta house.</p>
<?php
	elseif ($_GET['page'] == 3):
?>
<?php
	elseif ($_GET['page'] == 4):
?>
<?php
	elseif ($_GET['page'] == 5):
?>
<?php endif?>