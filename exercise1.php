<?php
    function checkValidString($str, $str1, $str2) 
    {
        if (((strstr($str, $str1) !== false) && (strstr($str, $str2) === false))
           || ((strstr($str, $str1) === false) && (strstr($str, $str2) !== false))
        ) {
            return true;
        }
        return false;
     }

    $str1 = "book";
    $str2 = "restaurant";
    
    //Bai 1
    var_dump(checkValidString("What an awful day", $str1, $str2));    //return false
    echo "</br>";
    var_dump(checkValidString("Turn right over here. The bookstore is on your left", $str1, $str2));    //return true
    echo "</br>";
    var_dump(checkValidString("You can't fire me. I own these restaurants", $str1, $str2));    //return true
    echo "</br>";
    var_dump(checkValidString("I have dinner in restaurant. After that go to bookstore", $str1, $str2));    // return false
    echo "</br>";

    //Bai 2
    function checkString($file, $str1, $str2) 
    {
        $str = file_get_contents($file);
        if (checkValidString($str, $str1, $str2)) {
            echo "Chuỗi hợp lệ. Chuỗi bao gồm " . substr_count($str, ".") . " câu";
        } else {
            echo "Chuỗi không hợp lệ";
        }
    }
    echo "</br>";
    checkString("file1.txt", $str1, $str2);    //Chuỗi hợp lệ. Chuỗi bao gồm 4 câu
    echo "</br>";
    checkString("file2.txt", $str1, $str2);    //Chuỗi không hợp lệ
    