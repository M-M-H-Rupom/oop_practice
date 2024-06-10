<?php
// class fruit{
//     public $f_fruit_name;
//     public function f_fruit($f_name){
//         $this->f_fruit_name = $f_name;
//     }
//     public function f_name_show(){
//         return $this->f_fruit_name ;
//     }
// }
// $f_fruit = new fruit();
// $f_fruit->f_fruit('banana');
// var_dump($f_fruit->f_name_show());
// echo $f_fruit->f_name_show();

// contructor
// class fruit{
//     public $a_fruit;
    // public $show_nm;
//     public function __construct($name){
//         $this->a_fruit = $name;
//     }
//     public function s_fruit(){
//         return $this->a_fruit;
//     }
// }
// $b_fruit = new fruit('apple');
// var_dump($b_fruit);
// echo $b_fruit->s_fruit();

// destructor 
// class car{
//     public $car_name; 
//     public function __construct($carName){  // its called automatically when create a object
//         $this->car_name = $carName;
//     }
//     public function __destruct(){   //its called automayically when the script is end function
//         echo $this->car_name;
//     }
// }
// new car('Audi');

// access modifier and inheritence 
// class car{
//     public $car_name ;  // access from everywhere
//     private $car_model;   //privet property only be access in this class 
//     protected $car_color;   //protected property can access this class and derived class inheritance class 
//     public function set_name($name){
//         $this->car_name = $name;
//     }
//     public function set_color($color){
//         $this->car_color = $color;
//     }
//     private function set_model($model){
//         $this->car_model = $model;
//     }
// }
// class latest_car extends car{
//     public function car_details(){
//         return $this->car_color;
//     }
// }
// $car_info = new car();
// $car_info->set_name('Ferrari');
// $car_info->set_color('Red');
// $latestCar = new latest_car();
// $latestCar->set_color('Red');
// echo $latestCar->car_details();

// echo $car_info->car_name;
// echo $car_info->car_color;

// abstract class 
// abstract class parent_class{
//     public $city;
//     abstract public function city_name($city_n);
// }
// class child_class extends parent_class{   
//     public function city_name($city_n){
//         return $this->city = $city_n;
//     }
// }
// $city_info = new child_class();
// $city_info->city_name('Rangpur');
// echo $city_info->city_name('Rangpur');

// interface 
// interface animal{
//     public function sound();
//     // public function gender();
// }
// class cow implements animal{
//     public function sound(){
//         echo 'hamba';
//     }
// }
// class goat implements animal{
//     public function sound(){
//         echo 'mewy';
//     }
// }
// class sheep implements animal{
//     public function sound(){
//         echo 'vey';
//     }
// }

// $cow_sound = new cow();
// $goat_sound = new goat();
// $sheep_sound = new sheep();
// // $cow_sound->sound();
// $animal_sound = [$cow_sound,$goat_sound,$sheep_sound];
// foreach($animal_sound as $a_sound){
//     $a_sound->sound(); 
//     echo '<br>';
// }

// traits 
// trait massage_1{
//     public function massage_1(){
//         echo "this is massage one ";
//     } 
//     public function massage_1_another(){
//         echo 'this is massage one another';
//     }
// }
// trait massage_2{
//     public function massage_2(){
//         echo 'this is massage two';
//     }
// }
// trait massage_3{
//     public function massage_3(){
//         echo 'This is massage three';
//     }
// }
// class all_massage{
//     use massage_1;
//     use massage_2;
//     use massage_3;
// }
// $show_massage = new all_massage();
// $show_massage->massage_1();
// $show_massage->massage_2();

// static method and properties 
// class flower{
//     public static $fl_name = 'Rose';
//     public static $another_name = 'Sunflower';
//     public static function flower_name(){
//         echo 'this is a flower name';
//     }  
//     public static function another_flower(){
//         echo "this is a another flower";
//     }
// }
// flower::flower_name();
// $sun_flower = flower::$another_name;
// echo $sun_flower;
