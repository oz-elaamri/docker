<?php

class car {
  private $matricule;


  public function __construct() {;
  }

  //GETTERS SETTERS
  public function getMatricule() {
    return $this->matricule;
  }

  public function setMatricule($value) {
    $this->matricule = $value;
  }

  //For Display
  public function render() {
    echo $this->getMatricule();
  }
}

$Renault = new car();
$Renault->setMatricule("B-765237653-D-76876347863");
 ?>


<h3><?= $Renault->render(); ?></h3>
