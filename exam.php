//例外処理

function division ($num1, $num2){
    return $num1/ $num2;
}
echo division (4,2); //2

//$num2に0がきたらはじく
function division ($num1, $num2){
    if ($num2===0){
        return "0は指定できません";
    }else{
            return num1/num2;
        }
    }

//例外処理スタイルで書くと↓↓

function division ($num, $num2){
    try{
        if ($b===0){
            throw new Expection ("can not use 0");
        }
        return $num1/ $num2;
    }catch (Exception $e){
        return $e->getMessage();
    }
}

//throwでexceptionというインスタンス化したものをcatchに投げています
//Exception はくらすなのでcatchのほうで$はくらすなのでcatchのほうで$eというものに格納
//そのあとgetMessage()というメソッドを使うことで、Exceptionをインスタンスするときに
//引数に入れた値を取得することができます。

<?php
// TODO: 名前空間Animals内に、クラスDogを定義し、プロパティ$nameとメソッドbarkを持つようにコードを書いてください。
?>
nameplace Animals ;

class Dog{
    public $name;
    public function bark(){
        echo "woof";
    }
}
//使用例
$dog=new Dog();
$dog ->name ="Buddy";
$dog->bark(); //woof

//例外処理を使って、関数 divide を定義し、引数として与えられた二つの数を割り算して返すが、ゼロで割ろうとした場合に例外を投げ、
//エラーメッセージ "Cannot divide by zero" を表示するコードを書いてください。

function divide ($num1,$num2){
    try {
        if ($num2===0){
            throw new Exception ("Cannot divide by zero");
        }
        return $num1/$num2;
    }catch (Exception $e){
        echo $e-> getMessage();
    }
}

class User{
  //property
  public $name;

  //constructor
  public function __construct($name){
    $this->name = $name;
  }

  //method
  public function sayName(){
    echo "Hello $this->name !";
  }
}

//↑のクラス継承
//上のクラス継承してSpecialUserクラスを作る

class User {
  public $name;

  public function __construct($name){
    $this->name = $name;
  }

  public function sayHi(){
    echo "Hello $this->name !";
  }
}
class SpecialUser extends User{
    public function saySpecialHi(){
        echo "i am Special $this-> name";
    }
}

//SpecialUserをインスタンスする際も
$junya= new SpecialUser("jyunya");

//userクラスのsayhiメソッドをspecialuserclassでも書くとどうなる？

class User {
  public $name;

  public function __construct($name){
    $this->name = $name;
  }

  public function sayHi(){
    echo "Hello $this->name !";
  }
}

class SpecialUser extends User {
  public function sayHi(){
    echo "I am Special $this->name";
  }
}
$junya = User("junya"); //Userクラス
$kono = SpecialUser("kono"); //SPUserクラス

$junya->sayHi(); // Hello junya
$kono->sayHi(); // I am Special kono

//同じメソッドなのに、スペシャルなkonoくんとパンピなjunyaでは挙動が違います。
//意味:上書きされたOverride

//上書きしてほしくないときは final

class User {
  public $name;

  public function __construct($name){
    $this->name = $name;
  }

  final public function sayHi(){
    echo "Hello $this->name !";
  }
}

class SpecialUser extends User {
  public function sayHi(){
    echo "I am Special $this->name";
  }
}

//static
//クラスをインスタンス化しなくても塚悦ようにする仕組み

//抽象クラス:他のクラスに継承されることが前提としたクラスで、インスタンス生成不可
//抽象クラスのメリットは開発のルールを作ることができる

<?php
  abstract class SubUser { //抽象クラス
    public $name = "";
    abstract public function greeting();
  }

  class JapaneseUser extends SubUser {
    function greeting() {
      echo "こんにちは。私の名前は" . $this->name . "です。";
    }
  }

  class AmericanUser extends SubUser {
    function greeting() {
      echo "Hello! My name is " . $this->name , ".";
    }
  }
  
  $japanese = new JapaneseUser();
  $japanese->name = "山田太郎";
  $japanese->greeting();
  echo "
";
  $american = new AmericanUser();
  $american->name = "John";
  $american->greeting();
?>


//interface

<?php
// TODO: インターフェースShapeを定義し、メソッドcalculateAreaを持つようにしてください。
// また、クラスCircleを定義し、Shapeインターフェースを実装し、プロパティ$radiusを持つようにして、メソッドcalculateAreaで円の面積を計算して返すコードを書いてください。
?>
interface Shape{
    public  function caluculate(){
    }
    class Circle  implements Shape{
        public $radius;
        public function calculateArea(){
            return pi()*$this -> redius*$this->$redius;
        }
    }
    $circle=new Circle();
    $circle ->redius=5;
    echo $circle->calculateArea(); //78.54
}

<?php
// TODO: クラスPersonを定義し、プロパティ$nameと$age、メソッドgreetを持つようにコードを書いてください。
class Person {
    public $name;
    public $age;

    public function greet (){
        echo "hello , my name is $this->name and I am $this->age years old";
    }
}
?>
//外部ファイルの読み込み
//function.php ファイルがあるとする

function hello(){
    echo "hello";
}

require "function.php";
require_once "function.php";
include "function.php";
include_once "function.php";


?>

<?php
// TODO: 名前空間Fruits内に、クラスAppleを定義し、プロパティ$colorとメソッドgetColorを持つようにコードを書いてください。
// また、Fruits名前空間内でOrangeクラスを定義し、プロパティ$tasteとメソッドgetTasteを持つようにコードを書いてください。

nameplace Fruits{
    class Aplle{
        public $color;
        public function getColor (){
            return $this->color;
        }
    }
    class Orange{
        public $taste;
        public function getTaste(){
            return $this->taste;
        }
    }
//使用例
$apple=new Apple();
$apple ->color "Red";
echo $apple-> getColor(); //Red
}

$orange= new Orange();
$orange->taste "sweet";
echo $orange->getTaste(); //sweet


?>


<?php
// TODO: 例外処理を使って、関数divideNumbersを定義し、引数として与えられた二つの数を割り算して返すが、ゼロで割ろうとした場合にInvalidArgumentExceptionをスローし、エラーメッセージ"Cannot divide by zero"を表示するコードを書いてください。
?><?php
function divideNumbers($num1, $num2) {
    try {
        if ($num2 === 0) {
            throw new InvalidArgumentException("Cannot divide by zero");
        }
        return $num1 / $num2;
    } catch (InvalidArgumentException $e) {
        echo $e->getMessage();
    }
}

// 使用例
divideNumbers(10, 2); // 出力: 5
divideNumbers(8, 0); // 出力: Cannot divide by zero
?>

<?php
// TODO: クラスRectangleを定義し、プロパティ$widthと$height、メソッドcalculateAreaを持つようにコードを書いてください。
class Rectangle {
    public $width;
    public $height;
    
    public function calculateArea
}


?>
<?php
// TODO: 関数isEvenを定義し、引数として与えられた数が偶数ならばtrue、奇数ならばfalseを返すコードを書いてください。

function isEven($num){
    return $num % 2==0;
}

$result1= isEven(4);
$result2= isEven(7);
echo $result1; //true
echo $result2; //false


?>

<?php
function division($num1,$num2){
  try {
    if($b === 0){
      throw new Exception("can not use 0");
    }
    return $num1 / $num2;
  } catch (Exception $e) {
    return $e->getMessage();
  }
}

divition (10,2);
?>

<?php
function divideNumbers($num1, $num2) {
    try {
        if ($num2 === 0) {
            throw new InvalidArgumentException("Cannot divide by zero");
        }
        return $num1 / $num2;
    } catch (InvalidArgumentException $e) {
        echo $e->getMessage();
    }
}

// 使用例
divideNumbers(10, 2); // 出力: 5
divideNumbers(8, 0); // 出力: Cannot divide by zero
?>
<?php
// TODO: クラスRectangleを定義し、プロパティ$widthと$height、メソッドcalculateAreaを持つようにコードを書いてください。
class Rectangle {
    public $width;
    public $height;
    
    public function calculateArea
}


?>
<?php
// TODO: 関数isEvenを定義し、引数として与えられた数が偶数ならばtrue、奇数ならばfalseを返すコードを書いてください。

function isEven($num){
    return $num % 2==0;
}

$result1= isEven(4);
$result2= isEven(7);
echo $result1; //true
echo $result2; //false


?>

<?php
function division($num1,$num2){
  try {
    if($b === 0){
      throw new Exception("can not use 0");
    }
    return $num1 / $num2;
  } catch (Exception $e) {
    return $e->getMessage();
  }
}

divition (10,2);
?>

<?php
function divideNumbers($num1, $num2) {
    try {
        if ($num2 === 0) {
            throw new InvalidArgumentException("Cannot divide by zero");
        }
        return $num1 / $num2;
    } catch (InvalidArgumentException $e) {
        echo $e->getMessage();
    }
}

// 使用例
divideNumbers(10, 2); // 出力: 5
divideNumbers(8, 0); // 出力: Cannot divide by zero
?>


<?php
// TODO: インターフェースLoggerを定義し、メソッドlogを持つようにしてください。
// また、クラスFileLoggerを定義して、Loggerインターフェースを実装し、ファイルにログメッセージを書き込むメソッドwriteToFileを追加してください。

<?php
interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    public function log($message) {
        $this->writeToFile($message);
    }

    private function writeToFile($message) {
        // ファイルにログメッセージを書き込む処理
        file_put_contents('log.txt', $message . PHP_EOL, FILE_APPEND);
    }
}

// 使用例
$fileLogger = new FileLogger();
$fileLogger->log("This is a log message.");
?>

?>


