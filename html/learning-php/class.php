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
            //DOES THIS MEAN EXCEPTION IS A CLASS????
            throw new Exception('Try a larger value<br>');
        }
        
        $this->value=$value;
    }
    
    public function getValue() {
        return $this->value;
    }
    
}

class Score extends Test {
    
    public $value;
    public function printValue() {
        echo $this->value. "<br><br>" ;
    }
}

class User {
    //private $password="pass";
    public $username;
    
    public function __construct($username) {
        $this->username=$username;
        //$this->Members->addMember($this->username);
    }
    
    public function getUsers() {
        var_dump($this->users);
    }
    
    
//    public function user_login() {
//        echo<<<HTML
//        <method = "POST">
//            Password: <input type = "password" name = "pass" />
//            <input type = "submit" />
//        </form>
//HTML;
//        if($_POST["pass"]==$password) {
//            echo "You have logged in succesfully";
//        }        
//        else {
//            throw new Exception('Wrong password, try again');
//        }
//    }
}

class Members {
    public $members=[];
    
    public function addMember(User $username) {
        $this->members[]=$username;
    }
    
    public function getMembers() {
        var_dump($this->members);
    }
}
$try1=new Test ('OOP', 'how to learn OOP');

echo $try1->title. "<br>";
echo $try1->description. "<br>";
try {
    $try1->setValue(4);
} 

catch (Exception $ex) {
    echo $ex->getMessage();
}

//$try1->value=10;
echo $try1->getValue()."<br><br>";

//(new Score('Inheritance test', 'how to learn inheritance'))->printValue();
$score1=new Score('Inheritance test', 'how to learn inheritance');
echo $score1->title."<br>";
echo $score1->description."<br>";

try {
    $score1->setValue(4);
} 

catch (Exception $ex) {
    echo $ex->getMessage();
}

//SINCE ITS PUBLIC IN SUBCLASS->STILL ACCESSIBLE!!
$score1->value=5;
$score1->printValue();

//$users=['rasko', 'admin', 'bot'];
//echo<<<HTML
//<method = "POST">
//         Username: <input type = "text" name = "user" />
//         <input type = "submit" />
//      </form>
//HTML;
//$_POST["user"]='rasko';
//if(isset($_POST["user"])) {
//    if(in_array($_POST["user"], $users)) {
//        $position=array_search($_POST["user"], $users);
//        echo "<br><br>$position<br><br>";
//        $user1=new User;
//        try {
//        $user1->user_login();
//        } 
//        catch (Exception $ex) {
//            echo $ex->getMessage();
//        }
//    } 
//    else {
//        echo 'User does not exist';
//    }
//} 
$list=new Members;

$user1=new User("Ana Zamos");
$list->addMember($user1);

$user2=new User("Rasko Lazic");
$list->addMember($user2);
$list->getMembers();