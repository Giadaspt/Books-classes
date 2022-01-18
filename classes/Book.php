<?php

class Book {
  private $title;
  private $author;
  private $editor;
  private $pages_numb;
  protected $discount = 0;
  private $price;

  public function __construct($_title,$_author )
  {
    $this->title = $_title;
    $this->author = $_author;
  }

  public function setTitle($_title){
    $this->title = $_title;
  }
  public function setAuthor($_author){
    $this->author = $_author;
  }
  public function setDiscount($_discount){
    $this->discount = $_discount;
  }
  public function setPrice($_price){
    $this->price = $_price;
  }


  public function getTitle(){
    return $this->title;
  }
  public function getAuthor(){
    return $this->author ;
  }
  public function getDiscount(){
    return $this->discount;
  }
  public function getPrice(){
    return $this->price ;
  }

  public function getFinalPrice(){
    $finalPrice = $this->price - (($this->price * $this->discount) / 100);
    return number_format($finalPrice, 2, ",", "");
  }


}