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

    function getCheck2 ()
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
        } else {
            return false;
        }
    }

    public function writeFile()
    {
        $resultFile = fopen("result_file.txt", "w") or die("Unable to open file!");
        if ($this->check1 == true) {
            fwrite($resultFile, "check1 là chuỗi hợp lệ\n");
        }  else {
            fwrite($resultFile, "check1 là chuỗi không hợp lệ\n");
        }

        if ($this->check2 == true) {
            fwrite($resultFile, "check2 là chuỗi hợp lệ\n");
        }  else {
            fwrite($resultFile, "check2 là chuỗi không hợp lệ gao gồm " 
                   . substr_count(file_get_contents("file2.txt"),".") . " câu");
        }
        fclose($resultFile);
    }
}

$keyWord1 = "book";
$keyWord2 = "restaurant";

$object1 = new ExerciseString();
$data1 = $object1->readFile('file1.txt');
$data2 = $object1->readFile('file2.txt');

$object1->check1 = $object1->checkValidString($data1, $keyWord1, $keyWord2);
var_dump($object1->getCheck1());    //bool(true);
echo "</br>";

$object1->check2 = $object1->checkValidString($data2, $keyWord1, $keyWord2);
var_dump($object1->getCheck2());    // bool(false)

$object1->writeFile();