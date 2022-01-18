<?php
require_once __DIR__ . "/Book.php";

class UsedBook extends Book {
  private $status;
  
  function __construct($_title,$_author, $_status)
  {
    parent::__construct($_title,$_author);
    $this->status = $_status;
    $this->discount = 40;
  }

  public function setDiscount($_discount){
    $this->discount += $_discount;

  }


}