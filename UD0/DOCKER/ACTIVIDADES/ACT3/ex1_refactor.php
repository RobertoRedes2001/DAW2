<?php

class Employee
{
    const LEAVES_ALLOWED = 27;

    private $empId;
    private $name;
    private $monthlySalary;
    private $manager;
    private $leavesTaken;
    private $leavesLeftPreviously;

    public function __construct($empId, $monthlySalary, $manager, $name, $leavesTaken, $leavesLeftPreviously)
    {
        $this->empId = $empId;
        $this->name = $name;
        $this->monthlySalary = $monthlySalary;
        $this->manager = $manager;
        $this->leavesTaken = $leavesTaken;
        $this->leavesLeftPreviously = $leavesLeftPreviously;
    }

    private function calculateLeavesLeftPreviously()
    {
        $years = min(3, $this->yearsInOrg);
        $leavesLeftPreviously = 0;
        for ($i = 0; $i < $years; $i++) {
            $leavesLeftPreviously += $this->leavesLeftPreviously[$this->yearsInOrg - $i - 1];
        }
        return $leavesLeftPreviously;
    }

    private function formatManager()
    {
        return $this->manager ?? "None";
    }

    public function toHtml()
    {
        $this->yearsInOrg = count($this->leavesLeftPreviously);

        $html = "<div>" .
            "<h1>Employee Info</h1>" .
            "<div id='emp{$this->empId}'>" .
            "<span>{$this->name}</span>" .
            "<div class='left'>" .
            "<span>Leaves Left :</span>" .
            "<span>Annual salary:</span>" .
            "<span>Manager:</span>" .
            "<span>Reimbursable leaves:</span>" .
            "</div>";

        $html .= "<div class='right'><span>" . (self::LEAVES_ALLOWED - $this->leavesTaken) . "</span>";
        $html .= "<span>" . round($this->monthlySalary * 12) . "</span>";
        $html .= "<span>" . $this->formatManager() . "</span>";
        $html .= "<span>" . $this->calculateLeavesLeftPreviously() . "</span>";

        return $html . "</div> </div>";
    }
}

// Crear un objeto Employee después de la refactorización
$leavesLeftPreviously = [10, 8, 12]; // Días de vacaciones acumulados en años anteriores
$employee = new Employee(123, 5000, "John Manager", "Alice", 5, $leavesLeftPreviously);

// Imprimir la representación HTML
echo  $employee->toHtml();

?>
