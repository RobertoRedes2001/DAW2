<?php

/**Clase CAR que ofrece los datos de id, marca y modelo
 * con sus respectuivos getters
 */
//CASO: SRP
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

/**Clase CARDatabase que permite generar un array de coches para
 * poder utilizar los metodos. 
 */
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
}

/**Clase que cuenta con metodos para mostrar la 
 * informacion de uno o todos los coches.  
 * */
class CarManager
{
    public function getCarById($cars,$carId)
    {
        foreach ($cars as $car) {
            if ($car->getId() == $carId) {
                return $car;
            }
        }
        return null;
    }

    public function getAllCars($cars)
    {
        return $cars;
    }
}

class CarFormatter
{
    /**Muestra formateada la informacion de los coches */
    public static function formatCars($cars)
    {
        $formattedCars = [];
        foreach ($cars as $car) {
            $formattedCars[] = $car->getBrand() . " " . $car->getModel();
        }
        return implode(", ", $formattedCars);
    }

    /** Muestra la informacion del coche con el nombre más alto
     * en orden alfabetico (Z más alto, A más bajo)
    */
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