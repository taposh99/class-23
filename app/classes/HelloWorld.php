<?php


namespace App\classes;


class HelloWorld{
    public $message;
    public $firstname;
    public $lastname;
    public $x;
    public $y;
    public function __construct($data)
    {
       // $this->message='hello world';
        $this->message=$data;
        $this->x=10;
        $this->y=20;
    }
    public function index(){
//        echo $this->message;
//        echo $this->firstname='sani'.'<br>'.$this->lastname='haque';
        echo $this->x + $this->y;
        echo '<br>';
        echo $this->x - $this->y;
        echo '<br>';
        echo $this->x * $this->y;
        echo '<br>';
        echo $this->x / $this->y;
        echo '<br>';
        echo $this->x % $this->y;
        echo '<br>';
        echo $this->x ** $this->y;
    }


}