<?php

class Car
{
    private $id;
    private $model;
    private $brand;

    public function getId()
    {
        return $this->id;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function __construct($id, $model, $brand)
    {
        $this->id = $id;
        $this->model = $model;
        $this->brand = $brand;
    }

}

class CarDatabase
{
    private $cars = [];

    public function __construct()
    {
        $this->cars = [
            new Car("1", "Golf III", "Volkswagen"),
            new Car("2", "Multipla", "Fiat"),
            new Car("3", "Megane", "Renault"),
        ];
    }

    public function getCarById($carId)
    {
        foreach ($this->cars as $car) {
            if ($car->getId() == $carId) {
                return $car;
            }
        }
        return null;
    }

    public function getAllCars()
    {
        return $this->cars;
    }
}

class CarFormatter
{
    public static function formatCars($cars)
    {
        $formattedCars = [];
        foreach ($cars as $car) {
            $formattedCars[] = $car->getBrand() . " " . $car->getModel();
        }
        return implode(", ", $formattedCars);
    }

    public static function getBestCar($cars)
    {
        $bestCar = null;
        foreach ($cars as $car) {
            if ($bestCar == null || $car->getModel() > $bestCar->getModel()) {
                $bestCar = $car;
            }
        }
        return $bestCar;
    }
}

// Crear una instancia de CarDatabase para gestionar la base de datos de automóviles
$carDatabase = new CarDatabase();

// Crear un objeto Car utilizando la base de datos
$carId = "2";
$car = $carDatabase->getCarById($carId);

if ($car !== null) {
    echo "Car found in the database:<br>";
    echo "ID: " . $car->getId() . "<br>";
    echo "Model: " . $car->getModel() . "<br>";
    echo "Brand: " . $car->getBrand() . "<br>";
} else {
    echo "Car not found in the database.<br>";
}

// Obtener todos los automóviles de la base de datos
$cars = $carDatabase->getAllCars();

// Llamada de prueba a CarFormatter para formatear la lista de automóviles
$formattedCars = CarFormatter::formatCars($cars);
echo "Car names in the database:<br>";
echo $formattedCars . "<br>";

// Llamada de prueba a CarFormatter para obtener el mejor automóvil
$bestCar = CarFormatter::getBestCar($cars);
if ($bestCar !== null) {
    echo "Best car in the database:<br>";
    echo "ID: " . $bestCar->getId() . "<br>";
    echo "Model: " . $bestCar->getModel() . "<br>";
    echo "Brand: " . $bestCar->getBrand() . "<br>";
} else {
    echo "No cars in the database.<br>";
}

?>