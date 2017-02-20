<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>      
    
    <?php
	/* This file display and test class Car & eCar */
	// just in case for connecting database
	include 'connect.php';
	include 'car.php';	

        // create new car class
        $myCar = new Car("Honda", "Civic", "2004", "3");
        
	// test new Car class myCar
	echo "<b> Test OOP style in PHP </b> <br />\r\n";
        $myCar->showInfo();
        
	$myCar->setYear("1990");
	echo "Year of car changed to ->";
	echo "&nbsp Year: " . $myCar->getYear(). "<br />\r\n";

	$myCar->setModel("Accord");
	echo "Model changed to ->";
	echo "&nbsp Model: " . $myCar->getModel(). "<br />\r\n";

	$myCar->setDoor("4");
	echo "Door changed to ->";
	echo "&nbsp Door: " . $myCar->getDoor(). "<br />\r\n";

        echo "Entire information after set function used <br />\r\n";
        $myCar->showInfo();

	// test new eCar class jimCar
	$jimCar = new eCar("Tesla", "Model S", "2017", "4", "Electric");
	$jimCar->showInfo();

	// test to see if function setModel is working properly
	$jimCar->setModel("Model X");
	echo "Model changed to ->";
	echo "&nbsp Model: " . $jimCar->getModel(). "<br />\r\n";

	?>
    </body>
</html>
