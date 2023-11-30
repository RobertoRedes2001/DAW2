<?php

use Teacher as GlobalTeacher;

class Person
{
    protected $teachingTopic;
    protected $learningTopic;

    public function learn()
    {
        echo "Recibo clases" ;
    }
}

class Student extends Person
{

}

class Teacher extends Person
{
    public function teach()
    {
        echo "Imparto clases";
    }
}

$student = new Student();
$student->learn();
echo "<br>";
$teacher = new Teacher();
$teacher->teach();

?>