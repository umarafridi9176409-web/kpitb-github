<?php 
//task1
// echo "Hello php"; 

//task2
// $name = "John";
// $age = 20;
// $city = "Lahore";
// echo "$name is $age years old and lives in $city.";


//task3
// $int = 10;
// $float = 10.5;
// $string = "Hello";
// $bool = true;
// var_dump($int, $float, $string, $bool);


//task4
// $php = "Awesome";
// echo strtoupper($php) . "\n";
// echo str_replace('Awesome', 'Powerful', $php);

//task5
// $isLoggedIn = true;
// if ($isLoggedIn) {
//     echo "Welcome User";
// } else {
//     echo "Please login first";
// }

//task6
// $marks = 75;
// if ($marks >= 80) {
//     echo "A";
// } elseif ($marks >= 60) {
//     echo "B";
// } else {
//     echo "C";
// }

//task7
// $day = 3;
// switch ($day) {
//     case 1: echo "Monday"; break;
//     case 2: echo "Tuesday"; break;
//     case 3: echo "Wednesday"; break;
   
// }

//task8
// $level = 'Intermediate';
// match ($level) {
//     'Beginner' => print("Level: Beginner"),
//     'Intermediate' => print("Level: Intermediate"),
//     'Advanced' => print("Level: Advanced"),
// };

//task9

// for ($i = 1; $i <= 10; $i++) {
//     echo $i . " ";
// }

// $i = 1;
// while ($i <= 5) {
//     echo $i * 2 . " ";
//     $i++;
// }

//task10
// $indexed = array(1, 2, 3);
// $assoc = array("name" => "John", "age" => 20);
// foreach ($indexed as $val) {
//     echo $val;
// }
// foreach ($assoc as $key => $val) {
//     echo "$key: $val";
// }

//task11
// $students = [
//     ["name" => "John", "marks" => 70],
//     ["name" => "Jane", "marks" => 50]
// ];
// foreach ($students as $student) {
//     if ($student['marks'] > 60) {
//         echo $student['name'];
//     }
// }

//task12
// class Student {
//     public $name;
//     public $age;
//     function __construct($name, $age) {
//         $this->name = $name;
//         $this->age = $age;
//     }
//     function greet() {
//         echo "Hello, I am $this->name";
//     }
// }
// $stud = new Student("John", 20);
// $stud->greet();

//task13
//in this progrm constructor is included
// class Student {
//     public $name;
//     public $age;
//     function __construct($name, $age) {
//         $this->name = $name;
//         $this->age = $age;
//     }
//     function greet() {
//         echo "Hello, I am $this->name";
//     }
// }
// $stud = new Student("John", 20);
// $stud->greet();

//task14
// class Person {
//     public $name;
//     function __construct($name) {
//         $this->name = $name;
//     }
// }
// class Student extends Person {
//     public $age;
//     function __construct($name, $age) {
//         parent::__construct($name);
//         $this->age = $age;
//     }
// }

//task15
