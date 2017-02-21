<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>      
    
    <?php
        /* Assumptions on MySQL data: 
    	1. Database name is mainbd.
    	2. DB has table name example.
    	3. table example has four columns id, username, fname, and lname.
    	ex) +------+------------+---------+---------+
    	    |  id  |  username  |  fname  |  lname  |
    	    +------+------------+---------+---------+
    	    |  12  |  seahawks  |  joon   |  jung   |
	    +------+------------+---------+---------+
	    |  99  |  fun206    |  alex   |  smith  |
	    +------+------------+---------+---------+
        */

	// connecting database and relevant php files
	include 'connect.php';
	include 'car.php';	
	include 'other.php';
	// new line for displaying
	$nl = "<br />\r\n";
 
	// example of getting data from Database and fetching it   
        $query = $dbConnect->prepare('SELECT * FROM example');
	$query->execute();
	$cur = $query->fetchAll();

	foreach($cur as $row) { 
            echo  "username is ". $row['username']. "\n";
	} 		

        // close connection to DB since it did not closed in connect.php
	$dbConnect = null;

	/* Testing car.php (OOP class) */	
	// create new car class
        $myCar = new Car("Honda", "Civic", "2004", "3");
        
	// testing new Car class myCar
	echo "<br />\r\n";
	echo "<b> Test OOP style in PHP </b>". $nl;
        $myCar->showInfo();
        
	$myCar->setYear("1990");
	echo "Year of car changed to ->";
	echo "&nbsp Year: ". $myCar->getYear(). $nl;

	$myCar->setModel("Accord");
	echo "Model changed to ->";
	echo "&nbsp Model: ". $myCar->getModel(). $nl;

	$myCar->setDoor("4");
	echo "Door changed to ->";
	echo "&nbsp Door: ". $myCar->getDoor(). $nl;

        echo "Entire information after set function used". $nl;
        $myCar->showInfo();

	// testing new eCar class jimCar
	$jimCar = new eCar("Tesla", "Model S", "2017", "4", "Electric");
	$jimCar->showInfo();

	$jimCar->setModel("Model X");
	echo "Model changed to ->";
	echo "&nbsp Model: ". $jimCar->getModel(). "<br />\r\n";
	echo "&nbsp Jim's car type: " . $jimCar->getType(). $nl;
	

	/* Testing from other.php files */
	echo "Fibonacci number test input is 10: result --> ";
	echo fibo(10);
	echo $nl;

	/* Testing bubble sort */
	
	$testArray = array(11, 22, 5, 2, 13, 7, 19);
	shuffle($testArray);
	echo "Array element (Before sorting): ";
	foreach($testArray as $cur)
		echo $cur. " ";
	

	echo $nl. "Array element (Before sorting): ";;
	
	$result = bubbleSort($testArray);
	foreach($result as $cur)
		echo $cur. " ";
    // end
    ?>
    </body>
</html>
