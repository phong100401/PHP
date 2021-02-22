<?php
class Employee
{
    private $man_no;
    private $name;
    protected $position;
    public function __construct($man_no,$name,$position)
    {
        $this->man_no = $man_no;
        $this->name = $name;
        $this->position = $position;
    }
    public function setManNo($man_no)
    {
        $this->man_no = $man_no;
    }
    public function getManNo()
    {
        return $this->man_no;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPosition($position)
    {
        $this->position = $position;
    }
    public function getPosition()
    {
        return $this->position;
    }
}
$employee = new Employee('123','Phong','ádasdasd');
$employee1 = new Employee('234','Bi','ádasdws');
$employee2 = new Employee('453','AVB','ádxxa');
echo "Man_no: " .$employee->getManNo().'<br>';
echo "Name: " .$employee->getName().'<br>';
echo "Position: " .$employee->getPosition().'<br>';
echo "Man_no: " .$employee1->getManNo().'<br>';
echo "Name: " .$employee1->getName().'<br>';
echo "Position: " .$employee1->getPosition().'<br>';
echo "Man_no: " .$employee2->getManNo().'<br>';
echo "Name: " .$employee2->getName().'<br>';
echo "Position: " .$employee2->getPosition();
