

<HTML>
<head>
	<title>Tha Adventure</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head><!--the begining of the visible things-->
	<body background="img/Forest.jpg">
	<audio loop autoplay>
		<source ><!--src="Sound/background.mp3" type="audio/mp3"-->
	</audio>
		<div class="col-md-4 offset-md-4 whitememezman rounded">
			<div class="text-center">
				<h1>An Awesome Quest</h1>
				<?php
					//checking if we already have asked for a name and gotten a reply wia det $_GET parameter
					if ($_GET['player_name'] == NULL):
				?>
				<br>
				<!--The form for asking after a name-->
					<form action="index.php">
						<label>What is your name name?</label><br>
						<input type="text" name="player_name">
						<input type="hidden" name="page" value="1">
						<input type="submit" value="Send">
					</form>

					<?php
						elseif ($_GET['page'] == 1):
					?>
				<!--The form that asks where the player wants to go-->
					<p>Hello <? echo $_GET[player_name];?></p>
					<p>You are now standing in the middle of a forest.</p>
					<form action="index.php">
						<br>
						<label>In what direction do you want to go?</label>
						<br>
						<input type="radio" name="page" value="2">
						<label for="west">To the West</label>
						<br>
						<input type="radio" name="page" value="3">
						<label for="north">To the North</label>
						<br>
						<input type="radio" name="page" value="4">
						<label for="east">To the East</label>
						<br>
						<input type="radio" name="page" value="5">
						<label for="south">To the South</label>
						<input type="hidden" name="player_name" value="<?=$_GET[player_name]?>">
						<br>
						<input type="submit" value="Send">
					</form>
					<!--The Results of where the player wants to go-->
					<?php
						elseif ($_GET['page'] == 2):
					?>
					<br>
					<h2>you went west</h2><br>
					<p>But you didn't notice a big hole in the ground and fell in and died of starvation</p>
					<form>
						<input type="hidden" name="page" value="1">
						<input type="submit" value="Fine">
					</form>
					<?php
						elseif ($_GET['page'] == 3):
					?>
					<br>
					<h2>You went to the north</h2><br>
					<p>You arrived at a river at the end of the forest so you decide to go back</p>
					<form action="index.php">
						<input type="hidden" name="page" value="1">
						<input type="submit" value="Fine">
					</form>
					<?php
						elseif ($_GET['page'] == 4):
					?>
					<h2>You went to the east</h2>
					<p>This trail seams to be never ending</p>
					<form action="index.php">
						<br>
						<label>What will you do?</label>
						<br>
						<input type="radio" name="box" value="1">
						<label for="box">Continue on the road and hope you reach the end soon</label>
						<br>
						<input type="radio" name="box" value="2">
						<label for="box1">Or go of the trail and try to find another trail</label>
						<input type="hidden" name="player_name" value="<?=$_GET[player_name]?>">
						<br>
						<input type="submit" value="Send">
					</form>
					<br>
					<?php 
						elseif ($_GET['page'] == 5):  
					?>
					<h2>You went to the south</h2>
					<p>and you stumbled upon a bear<br>
					the bear chased you and killed you.</p>
					<form>
						<input type="hidden" name="page" value="1">
						<input type="submit" value="Fine">
					</form>
					<!--elseifs about what box you choose and what form about what you want to do next-->
					<?php
						elseif ($_GET['box'] == 1):
					?>
					<h2>Finally the end</h2>
					<p>You finally arrived at the end of the trail. Now you are standing at a road</p>
					<form action="index.php">
						<br>
						<label>What will you do?</label>
						<br>
						<input type="radio" name="option" value="1">
						<label for="option1">try to stop a car and get lift</label>
						<br>
						<input type="radio" name="option" value="2">
						<label for="option2">try to go to the city by foot</label>
						<br>
						<input type="radio" name="option" value="3">
						<label for="option3">stay were you are and hope someone will stop</label>
						<input type="hidden" name="player_name" value="<?=$_GET[player_name]?>">
						<br>
						<input type="submit" value="Send">
					</form>
					<br>
					<?php 
						elseif ($_GET['box'] == 2):
					?>
					<h2>Oh it's a bear</h2>
					<p>no you got caught in a root and fell and the bear killed you</p>
					<form>
						<input type="hidden" name="page" value="1">
						<input type="submit" value="Fine">
					</form>
					<?php
						elseif ($_GET['option'] == 1):
					?>
					<h2>It's A car</h2>
					<p>sorry but you got runover</p>
					<form>
						<input type="hidden" name="page" value="1">
						<input type="submit" value="Fine">
					</form>
					<?php
						elseif ($_GET['option'] == 2):
					?>
					<h2>You go in the north direction of the road and hope for a city close by</h2>
					<p>But when you start to see a city you get runover by a drunk driver. <br>You Died </p>
					<form>
						<input type="hidden" name="page" value="1">
						<input type="submit" value="Fine">
					</form>
					<?php
						elseif ($_GET['option'] == 3):
					?>
					<h2>Nice you got to the city without dying</h2>
					<p>but sadly enough you didn't get a family and died forever alone</p>
					<h1>The End!</h1>
				<?php endif?>
			</div>	
		</div>
	</body>
</html>