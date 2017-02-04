<?php
include 'class.book_class.php';

$efnafraedi = new novel("efnafraedi",2500,"höfundur");

echo $efnafraedi->getPublisher();
echo "<br>";
echo $efnafraedi->getTitle();
echo "<br>";
echo $efnafraedi->getPrice();
echo "<br><br>";
$staerdfraedi = new novel("Staerdfraedi",4000,"höfundur");
echo $staerdfraedi->getPublisher();
echo "<br>";
echo $staerdfraedi->getTitle();
echo "<br>";
echo $staerdfraedi->getPrice();
echo "<br><br>";
$islenska = new novel("Íslenska",2500,"höfundur");
echo $islenska->getPublisher();
echo "<br>";
echo $islenska->getTitle();
echo "<br>";
echo $islenska->getPrice();

/*
$book = new Book(1,4);

echo $book->getPrice();

$book->setPrice(7);

echo "<br>";
echo $book->getPrice();

$novel = new Novel(1,3,5);

echo "<br>";

echo $novel->getPublisher();

echo "<br>";
echo $novel->getTitle();
echo "<br>";
$novel->setTitle('test');
echo $novel->getTitle();
//------------------------
echo "<br>";


$smallNovel = new smallNovel(1);

echo $smallNovel->getLength();

echo "<br>";

$novelLength = new NovelLength(1,3);

echo "<br>";
echo $novelLength->getWidth();
*/
?>