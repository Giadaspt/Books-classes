<?php
require_once __DIR__ . "/classes/Book.php";
require_once __DIR__ . "/classes/UsedBook.php";
require_once __DIR__ . "/classes/Manual.php";

$new_book = new Book("The clean Code", "Stefano Corradi");
$new_book->setDiscount(10);
$new_book->setPrice(29.99);

var_dump($new_book);

$used_book = new UsedBook("Il fu Mattia Pascal", "Luigi Pirandello", "ottime condizioni");
 $used_book ->setDiscount(12);
$used_book ->setPrice(40.00);
var_dump($used_book);

$new_manual = new Manual("Sistemi e reti", "Giada Saputo");
var_dump($new_manual);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h2>
    <?php echo $new_book->getTitle() ?>
  </h2>
  <h2>
    <?php echo $new_book->getAuthor() ?>
  </h2>

  <p>
    Prezzo di copertina:
    <?php echo $new_book->getPrice() ?>
  </p>
  <p>
    Sconto:
    <?php echo $new_book->getDiscount() ?> %
  </p>
  <p>
    Total:
    <?php echo $new_book->getFinalPrice() ?> 
  </p>
  <!--  -->
  <h2>
    <?php echo $used_book->getTitle() ?>
  </h2>
  <h2>
    <?php echo $used_book->getAuthor() ?>
  </h2>

  <p>
    Prezzo di copertina:
    <?php echo $used_book->getPrice() ?>
  </p>
  <p>
    Sconto:
    <?php echo $used_book->getDiscount() ?> %
  </p>
  <p>
    Total:
    <?php echo $used_book->getFinalPrice() ?> 
  </p>
  
</body>
</html>