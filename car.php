<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>      
    
    <?php
        // This is OOP style car design in PHP
	// base class Car
    class Car {
    // use all variables to protected in order to use variables in inheritance calss
        protected $maker;
        protected $model;
        protected $year;
        protected $door;

        // constructor with make, model, year, type.
        function __construct($incMaker, $incModel, $incYear, $incDoor){
            $this->maker = $incMaker;
            $this->model = $incModel;
            $this->year = $incYear;
            $this->door = $incDoor;
        }  
        
	    // getter & setter
        function getMaker(){            
            return $this->maker;                
        }
		
	    function getModel(){
	        return $this->model;
	    }

	    function getYear(){
  	    	return $this->year;
	    }
		
	    function getDoor(){
	    	return $this->door;
	    }
            
        function setMaker($incMaker){
            $this->maker = $incMaker;                
        }

	    function setModel($incModel){
		$this->model = $incModel;
	    }

	    function setYear($incYear){
	    	$this->year = $incYear;
	    }

	    function setDoor($incDoor){
		$this->door = $incDoor;
	    }

        // functions to display all information
        function showInfo(){
            echo "Display car information <br />\r\n";
            echo "&nbsp Maker: " . $this->getMaker(). "<br />\r\n";
            echo "&nbsp Year: " . $this->getYear(). "<br />\r\n";
            echo "&nbsp Model: " . $this->getModel(). "<br />\r\n";
			echo "&nbsp Doors: " . $this->getDoor(). "<br />\r\n";
            }            
    }
         
	// derived class called elecCar to create electric car
	class eCar extends Car{
	    protected $type;
	   
    	function __construct($incMaker, $incModel, $incYear, $incDoor, $incType){
	    	parent::__construct($incMaker, $incModel, $incYear, $incDoor);
			$this->type = $incType;
	    }

	    function getType(){
	    	return $this->type;
	    }
	
	    function setType($incType){
		$this->type = $incType;
	    }
	}
    ?>
    </body>
</html>
