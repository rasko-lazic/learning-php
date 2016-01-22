<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title="Class of classes"; 

class Test {
    public $title;
    public $description;
    protected $value;
    
    public function __construct($title, $description) {
        $this->title=$title;
        $this->description=$description;
    }
    
    public function setValue($value) {
        if($value<10) {
            throw new Exception('Try a larger value');
        }
        $this->value=$value;
    }
    
    public function getValue() {
        return $this->value;
    }
    
}

class Score extends Test {
    
    public $value=4;
    public function printValue() {
        echo $this->value;
    }
}
$try1=new Test ('OOP', 'how to learn OOP');

echo $try1->title. "<br>";
echo $try1->description. "<br>";

$try1->setValue(16);

//$try1->value=10;

echo $try1->getValue()."<br><br>";

(new Score('Inheritance test', 'how to learn inheritance'))->printValue();
//$score1=new Score('Inheritance test', 'how to learn inheritance');
//echo $score1->title."<br>";
//echo $score1->description."<br>";


$score1->value=12;

$score1->printValue();




