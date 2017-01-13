

<HTML>
<head>
	<title>Tha Adventure</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<div class="col-md-5 offset-md-3">
<h1>Da Quest For Weed</h1>
<?php
	//checking if we already have asked for a name and gotten a reply wia det $_GET parameter
	if ($_GET['player_name'] == NULL):
?>
<br>
<!--The form for asking after a name-->
<form action="index.php">
	<label>What tha fuck iz yo' name?</label><br>
	<input type="text" name="player_name">
	<input type="hidden" name="page" value="1">
	<input type="submit" value="send">
</form>

<?php
	elseif ($_GET['page'] == 1):
?>
<!--The form that asks where the player wants to go-->
<h2>Hello <? echo $_GET[player_name];?></h2>
<p>Yo ass is now standin up in tha middle of a gangbangin' forest.</p>
<form action="index.php">
	<br>
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
<!--The Results of where the player wants to go-->
<?php
	elseif ($_GET['page'] == 2):
?>
<br>
<h2>Oh you went ta tha westside</h2><br>
<p>i'm sorry ta rap but you fell tha fuck into tha handz of a mafia boss n' is now on yo' way ta tha slaughta house.</p><br>
<?php
	elseif ($_GET['page'] == 3):
?>
<br>
<h2>oh you went to tha northside</h2><br>
<p></p>
<?php
	elseif ($_GET['page'] == 4):
?>
<br>
<?php
	elseif ($_GET['page'] == 5):
?>
<br>
<?php endif?>
</div>
</html>