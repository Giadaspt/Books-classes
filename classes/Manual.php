<?php
require_once __DIR__ . "/Book.php";

class Manual extends Book {
  private $subject;

  public function setSubject($_subject){
    $this->subject = $_subject;
  }
  public function getSubject(){
    return $this->subject ;
  }
}