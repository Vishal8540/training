<?php
// $connect = mysqli_connect('localhost', 'root', '', 'school');
// Table from Url 

// $no = 10;
// $table=$_GET['table'];
// for($i=1; $i<=$no; $i++){
// echo  $i*$table;
// echo  "<br>";
// }
// If Else Condition

// $animal = $_GET['name'];
// 
// $animalsList = [
//     "Dog","Horse","Tiger","Parrot","Swan",
// ];
// if(in_array($animal,$animalsList)){
//  echo "This is Correct";
// }else{
//     echo "this is not Animal";
// }


//Odd Even Checker

// $number = $_GET['number'];
// if(is_double($number/2)){
//     echo "Odd Number";
// }else{
//     echo "Even Number";
// }

// $name = $_GET['name'];
// $email = $_GET['email'];
// echo $name .',' .$email;
// $query = mysqli_query($connect, "INSERT INTO user(name,email)VALUES(
//     '$name','$email'
// )");




// class Login{
//     public $email;
//     public $password;
    
//     public function __construct($email,$password){
//       $this->email = $email;
//       $this->password = $password;
//     }
    
//     public function message() {
//       return "Email:" . $this->email . " Password:". " " . $this->password;
//     }
//   }
  
  
//   $user = new Login("Sunil@gmail.com", "123456789");
//   if (str_ends_with($user->email,"@gmail.com")) {
//    echo "Correct email";
//   }
//   else{
//     echo "Invalid Email";
//   }

$number = $_GET['number'];
if (strlen($number) != 10) {
 echo "Invalid Number";
}else{
    echo "Valid Number";
}
  
?>
