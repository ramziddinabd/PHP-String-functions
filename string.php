<?php
# №1 script to transform a string all uppercase letters
print(strtoupper("tashkent is the capital of uzbekistan"))."<br>";
//script to transform a string all lowercase letters
print(strtolower("TASHKENT IS THE CAPITAL OF UZBEKISTAN"))."<br>";
//script to  make a string's first character uppercase
print(ucfirst("tashkent is the capital of uzbekistan"))."<br>";
//script to  make a string's first character of all the words uppercase
print(ucwords("tashkent is the capital of uzbekistan"))."<br>";


# №2 script to split the following string 
$some_text = '082307'; 
echo $some_text . "<br>"; 
echo substr(chunk_split($some_text, 2, ':'), 0, -1). "<br>";


# №3 script to check whether a string contains a specific string
$some_text = 'The quick brown fox jumps over the lazy dog.';
if (strpos($some_text,'jumps') !== false) 
{
    echo 'The specific word is present.';
}
else
{
    echo 'The specific word is not present.';
}
echo "<br>";


# №4 script to convert the value of a PHP variable to string
$x =  20;
$str1 = (string)$x;
if ($x === $str1) 
{
  echo "They are the same"."<br>";
}
else
{
echo "They are not same"."<br>";
}

# №5 script to extract the file name from the following string
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."<br>"; // "index.php"


# №6 script to extract the user name from the following email ID
$mailid  = 'ramziddinabd@gmail.com';
$user = strstr($mailid, '@', true);
echo $user."<br>";

# №7 script to get the last three characters of a string
$mailid1 = 'ramziddinabd@gmail.com';
echo substr($mailid1, -3)."<br>";


# №8 script to format values in currency style
$value1 = 65.45;
$value2 = 104.35;
echo sprintf("%.2f + %.2f = %1.2f", $value1,$value2, $value1+$value2)."<br>";

# №9 script to generate simple random password [witout using rand() function] from a given string
function password_generate($leng) {
    $data = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
    return substr(str_shuffle($data), 0, $leng);
};
echo password_generate(9)."<br>";


# №9 script to replace the first 'the' of the following string with 'That'. 
$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 1)."<br>";


?>