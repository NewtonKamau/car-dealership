<?php
	class Car
	{
		public $make_model;
		public $price;
		public $miles;
		public $image_path;

	}

	$porsche = new Car();
	$porsche->make_model = "2014 Porsche 911";
	$porsche->price = 60000;
	$porsche->miles = 7829;
	$porsche->image_path = "img/porsche.jpg";

	$ford = new Car();
	$ford->make_model = "2011 Ford Ranger";
	$ford->price = 55637;
	$ford->miles = 12465;
	$ford->image_path = "img/ford.jpg";


	$lexus = new Car();
	$lexus->make_model = "2013 Lexus RX 350";
	$lexus->price = 44700;
	$lexus->miles = 20000;
	$lexus->image_path = "img/lexus.jpg";

	$mercedes = new Car();
	$mercedes->make_model = "Mercedes Benz CLS550";
	$mercedes->price = 39900;
	$mercedes->miles = 37979;
	$mercedes->image_path = "img/benz.jpg";


	 // an array to display all the cars

	$cars  = array($porsche, $ford, $lexus, $mercedes);

	// methof to sort out cars according to the user input
		$cars_matching_search = array();
			foreach ($cars as $car) {
				if ($car->price < $_GET["price"]) {
					array_push($cars_matching_search, $car);
	
				}
				
			}

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Your car Dealership's Homepage</title>
	</head>
	<body>
		<h1>Your car dealership</h1>
			<ul>
				<?php
					  foreach ($cars_matching_search as $car) {
                echo "<li> $car->make_model </li>";
                echo "<ul>";
                echo "<li><img src='$car->image_path'></li>";
                    echo "<li> $$car->price </li>";
                    echo "<li> Miles: $car->miles </li>";
                echo "</ul>";
            }
				?>
			</ul>
	</body>
	</html>
