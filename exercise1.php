<?php
    function checkValidString($s) 
    {
        $str1 = "book";
        $str2 = "restaurant";
        if (((strstr($s, $str1) !== false) && (strstr($s, $str2) === false)) || 
        ((strstr($s, $str1) === false) && (strstr($s, $str2) !== false))) {
            return true;
        }
        return false;
     }

    //Bai 1
    var_dump(checkValidString("What an awful day"));    //return false
    echo "</br>";
    var_dump(checkValidString("Turn right over here. The bookstore is on your left"));    //return true
    echo "</br>";
    var_dump(checkValidString("You can't fire me. I own these restaurants"));    //return true
    echo "</br>";
    var_dump(checkValidString("I have dinner in restaurant. After that go to bookstore"));    // return false
    echo "</br>";

    //Bai 2
    function checkString($file) 
    {
        $s = file_get_contents($file);
        if (checkValidString($s)) {
            echo "Chuỗi hợp lệ. Chuỗi bao gồm ".substr_count($s,".")." câu";
        } else {
            echo "Chuỗi không hợp lệ";
        }
    }
    echo "</br>";
    checkString("file1.txt");    //Chuỗi hợp lệ. Chuỗi bao gồm 4 câu
    echo "</br>";
    checkString("file2.txt");    //Chuỗi không hợp lệ