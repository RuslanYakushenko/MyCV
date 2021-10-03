<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

class Engine
{

}


class Car
{
    const MAX_SPEED = 300;

    //protected
    //private
    protected $color;

    private $speed = 0;

    private $model;

    private $marka;

    /**
     * Car constructor.
     */
    public function __construct(string $color, $model, $marka)
    {
        $this->color = $color;
        $this->model = $model;
        $this->marka = $marka;
    }

    public function render()
    {
        echo sprintf("%s(%s), %s", $this->model, $this->marka, $this->color);
    }

    public function start()
    {
        echo "Car start";
        $this->speed = 0;
    }

    public function move()
    {
        $this->speed = $this->speed + 20;

        $this->changeSpeed();
        $this->changeBenzin();

        echo "Move with speed: " . $this->speed;
    }

    private function changeBenzin()
    {

    }

    private function changeSpeed()
    {
        if ($this->speed > self::MAX_SPEED) {
            $this->stop();
        }
    }

    public function getSpeed()
    {
        echo "Speed: {$this->speed}";
    }

    public function setSpeed($speed)
    {
        if ($speed > self::MAX_SPEED) {
            throw new RuntimeException("MAX SPEED");
        }
        $this->speed = $speed;
    }

    public function stop()
    {
        $this->speed = 0;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}

class Bus extends Car
{
    public function changeColor()
    {
        $this->color = "GREEN";
    }

    public function move()
    {
        parent::move();

        $this->checkTickets();
    }

    private function checkTickets()
    {

    }
}

// $bus = new Bus("WHITE", "GAZEL", "VAZ");
// echo $bus->getColor();

// $bus2 = new Bus("BLACK", "GAZEL", "VAZ");
// echo $bus2->getColor();

// echo Bus::MAX_SPEED;


//$car = new Car("BLUE", "X5", "BMW");
//$car->move();


//$car->setSpeed(100);
//$car->getSpeed();
//
//$car->setSpeed(300);





//$car->render();

//echo $car->speed;
//$car->getSpeed();
//
//
//if ($_REQUEST['action'] == "go")
//{
//    $car->start();
//    $car->move();
//    $car->getSpeed();
//}
//
//if ($_REQUEST['action'] == "stop")
//{
//    $car->stop();
//    $car->getSpeed();
//}
?>
<?php
class Films
{
    public $id;
    public $name;
    public $rating;
    public $description;
    public $image_url;
    public $year;
    public $budget;


    public function __construct($id, $name, $rating, $description, $image_url, $year, $budget)
    {
        $this->id = $id;
        $this->name = $name;
        $this->rating = $rating;
        $this->description = $description;
        $this->image_url = $image_url;
        $this->year = $year;
        $this->budget = $budget;

        // echo "Films:" . $id. "</br>" . $name. "</br>" . $rating. "</br>" . $description. "</br>" . $image_url. "</br>" . $year. "</br>" . $budget. "</br>";
    }
    // set = изменяем свойства объекта
    public function setRating($rating)
    {
        $this->rating = $rating;

    }

    // get = Вывести свойства объекта
    public function getRating()
    {
        return $this->rating;
    }
    
	
}

$Films = new Films( "1","Железный человек","Рейтинг","Описание","Изображение","Год","Бюджет");

echo $Films->getRating() . "<br/>";

$Films->setRating("5");

echo $Films->getRating() . "<br/>";
?>


