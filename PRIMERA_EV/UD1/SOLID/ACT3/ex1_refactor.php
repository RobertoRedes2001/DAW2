<?php

//CASO: SRP
class Employee
{
    const LEAVES_ALLOWED = 27;

    private $empId;
    private $name;
    private $monthlySalary;
    private $manager;
    private $leavesTaken;
    private $yearsInOrg;
    private $leavesLeftPreviously;

    /**Generamos Getters para poder acceder a las propiedades del codigo
     * desde otras clases.
    */
    public function getEmpId(){
        return $this->empId;
    }

    public function getName(){
        return $this->name;
    }

    public function getMonthlySalary(){
        return $this->monthlySalary;
    }

    public function getManager(){
        return $this->manager;
    }

    public function getLeavesTaken(){
        return $this->leavesTaken;
    }

    public function getYearsInGoing(){
        return $this->yearsInOrg;
    }

    public function getLeavesLeft(){
        return self::LEAVES_ALLOWED -  $this->getLeavesTaken();
    }

    /**Calculamos los dias de vacaciones tomados anteriormente*/
    public function getLeavesLeftPreviously(){
        $years = min(3, $this->yearsInOrg);
        $leavesLeftPreviously = 0;
        for ($i = 0; $i < $years; $i++) {
            $leavesLeftPreviously += $this->leavesLeftPreviously[$this->yearsInOrg - $i - 1];
        }
        return $leavesLeftPreviously;
    }

    public function __construct($empId, $monthlySalary, $manager, $name, $leavesTaken, $yearsInOrg, $leavesLeftPreviously)
    {
        $this->empId = $empId;
        $this->name = $name;
        $this->monthlySalary = $monthlySalary;
        $this->manager = $manager;
        $this->leavesTaken = $leavesTaken;
        $this->yearsInOrg = $yearsInOrg;
        $this->leavesLeftPreviously = $leavesLeftPreviously;
    }

}

//Clase para mostrar la informacion de un objeto empleado
class EmployeeFormated{

    private Employee $emp;

    public function __construct($emp)
    {
        $this->emp = $emp;
    }

    private function formatManager()
    {
        return $this->emp->getManager() ?? "None";
    }

    /**Formateamos el codigo de la clase Empleado para mostrarlo
     * usando los Getters que creamos antes para acceder a la informacion
     */
    public function toHtml()
    {
        $html = "<div>" .
            "<h1>Employee Info</h1>" .
            "<div id='emp{$this->emp->getEmpId()}'>" .
            "<span>{$this->emp->getName()}</span>" .
            "<div class='left'>" .
            "<span>Leaves Left :</span>" .
            "<span>Annual salary:</span>" .
            "<span>Manager:</span>" .
            "<span>Reimbursable leaves:</span>" .
            "</div>";

        $html .= "<div class='right'><span>" .$this->emp->getLeavesLeft(). "</span>";
        $html .= "<span>" . round($this->emp->getMonthlySalary() * 12) . "</span>";
        $html .= "<span>" . $this->formatManager() . "</span>";
        $html .= "<span>" . $this->emp->getLeavesLeftPreviously() . "</span>";

        return $html . "</div> </div>";
    }

}

?>
