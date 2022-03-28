<?php
//Tạo trait
trait Active
{
    public function defindYourSelf()
    {
        return get_class($this);
    }
}

//Tạo class Country
abstract class Country
{
    use Active;

    protected $slogan;
    
    //Methods
    public function setSlogan($slogan)
    {
        return $this->slogan = $slogan;
    }
    
    public function getSlogan()
    {
        return $this->slogan;
    }

    abstract public function sayHello();
}

//Tạo interface Boss
interface Boss
{
    public function checkValidSlogan($string, $keyWord1, $keyWord2);
}

//Tạo class EnglandCountry
class EnglandCountry extends Country implements Boss
{
    
    public function sayHello()
    {
        return "Hello";
    }
    
    public function checkValidSlogan($string, $keyWord1, $keyWord2)
    {
        $check = strtolower($string);
        if (strpos($check, $keyWord1) !== false || strpos($check, $keyWord2) !== false) {
            return true;
        }
        return false;
    }
}

//Tạo class VietnamCountry
class VietnamCountry extends Country implements Boss 
{
    public function sayHello()
    {
        return "Xin chào";
    }
    public function checkValidSlogan($string, $keyWord1, $keyWord2)
    {
        $check = strtolower($string);
        if (strpos($check, $keyWord1) !== false && strpos($check, $keyWord2) !== false) {
            return true;
        }
        return false;
    }
}

$englandCountry = new EnglandCountry();
$vietnamCountry = new VietnamCountry();

$englandCountry->setSlogan("England is a country that is part of the United Kingdom. It shares land borders with Wales to the west and Scotland to the north. The Irish Sea lies west of England and the Celtic Sea to the southwest.");
$vietnamCountry->setSlogan("Vietnam is the easternmost country on the Indochina Peninsula. With an estimated 94.6 million inhabitants as of 2016, it is the 15th most populous country in the world.");

echo $englandCountry->sayHello();    //Hello
echo "</br>";
echo $vietnamCountry->sayHello();    //Xin chào
echo "</br>";

$keyWord1 = "england";
$keyWord2 = "english";
$string1 = $englandCountry->getSlogan();
var_dump($englandCountry->checkValidSlogan($string1, $keyWord1, $keyWord2));    //bool(true)
echo "<br>";

$keyWord1 = "vietnam";
$keyWord2 = "hust";
$string2 = $vietnamCountry->getSlogan();
var_dump($vietnamCountry->checkValidSlogan($string2, $keyWord1, $keyWord2));    //bool(false)
echo "<br>";

//In ra tên class
echo 'I am ' . $englandCountry->defindYourSelf();
echo "<br>";
echo 'I am ' . $vietnamCountry->defindYourSelf();
