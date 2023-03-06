<?php
class Book {
    var $title;
    var $author;
    var $pages;
}
$book1 = new Book;
$book1->title = 'harry potter';
$book1->author = 'kk rowling';
$book1->pages = 400;

$book2 = new Book;
$book2->title = 'Train on riverside';
$book2->author = 'Ahmadou Hampate Ba';
$book2->pages = 200;

echo $book1->pages.'<br>';
echo $book2->authorgit.'<br>';
?>