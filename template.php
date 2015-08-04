<?php require('functions.php'); ?>
<?php include('header.php'); ?>
<main>
	<h2>Main column</h2>
	<?php awesome_function(); ?>
	<br />
	<?php display_stuff('wowowowo'); ?>
	<pre>
<?php //array example
	$mySandwich = array(
				//key 	=> value
		'meat' 	=> 'bacon',
		'cheese' 	=> 'cheddar',

		'topping'	=> 'lettuce'
		);
			//add another item to the array
	$mySandwich['bread'] = 'challah';

			//show a specific key
	echo $mySandwich['meat'] . '<br>';
	echo $mySandwich['bread'] . '<br>';
			//show the complete contents of the array
	print_r($mySandwich);
	?>
	</pre>
	<h2>My Sandwich</h2>
	<ul>
	<?php
		//better looking array display	
	foreach($mySandwich as $item=>$value){
		echo '<li>';
		echo $item;
		echo ':';
		echo $value;
		echo '</li>';
	}	
	?>
	</ul>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	
</main>
<?php include('sidebar.php'); ?>
<?php include('footer.php'); ?>