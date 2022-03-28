<?php
class ExerciseString
{
    //Properties
    public $check1;
    public $check2;

    //Methods
    function getCheck1()
    {
        return $this->check1;
    }

    function getCheck2()
    {
        return $this->check2;
    }

    //Functions
    public function readFile($file)
    {
        $data = file_get_contents($file);
        return $data;
    }

    public function checkValidString($string, $keyWord1, $keyWord2) 
    {
        if ((strstr($string, $keyWord1) && !strstr($string, $keyWord2)) 
           || (!strstr($string, $keyWord1) && strstr($string, $keyWord2))
        ) {
            return true;
        }
        return false;
    }

    public function writeFile($string, $resultFile)
    {
        $result = fopen($resultFile, "w") or die("Unable to open file!");
        fwrite($result, $string);
        fclose($result);
    }
}

$keyWord1 = "book";
$keyWord2 = "restaurant";
$resultFile = "result_file.txt";

$object1 = new ExerciseString();
$data1 = $object1->readFile('file1.txt');
$data2 = $object1->readFile('file2.txt');
$count = substr_count($data2, ".");

$object1->check1 = $object1->checkValidString($data1, $keyWord1, $keyWord2);
var_dump($object1->getCheck1());    //bool(true);
$line1 = 'check1 là chuỗi "' . ($object1->getCheck1() == true ? "hợp lệ" : "không hợp lệ") . '"' . PHP_EOL;
echo "</br>";
$object1->check2 = $object1->checkValidString($data2, $keyWord1, $keyWord2);
var_dump($object1->getCheck2());    // bool(false)
$line2 = 'check2 là chuỗi "' . ($object1->getCheck2() == true ? "hợp lệ" : "không hợp lệ") 
          . '". Chuỗi có ' . $count . ' câu.' . PHP_EOL;

$string = $line1 . $line2;
$object1->writeFile($string, $resultFile);
