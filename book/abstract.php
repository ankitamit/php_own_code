<?php


abstract class BaseEmployee {

   protected $firstname;
   protected $lastname;

   public function __construct($f, $f1) {
    $this->firstname = $f;
    $this->lastname = $f1;
}
   public function getFullName() {
    return $this->firstname." ".$this->lastname;
} 

    private function ankit() {
}

   abstract public function getMonthlySalary(); 
}


interface abc {

}
 class FullTimeEmployee extends BaseEmployee implements abc {

   protected $annualSalary;

  
  

  public function getMonthlySalary() {
    return 5000;

}

} 


 class ContractEmployee  extends BaseEmployee {

   protected $hourlyRate;
   protected $totalHours;


   public function getMonthlySalary() {


    return 10000;
}

}


 class getEmployeeHere {


 public function getEmployeeDetail(BaseEmployee $b) {

   return $b->getMonthlySalary(); 
}


}

$fullTime  = new FullTimeEmployee('fulltime','employee');


$employee = new getEmployeeHere();

print_r($employee->getEmployeeDetail($fullTime));
die;

$contact = new ContractEmployee('contract','employee');


print_r($contact->getFullName());

echo "\n\n";

print_r($fullTime->getFullName());






