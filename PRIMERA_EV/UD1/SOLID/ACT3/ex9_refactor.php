<?php

//La clase muestra los detalles del empleado, y calcula el sueldo en base a esta
class EmployeeDetails  
{  
    private $hoursWorked;  
    private $hourlyRate; 

    public function getHoursWorked() {
        return $this->hoursWorked;
    }
    public function getHourlyRate() {
        return $this->hourlyRate;
    }

    function __construct($hoursWorked,$hourlyRate)
    {
        $this->hoursWorked = $hoursWorked;
        $this->hourlyRate = $hourlyRate;
    }

    public function CalculateSalary(){
        return $this->getHoursWorked() * $this->getHourlyRate();  
    }

}  