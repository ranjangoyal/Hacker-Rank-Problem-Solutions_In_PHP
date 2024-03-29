<?php
abstract class Book
{
    
    protected $title;
    protected  $author;
    
     function __construct($t,$a){
        $this->title=$t;
        $this->author=$a;
    }
    abstract protected function display();
}

//Write MyBook class

class MyBook extends Book{

    function __construct($title, $author, $price){
    
        parent::__construct($title, $author);
        $this->price = $price;

    }//Constructor


    function display(){
    
        echo "Title: ".$this->title;
        echo "Author: ".$this->author;
        echo "Price: ".$this->price;
    
    }//display

}



$title=fgets(STDIN);
$author=fgets(STDIN);
$price=intval(fgets(STDIN));
$novel=new MyBook($title,$author,$price);
$novel->display();

?>