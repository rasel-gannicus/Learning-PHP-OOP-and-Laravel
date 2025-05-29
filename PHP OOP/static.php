<?php 
class Profile {
  public $user_name = "Rasel" ;
  public $user_email = "rasel@gmail.com";
  public static $profession = 'Marin Engineer' ; 
  public static $age = 31 ; 

  public static function getName($userName) {
    echo ("User Name is : ".$userName) ;
    echo "</br> ";
    echo "His age is : ".self::$age ; // -- static method এর যদি আমরা ক্লাস থেকে কোন প্রোপার্টি এক্সেস করতে চাই তবে সেটাও static হতে হবে এবং এইভাবে কল করতে হবে। 
  }
}

Profile::getName('Shafiqul islam');
echo '</br>' ;
echo "His profession is : ".Profile::$profession;

// output : 
// User Name is : Shafiqul islam
// His age is : 31
// His profession is : Marin Engineer

?>